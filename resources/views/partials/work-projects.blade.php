@vite('resources/css/work-projects.css')

<div class="image-dialog">

</div>

<div id="work-projects">
    <h1 class="title">Work Projects</h1>



    <x-utils.liner-merge-bar :upperColor="'rgba(255,255,255,1)'" :middleColor="'rgb(151, 177, 197)'" :downColor="'rgba(140,171,194,1)'" />

    @component('components.work.project', [
        'color' => '#8CABC2',
        'company_name' => 'Scendinivia-tech',
        'role'=>'backend developer',
        'current_job'=>true,
        'img' => 'assets/scendinavia-tech.png',
        'right' => 1,
        'from' => '2022-10-01',
        'to' => '2023-10-01',
        'link' => 'https://copax-fms.com/',
        'technoligies' => [
            'assets/work-tech/nest.svg',
            'assets/work-tech/docker.webp',
            'assets/work-tech/mongo.png',
            'assets/work-tech/nginx.svg',
            'assets/work-tech/runner.svg',
        ],
    ])
        Contributed to the development of the Copax fleet management system, optimizing vehicle and driver performance
        through telematics
        technology.
        Implemented key features including real-time GPS tracking, fuel management, and performance monitoring.
        Developed and maintained backend services using TypeScript, NestJS in a microservices architecture.
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
        'from' => '2022-10-01',
        'to' => '2023-10-01',
        'link' => false,
        'technoligies' => ['assets/work-tech/laravel.svg', 'assets/work-tech/mysql.png'],
    ])
        implemented and maintained robust backend solutions using Laravel.
        Refactored old code to make it more efficient, resulting in a 50% improvement in response time and performance.
        Implemented Laravel's caching features to reduce database load and speed up response times.
        Designed and documented scalable RESTful APIs for seamless integration with front-end.
        Implemented advanced database optimization techniques, such as indexing, query optimization, and migrations, to
        ensure efficient data
        handling, even with large datasets.
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
