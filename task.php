<?php
require ('connect.php');
require_once('category.php');
class Task{
    private $task_id;
    private $task_name;
    private $task_description;
    private $task_due_date;
    private $category;
    private $task_status;
    protected $conn;

    public function __construct($task_id,$task_name,$task_description,$task_due_date,$task_status)
    {
        $this->task_id = $task_id;
        $this->task_name = $task_name;
        $this->task_description = $task_description;
        $this->task_due_date =  $task_due_date;
        $this->task_status =  $task_status;
        global $pdo;
        $this->conn = $pdo;
    }

    public function save_info_db()
    {
        $sql = "INSERT INTO task (task_id, task_name,task_description,due_date,status)
        VALUES ('$this->task_id', '$this->task_name', '$this->task_description','$this->task_due_date','$this->task_status')";
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
    public function get_task_info()
    {
        $sql = "SELECT * FROM task where task_id = '$this->task_id'";
        $stmt = $this->conn->prepare($sql);
        $res = $stmt->execute();
        if($res){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            echo '<table class="table">';
            echo 'thead>';
            echo '<tr>';
            echo '<th scope="col">ID</th>';
            echo '<th scope="col">Name</th>';
            echo '<th scope="col">Description</th>';
            echo '<th scope="col">Due date</th>';
            echo '<th scope="col">Status </th>';
            echo ' </tr>';
            echo '</thead>';
            echo '<tr>';
            echo '<td scope="row">'.$row['task_id'].'</td>';
            echo '<td >'.$row['task_name'].'</td>';
            echo '<td>'.$row['task_description'].'</td>';
            echo '<td >'.$row['task_due_date'].'</td>';
            echo '<td >'.$row['task_status'].'</td>';
            echo ' </tr>';
            echo '</table>';
        }
        else{
            echo "Something went wrong";
        }
    }
    public function update_task_name($new)
    {
        $req = "UPDATE task set task_name='$new' where task_id = '$this->task_id' ";
        $stm = $this->conn->prepare($req);
        $res = $stm->execute();
        if($res)
        {
            echo "<script>Updated</script>";
            
        }
        else{
            echo "Something is wrong";
        }
    }


    public function update_task_due($new)
    {
        $req = "UPDATE task set due_date='$new' where task_id = '$this->task_id' ";
        $stm = $this->conn->prepare($req);
        $res = $stm->execute();
        if($res)
        {
            echo "<script>Updated</script>";
            
        }
        else{
            echo "Something is wrong";
        }
    }
    public function update_task_description($new)
    {
        $req = "UPDATE task_description='$new' where task_id = '$this->task_id' ";
        $stm = $this->conn->prepare($req);
        $res = $stm->execute();
        if($res)
        {
            echo "<script>Updated</script>";
            
        }
        else{
            echo "Something is wrong";
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












