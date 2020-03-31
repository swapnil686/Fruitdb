<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$edate = $_POST['edate'];
$frname = $_POST['frname'];
$frquantity = $_POST['frquantity'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$State = $_POST['State'];




if(!empty($fname) || !empty($lname) || !empty($email) || !empty($phno) || !empty($edate) || !empty($frname) || !empty($frquantity) || !empty($Address) || !empty($City) || !empty($State)) {
  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "fruitdb1";

  //create connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

  if(mysqli_connect_error()){
    die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_errno());

  } else {
    $SELECT  = "SELECT email From frdb Where email = ? Limit 1";
    $INSERT = "INSERT Into frdb (fname,lname,email,phno,edate,frname,frquantity,Address,City,State) values(?,?,?,?,?,?,?,?,?,?)";

    //Prepare Statement
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if($rnum==0) {
      $stmt->close();

      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssiisssss", $fname, $lname,$email,$phno,$edate,$frname,$frquantity,$Address,$City,$State);
      $stmt->execute();
      echo "New record inserted Successfully";
  } else {
      echo "Email Already Registered";
  }
  $stmt->close();
  $conn->close();
}
} else {
  echo "All Fields are required";
  die();
}
?>
