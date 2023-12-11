<?php
namespace App\Controllers;
use App\Models\MyModel;

class MyController extends BaseController {
public function myView(){
        $data['title'] = 'My App';
        return view('myView', $data);
    }
}