<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Amjad Alwattar is a senior full-stack and DevOps engineer building production backends, web and mobile applications, IoT systems, and cloud infrastructure." />
    <meta name="theme-color" content="#111827" />
    <meta property="og:title" content="Amjad Alwattar | Senior Full-Stack & DevOps Engineer" />
    <meta property="og:description" content="Production software, IoT platforms, and reliable cloud infrastructure." />
    <meta property="og:type" content="website" />
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon.png') }}">
    <title>Amjad Alwattar | Senior Full-Stack & DevOps Engineer</title>
    @vite([
        'resources/css/style.css',
        'resources/css/profile.css',
        'resources/css/about.css',
        'resources/css/experience.css',
        'resources/css/work-projects.css',
        'resources/css/freelance-projects.css',
        'resources/css/graduation-project.css',
        'resources/css/personal-projects.css',
        'resources/css/contact.css',
        'resources/css/footer.css',
        'resources/css/portfolio-refresh.css',
        'resources/js/app.js',
    ])
</head>

<body>
    <a class="skip-link" href="#profile">Skip to content</a>
    <x-utils.zoom-image-component />
    <x-nav-bar />
    <x-home />
    <x-footer />
    <x-utils.toast />
</body>
</html>
