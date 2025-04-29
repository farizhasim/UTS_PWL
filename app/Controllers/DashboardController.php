<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function user()
{
    // Check if not logged in or not a user
    if (!session()->get('isLoggedIn') || session()->get('role') !== 'user') {
        return redirect()->to('/login');
    }

    $data = [
        'title' => 'User Dashboard',
        'username' => session()->get('username')  // Pass the username to the view
    ];

    return view('user', $data);
}

public function admin()
{
    // Check if not logged in or not an admin
    if (!session()->get('isLoggedIn') || session()->get('role') !== 'admin') {
        return redirect()->to('/login');
    }

    $data = [
        'username' => session()->get('username')  // Pass the username to the view
    ];

    return view('admin', $data);
}

}