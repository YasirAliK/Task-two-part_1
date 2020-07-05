 <?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	// Create connection
	@$DBconn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($DBconn->connect_error) 
	{
	  die("Connection failed: " . $DBconn->connect_error);
	}
					 
		if(!$DBconn)
		{
			echo "not connect with server";
		}


		if(!mysqli_select_db($DBconn,$dbname))
		{
			echo "Database not selected";
		}
/*
		if(isset($_POST['submit']))
		{

			$Forward = $_POST['Forward'];
		    $Lef = $_POST['Left'];
		    $Rig = $_POST['Right'];

			 $sql = "INSERT INTO dirction2 (Forward, Left_Direct , Right_Direct) VALUES ($Forward, $Lef, $Rig)";
				 if ($conn->multi_query($sql) === TRUE) 
				{
			 		echo "New records created successfully";
				} 
				else 
				{
			    	echo "Error: " . $sql . "<br>" . $conn->error;
				}
		}
*/





		if(isset($_POST['Forward']))
		{	
			 Forward();
		}
		if(isset($_POST['Left']))
		{
			 Left();
		}
		if(isset($_POST['Right']))
		{
			 Right();
		}
		if(isset($_POST['Backword']))
		{
			 Backword();
		}
		if(isset($_POST['Stop']))
		{
			 Stop();
		}

		function Forward()
		{
			

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "myDB";

			// Create connection
			@$DBconn = new mysqli($servername, $username, $password, $dbname);

			$Forward = "F";
		    $Lef = "";
		    $Rig = "";
		    $Backword = "";
		    $Stop = "";

			 $sql = "INSERT INTO dirction1 (Forward, L , R , Backword, Stop) VALUES ('$Forward', '$Lef', '$Rig' , '$Backword' , '$Stop')";
				 if ($DBconn->multi_query($sql) === TRUE) 
				{
			 		echo "F";
				} 
				else 
				{
			    	echo "Error: " . $sql . "<br>" . $DBconn->error;
				}

		}

		function Left()
		{
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "myDB";

			// Create connection
			@$DBconn = new mysqli($servername, $username, $password, $dbname);

			$Forward = "";
		    $Lef = "L";
		    $Rig = "";
		    $Backword = "";
		    $Stop = "";

			 $sql = "INSERT INTO dirction1 (Forward, L , R , Backword, Stop) VALUES ('$Forward', '$Lef', '$Rig' , '$Backword' , '$Stop')";
				 if ($DBconn->multi_query($sql) === TRUE) 
				{
			 		echo "L";
				} 
				else 
				{
			    	echo "Error: " . $sql . "<br>" . $DBconn->error;
				}
		}

		function Right()
		{
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "myDB";

			// Create connection
			@$DBconn = new mysqli($servername, $username, $password, $dbname);

			$Forward = "";
		    $Lef = "";
		    $Rig = "R";
		    $Backword = "";
		    $Stop = "";

			 $sql = "INSERT INTO dirction1 (Forward, L , R , Backword, Stop) VALUES ('$Forward', '$Lef', '$Rig' , '$Backword' , '$Stop')";
				 if ($DBconn->multi_query($sql) === TRUE) 
				{
			 		echo "R";
				} 
				else 
				{
			    	echo "Error: " . $sql . "<br>" . $DBconn->error;
				}
		}

		function Backword()
		{
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "myDB";

			// Create connection
			@$DBconn = new mysqli($servername, $username, $password, $dbname);

			$Forward = "";
		    $Lef = "";
		    $Rig = "";
		    $Backword = "B";
		    $Stop = "";

			 $sql = "INSERT INTO dirction1 (Forward, L , R , Backword, Stop) VALUES ('$Forward', '$Lef', '$Rig' , '$Backword' , '$Stop')";
				 if ($DBconn->multi_query($sql) === TRUE) 
				{
			 		echo "B";
				} 
				else 
				{
			    	echo "Error: " . $sql . "<br>" . $DBconn->error;
				}
		}

		function Stop()
		{
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "myDB";

			// Create connection
			@$DBconn = new mysqli($servername, $username, $password, $dbname);

			$Forward = "";
		    $Lef = "";
		    $Rig = "";
		    $Backword = "";
		    $Stop = "Stop";

			 $sql = "INSERT INTO dirction1 (Forward, L , R , Backword, Stop) VALUES ('$Forward', '$Lef', '$Rig' , '$Backword' , '$Stop')";
				 if ($DBconn->multi_query($sql) === TRUE) 
				{
			 		echo "Stop";
				} 
				else 
				{
			    	echo "Error: " . $sql . "<br>" . $DBconn->error;
				}
		}

		$DBconn->close();

		// header("refresh:2; url=directControl.html");
?>
	