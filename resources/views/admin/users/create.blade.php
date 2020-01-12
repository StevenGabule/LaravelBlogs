@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">

        <div class="card-header">
            Create a new users
        </div>

        <div class="card-body">

            <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>

               {{-- <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <input type="file" class="form-control" name="avatar" id="avatar">
                </div>

                <div class="form-group">
                    <label for="description">Description: </label>
                    <textarea name="description" id="description" cols="5" rows="5" class="form-control"></textarea>
                </div>--}}

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Add User</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@stop

