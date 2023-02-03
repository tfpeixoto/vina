var
gulp = require('gulp');
browserSync = require('browser-sync');
sass = require('gulp-sass');
imagemin = require('gulp-imagemin');
concat = require('gulp-concat');
rename = require('gulp-rename');
uglify = require('gulp-uglify-es').default;
purgecss = require('gulp-purgecss');

// CONSTANTES
const dir = {
  build: 'wp-content/themes/vina',
  node: 'node_modules',
  src: 'wp-content/themes/vina/gulp'
}

// BROWSER SYNC
gulp.task('browser-sync', function () {
  var files = [
    `${dir.build}/**/*.php`,
    `${dir.build}/assets/css/*.css`,
    `${dir.build}/assets/js/*.js`
  ];

  browserSync.init(files, {
    proxy: "http://localhost/vina",
    notify: true,
    stream: true,
    port: 3000
  });
});

// SASS
gulp.task('sass', function () {
  return gulp.src([`${dir.src}/scss/**/*.scss`])
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError)) // converter o Sass em CSS
    .pipe(gulp.dest(`${dir.src}/css`));
});

// PURGECSS
gulp.task('purgecss', ['sass'], function () {
  return gulp.src(`${dir.src}/css/*.css`)
    .pipe(purgecss({
      content: [`${dir.build}/**/*.php`],
      whitelist: ['far', 'fa', 'fas', 'fab', 'fa-clock', 'current-menu-item', 'grecaptcha-badge', 'modal', 'ekko-lightbox', 'modal-dialog', 'modal-backdrop'],
      whitelistPatterns: [/fa/, /^ekko/, /^modal/, /^wp\-/, /^is\-/],
      safelist: {
        standard: [],
        deep: [/input/],
        greedy: [/formulario/]
      }
    }))
    .pipe(gulp.dest(`${dir.build}/assets/css`))
});

// IMAGEMIN
gulp.task('imagemin', function () {
  return gulp.src(`${dir.src}/images/**/*`)
    .pipe(imagemin({
      progressive: true,
      svgoPlugins: [
        { removeViewBox: false },
        { cleanupIDs: false }
      ]
    }))
    .pipe(gulp.dest(`${dir.build}/assets/images`));
});

// JS
gulp.task('js', function () {
  return gulp.src([
    `${dir.src}/js/acoes.js`,
  ])
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest(`${dir.src}/js`))
    .pipe(rename('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest(`${dir.build}/assets/js`))
});

// WATCH
gulp.task('watch', function () {
  gulp.watch(`${dir.src}/scss/**/*.scss`, ['purgecss']);
  gulp.watch(`${dir.src}/js/**/*.js`, ['js']);
  gulp.watch(`${dir.src}/images/**/*`, ['imagemin']);
});

gulp.task('default', ['watch', 'browser-sync'])