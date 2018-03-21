<?php
	ini_set("display_errors", true);
	date_default_timezone_set("Europe/Moscow");
	
	define("DB_SDN", "mysql:host=localhost;dbname=cms");
	define("DB_USERNAME", "username");
	define("DB_PASSWORD", "password");
	define("CLASS_PATH", "classes");
	define("TEMPLATE_PATH", "templates");
	define("HOMEPAGE_NUM_ARTICLES", 5);
	define("ADMIN_USERNAME", "admin");
	define("ADMIN_PASSWORD", "mypass");
	
	require(CLASS_PATH."/Article.php");
	
	function handleExeption($exeption) {
		echo("Sorry, a problem occured. Please try later.");
		error_log($exeption->getMessage());		
	}	
	set_exception_handler('handleException');
?>