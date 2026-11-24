<section id="work-projects" class="work-projects-section">
    <p class="section-kicker">Professional experience</p>
    <h1 class="title">Selected Work</h1>
    <p class="section-intro">Production roles across backend engineering, cloud, DevOps, and product delivery.</p>

    <div class="work-list">
        @component('components.work.project', [
            'color' => '#0e5072',
            'company_name' => 'L-One Systems GmbH',
            'role' => 'Senior Full-Stack Engineer & DevOps Engineer',
            'current_job' => true,
            'img' => 'assets/companies/l-one.png',
            'right' => 0,
            'from' => 'Oct 2025',
            'to' => 'Present',
            'link' => 'https://l-one.de/en',
            'technoligies' => [
                'assets/work-tech/nest.svg',
                'assets/work-tech/laravel.svg',
                'assets/work-tech/docker.webp',
                'assets/work-tech/aws.png',
                'assets/work-tech/postgres.png',
                'assets/work-tech/runner.svg',
            ],
        ])
            <ul>
                <li>Build full-stack and DevOps solutions for German clients and internal products.</li>
                <li>Created reusable backend foundations and support architecture, reviews, and mentoring.</li>
            </ul>
        @endcomponent

        @component('components.work.project', [
            'color' => '#8f183d',
            'company_name' => 'WEGE',
            'role' => 'DevOps & Backend Developer',
            'current_job' => false,
            'img' => 'assets/wege.ico',
            'right' => 1,
            'from' => 'Mar 2025',
            'to' => 'Jan 2026',
            'link' => 'https://wege.ae/',
            'technoligies' => [
                'assets/work-tech/docker.webp',
                'assets/work-tech/nginx.svg',
                'assets/work-tech/aws.png',
                'assets/work-tech/django.png',
                'assets/work-tech/redis.svg',
                'assets/work-tech/postgres.png',
            ],
        ])
            <ul>
                <li>Managed AWS infrastructure with Terraform and automated CI/CD delivery.</li>
                <li>Contributed to Django commerce services, PostgreSQL performance, and observability.</li>
            </ul>
        @endcomponent

        @component('components.work.project', [
            'color' => '#5e7f95',
            'company_name' => 'Scandinavia Tech — Copax',
            'role' => 'Backend Developer',
            'current_job' => false,
            'img' => 'assets/scendinavia-tech_compressed.webp',
            'right' => 0,
            'from' => 'Aug 2024',
            'to' => 'Feb 2025',
            'link' => 'https://copax-fms.com/',
            'technoligies' => [
                'assets/work-tech/nest.svg',
                'assets/work-tech/docker.webp',
                'assets/work-tech/mongo.png',
                'assets/work-tech/nginx.svg',
                'assets/work-tech/runner.svg',
            ],
        ])
            <ul>
                <li>Developed NestJS services for real-time fleet, GPS, and fuel data.</li>
                <li>Scaled telematics workflows with RabbitMQ, sockets, and microservices.</li>
            </ul>
        @endcomponent

        @component('components.work.project', [
            'color' => '#2e796b',
            'company_name' => 'Pharmaway',
            'role' => 'Backend Developer',
            'current_job' => false,
            'img' => 'assets/pharmaway_compressed.webp',
            'right' => 1,
            'from' => 'Mar 2023',
            'to' => 'Feb 2024',
            'link' => false,
            'technoligies' => ['assets/work-tech/laravel.svg', 'assets/work-tech/mysql.png'],
        ])
            <ul>
                <li>Reduced Laravel response time by 50% through query, API, and cache optimization.</li>
                <li>Designed REST APIs, migrations, indexes, and tested data workflows.</li>
            </ul>
        @endcomponent
    </div>
</section>
