@props(['tagsCsv'])
@php
    $tags = explode(',', $tagsCsv)
@endphp

<div class="inner mt--20">
    <div class="tagcloud">
      @foreach ($tags as $tag )
          <a href="/?tag={{  $tag }}">{{ $tag }}</a>
      @endforeach
    </div>
</div>