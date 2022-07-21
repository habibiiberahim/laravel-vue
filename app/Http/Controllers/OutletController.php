<?php

namespace App\Http\Controllers;
use App\Repositories\OutletRepository;
use Exception;
use Illuminate\Http\Request;
use App\Services\OutletService;
use Inertia\Inertia;

class OutletController extends Controller
{
    private $outletService;

    public function __construct(OutletService $outletService)
    {
        $this->outletService = $outletService;
    }

    public function create()
    {
        return Inertia::render('User/Outlet/Create');
    }

}
