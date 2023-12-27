<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrdersModel;

class OrdersController extends BaseController
{
    public function index()
    {
        $search = $this->request->getGet('search');
        if ($search) {
            $orders = model('OrdersModel')->search($search);
            return view('orders/index', $orders);
        }
        $orders = model('OrdersModel')->getOrders(10);
        return view('orders/index', $orders);
    }


    public function create()
    {
        return view('orders/create');
    }

    public function store()
    {
        $user_id = session('user_id');
       if(! $this->validate([
           'customer' => 'required',
           'phone' => 'required',
           'order_type' => 'required',
           'budget' => 'required',
           'cost' => 'required',
           'expenses' => 'required',
       ])){
           return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
       }

       $validatedData = $this->validator->getValidated();
       model(OrdersModel::class)->save(['user_id' => $user_id, ...$validatedData]);

       return redirect()->back()->with('success','Order added successfully');
    }
}
