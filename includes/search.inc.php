<?php
    require_once 'curl.inc.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $data = run_curl('https://api.github.com/users/'.$username.'/repos');
        if($data == 'error'){
            header('Location: ../index.php?error=UserNotFound');
        }else{
            header('Location: ../git.php?user='.$username);
        }
    }
?>
