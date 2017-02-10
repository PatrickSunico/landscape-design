//Packages
// ======================================================
var gulp = require('gulp'),
    browserSync = require('browser-sync'),
    rename = require('gulp-rename'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    php = require('gulp-connect-php');


var reload = browserSync.reload;

var rawPaths = {
  scss: './public/scss/**/*.scss*',
  index: './public/index.php'
};

var out = {
    scssOut: './public/css'
};

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

// Browser-sync config
gulp.task('php', function(){
  php.server({
    base: 'public',
    port: 8080,
    keepalive: true
  });
});

gulp.task('browser-sync',['php'], function(){
  browserSync({
    proxy: '127.0.0.1:8080',
    port: 8080,
    open: true,
    notify: false
  });
});

// SCSS
gulp.task('sass',function(){
  return gulp.src(rawPaths.scss)
         .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
         .pipe(rename('main.min.css'))
         .pipe(autoprefixer(autoprefixerOptions))
         .pipe(gulp.dest(out.scssOut));
});

gulp.task('watch', function(){
  gulp.watch(rawPaths.index).on('change', browserSync.reload);
  gulp.watch(rawPaths.scss,['sass']).on('change', browserSync.reload);
});

gulp.task('default', ['browser-sync', 'sass', 'watch'], function() {
  gulp.watch(['public/*.php'], [reload]);
});
