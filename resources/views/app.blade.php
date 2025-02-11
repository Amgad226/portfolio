<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./assets/favicon.png">
    <title>My Portfolio</title>
</head>
@vite('resources/js/app.js')
@vite('resources/css/style.css')

<body>
    <x-utils.zoom-image-component />
    <x-nav-bar />
    <x-home />
    <x-footer />
    <x-utils.toast />
</body>
</html>
