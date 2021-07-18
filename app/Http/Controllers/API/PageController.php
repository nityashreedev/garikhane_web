<?php

namespace App\Http\Controllers\API;


use App\Models\Setting;
use App\Models\Banner;
use App\Models\Partner;
use App\Models\Banking;
use App\Models\Testimonial;
use App\Models\Location;
use App\Models\District;
use App\Models\Notice;
use App\Models\Commite;
use App\Models\DigitalLibrary;
use App\Models\Pdf;
use Response;
use App\Models\FAQ;
use App\Models\Link;
use App\Models\Gallery;
use App\Models\ImageCategory;
use App\Models\News;
use App\Models\ContactForm;
use App\Mail\ContactMail;
use App\Models\Service;
use App\Models\Municipality;
use App\Models\Pradesh;
use App\Models\UserEnterprenure;
use App\Models\UserMentor;
use App\Models\Popup;
use App\Models\GariKhaneIntro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function aboutus()
    {
        /*
         * url:{{live}}/api/aboutus
         * params: auth_token
         * method: get
         *
         * */
        $setting = Setting::findOrFail(1);

        if($setting) {
           
              $settings[] = [
                'id' =>$setting->id,
                'title' => $setting->title,
                'description' => strip_tags($setting->description),
                'image' =>url('images/setting/'.$setting->image),
                'address' =>$setting->address,
                'phone' =>$setting->phone,
                'facebook'=>$setting->facebook,
                'instagram' =>$setting->instagram,
                'twitter' =>$setting->twitter,
                'email' =>$setting->gmail
                
                ];
          

            $response = [
                'data' => $settings,
                'status' => 200,
                'error' => false,
                'message' => 'About Us'
            ];
        } 

        echo json_encode($response);
        exit;
    }
    
    public function popup()
    {
        /*
         * url:{{live}}/api/popup
         * method: get
         *
         * */
        $popup = Popup::where('status',1)->first();

        if($popup) {
           
              $popups[] = [
                'id' =>$popup->id,
                'title' => $popup->title,
                'description' => strip_tags($popup->description),
                'image' =>url('images/popup/'.$popup->image),
                'status'=>$popup->status,
                ];
          

            $response = [
                'data' => $popups,
                'status' => 200,
                'error' => false,
                'message' => 'popup'
            ];
        } 
        
        else
        {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => false,
                'message' => 'popup'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
    public function faq()
    {
        $faq = FAQ::orderBy('created_at','desc')->get();
        if($faq) {
               foreach($faq as $item)
               {
                $faqs[] = [
                    'id'=>$item->id,
                    'question' => $item->question,
                    'answer' => $item->ans,
                    'file' =>$item->file ? url('images/faq/'.$item->file) : ''
                ];
               }
          

            $response = [
                'data' => $faqs,
                'status' => 200,
                'error' => false,
                'message' => 'FAQ'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no faq added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
     public function faqdownload(Request $request)
    {
       
        $faq = FAQ::findOrFail($request->id);
       
        $file_path = public_path("images/faq/".$faq->file);
        $name = $faq->file;
        $ext = pathinfo($file_path, PATHINFO_EXTENSION);
        $filename = $name.'.'.$ext;

    return Response::download($file_path, $filename);
    }
    
    
     public function banner(Request $request)
    {
        /*
         * url:{{live}}/api/banner
         * params:
         * method: get
         *
         * */
        $banner = Banner::orderBy('created_at','desc')->get();

        if($banner) {
               foreach($banner as $item)
               {
                $banners[] = [
                    'id'=>$item->id,
                    'title' => $item->title,
                    'description' => strip_tags($item->description),
                    'image' =>url('images/banner/'.$item->image)
                ];
               }
          

            $response = [
                'data' => $banners,
                'status' => 200,
                'error' => false,
                'message' => 'Banner'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no banner added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
    
     public function commite(Request $request)
    {
        /*
         * url:{{live}}/api/commite
         * params:
         * method: get
         *
         * */
        $commite = Commite::orderBy('created_at','desc')->where('type','commite')->get();

        if($commite) {
               foreach($commite as $item)
               {
                $commites[] = [
                    'id'=>$item->id,
                    'name' => $item->name,
                     'position' => $item->position,
                    'image' =>url('images/commite/'.$item->image)
                ];
               }
          

            $response = [
                'data' => $commites,
                'status' => 200,
                'error' => false,
                'message' => 'Commite Member'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no Commitee Member added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
     public function board(Request $request)
    {
        /*
         * url:{{live}}/api/commite
         * params:
         * method: get
         *
         * */
        $commite = Commite::where('type','board')->get();

        if($commite) {
               foreach($commite as $item)
               {
                $commites[] = [
                    'id'=>$item->id,
                    'name' => $item->name,
                     'position' => $item->position,
                    'image' =>url('images/commite/'.$item->image)
                ];
               }
          

            $response = [
                'data' => $commites,
                'status' => 200,
                'error' => false,
                'message' => 'Board Member'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no Board Member added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
     public function link(Request $request)
    {
        /*
         * url:{{live}}/api/link
         * params:
         * method: get
         *
         * */
        $total_links = Link::count();
        if($request->page == 1)
        {
            $link = Link::latest()->take(10)->get();
        }elseif($request->page != 1)
        {
            $skip = 10 * $request->page -10;
            $link = Link::latest()->skip($skip)->take(10)->get();
        }

        if($link) {
               foreach($link as $item)
               {
                $links[] = [
                    'id'=>$item->id,
                    'title' => $item->title,
                    'link' => $item->link,
                ];
               }
          

            $response = [
                'status' => 200,
                'error' => false,
                'message' => 'Links',
                'total_links'=>$total_links,
                'data' => $links,
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no links'
            ];
        }

        return response()->json($response);
        exit;
    }
    
    
    
    public function partner(Request $request)
    {
        /*
         * url:{{live}}/api/partner
         * params:
         * method: get
         *
         * */
        $partner = Partner::orderBy('created_at','desc')->get();

        if($partner) {
               foreach($partner as $item)
               {
                $partners[] = [
                    'id'=>$item->id,
                    'title' => $item->title,
                    'link' => $item->link ? $item->link:'',
                    'image' =>url('images/partner/'.$item->image)
                ];
               }
          

            $response = [
                'data' => $partners,
                'status' => 200,
                'error' => false,
                'message' => 'Partner'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no partner added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
     public function bank(Request $request)
    {
        /*
         * url:{{live}}/api/bank
         * params:
         * method: get
         *
         * */
        $bank = Banking::orderBy('created_at','desc')->take(10)->get();
         if($request->page == 1)
                {
                     $bank = Banking::orderBy('created_at','desc')->take(10)->get();
                }
             elseif($request->page != 1){
                     $skip = 10 * $request->page -10;
                    $bank = Banking::orderBy('created_at','desc')->skip($skip)->take(10)->get();
                     if( count($bank) < 1){
 
                        $response = [
                        'status' => 200,
                        'error' => false,
                        'message' => 'no more bank',
                        'data' => []
                        ];
                        echo json_encode($response);
                        exit();
                    }
 
             }

        if($bank) {
               foreach($bank as $item)
               {
                $banks[] = [
                    'id'=>$item->id,
                    'title' => $item->title,
                    'image' =>url('images/banking/'.$item->image),
                     'location' =>$item->location,
                ];
               }
        
            $response = [
                'data' => $banks,
                'status' => 200,
                'error' => false,
                'message' => 'Partner'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no bank added'
            ];
        }

        echo json_encode($response);
        exit;
    }
     public function bankdetail(Request $request)
    {
        /*
         * url:{{live}}/api/bank/detail
         * params:bank_id
         * method: get
         *
         * */
        $bank = Banking::findOrFail($request->bank_id);

        if($bank) {
               
                $banks[] = [
                    'id'=>$bank->id,
                    'title' => $bank->title,
                    'image' =>url('images/banking/'.$bank->image),
                    'description' =>strip_tags($bank->description),
                    'location' =>$bank->location,
                    'date' =>$bank->date,
                ];
               
          

            $response = [
                'data' => $banks,
                'status' => 200,
                'error' => false,
                'message' => 'Bank Detail'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no bank added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
     public function testimonial(Request $request)
    {
        /*
         * url:{{live}}/api/testimonial
         * params:
         * method: get
         *
         * */
        $testimonial = Testimonial::orderBy('created_at','desc')->get();

        if($testimonial) {
               foreach($testimonial as $item)
               {
                $testimonials[] = [
                    'id'=>$item->id,
                    'title' => $item->name,
                    'image' =>url('images/testimonial/'.$item->image),
                     'designation' =>$item->designation ? $item->designation : '',
                     'description' =>strip_tags($item->description),
                     'facebook' =>$item->facebook ? $item->facebook : '',
                     'instagram' =>$item->instagram ? $item->instagram : '',
                     'twitter' =>$item->twitter ? $item->twitter : '',
                ];
               }
          

            $response = [
                'data' => $testimonials,
                'status' => 200,
                'error' => false,
                'message' => 'Message'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no Message added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    public function testimonialdetail(Request $request)
    {
        /*
         * url:{{live}}/api/testimonial/detail
         * params:testimonial_id
         * method: get
         *
         * */
        $testimonial = Testimonial::findOrFail($request->testimonial_id);

        if($testimonial) {
               
                $testimonials[] = [
                    'id'=>$testimonial->id,
                    'title' => $testimonial->name,
                    'image' =>url('images/testimonial/'.$testimonial->image),
                    'description' =>strip_tags($testimonial->description),
                    'designation' =>$testimonial->designation ? $testimonial->designation : '' ,
                    'facebook' =>$testimonial->facebook ? $testimonial->facebook : '',
                    'instagram' =>$testimonial->instagram ? $testimonial->instagram : '',
                    'twitter' =>$testimonial->twitter ? $testimonial->twitter : '' ,
                ];
               
          

            $response = [
                'data' => $testimonials,
                'status' => 200,
                'error' => false,
                'message' => 'Message Detail'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no message added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
    public function location()
    {
         $alllocations = Location::all();
        if($alllocations) {
            foreach($alllocations as $location )
            {
               $locations[] = [
                'id' =>$location->id,
                'name' => $location->name,
                'longitude' =>$location->longitude,
                'latitude' => $location->latitude,
                
                ];  
            }
           
             
          

            $response = [
                'data' => $locations,
                'status' => 200,
                'error' => false,
                'message' => 'Location'
            ];
        } 

        echo json_encode($response);
        exit;
    }
    
    public function pradesh()
    {
        $pradesh = Pradesh::all();
      
        foreach($pradesh as $p)
        {
            $district = District::where('pradesh_id',$p->id)->get();
            foreach($district as $d)
            {
                $municipality = Municipality::where('district_id',$d->id)->get();
                foreach($municipality as $m)
                {
                    $municipalitys[] =[
                        
                        'municipality_name' =>$m->name
                        ];
                }
                $districts[] = [
                    'district_name' => $d->name,
                    'municipality' =>$municipalitys
                    ];
            }
            
            $data[] = [
                'pradesh_name' =>$p->name,
                'district' =>$districts,
                ];
        }
        $response = [
                'data' => $data,
                'status' => 200,
                'error' => false,
                'message' => 'Pradesh - District - Municipality'
            ];
        

        echo json_encode($response);
        exit;
        
    }
         public function notice(Request $request)
    {
        /*
         * url:{{live}}/api/notice
         * params:
         * method: get
         *
         * */ 
        $notice = Notice:: where('status', 1)->orderBy('created_at','desc')->take(10)->get();
         if($request->page == 1)
                {
                     $notice = Notice::orderBy('created_at','desc')->take(10)->get();
                }
             elseif($request->page != 1){
                     $skip = 10 * $request->page -10;
                    $notice = Notice::where('status', 1)->orderBy('created_at','desc')->skip($skip)->take(10)->get();
                     if( count($notice) < 1){
 
                        $response = [
                        'status' => 200,
                        'error' => false,
                        'message' => 'no more Notice',
                        'data' => []
                        ];
                        echo json_encode($response);
                        exit();
                    }
 
             }

        if(count($notice) >0 ) {
               foreach($notice as $item)
               {
                $notices[] = [
                    'id'=>$item->id,
                    'title' => $item->title,
                    'text' => $item->text,
                    'image' =>$item->image ? url('images/notice/'.$item->image) : '',
                    'link'=>$item->link ?$item->link:'',   
                    'publish_date'=>$item->created_at->format('Y-m-d'),    
                ];
               }
          

            $response = [
                'data' => $notices,
                'status' => 200,
                'error' => false,
                'message' => 'Notices'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no notice added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
    
     public function news(Request $request)
    {
        /*
         * url:{{live}}/api/news
         * params:
         * method: get
         *
         * */
        $news = News::where(['type'=>'news', 'status'=>1])->orderBy('created_at','desc')->take(10)->get();
         if($request->page == 1)
                {
                     $news = News::where(['type'=>'news', 'status'=>1])->orderBy('created_at','desc')->take(10)->get();
                }
             elseif($request->page != 1){
                     $skip = 10 * $request->page -10;
                    $news = News::where('type','news')->orderBy('created_at','desc')->skip($skip)->take(10)->get();
                     if( count($news) < 1){
 
                        $response = [
                        'status' => 200,
                        'error' => false,
                        'message' => 'no more News',
                        'data' => []
                        ];
                        echo json_encode($response);
                        exit();
                    }
 
             }

        if(count($news) >0 ) {
               foreach($news as $item)
               {
                $allnews[] = [
                    'id'=>$item->id,
                    'title' => $item->title,
                    'text' => $item->text,
                    'image' =>$item->image ? url('images/news/'.$item->image) : '',
                    'link'=>$item->link ? $item->link:'',
                    'publish_date'=>$item->publish_date?$item->publish_date:'',
                     
                ];
               }
          

            $response = [
                'data' => $allnews,
                'status' => 200,
                'error' => false,
                'message' => 'News'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no news added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
     public function press(Request $request)
    {
        /*
         * url:{{live}}/api/press
         * params:
         * method: get
         *
         * */
        $news = News::where(['type'=>'press', 'status'=>1])->orderBy('created_at','desc')->take(10)->get();
         if($request->page == 1)
                {
                     $news = News::where(['type'=>'press', 'status'=>1])->orderBy('created_at','desc')->take(10)->get();
                }
             elseif($request->page != 1){
                     $skip = 10 * $request->page -10;
                    $news = News::where(['type'=>'press', 'status'=>1])->orderBy('created_at','desc')->skip($skip)->take(10)->get();
                     if( count($news) < 1){
 
                        $response = [
                        'status' => 200,
                        'error' => false,
                        'message' => 'no more Press News',
                        'data' => []
                        ];
                        echo json_encode($response);
                        exit();
                    }
 
             }

        if(count($news) >0 ) {
               foreach($news as $item)
               {
                $allnews[] = [
                    'id'=>$item->id,
                    'title' => $item->title,
                    'text' => $item->text,
                    'image' =>$item->image ? url('images/news/'.$item->image) : '',
                    'link'=>$item->link ? $item->link:'',
                    'publish_date'=>$item->publish_date?$item->publish_date:'',
                     
                ];
               }  

            $response = [
                'data' => $allnews,
                'status' => 200,
                'error' => false,
                'message' => 'Press'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no press news added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
     public function newspress(Request $request)
    {
        /*
         * url:{{live}}/api/news-press/detail
         * params:
         * method: get
         parm = news_id
         *
         * */
        $news = News::find($request->news_id);

        if($news) {
               
                $newss[] = [
                    'id'=>$news->id,
                    'title' => $news->title,
                    'image' =>url('images/news/'.$news->image),
                    'description' =>strip_tags($news->text),
                    'publish_date'=>$news->publish_date,
                    'type'=>$news->type,
                    'link'=>$news->link? $news->link:'',
                
                ];      

            $response = [
                'data' => $newss,
                'status' => 200,
                'error' => false,
                'message' => 'Detail'
            ];
        }else{
            $response = [
                'data' => [],
                'status' => 404,
                'error' => true,
                'message' => 'News-press not found'
            ];
        }
        echo json_encode($response);
        exit;
    }
    
    public function gallery(Request $request)
    {
        /*
         * url:{{live}}/api/gallery
         * params: category_id
         * method: get
         *
         * */
        $gallery = Gallery::orderBy('created_at','desc')->where('category_id',$request->category_id)->get();

        if($gallery) {
               foreach($gallery as $item)
               {
                $gallerys[] = [
                    'id'=>$item->id,
                    'title' => $item->title,
                    'image' =>url('images/gallery/'.$item->image)
                ];
               }
          

            $response = [
                'data' => $gallerys,
                'status' => 200,
                'error' => false,
                'message' => 'gallery'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no Gallery Image added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
      public function gallerycategory(Request $request)
    {
        /*
         * url:{{live}}/api/gallerycategory
         * params:
         * method: get
         *
         * */
        $gallery = ImageCategory::all();

        if($gallery) {
               foreach($gallery as $item)
               {
                $gallerys[] = [
                    'id'=>$item->id,
                    'title' => $item->title,
                    'image' =>url('images/gallerycategory/'.$item->image)
                ];
               }
          

            $response = [
                'data' => $gallerys,
                'status' => 200,
                'error' => false,
                'message' => 'Image Category'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no Image added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
    public function pdf(Request $request)
    {
        /*
         * url:{{live}}/api/pdf
         * params:
         * method: get
         *
         * */
        $pdf = Pdf::orderBy('created_at','desc')->get();
    

        if(count($pdf) > 0) {
               foreach($pdf as $item)
               {
                $pdfs[] = [
                    'id'=>$item->id,
                    'title' => $item->title,
                    'image' =>url('images/pdf/'.$item->file)
                ];
               }
          

            $response = [
                'data' => $pdfs,
                'status' => 200,
                'error' => false,
                'message' => 'Pdf File'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no File added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
     public function digitallibrary(Request $request)
    {
        /*
         * url:{{live}}/api/digital-library
         * params:
         * method: get
         *
         * */
        $pdf = DigitalLibrary::orderBy('created_at','desc')->get();
    

        if(count($pdf) > 0) {
               foreach($pdf as $item)
               {
                $pdfs[] = [
                    'id'=>$item->id,
                    'title' => $item->title,
                    'text' => $item->text,
                    'file' =>url('images/digitallibrary/file/'.$item->file),
                    'image' =>url('images/digitallibrary/'.$item->image)
                ];
               }
          

            $response = [
                'data' => $pdfs,
                'status' => 200,
                'error' => false,
                'message' => 'Pdf File'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no File added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
    
    
    public function program(Request $request)
    {
        /*
         * url:{{live}}/api/program
         * params:
         * method: get
         *
         * */
        $program = Service::orderBy('created_at','desc')->get();
    

        if(count($program) > 0) {
               foreach($program as $item)
               {
                $programs[] = [
                    'id'=>$item->id,
                    'title' => $item->title,
                    'image' =>url('images/service/'.$item->image)
                ];
               }
          

            $response = [
                'data' => $programs,
                'status' => 200,
                'error' => false,
                'message' => 'Program List'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no Program added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
     public function programdetail(Request $request)
    {
        /*
         * url:{{live}}/api/program/detail
         * params:program_id
         * method: get
         *
         * */
        $program = Service::findOrFail($request->program_id);

        if($program) {
               
                $programs[] = [
                    'id'=>$program->id,
                    'title' => $program->title,
                    'image' =>url('images/service/'.$program->image),
                    'description' =>$program->text,
                
                ];
            $response = [
                'data' => $programs,
                'status' => 200,
                'error' => false,
                'message' => 'Program Detail'
            ];
        } else {
            $response = [
                'data' => [],
                'status' => 200,
                'error' => true,
                'message' => 'Currently there are no Program added'
            ];
        }

        echo json_encode($response);
        exit;
    }
    
    
    
    
    public function downloadpdf(Request $request)
    {
        $pdf = Pdf::findOrFail($request->id);
       
        $file_path = public_path("images/pdf/".$pdf->file);
        $name = $pdf->title;
        $ext = pathinfo($file_path, PATHINFO_EXTENSION);
        $filename = $name.'.'.$ext;

    return Response::download($file_path, $filename);
    }
    
     public function downloaddigital(Request $request)
    {
        $pdf = DigitalLibrary::findOrFail($request->pdf_id);
        
        $file_path = public_path("images/digitallibrary/file/".$pdf->file);
        return response()->download($file_path);
        
    }
    
    public function contact(Request $request)
    {
         /*
         * url:{{live}}/api/contact
         * params:name, email, phone,enquiry
         * method: post
         *
         * */
         
         if(!$request->has('name') || !$request->has('email') || !$request->has('phone') || !$request->has('enquiry'))
         {
             $response = [
                
                'status' => 200,
                'error' => true,
                'message' => 'Please fill form completely'
            ];
    

        echo json_encode($response);
        exit;
             
         }
        
        $contact = new ContactForm();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->enquiry = $request->enquiry;
        $contact->save();
       
        Mail::to($request->email)->send(new ContactMail($contact));
         $response = [
                
                'status' => 200,
                'error' => false,
                'message' => 'Successfully Submitted'
            ];
    

        echo json_encode($response);
        exit;
            
    }

    public function garikhaneIntro()
    {
        $garikhane = GariKhaneIntro::first();
        if($garikhane)
        {
            $data = [
                'title'=> $garikhane->title,
                'description'=>$garikhane->description,
                'image'=>url('images/background_images/'.$garikhane->image),
                'created_at'=>$garikhane->created_at,
            ];
            $response = [
                'status'=>200,
                'error'=>false,
                'message'=>'Garikhane aviyan page content',
                'data'=>$data,
            ];
            return response()->json($response);
        }
        $response = [
            'status'=>404,
            'error'=>true,
            'message'=>'Garikhane aviyan page content not found',
            'data'=>null,
        ];
        return response()->json($response);

        
    }
   
}
