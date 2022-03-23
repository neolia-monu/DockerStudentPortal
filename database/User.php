<?php

class User {

    private $user;

    public function __construct($conn){
        $this->user = $conn;
    }

    public function insertUser($user, $pass){
        try{
            $result = $this->getUserByUsername($user);
            if($result['num'] > 0){
                return false;
            }else{
                $new_passwd = sha1($pass.$user);

                $sql = "INSERT INTO USERS(username, password) VALUES (:user, :pass)";

                $stmt = $this->user->prepare($sql);

                $stmt->bindParam(':user', $user);
                $stmt->bindParam(':pass', $new_passwd);

                $stmt->execute();
//                echo "INSERTED INTO USER";
                return true;
            }
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }


    public function getUser($user, $pass) {
        try {

            $new_passwd = sha1($pass.$user);

            $sql = "SELECT * FROM USERS WHERE username = :user AND password = :pass";

            $stmt = $this->user->prepare($sql);

            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':pass', $new_passwd);

            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function editUsername($user){

        $chk_user = $this->getUserByUsername($user);

        if($chk_user['num'] > 0){
            return false;
        }else {

            $result = $this->getUId($user);
            $uid = $result['uid'];

            $sql = "UPDATE `USERS` SET `username` = :user WHERE uid = $uid ";

            try{
                $stmt = $this->user->prepare($sql);

                $stmt->bindParam(':user', $user);

                $stmt->execute();

                return true;
            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
    }

//    public function editPassword($uid, $pass){
//        try{
//
////            $new_passwd = sha1($password.$username);
//            $sql = "UPDATE USERS SET `password` = :pass WHERE uid = $uid";
//            $stmt = $this->user->prepare($sql);
//
//            $stmt->bindParam(':pass', $pass);
//
//            $stmt->execute();
//
//            return true;
//
//        }catch (PDOException $e){
//            echo $e->getMessage();
//            return false;
//        }
//    }

    public function getUserByUsername($user){
        try{
            $sql = "SELECT COUNT(*) AS num FROM USERS WHERE username = :user";

            $stmt = $this->user->prepare($sql);
            $stmt->bindParam(':user', $user);

            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

//            print_r($result);

            return $result;

        }catch(PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getUId($username){
        try{
            $sql = "SELECT uid FROM USERS WHERE username = :username";

            $stmt = $this->user->prepare($sql);
            $stmt->bindParam(':username', $username);

            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

//            print_r($result);
//            $result = $this->getUId($username);

            return $result;

        }catch (PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    public function getUsers(){
        try{

            $sql = "SELECT * FROM USERS";
            $result = $this->user->query($sql);

            return $result;

        }catch (PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
}