'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src('includes/sass/*.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(gulp.dest('build/stylesheets'));
});

gulp.task('sass:watch', function() {
    gulp.watch('includes/sass/*.scss', gulp.series('sass'));
});