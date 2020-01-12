@extends('layouts.app')

@section('content')
    @include('admin.includes.errors')
    <div class="card">
        <div class="card-header">
            Edit: {{ $post->title }}
        </div>
        <div class="card-body">
            <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="Featured">Featured</label>
                    <input type="file" class="form-control" name="featured" id="Featured">
                </div>
                <div class="form-group">
                    <label for="category">Select a category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                            @if($post->category->id == $category->id)
                                selected
                            @endif
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Select Tags</label>
                    @foreach($tags as $tag)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="{{$tag->id}}" name="tags[]"
                                @foreach($post->tags as $t)
                                    @if($tag->id == $t->id)
                                        checked
                                    @endif
                                @endforeach
                                > {{ $tag->tag }}
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="form-group">
                    <label for="description">Content</label>
                    <textarea name="description" id="description" cols="5" rows="5"
                              class="form-control">{{$post->description}}</textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/summernote.css') }}">
    @estop

@section('scripts')
    <script src="{{ asset('js/summernote.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote();
        })
    </script>
@stop