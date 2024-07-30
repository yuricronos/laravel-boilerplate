@props(['head' => []])
<table class="table table-hover text-center">
    <thead>
        <tr>
            @foreach($head as $h)
            <th> {{ $h }} </th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>