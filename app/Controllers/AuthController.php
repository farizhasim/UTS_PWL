<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/' . session()->get('role'));
        }

        return view('login');  // This will load the login view
    }

    public function doLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
    
        // Data pengguna hardcoded (replace with actual database query in production)
        $users = [
            [
                'id' => 1,
                'username' => 'admin',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role' => 'admin'
            ],
            [
                'id' => 2,
                'username' => 'user',
                'password' => password_hash('user123', PASSWORD_DEFAULT),
                'role' => 'user'
            ]
        ];
    
        foreach ($users as $user) {
            if ($user['username'] === $username && password_verify($password, $user['password'])) {
                // Set session data with ID, username, role, and login status
                session()->set([
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'isLoggedIn' => true
                ]);
    
                // Redirect to the dashboard page based on user role
                return redirect()->to('/' . $user['role']);
            }
        }
    
        session()->setFlashdata('error', 'Invalid username or password');
        return redirect()->to('/login');
    }
    

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
