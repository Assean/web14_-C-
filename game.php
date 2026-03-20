<?php
session_start();
$games=[];
$handle=opendir('games');
if($handle){
    while(false !== ($entry=readdir($handle))){
        if($entry != "." && $entry != ".."){
            $json_path="games/".$entry."/game.json";
            if(file_exists($json_path)){
                $data=json_decode(file_get_contents($json_path),true);
                $data['path']="games/".$entry."/index.html";
                $games[]=$data;
            }
        }
    }
    closedir($handle);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunTech 社群網站</title>
    <link rel="stylesheet" href="./css/index.css">
    <script src="./js/jqueryv3.7.1.js"></script>
    <!-- <link rel="stylesheet" href="boot.css"> -->
</head>
<body>
    <?php include_once("./include/header.php"); ?>
    <main id="main-content" class="main-content">
        <div>
            <div><span>分數: <span id="Gamescore"></span></span></div>
            <div><span>狀態: <span id="Gamestatus"></span></span></div>
            <div><span>使用者: <span id="user"></span></span></div>
        </div>
        <table id="game-list" border="1.8">
            <tr>
                <td class="id">id</td>
                <td class="title">標題</td>
                <td class="description">描述</td>
                <td class="function">功能區</td>
            </tr>
            <?php $i=0;foreach($games as $game){ ?>
            <tr>
                <td id="id-td"><?= ++$i ?></td>
                <td id="t-td"><?= $game['title'];?></td>
                <td id="d-td"><?= mb_strimwidth($game['description'],0,50,"...");?></td>
                <td><button onclick="openGame('<?=$game['path'];?>','<?=$game['title'];?>')">開始遊戲</button></td>
            </tr>
            <?php } ?>
        </table>
    </main>
    <?php include_once("include/footer.php"); ?>
    <script>
    let actGame;
    let urlGame;
    let a;

    function openGame(path, title) {
        actGame = title;
        urlGame = path;
        a = window.open(path, 'openGame', 'width=700,height=700');
    }
    function receiveGameResult(result) {
        a.close();
        
        setTimeout(() => {
            let user = prompt("請輸入姓名:");
            $("#Gamescore").text(result.score);
            $("#Gamestatus").text(result.status);
            $("#user").text(user);
            $.post('./api/save_result.php', {
                user: user,
                score: result.score 
            }, function() {
                if(confirm(`是否再玩一次?`)){
                    openGame(urlGame, actGame);
                }
            });
        }, 100);
    }
</script>
</body>
</html>