<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portfolio</title>
    <link rel="stylesheet" href="mediaqueries.css" />
  </head>
  @vite('resources/js/app.js')
  @vite('resources/css/style.css')
  <body>
    @if(config("app.env")==="production")
    <x-overlay />
    @endif
    <x-nav-bar />
    <x-home />
    <x-footer />
  </body>
</html>
