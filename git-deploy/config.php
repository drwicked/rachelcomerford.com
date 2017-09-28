<?php
define("TOKEN", "drofremoclehcar");                                       // The secret token to add as a GitHub or GitLab secret, or otherwise as https://www.example.com/?token=secret-token
define("REMOTE_REPOSITORY", "git@github.com/drwicked/rachelcomerford.com"); // The SSH URL to your repository
define("DIR", "/var/www/comerford/");                          // The path to your repostiroy; this must begin with a forward slash (/)
define("BRANCH", "refs/heads/gh-pages");                                 // The branch route
define("LOGFILE", "deploy.log");                                       // The name of the file you want to log to.
define("GIT", "/usr/bin/git");                                         // The path to the git executable
define("AFTER_PULL", "bundler exec jekyll build");                                              // A command to execute after successfully pulling
