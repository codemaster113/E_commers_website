<?php
    $conn=mysqli_connect("localhost","root","","Restaurantly");
    if($conn)
    {
        echo "Connection is established successfully"."<br>";
    }
    else
    {
        echo "Connection fail";

    }

    $Username = $_GET['name'];
	$Email = $_GET['email'];
    $Pass =$_GET['pass'];
    $PhoneNum = $_GET['phoneno'];
    $QuantityNum = $_GET['quantityno'];
    $ItemName = $_GET['itemName'];

    // $query = "CREATE TABLE OrderItems (
    //     Username VARCHAR(30) NOT NULL,
    //     Email VARCHAR(30) NOT NULL,
    //     Pass VARCHAR(30) NOT NULL,
    //     PhoneNum VARCHAR(15) NOT NULL,
    //     Quantity CHAR(10) NOT NULL,
    //     Itemname VARCHAR(40) NOT NULL
    // );";

    // if (mysqli_query($conn,$query))
    // {
    //     echo "table is created"."<br>";
    // }
    // else
    // {
    //     echo "error".mysqli_error($conn);
    // }

    $query="INSERT INTO  OrderItems VALUES('$Username', '$Email', '$Pass', '$PhoneNum', '$QuantityNum', '$ItemName');";
	if(mysqli_query($conn, $query))
	{
	 	echo "record inserted"."<br>";
	}
	else
	{
	 	echo "error".mysqli_error($conn)."<br>";
    }

    echo "You entered full name is ". $Username ."<br>";
    echo "You entered full name is ". $Email ."<br>";
    echo "You entered full name is ". $Pass ."<br>";
    echo "You entered full name is ". $PhoneNum ."<br>";
    echo "You entered full name is ". $QuantityNum ."<br>";
    echo "You entered full name is ". $ItemName ."<br>";

    $check=mysqli_query($connection, $query);
	if(mysqli_num_rows($check))
	{
		while($row=mysqli_fetch_assoc($check))
		{
			echo $row['Username']." ".$row['Email']." ".$row['Pass']." ".$row['PhoneNum']." ".$row['QuantityNum']." ".$row['ItemName'];
		}
	}
	else
	{
		echo "empty table";
	}
?>
