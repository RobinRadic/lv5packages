@extends('laradic/admin::layouts.default')


@section('page-title')
    Users & groups
@stop

{{-- Content --}}
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <header>
                    <i class="fa fa-users"></i>
                    <h3>Users</h3>
                    <div class="actions">
                        <a class='btn btn-primary' href="{{ route('sentinel.users.create') }}">Create User</a>
                    </div>
                </header>
                <section class="box-table">
                    <table class="table table-hover table-condensed table-striped table-light">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Status</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td><a href="{{ route('sentinel.users.show', [$user->hash]) }}">{{ $user->email }}</a></td>
                                    <td>{{ $user->status }} </td>
                                    <td>
                                        <div class="btn-group btn-group-xs">
                                            <button class="btn btn-default" type="button" onClick="location.href='{{ route('sentinel.users.edit', array($user->hash)) }}'">Edit</button>
                                            @if ($user->status != 'Suspended')
                                                <button class="btn btn-default" type="button" onClick="location.href='{{ route('sentinel.users.suspend', array($user->hash)) }}'">Suspend</button>
                                            @else
                                                <button class="btn btn-default" type="button" onClick="location.href='{{ route('sentinel.users.unsuspend', array($user->hash)) }}'">Un-Suspend</button>
                                            @endif
                                            @if ($user->status != 'Banned')
                                                <button class="btn btn-default" type="button" onClick="location.href='{{ route('sentinel.users.ban', array($user->hash)) }}'">Ban</button>
                                            @else
                                                <button class="btn btn-default" type="button" onClick="location.href='{{ route('sentinel.users.unban', array($user->hash)) }}'">Un-Ban</button>
                                            @endif
                                            <button class="btn btn-default action_confirm" href="{{ route('sentinel.users.destroy', array($user->hash)) }}" data-token="{{ Session::getToken() }}" data-method="delete">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box">
                <header>
                    <i class="fa fa-users"></i>
                    <h3>Groups</h3>
                    <div class="actions">
                        <a class='btn btn-primary' href="{{ route('sentinel.groups.create') }}">Create Group</a>
                    </div>
                </header>
                <section class="box-table">
                    <table class="table table-hover table-condensed table-striped table-light">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Permissions</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($groups as $group)
                                <tr>
                                    <td><a href="{{ route('sentinel.groups.show', $group->hash) }}">{{ $group->name }}</a></td>
                                    <td>
                                        <?php
                                        $permissions = $group->getPermissions();
                                        $keys = array_keys($permissions);
                                        $last_key = end($keys);
                                        ?>
                                        @foreach ($permissions as $key => $value)
                                            {{ ucfirst($key) . ($key == $last_key ? '' : ', ') }}
                                        @endforeach
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-xs">
                                            <button class="btn btn-default" onClick="location.href='{{ route('sentinel.groups.edit', [$group->hash]) }}'">Edit</button>
                                            <button data-toggle="confirmation" class="btn btn-default  {{ ($group->name == 'Admins') ? 'disabled' : '' }}" type="button" data-token="{{ csrf_token() }}" data-method="delete" href="{{ route('sentinel.groups.destroy', [$group->hash]) }}">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>


@stop
