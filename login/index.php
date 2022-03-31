<?php 

require './model.php';

require_once '../helpers/form-helper.php';
require_once '../helpers/auth-helper.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_infos = [
        'username' => sanitize_input($_POST['username']),
        'password' => sanitize_input($_POST['password'])
    ];

    $user = 'bob';
    $pass = password_hash('bob', PASSWORD_DEFAULT);

    if ($user_infos['username'] === $user && password_verify($user_infos['password'], $pass)) {
        init_session();
        $_SESSION['login'] = $user_infos['username'];
        
        $redirect = isset($_GET['redirect']) ? urldecode($_GET['redirect']) : '../articles' ;
        redirect($redirect);
    }
}

require './view.php';