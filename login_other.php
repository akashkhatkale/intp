<?php
session_start();
if(isset($_POST["Submit"])){
    $email = $_POST["Email"];
    $pass = $_POST["Password"];

    if(!empty($email) || !empty($pass)){
        $host = "localhost";
        $username = "id15094770_user";
        $password = "7Ha}FRf/Ecr-jYm";
        $dbname = "id15094770_straycare";
        
        $conn = mysqli_connect($host,$username, $password, $dbname);
        
        
        if(isset($_POST["Doctor"])){
            $query = "SELECT * FROM doctors WHERE email = '".$email."' and password = '".$pass."' " ;
        }else{
            $query = "SELECT * FROM users WHERE email = '".$email."' and password = '".$pass."' " ;
        }
        
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            $_SESSION["email"] = $email;
            $_SESSION["name"] = $row["name"];
          }
          if(isset($_POST["Doctor"])){
            header("location:welcome_doctor.php");
            }else{
                header("location:welcome.php");
            }
          
        } else {
          header("location:login.php?mssg=No user found");
        }

        mysqli_close($conn);
    }else{
        header("location:login.php?mssg=All fields are required");
    }
}else{
    header("location:login.php");
}




?>