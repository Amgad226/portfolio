<div class="details-container">

    @component('components.icon', [
        'img' => './assets/experience.png',
    ])
    @endcomponent
    <div style="display: ">

    </div>
    <h3>{{ $title }}</h3>
  
    <p>{{ $content }}
    
    </p>
    @if(isset($link))
    <a style="" href="{{$link}}">link</a>
    @endif
</div>
