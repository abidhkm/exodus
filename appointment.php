<?php
 session_start();
 $phone = $_SESSION['phone'];
 $_SESSION['phone'] = $phone;
if(empty($phone))
{
header("Location: http://allyouwant.esy.es");	
}
  ?>
<!DOCTYPE html>
<html>
<head>
 
</head>
<body>
 

 <form action="enter.php" method="post">
  <p>Date: <input type="date" name="date" ></p>
  <p>specialisation:<select name="specialisation">
    <option value="Orthopaedics">Orthopaedics</option>
    <option value="ENT">ENT</option>
    <option value="Paediatrics">Paediatrics</option>

  </select>
  <br><br></p>
  <input type="submit">






</form>
</body>
</html>