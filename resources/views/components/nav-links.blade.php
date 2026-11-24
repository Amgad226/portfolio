<div class="nav-links-container">
    <ul class="nav-links">
        <li><a href="#about">About</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#work-projects">Work</a></li>
        <li><a href="#freelance-projects">Projects</a></li>
        <li><a href="#personal-projects">Archive</a></li>
        <li><a href="#contact">Contact</a></li>
        @if(session()->has('authenticated'))
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        @endif
    </ul>
</div>
