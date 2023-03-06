@extends('layouts.main')

@section('title', 'Tools')

@section('content')
  <section id="main-tools">
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Vote</th>
            <th scope="col">Commands</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tools as $tool)
            <tr>
              <th scope="row">{{ $tool->name }}</th>
              <td>{{ $tool->category }}</td>
              <td>{{ $tool->vote }}</td>
              <td></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
@endsection
