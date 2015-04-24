<?php
namespace TGL\Users\Http\Controllers;

use TGL\Core\Http\Controllers\Controller;
use TGL\Users\Services\UserDashboardService;

class UserController extends Controller
{
    public function getDashboard($username, UserDashboardService $userDashboardService)
    {
        $dashboard = $userDashboardService->loadDashboard($username);

        return view('user.dashboard', compact('dashboard'));
    }
}