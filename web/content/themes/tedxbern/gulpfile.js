var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;
var sass        = require('gulp-sass');

gulp.task('default', ['browser-sync']);

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "tedx.site"
});

gulp.task('styles', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./'));
});

	// gulp.watch("*.html").on("change", reload);

    gulp.watch("*.css").on("change", reload);

    gulp.watch('**/**/*.php').on("change", reload);

    // gulp.watch("js/*.js").on("change", reload);

    gulp.task('default',function() {
        gulp.watch('sass/**/*.scss',['styles']);
    });
});

gulp.task('build', function () {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./'));
});
