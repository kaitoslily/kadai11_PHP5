<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<title>管理者ログイン</title>
</head>
<body>

<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="select.php">参加者データ一覧</a>　
            <a class="navbar-brand" href="user.php">ユーザー登録</a>　
            <a class="navbar-brand" href="logout.php">ログアウト</a>
        </div>
    </div>
</nav>

</header>

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="login_act.php" method="post">
ID:<input type="text" name="lid">
PW:<input type="password" name="lpw">
<input type="submit" value="ログイン">
</form>
</body>
</html>