<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Event;
use App\Models\Notice;
use App\Models\News;

class HomepageController extends Controller
{
    public function homepage()
    {
        $banner_list = Banner::orderBy('created_at', 'desc')->take(5)->get();
        foreach($banner_list as $ban)
        {
            $banner[] = [
                'id' => $ban->id,
                'title'=> $ban->title,
                'image' => url('images/banner/'.$ban->image),
                'text'=>$ban->text,
            ];

        }
        $data['banner'] =$banner;
        $event_list = Event::orderBy('created_at','desc')->take(5)->get();
        if($event_list)
        {
            foreach($event_list as $ev)
            {
                $events[]= [
                    'id'=>$ev->id,
                    'title'=>$ev->title,
                    'image'=>url('images/event/'.$ev->image),
                    'description'=>$ev->description,
                    'location'=>$ev->location,
                    'price'=>$ev->price,    
                    'meta_title'=>$ev->meta_title ?$ev->meta_title:'',
                    'status'=>$ev->status? $ev->status:'',
                    'date'=>$ev->date? $ev->date:'',
                    'created_at'=>$ev->created_at,
                ];
            }
        }
        $data['events'] =$events;

        $news_list = News::orderBy('created_at','desc')->take(5)->get();
        if($news_list)
        {
            foreach($news_list as $new)
            {
                $news[]= [
                    'id'=>$new->id,
                    'title'=>$new->title,
                    'image'=>url('images/news/'.$new->image),
                    'text'=>$new->text?$new->text:'',
                    'publish_date'=>$new->publish_date,
                    'type'=>$new->type,
                    'link'=>$new->link? $new->link:'',
                    'created_at'=>$new->created_at,
                ];
            }
        }
        $data['news'] =$news;
        $notice_list = Notice::orderBy('created_at','desc')->take(5)->get();
        if($news_list)
        {
            foreach($notice_list as $notice)
            {
                $notices[]= [
                    'id'=>$notice->id,
                    'title'=>$notice->title,
                    'image'=>url('images/notice/'.$notice->image),
                    'text'=>$notice->text? $notice->text:'',
                    'link'=>$notice->link? $notice->link:'',
                    'created_at'=>$notice->created_at,
                ];
            }
        }
        $data['notices'] =$notices;
        $response = [
            'status' => 200,
            'error' => false,
            'message' => 'Home page data',
            'data'=>$data,
        ]; 

        return response()->json($response);
    }
}
