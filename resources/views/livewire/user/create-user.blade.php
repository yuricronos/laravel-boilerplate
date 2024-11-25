<form wire:submit="createUser">
    <x-input-error for="name" />
    <x-input id="name" type="text" text="{{ __('Name') }}" placeholder="{{ __('Name') }}" wire:model="form.name" />

    <x-input-error for="username" />
    <x-input id="username" type="text" text="{{ __('Username') }}" placeholder="{{ __('Username') }}" wire:model="form.username" />

    <x-input-error for="email" />
    <x-input id="email" type="text" text="{{ __('Email') }}" placeholder="{{ __('Email') }}" wire:model="form.email" />

    <x-input-error for="password" />
    <x-input id="password" type="password" text="{{ __('Password') }}" placeholder="{{ __('Password') }}" wire:model="form.password" />

    <x-input-error for="password_confirmation" />
    <x-input id="password_confirmation" type="password" text="{{ __('Repeat Password') }}" placeholder="{{ __('Repeat Password') }}" wire:model="form.password_confirmation" />

    <div class="row">
        <div class="col-lg-12 text-center">
            <x-button type="button" color="light" data-bs-dismiss="modal" wire:loading.attr="disabled">Close</x-button>
            <x-button type="submit" color="primary" class="ms-3">Submit</x-button>
        </div>
    </div>
</form>