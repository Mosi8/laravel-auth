@extends('layouts.app')

@section('content')
<div class="container text-center">
  <h1 class="mt-3">{{$post->title}}</h1>
  <p class="my-1">{{$post->content}}</p>
  {{-- <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="mb-3">
      @csrf
      @method("DELETE")
      <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro?')">Cancella</button>
  </form> --}}
  <a href="{{route('admin.posts.index')}}"><button type="button" class="btn btn-light">Back</button></a>
</div>
@endsection

