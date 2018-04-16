<?php
namespace Pondit\Facebook\Post;

use PDO;


class Post
{
    public $host = 'localhost';
    // public $name= 'db_post';
    public $user = 'root';
    public $pass = '';
    public $pdo, $text, $id, $postdel;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=db_post", $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'Connected to Database<br/>';
            // header("location:create.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function setData($data)
    {
        if (array_key_exists('text', $data) && !empty($data['text'])) {
            $this->text = $data['text'];
        }
        if (array_key_exists('id', $data) && !empty($data['id'])) {
            $this->id = $data['id'];
        }
        if (array_key_exists('postdel', $data) && !empty($data['postdel'])) {
            $this->postdel = $data['postdel'];
        }

    }

    public function storeData()
    {
        $sql = "INSERT INTO `tbl_post`( `postdel`) VALUES ('$this->text')";
        $stmt = $this->pdo->exec($sql);
        if ($stmt) {
            echo "insert successfully";
            header("location:index.php");
        } else {
            echo "not insert ";

        }

    }

    public function selectData()
    {
        $sql = "SELECT * FROM `tbl_post` ORDER by id DESC ";
        $data = $this->pdo->query($sql);
//        if ($data->num_rows > 0) {
//            // output data of each row
//            while($row = $data->fetchAll()) {
//                echo"result successfuly";
//            }
//        } else {
//            echo "0 results";
//        }

        return $data;
    }

    public function deleteData()
    {
        $sql = "DELETE FROM `tbl_post` WHERE id ='$this->id'";
        $data = $this->pdo->query($sql);

        if ($data) {
            echo "Record deleted successfully";
            header("location:index.php");
        } else {
            echo "record delete not successfull";
        }

    }

    public function showData()
    {
        $sql = "select * from `tbl_post` WHERE id='$this->id'";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetch();

    }

    public function updateData()
    {
        /*echo '<pre>';
        print_r($this->postdel);
        die();*/
        $sql = 'UPDATE tbl_post SET postdel = :title WHERE id = :id';
        $stmt = $this->pdo->prepare($sql);
        $data= $stmt->execute(array(
            ':id' => $this->id,
            ':title' => $this->postdel
        ));


        if (!empty($data)){
            echo $stmt->rowCount() . " records UPDATED successfully";
            header("location:index.php");
        }else{
           echo " records not UPDATED successfully";
        }

    }

    public function searchData()
    {
        $sql="SELECT * FROM `tbl_post` WHERE `postdel` LIKE :keyword ";
        $stmt=$this->pdo->prepare($sql);
        $stmt->bindValue(':keyword','%%', PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();


//        $sql = "SELECT * FROM `tbl_post` WHERE `postdel` LIKE :keyword";
//        $stmt = $this->pdo->prepare($sql);
//        $stmt->bindParam(':keyword', $query);
//        $stmt->execute();
//        return $stmt->fetchAll();
    }

}

?>

