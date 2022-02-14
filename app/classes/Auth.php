<?php


namespace App\classes;
use App\classes\Home;
use App\classes\User;

class Auth
{
    protected $email;
    protected $password;
    protected $user;
    protected $users;
    protected $message;
    protected $home;

    public function __construct($post = null)
    {
        $this->email = $post['email'];
        $this->password = $post['password'];
    }

    public function  logIn()
    {
        header('Location: action.php?pages=login');
    }
    public function  index()
    {
        header('Location: action.php?pages=home');
    }
    public function verifyLogin()
    {
        $this->user = new User();
        $this->users = $this->user->getALLUser();
        foreach ($this->users as $data)
        {
            if ($data['email'] == $this->email && $data['password'] == $this->password)
            {
                session_start();
                $_SESSION['id'] = $data ['id'];
                $_SESSION['name'] = $data ['name'];

                $this->home = new Home();
                $this->home->index();
            }
        }
        return 'Sorry email or Password Incorrect';

    }
    public function logOut()
    {
        unset($_SESSION['id']);
        unset($_SESSION['name']);

        $this->logIn();


    }

}