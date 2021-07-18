<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Response;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use App\Models\User;
use App\Models\Pdf;
use App\Models\FAQ;
use App\Models\Enterprenure;
use App\Models\Mentor;
use App\Models\ContactForm;
use App\Mail\ContactMail;
use App\Models\UserMentor;
use App\Models\UserEvent;
use App\Models\Testimonial;
use App\Models\Location;
use App\Models\Link;
use App\Models\News;
use App\Models\Notice;
use App\Models\Service;
use App\Models\UserJob;
use App\Models\Partner;
use App\Models\GariKhanneProject;
use App\Models\ProjectBankIdea;
use App\Models\Banking;
use App\Models\Gallery;
use App\Models\ImageCategory;
use App\Models\Commite;
use App\Models\UserEnterprenure;
use App\Models\GariKhaneIntro;
use App\Models\EntrepreneurshipProcess;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
class PageController extends Controller
{
    public function about()
    {
        $setting = Setting::findOrFail(1);
        return view('newpage.about')->with(compact('setting'));
    }
    
    public function partners()
    {
        $partners = Partner::all();
        return view('newpage.partners')->with(compact('partners'));
    }
    
     public function gallery($id)
    {
        $gallery = Gallery::where('category_id',$id)->get();
        return view('newpage.mediagallery')->with(compact('gallery'));
    }
    
     public function imagecategory()
    {
        $image_category = ImageCategory::latest()->get();
        return view('newpage.imagecategory')->with(compact('image_category'));
    }
    
    public function testimonial()
    {
        $testimonial = Testimonial::all();
        return view('newpage.testimonial')->with(compact('testimonial'));
    }
    
    public function commite()
    {
        $commitemember = Commite::where('type','commite')->get();
        return view('newpage.commitemember')->with(compact('commitemember'));
    }
    
    public function board()
    {
        $commitemember = Commite::where('type','board')->get();
        return view('newpage.boardmember')->with(compact('commitemember'));
    }
    
    public function link()
    {
        $link = Link::all();
        return view('newpage.link')->with(compact('link'));
    }
    
    public function programdetail(Request $request)
    {
        $program = Service::findOrFail($request->id);
        return view('newpage.programdetail')->with(compact('program'));
    }
     public function notice()
    {
        $notice = Notice::orderBy('created_at','desc')->where('status', 1)->paginate(6);
        return view('newpage.notice')->with(compact('notice'));
        
    }
    
    public function faq()
    {
        $faqs = FAQ::orderBy('created_at','desc')->get();
        return view('newpage.faq')->with(compact('faqs'));
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
    
     public function news()
    {
        $news = News::orderBy('publish_date','desc')->where(['type'=>'news', 'status'=>1])->paginate(6);
        return view('newpage.newslist')->with(compact('news'));
        
    }
    public function press()
    {
        $press = News::orderBy('publish_date','desc')->where(['type'=>'press', 'status'=>1])->paginate(6);
        return view('newpage.press')->with(compact('press'));
        
    }
    
     public function newsdetail($id)
    {
        $news = News::findOrFail($id);
        return view('newpage.news')->with(compact('news'));
        
    }
    
     public function pressdetail($id)
    {
        $press = News::findOrFail($id);
        return view('newpage.pressdetail')->with(compact('press'));
        
    }
    
    public function noticedetail($id)
    {
        $notice = Notice::findOrFail($id);
        return view('newpage.noticedetail')->with(compact('notice'));
        
    }
    
    public function pdf()
    {
        $pdf = Pdf::orderBy('created_at','desc')->get();
        return view('newpage.pdf')->with(compact('pdf'));
        
    }
    
    
   
    
     public function pdfdownload(Request $request)
    {
       
        $pdf = Pdf::findOrFail($request->id);
       
        
       
        $file_path = public_path("images/pdf/".$pdf->file);
        $name = $pdf->title;
        $ext = pathinfo($file_path, PATHINFO_EXTENSION);
        $filename = $name.'.'.$ext;

    return Response::download($file_path, $filename);
    }
    
    
    
    public function user()
    {   
        if(!Auth::user())
        {
          
            return redirect('/');
        }
        $userid = Auth::user()->id;
        $user = User::findOrFail($userid);
       
        return view('newpage.user')->with(compact('user'));
    }
    
    public function userprofile(Request $request,$id)
    {
        $user = User::findOrFail($id);
      
        $user->lname = $request->lname;
        $user->fname = $request->fname;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
         $user->update();
         $request->session()->flash('success','Sucessfully updated');
          return view('page.user')->with(compact('user'));
        
    }
    public function events()
    {
        $events = Event::where('status', '1')->latest()->paginate(10);
        return view('newpage.eventlist')->with(compact('events'));
    }
    public function garikhaneproject()
    {
        $garikhanneproject = GariKhanneProject::orderBy('created_at','desc')->paginate(5);
        return view('newpage.garikhanneproject')->with(compact('garikhanneproject'));
    }
    public function projectideabank(Request $request)
    {
      
        switch ($request->project_id) {
          case "0":
            $projectideabank = ProjectBankIdea::orderBy('created_at','desc')->where('project_id',0)->paginate(5);
            $header = 'प्रोजेक्ट आईडयिा बैंक';
           
            break;
          case "1":
            $projectideabank = ProjectBankIdea::orderBy('created_at','desc')->where('project_id',1)->paginate(5);
            $header ="लगानीको लागि तयार";
            break;
          case "2":
            $projectideabank = ProjectBankIdea::orderBy('created_at','desc')->where('project_id',2)->paginate(5);
            $header = "प्रशिक्षण स्टेज परियोजनाहरु";
            break;
         case "3":
            $projectideabank = ProjectBankIdea::orderBy('created_at','desc')->where('project_id',3)->paginate(5);
             $header = "व्यवसाय चरण परियोजनाहरूको लागि योजना";
            break;
          case "4":
            $projectideabank = ProjectBankIdea::orderBy('created_at','desc')->where('project_id',4)->paginate(5);
             $header = "परियोजनाहरू जुन बैंक र वित्तीय संस्थामा पुगेका छन्";
            break;
        }
        
        return view('newpage.projectideabank')->with(compact('projectideabank','header'));
    }
    
    public function projectbankdetail($id)
    {
        $projectideabank = ProjectBankIdea::findOrFail($id);
        return view('newpage.projectbankdetail')->with(compact('projectideabank'));
    }
     public function projectbankpdfdownload($id)
    {
        
        $file = ProjectBankIdea::findOrFail($id);
        $file_path = public_path('/images/projectbank/pdf/' . $file->pdf);
        return response()->download($file_path);

    }
    
    public function garikhaneprojectdetail($id)
    {
        $garikhanneproject = GariKhanneProject::findOrFail($id);
        return view('newpage.garikhanneprojectdetail')->with(compact('garikhanneproject'));
    }
    
    public function jobs()
    {
       
        $jobs = $this->jobsearch();

            Job::whereDate('deadline', '<=', Carbon::now()->toDateString())->WhereNotNull('deadline')->update([
                'status'=> 0
                ]);
       
        return view('newpage.joblist')->with(compact('jobs'));
    }
   
   public function testimonials($id)
    {
        $testimonial = Testimonial::findOrFail($id);
       
        return view('newpage.testimonials')->with(compact('testimonial'));
    }
    
    public function entreprenureformsubmission(Request $request)
    {
         $alreadyexist = Enterprenure::where('user_id',$request->user_id)->where('user_type','web')->first();
       if($alreadyexist)
       {
            $request->session()->flash('success','You have already Submitted');
        return redirect('entreprenure');

       }
        $eform = new Enterprenure();
        $eform->name = $request->name;
        $eform->address = $request->address;
        $eform->pradesh = $request->pradesh;
        $eform->district = $request->district;
        $eform->vdc = $request->vdc;
        $eform->ward = $request->ward;
        $eform->caste = $request->caste;
        $eform->gender = $request->gender;
        $eform->tole = $request->tole;
        $eform->date = $request->date;
        $eform->education = $request->education;
        $eform->ob1 = $request->ob1;
        $eform->ob2 = $request->ob2;
        $eform->ob3 = $request->ob3;
        $eform->ob4 = $request->ob4;
        $eform->ob5 = $request->ob5;
        $eform->ob6 = $request->ob6;
        $eform->ob7 = $request->ob7;
        $eform->ob8 = $request->ob8;
        $eform->ob9 = $request->ob9;
        $eform->ob10 = $request->ob10;
        $eform->ob11 = $request->ob11;
        $eform->ob12 = $request->ob12;
        $eform->ob13 = $request->ob13;
        $eform->ob14 = $request->ob14;
        $eform->ob15 = $request->ob15;
        $eform->ob16 = $request->ob16;
        $eform->ob17 = $request->ob17;
        $eform->ob18 = $request->ob18;
        $eform->ob19 = $request->ob19;
        $eform->ob20 = $request->ob20;
        $eform->ob21 = $request->ob21;
        $eform->ob22 = $request->ob22;
        $eform->ob23 = $request->ob23;
        $eform->ob24 = $request->ob24;
        $eform->ob25 = $request->ob25;
        $eform->ob26 = $request->ob26;
        $eform->ob27 = $request->ob27;
        $eform->ob28 = $request->ob28;
        $eform->ob29 = $request->ob29;
        $eform->ob30 = $request->ob30;
        $eform->ob31 = $request->ob31;
        $eform->user_id = $request->user_id;
        $eform->user_type = 'web';
        $eform->save();
        $userentrep = new UserEnterprenure();
        $userentrep->user_id = $request->user_id;
        $userentrep->user_type = 'web';
        $userentrep->status = '0';
        $userentrep->try_counter = '1';
        $userentrep->enterprenure_id = $eform->id;
        $userentrep->save();
        $request->session()->flash('success','Sucessfully Submitted');
        return redirect('entreprenure');

    }
    
     public function entreprenureformsubmissionupdate($id ,Request $request)
    {
       
       
        $eform = Enterprenure::findOrFail($id);
        $eform->name = $request->name;
        $eform->address = $request->address;
        $eform->pradesh = $request->pradesh;
        $eform->district = $request->district;
        $eform->vdc = $request->vdc;
        $eform->ward = $request->ward;
        $eform->caste = $request->caste;
        $eform->gender = $request->gender;
        $eform->tole = $request->tole;
        $eform->date = $request->date;
        $eform->education = $request->education;
        $eform->ob1 = $request->ob1;
        $eform->ob2 = $request->ob2;
        $eform->ob3 = $request->ob3;
        $eform->ob4 = $request->ob4;
        $eform->ob5 = $request->ob5;
        $eform->ob6 = $request->ob6;
        $eform->ob7 = $request->ob7;
        $eform->ob8 = $request->ob8;
        $eform->ob9 = $request->ob9;
        $eform->ob10 = $request->ob10;
        $eform->ob11 = $request->ob11;
        $eform->ob12 = $request->ob11;
        $eform->ob13 = $request->ob13;
        $eform->ob14 = $request->ob14;
        $eform->ob15 = $request->ob15;
        $eform->ob16 = $request->ob16;
        $eform->ob17 = $request->ob17;
        $eform->ob18 = $request->ob18;
        $eform->ob19 = $request->ob19;
        $eform->ob20 = $request->ob20;
        $eform->ob21 = $request->ob21;
        $eform->ob22 = $request->ob22;
        $eform->ob23 = $request->ob23;
        $eform->ob24 = $request->ob24;
        $eform->ob25 = $request->ob25;
        $eform->ob26 = $request->ob26;
        $eform->ob27 = $request->ob27;
        $eform->ob28 = $request->ob28;
        $eform->ob29 = $request->ob29;
        $eform->ob30 = $request->ob30;
        $eform->ob31 = $request->ob31;
        $eform->user_id = $request->user_id;
        $eform->user_type = 'web';
        $e = $eform->save();
        $try_counter =  UserEnterprenure::where('enterprenure_id',$id)->first();
        UserEnterprenure::where('enterprenure_id',$id)->update([
            'status' => 0,
            'accept_status' => 0,
            'try_counter' => $try_counter->try_counter + 1 
            
            ]);
       
        $request->session()->flash('success','Sucessfully Submitted');
        return redirect('entreprenure');

    }
    
    
    public function mentorformsubmission(Request $request)
    {
       $alreadyexist = Mentor::where('user_id',$request->user_id)->where('user_type','web')->first();
       if($alreadyexist)
       {
            $request->session()->flash('success','You have already Submitted');
        return redirect('mentor');

       }
       
        $eform = new Mentor();
        $eform->name = $request->name;
        $eform->email = $request->email;
        $eform->gender = $request->gender;
        $eform->phone = $request->phone;
        $eform->pradesh = $request->pradesh;
        $eform->district = $request->district;
        $eform->vdc = $request->vdc;
        $eform->ob1 = $request->ob1;
        $eform->ob2 = $request->ob2;
        $eform->ob3 = $request->ob3;
        $eform->ob4 = $request->ob4;
        $eform->ob5 = $request->ob5;
        $eform->ob6 = $request->ob6;
        $eform->ob7 = $request->ob7;
        $eform->ob8 = $request->ob8;
        $eform->ob9 = $request->ob9;
        if($request->ob10 == 1)
        {
            $eform->ob10 = $request->ob101;
        }
        else
        {
            $eform->ob10 = $request->ob10;
        }
        
        $eform->ob11 = $request->ob11;
        
        if($file = $request->file('psp')) {
            $name = time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/mentor/psp/');
           
                if($file->move($target_path, $name)) {
                   
                    $eform->psp  = $name;
                }
            }
            if($file = $request->file('citizen')) {
                $name = time().time().'.'.$file->getClientOriginalExtension();
                $target_path = public_path('/images/mentor/citizen/');
               
                    if($file->move($target_path, $name)) {
                       
                        $eform->citizen  = $name;
                    }
                }
        $eform->user_id = $request->user_id;
        $eform->user_type = 'web';
        $eform->save();
        $usermentor = new UserMentor();
        $usermentor->user_id = $request->user_id;
        $usermentor->user_type = 'web';
        $usermentor->status = '0';
        $usermentor->mentor_id = $eform->id;
        $usermentor->save();

        $request->session()->flash('success','Sucessfully Submitted');
        return redirect('mentor');

    }
    
    public function mentorformsubmissionupdate($id ,Request $request)
    {
       
        $eform =Mentor::findOrFail($id);
        $eform->name = $request->name;
        $eform->email = $request->email;
        $eform->gender = $request->gender;
        $eform->phone = $request->phone;
        $eform->pradesh = $request->pradesh;
        $eform->district = $request->district;
        $eform->vdc = $request->vdc;
        $eform->ob1 = $request->ob1;
        $eform->ob2 = $request->ob2;
        $eform->ob3 = $request->ob3;
        $eform->ob4 = $request->ob4;
        $eform->ob5 = $request->ob5;
        $eform->ob6 = $request->ob6;
        $eform->ob7 = $request->ob7;
        $eform->ob8 = $request->ob8;
        $eform->ob9 = $request->ob9;
        if($request->ob10 == 1)
        {
            $eform->ob10 = $request->ob101;
        }
        else
        {
            $eform->ob10 = $request->ob10;
        }
        
        $eform->ob11 = $request->ob11;
        
        if($file = $request->file('psp')) {
            $name = time().'.'.$file->getClientOriginalExtension();
            $target_path = public_path('/images/mentor/psp/');
           
                if($file->move($target_path, $name)) {
                   
                    $eform->psp  = $name;
                }
            }
            if($file = $request->file('citizen')) {
                $name = time().time().'.'.$file->getClientOriginalExtension();
                $target_path = public_path('/images/mentor/citizen/');
               
                    if($file->move($target_path, $name)) {
                       
                        $eform->citizen  = $name;
                    }
                }
        $eform->user_id = $request->user_id;
        $eform->user_type = 'web';
        $e = $eform->update();
         $usermentor =UserMentor::where('mentor_id',$id)->first();
       UserMentor::where('mentor_id',$id)->update([
           'status' =>0,
           'try_counter' => $usermentor->try_counter + 1,
           'accept_status' => 0
           
           ]);
        $request->session()->flash('success','Sucessfully Submitted');
        return redirect('mentor');

    }
    
    
    public function singlepage(Request $request,$id)
    {
      
        $single= '';
        $title ='';
        if($request->value == 'events')
        {
           $single = Event::findOrFail($request->id);
           $title = 'Event Summary';
          
        }
        elseif($request->value == 'jobs')
        {
            $single = Job::findOrFail($request->id);
            $title = 'Job Summary';
            return view('newpage.singlejob')->with(compact('single','title'));
        }
         return view('newpage.singlepage')->with(compact('single','title'));
    }
    public function contactus(Request $request)
    {
      
        $contact = new ContactForm();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->enquiry = $request->enquiry;
        $contact->address = $request->address;
        $contact->save();
        toastr()->success('Thank You!! Message sent Successgully');
        // Mail::to('info@karmabhoomisamaj.com')->send(new ContactMail($contact));
            return redirect('contactus');
    }

    // public function reply()
    // {
    //     $reply = UserEnterprenure::where('status',1)->where('user_id',Auth::user()->id)->orderBy('created_at','desc')->first();
    //     $mentorformreply = UserMentor::where('status',1)->where('user_id',Auth::user()->id)->orderBy('created_at','desc')->first();
       
    //         return view('page.reply')->with(compact('reply','mentorformreply'));
     
       
    // }

    public function reply() {
        $setting = Setting::findOrFail(1);
        return view('page.reply')->with(compact('setting'));
    }

    public function userevent(Request $request)
    {
       
    if($request->post_type == 'Event Summary')
        {
            $eventusers = UserEvent::where('user_id',$request->user_id)->where('event_id',$request->post_id)->first();
            if($eventusers)
                {
                    return response()->json([
                        'success' => false,
                        'message' => "already Interested",
                    ]);
                }
            else
            {
                $eventuser = new UserEvent();
                $eventuser->user_id = $request->user_id;
                $eventuser->event_id = $request->post_id;
                $eventuser->type = 'web';
                $eventuser->save();
            
                return response()->json([
                'success' => true,
                'message' => "Thank you",
                ]);
            }
        }
        else
        {
            $jobusers = UserJob::where('user_id',$request->user_id)->where('job_id',$request->post_id)->first();
            if($jobusers)
                {
                    return response()->json([
                        'success' => false,
                        'message' => "already Interested",
                    ]);
                }
            else
            {
                $jobuser = new UserJob();
                $jobuser->user_id = $request->user_id;
                $jobuser->job_id = $request->post_id;
                $jobuser->type = 'web';
                $jobuser->save();
            
                return response()->json([
                'success' => true,
                'message' => "Thank you",
                ]);
            }
        }
          

    }

    public function banking()
    {
        $banking = Banking::orderBy('id','desc')->paginate(5);
        return view('newpage.banking')->with(compact('banking'));
    }
    public function singlebanking($id)
    {
        $banking = Banking::findOrFail($id);
        return view('newpage.singlebanking')->with(compact('banking'));
    }
    
    public function contact()
    {
        $locations = Location::all();
       
        return view('newpage.contact')->with(compact('locations'));
    }
   
    public function eventsearch()
    {

        $events = '';
        if (!empty($_GET['date']) && !empty($_GET['key']) && !empty($_GET['location'])) {
            $events = Event::whereDate('created_at', '=', $_GET['date'])
                ->Where(function ($query) {
                    $query->where('location', $_GET['location'])
                        ->orWhere  ( 'title', 'LIKE', '%' . $_GET['key'] . '%' );
                })->paginate(10);
        } 
        
        elseif (!empty($_GET['date']) && !empty($_GET['key'])) {
            $events = Event::whereDate('created_at', '=', $_GET['date'])
                ->Where(function ($query) {
                    $query->orWhere( 'title', 'LIKE', '%' . $_GET['key'] . '%' );
                })->paginate(10);
        } 
        elseif (!empty($_GET['key']) && !empty($_GET['location'])) {
            $events = Event::where('location', $_GET['location'])
                ->Where(function ($query) {
                    $query->orWhere( 'title', 'LIKE', '%' . $_GET['key'] . '%' );
                        
                })->paginate(10);
        }  
         elseif (!empty($_GET['date']) && !empty($_GET['location'])) {
            $events = Event::where('location', $_GET['location'])
                ->Where(function ($query) {
                    $query->whereDate('created_at', '=', $_GET['date']);
                        
                })->paginate(10);
        }  
        
        elseif (!empty($_GET['date'])) {
            $events = Event::whereDate('created_at', '=', $_GET['date'])->paginate(10);
        } elseif (!empty($_GET['key'])) {
           
            $events = Event::where( 'title', 'LIKE', '%' . $_GET['key'] . '%' )->paginate(10);
        } elseif(!empty($_GET['location'])) {
            $events = Event::where('location', $_GET['location'])->paginate(10);
        }
        else
        {
            $events = Event::orderBy('created_at','desc')->paginate(10);
        }

        return  $events;
    }

    public function jobsearch()
    {

        $jobs = '';
        if (!empty($_GET['date']) && !empty($_GET['key']) && !empty($_GET['location'])) {
            $jobs = Job::whereDate('created_at', '=', $_GET['date'])
                ->Where(function ($query) {
                    $query->where('location', $_GET['location'])
                          ->where(['status'=>1, 'publish'=>1])
                        ->orWhere  ( 'title', 'LIKE', '%' . $_GET['key'] . '%' );
                })->paginate(10);
        } 
        
        elseif (!empty($_GET['date']) && !empty($_GET['key'])) {
            $jobs = Job::whereDate('created_at', '=', $_GET['date'])
             ->where(['status'=>1, 'publish'=>1])
                ->Where(function ($query) {
                    $query->orWhere( 'title', 'LIKE', '%' . $_GET['key'] . '%' );
                })->paginate(10);
        } 
        elseif (!empty($_GET['key']) && !empty($_GET['location'])) {
            $jobs = Job::where('location', $_GET['location'])
             ->where(['status'=>1, 'publish'=>1])
                ->Where(function ($query) {
                    $query->orWhere( 'title', 'LIKE', '%' . $_GET['key'] . '%' );
                        
                })->paginate(10);
        }  
         elseif (!empty($_GET['date']) && !empty($_GET['location'])) {
            $jobs = Job::where('location', $_GET['location'])
             ->where(['status'=>1, 'publish'=>1])
                ->Where(function ($query) {
                    $query->whereDate('created_at', '=', $_GET['date']);
                        
                })->paginate(10);
        }  
        
        elseif (!empty($_GET['date'])) {
            $jobs = Job::whereDate('created_at', '=', $_GET['date'])->where(['status'=>1, 'publish'=>1])->paginate(10);
        } elseif (!empty($_GET['key'])) {
           
            $jobs = Job::where( 'title', 'LIKE', '%' . $_GET['key'] . '%' ) ->where(['status'=>1, 'publish'=>1])->paginate(10);
        } elseif(!empty($_GET['location'])) {
            $jobs = Job::where('location','LIKE', '%' . $_GET['location'] . '%' ) ->where(['status'=>1, 'publish'=>1])->paginate(10);
        }
        else
        {
            $jobs = Job::orderBy('created_at','desc')->where(['status'=>1, 'publish'=>1])->paginate(10);
        }

        return  $jobs;
    }

    public function garikhaneIntro()
    {
        $garikhane = GariKhaneIntro::first();
        return view('page.garikhane_intro', compact('garikhane'));
    }

    public function entrepreneurshipProcess()
    {
        $process = EntrepreneurshipProcess::first();
        return view('newpage.entrepreneur_process', compact('process'));
    }
}
