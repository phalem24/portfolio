var gulp = require ('gulp');
var less = require ('gulp-less');
var cleanCss = require('gulp-clean-css');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');

gulp.task('less', function () {

 return gulp.src('./less/style.less')

 .pipe(less())
 .pipe(cleanCss())
 .pipe(gulp.dest('./dist/css'))

});

gulp.task('js', function() {

 return gulp.src('./js/main.js')

 .pipe(uglify())

 .pipe(gulp.dest('dist/js'));

});

gulp.task('img', () => {

 return gulp.src('./img/*')

 .pipe(imagemin({

 progressive: true

 }))

 .pipe(gulp.dest('dist/img'));

});