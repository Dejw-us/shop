<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? "Sklep" }}</title>
  @vite("resources/css/app.css")
  <script src="https://kit.fontawesome.com/f244f640a4.js" crossorigin="anonymous"></script>
</head>
{{ $slot }}

</html>