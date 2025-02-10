@vite('resources/css/freelance-projects.css')

<section>

    <div id="freelance-projects">
        <div class="projects">
            <h1>My Graduation Project</h1>

            <div class="freelance-project">
                <div class="freelance-project-logo">
                    <x-lazy-image src='./assets/personal-projects/york/logo.webp' alt="Project Image" style="background: black" />
                </div>
                <div class="freelance-project-text">
                    <h2>‘York-British-Academy’</h2>
                    <p>
                        As a backend developer and DevOps lead, I contributed to a comprehensive platform for
                        ‘York-British-Academy’ designed to centralize services for trainees and trainers, eliminating
                        reliance on multiple platforms.",
                        <br><br>
                        'Training Sessions: Video conferencing, session settings, screen sharing, collaborative
                        whiteboard, session recording, break management, online assignments with anti-fraud measures,
                        and reporting system.',
                        'Sessions Management: Viewing and managing recorded sessions, scheduling, session statistics,
                        and session reports.',
                        'Certificate Generator: Creating and managing certificate templates, setting templates for
                        courses, generating secure certificates, and offering NFT-based authenticity.',
                        <br>
                        <br>
                        'Led the backend team, ensuring efficient services and conducting code reviews.',
                        'Deployed the entire project on a Windows server using Docker and GitLab CI/CD pipelines.',
                        'Developed microservices and integrated communication between system versions.',
                        'Dockerized various components (Node.js, Nest.js, Next.js, Laravel, and Flutter web app) and
                        deployed them to the server.',
                        'Built CI/CD pipelines for continuous integration and deployment.',

                    </p>
                    <div class="freelance-project-images">

                        <x-utils.image-zoom src="./assets/personal-projects/york/room.jpg" />
                        <x-utils.image-zoom src="./assets/personal-projects/york/certificate.jpg" />
                        <x-utils.image-zoom src="./assets/personal-projects/york/wightboard.jpg" />
                        <x-utils.image-zoom src="./assets/personal-projects/york/cicd.jpg" />



                    </div>
                    <a class="frelance-project-link" href="york.amjad.cloud">View Project</a>

                </div>

            </div>



        </div>

</section>
