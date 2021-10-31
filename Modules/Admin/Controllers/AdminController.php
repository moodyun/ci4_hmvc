<?php

namespace Modules\Admin\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        // echo "This is simple from Student Module";

        $data = ["name" => "Sanjay", "email" => "sanjay_kumar@gmail.com"];

        return view("\Modules\Admin\Views\index", $data);
    }

    public function otherMethod()
    {
        echo "This is other method from Student Module";
    }
}
