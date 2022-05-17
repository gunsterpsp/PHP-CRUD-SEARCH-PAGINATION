<?php

    class Model{

        public $server = "localhost";
        public $username = "root";
        public $password = "";
        public $db = "tutorial";
        public $conn;

        public function __construct(){

            try {
                $this->conn = new PDO("mysql:host=$this->server; dbname=$this->db", $this->username, $this->password);
                
            } catch (PDOException $e) {
                $e->getMessage();
            }


        }

        public function insert(){

            if(isset($_POST['submit'])){
                
                if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile'])) {
                 
                    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile'])) {
                    
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $mobile = $_POST['mobile'];
                        
                        $myQuery = "INSERT INTO users (name, email, mobile) VALUES ('$name', '$email', '$mobile')";

                        if ($mySQL = $this->conn->exec($myQuery)) {
                            echo "<script>swal('Success!', 'You have added new record!', 'success');
                            </script>";
                            echo "<script>setTimeout(function(){location.href = 'index.php'}, 2000);</script>";
                        }


                    }else {
                        echo "<script>swal('Empty!', 'Please fill out all fields!', 'warning');
                            </script>";
                    }

                }
            }

        }

        public function fetch(){

            $data = null;
            $stmt = $this->conn->prepare("SELECT * FROM users");
            $stmt->execute();
            $data = $stmt->fetchAll();
            
            return $data;
            


        }

        public function delete(){

            if (isset($_POST['del_id'])) {
            
                $del_id = $_POST['del_id'];
                $myQuery = "DELETE FROM users WHERE id = '$del_id' ";

                if ($mySQL = $this->conn->exec($myQuery)) {
                    echo "<script>setTimeout(function(){location.href = 'index.php'}, 1500);</script>";
                    
                }

            }

        }

        public function read(){

            if (isset($_POST['read_id'])) {
            
            $read_id = $_POST['read_id'];

            $data = null;
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = '$read_id' ");
            $stmt->execute();
            $data = $stmt->fetch();

            return $data;


            }
        
            

        }

        public function edit(){

            if (isset($_POST['edit_id'])) {
            
                $edit_id = $_POST['edit_id'];
               
                $data = null;
                $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = '$edit_id' ");
                $stmt->execute();
                $data = $stmt->fetch();
    
                return $data;




            }

        }


        public function update($data){

            $myQuery = "UPDATE users SET name = '$data[edit_name]', email = '$data[edit_email]', mobile = '$data[edit_mobile]' WHERE id = '$data[edit_id]' ";

            if ($mySQL = $this->conn->exec($myQuery)) {
                echo "<script>swal('Success!', 'You have updated a record!', 'success');
                            </script>";
                            echo "<script>setTimeout(function(){location.href = 'index.php'}, 2000);</script>";
                            
            }else {
                echo "<script>swal('Empty!', 'Please fill out all fields!', 'warning');
                            </script>";
            }




        }

        






    }


?>

