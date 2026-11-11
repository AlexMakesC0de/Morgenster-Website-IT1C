<div align="center">

# Morgenster Website (IT1C)

**A login and register page with an animated form outline, built in PHP, CSS and anime.js.**

![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![anime.js 3.2.1](https://img.shields.io/badge/anime.js-3.2.1-555)

</div>

A first-year project at NHL Stenden (class IT1C) for the Morgenster website. This repository holds the account page: one page that switches between a **Login** and a **Register** form, with a gradient line drawn around the form that slides to whichever field you are typing in.

## Features

- One PHP page for both forms. The `?form=register` query string switches to Register; anything else shows Login. The title, heading, link and help text change with it.
- Email and password fields, both required, with the form type sent along in a hidden field.
- An SVG outline animated with [anime.js](https://animejs.com): it moves to the email field, the password field or the submit button when each gets focus.

## Getting started

You need PHP installed.

```bash
git clone https://github.com/AlexMakesC0de/Morgenster-Website-IT1C.git
cd Morgenster-Website-IT1C
php -S localhost:8000
```

Then open `http://localhost:8000` (or `http://localhost:8000/?form=register`). anime.js is loaded from a CDN, so the animation needs an internet connection.

## Status

The page is front end only. The form posts to `submit.php`, which is not in this repository, so submitting does not log in or create an account yet.

## Project structure

```text
index.php              The login and register page
styles/style.css       Layout and styling
scripts/animation.js   Focus animations for the form outline
```

## License

This repository has no license file, so all rights are reserved by its authors.
