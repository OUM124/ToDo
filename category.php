<?php
require_once('connect.php');
class Category{
    private $category_id;
    private $category_description;
    protected $conn;

    public function __construct($category_id,$category_description)
    {
        $this->category_id = $category_id;
        $this->category_description = $category_description;
        global $pdo;
        $this->conn = $pdo;

    }


    public function update_category_description($new)
    {
        $req = "UPDATE Category set category_name='$new' where category_id = '$this->category_id' ";
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