<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    if(isset($_POST['login'])){
        $username = $_POST ['username'];
        $password = $_POST ['password'];

        $sql = "select * from studentinfo where username='$username' and Upassword='$password'";
        $result = mysqli_query($con,$sql);
        if($result){
            $num = mysqli_num_rows($result);
            if($num>0){
                echo "login sucessful";
                    $_SESSION['username'] = $username;
                    header('location:EKSA/index.php');
            }else{
                echo "invalid credentials";
            }
        }
    }
}


?>