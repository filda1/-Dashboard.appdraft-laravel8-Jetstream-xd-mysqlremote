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

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
