<x-form-section submit="updatePassword">
    <x-slot name="title"> {{ __('Update Password') }} </x-slot>
    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-input id="current_password" type="password" text="{{ __('Current Password') }}" wire:model="state.current_password"/>
    <x-input-error for="current_password" class="mt-2" />

    <x-input id="password" type="password" text="{{ __('Password') }}" wire:model="state.password"/>
    <x-input-error for="password" class="mt-2" />

    <x-input id="password_confirmation" type="password" text="{{ __('Confirm Password') }}" wire:model="state.password_confirmation"/>
    <x-input-error for="password_confirmation" class="mt-2" />

    <x-action-message class="me-3" on="saved">{{ __('Saved.') }} </x-action-message>
    <x-button color="primary" variant="gradient"> {{ __('Save') }} </x-button>
</x-form-section>