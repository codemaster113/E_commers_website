<?php
    $conn=mysqli_connect("localhost","root","","Restaurantly");
    // if($conn)
    // {
    //     echo "Connection is established successfully"."<br>";
    // }
    // else
    // {
    //     echo "Connection fail";

    // }

    $FullName = $_POST['FullName'];
	$Email = $_POST['email'];
    $Mobile = $_POST['phone'];
    $DateofDay = $_POST['dateofday'];
    $Timeofday = $_POST['timeofday'];
    $People = $_POST['people'];
    $DescriptionTable = $_POST['textarea'];

    // $query="CREATE TABLE BookingTable(
    //     FullName VARCHAR(20) NOT NULL,
    //     Email VARCHAR(30) NOT NULL,
    //     Mobile VARCHAR(12) NOT NULL, 
    //     Dateofday VARCHAR(10) NOT NULL,
    //     TimeofDay VARCHAR(10) NOT NULL,
    //     People VARCHAR(10) NOT NULL,
    //     DescriptionTable VARCHAR(100) NOT NULL 
    //     );";

    // if (mysqli_query($conn,$query))
    // {
    //     echo "table is created";
    // }
    // else
    // {
    //     echo "error".mysqli_error($conn);
    // }

    $query="INSERT INTO  BookingTable  VALUES('$FullName', '$Email', '$Mobile', '$DateofDay', '$Timeofday', '$People', '$DescriptionTable');";
	if(mysqli_query($conn, $query))
	{
	 	echo "record inserted"."<br>";
	}
	else
	{
	 	echo "error".mysqli_error($conn)."<br>";
    }

    echo "You entered full name is ". $FullName ."<br>";
    echo "You entered email is ". $Email ."<br>";
    echo "You entered Mobile Number is ". $Mobile ."<br>";
    echo "You entered Date of the day is ". $DateofDay ."<br>";
    echo "You entered Time of the day is ". $Timeofday ."<br>";
    echo "You entered number of people is ". $People ."<br>";
    echo "You entered description is ". $DescriptionTable ."<br>";

    $check=mysqli_query($connection, $query);
	if(mysqli_num_rows($check))
	{
		while($row=mysqli_fetch_assoc($check))
		{
			echo $row['FullName']." ".$row['Email']." ".$row['Mobile']." ".$row['DateofDay']." ".$row['Timeofday']." ".$row['People']." ".$row['DescriptionTable'];
		}
	}
	else
	{
		echo "empty table";
	}
?>
