module.exports = function(grunt) {

    var objects = ["scss/objects/*.scss"];

    grunt.initConfig({

        fred_core: "scss/_fred-core.scss",
        fred_helpers: "scss/helpers/*.scss",
        fred_objects: "scss/objects/*.scss",
        fred_defaults: "_fred-defaults.scss",
        fred_theme: "_fred-theme.scss",
        fred_dist: "dist/lib/fred.scss",

        concat: {
            core: {
                src: ["scss/<%= grunt.config('fred_defaults') %>", "<%= grunt.config('fred_helpers') %>", "<%= grunt.config('fred_core') %>"],
                dest: "build/fred.core.scss"
            },
            objects: {
                src: "<%= grunt.config('fred_objects') %>",
                dest: "build/fred.objects.scss"
            },
            dist: {
                src: ["build/fred.core.scss", "build/fred.objects.scss"],
                dest: "<%= grunt.config('fred_dist') %>"
            },
            build: {
                src: ["dist/fred.scss"],
                dest: "build/fred.build.scss"
            }
        },
        clean: {
            build: ["build"]
        },
        copy: {
            build: {
                src: "scss/<%= grunt.config('fred_defaults') %>",
                dest: "dist/<%= grunt.config('fred_theme') %>"
            },
            install: {
                src: "<%= grunt.config('fred_dist') %>",
                dest: "<%= copy.install.fred %>/lib/_fred.scss"
            },
            theme: {
                src: "scss/<%= grunt.config('fred_defaults') %>",
                dest: "<%= copy.install.fred %>/_fred-theme.scss"
            }
        },
        sass: {
            dist: {
                options: {
                    outputStyle: 'nested'
                },
                files: {
                    'dist/fred.css': 'dist/lib/fred.scss'
                }
            }
        },
        csscomb: {
            options: {
            },
            dist: {
                files: {
                    'dist/fred.css': ['dist/fred.css']
                }
            }
        },
        watch: {
            sass: {
                files: ['scss/**/*.scss'],
                tasks: ['build'],
                options: {
                    spawn: false
                }
            }
        },
        prompt: {
            build: {
                options: {
                    questions: [
                        {
                            config: 'custom', // arbitray name or config for any other grunt task
                            type: 'confirm', // list, checkbox, confirm, input, password
                            message: 'Do you want to customise Fred\'s modules?',
                            default: false // default value if nothing is entered
                        },
                        {
                            config: 'concat.objects.src', // arbitray name or config for any other grunt task
                            type: 'checkbox', // list, checkbox, confirm, input, password
                            message: 'Which modules would you like to include?',
                            default: 'value', // default value if nothing is entered
                            when: function(answers) {
                                return answers['custom'] === true;
                            },
                            choices: function(answers) {
                                var answers = grunt.file.expand(objects);
                                // answers.unshift({name: "Gimme everythang!", value: objects})
                                return answers;
                            }
                       }
                    ]
                }
            },
            install: {
                install_path: "../../www/assets/sass",
                options: {
                    questions: [
                        {
                            config: 'install_now', // arbitray name or config for any other grunt task
                            type: 'confirm', // list, checkbox, confirm, input, password
                            message: 'Do you want to install Fred into your project now?',
                            default: true // default value if nothing is entered
                        },
                        {
                            config: 'copy.install.fred', // arbitray name or config for any other grunt task
                            type: 'text', // list, checkbox, confirm, input, password
                            message: 'Where would you like Fred deployed to (relative to this fred directory)?',
                            default: "<%= prompt.install.install_path %>", // default value if nothing is entered
                            when: function(answers) {
                                return answers['install_now'] === true;
                            }
                        },
                        {
                            config: 'copy.install.theme', // arbitray name or config for any other grunt task
                            type: 'confirm', // list, checkbox, confirm, input, password
                            message: 'Copy the theme file too (will replace your current theme)?',
                            default: false, // default value if nothing is entered
                            when: function(answers) {
                                return answers['install_now'] === true;
                            }
                        }

                    ]
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-prompt');

    grunt.registerTask("installer", function() {
        var dest = grunt.config('copy.install.fred');
        var theme = grunt.config('copy.install.theme');

        if (!dest) {
            return true;
        } else {
            grunt.task.run('copy:install');
            if (!grunt.file.exists(dest + "/screen.scss"))
                grunt.file.write(dest + "/screen.scss", "@import 'lib/fred';");
            if (theme) {
                grunt.task.run('copy:theme');
            }
        }
    });

    grunt.registerTask('install', [
        'prompt:build',
        'build',
        'prompt:install',
        'installer'
    ]);

    grunt.registerTask('build', [
        'concat:core',
        'concat:objects',
        'concat:dist',
        'concat:build',
        'copy:build',
        'sass:dist',
        'clean:build'
    ]);

    // Check for the presence of a Yak site dir above bower_components
    grunt.registerTask('default', function() {
        var sitePath = "../../site";

        if (grunt.file.isDir(sitePath)) {
            console.log(grunt.config("prompt.install.install_path"));
            grunt.config.set('prompt.install.install_path', sitePath + "/assets/sass");
        }
        grunt.task.run("install");
    });

};
