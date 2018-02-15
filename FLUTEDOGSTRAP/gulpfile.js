var gulp = require('gulp'),
	sass = require('gulp-sass');
	useref = require('gulp-useref'),
	uglify = require('gulp-uglify'),
	cssnano = require('gulp-cssnano'),
	imagemin = require('gulp-imagemin'),
	gulpIf = require('gulp-if'),
	cache = require('gulp-cache'),
	autoprefixer = require('gulp-autoprefixer'),
	del = require('del'),
	runSequence = require('run-sequence'),
	browserSync = require('browser-sync').create();

gulp.task('sass', function(){
  return gulp.src('app/scss/**/*.scss') //get Sass files
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('app/css')) //send CSS to destination folder
    .pipe(autoprefixer({
    	browsers: ['last 2 versions'],
    	cascade: false
    }))
    .pipe(browserSync.reload({
      stream: true
    }));
});

gulp.task('default', function (callback) {
  runSequence(['sass','browserSync','watch'],
    callback
  )
});

gulp.task('watch',['browserSync','sass'], function() {
	gulp.watch('app/scss/**/*.scss', ['sass']);
	// Reloads the browser whenever HTML or JS files change
  	gulp.watch('app/*.html', browserSync.reload); 
  	gulp.watch('app/js/**/*.js', browserSync.reload); 
});

gulp.task('browserSync', function() {
  browserSync.init({
    server: {
      baseDir: 'app'
    },
  });
});

gulp.task('optimize-files', function(){
  return gulp.src('app/*.html')
    .pipe(useref())
    // Minifies only if it's a JavaScript file
    .pipe(gulpIf('*.js', uglify()))
    .pipe(gulpIf('*.css', cssnano()))
    .pipe(gulp.dest('dist'))
});

gulp.task('optimize-img', function() {
	return gulp.src('app/img/**/*+(jpeg|png|gif|svg)')
	.pipe(cache(imagemin({
		interlaced: true
	})))
	.pipe(gulp.dest('dist/img'))
});

gulp.task('fonts', function() {
  return gulp.src('app/fonts/**/*')
  .pipe(gulp.dest('dist/fonts'))
});

//combined compiling tasks
gulp.task('build',function(callback) {
	runSequence('clean:dist',['sass','optimize-files','optimize-img','fonts'],callback)
});

//this will clean DIST folder completely (example of 'del' plugin)
gulp.task('clean:dist', function() {
  return del.sync('dist');
});

//clear locally cached images
gulp.task('cache:clear', function (callback) {
return cache.clearAll(callback);
})