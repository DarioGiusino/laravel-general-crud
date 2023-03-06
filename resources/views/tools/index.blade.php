@extends('layouts.main')

{{-- font awesome --}}
@section('cdns')
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
    integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=='
    crossorigin='anonymous' />
@endsection

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
                <a class="btn btn-small btn-primary" href="#"><i class="fa-solid fa-folder-open"></i></a>
                <a class="btn btn-small btn-warning text-white" href="#"><i
                    class="fa-solid fa-pen-to-square"></i></a>
                <a class="btn btn-small btn-danger" href="#"><i class="fa-solid fa-trash"></i></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
@endsection
