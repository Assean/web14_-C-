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
        <form action="./api/check_user.php" method="post">
            <div>
                <label for="username">帳號</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">密碼</label>
                <input type="password" name="password" id="password">
            </div>
            <div id="verify">
                <img id="img" src="http://localhost/%E6%8A%80%E8%83%BD%E7%AB%B6%E8%B3%BD/56J17/test/gd_image.php?verify_number=321231">
            </div>
            <div class="form-group">
                <label for="ver_num">圖形驗證碼</label>
                <input class="form-control ver_num" type="text" name="ver_num" id="ver_num" required>
                <input type="hidden" name="ans" id="ans">
            </div>
            <button id="form-submit" type="submit">送出</button>
            <button id="form-reset" type="reset">重設</button>
        </form>
    </main>
    <?php include_once("./include/footer.php");?>
    <script>
        let v = Math.random() * 10000 | 0;
        // ans.value = v;
        // img.src = `gd_image.php?verify_number=${v}`;
        // verify.appendChild(img);
        // 以上為JS語法，更簡短寫法請見下方code(記得引入jquery[3.7.1])
        $("#ans").val(v);
        $("#ver_num").attr('src',`gd.php?ver_num=${v}`)
    </script>
</body>
</html>
