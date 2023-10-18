<?php

namespace App\Controllers;

class Forum extends BaseController
{
    public function index()
    {
        $data = array(
            'isi' => '/user/v_user_forum'
        );
        return view('layout_user1/v_wrapper', $data);
    }

    //--------------------------------------------------------------------

}
