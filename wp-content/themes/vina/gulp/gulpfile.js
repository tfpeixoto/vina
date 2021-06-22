var
gulp = require('gulp');
browserSync = require('browser-sync');
sass = require('gulp-sass');
imagemin = require('gulp-imagemin');
concat = require('gulp-concat');
rename = require('gulp-rename');
uglify = require('gulp-uglify-es').default;
purgecss = require('gulp-purgecss');

// BROWSER SYNC
gulp.task('browser-sync', function () {
  var files = [
    '../**/*.php',
    '../assets/css/*.css',
    '../assets/js/*.js'
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
  return gulp.src(['scss/**/*.scss'])
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError)) // converter o Sass em CSS
    .pipe(gulp.dest('../assets/css'));
});

// PURGE CSS
gulp.task('purgecss', function () {
  return gulp.src([
    '../assets/css/*.css',
  ])
    .pipe(purgecss({
      content: ['../**/*.php'],
      whitelist: ['far', 'fa', 'fas', 'fab', 'fa-clock'],
      whitelistPatterns: [/fa/]
    }))
    .pipe(gulp.dest('../assets/css'))
});

// REDUZIR IMAGENS
gulp.task('imagemin', function () {
  return gulp.src('images/**/*')
    .pipe(imagemin({
      progressive: true,
      svgoPlugins: [
        { removeViewBox: false },
        { cleanupIDs: false }
      ]
    }))
    .pipe(gulp.dest('../assets/images'));
});

// CONCAT, MINIFY E GERACAO DE JS
gulp.task('js', function () {
  return gulp.src([
    // 'js/components/jquery-3.5.1.min.js',
    // 'js/components/popper-1.16.1.min.js',
    // 'js/components/bootstrap-4.5.0.min.js',
    // 'js/components/owl.carousel.min.js',
    'js/acoes.js',
  ])
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('js'))
    .pipe(rename('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('../assets/js'))
});

// WATCH
gulp.task('watch', function () {
  gulp.watch('scss/**/*.scss', ['sass']);
  gulp.watch('js/**/*.js', ['js']);
  gulp.watch('images/**/*', ['imagemin']);
});

gulp.task('default', ['sass', 'js', 'imagemin', 'watch', 'browser-sync'])