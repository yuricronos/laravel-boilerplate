<x-app-layout>
    <x-slot name="header">
        <div class="page-header">
            <h3 class="page-title"> Manage Users </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"> Users </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Manage Users </li>
                </ol>
            </nav>
        </div>
    </x-slot>

    <x-card>
        <x-card-body>
            <x-slot name="title"> Users </x-slot>

            <div class="row">
                <div class="col-lg-12 text-end">
                    <x-button type="button" color="primary" variant="gradient" data-bs-toggle="modal" data-bs-target="#addUserDialog"> Add User </x-button>
                    <x-modal-form id="addUserDialog" name="addUserDialogContent" title="Add User">
                        @livewire('user.create-user', ['modal' => "addUserDialog"])
                    </x-modal-form>
                </div>
            </div>

            @livewire('user.manage-user-lists')
        </x-card-body>
    </x-card>

</x-app-layout>