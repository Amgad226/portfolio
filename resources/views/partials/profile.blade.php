<section id="profile">
    <div class="section__pic-container">
        <img src="./assets/profile-pic.png" alt="Amjad Alwattar profile picture" />
    </div>
    <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">Amjad Alwattar</h1>
        <p class="section__text__p2">Backend Developer & Devops</p>
        <div class="btn-container">
            <x-button type="button" class="btn btn-color-2"
                onclick="window.open('{{ asset('assets/resume-example.pdf') }}')">
                Download CV
            </x-button>
            <x-button type="button" class="btn btn-color-1" onclick="location.href='#contact'">
                Contact Info
            </x-button>
        </div>
        <div id="socials-container">
            <div onclick="location.href='https://linkedin.com/'">
                @component('components.icon', [
                    'img' => './assets/linkedin.png',
                ])
                @endcomponent

            </div>

            <div onclick="location.href='https://github.com/'">
                @component('components.icon', [
                    'img' => './assets/github.png',
                ])
                @endcomponent

            </div>



        </div>
    </div>
</section>
