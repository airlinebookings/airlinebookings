
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];

    define('dbHostname', 'localhost');
    define('dbUsername', 'root');
    define('dbPassword', '');
    define('dbName', 'webproject');

    $con = new mysqli(dbHostname,dbUsername,dbPassword,dbName);

    if($con->connect_error)
    {
            die("Connection Error".$con->connect_error);
    }

    $qry = "INSERT INTO fedbck (name,email,phone,comment) VALUES ('".$name."','".$email."','".$phone."','".$comment."')";

    $result = $con->query($qry);
    if($result) {
        
      echo "Message sent successfully";
    }
    else {
        echo"Error in sending";
    }

    $con->close();

?>