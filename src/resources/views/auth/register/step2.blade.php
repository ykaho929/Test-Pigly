<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy新規会員登録</title>
    <link rel="stylesheet" href="{{ asset('css/auth/register2.css') }}">

</head>

<body>
    <main>
        <div class="register__content">
        <div class="register-form__heading">
            <h1>PiGLy<h1>
            <h2>新規会員登録</h2>
            <a>STEP2 体重データの入力</a>
        </div>
        <form class="form" action="/register/step2" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">現在の体重</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="name" value="{{ old('name') }}"kg placeholder="現在の体重を入力"/>
                    </div>
                    <div class="form__error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">目標の体重</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" value="{{ old('email') }}"㎏ placeholder="目標の体重を入力"/>
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">アカウント作成</button>
            </div>
        </form>
    </main>
</body>
</html>