<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Repositories\OutletRepository;
use Exception;
use Illuminate\Http\Request;
use App\Services\OutletService;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
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

    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);
        Outlet::create([
            'name' => $request->name,
            'address' => $request->address,
            'user_id' => $id,
        ]);
        

        return redirect()->route('dashboard')->with('message', 'Outlet Created Successfully');
    }

    public function edit(Outlet $outlet)
    {
        return Inertia::render('User/Outlet/Edit',
        [
            'outlet' => $outlet
        ]);
    }

    public function update(Outlet $outlet, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $outlet->name = $request->name;
        $outlet->address = $request->address;
        $outlet->save();
        sleep(1);

        return redirect()->route('dashboard')->with('message', 'Outlet Updated Successfully');
    }

    public function destroy(Outlet $outlet)
    {
        $outlet->delete();
        sleep(1);

        return redirect()->route('dashboard')->with('message', 'Outlet Delete Successfully');
    }

}
