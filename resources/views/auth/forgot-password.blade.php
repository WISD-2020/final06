<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <div class="logo"><a href={{route('home.index')}}><img src="images/logo.png" width="300"></a></div>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('忘記密碼了嗎？沒問題。只要讓我們知道您的Email，我們就會通過Email將密碼重置連結發送給您，該連結將使您可以選擇一個新的密碼。') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email密碼重置連結') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
