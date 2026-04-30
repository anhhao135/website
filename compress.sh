#!/usr/bin/env bash
# ─────────────────────────────────────────────
# compress.sh — Smart image compression
# Requires: imagemagick (convert) and/or cwebp
#
# Usage:
#   ./compress.sh                 # compress all dirs
#   ./compress.sh art-dir         # compress one dir
#
# What it does:
#   • Resizes anything wider than MAX_W
#   • Re-encodes JPG/PNG at QUALITY
#   • Optionally creates .webp sidecars
#   • Skips files already smaller than MIN_BYTES
#   • Originals are preserved in _originals/ subfolder
# ─────────────────────────────────────────────

set -euo pipefail

MAX_W=1600       # max pixel width
QUALITY=82       # JPEG/WebP quality (0-100)
MIN_BYTES=50000  # skip files already under 50 KB
WEBP=true        # also output .webp sidecars?

DIRS=(
  "index-slideshow"
  "art-dir"
  "art-studies-dir"
  "img"
  "img/aboutMe"
)

# allow override from argument
if [[ $# -gt 0 ]]; then
  DIRS=("$@")
fi

require() {
  command -v "$1" &>/dev/null || { echo "⚠️  $1 not found — skipping WebP step"; return 1; }
}

HAVE_CONVERT=$(require convert && echo yes || echo no)
HAVE_CWEBP=$(require cwebp && echo yes || echo no)

compress_dir() {
  local DIR="$1"
  [[ -d "$DIR" ]] || { echo "  dir not found: $DIR"; return; }

  local ORIG="$DIR/_originals"
  mkdir -p "$ORIG"

  shopt -s nullglob
  for FILE in "$DIR"/*.{jpg,jpeg,JPG,JPEG,png,PNG,gif,GIF}; do
    local FNAME; FNAME=$(basename "$FILE")
    local SIZE; SIZE=$(stat -c%s "$FILE" 2>/dev/null || stat -f%z "$FILE")

    # skip small files
    if (( SIZE < MIN_BYTES )); then
      echo "  skip (small): $FNAME"
      continue
    fi

    echo "  compressing:  $FNAME"

    # backup original if not already done
    [[ -f "$ORIG/$FNAME" ]] || cp "$FILE" "$ORIG/$FNAME"

    if [[ "$HAVE_CONVERT" == "yes" ]]; then
      convert "$ORIG/$FNAME" \
        -resize "${MAX_W}x>" \
        -strip \
        -quality "$QUALITY" \
        -interlace Plane \
        "$FILE"
    fi

    if [[ "$WEBP" == true && "$HAVE_CWEBP" == "yes" ]]; then
      cwebp -q "$QUALITY" "$FILE" -o "${FILE%.*}.webp" -quiet
    fi

  done
}

echo "🖼  haole.art image compression"
echo "   MAX_W=${MAX_W}px  QUALITY=${QUALITY}  WEBP=${WEBP}"
echo ""

for D in "${DIRS[@]}"; do
  echo "📁 $D"
  compress_dir "$D"
done

echo ""
echo "✅ Done."
