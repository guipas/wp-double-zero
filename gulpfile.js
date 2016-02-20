var gulp = require('gulp');
var less = require('gulp-less');


gulp.task('less', function() {
  return gulp.src('less/doublezero.less')
    .pipe(less())
    .pipe(gulp.dest('css/'));
});

gulp.task('bootstrap-extras', function() {
    return gulp.src('bower_components/bootstrap/dist/js/bootstrap.min.js')
    .pipe(gulp.dest('js/'));
});

gulp.task("default", ["less","bootstrap-extras"], function() {
  gulp.watch("./less/*", ["default"]);
});