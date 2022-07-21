<?php

namespace App\Services;
use App\Repositories\OutletRepository;
use Illuminate\Http\Request;

class OutletService 
{
    protected $outletRepository;

    public function __construct(OutletRepository $outletRepository)
    {
        $this->outletRepository = $outletRepository;
    }
    
    public function getAll()
    {
        return $this->outletRepository->getAll();
    }

    public function getAllWithOwner()
    {
        return $this->outletRepository->getWithOwner();
    }


    public function findById($id)
    {
        return $this->outletRepository->findById($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'content' => 'required',
        ]);
    }
}