# Bulma Frontend Preset for Laravel

**Package Versions**
 * 0.3   --> Laravel ^5.7
 * 0.2.2 --> Laravel ^5.5|^5.6

**Based on**
 * Font Awesome ^4.7
 * Bulma ^0.7

**Installation**
 * Install Package `composer require nevoxx/laravel-frontend-preset-bulma`
 * Install Preset `php artisan preset bulma` **or** `php artisan preset bulma-auth`
 * Update and rebuild assets `npm install && npm run dev`

**Addition Info**

Starting with Version 0.3 you need to use the flattened structure for the Laravel `resource` directory. 

E.g.: You must use `resources/sass/app.scss` instead of the old structure `resources/assets/sass/app.scss`.