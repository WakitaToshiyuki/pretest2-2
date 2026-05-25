<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>coachtechフリマアプリ</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
<header>
  <div class="header">
    <h1 class="">COACHTECH</h1>
  </div>
</header>
<main>
    <div class="layout">
        <h2>会員登録</h2>
        <table>
            <form action="">
            @csrf
                <tr class="">
                    <h4>ユーザー名</h4>
                </tr>
                <tr class="">
                    <input type="text" name="name">
                </tr>
                <tr class="">
                    <h4>メールアドレス</h4>
                </tr>
                <tr class="">
                    <input type="text" name="email">
                </tr>
                <tr class="">
                    <h4>パスワード</h4>
                </tr>
                <tr class="">
                    <input type="text" name="password">
                </tr>
                <tr class="">
                    <h4>確認用パスワード</h4>
                </tr>
                <tr class="">
                    <input type="text" name="">
                </tr>
                <tr class="">
                    <button type="submit">登録する</button>
                </tr>
            </form>
            <tr class="">
                <a href="">ログインはこちら</a>
            </tr>
        </table>
    </div>
</main>
</body>

</html>
