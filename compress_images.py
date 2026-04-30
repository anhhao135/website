"""
compress_images.py
  1. Convert any non-JPG image in images/ to JPEG (delete original).
  2. Compress any image over 2 MB down to ~2 MB at the highest quality that fits.

Requires Pillow:  pip install pillow
"""

from pathlib import Path
from PIL import Image

TARGET_BYTES  = 1.5 * 1024 * 1024   # compress down to ~1.5 MB
CONVERT_EXTS  = {".png", ".webp", ".gif", ".tiff", ".tif", ".bmp", ".jpeg"}
SEARCH_DIR    = Path(__file__).parent / "images"


def to_rgb(img: Image.Image) -> Image.Image:
    """Flatten any transparency onto white and return an RGB image."""
    if img.mode in ("RGBA", "LA", "P"):
        if img.mode == "P":
            img = img.convert("RGBA")
        bg = Image.new("RGB", img.size, (255, 255, 255))
        bg.paste(img, mask=img.split()[-1] if "A" in img.mode else None)
        return bg
    return img.convert("RGB")


def save_jpeg_at_target(img: Image.Image, path: Path, target: int) -> int:
    """Save img as JPEG, stepping down quality until under target bytes."""
    for quality in range(92, 59, -2):
        img.save(path, "JPEG", quality=quality, optimize=True, subsampling=0)
        size = path.stat().st_size
        if size <= target:
            return size
    return path.stat().st_size


total_converted = 0
total_compressed = 0
total_saved = 0

for path in sorted(SEARCH_DIR.rglob("*")):
    if not path.is_file():
        continue

    ext = path.suffix.lower()
    rel = path.relative_to(SEARCH_DIR)

    if ext not in CONVERT_EXTS | {".jpg", ".jpeg"}:
        print(f"  skip     {rel}  (unsupported type)")
        continue

    size = path.stat().st_size
    print(f"  scan     {rel}  ({size/1024/1024:.2f} MB)", end="", flush=True)

    # ── Step 1: convert non-JPG to JPG ──────────────────────────
    if ext in CONVERT_EXTS:
        try:
            img = to_rgb(Image.open(path))
        except Exception as e:
            print(f"  → SKIP ({e})")
            continue

        jpg_path = path.with_suffix(".jpg")
        img.save(jpg_path, "JPEG", quality=92, optimize=True, subsampling=0)
        path.unlink()
        path = jpg_path
        ext = ".jpg"
        new_size = path.stat().st_size
        print(f"  → converted ({new_size/1024/1024:.2f} MB)", end="", flush=True)
        total_converted += 1

    # ── Step 2: compress if over 2 MB ───────────────────────────
    size = path.stat().st_size
    if size <= TARGET_BYTES:
        print()
        continue

    try:
        img = Image.open(path).convert("RGB")
    except Exception as e:
        print(f"  → SKIP ({e})")
        continue

    new_size = save_jpeg_at_target(img, path, TARGET_BYTES)
    saved = size - new_size
    total_saved += saved
    total_compressed += 1
    print(f"  → compressed ({new_size/1024/1024:.2f} MB, saved {saved/1024:.0f} KB)", end="")
    print()

print(f"\nDone.  Converted: {total_converted}  "
      f"Compressed: {total_compressed}  "
      f"Total saved: {total_saved/1024/1024:.2f} MB")
