<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use PhpParser\Node\Stmt\Else_;

class AuthController extends BaseController
{
    public function home()
    {
        return view('layout/header')
            . view('home')
            . view('layout/footer');
    }

    public function login()
    {
        return view('layout/header')
            . view('login')
            . view('layout/footer');
    }

    public function register()
    {
        return view('layout/header')
            . view('register')
            . view('layout/footer');
    }

    public function process_register()
    {
        $UserModel = new UserModel();
        $name = $this->request->getPost('name');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $email = $this->request->getPost('email');

        $data = [
            'name' => $name,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'email' => $email,
        ];

        $checkUser = $UserModel->where('username', $username)->first();
        if ($checkUser) {
            return redirect()->to('/register')->with('error', 'username already exists');
        } else {
            $UserModel->insert($data);
            return redirect()->to('/login')->with('success', 'Registration successful');
        }
    }

    public function process_login()
    {
        $userModel = new userModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = [
            'username' => $username,
            'password' => $password,
        ];

        $checkUser = $userModel->where('username', $username)->first();
        if ($checkUser && password_verify($data['password'], $checkUser['password'])) {
            session()->set([
                'name' => $checkUser['name'],
                'username' => $checkUser['username'],
                'email' => $checkUser['email'],
                'isLoggedIn' => true,

            ]);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }


    public function profile()
    {
        $data = array();

        $data['name'] = session()->get('name');
        $data['username'] =  session()->get('username');
        $data['email'] =  session()->get('email');

        return view('layout/header')
            . view('profile', $data)
            . view('layout/footer');
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
