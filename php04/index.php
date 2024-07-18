<?php
session_start();
require_once 'funcs.php';
loginCheck();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>つぶやき登録</title>
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/index.css" />
</head>

<body>
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">つぶやき一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
                <div class="navbar-header user-name"><p><?= $_SESSION['user_name'] ?></p></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->
    <!-- Main[Start] -->
    <form method="POST" action="insert.php" enctype="multipart/form-data">
        <div class="jumbotron">
            <fieldset>
                <legend>フリーアンケート</legend>
                <div>
                    <label for="content">内容：</label>
                    <textarea id="content" name="content" rows="4" cols="40"></textarea>
                </div>
                <div>
                    <label for="image">画像：</label>
                    <input type="file" name="image">
                </div>
                <div>
                    <input type="submit" value="送信">
                </div>
            </fieldset>
        </div>
    </form>
</body>

</html>
