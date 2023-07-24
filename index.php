<?php
    require_once 'includes/curl.inc.php';
    $data = run_curl('https://api.github.com/users');
?>
<html>
<head>
    <title>Git-users</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="page__title">
        <h1>Git Users</h1>
    </div>
    <div class="users__list">

            <?php
                foreach ($data as $user){
                    echo '<a href="git.php?user=' . $user['login'] . '"><div class="user__block">
                            
                            <img src='.$user['avatar_url'].'>
                            <p>Go to '.$user['login'].'\''.'s repos</p>
                            
                          </div></a>';
                }
            ?>

    </div>
</body>
</html>
