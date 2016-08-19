module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				files: {
					'css/style.css' : 'scss/_index.scss'
				}
			}
		},
		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass','uglify']
			}
		},
		uglify: {
	        my_target: {
				files: {
					'js/custom.min.js': ['js/jquery-2.1.4.min.js', 'js/jquery-ui-1.11.4.min.js', 'js/functions.js', 'js/custom.js']
				}
	        }
		},
		jshint: {
            all: ['js/custom.js']
        }
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.registerTask('default',['watch','sass','uglify']);
}
