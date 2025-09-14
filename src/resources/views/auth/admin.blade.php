<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お問い合わせフォーム入力ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>

<body>

    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
            <div class="header__link">
                <a class="register__button-submit" href="/register">register</a>
            </div>
        </div>
    </header>


    <div class="admin__alert">
        @if (session('message'))
        <div class="todo__alert--success">{{ session('message') }}</div>
        @endif @if ($errors->any())
        <div class="todo__alert--danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="admin__content">
        <div class="admin-form__heading">
            <h2>新規作成</h2>
        </div>
        <form class="form__group" action="/todos" method="post">
            @csrf
            <div class="create-form__item">
                <input
                    class="create-form__item-input"
                    type="text"
                    name="content"
                    value="" />
                <select class="create-form__item-select">
                    <option value="">カテゴリ</option>
                </select>
            </div>
            <div class="admin-form__button">
                <button class="create-form__button-submit" type="submit">作成</button>
            </div>
        </form>
        <div class="section__title">
            <h2>エクスポート</h2>
        </div>
        <form class="form__group">
            <div class="search-form__item">
                <input class="search-form__item-input" type="text" />
                <select class="search-form__item-select">
                    <option value="">カテゴリ</option>
                </select>
            </div>
            <div class="search-form__button">
                <button class="search-form__button-submit" type="submit">検索</button>
            </div>
        </form>

    </div>


</body>