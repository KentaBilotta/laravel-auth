@extends('layouts.app')

@section('content')
<div class="container">
  <table class="table table-light table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Slug</th>
        <th scope="col">Title</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
          <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->slug }}</td>
            <td>{{ $post->title }}</td>
            <td>
                <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}" class="btn btn-primary">More</a>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  {{ $posts->links() }}
</div>
@endsection
