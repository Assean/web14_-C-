<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunTech 社群網站</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/bootstrap.js"></script>
    <script src="./js/jqueryv3.7.1.js"></script>
</head>
<body>
    <?php
    session_start();
        include_once("include/header.php");
        include_once("./api/pdo.php");
        $sql="SELECT * FROM `users`";
        $result=$pdo->query($sql)->fetchAll(); 
    ?>
    <form action="./api/edit_profile.php" method="post">
        <div>
            <label for="username">使用者名稱</label>
            <input name="username" id="username" value="<?=$result[0]['username']?>" readonly>
        </div>
        <!-- <div>
            <label for="password">密碼</label>
            <input name="password" id="password" value="<?=$result[0]['password']?>">
        </div> -->
        <div>
            <label for="email">email</label>
            <input name="email" id="email" value="<?=$result[0]['email']?>">
        </div>
        <div>
            <label for="name">姓名</label>
            <input name="name" id="name" value="<?=$result[0]['name']?>">
        </div>
        <button id="form-submit" type="submit">修改</button>
        <button id="form-reset" type="reset">重設</button>
    </form>
</body>
</html>