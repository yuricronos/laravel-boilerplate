@props(['sidebar' => []])

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        @foreach($sidebar as $item)
            @role($item['role'])
                <li class="nav-item">
                    <a class="nav-link" href="@href($item)" @collapse($item)>
                        <span class="menu-title"> {{ $item['name'] }} </span>
                        @if(isset($item['collapse']) && $item['route']==="#")
                        <i class="menu-arrow"></i>
                        @endif
                        <i {{ $attributes->merge(['class' => sprintf("mdi mdi-%s menu-icon", $item['icon'])]) }}></i>
                    </a>
                    @if(isset($item['collapse']) && isset($item['collapse']['item']))
                    <div class="collapse" id="{{ $item['collapse']['id'] }}">
                        <ul class="nav flex-column sub-menu">
                            @foreach($item['collapse']['item'] as $subItem)
                            <li class="nav-item">
                                <a class="nav-link" href="@href($subItem)"> {{ $subItem['name'] }} </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </li>
            @endrole
        @endforeach

        {{--
        <!-- <li class="nav-item sidebar-actions">
            <span class="nav-link">
                <div class="border-bottom">
                    <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <x-template.button color="primary" variant="gradient" size="lg" :block="true" class="mt-4"> + Add a project </x-template.button>
                <div class="mt-4">
                    <div class="border-bottom">
                        <p class="text-secondary">Categories</p>
                    </div>
                    <ul class="gradient-bullet-list mt-4">
                        <li>Free</li>
                        <li>Pro</li>
                    </ul>
                </div>
            </span>
        </li> -->
        --}}
    </ul>
</nav>