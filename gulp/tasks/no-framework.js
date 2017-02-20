var gulp = require('gulp'),
$ = require('gulp-load-plugins')(),
inject = require('gulp-inject'),
runSequence = require('run-sequence'),
config = require('../config');


gulp.task('no-frameworkcss', function () {
gulp.src(config.main.src + config.frameworkSass.src)
  .pipe(inject(gulp.src(['./inject/blank.txt']), {
    starttag: '// inject:framework',
    endtag: '// endinject',
    transform: function (filePath, file) {
      // return file contents as string
      return file.contents.toString('utf8')
    }
  }))
  .pipe(gulp.dest(config.main.src + config.frameworkSass.dest));
});

gulp.task('no-frameworkjs', function () {
gulp.src(config.frameworkJs.src)
  .pipe(inject(gulp.src(['./inject/blank.txt']), {
    starttag: '// inject:framework',
    endtag: '// endinject',
    transform: function (filePath, file) {
      // return file contents as string
      return file.contents.toString('utf8')
    }
  }))
  .pipe(gulp.dest(config.frameworkJs.dest));
});


gulp.task('no-framework', function(callback) {
  runSequence(
    ['no-frameworkcss'],
    ['no-frameworkjs'],
    callback
    );
});

