<div class="nav-links-container">
    <ul class="nav-links">
        <li><a href="#about">About</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#personal-projects">Personal Projects</a></li>
        <li><a href="#freelance-projects">Freelance Projects</a></li>
        <li><a href="#graduation-project">Graduation Project</a></li>
        <li><a href="#work-projects">Work Projects</a></li>
        <li><a href="#contact">Contact</a></li>
        @if(session()->has('authenticated'))
        <li><a href="/dashboard">dashboard</a></li>
        @endif
    </ul>
</div>