<?php
if($_POST["submit"]) {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "id14284246_formdata";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
    $sender=$_POST["name"];
    $senderphone=$_POST['number'];
    $senderEmail=$_POST["e-mail"];
    $city=$_POST["city"];
    $service=$_POST["service"];
    $sql = "INSERT INTO Details (Name,PhoneNo,Email,City,Service)
      VALUES ('$sender', $senderphone, '$senderEmail','$city','$service')";
    if (mysqli_query($conn, $sql) === TRUE) {
        if($service=='Dashboard'){
        echo 
        "<script>
            alert('Submitted Successfully');
            window.location='Dashboard.html';
        </script>";}
        elseif($service=='Analytics'){
            echo 
            "<script>
                alert('Submitted Successfully');
                window.location='Analytics.html';
            </script>";
        }
        else{
          "<script>
          alert('Submitted Successfully');
          window.location='Marketing.html';
      </script>";
        }
      } 
      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
}
?>
