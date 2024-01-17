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
    
            // Check if the email already exists
            $existingUser = $this->userModel->getUserByEmail($email);
            if ($existingUser) {
                // Display alert and redirect using JavaScript
                echo "<script>alert('This email is already registered. Please use a different email.');</script>";
                echo "<script>window.location.href = '".URLROOT."Pages/sign';</script>";
                exit();
            }
    
            // If the email doesn't exist, proceed with user registration
            $newUser = $this->userModel->signUser($username, $email, $hashedPassword);
    
            if ($newUser) {
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
                $_SESSION["is_admin"] = $user->is_admin;
    
                $_SESSION['message'] = ['type' => 'success', 'text' => 'Login successful.'];
    
                if ($user->is_admin == 1) {
                    // Redirect to the admin dashboard if the user is an admin
                    redirect('Admin/dashboard');
                } else {
                    // Redirect to the home page for non-admin users
                    redirect('Pages/home');
                }
    
                exit();
            } else {
                $_SESSION['message'] = ['type' => 'error', 'text' => 'Invalid email or password'];
                redirect('Pages/login');
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
