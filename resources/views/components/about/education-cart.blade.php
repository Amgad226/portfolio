<div class="details-container">
    <div class="details-icon">
        <x-icon img="./assets/experience.png" />
        <h3>{{ $title }}</h3>
    </div>
    <p>{{ $content }}</p>
    @if (isset($link))
        <a href="{{ $link }}" target="_blank" rel="noreferrer">View certificate <span aria-hidden="true">↗</span></a>
    @endif
</div>
