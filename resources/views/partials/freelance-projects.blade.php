@vite('resources/css/freelance-projects.css')

<section>

    <div id="freelance-projects">
        <div class="projects">
            <h1>Freelance Projects</h1>

            <div class="freelance-project">
                <div class="freelance-project-logo">
                    <x-lazy-image src='./assets/personal-projects/dental-clinic/logo.jpg' alt="Project Image" />
                </div>
                <div class="freelance-project-text">
                    <h2>Dental Clinic Management</h2>
                    <p>I was part of the team that developed Back-End side Using Nest.js, Prisma, GraphQL & Docker for a
                        Dental Clinic Management system that allows doctor to manage their patient profiles,
                        reservations, appointments, lab orders and visualize medicines indications.</p>
                    <div class="freelance-project-images">

                        <x-utils.image-zoom src="./assets/personal-projects/dental-clinic/1_compressed.webp" />
                        <x-utils.image-zoom src="./assets/personal-projects/dental-clinic/2_compressed.webp" />
                        <x-utils.image-zoom src="./assets/personal-projects/dental-clinic/3_compressed.webp" />
                        <x-utils.image-zoom src="./assets/personal-projects/dental-clinic/4_compressed.webp" />


                    </div>
                    <a class="frelance-project-link" href="https://dental-clinic.amjad.cloud">View Project</a>

                </div>

            </div>

            <div class="freelance-project">
                <div class="freelance-project-logo">
                    <x-lazy-image src="./assets/notfound.png" alt="Project Image" />
                </div>
                <div class="freelance-project-text">
                    <h2>Ticket Management System</h2>
                    <p>
                        Developed a <strong>comprehensive ticket management system</strong> with <strong>role-based access control (RBAC)</strong>, ensuring seamless interaction between different user roles: 
                        <strong>Admin, User, Technician, and Manager</strong>.
                    </p>
            
                    <h3>Key Features:</h3>
                    <ul>
                        <li><strong>Authentication & Role-Based Access Control:</strong> Secure login system with permissions based on roles.</li>
                        <li><strong>Ticket Management:</strong> Users can create, update, and manage tickets with a <strong>commenting system</strong> for detailed discussions.</li>
                        <li><strong>Real-Time Conversations:</strong> Implemented <strong>live messaging</strong> using <strong>Socket.io</strong>, enabling efficient communication between:
                            <ul>
                                <li><strong>Admins & Users:</strong> Support and issue resolution.</li>
                                <li><strong>Managers & Users:</strong> Tracking ticket status and resolution updates.</li>
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
