/////////////////////////////// Make laravel Apis /////////////////////////////// 

For making apis first 

we have to install composer its a dependecy for installation of frameworks

installation of xammpp

installation of postman

Create a database inside a localhostand connecct it with laravel project

Then using composer we have to install laravel installation, this will also helps you to create a dummy project on laravel

composer create-project laravel/laravel example-app

After all this steps we have to make controllers php artisan make:controller (e.g device controller) then on hit enter this make your controller in a laravel dummy project directory

in a routes directory of a laravel in api.php file we make our api routes and functions name that will calling functions on that routes and on controller we make our functions 
i-e Get, Post, Put, Delete

after saving all these changes in a project, we have to use them one by one on a postman

for this purpose first we have to start a localserer for thsis we have to give a command

php artisan serve

this will start our server https://127.0.0.1:8000/

then try those routes with a localhost on a postman acccoding to their meothods(Get,Post,Put,Delete)

then on trying those routes as apis on a postman a response back along with respoonse code 200  that means everything works fine and our results shown as json

then when we start a xampp server for actuall database on a zammpp server we have to start apachae and mysql then on a broswer type localhost/phpmyadmin

then on a side bar we see different directries there is a daatabase table name too, whenever we perform implemenation of data on apis then our result shown on localhost server 


/////////////////////////////// Android app /////////////////////////////// 

In our android we will using retrofit that helps to connect our andorid app with a backend for this if we are using andorid device attached with our pc
we have to write a command on a laravel terminal (i-e php artisan serv --host="pc ip-address"  --port=3306) then on hitting it our server starts along with ipaddress with mysql port number

onething more there was a previous server running too , we have to terminate that sserver too then working on new server other ip-address will become busy and no more api will work on android app

then with the help of retrofit andd some apis our android app will perform operation .



