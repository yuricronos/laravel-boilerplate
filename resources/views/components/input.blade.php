@if (empty($view) || $view != 'horizontal')
    <div class="form-group mb-3">
        <label> {{ $text }} </label>
        <input {!! $attributes->merge(['class' => 'form-control form-control-sm']) !!}>
    </div>
@else
    <div class="form-group row">
        <label class="col-lg-4 col-sm-3 text-end pe-0 my-auto"> {{ $text }} </label>
        <div class="col-lg-8 col-sm-9">
            <input {!! $attributes->merge(['class' => 'form-control']) !!}>
        </div>
    </div>
@endif
