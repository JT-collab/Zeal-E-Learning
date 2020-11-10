# Zeal-E-Learning

![Login Screen](https://github.com/JT-collab/Zeal-E-Learning/blob/main/screenshots/login.png) 
----
![Home Screen](https://github.com/JT-collab/Zeal-E-Learning/blob/main/screenshots/home.png)

## Setup

1. Download/Clone the repository.
2. Goto *DbInit.php* and change username, password and servername(if not localhost).
3. Goto *mail.php*, add your email address and password.
4. Finally, goto *config.php* and enter your Razorpay API key id and secret key.
5. Now, you are ready to test.

## Description

The website is a simple learning management system(LMS) which provides following features:
1. Login, Signup and Forgot password.
2. Course catalog. 
3. Free courses.
4. My courses i.e paid courses.
5. Payment gateway integration using RazorPay.

## Fixed admin and user roles

A student can register directly from the signup page. However the first admin has to be registered at the time of installation. A new column 'admin' has been added in the login table. After registering the first admin, 'true' has to be inserted in the admin column in the database directly. From the second time only an admin will be able to register another admin. This can be done after an admin is signed in.
