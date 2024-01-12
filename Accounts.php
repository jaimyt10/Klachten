<?php
require_once "dbConnect.php";
class Accounts
{
    public $id;
    public $fullname;
    public $password;
    public $email;
    


    function __construct($fullname = null, $password = null, $email = null)
    {
        $this->fullname = $fullname;
        $this->password = $password;
        $this->email = $email;
      


    }

    public function Create()
    {


        global $conn;
        $query = $conn->prepare("INSERT INTO accounts (fullname, password, email) VALUES (:fullname, :password, :email)");
        $query->bindParam(":fullname", $this->fullname);
        $query->bindParam(":password", $this->password);
        $query->bindParam(":email", $this->email);
      
        $query->execute();
    }

    public function Delete($id)
    {
        global $conn;
        $sql = "DELETE FROM accounts WHERE id=$id";
        $query = $conn->prepare($sql);
        $query->execute();

    }



        public function Update(){
            global $conn;
            $query = $conn->prepare("UPDATE accounts SET fullname=:fullname, password=:password, email=:email WHERE id=:id");
            $query->bindParam(":fullname", $this->fullname);
            $query->bindParam(":password", $this->password);
            $query->bindParam(":email", $this->email);
            $query->execute();

        }

    public function Read() {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM accounts");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function Search(){
        global $conn;

        $id = $_POST["id"];


        $stmt = $conn->prepare("SELECT * FROM accounts WHERE id = :id");

        $stmt->bindParam(":id", $id);

        $stmt->execute();

         $result = $stmt->fetch(PDO::FETCH_ASSOC);

         $_SESSION['result'] = $result;

    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getfullname()
    {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     */
    public function setfullname($fullname)
    {
        $this->fullname = $fullname;
    }

    /**
     * @return mixed
     */
    public function getpassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setpassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getemail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setemail($email)
    {
        $this->email = $email;
    }



}