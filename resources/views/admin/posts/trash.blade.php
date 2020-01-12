@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Recycle Area - Trashed Data</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Editing</th>
                    <th>Deleting</th>
                    <th>Destroy</th>
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
                                <a href="{{ route('post.restore', ['id' => $post->id]) }}"
                                   class="btn btn-sm btn-success">
                                    restore
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('post.kill', ['id' => $post->id]) }}" class="btn btn-sm btn-danger">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    @else
                    <tr>
                        <th colspan="5" class="text-center">No trashed posts</th>
                    </tr>
                @endif

                </tbody>
            </table>
        </div>

    </div>
@stop