<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TaskModel;
use CodeIgniter\HTTP\ResponseInterface;

class TaskController extends BaseController
{
    public function dashboard()
    {
        $taskModel = new TaskModel();
        $data['task'] = $taskModel->findAll();

        $ktrng_status = [
            '0' => 'pending',
            '1' => 'Complete',
            '2' => 'In Progress',
        ];
        $data['status'] = $ktrng_status;

        return view('layout/header')
            . view('dashboard', $data)
            . view('layout/footer');
    }

    public function newtask()
    {
        $ktrgn_status = [
            '0' => 'Pending',
            '1' => 'Completed',
            '2' => 'In Progress',
        ];

        $data['status'] = $ktrgn_status;
        return view('layout/header')
            . view('newTask', $data)
            . view('layout/footer');
    }

    public function process_newtask()
    {
        $taskModel =    new TaskModel();
        $data = [
            'user_id' => session()->get('username'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'due_date' => $this->request->getPost('duedate'),
        ];

        $taskModel->save($data);
        session()->setFlashdata('success', 'Task added successfully');
        return redirect()->to('/dashboard');
    }

    public function update($id)
    {
        $taskModel = new TaskModel();
        $data['task'] = $taskModel->find($id);

        $ktrgn_status = [
            '0' => 'Pending',
            '1' => 'Completed',
            '2' => 'In Progress',
        ];

        $data['status'] = $ktrgn_status;

        return view('layout/header')
            . view('update', $data)
            . view('layout/footer');
    }

    public function process_update($id)
    {
        $taskModel = new TaskModel();

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status'),
            'due_date' => $this->request->getPost('duedate'),
        ];

        $taskModel->update($id, $data);
        session()->setFlashdata('success', 'Task updated successfully');
        return redirect()->to('/dashboard');
    }

    public function delete($id)
    {
        $taskModel = new TaskModel();
        $taskModel->delete($id);
        session()->setFlashdata('success', 'Task deleted successfully');
        return redirect()->to('/dashboard');
    }
}
