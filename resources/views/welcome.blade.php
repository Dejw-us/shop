<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Shop</title>
        @vite("resources/css/app.css")
    </head>
    <body class="flex flex-col items-center">
      <nav class="flex justify-between">
        <h1 class="text-4xl m-3 p-1">Szybki Sklep</h1>
        <input class="m-3" type="text" placeholder="szukaj produktów">
        <button class="text-3xl m-3 bg-green-500 p-2 rounded">Szukaj</button>
      </nav>
    </body> 
</html>
