<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Services\OutletService;

class AdminController extends Controller
{
    private $outletService;

    public function __construct(OutletService $outletService)
    {
        $this->outletService = $outletService;
    }

    public function dashboard( )
    {        
        $outlets = $this->outletService->getAllWithOwner();
        return Inertia::render('Admin/Dashboard', [
            'outlets' => $outlets,
        ]);
    }
}
