<?php

/*
Plugin Name: CreateUser Plugin
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Create a new user in the database
Version: 1.0
Author: Thomas Malfilatre
Author URI: dev.thomasmalfilatre@gmail.com
License: GPL3
*/

include "Class/User.php";

$newUser = new User($_POST['newName'],
					$_POST['newName'],
					$_POST['newMail'],
					$_POST['newPhone'],
					$_POST['newSex'],
					$_POST['newPassword'],
					$_POST['newAddress']
					);

$newUser->insetIntoDb();