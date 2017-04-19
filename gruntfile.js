module.exports = function(grunt) {

    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        
        sass: {
            dist: {
                options: {
                    style: 'nested'
                },
                files: {
                    'css/style.css': 'css/sass/style.scss'
                }
            },
            build: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'style.css': 'css/sass/style.scss'
                }
            }
        },
        watch: {
            css: {
                files: ['**/*.scss'],
                tasks: ['sass:dist', 'sass:build'],
                options:{
                    livereload: 35729,
                }
            },
            php: {
                files: ['*.php'],
                options: {
                livereload: 35729
                }
            }    
        },

    });

    grunt.registerTask('default', ['watch']);
};