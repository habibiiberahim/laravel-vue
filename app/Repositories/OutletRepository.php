<?php

namespace app\Repositories;
use App\Models\Outlet;


class OutletRepository 
{
    protected $outlet;

    public function __construct(Outlet $outlet)
    {   
        $this->outlet = $outlet;
    }

    public function findById($id){
        return $this->outlet->where('user_id', $id)->get();
    }

    public function getAll(){
        return $this->outlet->get();
    }

    public function getWithOwner(){
        return $this->outlet->with('owner')->get();
    }

    public function save($data){

        $outlet = new $this->outlet;

        $outlet->name = $data['name'];
        $outlet->name = $data['name'];
        $outlet->name = $data['name'];
        $outlet->name = $data['name'];

        $outlet->save;
        
        return $this->outlet->fresh();
    }
}