<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
class LocationController extends Controller
{

    public function index()
    {
        $locations = Location::orderBy('created_at','desc')->get();
        return view('admin.location.index')->with(compact('locations'));
    }
    public function create()
    {
        $locations = new Location();
        return view('admin.location.create')->with(compact('locations'));
    }
    public function update($id, Request $request)
    {
       
        $this->validate($request, [
            'name' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);
        $input=$request->all();
        $locations = Location::findorfail($id);
        $locations->fill($input)->save();
     
        $request->session()->flash('success','Location Created');

            return redirect('admin/locations');
    }
    public function store(Request $request)
    {
        

        $this->validate($request, [
            'name' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $input = $request->all();
        
        
        $location_created = Location::create($input);
      

        $request->session()->flash('flash_message', 'Location is successfully added!');
        return redirect('admin/locations');

    }

    public function delete($id, Request $request)
    {
      
        $location = Location::findOrFail($id);
        $location->delete();
        $request->session()->flash('success','Location Deleted');

        return redirect('admin/locations');
    }
}
