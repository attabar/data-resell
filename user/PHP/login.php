<?php
session_start();
require_once 'connection.php';

class Login {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function userLogin($username, $password){
        $response = [];

        if(empty($username) || empty($password)){
            $response['status'] = 'error';
            $response['message'] = "All the Fields Are Required";
        } else {
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if(password_verify($password, $row['pass'])){
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['fullname'] = $row['fname'] . $row['lname'];

                    $response = ['status' => true, 'title' => 'Successful', 'message' => "Login was Successful"];
                } else {
                    $response = ['status' => false, 'title' => 'Wrong Input', 'message' => 'Invalid Password'];
                }
            } else {
                $response = ['status' => false, 'title' => 'No User', 'message' => "User not found"];
            }
        }

        // Output the JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    $login = new Login($conn);
    $login->userLogin($username,$password);
}
?>
