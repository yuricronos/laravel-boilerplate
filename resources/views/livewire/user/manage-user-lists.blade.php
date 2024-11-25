<div class="auto-scroll-x">
    <x-table :head="['Name', 'Username', 'Email', 'Role', 'Status', 'Actions']">
        @foreach($userLists as $user)
        <tr class="{{ ($user->email_verified_at == null) ? 'table-warning' : '' }}">
            <td> {{ $user->name }} </td>
            <td> {{ $user->username }} </td>
            <td> {{ $user->email }} </td>
            <td> {{ $roles[$user->role] }} </td>
            <td> {{ (($user->email_verified_at != null) ? "Active" : "Inactive") }} </td>
            @if($user->id != Auth::user()->id)
            <td>
                @if($user->email_verified_at == null)
                <x-button color="success" @click="SwalConfig.icon='info'; SwalConfig.text='activate {{$user->username}}'; SwalConfirmation($wire.activateUser, {{ $user->id }})"> Activate </x-button>
                @else
                <x-button color="warning" @click="SwalConfig.text='to deactivate {{$user->username}}'; SwalConfirmation($wire.cancelUser, {{ $user->id }})" > Cancel </x-button>
                @endif
                <x-button color="danger" @click="SwalConfig.text='to delete {{$user->username}}'; SwalConfirmation($wire.deleteUser, {{ $user->id }})"> Delete </x-button>
            </td>
            @else
            <td></td>
            @endif
        </tr>
        @endforeach
    </x-table>
</div>