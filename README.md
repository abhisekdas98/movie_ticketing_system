# movie_ticketing_system
  ====================================================================================================
  
#I am uploading the screen shots of my work in a word document named imgmovieproject.You can go through it once you are done with the below.


#Installations and Requirement
 =====================================================================================================
There are some applications which  are required to be downloaded first.We have to download php application, Xampp software,Mysql database.Internet connectivity is also required.A text editor is rquired like sublimetext or notepad or netbeans etc.In mysql database you have to remember the user name and password for connectivity in the code of php.And you have to set the path of this folder to 
c:/xampp/htdocs/yourfoldername.To get your application work.Then when you will open your xampp start your mysql and apche .Then click on admin to go to phpmyadmin page,where you can see your database and tables and modify those or make databases and tables according to this project.

#Introduction
======================================================================================================
 This project is about a movie ticketing system.There are some movies in my data base and has 4 particular timimg for those movies in my hall.So user could book those movies for a particular time only.Each movie has a particular movie_id and a candidate key as (movie_time and movie_date).The user has to enter his details in the respective fields asked to him and our data base will get filled by those informations.This project is mostly based on php and java script.

 More functionalities has been defined further, you can also check my codes provided in files.
======================================================================================================

#There are two tables.
======================================================================================================
1. user table
 This table has 6 columns.
  columns-ticket_id(primary key)(auto increment),user_name(varchar),user_phone_no(bigint),movie_id(fk),movie_time(time) and movie_date(date).
2. movie table

  This table has 2 columns.
  movie_id(primary key)(auto increment) and movie_name(varchar). 

#There are 9 imporatant php files in my folder.
======================================================================================================
They are -

1. home.php

This is a pure html page which asks the user to book ticket,update ticket,delete ticket,show ticket details.These are presented here through buttons and if u want to do an event you have trigger that button to respond.

2. page2.php

If the user clicked the book ticket button ,then form action will take it to page2.php.Here the user can enter his details.And when the user will clicl on submit button then he will reach to savedata.php file.

3. savedata.php

 In this page i have written php code which will update the details given by the user in my mysql database,my code in php will firt connect to my sql database and then through sql query it will insert data into user table only if the date and time provided by my user has not been filled by 20 users.If at a particular time 20 users have filled  the data my page will show HOUSE FULL!!!.Else this page will direct to index.php page where data of users will be shown by fetching from mysql database.

4. index.php 

In this page we are connecting to mysql database and then fetching the data of the user like ticket_id,user_name etc details of user and showing them in a form of table.

5. update.php

 When the user clicked the update button in home.php page that will result i opening of update.php  page.In this page if a user want to update his timing he has to  enter the ticket_id provided to him at the time of booking.He will be shown all the details and he can only change the timing of the show he has booked previously.In this page i will fetch the new timming from the user and direct to a
 new page updatedata.php page.

6. updatedata.php

In this page i am fetching the new time entered by the user and updating it in my user table in mysql data base.And directing it to index.php (refer to 3).

7. delete.php

 When the user clicked the button of delete on the home.php page that will open delete.php page.
 In this page user is asked to fill the ticket_id given to him, and asked to press a delete button.On clicking the delete button my php code will work on deletedata.php and delete the data of the user whose id is same as given by user .

8. deletedata.php

 When the user clicked on delete button on delete.php it will direct it to this page.Here my inside my php code i have written sql querry to delete the data where ticket_id is equal to the id asked to the user.When the data is deleted it will show data deleted successfully.

 9. show.php

  When the user clicked the button of  showticket on home.php it will open show.php page.Here the user is first asked his id.If  the movie time and date is greater than current time and date by 8hrs then it will show that the ticket is expired.Else it will show the user his ticket details.


##For deleting the data automatically from database i have written an Event Scheduling Querry.Here in event scheduling  querry i am taking the current time and current date and fetching the movie time and movie date every 5 seconds and if the the current time and current date is 8hrs more than the movie time and movie date then deleting the data from the user table.

##Here  is the querry for above statement which i ran on mysql database.

CREATE EVENT IF NOT EXISTS event_20
ON SCHEDULE EVERY 5 SECOND
STARTS CURRENT_TIMESTAMP + INTERVAL 5 SECOND
DO
DELETE FROM user where cast(concat(CURRENT_DATE(), ' ',CURRENT_TIME()) as datetime)>= ADDTIME(cast(concat(movie_date, ' ',movie_time) as datetime), "8:00:00");

#I am uploading the screen shots of my work in a word document named imgmovieproject.You can go through it once you are done with the above.


