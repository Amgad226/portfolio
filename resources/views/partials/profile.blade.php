<script>
    let clickedTimeToNavigate = 5;

    function navigateToDashboard() {
        if (clickedTimeToNavigate === 0) {
            location.href = "{{ route('dashboard') }}";
        }
        clickedTimeToNavigate--;
    }
</script>

<section id="profile">
    <div class="profile-pic-container" onclick="navigateToDashboard()">
        <x-lazy-image src="./assets/profile-pic_compressed.webp" alt="Portrait of Amjad Alwattar" />
        <div class="profile-photo-note">Damascus, Syria</div>
    </div>

    <div class="profile-text">
        <p class="profile-text-p1">Hello, I’m</p>
        <h1 class="title">Amjad Alwattar</h1>
        <p class="profile-text-p2">Full-Stack Engineer <span>&</span> DevOps</p>

        <div class="btn-container">
            <a class="btn btn-color-1" href="#contact">Let’s talk</a>
            <a class="btn btn-color-2" href="{{ asset('assets/amjad-alwattar-cv.pdf') }}" target="_blank" rel="noreferrer">View CV <span aria-hidden="true">↗</span></a>
        </div>

        <div id="socials-container">
            <a href="https://linkedin.com/in/amjad-alwattar" target="_blank" rel="noreferrer" aria-label="LinkedIn profile">
                <x-icon img="./assets/linkedin.png" />
                <span>LinkedIn</span>
            </a>
            <a href="https://github.com/amgad226" target="_blank" rel="noreferrer" aria-label="GitHub profile">
                <x-icon img="./assets/github.png" />
                <span>GitHub</span>
            </a>
        </div>

    </div>
</section>
