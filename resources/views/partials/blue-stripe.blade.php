@php
  $titleImg = [
    [
        "title" => "digital comics",
        "img" => "buy-comics-digital-comics.png"
    ],
    [
        "title" => "dc merchandise",
        "img" => "buy-comics-merchandise.png"
    ],
    [
        "title" => "subscription",
        "img" => "buy-comics-subscriptions.png"
    ],
    [
        "title" => "comic shop locator",
        "img" => "buy-comics-shop-locator.png"
    ],
    [
        "title" => "dc power visa",
        "img" => "buy-dc-power-visa.svg"
    ]
];
@endphp
<div class="bg-bluestripe text-uppercase">
  <div class="container d-flex justify-content-around align-items-center flex-wrap">
    @foreach ($titleImg as $el)
    <div>
      <img src="img/{{$el["img"]}}" alt="{{$el["title"]}}" class="mx-3 my-5" style="height: 80px; max-width: 80px;">
      <span class="bluestripe-title">{{ $el["title"] }}</span>
    </div>
    @endforeach
  </div>
</div>