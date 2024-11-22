@props(["title" => "Dropdown"])

<div {{ $attributes }}>
  <div class="cursor-pointer text-2xl">
    {{ $title }}
  </div>  
  <div class="absolute hidden">
    {{ $slot }}
  </div>
</div>