<?php
 $firstname=$_POST['fname'];
 $lastname= $_POST['lname'];
 $time= $_POST['time'];
 $party= $_POST['party'];
 $mail= $_POST['mail'];
 $phone= $_POST['phone'];
 $other= $_POST['other'];

 // database connection
 $conn= new mysqli("localhost","root","","APT1040GROUPWORK");
 if(mysqli_connect_error()){
    die("Connection Failed (" . mysqli_connect_errno() . ")"
    . mysqli_connect_error());
} else {
    $sql= "INSERT INTO reservation (first, last, email, phone, time, party, other)
    VALUES ( '$firstname', '$lastname', '$mail', '$phone', '$time', '$party', '$other')";
    if ($conn-> query($sql)){
        echo "new reservation made";
   }
   else{
    echo "error:" .$sql . "<br>" . $conn-> error;
   }
   
   
    $conn->close();
}
?>
