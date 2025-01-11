<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pigly</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
        <a class="header__logo" >
          Pigly
        </a>
        <nav>
          <ul class="header-nav">
            <li class="header-nav__item">
              <button class="header-nav__button">目標体重設定</button>
            </li>
            <li class="header-nav__item">
              <form>
                <a class="header-nav__link" href="/logout">ログアウト</a>
              </form>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>
</html>