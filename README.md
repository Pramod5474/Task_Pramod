
Note : Exported Database File is kept in database folder of this same directory.


** Database Structure -

*Task - Folder Name:

* task_db : Name of the Database
	- In this database there are 3 tables as follows: 

1) tbl_users 

	- Purpose: Manages user roles for admin and user logins.
	- Fields: Id, Role (to manage admin and user access), username & password.

	* NOTE : 
	- For admin login :  use 'admin@gmail.com' as username and '12345678' for password
	- For user login :  use 'Pramod' as username and '12345678' for password

2) tbl_account

	- Purpose: Displays data in the frontend file account.php which stores data from account form.
	- Fields: Id, Name, Image.


3) tbl_contact

	- Purpose: Stores data from the contact us form.
	- Fields: Id, Name, address, city, message and image.


apis :
	- user_login.php file contains functions to interact with database

* Frontend files :

1) login.php
	- It contains two forms for Login and Signup

2) config.php
	- It contains database connection

3) img
	- To store all images from forms

4) index.php
	- It contains home page, session is maintained in this file and slider appears over here. 
	- It contains navigation bar to navigate to other files

5) logout.php
	- To destroy the user session

6) edit_user & edit_contact
	- To edit data of that pages & in database also

7) delete_user & delete_contact
	- To delete data from pages & from databases also

8) account.php 
	- It contains Name & image 

9) contact.php
	- It contains data & fetched to admin_tasks file in table format

