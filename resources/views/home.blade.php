@extends('layouts.main')

{{-- app title --}}
@section('title', 'Home')

{{-- home content --}}
@section('content')
  <div class="container">
    <div class="row row-cols-4">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
