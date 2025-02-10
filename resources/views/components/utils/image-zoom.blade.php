<div  style="{{$style??''}}" class="image-container" onclick="zoom(this.querySelector('img'))">
    <x-lazy-image src="{{$src}}"/>
    <div class="hover-icon">
        <!-- SVG Zoom Icon -->
        <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="10" r="7" stroke="white" stroke-width="2"/>
            <line x1="15" y1="15" x2="21" y2="21" stroke="white" stroke-width="2"/>
            <line x1="7" y1="10" x2="13" y2="10" stroke="white" stroke-width="2"/>
            <line x1="10" y1="7" x2="10" y2="13" stroke="white" stroke-width="2"/>
        </svg>
    </div>
</div>
