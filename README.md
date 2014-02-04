# WingWoman #
Hackathon project for Hack N' Jill Summer 2012. Find the perfect date option at the perfect price using the Yipit API (http://yipit.com/about/api/documentation/#deals_api). 

## Technical Details ##

This is a PHP web app deployed using heroku. We used Mandrill as a heroku add-on for sending emails on the contact us page (https://devcenter.heroku.com/articles/mandrill#provisioning-the-add-on). Particularly, we used SwiftMailer as seen here (http://help.mandrill.com/entries/21746308-Sending-via-SMTP-in-various-programming-languages). 

## Environment Set Up ##

1. You will need PHP 5.4+ to run WingWoman locally (use port install on macports)
2. Git clone the repo, download the heroku CLI, and add the heroku remote to your repo
3. There is a Procfile.dev for development testing, and use heroku-config plugin to get the right environment variables (https://github.com/ddollar/heroku-config)
4. Download foreman, run app with "foreman start -f Procfile.dev"

### FootNotes and Challenges ###

1. I didn't know you could get environment variables w/ get_env() i.e. as seen in https://github.com/iphoting/heroku-buildpack-php-tyler/issues/4 
2. Need to set up a Procfile and use foreman to run php web app against heroku locally (http://labs.enru.co.uk/phponheroku/#9)


Don, Patrice, Sophie, & Anna's Hack for Hack&Jill 6/16/12
