var gulp = require('gulp'),
$ = require('gulp-load-plugins')(),
config = require('../config');

gulp.task('patterns', function() {
  return gulp.src('./app/patterns/*.svg')
    .pipe($.concat('move.sass'))
    .pipe(gulp.dest('./app/patterns'));
});
