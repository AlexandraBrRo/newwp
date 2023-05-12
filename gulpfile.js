var gulp         = require('gulp'),
    sass         = require('gulp-sass')(require('sass')),
    plumber      = require('gulp-plumber'),
    notify       = require('gulp-notify'),
    purify       = require('gulp-purifycss'),
    rename = require('gulp-rename');

// Error message
var onError = function (err) {
    notify.onError({
        title   : 'Gulp',
        subtitle: 'Failure!',
        message : 'Error: <%= error.message %>',
        sound   : 'Beep'
    })(err);

    this.emit('end');
};

// Compile CSS
gulp.task('styles', function () {
    var stream = gulp
        .src([
            './wp-content/themes/anima-childJevel/assets/sass/styles.scss'
        ])
        .pipe(plumber({errorHandler: onError}))
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError));
    return stream
        .pipe(gulp.dest('./wp-content/themes/anima-childJevel/assets/css'));

});




// var gulp = require('gulp');
// var sass = require('gulp-sass')(require('sass'));
//
// gulp.task('sass', function () {
//     return gulp.src('assets/sass/styles.scss')
//         .pipe(sass().on('error', sass.logError))
//         .pipe(gulp.dest('assets/css'));
// });
//
// gulp.task('watch', function () {
//     gulp.watch('assets/sass/**/*.scss', gulp.series('sass'));
// });
//
// gulp.task('default', gulp.series('sass', 'watch'));
