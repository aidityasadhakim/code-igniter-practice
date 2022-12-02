<?php

namespace App\Controllers;
use App\Models\DeviceModel;

class Devices extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $devices = new DeviceModel();
        $devices = $devices->findAll();
        $data =[
            'devices'=>$devices
        ];

        return view('devices',$data);
    }

    public function details()
    {
        $db = \Config\Database::connect();
        $devices = new DeviceModel();
        $devices = $devices->findAll();
        $data = [
            'devices'=>NULL
        ];
        foreach ($devices as $device){
            if($device["id"] == $_GET["id"]){
                $data =[
                    'devices'=>$device
                ];
            }
        }
    
        return view('/details',$data);
    }
}
