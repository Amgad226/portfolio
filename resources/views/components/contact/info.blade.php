<div class="contact-info-container">
    @component('components.icon', [
        'img' => $img,
        'alt' => $alt ?? 'alt image',
        'extra_class' => 'contact-icon ' . ($extra_class ?? ''),
    ])
    @endcomponent

    @if (isset($href))
        <p>
            <a href="{{ $href }}">{{ $title }}</a>
        </p>
    @else
        <p onclick="copy(this)">
            {{ $title }}
            <x-lazy-image  id="copiedNumber" style=" width:.8rem;highet:.8rem" src="/assets/copy.png" alt="sad" />
        </p>
    @endif
</div>

<script>
    function copy(that) {
       
        const inp = document.createElement('input');
        document.body.appendChild(inp)
        inp.value = that.childNodes[0].textContent.trim()
        inp.select();
        document.execCommand('copy', false);
        inp.remove();
        const icon = document.getElementById("copiedNumber")
        icon.src = '/assets/copied.png'
        launch_toast("phone number copied",'/assets/copied.png')

    }
</script>
