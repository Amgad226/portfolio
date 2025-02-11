<div class="details-container">

    <div>

        @component('components.icon', [
            'img' => './assets/experience.png',
        ])
        @endcomponent
        <div>

        </div>
        <h3>{{ $title }}</h3>
    </div>

    <p>{{ $content }}</p>

    @if (isset($link))
        <a style="" href="{{ $link }}">link</a>
    @endif
</div>
