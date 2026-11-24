<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".toggle-btn").forEach(button => {
            button.addEventListener("click", function() {
                const projectContent = this.closest(".personal-project-card").querySelector(
                    ".project-content");

                if (projectContent.style.display === "none" || projectContent.style.display ===
                    "") {
                    projectContent.style.display = "block";
                    this.textContent = "Hide details";
                    this.setAttribute("aria-expanded", "true");
                } else {
                    projectContent.style.display = "none";
                    this.textContent = "View details";
                    this.setAttribute("aria-expanded", "false");
                }
            });
        });
    });
</script>

<section id="personal-projects">
    <p class="section-kicker">Project archive</p>
    <h1 class="title">More Projects</h1>
    <p class="section-intro">A broader archive of backend experiments, internal tools, full-stack applications, automation scripts, and simulations.</p>

    <h2 class="personal-project-title personal-project-title--first">Client systems</h2>
    <div class="secondary-project-grid archive-featured-projects">
        <article class="secondary-project">
            <div class="secondary-project-heading">
                <img src="{{ asset('assets/personal-projects/dental-clinic/logo.jpg') }}" alt="Dental Clinic Management logo">
                <div><p>Client system</p><h2>Dental Clinic Management</h2></div>
            </div>
            <p>Clinic management backend for patients, appointments, reservations, lab orders, and medicine information.</p>
            <div class="project-tags"><span>NestJS</span><span>GraphQL</span><span>Prisma</span><span>Docker</span></div>
            <div class="mini-gallery">
                <x-utils.image-zoom src="./assets/personal-projects/dental-clinic/1_compressed.webp" />
                <x-utils.image-zoom src="./assets/personal-projects/dental-clinic/3_compressed.webp" />
            </div>
        </article>

        <article class="secondary-project">
            <div class="secondary-project-heading">
                <div class="project-lettermark">TM</div>
                <div><p>Operations tool</p><h2>Ticket Management System</h2></div>
            </div>
            <p>Role-based support workflows with ticket lifecycle management, comments, and real-time conversations.</p>
            <div class="project-tags"><span>Node.js</span><span>Express</span><span>MongoDB</span><span>Socket.IO</span></div>
            <ul class="compact-list"><li>Role-based permissions</li><li>Live support conversations</li><li>Ticket history and status</li></ul>
        </article>
    </div>

    <h2 class="personal-project-title">Automation & shell scripts</h2>



    @component('components.personal-project.personal-project', [
        'logo' => './assets/personal-projects/shell_compressed.webp',
        'logo_background' => 'black',
        'logo_inner_background' => 'black',
        'project_title' => 'Shell script to configured sub-domains with nginx',
        'project_description' => "This script automates the process of generating and activating Nginx configuration files for subdomains. It allows users to configure a subdomain to either:
            Proxy requests to a local port.
            Serve an HTML or PHP project from a specified directory.",
    
        'features' => [
            'Folder Existence Check and Creation',
            'Template-Based Nginx Configuration Generation',
            'Support for Local Port Proxying',
            'Support for HTML and PHP Projects',
            'User Input Validation and Error Handling',
            'Dynamic Subdomain Configuration Management',
            'Automatic Configuration Activation (Optional)',
            'Nginx Configuration Testing and Reloading',
            'Wildcard SSL Certificate Support',
            'Automatic SSL Certificate Integration',
            'Dynamic Certificate Path Configuration',
        ],
    
        'tags' => [
            'sh' => 'black',
        ],
    ])
    @endcomponent

    @component('components.personal-project.personal-project', [
        'logo' => './assets/personal-projects/shell_compressed.webp',
        'logo_background' => 'black',
        'logo_inner_background' => 'black',
        'project_title' => 'Shell script for managing WireGuard VPN clients',
        'project_description' => "This script automates the process of managing WireGuard VPN clients. It provides functionalities to:
            - Add a new VPN client with automatic key generation and IP assignment.
            - Remove an existing VPN client and update the WireGuard configuration.
            - List all existing VPN clients.",
    
        'features' => [
            'Root Privilege Enforcement',
            'Automatic Client Key Generation',
            'Dynamic Client IP Allocation',
            'WireGuard Configuration Update for New Clients',
            'Client Configuration File Generation',
            'QR Code Display for Easy Client Setup',
            'Automated WireGuard Service Restart',
            'Client Removal with Configuration Cleanup',
            'Existing Clients Listing Functionality',
            'User-Friendly Interactive Menu',
        ],
    
        'tags' => [
            'sh' => 'black',
        ],
    ])
    @endcomponent


    <!-- Project 2 -->
    <h2 class="personal-project-title">Backend projects</h2>



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
            './assets/personal-projects/source-safe/1_compressed.webp',
            './assets/personal-projects/source-safe/2_compressed.webp',
            './assets/personal-projects/source-safe/3_compressed.webp',
            './assets/personal-projects/source-safe/4_compressed.webp',
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
        'logo' => './assets/personal-projects/trip-tips/logo_compressed.webp',
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
            './assets/personal-projects/trip-tips/1_compressed.webp',
            './assets/personal-projects/trip-tips/2_compressed.webp',
            './assets/personal-projects/trip-tips/3_compressed.webp',
            './assets/personal-projects/trip-tips/4_compressed.webp',
        ],
        'tags' => [
            'Laravel ' => '#002F4C',
            'Mysql' => '#002F4C',
        ],
        'demo' => 'https://trip-tips.amjad.cloud',
    ])
    @endcomponent



    @component('components.personal-project.personal-project', [
        'logo' => './assets/personal-projects/x-buyer/logo_compressed.webp',
        'logo_background' => '#73446E',
        'project_title' => 'X-Buyer',
        'project_description' =>
            '"X-Buyer" which is an online store of a flutter app that sells products which are close to expiration and applies discounts on them.',
    
        'images' => [
            './assets/personal-projects/x-buyer/1_compressed.webp',
            './assets/personal-projects/x-buyer/2_compressed.webp',
            './assets/personal-projects/x-buyer/3_compressed.webp',
            './assets/personal-projects/x-buyer/4_compressed.webp',
        ],
        'tags' => [
            'Laravel ' => '#73446E',
            'Mysql' => '#73446E',
        ],
        // 'demo' => '#',
    ])
    @endcomponent
    <h2 class="personal-project-title">Full-stack projects</h2>

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
            './assets/personal-projects/tt/1_compressed.webp',
            './assets/personal-projects/tt/2_compressed.webp',
            './assets/personal-projects/tt/3_compressed.webp',
            './assets/personal-projects/tt/4_compressed.webp',
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

    <h2 class="personal-project-title">Games & simulations</h2>

    @component('components.personal-project.personal-project', [
        'logo' => './assets/personal-projects/soku-number/logo_compressed.webp',
        'logo_background' => 'black',
        'project_title' => 'Soko Number Game',
        'project_description' =>
            '"Soko Number" is a fresh and captivating puzzle game that challenges your intelligence and logical reasoning skills. Apart from the playing mode, the game can also be tackled with renowned algorithms such as DFS, BFS, UCS, and A*.',
    
        'images' => [
            './assets/personal-projects/soku-number/1_compressed.webp',
            './assets/personal-projects/soku-number/2_compressed.webp',
            './assets/personal-projects/soku-number/3_compressed.webp',
            './assets/personal-projects/soku-number/4_compressed.webp',
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
        'logo' => './assets/personal-projects/satellite/logo_compressed.webp',
        'logo_background' => 'black',
        'project_title' => 'Simulation of the motion of a satellite',
        'project_description' => 'Developed a simulation project for the movement of the satellites around the Earth',
    
        'images' => ['./assets/personal-projects/satellite/1_compressed.webp', './assets/personal-projects/satellite/2_compressed.webp'],
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
            './assets/personal-projects/snake/1_compressed.webp',
            './assets/personal-projects/snake/2_compressed.webp',
            './assets/personal-projects/snake/3_compressed.webp',
        ],
    ])
    @endcomponent

</section>
