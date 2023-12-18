Install PHP 

Mac
brew install php

Install Composer
https://getcomposer.org/download/

Mac
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer


Install Jigsaw
composer require tightenco/jigsaw

Install node libraries
npm i

To Build the project
on home directory run this command on terminal
"npm run dev"

to run or serve the Project
run the this command on terminal in home directory 
"vendor/bin/jigsaw serve"

to terminate the session 
press ctrl+c and then Y