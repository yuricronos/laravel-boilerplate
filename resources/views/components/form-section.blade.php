@props(['submit'])
<x-card>
    <x-card-body>
        <x-slot name="title"> {{ $title }} </x-slot>
        <x-slot name="description">{{ $description }} </x-slot>
        @if(isset($submit))
        <x-form submit="{{ $submit }}"> {{ $slot }} </x-form>
        @else
        <x-form> {{ $slot }} </x-form>
        @endif
    </x-card-body>
</x-card>