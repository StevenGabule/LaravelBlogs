@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Post management</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Editing</th>
                    <th>Trash</th>
                </tr>
                </thead>
                <tbody>
                @if($posts->count() > 0)
                    @foreach($posts as $post)
                        <tr>
                            <td><img src="{{ $post->featured }}" class="img-fluid rounded-circle" width=65" height="65"
                                     alt=""></td>
                            <td>
                                {{ $post->title }}
                            </td>
                            <td>
                                <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-sm btn-info">
                                    edit
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-sm btn-danger">
                                    delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No available posts</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>

    </div>
@stop