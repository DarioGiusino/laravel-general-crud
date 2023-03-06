@extends('layouts.main')

@section('title', 'Tools')

@section('content')
  <section id="main-tools">
    <div class="container">
      <table class="table">
        <thead>
          {{-- table first row (title of column) --}}
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Latest version</th>
            <th scope="col">Vote</th>
            <th scope="col" class="text-end">Commands</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tools as $tool)
            <tr>
              <th scope="row">{{ $tool->name }}</th>
              <td>{{ $tool->category }}</td>
              <td>v {{ $tool->latest_version }}</td>
              <td>{{ $tool->vote }}</td>
              {{-- buttons --}}
              <td class="text-end">
                <a class="btn btn-small btn-primary" href="#">Vedi</a>
                <a class="btn btn-small btn-warning" href="#">Modifica</a>
                <a class="btn btn-small btn-danger" href="#">Cancella</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
@endsection
