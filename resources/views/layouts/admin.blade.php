@extends('layouts.app')
@section('content')
    <div id="header">
        <div class="row">
            <div class="col s2">
                <div id="logo">
                    <h1>LOGO</h1>
                </div>
            </div>
            <div class="col s10">
                <h1 class="right tight">Hey Jack</h1>
            </div>
        </div>
    </div>

    <div id="adminWrapper">
        <div class="row">
            <div class="col s2 no-padding">
                <div id="adminSidebar">
                    <div class="admin-sidebar-menu">
                        <ul class="list-admin-sidebar">
                            <li><a>Orders</a></li>
                            <li><a>Categories</a></li>
                            <li><a>Blog</a></li>
                            <li><a>Messages</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col s10">
                @if (Session::has('flash_notification.message'))
                    <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                        {{ Session::get('flash_notification.message') }}
                    </div>
                @endif
                @yield('admin-content')
            </div>
        </div>
    </div>
@endsection