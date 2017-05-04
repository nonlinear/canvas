var gulp = require('gulp'),
$ = require('gulp-load-plugins')(),
config = require('../config');

gulp.task('dataloops', function () {
  return gulp.src(config.main.bower + 'dataloops/*')
  .pipe(gulp.dest(config.main.src + 'data'))
});
