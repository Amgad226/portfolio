@props(['src'=>"", 'placeholder' => null , 'alt' => '', 'class' => '' , 'id'=>'','style'=>''])

<img 
    src="{{ $placeholder ?? $src }}" 
    data-src="{{ $src }}" 
    alt="{{ $alt }}" 
    class="lazy {{ $class }}"
    loading="lazy"
    id="{{$id}}"
    style="{{$style}}"
/>
{{-- 
<script>
document.addEventListener("DOMContentLoaded", function() {
    const lazyImages = document.querySelectorAll("img.lazy");
    lazyImages.forEach(img => {
        const originalSrc = img.getAttribute("data-src");
        if (originalSrc) {
            const highResImg = new Image();
            highResImg.src = originalSrc;
            highResImg.onload = () => {
                img.src = originalSrc;
                img.classList.remove("lazy");
            };
        }
    });
});
</script> --}}
