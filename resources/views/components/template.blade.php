<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? "Sklep" }}</title>
  @vite("resources/css/app.css")
</head>
{{ $slot }}
</html>