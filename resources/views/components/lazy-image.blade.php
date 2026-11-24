@props(['src'=>"", 'placeholder' =>  asset('assets/placeholder.svg') , 'alt' => '', 'class' => '' , 'id'=>'','style'=>''])

<img
    src="{{ $src }}"
    alt="{{ $alt }}" 
    class="{{ $class }}"
    loading="lazy"
    decoding="async"
    id="{{$id}}"
    style="{{$style}}"
/>
