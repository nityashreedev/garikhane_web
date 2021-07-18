<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pdf;
class PdfController extends Controller
{
    public function index()
    {
        $pdfs = Pdf::orderBy('created_at','desc')->get();
        return view('admin.pdf.index', compact('pdfs'));
    }


    public function store(Request $request)
    {
    
        $request->validate([
           
            'file' => 'required|max:3000',
            'title' => 'required'
        ]);
        
        $pdf = new Pdf();
        $pdf->title = $request->get('title');
        if($file = $request->file('file')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/pdf/');
            
                if($file->move($target_path, $name)) {
                    $pdf->file  = $name;
                }
            }
         $pdf->save();
         $request->session()->flash('success','File created');

         return redirect('admin/pdf');
        
    }

    public function edit($id)
    {
        $purpose = '';
        $pdf = Pdf::findOrfail($id);
        return view('admin.pdf.edit', compact('pdf','purpose'));

    }
    public function update(Request $request, $id)
    {
      
        $request->validate([
           
            'title' => 'required'
        ]);
        $pdf = Pdf::findOrfail($id);
        $pdf->title = $request->title;
        if($file = $request->file('file')) {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/pdf/');
            
                if($file->move($target_path, $name)) {
                    $pdf->file   = $name;
                }
            }
            else
            {
                $pdf->file   = $pdf->file;
            }
           
            $pdf->update();
            $request->session()->flash('success','File Updated');

            return redirect('admin/pdf');
           


    }

    public function delete($id, Request $request)
    {
        $pdf = Pdf::findOrFail($id);
        $pdf->delete();
        $request->session()->flash('success','File deleted');
        return redirect('admin/pdf');
    }
}