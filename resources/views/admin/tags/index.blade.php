@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Tags</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Tag Name</th>
                    <th>Editing</th>
                    <th>Deleting</th>
                </tr>
                </thead>
                <tbody>
                @if($tags->count() > 0)
                    @foreach($tags as $tag)
                        <tr>
                            <td>
                                {{ $tag->tag }}
                            </td>
                            <td>
                                <a href="{{ route('tag.edit', ['id' => $tag->id]) }}"
                                   class="btn btn-sm btn-info">
                                    edit
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('tag.delete', ['id' => $tag->id]) }}"
                                   class="btn btn-sm btn-danger">
                                    delete
                                </a>
                            </td>
                        </tr>

                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No available tags yet</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>

    </div>
@stop