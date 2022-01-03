<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
               <!-- <x-jet-authentication-card-logo />-->
               <a href="{{ URL::to('/') }}">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="69.000000pt" height="55.000000pt" viewBox="0 0 69.000000 55.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <metadata>
                    
                    </metadata>
                    <g transform="translate(0.000000,55.000000) scale(0.100000,-0.100000)"
                    fill="#0F8EBC" stroke="none">
                    <path d="M50 434 c0 -3 19 -41 42 -83 l42 -78 -42 -80 c-23 -45 -42 -84 -42
                    -87 0 -3 25 -6 55 -6 51 0 55 2 71 33 l17 32 14 -32 13 -33 114 0 c101 0 117
                    2 147 23 54 36 79 82 79 144 0 69 -22 117 -69 149 -33 22 -45 24 -152 24
                    l-116 0 -12 -27 -13 -28 -14 28 c-13 25 -19 27 -74 27 -33 0 -60 -3 -60 -6z
                    m379 -118 c26 -24 27 -67 2 -90 -12 -11 -45 -21 -79 -25 l-60 -7 -20 41 c-20
                    41 -20 42 0 76 19 35 20 35 78 29 37 -4 66 -13 79 -24z"/>
                    </g>
                 </svg>
                </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="flex items-center justify-between mt-4">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="text-sm text-gray-600 underline hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
