<?php

namespace App\Controllers;
use CodeIgniter\View\View;
use App\Models\UserModel;
use App\Models\OrdersModel;
use App\Models\MaintananceModel;


class Home extends BaseController
{
    public function index(): string
    {
    
       $users=model(UserModel::class)->findAll();
       $usercount=count($users);

       $today = date('Y-m-d');

    $customer = model(OrdersModel::class)->where('DATE(created_at)',$today)->findAll();
    $customercount=count($customer);
      
    // dd([$customer]);

    


       
        return view('dashboard',['usercount'=> $usercount,'customercount'=>$customercount]);
        

    }

    
}
