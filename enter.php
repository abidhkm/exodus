<?php
 session_start();

  $phone = $_SESSION['phone'];
    $specialisation = $_POST['specialisation'];
    $date = $_POST['date'];
if(empty($phone) ||empty($specialisation)||empty($date))
{
header("Location: http://allyouwant.esy.es/appointment.php");	
}

$url="mysql";
$username = "";
$password = "";
$dbname = "";
$conn = mysqli_connect($url, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

// Create connection
$sql = "INSERT INTO appoint (phone, specialisation, booked_date)
VALUES ('$phone', '$specialisation', '$date')";
if (mysqli_query($conn, $sql)) {
  echo "appointed\r\n";

$sql ="select * from appoint where phone='$phone' ";
 $result = mysqli_query($conn, $sql);

echo "your history :\n";

echo "<table border='1'>
<tr>
<th>specialisation</th>
<th>booked date</th>
<th>booked on</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['specialisation'] . "</td>";
echo "<td>" . $row['booked_date'] . "</td>";
echo "<td>" . $row['booking_date'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);

}
  ?>
<?php
if(isset($_POST['reg_button'])){
header("Location: http://allyouwant.esy.es/google-login.php");
exit;
}
?>  



  <form action="" method="post">
add event to google calender  :
<input type='submit' name='reg_button' value='Register' class='register' />
</form>

 