@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Slug</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $item)
        <tr>
            <th scope="row">{{$item['id']}}</th>
            <td>{{$item['title']}}</td>
            <td>{{$item['slug']}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection

