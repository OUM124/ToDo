<?php
require_once('connect.php');
class User{
    private $user_id;
    private $email;
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