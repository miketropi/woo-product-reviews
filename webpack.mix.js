const mix = require('laravel-mix');

mix
  .js('./src/main.js', './dist/woo-product-reviews.bundle.js')
  .js('./src/admin.js', './dist/woo-product-reviews.admin.bundle.js')
  .sass('./src/scss/main.scss', 'css/woo-product-reviews.bundle.css')
  .sass('./src/scss/admin.scss', 'css/woo-product-reviews.admin.bundle.css')
  .setPublicPath('dist')
