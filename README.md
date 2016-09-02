# school-of-architecture

##Description
A new website for the Virginia Tech School of Architecture. 
Technologies include: Wordpress Server (MAMP), AngularJS
--

##Set Up for Local Machine (Just to test your website locally)
1. Install MAMP (https://www.mamp.info/en/downloads/)
⋅⋅* Preferences Changes: 
....*Start/Stop: [checked] Start Servers, Open WebStart page, [uncheck] Check for MAMP Pro
2. Download Wordpress (https://wordpress.org/download/)
3. Download mySQL and mySQL Workbench
..* Create a new databse with mySQL Workbench
4. Navigate to localhost:8888 on your machine
5. Do the Wordpress Famous 5 minute installation
..* database: <your database name that you just created in mySQL workbench>
..* username: <your database username that you just created>
..* password: <your database password that you just created>
..* databse host: localhost (if that doesnt work try 127.0.0.1)
..* table prefix: wp_
6. Under the "themes" folder in your wordpress folder, mock a new theme (put your code in there)
7. Navigate to localhost:8888/wp_admin
8. Under Themes, you will see your theme there.
9. On the production website, you need to "add new theme" and add the zip file for your theme
