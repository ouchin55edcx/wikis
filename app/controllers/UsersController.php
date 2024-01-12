<?php
class UsersController extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('User');
    }
    public function sign()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
            $username = htmlspecialchars(trim($_POST['username']));
            $email = htmlspecialchars(trim($_POST['email']));
            $password = htmlspecialchars(trim($_POST['password']));
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // if ($this->userModel->findByEmail($email)) {
            //     $_SESSION['message'] = ['type' => 'error', 'text' => 'Email is already signed.'];
            //     $this->view('Pages/sign');
            //     exit();
            // }

            $newuser = $this->userModel->signUser($username, $email, $hashedPassword);
            if ($newuser) {
                $_SESSION['message'] = ['type' => 'success', 'text' => 'Registration successful.'];
                redirect('Pages/login');
                exit();
            } else {
                $_SESSION['message'] = ['type' => 'error', 'text' => 'Registration failed. Please try again.'];
            }
        } else {
            $this->view('Pages/sign');
        }

    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = trim($_POST['password']);
    
            $user = $this->userModel->getUserByEmail($email);
    
            if ($user && password_verify($password, $user->password)) {
                // Avoid storing the entire user object in the session
                $_SESSION["user_id"] = $user->user_id;
                $_SESSION["username"] = $user->username;
                // var_dump($_SESSION["user"]);

                $_SESSION['message'] = ['type' => 'success', 'text' => 'Login successful.'];
                redirect('Pages/home');  
                exit();
            } else {
                $_SESSION['message'] = ['type' => 'error', 'text' => 'Invalid email or password'];
                $this->view('Pages/login');
                exit();
            }
        } else {
            $this->view('Pages/login');
        }
    }
    
    public function LogOut()
    {
        session_start();

        $_SESSION = array();

        session_destroy();

        redirect('Pages');
        exit();
    }

}
?>
