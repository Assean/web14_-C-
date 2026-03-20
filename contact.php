<?php session_start(); ?>
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
    <?php include_once("./include/header.php"); ?>
    <main id="main-content index-main" style="margin-bottom: 9%;">
        <form action="./api/content_pro.php" method="post">
            <div>
                <label for="name">姓名</label>
                <input type="name" name="name" id="name">
            </div>
            <div>
                <label for="sex">性別</label>
                <select name="sex" id="sex">
                    <option value="男">男</option>
                    <option value="女">女</option>
                    <option value="其他">其他</option>
                </select>
            </div>
            <div>
                <label for="email">email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="phone">電話</label>
                <input type="number" name="phone" id="phone">
            </div>
            <div>
                <label for="content">內容</label>
                <textarea name="content" id="content">輸入內容</textarea>
            </div>
            <button id="form-submit" type="submit">送出</button>
            <button id="form-reset" type="reset">重設</button>
        </form>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14466.842521971203!2d121.45155093593748!3d24.975958035111233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346802cc2085bd5b%3A0x1c196abec18d68c0!2z5paw5YyX5biC56uL5paw5YyX6auY57Sa5bel5qWt6IG35qWt5a245qCh!5e0!3m2!1szh-TW!2stw!4v1773474831340!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        <table>
            <tr>
                <td>id</td>
                <td>姓名</td>
                <td>內容</td>
                <td>性別</td>
                <td>email</td>
                <td>功能區</td>
            </tr>
            <?php
                include_once("./api/pdo.php");
                $sql="SELECT * FROM `contact`";
                $result=$pdo->query($sql)->fetchAll();
                for ($i=0; $i < count($result); $i++) { 
                    ?>
            <tr>
                <td><?=$result[$i]["id"];?></td>
                <td><?=$result[$i]["name"];?></td>
                <td><?=$result[$i]["content"];?></td>
                <td><?=$result[$i]["sex"];?></td>
                <td><?=$result[$i]["email"];?></td>
                <td><a href="./api/del.php?id=<?=$result[$i]["id"];?>">DEL</a></td>
            </tr>
            <?php } ?>
        </table>
    </main>
    <?php include_once("./include/footer.php"); ?>
</body>
</html>