<?php

namespace App\Controllers;

use App\Models\MyModel;

class MyController extends BaseController
{
    protected $MyModel;
    public function __construct()
    {
        $this->MyModel = new MyModel();
    }
    public function myView()
    {
        $data['rows'] = $this->MyModel->getData();
        $data['title'] = 'My App';
        return view('myView', $data);
    }
    public function insertData() {
        $data = $this->MyModel->insertData();
        echo json_encode($data);
    }
}
