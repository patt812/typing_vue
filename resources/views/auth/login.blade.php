@push('style')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

<x-guest-layout>
    <main>
        <div class="logo__container">
            <a href="/">
            </a>
        </div>

        <section class="login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <p class="login__title">ログイン</p>

                <p class="login__items">メールアドレス</p>

                <input class="login__inputs" type="email" name="email" value="{{ old('email') }}"
                    placeholder="アドレスを入力" required>
                @if ($errors->has('email'))
                    <p class="validate__error">{{ '※' . $errors->first('email') }}</p>
                @endif

                <p class="login__items">パスワード</p>
                <input class="login__inputs" type="password" name="password" placeholder="パスワード" required>
                @if ($errors->has('password'))
                    <p class="validate__error">{{ '※' . $errors->first('password') }}</p>
                @endif

                <button class="login__button" type="submit">
                    ログイン
                </button>
            </form>

            <a href="{{ route('register') }}">
                <div class="registerButton__container">
                    <p class="registerButton__text">
                        新規登録はこちらから
                    </p>
                </div>
            </a>

        </section>
    </main>
</x-guest-layout>
