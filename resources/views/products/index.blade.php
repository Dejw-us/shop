<x-template>
  <body class="flex flex-col items-center">
    @foreach ($products as $product)
    <div class="m-2 text-center">
      <h1 class="text-2xl m-2">{{ $product->name }}</h1>
      <a class="m-2">Cena: {{ $product->price }}</a>
      <a class="bg-blue-500 p-1 rounded" href="{{ route("products.show", $product) }}">Zobacz</a>
    </div>
    @endforeach
  </body>
</x-template> 