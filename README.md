# watsonMVC
This is a PHP MVC framework


## Environment set up


1. Download xampp [Here](https://www.apachefriends.org/index.html).

1. Install, make sure you include mysql and apache. (this is default).

1. Run xampp control panel as administrator.

1. Set mysql and apache to be services. (this means click on the red X to turn into a green tick).

1. Start apache and mysql.

1. In you broweser go to localhost http://localhost/dashboard/. here you should see the xampp dashboard.

1. Navigate to C:\xampp\htdocs.

1. Create a folder called test.

1. Create a file called index.php.

1. In that file add the following php code: <?php echo 'IT WORKS'; ?>

1. In your browser go to http://localhost/test.

1. Here you should see the text 'IT WORKS'.



## MySQL

1. Adding password to root user to the data base.

1. In your browser go to http://localhost/phpmyadmin/.

1. Go to user accounts tab.

1. Edit priviliges root for localhost.

1. Navigate to change password tab.

1. Enter the password '123456'.

1. Click go. (bottom left).

1. In your file explorer navigate to C:\xampp\phpMyAdmin.

1. Open config.inc.php in your text editior.

1. Find where pass word is stored and add your password. $cfg['Servers'][$i]['password'] = '123456';

1. Refresh phpmyadmin to check this has worked correctly.



## Environment Variables

1. Do this if PHP is not already set in your Path.

1. Search your computer for environment variables.

1. Edit Path.

1. Add variable C:\xampp\php you can do this by either typing or browsing to that folder.


## IDE

If using VSCode I recommend downloading the extension PHP Intellisense. by Felix Becker. 