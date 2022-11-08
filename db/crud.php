<?php
class crud
{
    //private database object;
    private $db;

    function __construct($conn)
    {
        $this->db = $conn;
    }



    public   function    insert($username, $emailid, $phoneno, $userrole, $password, $countrycode)
    {

        $sql = "INSERT INTO users (user_name,email_id,user_role,phone_no,country_code,password) values(:username,:emailid,:userrole,:phoneno,:countrycode,:password)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':username', $username);
        $stmt->bindparam(':emailid', $emailid);
        $stmt->bindparam(':userrole', $userrole);
        $stmt->bindparam(':password', $password);
        $stmt->bindparam(':countrycode', $countrycode);
        $stmt->bindparam(':phoneno', $phoneno);

        $stmt->execute();
        return true;
        $_SESSION['login'] = true;
        try {
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
            $_SESSION['login'] = false;
        }
    }

    public   function    update()
    {
    }

    public   function    delete()
    {
    }

    public function fetchUsers()
    {


        $sql =  "SELECT * FROM users";
        $result = $this->db->query($sql);
        return $result;
    }

    public function validateLoginUser($emailid, $password)
    {
        try {

            $sql = "SELECT * from users  where email_id=:emailid AND password=:password LIMIT 1";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':emailid', $emailid);

            $stmt->bindparam(':password', $password);


            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_OBJ);

            if ($user) {


                $_SESSION['status'] = "user found ";
                $_SESSION['login'] = true;
                //  $_SESSION['id'] = $user['id'];
                echo "data in if  $user->password";
                //   header("Location: index.php");
                return true;
            } else {
                echo "error else";
                $_SESSION['status'] = "User failed";
                $_SESSION['login'] = false;
                // header("Location: signin.php");
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
