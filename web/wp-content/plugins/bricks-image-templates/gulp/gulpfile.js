var gulp            = require('gulp'),
    sass            = require('gulp-sass'),
    autoprefixer    = require('gulp-autoprefixer'),
    cssnano         = require('gulp-cssnano'),
    rename          = require('gulp-rename'),
    uglify          = require('gulp-uglify'),
    concat          = require('gulp-concat'),
    plumber         = require('gulp-plumber');

gulp.task('styles', function() {

    // Sass watch, autoprefixr, minify and rename
    return gulp.src('scss/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer('last 2 version'))
        .pipe(rename({suffix: '.min'}))
        .pipe(cssnano())
        .pipe(gulp.dest('../css'));

});

// JS concat and minify
gulp.task('scripts', function() {
    gulp.src(['js/*.js'])
        .pipe(plumber())
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest('../js'));
});

gulp.task('watch', function() {

  gulp.watch('scss/*.scss', ['styles']);

  gulp.watch('js/*.js', ['scripts']);

});

gulp.task('default', ['watch', 'styles', 'scripts'], function() {

});