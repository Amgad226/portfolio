<div class="contact-info-container">
    @component('components.icon', [
        'img' => $img,
        'alt' => $alt ?? 'alt image',
        'extra_class' => 'contact-icon ' . ($extra_class ?? ''),
    ])
    @endcomponent
    <p><a href="{{ $href }}">{{ $title }}</a></p>
</div>
