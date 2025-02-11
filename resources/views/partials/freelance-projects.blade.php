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
                        reservations, appointments, lab orders and visualize medicines indications. It has two
                        platforms:</p>
                    <div class="freelance-project-images">

                        <x-utils.image-zoom src="./assets/personal-projects/dental-clinic/1_compressed.webp"  />
                        <x-utils.image-zoom src="./assets/personal-projects/dental-clinic/2_compressed.webp"  />
                        <x-utils.image-zoom src="./assets/personal-projects/dental-clinic/3_compressed.webp"  />
                        <x-utils.image-zoom src="./assets/personal-projects/dental-clinic/4_compressed.webp"  />

           
                    </div>
                    <a class="frelance-project-link" href="#">View Project</a>

                </div>

            </div>

            <div class="freelance-project">
                <div class="freelance-project-logo">
                    <x-lazy-image src="./assets/notfound.png" alt="Project Image"/>
                </div>
                <div class="freelance-project-text">
                    <h2>Ticket Management System</h2>
                    <p>Worked on a comprehensive ticket management system that includes multiple roles (admin, user,
                        technician, manager)
                        @
                        <br>
                        <br>
                        'Authentication and role base access control.',
                        <br>
                        <br>
                        'Ticket Management: Developed functionalities for creating, updating, and managing tickets, with
                        a comment feature for detailed ticket discussions ',
                        <br>
                        <br>
                        'Role-Based Conversations: Enabled real-time conversations between admin and users, and between
                        managers and users, to track ticket statuses and resolutions .',

                    </p>
                    <a class="frelance-project-link" href="#">View Project</a>
                </div>
            </div>

        </div>

</section>
