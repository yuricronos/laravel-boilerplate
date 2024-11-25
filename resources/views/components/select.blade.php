@if (empty($view) || $view != 'horizontal')
    <div class="form-group">
        <label> {{ $text }} </label>
        <select class="form-select" {!! $attributes->except(['options'])->merge(['class' => 'form-select']) !!}>
            @if (isset($options))
                @foreach ($options as $key => $value)
                    <option value="{{ $key }}"> {{ $value }} </option>
                @endforeach
            @endif
        </select>
    </div>
@else
    <div class="row mb-2 form-group">
        <label class="col-lg-4 col-sm-3 text-end pe-0 my-auto"> {{ $text }} </label>
        <div class="col-lg-8 col-sm-9">
            <select {!! $attributes->except(['options'])->merge(['class' => 'form-select']) !!}>
                @if (isset($options))
                    @foreach ($options as $key => $value)
                        <option value="{{ $key }}"> {{ $value }} </option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
@endif
