@extends('layouts.public')

@section('title', "aggiungi")

@section('content')
<div class="container">
  <div class="row justify-content-center my-3">
    <div class="col-6">

      <form action="{{ route('comic.store') }}" method="POST">
        @csrf()

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Titolo</label>
          <div class="col-sm-10">
            <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}"
              name="title">
            @error('title')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Descrizione</label>
          <div class="col-sm-10">
            <textarea class="form-control @error('description') is-invalid @enderror" style="height: 130px;"
              name="description">{{old('description')}}</textarea>
            @error('description')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Thumb (URL)</label>
          <div class="col-sm-10">
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" value="{{old('thumb')}}"
              name="thumb">
            @error('thumb')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Prezzo $</label>
          <div class="col-sm-10">
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"
              value="{{old('price')}}" name="price">
            @error('price')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Serie</label>
          <div class="col-sm-10">
            <input type="text" class="form-control @error('series') is-invalid @enderror" value="{{old('series')}}"
              name="series">
            @error('series')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Data</label>
          <div class="col-sm-10">
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror"
              value="{{old('sale_date')}}" name="sale_date">
            @error('sale_date')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Tipo</label>
          <div class="col-sm-10">
            <input type="text" class="form-control @error('type') is-invalid @enderror" value="{{old('type')}}"
              name="type">
            @error('type')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Artisti</label>
          <div class="col-sm-10">
            <input type="text" class="form-control @error('artists') is-invalid @enderror" value="{{old('artists')}}"
              name="artists">
            @error('artists')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Scrittori</label>
          <div class="col-sm-10">
            <input type="text" class="form-control @error('writers') is-invalid @enderror" value="{{old('writers')}}"
              name="writers">
            @error('writers')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>

        <div class="text-center">
          <a class="btn btn-secondary" href="{{ route(" home.index") }}">Annulla</a>
          <button class="btn btn-primary">Salva</button>
        </div>

      </form>
      
    </div>
  </div>
</div>
@endsection