<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>test1-contact-form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="POST">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span><span class="required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text"> <input type="text" name="name" placeholder="例:山田" />
                        <div class="form__error">
                            @error('first-name')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form__input--text"> <input type="text" name="name" placeholder="例:太郎" />
                        </div>
                        <div class="form__error">
                            @error('last-name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span><span class="required">※</span>
                    </div>
                    <div class="form__select-group">
                        <div class="form__input--select">
                            <input type="radio" id="male" name="gender" value="male" checked><label for="male">男性</label>
                        </div>
                        <div class="form__input--select">
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">女性</label></div>
                        <div class="form__input--select">
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">その他</label>
                        </div>
                        <div class="form__error">
                                @error('gender')
                                    {{ $message }}
                                @enderror
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span><span class="required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例:test@example.com" />
                        </div>
                        <div class="form__error">
                                @error('email')
                                    {{ $message }}
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span><span class="required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="tel" name="tel" placeholder="080-1234-5678" />
                        </div>
                        <div class="form__error">
                            @error('tel')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span><span class="required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
                        </div>
                        <div class="form__error">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" />
                        </div>
                        <div class="form__error">
                            @error('building')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span><span class="required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--select">
                            <select name="detail[type]" required>
                                <option value="" disabled selected>選択してください</option>
                                <option value="1">商品のお届けについて</option>
                                <option value="2">商品のお届けについて</option>
                                <option value="3">商品トラブル</option>
                                <option value="4">ショップへのお問い合わせ</option>
                                <option value="5">その他</option>
                            </select>
                        </div>
                        <div class="form__error">
                            @error('detal[type]')
                                {{ $message }}
                            @enderror
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span><span class="required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="detail[message]" rows="5" placeholder="お問い合わせ内容をご記載ください"></textarea>
                        </div>
                        <div class="form__error">
                            @error('detail[message]')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
