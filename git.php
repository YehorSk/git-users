<?php
    if(isset($_GET['user'])){
        require_once 'includes/curl.inc.php';
        $data = run_curl('https://api.github.com/users/'.$_GET['user'].'/repos');
    }else{
        header('Location: index.php');
    }
?>
<html>
<head>
    <title>Git-users</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="page__title">
    <h1><?=$_GET['user']?>'s Repository List | <a href="index.php">Go back to Users</a></h1>
</div>
<div class="users__list">

    <?php
    foreach ($data as $git){
        echo '<div class="user__block">
                            <p>'.$git['name'].'</p>
                            
                          </div>';
    }
    ?>

</div>
</body>
</html>