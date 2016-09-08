// Include gulp
var gulp = require('gulp');
// Include plugins
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var sass = require('gulp-ruby-sass');

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src([
        'js/jquery-2.1.4.min.js',
        'js/jquery-ui-1.11.4.min.js',
        'js/functions.js',
        'js/custom.js'
    ])
    .pipe(concat('main.js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('build'));
});

// Compile SASS
gulp.task('sass', function() {
    return sass('scss/index.scss', {style: 'compressed'})
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('build'));
});

// Watch task
gulp.task('watch', function() {
  // Watch .js files
  gulp.watch('js/*.js', ['scripts']);
  // Watch .scss files
  gulp.watch('scss/*.scss', ['sass']);
  //Add image optimisation

});

// Default Task
gulp.task('default', ['scripts', 'sass', 'watch']);
