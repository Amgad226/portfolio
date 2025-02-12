@vite('resources/css/graduation-project.css')
<section>
    <div id="graduation-project">
        <h1>My Graduation Project</h1>

        <div class="graduation-project">
            <div class="graduation-project-logo">
                <x-lazy-image src='./assets/personal-projects/york/logo.webp' alt="Project Image"
                    style="background: black" />
            </div>
            <div class="graduation-project-text">
                <div class="project-card">
                    <h2>York British Academy – Training & Certification Platform</h2>
                    <p><strong>Role:</strong> Backend Developer & DevOps Lead</p>
                    <p><strong>Team:</strong> 5 Software Engineers</p>
                    <p><strong>Client:</strong> York British Academy (UK) <a href="https://yorkbritishacademy.uk/">link</a></p> 

                    <p>
                        Our team developed <strong>helpful tools</strong> for York British Academy’s platform, extending
                        their existing system (V1) with
                        <strong>native training session management using WebRTC and certificate generation</strong>. The project was
                        built with a
                        <strong>microservices architecture</strong> to ensure best practices in scalability and
                        maintainability.
                    </p>

                    <h3>Key Features:</h3>
                    <ul>
                        <li><strong>Training Sessions:</strong> Video conferencing, screen sharing, collaborative
                            whiteboard, session recording, breakout rooms, online assignments with anti-fraud measures,
                            and reporting.</li>
                        <li><strong>Session Management:</strong> Scheduling, recorded session access, session
                            statistics, and reporting.</li>
                        <li><strong>Certificate Generator:</strong> Customizable certificate templates, secure
                            certificate issuance, and NFT-based authenticity.</li>
                    </ul>

                    <h3>My Contributions:</h3>
                    <ul>
                        <li>Led the backend team, ensuring high-performance service architecture and conducting code
                            reviews.</li>
                        <li>Designed and implemented <strong>microservices</strong> for scalable and modular system
                            integration.</li>
                        <li>Deployed the project on a <strong>Windows server</strong> using <strong>Docker</strong> and
                            <strong>GitLab CI/CD</strong>.</li>
                        <li>Dockerized multiple technologies: <strong>Node.js, NestJS, Next.js, Laravel, and Flutter
                                Web</strong>.</li>
                        <li>Built <strong>CI/CD pipelines</strong> for automated deployment and versioning.</li>
                    </ul>

                    <p>
                        At the end of the project, <strong>York British Academy awarded our team certificates</strong> 
                        for our successful implementation. You can find the certificates in the images below.
                    </p>

                </div>

                <div class="graduation-project-images">
                    <x-utils.image-zoom style="background:rgb(222, 222, 222)"
                        src="./assets/personal-projects/york/room_compressed.webp" />
                    <x-utils.image-zoom style="background:rgb(222, 222, 222)"
                        src="./assets/personal-projects/york/certificate_compressed.webp" />
                    <x-utils.image-zoom style="background:rgb(222, 222, 222)"
                        src="./assets/personal-projects/york/wightboard_compressed.webp" />
                    <x-utils.image-zoom style="background:rgb(222, 222, 222)"
                        src="./assets/personal-projects/york/cicd_compressed.webp" />
                    <x-utils.image-zoom style="background:rgb(222, 222, 222)"
                        src="./assets/personal-projects/york/york-certificate.jpg" />
             
                </div>

                <div class="project-links">
                    <a class="graduation-project-link" href="https://york.amjad.cloud" target="_blank">View Live Project</a>
                </div>

            </div>
        </div>
</section>
