<?php

// Server name must be localhost 
$servername = "localhost";

// In my case, user name will be root 
$username = "root"; 

// Password is empty 
$password = ""; 

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$date = date('Y-m-d H:i:s');
$image = $_POST['img'];
$id = 104; 




// Creating a connection 
$conn = new mysqli($servername, 
			$username, $password,"krishna"); 

// Check connection 
if ($conn->connect_error) { 
	die("Connection failure: " . $conn->connect_error); 
} 

$sql = "INSERT INTO contacts (ID,Name,Email,Subject,Date_Time,Image) VALUES('$id','$name','$email','$subject','$date','$image')";



if ($conn->query($sql) === TRUE) {
  include 'profile.php'; 
}
else {
  echo "Error:" . $sql . "<br>" . $conn->error;
}


// $sql = "CREATE TABLE php_niceumang(id INT(6) PRIMARY KEY, Ecode INT(30) NOT NULL, Ename VARCHAR(30) NOT NULL, 
//         Technology VARCHAR(50), Salary INT(10), Image BLOB(80))";

// if ($conn->query($sql) === TRUE) {
//     echo "Table created ";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }


// $conn = "INSERT INTO user (Name, Email, Subject)
// VALUES ('John Abraham', 'johnabraham@email.com', 'Web Developing')";
// $sql = "INSERT INTO user (Name, Email, Subject)
// VALUES ('Akshay Kumar', 'akshaykumar@email.com', 'Mobile App')";
// $sql = "INSERT INTO user (Name, Email, Subject)
// VALUES ('Ranvir Kapoor', 'ranvirkapoor@email.com', 'Web Developing')";

// if ($conn->query($sql) === TRUE) {
//     echo "New records created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }


// $query1 = exec("INSERT INTO user (ID,Name, Email, Subject)
//     VALUES (4,'John Abraham', 'johnabraham@email.com', 'Web Developing')");
// $query2 = exec("INSERT INTO user (ID,Name, Email, Subject)
//     VALUES (5,'Akshay Kumar', 'akshaykumar@email.com', 'Mobile App')");
// $query3 = exec("INSERT INTO user (ID,Name, Email, Subject)
//     VALUES (6,'Ranvir Kapoor', 'ranvirkapoor@email.com', 'Web Developing')");
// $conn->commit();
// if ($conn->query("INSERT INTO user (ID,Name, Email, Subject)
// VALUES (4,'John Abraham', 'johnabraham@email.com', 'Web Developing')") === TRUE) {
//         echo "New records added successfully";
//       } else {
//         echo "Error: " . $conn . "<br>" . $conn->error;
//         die();
//       }

// $result = $conn->query("SELECT * FROM user");
// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         echo "Name: " . $row["Name"]. " - Email: " . $row["Email"]. " - Subject: " . $row["Subject"]."<br>";
//     }
// } else {
//     echo "0 results";
// }


 $conn->close();





// if ($result = $conn->query("SELECT * FROM user")) {

//     /* fetch associative array */
//     while ($row = $result->fetch_assoc()) {
//         $Name = $row["Name"];
//         $Email = $row["Email"];
//         $Subject = $row["Subject"];
// 		echo "$Name";
// 		echo " |   $Email";
// 		echo "  |  $Subject";echo "<br>";
//     }


// }



?>