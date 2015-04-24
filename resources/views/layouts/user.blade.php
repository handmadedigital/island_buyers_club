@extends('layouts.app')
@section('content')
    <div id="header">
        <div class="row">
            <div class="col s9 m1 no-padding">
                <div class="row">
                    <div class="col s4">
                        <a href="/dashboard/{{Auth::user()->slug}}"><span class="top-left-icon container-icon"></span></a>
                    </div>
                    <div class="col s4">
                        <a href="/feedback"><span class="top-left-icon feedback-icon"></span></a>
                    </div>
                    <div class="col s4">
                        <a href="/products"><span class="top-left-icon products-icon"></span></a>
                    </div>
                </div>
            </div>
            <div class="col s3 m11">
                <h6 class="header-name-title tight">Hello {{ucwords(Auth::user()->first_name)}}, Welcome back!</h6>
                <div class="right setting"><a href="/auth/logout"><span class="settings-icon"></span></a></div>
            </div>
        </div>
    </div>

    <div id="userWrapper">
        <div class="row">
            <div class="col s3 m1 no-padding">
                <div id="userSidebar">
                    <div id="sidebar-wrapper">
                        <div id='cssmenu'>
                        <ul>
                           <li><a id="taskIcon" class="sidebar-icons" href="/dashboard/{{Auth::user()->slug}}"><span>Dashboard</span></a>
                           </li>
                           <li><a id="taskIcon" class="sidebar-icons" href="/products"><span>Shop</span></a>
                           </li>
                           <li class='has-sub'><a id="addressBookIcon" class="sidebar-icons" href='#'><span>Shop Categories</span></a>
                              <ul>
                                    {{App::make('CategoryHelper')->getSidebarCategories()}}
                              </ul>
                           </li>
                           <li class='has-sub'><a id="projectIcon" class="sidebar-icons" href='/{{Auth::user()->slug}}/orders'><span>Orders</span></a>
                           </li>
                           <li><a id="printIcon" class="sidebar-icons" href='/{{Auth::user()->slug}}/container'><span>Container</span></a>
                           </li>
                           <li><a id="addIcon" class="sidebar-icons" href='/{{Auth::user()->slug}}/feedback'><span>Feedback</span></a>
                           </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s9 m11">
                @if (Session::has('flash_notification.message'))
                    <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ Session::get('flash_notification.message') }}
                    </div>
                @endif
                @yield('user-content')
            </div>
        </div>
    </div>
@endsection