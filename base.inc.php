<?php
	
	ob_start();
	session_start();

	/* Connect to DB and get config
	--------------------------------------------------------------------------- */
	require ("config.inc.php");

	/* Connect to database
	--------------------------------------------------------------------------- */
	// Create DB-instance
	$mysqli = new Mysqli($host, $username, $password, $db_name); 

	// Check for connection errors
	if ($mysqli->connect_errno) {
		die('Connect Error: ' . $mysqli->connect_errno);
	}
	
	// Set DB charset
	mysqli_set_charset($mysqli, "utf8");
    
	/* Dates and time
	--------------------------------------------------------------------------- */
    $current_time = date('Y-m-d H:m:s');   
    $yearMonthDay = date('Y-m-d');

	/* Get userdata
	--------------------------------------------------------------------------- */
	if(isset($_SESSION['Intern_user_loggedin'])){
		$result = $mysqli->query("SELECT * FROM users WHERE ID='".$_SESSION['Intern_user_loggedin']."'");
		$user = $result->fetch_array();
	
    
		/* Include language-file */
		include("languages/NO.php");  	
			
		/* Last intern 
		--------------------------------------------------------------------------- */
		
		$getLatestIntern = $mysqli->query("SELECT MAX(ID) as Max FROM intern WHERE active = 'Yes'");
		$latestIntern = $getLatestIntern -> fetch_array();
		
		/* Throw out user from intern and lock it dooooooown!
		--------------------------------------------------------------------------- */
		$checkIfInternIsOpen = $mysqli->query("SELECT login FROM admin");
		$isInternOpen = $checkIfInternIsOpen -> fetch_array();
		
		if($isInternOpen['login'] == 'Nej'){
			if($user['userlevel'] != 4){
				unset($_SESSION['Intern_user_loggedin']);
				
			}
		}
	}
	/* Include functions
	-----------------------------
	--------------------------------------------- */
    require ("functions.php");
?>


