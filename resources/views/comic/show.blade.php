@extends('layouts.public')

@section('title', $comic->title)

@section('content')
<div class="bg-bluestripe" style="height: 50px">
</div>
<div class="container-fluid position-relative">
  <div class="row justify-content-center">
    <div class="box-container">
      <div class="row justify-content-center">
        <div class="col-10">
          <div class="comic">
            <div class="thumb-box">
              <img src="{{$comic->thumb}}" alt="comic">
            </div>
          </div>
          <div class="row my-5">
            <div class="col-9">
              <h2 class="fw-bold">{{$comic->title}}</h2>
              <div class="green-box d-flex justify-content-between">
                <span>U.S. Price ${{$comic->price}}</span>
                <span>AVAILABLE</span>
              </div>
              <div>
                <p>
                  {{$comic->description}}
                </p>
              </div>
            </div>
            <div class="col-3">
              <img src="/img/adv.jpg" class="w-100" alt="adv">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div style="background-color: #f6f6f6" class="d-flex justify-content-center">

        <div class="box-container">
          <div class="pt-5 pb-5">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="row g-5">
                  <div class="col-6 ">
                    <h4 class="border-bottom pb-5 fw-bold">Talent</h4>
                    <div class="d-flex justify-content-between border-bottom">
                      <div class="fw-bold title-width">Art by:</div>
                      <p style="width: 400px; color: rgb(96, 177, 225)" class="ms-auto fw-bold">
                        {{join(", ",json_decode($comic["writers"]))}}
                      </p>
                    </div>
                    <div class="d-flex justify-content-between border-bottom">
                      <div class="fw-bold title-width">Written by:</div>
                      <p style="width: 400px; color: rgb(96, 177, 225)" class="ms-auto fw-bold">
                        {{join(", ",json_decode($comic["writers"]))}}
                      </p>
                    </div>
                  </div>
                  <div class="col-6 ">
                    <h4 class="border-bottom pb-5 fw-bold">Specs</h4>
                    <div class="d-flex border-bottom">
                      <div class="fw-bold title-width">Series:</div>
                      <p style="width: 400px; color: rgb(96, 177, 225)" class="ms-auto fw-bold text-uppercase">
                        {{ $comic['series'] }}
                      </p>
                    </div>
                    <div class="d-flex border-bottom">
                      <div class="fw-bold title-width">U.S. Price:</div>
                      <p style="width: 400px;" class="ms-auto fw-bold">
                        ${{ $comic['price'] }}
                      </p>
                    </div>
                    <div class="d-flex border-bottom">
                      <div class="fw-bold title-width">On Sale Date: </div>
                      <p style="width: 400px;" class="ms-auto fw-bold">
                        {{ $comic['sale_date'] }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


  </div>
</div>
@endsection