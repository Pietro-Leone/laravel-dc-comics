@extends("layouts.public")

@section("title", "Home-Page")

@section("content")
<div class="cards-container">
  <div class="container position-relative d-flex justify-content-center align-items-end">
    <div class="badge current text-bg-primary position-absolute">Current Series</div>
    <div class="d-flex flex-wrap justify-content-center mb-5">
      @foreach ( $comics as $element)
      <div class="card-box">
        <a href="/comic/{{$element->id}}">
          @include("partials.card")
        </a>
      </div>
      @endforeach
    </div>
    <div class="badge text-bg-primary position-absolute">Load more</div>
  </div>
</div>
@include("partials.blue-stripe")
@endsection