@extends('layouts.main')

{{-- app title --}}
@section('title', 'Home')

{{-- home content --}}
@section('content')
  <div class="container">
    <div class="row row-cols-4">
      <div class="col">
        {{-- card --}}
        <a href="#">
          <div class="card" style="width: 18rem;">
            <img src="https://cdn.thenewstack.io/media/2021/10/4f0ac3e0-visual_studio_code.png" class="card-img-top"
              alt="...">
            <div class="card-body">
              <h2 class="card-text text-center">titolone</h2>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
@endsection
