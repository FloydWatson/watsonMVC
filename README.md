# watsonMVC
This is a PHP MVC framework


# Environment set up


⋅⋅* Download xampp [Here](https://www.apachefriends.org/index.html)

⋅⋅* Install, make sure you include mysql and apache. (this is default)

⋅⋅* Run xampp control panel as administrator.

⋅⋅* Set mysql and apache to be services. (this means click on the red X to turn into a green tick)

⋅⋅* Start apache and mysql

⋅⋅* In you broweser go to localhost http://localhost/dashboard/. here you should see the xampp dashboard

⋅⋅* Navigate to C:\xampp\htdocs

⋅⋅* Create a folder called test

⋅⋅* Create a file called index.php

⋅⋅* In that file add the following php code: <?php echo 'IT WORKS'; ?>

⋅⋅* In your browser go to http://localhost/test 

⋅⋅* Here you should see the text 'IT WORKS'



# MySQL

adding password to root user to the data base

in your browser go to http://localhost/phpmyadmin/

go to user accounts tab

edit priviliges root for localhost

navigate to change password tab

enter the password '123456'

click go. (bottom left)

in your file explorer navigate to C:\xampp\phpMyAdmin

open config.inc.php in your text editior

find where pass word is stored and add your password. $cfg['Servers'][$i]['password'] = '123456';

refresh phpmyadmin to check this has worked correctly


# IDE

if using VSCode i recomend downloading the extension PHP Intellisense. by Felix Becker. 


# Environment Variables

Do this if PHP is not already set in your Path

Search your computer for environment variables

Edit Path

Add variable C:\xampp\php you can do this by either typing or browsing to that folder.