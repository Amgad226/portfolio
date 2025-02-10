@vite('resources/css/personal-projects.css')

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".toggle-btn").forEach(button => {
            button.addEventListener("click", function() {
                const projectContent = this.closest(".personal-project-card").querySelector(
                    ".project-content");

                if (projectContent.style.display === "none" || projectContent.style.display ===
                    "") {
                    projectContent.style.display = "block";
                    this.textContent = "Close";
                } else {
                    projectContent.style.display = "none";
                    this.textContent = "Expand";
                }
            });
        });
    });
</script>

<section id="personal-projects">
    <h1 class ="title">Personal Projects</h1>


    <!-- Project 2 -->
    <h1 class ="personal-project-title">Backend projects</h1>

    @component('components.personal-project.personal-project', [
        'logo' => './assets/personal-projects/york/logo.webp',
        'logo_background' => 'black',
        'project_title' => 'York-British-Academy',
        'project_description' => "As a backend developer and DevOps lead, I contributed to a comprehensive platform for 
                                                                            ‘York-British-Academy’ designed to centralize services for trainees and trainers, eliminating reliance on multiple platforms.",
    
        'features' => [
            'Training Sessions: Video conferencing, session settings, screen sharing, collaborative whiteboard, session recording, break management, online assignments with anti-fraud measures, and reporting system.',
            'Sessions Management: Viewing and managing recorded sessions, scheduling, session statistics, and session reports.',
            'Certificate Generator: Creating and managing certificate templates, setting templates for courses, generating secure certificates, and offering NFT-based authenticity.',
        ],
        'responsibilities' => [
            'Led the backend team, ensuring efficient services and conducting code reviews.',
            'Deployed the entire project on a Windows server using Docker and GitLab CI/CD pipelines.',
            'Developed microservices and integrated communication between system versions.',
            'Dockerized various components (Node.js, Nest.js, Next.js, Laravel, and Flutter web app) and deployed them to the server.',
            'Built CI/CD pipelines for continuous integration and deployment.',
        ],
        'images' => [
            './assets/personal-projects/york/room.jpg',
            './assets/personal-projects/york/certificate.jpg',
            './assets/personal-projects/york/wightboard.jpg',
            './assets/personal-projects/york/cicd.jpg',
        ],
        'tags' => [
            'Nest' => 'black',
            'Laravel' => 'black',
            'Nginx' => 'black',
            'Mysql' => 'black',
            'PostgreSQL' => 'black',
            'WebRTC' => 'black',
            'Socket' => 'black',
            'Redis' => 'black',
            'Prisma' => 'black',
            'Docker' => 'black',
            'PostgreSQL' => 'black',
        ],
        'demo' => 'https://york.amjad.cloud',
    ])
    @endcomponent


    @component('components.personal-project.personal-project', [
        'logo' => './assets/personal-projects/source-safe/logo.png',
        'logo_background' => '#F14A5C',
        'logo_inner_background' => '#FFFFFF',
        'project_title' => 'Source-Safe',
        'project_description' => "Source Safe’ is a web-based system for managing collaborative file work | Source Safe scales to support up to 100 simultaneous users by implement load balancing with Round Rouben strategy.
                                            I primarily work on backend development,  ",
    
        'features' => [
            'It prevents parallel modifications by categorizing files as "free" or "in use" for specific users.',
            'Access rights are controlled through file grouping.',
            'Key functionalities include check-in and check-out, allowing users to reserve, modify, and replace files.',
            'The system prevents concurrent reservations, ensuring exclusive access.',
            'Reporting features estimate booking and editing operations by file or user',
        ],
        'images' => [
            './assets/personal-projects/source-safe/1.png',
            './assets/personal-projects/source-safe/2.png',
            './assets/personal-projects/source-safe/3.png',
            './assets/personal-projects/source-safe/4.png',
        ],
        'tags' => [
            'Nest' => '#E84860',
            'TypeScript' => '#E84860',
            'Nginx' => '#E84860',
            'PostgreSQL' => '#E84860',
            'Redis' => '#E84860',
            'Prisma' => '#E84860',
            'Docker' => '#E84860',
            'PostgreSQL' => '#E84860',
            'Google Drive Storage' => '#E84860',
        ],
        'demo' => 'https://source-safe.amjad.cloud',
    ])
    @endcomponent





    @component('components.personal-project.personal-project', [
        'logo' => './assets/personal-projects/trip-tips/logo.png',
        'logo_background' => '#002F4C',
        'project_title' => 'Trip-Tips',
        'project_description' =>
            '‘Trip Tips’ is a comprehensive tourism management app, empowering users to explore top destinations, discover top-rated hotels,restaurants, and attractions. and plan trips effortlessly',
    
        'features' => [
            ' platform facilitates browsing,.',
            'commenting',
            'issue reporting',
            'gaining full management privileges',
            'Administrators enjoy a centralized dashboard for overseeing all operations',
            'implemented a multi-role and permissions system for admin, manager, supervisor, and user roles, facilitated efficient data management',
        ],
        'images' => [
            './assets/personal-projects/trip-tips/1.png',
            './assets/personal-projects/trip-tips/2.png',
            './assets/personal-projects/trip-tips/3.png',
            './assets/personal-projects/trip-tips/4.png',
        ],
        'tags' => [
            'Laravel ' => '#002F4C',
            'Mysql' => '#002F4C',
        ],
        'demo' => 'https://trip-tips.amjad.cloud',
    ])
    @endcomponent



    @component('components.personal-project.personal-project', [
        'logo' => './assets/personal-projects/x-buyer/logo.jpg',
        'logo_background' => '#73446E',
        'project_title' => 'X-Buyer',
        'project_description' =>
            '"X-Buyer" which is an online store of a flutter app that sells products which are close to expiration and applies discounts on them.',
    
        'images' => [
            './assets/personal-projects/x-buyer/1.jpg',
            './assets/personal-projects/x-buyer/2.jpg',
            './assets/personal-projects/x-buyer/3.jpg',
            './assets/personal-projects/x-buyer/4.jpg',
        ],
        'tags' => [
            'Laravel ' => '#73446E',
            'Mysql' => '#73446E',
        ],
        // 'demo' => '#',
    ])
    @endcomponent
    <h1 class ="personal-project-title">Fullstack projects</h1>

    @component('components.personal-project.personal-project', [
        'logo' => './assets/personal-projects/tt/logo.png',
        'logo_background' => '#4c6aaf',
        'project_title' => 'TT',
        'project_description' => 'TT" is a chat application that supports ',
    
        'features' => [
            ' individual and group conversations.',
            'file, image, and audio records sharing.',
            'typing now.',
            'customizable themes.',
            'language options.',
            'notifications',
        ],
        'images' => [
            './assets/personal-projects/tt/1.png',
            './assets/personal-projects/tt/2.png',
            './assets/personal-projects/tt/3.png',
            './assets/personal-projects/tt/4.png',
        ],
        'tags' => [
            'Laravel ' => '#4c6aaf',
            'Mysql' => '#4c6aaf',
            'Pusher' => '#4c6aaf',
            'Blade' => '#4c6aaf',
            'CSS' => '#4c6aaf',
            'jQuery' => '#4c6aaf',
            'Firebase' => '#4c6aaf',
        ],
        'demo' => 'https://tt.amjad.cloud',
    ])
    @endcomponent

    <h1 class ="personal-project-title">Games and Simulation Projects</h1>

    @component('components.personal-project.personal-project', [
        'logo' => './assets/personal-projects/soku-number/logo.jpg',
        'logo_background' => 'black',
        'project_title' => 'Soko Number Game',
        'project_description' =>
            '"Soko Number" is a fresh and captivating puzzle game that challenges your intelligence and logical reasoning skills. Apart from the playing mode, the game can also be tackled with renowned algorithms such as DFS, BFS, UCS, and A*.',
    
        'images' => [
            './assets/personal-projects/soku-number/1.png',
            './assets/personal-projects/soku-number/2.png',
            './assets/personal-projects/soku-number/3.png',
            './assets/personal-projects/soku-number/4.png',
        ],
        'tags' => [
            'HTML ' => 'black',
            'CSS' => 'black',
            'JS' => 'black',
            'DFS' => 'black',
            'BFS' => 'black',
            'UCS' => 'black',
            'A*' => 'black',
        ],
        'demo' => 'https://amgad226.github.io/sokoNumber/index.html',
    ])
    @endcomponent


    @component('components.personal-project.personal-project', [
        'logo' => './assets/personal-projects/satellite/logo.png',
        'logo_background' => 'black',
        'project_title' => 'Simulation of the motion of a satellite',
        'project_description' => 'Developed a simulation project for the movement of the satellites around the Earth',
    
        'images' => ['./assets/personal-projects/satellite/1.png', './assets/personal-projects/satellite/2.png'],
        'tags' => [
            'JavaScript ' => 'black',
            'ThreeJs' => 'black',
        ],
        'demo' => 'https://devayham.github.io/satellite-simulation/',
    ])
    @endcomponent

    @component('components.personal-project.personal-project', [
        'logo' => './assets/personal-projects/snake/logo.avif',
        'logo_background' => 'black',
        'project_title' => 'Snake Nokia Game',
        'project_description' =>
            'This project is a classic Snake game, inspired by the iconic Nokia mobile phone game. The game provides a nostalgic experience while incorporating modern programming practices',
        'tags' => [
            'C++ ' => 'black',
        ],
        // 'demo' => '#',
        'images' => [
            './assets/personal-projects/snake/1.jpg',
            './assets/personal-projects/snake/2.jpg',
            './assets/personal-projects/snake/3.jpg',
        ],
    ])
    @endcomponent

    </div>
</section>
