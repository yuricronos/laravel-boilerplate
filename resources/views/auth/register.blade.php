<x-guest-layout>
    <div class="brand-logo">
        <img src="{{ url('images/logo.svg') }}">
    </div>

    <x-deprecated.validation-errors class="mb-4" />

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-deprecated.label for="name" value="{{ __('Name') }}" />
            <x-input id="name" class="form-control form-control-lg" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
        </div>

        <div class="mt-4">
            <x-deprecated.label for="email" value="{{ __('Email') }}" />
            <x-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autocomplete="email" placeholder="Email" />
        </div>

        <div class="mt-4">
            <x-deprecated.label for="username" value="{{ __('Username') }}" />
            <x-input id="username" class="form-control form-control-lg" type="text" name="username" autocomplete="username" placeholder="Username" />
        </div>

        <div class="mt-4">
            <x-deprecated.label for="password" value="{{ __('Password') }}" />
            <x-input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
        </div>

        <div class="mt-4">
            <x-deprecated.label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-input id="password_confirmation" class="form-control form-control-lg" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
        </div>

        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="mt-4">
            <x-deprecated.label for="terms">
                <div class="flex items-center">
                    <x-checkbox name="terms" id="terms" required />

                    <div class="ms-2">
                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                        ]) !!}
                    </div>
                </div>
            </x-deprecated.label>
        </div>
        @endif

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-button type="submit" color="primary" variant="gradient" class="ml-4">{{ __('Register') }} </x-button>
         </div>
    </form>

</x-guest-layout>