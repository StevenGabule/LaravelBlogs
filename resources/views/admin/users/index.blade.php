@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Users management</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>name</th>
                    <th>Permissions</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @if($users->count() > 0)
                    @foreach($users as $user)
                        <tr>
                            <td><img src="{{ asset($user->profile->avatar) }}" class="img-fluid rounded-circle"
                                     width=65" height="65"
                                     alt=""></td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                @if($user->admin)
                                    <a href="{{ route('users.not.admin', ['id' => $user->id]) }}"
                                       class="btn btn-sm btn-warning">remove permissions</a>
                                @else
                                    <a href="{{ route('users.admin', ['id' => $user->id]) }}"
                                       class="btn btn-sm btn-success">Make admin</a>
                                @endif
                            </td>
                            <td>
                                @if(Auth::id() !== $user->id)
                                    <a href="{{ route('user.delete', ['id' => $user->id]) }}"
                                       class="btn btn-sm btn-danger">
                                        delete
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No available users</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>

    </div>
@stop