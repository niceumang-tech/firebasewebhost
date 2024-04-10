<!DOCTYPE html>
<html lang="en">

<?php
$conn = new mysqli($servername, 
$username, $password,"krishna");
echo $id;
$sql = "SELECT * FROM contacts where ID = $id";
$result = $conn->query($sql);
$name= "";
$email = "";
$subject = "";
$date = "";
$image = "";


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row["Name"];
        $email = $row["Email"];
        $subject = $row["Subject"];
        $date = $row["Date_Time"];
        $image = $row["Image"];
    }


} else {
    echo "0 results";
}

?>
<body>
    <p>Here is the information you have submitted:</p>
    <ol>  
        <li><em>Name:</em> <?php echo $name?></li>
        <li><em>Email:</em> <?php echo $email?></li>
        <li><em>Subject:</em> <?php echo $subject?></li>
        <li><em>Date:</em> <?php echo $date?></li>
        <li><em>Image:</em> <?php echo "$image" ?></li>
        <img id="image" src="download.jpg" width="100px" height="100px"/>
    </ol>

</body>
</html>