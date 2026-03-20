<?php // session_start(); ?>
<header id="header">
    <span id="site-title">FunTech 社群網站</span>
    <header id="user-nav">
        <?php if(!isset($_SESSION['user'])){ ?>
            <a id="login-link" class="header-nav-btn" href="./login.php">登入</a>
            <a id="register-link" class="header-nav-btn" href="./register.php">註冊</a>
        <?php }else{ ?>
            <a id="profile-link" class="header-nav-btn" href="./profile.php">個人檔案</a>
            <a id="logout-link" class="header-nav-btn" href="./api/logout.php">登出</a>
        <?php } ?>
    </header>
    <header id="link-nav">
        <a id="home" class="header-nav-btn" href="./index.php">首頁</a>
        <a id="about" class="header-nav-btn" href="./about.php">關於我們</a>
        <a id="game" class="header-nav-btn" href="./game.php">遊戲平台</a>
        <a id="contact-us" class="header-nav-btn" href="./contact.php">聯絡我們</a>
        <a id="site-map" class="header-nav-btn" href="sitemap.php">網站地圖</a>
    </header>
</header>