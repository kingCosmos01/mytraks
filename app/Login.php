<?php

    class Login extends Database {

        private $fullname;
        private $password;

        public $error;

        public function __construct($fullname, $password) {

            $this->fullname = $fullname;          
            $this->password = $password;
           
        }

        public function LoginUser()
        {
            if($this->emptyInputs() == false)
            {
                $this->error = "Empty Inputs";
                $this->redirect('http://localhost/mytraks/public/views/login.php', ['err', $this->error]);
                exit();
            }
            if($this->checkIfUsernameExists($this->fullname) == false || $this->checkIfPasswordExists($this->password) == false)
            {
                $this->error = "User Does not Exist!";
                $this->redirect('http://localhost/mytraks/public/views/login.php', ['err', $this->error]);
                exit();
            }

            $this->setUser($this->fullname);

        }

        private function checkIfUsernameExists($username)
        {
            $result;

            $query = "SELECT username FROM users WHERE username = ?";
            $stmt = $this->connect()->prepare($query);

            $stmt->execute(array($username));

            if($stmt->rowCount() > 0)
            {
                $result = true;
            }
            else {
                $result = false;
            }

            return $result;
        }

        private function checkIfPasswordExists($password)
        {
            $result;

            $query = "SELECT password FROM users WHERE password = ?";
            $stmt = $this->connect()->prepare($query);

            $stmt->execute(array($password));

            $pass = $stmt->fetchAll();

            $isPasswordVerified = ($password == $pass) ? false : true;

            if($isPasswordVerified == true)
            {
                $result = true;
            }
            else {
                $result = false;
            }

            return $result;
        }


        private function setUser($username)
        {
            session_start();

            return $_SESSION['user'] = $username;
        }



        private function emptyInputs()
        {
            $result;
            if(empty($this->fullname) || empty($this->password))
            {
                $result = false;
            }
            else {
                $result = true;
            }

            return $result;
        }

        public function redirect($url, $params = [])
        {
            return header("Location: " . $url ."?param=". urlencode($params[0]) . "&m=" . urlencode($params[1]));
        }

        

      

    }