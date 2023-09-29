@php
  $credits = [
    [
      "title" => "Dc Comics",
      "elements" => [
      "characters",
      "comics",
      "movies",
      "tv",
      "games",
      "videos",
      "news"
      ]
    ],
    [
      "title" => "Shop",
      "elements" => [
      "shop dc",
      "shop dc collectibles"
      ]
    ],
    [
      "title" => "DC",
      "elements" => [
      "terms of use",
      "privacy policy (new)",
      "ad choices",
      "advertising",
      "jobs",
      "subscription",
      "talent workshop",
      "cpsc certificates",
      "ratings",
      "shop help",
      "contact us"
      ]
    ],
    [
      "title" => "Sites",
      "elements" => [
      "dc",
      "mad magazine",
      "dc kids",
      "dc universe",
      "dc power visa"
      ]
    ]
  ];

@endphp

<footer>
  <div class="credits-container">
    <div class="container d-flex justify-content-between position-relative">
      <div class="credits d-flex py-4">
        @foreach ($credits as $credit)
        <div class="pe-4">
          <h5 class="text-uppercase">{{ $credit["title"] }}</h5>
          <ul class="list-unstyled m-0 py-2">
            @foreach ($credit["elements"] as $element)              
            <li>
              <a href="#" class="text-capitalize">{{ $element }}</a>
            </li>
            @endforeach
          </ul>
        </div>
        @endforeach
      </div>
      <div class="dc-bg position-absolute"></div>
    </div>
  </div>

  <div class="contacts-container">
    <div class="container">
      <div class="d-flex justify-content-between">
        <button type="button" class="btn btn-outline-primary text-uppercase">sign-up now!</button>
        <div class="d-flex align-items-center">
          <h4>Follow US</h4>
          <img src="/img/footer-facebook.png" alt="icon">
          <img src="/img/footer-twitter.png" alt="icon">
          <img src="/img/footer-youtube.png" alt="icon">
          <img src="/img/footer-pinterest.png" alt="icon">
          <img src="/img/footer-periscope.png" alt="icon">
        </div>
      </div>
    </div>
  </div>
</footer>