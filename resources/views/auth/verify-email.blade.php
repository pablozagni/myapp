<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <div class="flex">
                <a href="{{ route('profile.show') }}" class="px-2">
                    <x-button type="button">
                        {{ __('Edit Profile') }}
                    </x-button>
                </a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <x-button type="submit">
                        {{ __('Log Out') }}
                    </x-button>
                </form>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
