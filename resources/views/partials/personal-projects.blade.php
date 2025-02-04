<style>
    #personal-projects {
        /* width: 100vw; */
        padding: 40px 20px;
        box-sizing: border-box;
        /* background: linear-gradient(135deg, #e3f2fd, #e1bee7); */
    }

    .personal-projects {
        /* max-width: 1200px; */
        /* margin: 0 auto; */
        display: grid;
        grid-template-columns: repeat(1, minmax(300px, 1fr));
        gap: 30px;
    }

    /* Mobile View: Switch to 1 column */
    @media (max-width: 768px) {
        .personal-projects {

            grid-template-columns: repeat(1, minmax(300px, 1fr));
        }
    }

    .personal-project-card {
        /* background: #4d3b3b; */
        border-radius: 16px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .personal-project-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .project-logo {
        background-color: #f9f9f9;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        height: 120px;
        border-bottom: 1px solid #eee;
    }

    .project-logo img {
        max-height: 100%;
        max-width: 100%;
        object-fit: contain;
    }

    .project-content {
        padding: 20px;
    }

    .project-name {
        font-size: 1.8rem;
        margin-bottom: 10px;
        color: #37474f;
    }

    .project-description {
        font-size: 1rem;
        line-height: 1.6;
        color: #616161;
        margin-bottom: 20px;
    }

    .project-images {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
        gap: 10px;
    }

    .project-images img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        transition: transform 0.3s;
    }

    .project-images img:hover {
        transform: scale(1.1);
    }

    .project-link {
        display: inline-block;
        text-decoration: none;
        font-weight: bold;
        color: #0288d1;
        margin-top: 10px;
        transition: color 0.3s;
    }

    .project-link:hover {
        color: #01579b;
    }

    /* Tags */
    .tags {
        margin-bottom: 10px;
    }

    .tag {
        display: inline-block;
        background: #34475c;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 0.9rem;
        margin-right: 5px;
    }

    .project-card {
        /* background: #f9f9f9; Light background */
        border-radius: 12px;
        padding: 20px;
        /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        /* max-width: 700px; */
        margin: auto;
    }

    .project-title {
        font-size: 20px;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    .project-description {
        font-size: 16px;
        color: #555;
    }

    .section-title {
        font-size: 18px;
        font-weight: bold;
        color: #222;
        margin-top: 15px;
    }

    .features-list,
    .responsibilities-list {
        padding-left: 20px;
        list-style: none;
    }

    .features-list li,
    .responsibilities-list li {
        background: url('https://cdn-icons-png.flaticon.com/16/845/845646.png') no-repeat left center;
        background-size: 16px;
        padding-left: 25px;
        margin-bottom: 8px;
        color: #444;
    }
</style>

<section id="personal-projects">
    <h1 style="text-align: center; font-size: 3rem; margin-bottom: 40px; color: #333;">Personal Projects</h1>


    <!-- Project 2 -->
    <h1 style=" font-size: 2rem; margin-bottom: 40px; color: #333;">Backend projects</h1>

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
        'demo' => '#',
    ])
    @endcomponent


    @component('components.personal-project.personal-project', [
        'logo' => './assets/personal-projects/source-safe/logo.png',
        'logo_background' => '#fff2ff',
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
        'responsibilities' => ['Led '],
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
        'demo' => '#',
    ])
    @endcomponent


    @component('components.personal-project.personal-project', [
        'logo' => './assets/notfound.png',
        'logo_background' => '#0f0f0f',
        'project_title' => 'Dental Clinic Management',
        'project_description' => "I was part of the team that developed Back-End side Using Nest.js, Prisma, GraphQL & Docker for a Dental Clinic Management system
                    that allows doctor to manage their patient profiles, reservations, appointments, lab orders and visualize medicines indications.
                    It has two platforms:",
    
        // 'features' => [
        //     'It prevents parallel modifications by categorizing files as "free" or "in use" for specific users.',
        //     'Access rights are controlled through file grouping.',
        //     'Key functionalities include check-in and check-out, allowing users to reserve, modify, and replace files.',
        //     'The system prevents concurrent reservations, ensuring exclusive access.',
        //     'Reporting features estimate booking and editing operations by file or user',
        // ],
        // 'responsibilities' => ['Led '],
        // 'images' => ['./assets/personal-projects/source-safe/1.png'],
        'tags' => [
            'Nest' => 'black',
            'TypeScript' => 'black',
            'Prisma' => 'black',
            'PostgreSQL' => 'black',
            'Docker' => 'black',
            'PostgreSQL' => 'black',
            'GraphQL' => 'black',
        ],
        'demo' => '#',
    ])
    @endcomponent


    @component('components.personal-project.personal-project', [
        'logo' => './assets/notfound.png',
        'logo_background' => 'green',
        'project_title' => 'Ticket Management System',
        'project_description' =>
            'Worked on a comprehensive ticket management system that includes multiple roles (admin, user, technician, manager) ',
    
        'features' => [
            'Authentication and role base access control.',
            'Ticket Management: Developed functionalities for creating, updating, and managing tickets, with a comment feature for detailed ticket discussions ',
            'Role-Based Conversations: Enabled real-time conversations between admin and users, and between managers and users, to track ticket statuses and resolutions .',
        ],
        'images' => [],
        'tags' => [
            'Node.js ' => 'green',
            'Express' => 'green',
            'MongoDB' => 'green',
            'Mongoose' => 'green',
            'Socket' => 'green',
        ],
        'demo' => '#',
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
        'responsibilities' => ['Led '],
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
        'demo' => '#',
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
        'demo' => '#',
    ])
    @endcomponent
    <h1 style=" font-size: 2rem; margin-bottom: 40px; color: #333;">Fullstack projects</h1>

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
        'responsibilities' => ['Led '],
        'images' => ['./assets/personal-projects/tt/1.png', './assets/personal-projects/tt/2.png', './assets/personal-projects/tt/3.png', './assets/personal-projects/tt/4.png'],
        'tags' => [
            'Laravel ' => '#4c6aaf',
            'Mysql' => '#4c6aaf',
            'Pusher' => '#4c6aaf',
            'Blade' => '#4c6aaf',
            'CSS' => '#4c6aaf',
            'jQuery' => '#4c6aaf',
            'Firebase' => '#4c6aaf',
        ],
        'demo' => '#',
    ])
    @endcomponent

    <h1 style=" font-size: 2rem; margin-bottom: 40px; color: #333;">Games and Simulation Projects</h1>

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
        'demo' => '#',
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
        'demo' => '#',
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
        'demo' => '#',
        'images' => ['./assets/personal-projects/snake/1.jpg', './assets/personal-projects/snake/2.jpg', './assets/personal-projects/snake/3.jpg'],
        
    ])
    @endcomponent

    </div>
</section>
