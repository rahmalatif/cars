<!DOCTYPE html>
<html>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
   // print_r($_POST);
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $nationalid = $_POST['nationalid'];
   $email = $_POST['email'];
   $carmodel = $_POST['carmodel'];
   $number = $_POST['number'];
   $country = $_POST['country'];
   $address = $_POST['address'];
   $namecard = $_POST['namecard'];
   $cardnum = $_POST['cardnum'];
   $date1 = $_POST['date1'];
   $cvv = $_POST['cvv'];
   $date2 = $_POST['date2'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename="car-project";

    // Create connection
    $conn = new mysqli($servername, $username, $password , $databasename);
    
    
    /*INSERT INTO `buying-checkout` ( `first_name`) VALUES ('test')*/
    $sql = "INSERT INTO `buying-checkout` ( first_name, last_name , national_id ,email , car_model , mobile_Number , country , address , name_on_card ,credit_card_number , exp_month , cvv , exp_year  ) 
    VALUES ('$firstname', '$lastname' ,'$nationalid', '$email' ,'$carmodel' , ' $number' ,'$country', '$address' ,'$namecard' , '$cardnum' , '$date1' ,'$cvv' ,'$date2')";

if ($conn->query($sql) === TRUE) {

  echo "added success";
} 
else {

  echo "Error: " . $sql . "<br>" . $conn->error;

}

   
}
else{
    echo "no";
}

?>
</body>
</html>