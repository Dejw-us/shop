<x-template>

  <body class="flex flex-col items-center">
    <nav class="flex justify-between">
      <x-dropdown title="test" class="bg-red-200">
        <div>
          test
        </div>
        <div>
          dupa
        </div>
      </x-dropdown>
      <h1 class="text-4xl m-3 p-1">Szybki Sklep</h1>
      <form action="{{ route("products.search") }}" method="get">
        <input class="m-3" type="text" placeholder="szukaj produktów" name="search">
        <button class="text-3xl m-3 bg-green-500 p-2 rounded" type="submit">Szukaj</button>
      </form>
    </nav>
    <script>
      function dropdown() {
        document.getElementById("dropdown").classList.toggle("hidden");
      }
    </script>
  </body>
</x-template>