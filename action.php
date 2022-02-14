<?php
session_start();

require_once 'vendor/autoload.php';
use App\classes\Auth;
use App\classes\Home;
use App\classes\Product;
use App\classes\User;
use App\classes\FileUpload;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        if (isset($_SESSION['id']))
        {
            include 'pages/home.php';
        }
        else
        {
            $auth=new Auth();
            $auth->login();
        }
    }
    elseif ($_GET['pages']== 'product')
    {
        $product= new Product();
        $products= $product->getAllProduct();
        include 'pages/product.php';
    }
    elseif ($_GET['pages']=='details')
    {
        $product=new Product();
        $result=$product->getAllProductById($_GET['id']);
        include 'pages/details.php';
    }
    elseif ($_GET['pages']=='user')
    {
        $user=new User();
        $result=$user->getAllUser();
        include 'pages/user.php';
    }
    elseif ($_GET['pages'] == 'search')
    {
        if (isset($_SESSION['id']))
        {
            $product =new Product();
            $products = $product->getAllProduct();
            include 'pages/search.php';
        }
        else
        {
            $auth=new Auth();
            $auth->login();
        }
    }
    elseif ($_GET['pages'] == 'login')
    {
        if (isset($_SESSION['id']))
        {
            $home = new Home();
            $home->index();
        }
        else
        {
            include 'pages/login.php';
        }
    }
    elseif ($_GET['pages'] == 'logout')
    {
        $auth=new Auth();
        $auth->logout();
    }
    elseif ($_GET['pages'] == 'fileUpload')
    {
        include 'pages/fileUpload.php';
    }
    else
    {
        if (isset($_SESSION['id']))
        {
            $home=new Home();
            $home->index();
        }
        else
        {
            $auth=new Auth();
            $auth->login();
        }
    }
}
elseif (isset($_POST['search_btn']))
{
    $product = new Product($_POST);
    $result = $product->getProductBySearchId();
    include 'pages/search_result.php';
}
elseif (isset($_POST['img_btn']))
{
    $upload = new Upload($_POST, $_FILES);
    $upload->newImage();
}
elseif (isset($_POST['login_btn']))
{
    $auth       = new Auth($_POST);
    $message    = $auth->verifyLogin();
    include 'pages/login.php';
}

else {
    $home = new Home();
    $home->index();
}