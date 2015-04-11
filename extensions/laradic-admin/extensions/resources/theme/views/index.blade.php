@extends('laradic/admin::layouts.default')

@section('page-title', 'Extensions')
@section('page-subtitle', 'Overview')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="box">
                <header>
                    <i class="fa fa-list"></i>

                    <h3>Extensions</h3>
                    <div class="actions">
                        <a class="btn btn-primary">Create new</a>
                    </div>
                </header>
                <section class="box-table">
                    <table class="table table-hover table-condensed table-striped table-light">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Dependencies</th>
                                <th>State</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(Extensions::all() as $extension)
                                <tr>
                                    <td>{{ $extension->getName() }}</td>
                                    <td>
                                        <small>{{ $extension->getSlug() }}</small>
                                    </td>
                                    <td>
                                        <ul class="no-margin list-unstyled">
                                            @foreach($extension->getDependencies() as $dep)
                                                <li class="mid-margin-left">
                                                    <small class="text-green">{{ $dep }}</small>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        @if($extension->isInstalled() === true)
                                        <span class="label label-success">Installed</span></td>
                                    @endif
                                    <td>
                                        <div class="btn-group btn-group-xs">
                                            @set('params', ['slug' => $extension->getSlug()])
                                            @if($extension->isInstalled() !== true)
                                                <a href="{{ route('laradic.admin.extensions.install', $params) }}" data-toggle="confirmation" class="btn btn-primary">Install</a>
                                                <a href="{{ route('laradic.admin.extensions.remove', $params) }}" data-toggle="confirmation" class="btn btn-danger">Remove</a>
                                            @else
                                                @if($extension->canUninstall())
                                                    <a href="{{ route('laradic.admin.extensions.uninstall', $params) }}"  data-toggle="confirmation" class="btn btn-warning">Uninstall</a>
                                                @else
                                                    <div class="btn-disabled-wrapper" tabindex="0"
                                                         title="Cannot uninstall"
                                                         data-toggle="popover" data-trigger="hover" data-container="body" data-placement="left"
                                                         data-content="There are other extensions installed that rely on this extension. Uninstall those first">
                                                        <a href="javascript:;" class="btn btn-warning disabled btn-xs" role="button">Uninstall</a>
                                                    </div>
                                                @endif
                                            @endif
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
