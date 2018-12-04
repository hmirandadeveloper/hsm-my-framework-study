### MY FRAMEWORK STUDY ###
-------------------------------------------------------------------------------------
# INSTRUCTIONS FOR SETUP:
-------------------------------------------------------------------------------------
	1 - Open 'config.php' file;
	
	2 - Change the value of APP_INNER_DIRECTORY to your root directory 
		associted to the project. 
		Example: 
				-	If your root directory is: /www;
				-	Create inside the directory: hsm-my-framework-study
				-	And the value of APP_INNER_DIRECTORY will be: 
					/hsm-my-framework-study
	
	3 - Open a terminal go to project's directory and execute: 
		composer install;


-------------------------------------------------------------------------------------
# INSTRUCTIONS FOR EXECUTION:
-------------------------------------------------------------------------------------
	1 - Use the url: http://localhost/hsm-my-framework-study/ to access the main 
		page and simulate all situations;
	
	2 - To run 'the tests' you need to execute: vendor/bin/phpunit tests/
		in the project's directory;


-------------------------------------------------------------------------------------
# INSTRUCTIONS FOR SIMULATION OF SITUATIONS:
	Situation 1	-	This situation happens in the moment when the project 
					is loaded, it will be showed a table with all the person's 
					shopping, and for each eletronic it is printed the price, 
					all the extras associated to it and in the end the total of 
					all, following the rules pre-established;
	
	Situation 2 - 	Using the 'the search field', search for 'Console', and 
					the question of the person's friend will be anwsered, 
					by showing the Console's price and extras (separating:
					wired and remote, because they are Controllers);	