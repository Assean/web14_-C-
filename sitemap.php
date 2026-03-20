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
    <main id="main-content">
        <div>
            <a id="sitemap-home-link" href="index.php">首頁</a>
            <a id="sitemap-about-link" href="about.php">關於我們</a>
            <a id="sitemap-game-link" href="game.php">遊戲平台</a>
            <p id="gamelist">遊戲列表</p>
        </div>
        <div>
            <a id="sitemap-contact-us-link" href="contact.php">聯絡我們</a>
        </div>
        <div>
            <p id="member-system">會員系統</p>
            <a id="sitemap-login-link" href="login.php">登入</a>
            <a id="sitemap-register-link" href="register.php">註冊</a>
            <a id="sitemap-profile-link" href="profile.php">個人檔案</a>
            <a id="sitemap-sitemap-link" href="sitemap.php">網站地圖</a>
        </div>
    </main>
    <?php include_once("./include/footer.php");?>
</body>
</html>