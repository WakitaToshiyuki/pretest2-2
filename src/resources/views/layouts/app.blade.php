<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>coachtechフリマアプリ</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
<header>
  <div class="header">
    <h1 class="">COACHTECH</h1>
    <form action="" class="">
    @csrf
      <input type="text" class="" placeholder="なにをお探しですか？">
    </form>
    <a href="">ログアウト</a>
    <a href="">マイページ</a>
    <a href="">
      <button type="button">出品</button>
    </a>
  </div>
</header>
<main>
  @yield('content')
</main>
</body>

</html>
