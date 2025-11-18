# SIWS College — PHP Website

This repository contains a small, static PHP website for **SIWS College**.
It uses PHP includes for header/footer so it's ready for expansion.

## What is included
- `index.php` — main page (uses `includes/header.php` and `includes/footer.php`)
- `includes/` — header and footer partials
- `assets/style.css` — styles
- `Dockerfile` — to run with Docker
- `.gitignore` — common ignores

## Notes about GitHub
**GitHub Pages cannot run PHP.** If you push this repository to GitHub, the static files will be visible but PHP will not execute on GitHub Pages.

### Recommended deploy options
- **Render** or **Railway**: connect your GitHub repo and deploy using the provided `Dockerfile`.
- **Any PHP-enabled host** (Somee, 000webhost, InfinityFree) — upload files as-is.

## Quick local run (Docker)
```bash
# build
docker build -t siws_php_site .

# run
docker run --rm -p 8080:80 siws_php_site
# then open http://localhost:8080
```

## How to push to GitHub (quick)
```bash
git init
git add .
git commit -m "Initial PHP site for SIWS College"
# create repo on GitHub, then:
git remote add origin git@github.com:<your-user>/<your-repo>.git
git branch -M main
git push -u origin main
```

If you want, I can:
- create the GitHub repo for you (you'll need to authenticate and give a repo name), or
- push these files into an existing repo you own (you'd provide access),
- or prepare a ZIP so you can upload directly. 
