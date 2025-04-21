@vite('resources/css/freelance-projects.css')

<section>

    <div id="freelance-projects">
        <div class="projects">
            <h1>Freelance Projects</h1>


            <div class="freelance-project">
                <div class="freelance-project-logo">
                    <x-lazy-image src='./assets/personal-projects/gpsme/logo.png' alt="Project Image" />
                </div>
                <div class="freelance-project-text">
                    <h2>Gps tracking</h2>
                    <p>
                        Designed and implemented a real-time GPS tracking system to monitor mobile app location data.
                        <br>
                        Built a <strong>React Native mobile app </strong>that captures live GPS coordinates and sends
                        updates only when movement is detected, reducing unnecessary data transfer.
                        <br>

                        Developed a <strong>Node.js server with TypeScript and Socket.IO</strong> to handle real-time
                        communication and broadcast live location updates.
                        <br>
                        Created an <strong>interactive web dashboard </strong>using <strong>HTML, CSS, and
                            JavaScript</strong> to visualize movement history on the map, with filters for date range
                        selection and playback functionality.
                    </p>
                    <div class="freelance-project-images">

                        <x-utils.image-zoom src="./assets/personal-projects/gpsme/1_compressed.webp" />
                        <x-utils.image-zoom src="./assets/personal-projects/gpsme/3_compressed.webp" />
                        <x-utils.image-zoom src="./assets/personal-projects/gpsme/4_compressed.webp" />
                        <x-utils.image-zoom src="./assets/personal-projects/gpsme/2_compressed.webp" />
                        <x-utils.image-zoom src="./assets/personal-projects/gpsme/5_compressed.webp" />
                    </div>
                    <div class="freelance-project-images">
                        <x-utils.image-zoom src="./assets/personal-projects/gpsme/6_compressed.webp" />
                        <x-utils.image-zoom src="./assets/personal-projects/gpsme/7_compressed.webp" />
                    </div>
                    {{-- <a class="frelance-project-link" href="https://dental-clinic.amjad.cloud">View Project</a> --}}
                    <h3>Technologies Used:</h3>
                    <div class="tech-stack">
                        <span>React Native</span>
                        <span>Node Ts</span>
                        <span>Socket io</span>
                        <span>Html</span>
                        <span>CSS</span>
                        <span>JS</span>
                    </div>
                </div>
            </div>
            <div class="freelance-project">
                <div class="freelance-project-logo">
                    <x-lazy-image src='./assets/personal-projects/dental-clinic/logo.jpg' alt="Project Image" />
                </div>
                <div class="freelance-project-text">
                    <h2>Dental Clinic Management</h2>
                    <p>I was part of the team that developed Back-End side Using <strong> Nest.js, Prisma, GraphQL &
                            Docker</strong> for a
                        Dental Clinic Management system that allows doctor to manage their patient profiles,
                        reservations, appointments, lab orders and visualize medicines indications.</p>
                    <div class="freelance-project-images">
                        <x-utils.image-zoom src="./assets/personal-projects/dental-clinic/1_compressed.webp" />
                        <x-utils.image-zoom src="./assets/personal-projects/dental-clinic/2_compressed.webp" />
                        <x-utils.image-zoom src="./assets/personal-projects/dental-clinic/3_compressed.webp" />
                        <x-utils.image-zoom src="./assets/personal-projects/dental-clinic/4_compressed.webp" />
                    </div>
                    <h3>Technologies Used:</h3>
                    <div class="tech-stack">
                        <span>Nest js</span>
                        <span>GraphQL</span>
                        <span>Docker</span>
                        <span>Prisma</span>
                    </div>
                    {{-- <a class="frelance-project-link" href="https://dental-clinic.amjad.cloud">View Project</a> --}}
                </div>
            </div>

            <div class="freelance-project">
                <div class="freelance-project-logo">
                    <x-lazy-image src="./assets/notfound.png" alt="Project Image" />
                </div>
                <div class="freelance-project-text">
                    <h2>Ticket Management System</h2>
                    <p>
                        Developed a <strong>comprehensive ticket management system</strong> with <strong>role-based
                            access control (RBAC)</strong>, ensuring seamless interaction between different user roles:
                        <strong>Admin, User, Technician, and Manager</strong>.
                    </p>

                    <h3>Key Features:</h3>
                    <ul>
                        <li><strong>Authentication & Role-Based Access Control:</strong> Secure login system with
                            permissions based on roles.</li>
                        <li><strong>Ticket Management:</strong> Users can create, update, and manage tickets with a
                            <strong>commenting system</strong> for detailed discussions.</li>
                        <li><strong>Real-Time Conversations:</strong> Implemented <strong>live messaging</strong> using
                            <strong>Socket.io</strong>, enabling efficient communication between:
                            <ul>
                                <li><strong>Admins & Users:</strong> Support and issue resolution.</li>
                                <li><strong>Managers & Users:</strong> Tracking ticket status and resolution updates.
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h3>Technologies Used:</h3>
                    <div class="tech-stack">
                        <span>Node.js</span>
                        <span>Express.js</span>
                        <span>MongoDB</span>
                        <span>Socket.io</span>
                    </div>

                    <!-- Uncomment if you have a live link -->
                    <!-- <a class="freelance-project-link" href="your_project_link_here">View Project</a> -->
                </div>
            </div>


        </div>

</section>
