var gulp = require('gulp');
var less = require('gulp-less');
var watch = require('gulp-watch');
var prefix = require('gulp-autoprefixer');

gulp.task('less', function() {
    return gulp.src('public/css/*.less')  // only compile the entry file
        .pipe(less())
        .pipe(prefix())
        .pipe(gulp.dest('public/css'));
});
gulp.task('watch', function() {
    gulp.watch('public/css/*.less', ['less']);  // Watch all the .less files, then run the less task
});

gulp.task('default', ['watch']); // Default will run the 'entry' watch task