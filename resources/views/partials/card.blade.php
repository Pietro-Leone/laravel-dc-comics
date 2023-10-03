<div class="card">
  <div class="position-relative title-hover">
    <img src="{{$element["thumb"]}}" alt="{{$element["series"]}}">
    <div class="position-absolute opacity-0 d-flex justify-content-center w-100 title-price">{{ $element["price"] }}</div>
    <div class="position-absolute opacity-0 d-flex justify-content-center w-100 title-type">{{ $element["type"] }}</div>
  </div>
  <span class="span-el">{{ $element["title"] }}</span>
</div>