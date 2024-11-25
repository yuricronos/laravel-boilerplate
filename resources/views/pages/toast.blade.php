<x-app-layout>
    <x-slot name="header">
        <div class="page-header">
            <h3 class="page-title"> Toast </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)"> Notyf </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Toast </li>
                </ol>
            </nav>
        </div>
    </x-slot>

    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <x-card>
                <x-card-body>
                    <x-slot name="title"> Confirmation Alerts </x-slot>
                    <x-slot name="description">
                        <p>
                            default config
                            <code>
                                SwalConfig = {
                                title: "Are you sure?",
                                icon: "warning",
                                buttonText: "Confirm"
                                }
                            </code>
                        </p>
                        <p>
                            sample type success confirmation <br />
                            <code>
                                SwalConfig.icon="success"; <br />
                                SwalConfirmation(<i> function to execute </i>, <i> parameter to function </i>); <br />
                                <strong>example: </strong> SwalConfirmation((params) => { /* value of params is 1 */ } , 1);
                            </code>
                        </p>
                    </x-slot>

                    <x-button color="success" variant="gradient" onclick="SwalConfig.icon='success'; SwalConfirmation()"> success </x-button>
                    <x-button color="danger" variant="gradient" onclick="SwalConfig.icon='error'; SwalConfirmation()"> error </x-button>
                    <x-button color="warning" variant="gradient" onclick="SwalConfig.icon='warning'; SwalConfirmation()"> warning </x-button>
                    <x-button color="info" variant="gradient" onclick="SwalConfig.icon='info'; SwalConfirmation()"> info </x-button>
                    <x-button color="primary" variant="gradient" onclick="SwalConfig.icon='question'; SwalConfirmation()"> question </x-button>

                </x-card-body>
            </x-card>
        </div>

        <div class="col-lg-6 grid-margin stretch-card">
            <x-card>
                <x-card-body>
                    <x-slot name="title"> Toast Message </x-slot>
                    <x-slot name="description">
                        <p> via javascript <code> toast({ type: <i>'type'</i>, message: <i>'message'</i> }) </code> </p>

                        <p> via livewire <code> $this->dispatch('toast', ['type' => <i>"type"</i>, 'message' => <i>'message'</i>]); </code> </p>
                    </x-slot>

                    <x-button color="success" variant="gradient" onclick="toast({ type:'success', message:'Sample success toast' })"> success </x-button>
                    <x-button color="danger" variant="gradient" onclick="toast({ type:'error', message:'Sample error toast' })"> error </x-button>
                    <x-button color="warning" variant="gradient" onclick="toast({ type:'warning', message:'Sample warning toast' })"> warning </x-button>

                </x-card-body>
            </x-card>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <x-card>
                <x-card-body>
                    <x-slot name="title"> Alert Message </x-slot>
                    <x-slot name="description">
                        <p>
                            sample type success confirmation <br />
                            <code>
                                SwalConfirmed({title: 'Title', text:'message', icon:'success'})
                            </code>
                        </p>
                    </x-slot>

                    <x-button color="success" variant="gradient" onclick="SwalConfirmed({title: 'Title', text:'message', icon:'success'})"> success </x-button>
                    <x-button color="danger" variant="gradient" onclick="SwalConfirmed({title: 'Title', text:'message', icon:'error'})"> error </x-button>
                    <x-button color="warning" variant="gradient" onclick="SwalConfirmed({title: 'Title', text:'message', icon:'warning'})"> warning </x-button>
                    <x-button color="info" variant="gradient" onclick="SwalConfirmed({title: 'Title', text:'message', icon:'info'})"> info </x-button>
                    <x-button color="primary" variant="gradient" onclick="SwalConfirmed({title: 'Title', text:'message', icon:'question'})"> question </x-button>

                </x-card-body>
            </x-card>
        </div>
    </div>

</x-app-layout>