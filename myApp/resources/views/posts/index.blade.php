@extends('layoutes.crud')

@section('content')

    <h2>
        Index sahifa
    </h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Ko'rish</th>
                <th scope="col">Edit</th>
                <th scope="col">O'chirish</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{  $post['id']  }}</th>
                <td>{{  $post['title']  }}</td>
                <td>
                    <img src="/images/{{ $post->image }}" width="100" alt="">
                </td>
                <td>
                    <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-success btn-sm">Ko'rish</a>
                </td>
                <td><a href="{{ route('posts.edit', $post->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                <td>
                    <form action="{{ route('posts.destroy', $post->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Ma\'lumotlarni o\'chirmoqchimisiz?')" >Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
