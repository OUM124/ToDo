<?php
require_once('user.php');
if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $newUser = new User($id,$name,$email,$password);
    $newUser->save_to_db($id,$name,$email,$password);
}








?>