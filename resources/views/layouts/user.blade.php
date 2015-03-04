@extends('layouts.app')
@section('content')
    <div id="header">
        <div class="row">
            <div class="col s2">
                <div class="row">
                    <div class="col s4">
                        <a href="/dashboard"><span class="top-left-icon container-icon"></span></a>
                    </div>
                    <div class="col s4">
                        <a href="//feedback"><span class="top-left-icon feedback-icon"></span></a>
                    </div>
                    <div class="col s4">
                        <a href="//products"><span class="top-left-icon products-icon"></span></a>
                    </div>
                </div>
            </div>
            <div class="col s10">
                <h1 class="right tight">Hey Jack</h1>
            </div>
        </div>
    </div>

    <div id="userWrapper">
        <div class="row">
            <div class="col s2 no-padding">
                <div id="userSidebar">
                    <div id="sidebar-wrapper">
                        <div id='cssmenu'>
                        <ul>
                           <li><a id="taskIcon" class="sidebar-icons" href='#'><span>Dashboard</span></a>
                           </li>
                           <li class='has-sub'><a id="projectIcon" class="sidebar-icons" href='#'><span>Orders<i id="sidebarBottomArrow" class="fa fa-chevron-down"></i></span></a>
                              <ul>
                                 <li class="last"><a href=""><span>All Projects</span></a></li>
                              </ul>
                           </li>
                           <li class='has-sub'><a id="addressBookIcon" class="sidebar-icons" href='#'><span>Categories<i id="sidebarBottomArrow" class="fa fa-chevron-down"></i></span></a>
                              <ul>
                                    {{App::make('CategoryHelper')->getSidebarCategories()}}
                              </ul>
                           </li>
                           <li class='has-sub'><a id="printIcon" class="sidebar-icons" href='#'><span>Container<i id="sidebarBottomArrow" class="fa fa-chevron-down"></i></span></a>
                              <ul>

                              </ul>
                           </li>
                           <li class='has-sub'><a id="addIcon" class="sidebar-icons" href='#'><span>Feedback<i id="sidebarBottomArrow" class="fa fa-chevron-down"></i></span></a>
                              <ul>
                                 <li><a href=""><span>Add Project</span></a></li>
                                 <li class='last'><a href=""><span>Add Task</span></a></li>
                              </ul>
                           </li>
                        </ul>
                        </div>
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
                @yield('user-content')
            </div>
        </div>
    </div>
@endsection