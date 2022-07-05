<x-guest-layout>
    @push('style')
        <link rel="stylesheet" href="{{ asset('css/verify.css') }}">
    @endpush

    <main>
        <div class="logo__container">
        </div>

        <section class="auth">
            <p class="auth__title">メール認証のお願い</p>

            <p class="auth__items">
                ご登録頂いたメールアドレスにリンクを送信しました。
            </p>

            <p class="auth__items">
                メールに記載されているリンクをクリックして、登録手続きを完了してください。
            </p>

            <div>
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <div>
                        <button class="reAuthenticateButton">
                            {{ __('認証メールを再送信') }}
                        </button>
                    </div>
                </form>
                @if (session('status') == 'verification-link-sent')
                    <p class="authResend--success">
                        {{ __('再送信しました。') }}
                    </p>
                @endif
            </div>
        </section>
    </main>
</x-guest-layout>
