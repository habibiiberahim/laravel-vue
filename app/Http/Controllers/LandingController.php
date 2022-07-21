<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Services\OutletService;
use Illuminate\Support\Facades\URL;

class LandingController extends Controller
{
    private $outletService;

    public function __construct(OutletService $outletService)
    {
        $this->outletService = $outletService;
    }

    public function index( )
    { 
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }

    public function dashboard()
    {
        $id = Auth::user()->id;
        $outlets = $this->outletService->findById($id);
        return Inertia::render('Dashboard', [
            'outlets' => $outlets,
        ]);
    }

    
}
