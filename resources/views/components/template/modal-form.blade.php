@props(['id', 'name' => null, 'title'])

<div>
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" {{ $attributes->merge(['id' => $id ?? ""]) }}>
        <div class="modal-dialog">
            <div class="modal-content" {{ $attributes->merge(['id' => $name ?? ""]) }}>
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> {{ $title ?? "Modal Title" }} </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                    {{ $slot }}
                </div>

                @if(isset($footer))
                <div class="modal-footer">{{ $footer }}</div>
                @endif
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(() => {
            setDraggable("#{{$name}}.modal-content", "div.modal-header");
        });
    </script>
</div>