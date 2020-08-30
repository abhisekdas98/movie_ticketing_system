# movie_ticketing_system
#There are two tables.
1. user table
 This table has 7 columns.
  columns-ticket_id(primary key)(auto increment),user_name,user_phone_no,movie_id,movie_time,no_of_tickets and movie_date.
2. movie table
  This table has 2 columns.
  movie_id(primary key) and movie_name. 

#There are 9 imporatant php files in my folder.

They are -

1. home.php

This is a pure html page which asks the user to book ticket,update ticket,delete ticket,show ticket details.These are presented here through buttons and if u want to do an event you have trigger that button to respond.

2.  page2.php

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

#For deleting the data automatically from database i have written an Event Scheduling Querry.Here in event scheduling  querry i am taking the current time and current date and fetching the movie time and movie date every 5 seconds and if the the current time and current date is 8hrs more than the movie time and movie date then deleting the data from the user table.

#Here  is the querry for above statement which i ran on mysql database.

CREATE EVENT IF NOT EXISTS event_20
ON SCHEDULE EVERY 5 SECOND
STARTS CURRENT_TIMESTAMP + INTERVAL 5 SECOND
DO
DELETE FROM user where cast(concat(CURRENT_DATE(), ' ',CURRENT_TIME()) as datetime)>= ADDTIME(cast(concat(movie_date, ' ',movie_time) as datetime), "8:00:00");

#I am uploading the screen shots of my work in a word file named imgmovieproject.You can go through it once you are done with the above.


