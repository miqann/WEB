IN CASE YOU HAVE PROBLEM WITH LOCAL POST
-https://stackoverflow.com/questions/55429643/where-to-set-value-of-liveserver-settings-port-in-live-server-extension-of-visua

 
 
 1. Login-Box (Front & Back-end)
 Quan and Khoa will work directly with this file in order to maniplulate the signup and login function for website. 
    - Khoa will frequently update for Front-end and JS. 
    - Quan can develop the Back-end algorithm. You should create A feature Branch anch and Pull Request in order for us to test out the workability with database and responsive of Front-end. If eveythings work fine. We will merge to Master Branch


2. Guideline for Quan
You can see most of PHP actions are in Old Project/ include 

For example of Login function.
- Login.php file is just the front-end which embeded in PHP tag
- Login.inc.php file respond to any interaction of user input.
- Procedure of Login.inc.php file 
    1. It call out to dbh.inc.php to connect to database in phpMyAdmin 
    2. It has If-else statement to validate the user input whether or not it fit the requirement (Ex. Password and Repassword have to match each other)
    3. If the user's input is lexically vadiate, it call out to function which already defind in "Function.inc.php file" that check the inputted data fit with database or not
    4. If the inputted data correct. The user log into 

 