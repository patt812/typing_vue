@push('style')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endpush
<x-guest-layout>
    <main>
        <div class="logo__container">
            <a href="{{ route('login') }}">
            </a>
        </div>

        <section class="register">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <p class="register__title">新規登録</p>

                <p class="register__items">名前</p>

                <input class="register__inputs" type="text" name="name" value="{{ old('name') }}"
                    placeholder="名前を入力" required>
                @if ($errors->has('name'))
                    <p class="validate__error">{{ '※' . $errors->first('name') }}</p>
                @endif

                <p class="register__items">メールアドレス</p>

                <input class="register__inputs" type="email" name="email" value="{{ old('email') }}"
                    placeholder="アドレスを入力" required>
                @if ($errors->has('email'))
                    <p class="validate__error">{{ '※' . $errors->first('email') }}</p>
                @endif

                <p class="register__items">パスワード</p>

                <input class="register__inputs" type="password" name="password" placeholder="８文字以上のパスワードを入力" required>
                @if ($errors->has('password'))
                    <p class="validate__error">{{ '※' . $errors->first('password') }}</p>
                @endif

                <p class="register__items">パスワードを再入力</p>
                <input class="register__inputs" type="password" name="password_confirmation" placeholder="パスワードを再入力"
                    required>

                <button class="register__button" type="submit">
                    新規登録
                </button>
            </form>
        </section>
    </main>

</x-guest-layout>
