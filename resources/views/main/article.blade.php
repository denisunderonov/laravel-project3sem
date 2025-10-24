@extends('main')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach ( $articles as $article )
    <tr>
        <th scope="row">{{ $article->date }}</th>
        <td>{{ $article->name }}</td>
        <td>{{ $article->shortDesc }}</td>
        <td>{{ $article->desc }}</td>
        <td><a href="{{ $article->full_image }}"><img src="{{ asset('' . $article->preview_image) }}" alt=""></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection