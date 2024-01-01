<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MaintananceModel;

class MaintananceController extends BaseController
{
    public function maintanance()
    {
      $maoni=model(MaintananceModel::class)->findAll();
      return view ('matengenezo/matengenezo',['maoni' => $maoni]);
    }

    public function store()
    {
        if( ! $this->validate([
            'expenses' => 'required',
            'amount' => 'required',
            'suggestion' => 'required',
        ])){

            return redirect()->back()->withInput()->with('erros','please fill all field');     
    }

     $validatedData = $this->validator->getValidated();

    //  dd($validatedData);

     model(MaintananceModel::class)->insert($validatedData );

       
       return redirect()->back()->with('successcreate','Order added successfully');
}
}