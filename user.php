<?php
require_once('connect.php');
class User{
    private $user_id;
    private $email;
    private $tasks;
    private $username;
    private $password;
    protected $conn;

    public function __construct($user_id,$username,$email,$password)
    {
        $this->user_id = $user_id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        global $pdo;
        $this->conn = $pdo;
    }
    public function save_to_db($id, $username,$email, $password) {
        $sql = "INSERT INTO user (user_id, username,email,password)
        VALUES ('$id', '$username', '$email','$password')";
        $stmt = $this->conn->prepare($sql);
        $res = $stmt->execute();
        if($res)
        {
            echo "<script>succesfully added to database</script>";
            
        }
        else{
            echo "Something is wrong";
        }
    }

    

    public function change_password($pass,$id)
    {
        $sql = "UPDATE user set password = '$pass' WHERE user_id='$id" ;
        $stmt = $this->conn->prepare($sql);
        $res = $stmt->execute();
        if($res){
            echo '<script>Password changed</script>';
        }
        else{
            echo "Something went wrong";
        }
    }

    public function get_info($id)
    {
        $sql = "SELECT * FROM  user WHERE user_id='$id" ;
        $stmt = $this->conn->prepare($sql);
        $res = $stmt->execute();
        if($res){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            echo '<table class="table">';
            echo 'thead>';
            echo '<tr>';
            echo '<th scope="col">ID</th>';
            echo '<th scope="col">Username</th>';
            echo '<th scope="col">Email</th>';
            echo '<th scope="col">Password</th>';
            echo ' </tr>';
            echo '</thead>';
            echo '<tr>';
            echo '<td scope="row">'.$row['user_id'].'</td>';
            echo '<td >'.$row['username'].'</td>';
            echo '<td>'.$row['email'].'</td>';
            echo '<td >'.$row['password'].'</td>';
            echo ' </tr>';
            echo '</table>';
        }
        else{
            echo "Something went wrong";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>