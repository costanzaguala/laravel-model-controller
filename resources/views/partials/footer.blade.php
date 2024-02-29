@php
    $links = [
        [
            'url' => '/',
            'label' => 'Home',
            'active' => true,
        ],
        [
            'url' => '/chi-siamo',
            'label' => 'Chi siamo',
            'active' => true,
        ],
    ];
@endphp

<footer>
    <div class="container d-flex flex-direction-column py-4">
        <nav>
            <ul class="py-4">
                <h5>
                    Menu
                </h5>
                @foreach ($links as $link)
                    <li>
                        @if ($link['active'])
                            <a href="{{ $link['url'] }}">
                                {{ $link['label'] }}
                            </a>
                        @else
                            <del>
                                {{ $link['label'] }}
                            </del>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>

        <nav>
            <ul class="py-4">
                <h5>
                    About us
                </h5>
            </ul>
        </nav>
    </div>

</footer>
