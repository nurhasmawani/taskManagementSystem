<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TaskModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        $data = array();

        $data['tasks'] = $taskModel->findAll();

        return view('layout/header')
            . view('dashboard', $data)
            . view('layout/footer');
    }
}
