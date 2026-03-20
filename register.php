<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="site-title">FunTech 社群網站</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/bootstrap.js"></script>
    <script src="./js/jqueryv3.7.1.js"></script>
</head>
<body>
    <?php include_once("./include/header.php");?>
    <main id="main-content" style="margin-bottom: 20%;">
        <form action="./api/add_user.php" method="post">
            <div>
                <label for="username">帳號</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">密碼</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="email">email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="name">姓名</label>
                <input type="text" name="name" id="name">
            </div>
            
            <button id="form-submit" type="submit">送出</button>
            <button id="form-reset" type="reset">重設</button>
        </form>
    </main>
    <?php include_once("./include/footer.php");?>
</body>
</html>