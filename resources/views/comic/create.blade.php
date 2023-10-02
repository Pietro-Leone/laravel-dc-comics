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
            <input type="text" class="form-control" name="title">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Descrizione</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="description"></textarea>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Thumb (URL)</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="thumb">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Prezzo $</label>
          <div class="col-sm-10">
            <input type="number" step="0.01" class="form-control" name="price">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Serie</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="series">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Data</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="sale_date">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Tipo</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="type">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Artisti</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="artists">
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label">Scrittori</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="writers">
          </div>
        </div>

        <div class="text-center">
          <a class="btn btn-secondary" href="{{ route("home.index") }}">Annulla</a>
          <button class="btn btn-primary">Salva</button>
        </div>

    </div>


    </form>

  </div>
</div>
</div>
@endsection