@extends('layout.master')
@section('title')
    Cast
@endsection
@section('content')
<a href="/cast/create" class="btn btn-sm btn-primary">Add Cast</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cast as $key=>$item)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->umur }}</td>
            <td>
                
                <form action="/cast/ {{ $item->id }}" method="Post">
                   @csrf
                  @method('delete')
                  <a href="/cast/{{ $item->id }}" class="btn btn-sm btn-info">Detail</a>
                  <a href="/cast/{{ $item->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                  <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                </form>
          </tr>
        @empty
        <tr>
            <th>Tidak ada cast</th>
        </tr>
            
        @endforelse


    </tbody>
  </table>
@endsection