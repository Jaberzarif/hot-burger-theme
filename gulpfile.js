const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
const concat = require('gulp-concat');
const terser = require('gulp-terser');
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const autoprefixer = require('autoprefixer');
const purgecss = require('gulp-purgecss');
const { src, series, parallel, dest, watch } = require('gulp');

const jsPath = 'js/*.js';
const cssPath = 'style/**/*.css';


function imgTask() {
  return src('style/img/*').pipe(imagemin()).pipe(gulp.dest('style/dist/img'));
}

function jsTask() {
  return src(jsPath)
    .pipe(sourcemaps.init())
    .pipe(concat('all.js'))
    .pipe(terser())
    .pipe(sourcemaps.write('.'))
    .pipe(dest('js'));
}

function cssTask() {
  return src(cssPath)
    .pipe(sourcemaps.init())
    .pipe(concat('style.min.css'))
    .pipe(postcss([autoprefixer(), cssnano()])) //not all plugins work with postcss only the ones mentioned in their documentation
    .pipe(sourcemaps.write('.'))
    .pipe(dest('style'));
}

function cssUnused() {
  return src(cssPath)
  .pipe(purgecss({
      content: ['*.php']
  }))
  .pipe(concat('unused.css'))
  .pipe(gulp.dest('style'));
}

function watchTask() {
  watch([cssPath, jsPath], { interval: 1000 }, parallel(cssTask, jsTask));
}

exports.cssTask = cssTask;
exports.jsTask = jsTask;
exports.imgTask = imgTask;
exports.cssUnused = cssUnused;
exports.default = series(
  parallel(imgTask, jsTask, cssTask),
  watchTask
);
