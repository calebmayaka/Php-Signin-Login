<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
if(isset($_POST['signup'])){
$Sname = $_POST['name'];
$username = $_POST['username'];
$kcpeyear = $_POST['kcpe'];
$Upassword = ($_POST['password']);
$confirmpassword = ($_POST['confirm']);

$sql="select * from studentInfo where username='$username'";
$result=mysqli_query($con,$sql);
if($result){
    $num = mysqli_num_rows($result);
    //echo $num;

    if($num>0){
        echo "user already exists";      
}else{
    if($Upassword===$confirmpassword){
    $sql  = "insert into studentInfo (nameofstudent,username,kcpeyear,Upassword) values ('$Sname','$username','$kcpeyear','$Upassword')";
    $result = mysqli_query($con,$sql);
if($result){
    echo "signup sucessful";
}}else{
    echo"password did not match"; 
    }
    }
}
    }
        
    }
    

?>