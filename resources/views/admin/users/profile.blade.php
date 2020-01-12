@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">

        <div class="card-header">
            Edit your profile
        </div>

        <div class="card-body">

            <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{$user->name}}">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" class="form-control" value="{{$user->email}}">
                </div>

                <div class="form-group">
                    <label for="password">New password:</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                     <label for="avatar">Upload new Avatar</label>
                     <input type="file" class="form-control" name="avatar" id="avatar">
                 </div>

                <div class="form-group">
                    <label for="facebook">Facebook Profile:</label>
                    <input type="text" id="facebook" name="facebook" class="form-control" value="{{$user->profile->facebook}}">
                </div>

                <div class="form-group">
                    <label for="youtube">Youtube Profile:</label>
                    <input type="text" id="youtube" name="youtube" class="form-control" value="{{$user->profile->youtube}}">
                </div>

                 <div class="form-group">
                     <label for="about">About: </label>
                     <textarea name="about" id="about" cols="5" rows="5" class="form-control">{{ $user->profile->about }}</textarea>
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