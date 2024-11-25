<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="row">
        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            {{-- <div class="row"> --}}
            <div class="col-md-6 grid-margin stretch-card">
                @livewire('profile.update-profile-information-form')
            </div>
            {{-- </div> --}}

            <!-- <x-deprecated.section-border /> -->
        @endif

        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            {{-- <div class="row"> --}}
            <div class="col-md-6 grid-margin stretch-card">
                @livewire('profile.update-password-form')
            </div>
            {{-- </div> --}}

            <!-- <x-deprecated.section-border /> -->
        @endif

        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            {{-- <div class="row"> --}}
            <div class="col-md-6 grid-margin stretch-card">
                @livewire('profile.two-factor-authentication-form')
            </div>
            {{-- </div> --}}

            <!-- <x-deprecated.section-border /> -->
        @endif

        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <!-- <x-deprecated.section-border /> -->

            {{-- <div class="row"> --}}
            <div class="col-md-6 grid-margin stretch-card">
                @livewire('profile.delete-user-form')
            </div>
            {{-- </div> --}}
        @endif

        {{-- <div class="row"> --}}
        <div class="col-md-6 grid-margin stretch-card">
            @livewire('profile.logout-other-browser-sessions-form')
        </div>
        {{-- </div> --}}

    </div>
</x-app-layout>
