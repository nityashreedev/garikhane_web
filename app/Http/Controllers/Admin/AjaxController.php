<?php

namespace App\Http\Controllers\Admin;

//use Illuminate\Support\Facades\Input;
//use App\Http\Requests;
use DbHelper;

class AjaxController extends Controller {

    public function postDragDropSorting() {
        DbHelper::dragDropSorting();
    }

    public function postUpdateField() {
        DbHelper::updateField();
    }
    
//    public function postDeleteData() {
//        DbHelper::deleteData();
//    }
//    
//    public function postDeleteImage() {
//        DbHelper::deleteImage();
//    }

}
