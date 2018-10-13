var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'expanded'
};

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

gulp.task('serve', ['sass','js'], function() {
    gulp.watch("app/scss/**/*.scss", ['sass']);
	gulp.watch("app/js/app.js", ['js']);
});

gulp.task('sass', function() {
    return gulp
        .src('app/scss/styles.scss')
        .pipe(sourcemaps.init())
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(autoprefixer(autoprefixerOptions))
        .pipe(gulp.dest('dist/css'))
});

gulp.task('js', function (cb) {
  return gulp.src([
	  'app/js/vendor/jquery-2.1.4.min.js',
	  'app/js/vendor/jquery-ui-1.11.4.min.js',
	  'app/js/components/*.js',
	  'app/js/*.js'
  ])
  .pipe(concat('app.js'))
  .pipe(rename({suffix: '.min'}))
  .pipe(uglify())
  .pipe(gulp.dest('dist/js'));
});

gulp.task('watch', function() {
  return gulp
    .watch('app/scss/*.scss', ['sass'])
	.watch('app/js/*.js', ['js'])
    .on('change', function(event) {
      console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
    });
});

gulp.task('default', ['serve']);
