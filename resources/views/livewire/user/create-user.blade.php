<form wire:submit="createUser">
    <x-template.input-error for="name" />
    <x-template.input id="name" type="text" text="{{ __('Name') }}" placeholder="{{ __('Name') }}" wire:model="form.name" />

    <x-template.input-error for="username" />
    <x-template.input id="username" type="text" text="{{ __('Username') }}" placeholder="{{ __('Username') }}" wire:model="form.username" />

    <x-template.input-error for="email" />
    <x-template.input id="email" type="text" text="{{ __('Email') }}" placeholder="{{ __('Email') }}" wire:model="form.email" />

    <x-template.input-error for="password" />
    <x-template.input id="password" type="password" text="{{ __('Password') }}" placeholder="{{ __('Password') }}" wire:model="form.password" />

    <x-template.input-error for="password_confirmation" />
    <x-template.input id="password_confirmation" type="password" text="{{ __('Repeat Password') }}" placeholder="{{ __('Repeat Password') }}" wire:model="form.password_confirmation" />

    <div class="row">
        <div class="col-lg-12 text-center">
            <x-template.button type="button" color="light" data-bs-dismiss="modal" wire:loading.attr="disabled">Close</x-template.button>
            <x-template.button type="submit" color="primary" class="ms-3">Submit</x-template.button>
        </div>
    </div>
</form>