<!DOCTYPE html>
<html>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $name = $_POST['name'];
  $location1 = $_POST['location1'];
  $location2 = $_POST['location2'];
  $date1 = $_POST['date1'];
  $date2 = $_POST['date2'];


   $servername = "localhost";
   $username = "root";
   $password = "";
   $databasename="car-project";

   // Create connection
   $conn = new mysqli($servername, $username, $password , $databasename);
   
   
   /*INSERT INTO `buying-checkout` ( `first_name`) VALUES ('test')*/
   $sql = "INSERT INTO `renting-car` ( name, pickup_location , drop_off_location ,pickup_date , drop_off_date ) 
   VALUES ('$name', '$location1' ,'$location2', '$date1' ,'$date2' )";

if ($conn->query($sql) === TRUE) {

 echo "added success";

} 
else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
} 
else {
    echo "no";
}

?>

</body>
</html>

