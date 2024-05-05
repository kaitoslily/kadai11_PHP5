<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>星空観測会登録フォーム</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>div{padding: 10px;font-size:16px;}</style>
    </head>
    <body>

        <!-- Head[Start] -->
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand" href="select.php">イベント案内🪼初夏ぷらっと星空観望会🪼</a></div>
                </div>
            </nav>
        </header>
        <!-- Head[End] -->
        <?php
         include("inc/head.html");
         include("inc/menu.html");
        ?>
        <!-- Main[Start] -->
        <form method="POST" action="insert.php">
            <div class="jumbotron">
                <fieldset>
                    <legend>登録フォーム</legend>
                    <label>名前：<input type="text" name="name"></label><br>
                    <label>Email：<input type="text" name="email"></label><br>
                    <label>年齢：<input type="text" name="age"></label><br>
                    <label>コメント：<br><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
                    <input type="submit" value="送信">
                </fieldset>
            </div>
        </form>
        <!-- Main[End] -->
        <?php
        include("inc/foot.html");
        ?>
    </body>
</html>
