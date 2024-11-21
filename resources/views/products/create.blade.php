<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tworzenie produktu</title>
  @vite("resources/css/app.css")
</head>
<body>
  <form method="post" action="{{ route("products.store") }}">
    @csrf
    <div class="flex flex-col">
      <input class="w-48 m-2" type="text" placeholder="nazwa" name="name">
      <input class="w-48 m-2" type="number" placeholder="cena" name="price">
      <input class="w-48 m-2" type="text" placeholder="słowa klucze" name="keywords">
      <button class="bg-green-500 w-48 m-2 p-2" type="submit">Stwórz</button>
    </div>
  </form>
</body>
</html>