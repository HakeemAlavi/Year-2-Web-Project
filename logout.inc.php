<?php

session_start();
session_unset();
session_destroy();

header("location: ../wp/mainpage.php");
			exit();