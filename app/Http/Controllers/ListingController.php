<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Models\Listing;
use Illuminate\Http\Request;


class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
        $this->middleware('auth')->except(['show', 'index']);
     }
    public function index(){

       /*  dd(Listing::all()); */
        
        return inertia('Listing/Index',
          [
                    'listings'=>Listing::orderByDesc('created_at')->paginate(10),
                ]);
          
       }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
                
        return inertia('Listing/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Listing::create($request->all());
        return to_route("listings.create")->with("success", "listing was successfully  create");
    
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return inertia('Listing/Show',
        [
                  'listing'=>Listing::find($id),
              ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
