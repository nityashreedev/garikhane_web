<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Popup;

class PopupController extends Controller
{
    public function index()
    {
        $popups = Popup::orderBy('created_at', 'desc')->get();
        return view('admin.popup.index', compact('popups'));
        
    }
    public function create()
    {
        
        return view('admin.popup.create');
    }

    public function store(Request $request)
    {

        $request->validate([
           
            'image' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'
        ]);
         
    
        $data['title'] = $request->get('title');
        $data['description'] = $request->get('description');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/popup/');
           
                if($file->move($target_path, $name)) {
                    $data['image']  = $name;
                }
            }
       
         Popup::create($data);
    
        
         $request->session()->flash('success','popup created');
         return redirect('admin/popup');
    }

    public function edit($id)
    {
        $purpose = '';
        $popup =  Popup::findOrfail($id);
            
     
        return view('admin.popup.create', compact('purpose','popup'));

    }
    public function update(Request $request, $id)
    {
      
        
        $request->validate([
           
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);


        $popup = Popup::findOrFail($id);
       
        $popup->title = $request->get('title');
        $popup->description = $request->get('description');
        if($file = $request->file('image')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/popup/');
            
                if($file->move($target_path, $name)) {
                    $popup->image  = $name;
                }
            }
            $popup->update();
            $request->session()->flash('success','popup Updated');

            return redirect('admin/popup');
           


    }

    public function delete($id, Request $request)
    {
        $popup = Popup::findOrFail($id);
        $popup->delete();
        $request->session()->flash('success','Popup deleted');
        return redirect('admin/popup');
    }
    
    public function status(Request $request)
    {
        $popup = Popup::findOrFail($request->popup);
        if($request->status == 1)
        {
            Popup::where('id','!=',$popup->id)->where('status',1)->update([
                'status'=>0,
                ]);
        }
        $popup->status = $request->status;
        $popup->update();
        return response()->json(['message' => 'Popup status updated successfully.']);
    }
}