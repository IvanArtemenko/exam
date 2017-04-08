const   gulp = require('gulp'),
    nib = require('nib'),
    stylus = require('gulp-stylus'),
    plumber = require('gulp-plumber'),
    bootstrap = require('bootstrap-styl');

gulp.task('stylus', function () {
    return gulp
        .src('./src/styl/style.styl')
        .pipe(plumber())
        .pipe( stylus({
            compress: true,
            use: [nib(), bootstrap()]
        }))
        .pipe(gulp.dest('./'));
});


gulp.task('watch', function () {
    gulp.watch('./src/styl/**/*.styl', ['stylus']);
});

gulp.task('default', ['watch', 'stylus']);