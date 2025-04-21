@vite('resources/css/work-projects.css')

<div class="image-dialog">

</div>

<div id="work-projects">
    {{-- <h1 style="background: rgb(166, 34, 76)class="title">Work Projects</h1> --}}
    <h1 class="title">Work Projects</h1>

    <x-utils.liner-merge-bar :upperColor="'rgba(143,24,61,0)'" :middleColor="'rgba(143,24,61,0.7)'" :downColor="'rgba(143,24,61,0.9)'" />

    @component('components.work.project', [
        // 'color' => '#8f183d',
        'color' => 'rgba(143,24,61,0.9)',
        'company_name' => 'Wege AE',
        'role'=>'Devops & Backend Developer',
        'current_job'=>true,
        'img' => 'assets/wege.ico',
        'right' => 0,
        'from' => '2025-03-15',
        'to' => 'now',
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
    Contributing to the development and scalability of Wege.ae, a leading UAE-based eCommerce platform.
    Designed, deployed, and maintained cloud infrastructure on  <strong class="bold-string">AWS</strong>, using services such as  <strong class="bold-string">EC2</strong>,  <strong class="bold-string">S3</strong>,  <strong class="bold-string">RDS</strong>,  <strong class="bold-string">IAM</strong>,  <strong class="bold-string">Lambda</strong>, and Systems Manager to ensure high availability and security.
    Implemented CI/CD pipelines to streamline development workflows and automate testing, deployment, and monitoring processes.
    Developed backend services and APIs using Django and Django REST Framework to support various eCommerce operations.
    Worked on database design and optimization using PostgreSQL and managed migrations, indexing, and performance tuning.
    Monitored system health and performance using  <strong class="bold-string">AWS CloudWatch</strong> , implementing recommendations for  <strong class="bold-string">cost optimization</strong> and best practices.
    @endcomponent()


    <x-utils.liner-merge-bar :upperColor="'rgba(143,24,61,0.9)'" :middleColor="'rgba(143,24,61,0.7)'" :downColor="'rgba(140,171,194,1)'" />

    @component('components.work.project', [
        'color' => '#8CABC2',
        'company_name' => 'Scendinivia-tech',
        'role'=>'backend developer',
        'current_job'=>false,
        'img' => 'assets/scendinavia-tech_compressed.webp',
        'right' => 1,
        'from' => '2024-09-01',
        'to' => '2025-03-01',
        'link' => 'https://copax-fms.com/',
        'technoligies' => [
            'assets/work-tech/nest.svg',
            'assets/work-tech/docker.webp',
            'assets/work-tech/mongo.png',
            'assets/work-tech/nginx.svg',
            'assets/work-tech/runner.svg',
        ],
    ])
        Contributed to the development of the <strong class="bold-string">Copax fleet management system</strong>, optimizing vehicle and driver performance
        through telematics
        technology.
        Implemented key features including <strong class="bold-string">real-time GPS tracking, fuel management, and performance monitoring </strong>.
        Developed and maintained backend services using TypeScript, NestJS in a <strong class="bold-string">microservices architecture.</strong >
        Worked collaboratively in an agile environment using ClickUp for project management and task tracking.
        Focused on building scalable and high-performance backend solutions to support the system's telematics and data
        analysis features
    @endcomponent()


    <x-utils.liner-merge-bar :upperColor="'rgba(140, 171, 194, 1)'" :middleColor="'rgba(118, 195, 185, 1)'" :downColor="'rgba(113, 193, 182, 1)'" />



    @component('components.work.project', [
        'color' => '#71C1B6',
        'role'=>'backend developer',
        'current_job'=>false,

        'company_name' => 'Pharmaway',
        'img' => 'assets/pharmaway.png',
        'right' => 0,
        'from' => '2023-6-01',
        'to' => '2024-03-01',
        'link' => false,
        'technoligies' => ['assets/work-tech/laravel.svg', 'assets/work-tech/mysql.png'],
    ])
        implemented and maintained robust backend solutions using<strong class="bold-string"> Laravel</strong>.
        Refactored old code to make it more efficient, resulting in a <strong class="bold-string">50% improvement in response time and performance</strong >.
        Implemented Laravel's caching features to reduce database load and speed up response times.
        Designed and documented scalable RESTful APIs for seamless integration with front-end.
        Implemented advanced database optimization techniques, such as indexing, query optimization, and migrations, to
        ensure efficient data handling, even with<strong class="bold-string"> large datasets</strong>.
        Writing well designed, testable, efficient code by using the best software development practices.
        Scheduling and creating detailed task breakdowns on ClickUp Software task management platform.
    @endcomponent()



    <script>
        let containers = document.querySelectorAll('.l-container');

        containers.forEach(container => {

            let images = container.querySelectorAll('div');
            let numImages = images.length;


            let rows = Math.ceil(numImages / 2);
            let cols = Math.ceil(numImages / 2);

            container.style.setProperty('--rows', rows);
            container.style.setProperty('--cols', cols);

            images.forEach((img, index) => {
                let row = index < rows ? index + 1 : rows; // Vertical images
                let col = index < rows ? 1 : index - (rows - 2); // Horizontal images


                img.style.gridRow = row;
                img.style.gridColumn = col;
                if (index == 0) {
                    img.style.borderRadius = "20px 20px  00px 0px"
                }
                if (index == numImages - 1) {
                    img.style.borderRadius = "0px 20px 20px 0px  "
                }
                if (index == Math.ceil(numImages / 2) - 1) {
                    img.style.borderRadius = "0px 0px 0px 30px  "
                }
            });

        })
    </script>
</div>
