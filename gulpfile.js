// Sass configuration
var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));


gulp.task('sass', function(){
  return gulp.src('sass/**/*.scss')
      .pipe(sass()) // Use gulp-sass plugin
      .pipe(gulp.dest('.'))
});




gulp.task('watch', function() {
  gulp.watch('sass/**/*.scss', gulp.series('sass'));
});

