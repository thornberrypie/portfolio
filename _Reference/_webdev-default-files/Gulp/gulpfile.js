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
        'web/app/application/themes/oysterbaynz/js/bootstrap.min.js',
        'web/app/application/themes/oysterbaynz/js/owl.carousel.min.js',
        'web/app/application/themes/oysterbaynz/js/oysterbay.js'
    ])
    .pipe(concat('oysterbay.js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('web/app/application/themes/oysterbaynz/build'));
});

// Compile SASS
gulp.task('sass', function() {
    return sass('web/app/application/themes/oysterbaynz/scss/main.scss', {style: 'compressed'})
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('web/app/application/themes/oysterbaynz/build'));
});

// Watch task
gulp.task('watch', function() {
  // Watch .js files
  gulp.watch('web/app/application/themes/oysterbaynz/js/*.js', ['scripts']);
  // Watch .scss files
  gulp.watch('web/app/application/themes/oysterbaynz/scss/*.scss', ['sass']);
  //Add image optimisation

});

// Default Task
gulp.task('default', ['scripts', 'sass', 'watch']);
