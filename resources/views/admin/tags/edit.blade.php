@extends('layouts.app')

@section('content')
   @include('admin.includes.errors')
    <div class="card">
        <div class="card-header">
            Modify exiting category: {{ $tags->tag  }}
        </div>
        <div class="card-body">
            <form action="{{ route('tag.update', ['id' => $tags->id]) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="tag">Tag name</label>
                    <input type="text" id="tag" name="tag" class="form-control" value="{{$tags->tag}}">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop