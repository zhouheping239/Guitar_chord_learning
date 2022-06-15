# Installation guide

## This guide is based on Windows with XAMPP and Git Bash


### Steps

1. Download [XAPMM](https://www.apachefriends.org/) and install it on your device.

2. Download [Git](https://git-scm.com/download/win) and install it on your device.

3. Run `Git Bash` on your device and ```cd to/xampp/htdocs/folder```

4. Run ```git clone https://github.com/zhouheping239/basic_guitar_learning.git ```

5. Now run XAMPP application and click start on Apache and MySQL

    1. ![xampp_start](../images/xampp_start.png)

6. Go to the browser [https://localhost/phpmyadmin/index.php](https://localhost/phpmyadmin/index.php)

7. Click on Databases and create bgldatabase (need to be the same specific name)

    1. ![xampp_bgldatabase](../images/xampp_bgldatabase.png)

8. After create bgldatabase then import .sql file from repo ` basic_guitar_learning/src/guitar/sql/bgldatabase.sql `

9. Now you will be able to access the [https://localhost/basic_guitar_learning/src/guitar/main.php](https://localhost/basic_guitar_learning/src/guitar/main.php)

