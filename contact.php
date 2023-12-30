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

    $FullName = $_POST['fullname'];
    $MobileNum =$_POST['phoneno'];
    $Email = $_POST['email'];
    $Message = $_POST['textarea'];

    // $query="CREATE TABLE MessagesFromUser(
    //     FullName VARCHAR(20) NOT NULL,
    //     MobileNum VARCHAR(12) NOT NULL,
    //     Email VARCHAR(30) NOT NULL,
    //     Messge VARCHAR(120) NOT NULL 
    //     );";

    // if (mysqli_query($conn,$query))
    // {
    //     echo "table is created";
    // }
    // else
    // {
    //     echo "error".mysqli_error($conn);
    // }

    $query="INSERT  MessagesFromUser VALUES('$FullName', '$MobileNum', '$Email', '$Message');";
	if(mysqli_query($conn, $query))
	{
	 	echo "record inserted"."<br>";
	}
	else
	{
	 	echo "error".mysqli_error($conn)."<br>";
    }


    echo "You Entered Full Name is ". $FullName ."<br>";
    echo "You Entered Mobile Number is ". $MobileNum ."<br>";
    echo "You Entered Email is ". $Email ."<br>";
    echo "You Entered Meassage is ". $Message ."<br>";


    $check=mysqli_query($connection, $query);
	if(mysqli_num_rows($check))
	{
		while($row=mysqli_fetch_assoc($check))
		{
			echo $row['FullName']." ".$row['MobileNum']." ".$row['Email']." ".$row['Message'];
		}
	}
	else
	{
		echo "empty table";
	}
?>
