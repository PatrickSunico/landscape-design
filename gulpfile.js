//Packages
// ======================================================
var gulp = require('gulp'),
    browserSync = require('browser-sync'),
    rename = require('gulp-rename'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    pump = require('pump'),
    imagemin = require('gulp-imagemin'),
    // If you have fonts to compress
    // fontmin = require('gulp-fontmin'),
    // use this only if you need to convert templates into html
    php2html = require('gulp-php2html'),
    php = require('gulp-connect-php');


var reload = browserSync.reload;

var rawPaths = {
    scss: './public/scss/**/*.scss*',
    index: './public/index.php',
    js: './public/js/scripts.js',
    images: './public/images/**/*.{svg,png,jpeg,jpg,gif}'
};

var publicOut = {
    scssOut: './public/css/',
    js: './public/js/'
};

var distOut = {
    scss: './dist/css/',
    index: './dist/',
    js: './dist/js',
    commpressed_images: './dist/images/'
}

var gulp_options = {
    browsers: [
        'last 2 versions',
        '> 5%',
        'Firefox ESR',
        'safari 5',
        'ie 8',
        'ie 9',
        'opera 12.1',
        'ios 6',
        'android 4'
    ],
    image_min: {
        'interlaced': true,
        'progressive': true,
        'optimizationLevel': 5,
        'svgoPlugins': [{ removeViewBox: true }]
    }
};

// Browser-sync config
gulp.task('php', function() {
    php.server({
        base: 'public',
        port: 8080,
        keepalive: true
    });
});

gulp.task('browser-sync', ['php'], function() {
    browserSync({
        proxy: '127.0.0.1:8080',
        port: 8080,
        open: true,
        notify: false
    });
});

// Image min
gulp.task('imagemin', function() {
    return gulp.src(rawPaths.images)
        .pipe(imagemin(gulp_options.image_min))
        .pipe(gulp.dest(distOut.commpressed_images));
});

// SCSS
gulp.task('sass', function() {
    return gulp.src(rawPaths.scss)
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(rename('main.min.css'))
        .pipe(autoprefixer(gulp_options.browsers))
        .pipe(gulp.dest(publicOut.scssOut))
        // dist assets
        .pipe(gulp.dest(distOut.scss));
});

// convert php2html
gulp.task('php2html', function() {
    return gulp.src(rawPaths.index)
        .pipe(php2html())
        .pipe(gulp.dest(distOut.index));
});

// Uglify js
gulp.task('uglify', function() {
    return gulp.src(rawPaths.js)
        .pipe(uglify())
        .pipe(rename('scripts.min.js'))
        .pipe(gulp.dest(publicOut.js))
        // dist assets
        .pipe(gulp.dest(distOut.js));
});



gulp.task('watch', function() {
    gulp.watch(rawPaths.index).on('change', browserSync.reload);
    gulp.watch(rawPaths.scss, ['sass']).on('change', browserSync.reload);
    gulp.watch(rawPaths.js).on('change', browserSync.reload);
});

gulp.task('dist', ['php2html', 'imagemin', 'sass', 'uglify']);
gulp.task('default', ['browser-sync', 'sass', 'watch'], function() {
    gulp.watch(['public/includes/*.php*'], [reload]);
});