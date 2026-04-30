# haole.art — Site Readme

## File structure

```
haole-site/
├── index.php              Homepage slideshow
├── art.php                Main works (edit $works array)
├── art-studies.php        Studies — auto-scanned from art-studies-dir/
├── music.php              Music page
├── everything-else.php    Projects (edit $projects array)
├── about.php              About
│
├── includes/
│   ├── config.php         ← EDIT THIS to change site name, nav, year
│   ├── header.php         Shared header/nav
│   └── footer.php         Shared footer
│
├── css/main.css           All styles
├── js/main.js             Slideshow, lightbox, scroll-reveal
├── .htaccess              Apache: WebP, gzip, caching
│
├── compress.sh            Image compression script (run once after adding images)
│
├── index-slideshow/       Homepage slideshow images (drop files here)
├── art-dir/               Main works images
├── art-studies-dir/       Studies images (auto-scanned — just drop files in)
├── img/                   Misc images
└── ECE164_Project/        Op-amp project assets
```

---

## How to add a new artwork

**Main work** — edit `art.php`, add an entry to `$works`:
```php
[
  'file'   => 'my-new-painting.jpg',   // put file in art-dir/
  'title'  => 'My New Painting',
  'medium' => 'Oil on canvas',
  'year'   => 2025,
],
```

**Study / sketchbook** — just drop the image in `art-studies-dir/`. Done.

**Slideshow** — just drop the image in `index-slideshow/`. Done.

---

## Image compression

After adding new images, run from the site root:
```bash
chmod +x compress.sh
./compress.sh
```

This resizes anything over 1600px wide, re-encodes at quality 82,
and generates `.webp` sidecars. Originals are saved in `_originals/`.

Requires ImageMagick (`convert`) and optionally `cwebp`:
```bash
# Synology Package Center or via opkg:
sudo apt install imagemagick webp   # if using apt on DSM 7
```

---

## Synology / Apache deployment

1. Copy this folder to your web root (e.g. `/volume1/web/haole/`)
2. In DSM → Web Station, point your virtual host to that folder
3. Make sure PHP and mod_rewrite are enabled
4. Run `compress.sh` once on new images
5. Done — no build step, no npm, no dependencies

---

## Updating site info

Edit `includes/config.php` — change site name, nav items, etc.
The year in the footer auto-updates from `date('Y')`.
