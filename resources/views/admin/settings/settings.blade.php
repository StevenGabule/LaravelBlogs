@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">

        <div class="card-header">
            Edit Blog Settings
        </div>

        <div class="card-body">

            <form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Site name:</label>
                    <input type="text" id="name" name="site_name" value="{{ $settings->site_name }}"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Contact Email:</label>
                    <input type="text" id="email" name="contact_email" class="form-control"
                           value="{{ $settings->contact_email }}">
                </div>

                <div class="form-group">
                    <label for="contact">Contact number:</label>
                    <input type="text" id="contact" name="contact_number" class="form-control"
                           value="{{ $settings->contact_number }}">
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea name="address" id="address" cols="30" rows="10"
                              class="form-control">{{ $settings->address }}</textarea>
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
                        <button class="btn btn-success" type="submit">Update site settings</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@stop

