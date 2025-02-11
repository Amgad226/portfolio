@vite('resources/css/profile.css')
<section id="profile">

        <div class="profile-pic-container">
            <x-lazy-image   class="" src="./assets/profile-pic_compressed.webp"/>
        </div>
        <br>
    <div class="profile-text">
        <p class="profile-text-p1">Hello, I'm</p>
        <h1 class="title">Amjad Alwattar</h1>
        <p class="profile-text-p2">Backend Developer & Devops</p>
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
            <div onclick="location.href='https://linkedin.com/in/amjad-alwattar'">
                @component('components.icon', [
                    'img' => './assets/linkedin.png',
                ])
            {{-- <a href='https://linkedin.com/in/amjad-alwattar'></a> --}}

                @endcomponent

            </div>

            <div onclick="location.href='https://github.com/amgad226'">
                @component('components.icon', [
                    'img' => './assets/github.png',
                ])
                @endcomponent

            </div>



        </div>
    </div>
</section>
