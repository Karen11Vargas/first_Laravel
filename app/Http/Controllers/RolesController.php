<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index(){
        $roles = [
            [
                'id' => 1,
                'label' =>'Normal',
                'create_at' => '2023-08-17 19:51:00',
                'update_at' => '2023-08-17 19:51:00',
            ],
            [
                'id' => 2,
                'label' =>'Admin',
                'create_at' => '2023-08-17 19:51:00',
                'update_at' => '2023-08-17 19:51:00',
            ],
            [
                'id' => 3,
                'label' =>'Super Admin',
                'create_at' => '2023-08-17 19:51:00',
                'update_at' => '2023-08-17 19:51:00',
            ]
            
        ];
        return view('panel.roles.index', [
            'roles' =>$roles,
        ]);
    }
    public function create(){
        return view('panel.roles.form', [
            'id' => null,
            'record' => null,
        ]);

    }
    public function edit($id){

        //Recuperar roles
        $record =  [
            'id' => 2,
            'label' =>'Admin',
            'create_at' => '2023-08-17 19:51:00',
            'update_at' => '2023-08-17 19:51:00',
        ];

        return view('panel.roles.form', [
            'id' => $id,
            'record' => $record,
        ]);

    }
    public function save(Request $request, $id = null){
        $input = $request->input();
    
    }
   public function delete($id){
        print_r($id);
   } 
}
