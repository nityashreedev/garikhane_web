<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Banner;
use App\Models\Enterprenure;
use App\Models\Karmabhomi;
use App\Models\Event;
use App\Models\Mentor;
use App\Models\Job;
use App\Models\ContactForm;
use App\Models\District;
use App\Models\Pradesh;
use App\Models\YearlyProduction;
use Illuminate\Support\Facades\Response;
use App\Models\Banking;
use App\Exports\KarmabhomiExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function contactinquire()
    {
        $contact = ContactForm::orderBy('created_at','desc')->get();
        return view('admin.dashboard.contact')->with(compact('contact'));
        
    }

    public function viewContact($id)
    {
        $contact = ContactForm::findOrFail($id);
        return view('admin.dashboard.viewContact', compact('contact'));
    }

    public function contactinquiredelete($id, Request $request)
    {
        $contact = ContactForm::findOrFail($id);
        $contact->delete();
         $request->session()->flash('success','contact deleted  sucessfully');

         return redirect('admin/contact/enquire');
        
        
    }


    public function contactinquirecsv()
    {
       
        $fileName = 'ContactEnquire.csv';
        $contact = ContactForm::latest()->get();
  
       $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0",
            "Content-Encoding"   =>"UTF-8"
        );
       
        $columns = 
        array('name','email','address','phone','message','Submit Date');

        $callback = function() use($contact, $columns) {
            $file =fopen('php://output', 'a');
            fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));
            fputcsv($file, $columns);

            foreach ($contact as $task) {
                $row['name']  = $task->name;
                $row['email']    = $task->email;
                 $row['address']    = $task->address;
                $row['phone']  = $task->phone;
                $row['message']  = $task->enquiry;
                $row['created_at']  = $task->created_at;
                
                fputcsv($file, array($row['name'], $row['email'], $row['address'],$row['phone'], $row['message'],$row['created_at']));
            }

            fclose($file);
        };
        
        return response()->stream($callback, 200, $headers);
       
    }
    
    public function index()
    {
        $banner = Banner::all()->count();
        $event = Event::count();
        $job = Job::count();
        $bank = Banking::count();
        return view('admin.dashboard.index')->with(compact('banner','event','job','bank'));
    }
    public function usersetting()
    {
        $user = User::findOrFail(Auth::user()->id);
        return view ('admin.usersetting.index')->with(compact('user'));
    }

    public function entreprenurelist()
    {
        $eregister = $this->entreprenurefilter();
         $pradesh = Pradesh::all();
       $district = District::all();
      
        // $eregister = Enterprenure::orderBy('created_at','desc')->get();
        return view ('admin.dashboard.entruser')->with(compact('eregister','pradesh','district'));
        
    }
    
    public function karmabhomilist()
    {
        $eregister = $this->karmabhomifilter();
        $pradesh = Pradesh::all();
        $district = District::all();
      
        // $eregister = Enterprenure::orderBy('created_at','desc')->get();
        return view ('admin.dashboard.karmabhomiuser')->with(compact('eregister','pradesh','district'));
      
    }
    
    public function mentorlist()
    {
       $eregister = $this->mentorfilter();
        $pradesh = Pradesh::all();
       $district = District::all();
          
        return view ('admin.dashboard.mentoruser')->with(compact('eregister','pradesh','district'));
        
    }
    public function entreprenurepdf($id)
    {
        
        $userform = Enterprenure::findOrFail($id);
     
        return view ('admin.dashboard.enteprenure')->with(compact('userform'));
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadView('admin.dashboard.enteprenure', compact('userform'));
        // return $pdf->stream('Entreprenure Report' . date('Ymd') . '.pdf');
    }
     public function entrdownload($id)
    {
        
        $userform = Enterprenure::findOrFail($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('admin.dashboard.downloadentr', compact('userform'))->setPaper('a3', 'landscape');
        return $pdf->stream('Entreprenure Report' . date('Ymd') . '.pdf');
    }
     public function karmabhomidownload($id)
    {
        $userform = Karmabhomi::findOrFail($id);
        return view('admin.dashboard.karmabhomi_pdf', compact('userform'));
        // return view('admin.dashboard.downloadkarmabhomi', compact('userform'));
        
    }
    
    public function karmabhomipdf($id)
    {
        
        $userform = Karmabhomi::findOrFail($id);
        return view ('admin.dashboard.karmabhomi')->with(compact('userform'));
        
    }
    public function mentordownload($id)
    {
        
        $userform = Mentor::findOrFail($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('admin.dashboard.downloadmentor', compact('userform'))->setPaper('a4', 'landscape');
        return $pdf->stream('Mentor Report' . date('Ymd') . '.pdf');
    }
    public function mentorpdf($id)
    {
        
        $userform = Mentor::findOrFail($id);
     
        return view ('admin.dashboard.mentor')->with(compact('userform'));
        
    }
    public function usersettingupdate(Request $request,$id)
    {
        $user = User::findOrFail($id);
        $user->fname =$request->fname;
        $user->lname =$request->lname;
        $user->email =$request->email;
        if($request->password == '***************')
        {
            
            $user->password =$user->password;
           
        }
        else
        {
            $user->password =Hash::make($request->password);
            
        }

      $user->update();
      $request->session()->flash('success','User Updated');

            return redirect('admin/user/setting');
    }
     public function entreprenurefilter()
    {

        $eregister = '';
        if (!empty($_GET['starting_date']) && !empty($_GET['end_date']) && !empty($_GET['pradesh']) && !empty($_GET['district'])) {
            // dd('all');
           
            $eregister = Enterprenure::where('created_at', '>=', $_GET['starting_date'])
                ->Where(function ($query) {
                    $query->where('created_at', '<=', $_GET['end_date'])
                        ->where('pradesh', $_GET['pradesh'])
                        ->where('district', $_GET['district']);
                })->get();
        } elseif (!empty($_GET['starting_date']) && !empty($_GET['end_date'])) {
            // dd('date');
            $eregister = Enterprenure::where('created_at', '>=', $_GET['starting_date'])
                ->Where(function ($query) {
                    $query->where('created_at', '<=', $_GET['end_date']);
                })->get();
        } elseif (!empty($_GET['starting_date']) && !empty($_GET['end_date']) && $_GET['pradesh']) {
            // dd('date user');
            $eregister = Enterprenure::where('created_at', '>=', $_GET['starting_date'])
                ->orWhere(function ($query) {
                    $query->where('created_at', '<=', $_GET['end_date'])
                        ->where('pradesh', $_GET['pradesh']);
                })->get();
        } elseif (!empty($_GET['starting_date']) && !empty($_GET['end_date']) && !empty($_GET['district'])) {
            // dd('date categiry');
            $eregister = Enterprenure::where('created_at', '>=', $_GET['starting_date'])
                ->Where(function ($query) {
                    $query->where('created_at', '<=', $_GET['end_date'])
                        ->where('district', $_GET['district']);
                })->get();
        } elseif (!empty($_GET['pradesh']) && !empty($_GET['district'])) {
            // dd('usercat');
            $eregister = Enterprenure::where('district', $_GET['district'])
                ->Where(function ($query) {
                    $query->where('pradesh', $_GET['pradesh']);
                })->get();
        } elseif (!empty($_GET['pradesh'])) {
            // dd('user');
            $eregister = Enterprenure::where('pradesh', $_GET['pradesh'])->get();
        } elseif (!empty($_GET['district'])) {
            // dd('category');
            $eregister = Enterprenure::where('district', $_GET['district'])->get();
        } else {
            $eregister = Enterprenure::orderBy('created_at', 'DESC')->get();
        }

        return  $eregister;
    }
    
     public function karmabhomifilter()
    {

        $eregister = '';
        if (!empty($_GET['starting_date']) && !empty($_GET['end_date']) && !empty($_GET['pradesh']) && !empty($_GET['district'])) {
            // dd('all');
           
            $eregister = Karmabhomi::where('created_at', '>=', $_GET['starting_date'])
                ->Where(function ($query) {
                    $query->where('created_at', '<=', $_GET['end_date'])
                        ->where('pradesh', $_GET['pradesh'])
                        ->where('district', $_GET['district']);
                })->get();
        } elseif (!empty($_GET['starting_date']) && !empty($_GET['end_date'])) {
            // dd('date');
            $eregister = Karmabhomi::where('created_at', '>=', $_GET['starting_date'])
                ->Where(function ($query) {
                    $query->where('created_at', '<=', $_GET['end_date']);
                })->get();
        } elseif (!empty($_GET['starting_date']) && !empty($_GET['end_date']) && $_GET['pradesh']) {
            // dd('date user');
            $eregister = Karmabhomi::where('created_at', '>=', $_GET['starting_date'])
                ->orWhere(function ($query) {
                    $query->where('created_at', '<=', $_GET['end_date'])
                        ->where('pradesh', $_GET['pradesh']);
                })->get();
        } elseif (!empty($_GET['starting_date']) && !empty($_GET['end_date']) && !empty($_GET['district'])) {
            // dd('date categiry');
            $eregister = Karmabhomi::where('created_at', '>=', $_GET['starting_date'])
                ->Where(function ($query) {
                    $query->where('created_at', '<=', $_GET['end_date'])
                        ->where('district', $_GET['district']);
                })->get();
        } elseif (!empty($_GET['pradesh']) && !empty($_GET['district'])) {
            // dd('usercat');
            $eregister = Karmabhomi::where('district', $_GET['district'])
                ->Where(function ($query) {
                    $query->where('pradesh', $_GET['pradesh']);
                })->get();
        } elseif (!empty($_GET['pradesh'])) {
            // dd('user');
            $eregister = Karmabhomi::where('pradesh', $_GET['pradesh'])->get();
        } elseif (!empty($_GET['district'])) {
            // dd('category');
            $eregister = Karmabhomi::where('district', $_GET['district'])->get();
        } else {
            $eregister = Karmabhomi::orderBy('created_at', 'DESC')->get();
        }

        return  $eregister;
    }
    
    public function mentorfilter()
    {

        $eregister = '';
        if (!empty($_GET['starting_date']) && !empty($_GET['end_date']) && !empty($_GET['pradesh']) && !empty($_GET['district'])) {
            // dd('all');
           
            $eregister = Mentor::where('created_at', '>=', $_GET['starting_date'])
                ->Where(function ($query) {
                    $query->where('created_at', '<=', $_GET['end_date'])
                        ->where('pradesh', $_GET['pradesh'])
                        ->where('district', $_GET['district']);
                })->get();
        } elseif (!empty($_GET['starting_date']) && !empty($_GET['end_date'])) {
            // dd('date');
            $eregister = Mentor::where('created_at', '>=', $_GET['starting_date'])
                ->Where(function ($query) {
                    $query->where('created_at', '<=', $_GET['end_date']);
                })->get();
        } elseif (!empty($_GET['starting_date']) && !empty($_GET['end_date']) && $_GET['pradesh']) {
            // dd('date user');
            $eregister = Mentor::where('created_at', '>=', $_GET['starting_date'])
                ->orWhere(function ($query) {
                    $query->where('created_at', '<=', $_GET['end_date'])
                        ->where('pradesh', $_GET['pradesh']);
                })->get();
        } elseif (!empty($_GET['starting_date']) && !empty($_GET['end_date']) && !empty($_GET['district'])) {
            // dd('date categiry');
            $eregister = Mentor::where('created_at', '>=', $_GET['starting_date'])
                ->Where(function ($query) {
                    $query->where('created_at', '<=', $_GET['end_date'])
                        ->where('district', $_GET['district']);
                })->get();
        } elseif (!empty($_GET['pradesh']) && !empty($_GET['district'])) {
            // dd('usercat');
            $eregister = Mentor::where('district', $_GET['district'])
                ->Where(function ($query) {
                    $query->where('pradesh', $_GET['pradesh']);
                })->get();
        } elseif (!empty($_GET['pradesh'])) {
            // dd('user');
            $eregister = Mentor::where('pradesh', $_GET['pradesh'])->get();
        } elseif (!empty($_GET['district'])) {
            // dd('category');
            $eregister = Mentor::where('district', $_GET['district'])->get();
        } else {
            $eregister = Mentor::orderBy('created_at', 'DESC')->get();
        }

        return  $eregister;
    }
     public function mentorexcel()
    {
       $fileName = 'mentor.csv';
   $mentor = $this->mentorfilter();
   
  

        $headers = array(
            "Content-type"        => "application/vnd.ms-excel",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );
       
$columns = array( 'पूरा नाम',
            'इमेल ठेगाना',
            'प्रदेश',
            'जिल्ला',
            
            'पालिका',
            'फोन नम्बर',
            'लिङ्ग',
            'हाल कार्यरत वा आवद्ध रहेको संस्था',
            'हालको पद',
            'क्षेत्रगत विज्ञता/ तपाइंको विशेषज्ञताको क्षेत्रको अनुभव',
            'तपाइंको अनुभवको अवधि कति हो?',
            'तपाइंको अन्य पेशागत आवद्धता के-के छन्, अथवा अन्य संलग्नता उल्लेख गर्नुहोस',
            'तपाईं कस्तो प्रकारको प्रशिक्षक हुनलाई आवेदन भर्दै हुनुहुन्छ?',
            'यदि प्राज्ञिक व्यक्ति क्षेत्रगत विशेषज्ञ हो उक्त विषय, क्षेत्र र पक्षको उल्लेख गर्नुहोस',
            'तपाइंको भविष्यका प्रशिक्षार्थीलाई महिनामा कति घण्टा (अधिकतम) दिन सक्नुहुन्छ? ',
            'प्रशिक्षण कार्यक्रमबाट तपाईंका अपेक्षाहरु के छन्?',
            'यसभन्दा अघि पनि प्रशिक्षकको रूपमा काम गर्नुभएको छ?',
            'यदि छ भने कस्तो प्रशिक्षण कार्यमा सहभागी हुनुहुन्थ्यो? उल्लेख गर्नुहोस',
            'तपाईंको व्यक्तिगत विवरण वा तपाइंको अनुभव तथा योग्यता समावेश भएको संक्षिप्त विवरण संलग्न गर्नुहोस',
            'तपाईंको पासपोर्ट आकारको तस्वीर संलग्न गर्नुहोस (गगल्स, सन्ग्लास अथवा क्याप लगाएको तस्वीर प्रयोग नगर्नुहोला)',);
        $callback = function() use($mentor, $columns) {
            $file = fopen('php://output', 'w');
             fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));
            fputcsv($file, $columns);

            foreach ($mentor as $task) {
                $row['name']  = $task->name;
                $row['email']    = $task->email;
                $row['pradesh']    = $task->pradesh;
                 $row['district']    = $task->district;
                $row['vdc']  = $task->vdc;
                $row['phone']  = $task->phone;
                $row['gender']  = $task->gender;
                $row['ob1']    = $task->ob1;
                $row['ob2']    = $task->ob2;
                $row['ob3']  = $task->ob3;
                $row['ob4']  = $task->ob4;
                $row['ob5']  = $task->ob5;
                $row['ob6']    = $task->ob6;
                $row['ob7']    = $task->ob7;
                $row['ob8']  = $task->ob8;
                $row['ob9']  = $task->ob9;
                $row['ob10']  = $task->ob10;
                $row['ob11']    = $task->ob11;
                $row['citizen']  = url('images/mentor/citizen/'.$task->citizen);
                $row['psp']  = url('images/mentor/psp/'.$task->psp);
               

                fputcsv($file, array($row['name'], $row['email'], $row['pradesh'], $row['district'],$row['vdc'], $row['phone'],$row['gender'], $row['ob1'], $row['ob2'], $row['ob3'], $row['ob4'],
                $row['ob5'], $row['ob6'], $row['ob7'], $row['ob8'], $row['ob9'],$row['ob10'], $row['ob11'], $row['citizen'], $row['psp']));
            }

            fclose($file);
        };
      
     
      
        return response()->stream($callback, 200, $headers);
    
    }
     public function entreprenureexcel()
    {
       
        $fileName = 'enterprenure.csv';
        $entp = $this->entreprenurefilter();
   
  

        $headers = array(
            "Content-type"        => "application/vnd.ms-excel",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );
      
$columns = array('नाम',
'ठेगाना',
'प्रदेश',
'जिल्ला',
'पालिका',
'वडा',
'जातजाति',
'लिङ्ग',
'टोल',
'जन्म मिति',
'शिक्षा',
'के तपाइँ विदेशवाट हालसालै फर्किनु भएको हो?',
'हो भने, कुन क्षेत्र/ देशबाट फर्किनु भएको हो?',
'फर्केको साल/ अवधी',
'फर्कनुको कारण',
'कार्यक्षेत्र',
'तपाइंको हालको अवस्था के हो?',
'के तपाइंले नेपाल सरकारको मापदण्ड अनुरुप वार्षिक अडिट, कर चुक्ताको प्रमाणमात्र र कम्पनीको अध्यावधि नियमित रूपमा गर्नु भएको छ?',
'तपाइंको व्यवसायको वित्तीय जानकारी खुलाई दिनु होला',
'वार्षिक आम्दानी',
'वार्षिक खर्च',
'चल सम्पत्ति',
'अचल सम्पत्ति',
'पूंजीको संरचना',
'तपाइंको व्यावास्स्य संचालन गर्न कुनै प्रकारको आर्थिक चुनौती सामना गर्नु भएको छ?',
'तपाइंले आफ्नो व्यवसाय संचालनको निम्ति कुनै आर्थिक सहयोग (ऋण) जुटाउने सोच बनाउनु भएको छ?',
'यदि छ भने तपाईंले आर्थिक पूर्वानुमान सहितका विस्तृत प्रस्ताव निर्माण गर्नु भएको छ? ',
'तपाइंको व्यवसाय कुन क्षेत्र अन्तर्गत पर्दछ?',
'तपाईंको व्यवसाय संचालनमा अरु कुनै समस्या भोग्नु भएको छ?',
'के तपाईंले आफ्नो नयाँ व्यवसायको विस्तृत योजना बनाउनु भएको छ?',
'के तपाईं आफ्नो नयाँ व्यवसाय दर्ता गर्ने प्रक्रियामा हुनुहुन्छ?',
'के तपाइंले विस्तृत प्रस्ताव (आर्थिक पूर्वानूमान) सहितको प्रस्ताव निर्माण गर्नु भएको छ?',
'तपाइंको सम्भावित व्यवसाय कुन क्षेत्र अन्तर्गत पर्दछ?',
'के तपाईं रोजगारीको खोजीमा हुनुहुन्छ?',
'यदि रोजगारीको खोजीमा हो भने, तपाइंले कुन क्षेत्रमा रोजगारीको खोजी गरिरहनुभएको छ?',
'विगतमा रोजगारी भएको तर हाल बेरोजगार हो भने, तपाइंको आफ्नो कार्य अनुभवको विस्तृत विवरण खुलाइदिनु होला?',
'सीप तथा दक्षता',
'अनुभव अवधि',
'कार्यक्षेत्र',
'के तपाइँ प्रशिक्षण, व्यवसाय विकास, परियोजनाको अध्ययन र विकासमा सहयोगको लागी निश्चित शुल्क तिर्न सक्ने अवस्थामा हुनुहुन्छ?',
'यदि हुनुहुन्छ भने कति?');
        $callback = function() use($entp, $columns) {
            $file = fopen('php://output', 'w');
             fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));
            fputcsv($file, $columns);

            foreach ($entp as $task) {
                $row['name']  = $task->name;
                $row['address']    = $task->address;
                $row['pradesh']    = $task->pradesh;
                 $row['district']    = $task->district;
                $row['vdc']  = $task->vdc;
                $row['ward']  = $task->ward;
                $row['caste']  = $task->caste;
                
                $row['gender']  = $task->gender;
                $row['tole']  = $task->tole;
                 $row['date']  = $task->date;
                 $row['education']  = $task->education;
                $row['ob1']    = $task->ob1;
                $row['ob2']    = $task->ob2;
                $row['ob3']  = $task->ob3;
                $row['ob4']  = $task->ob4;
                $row['ob5']  = $task->ob5;
                $row['ob6']    = $task->ob6;
                $row['ob7']    = $task->ob7;
                $row['ob8']  = $task->ob8;
                $row['ob9']  = $task->ob9;
                $row['ob10']  = $task->ob10;
                $row['ob11']    = $task->ob11;
                $row['ob12']    = $task->ob12;
                $row['ob13']  = $task->ob13;
                $row['ob14']  = $task->ob14;
                $row['ob15']  = $task->ob15;
                $row['ob16']    = $task->ob16;
                $row['ob17']    = $task->ob17;
                $row['ob18']  = $task->ob18;
                $row['ob19']  = $task->ob19;
                 $row['ob20']    = $task->ob20;
                $row['ob21']    = $task->ob21;
                $row['ob22']    = $task->ob22;
                $row['ob23']  = $task->ob23;
                $row['ob24']  = $task->ob24;
                $row['ob25']  = $task->ob25;
                $row['ob26']    = $task->ob26;
                $row['ob27']    = $task->ob27;
                $row['ob28']  = $task->ob28;
                $row['ob29']  = $task->ob29;
                $row['ob30']  = $task->ob30;
                $row['ob31']    = $task->ob31;
                
                fputcsv($file, array($row['name'], $row['address'], $row['pradesh'], $row['district'],$row['vdc'], $row['ward'],$row['caste'],$row['gender'],$row['tole'],$row['date'], $row['education'],
                $row['ob1'], $row['ob2'], $row['ob3'], $row['ob4'],$row['ob5'], $row['ob6'], $row['ob7'], $row['ob8'], $row['ob9'],$row['ob10'], $row['ob11'],
                $row['ob12'], $row['ob13'], $row['ob14'],$row['ob15'], $row['ob16'], $row['ob17'], $row['ob18'], $row['ob19'],$row['ob20'], $row['ob21'],
                $row['ob22'], $row['ob23'], $row['ob24'],$row['ob25'], $row['ob26'], $row['ob27'], $row['ob28'], $row['ob29'],$row['ob30'], $row['ob31'],));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }


public function karmabhomiexcel()
    {
        $fileName = 'karmabhomi.csv';
        $karmabhomi = $this->karmabhomifilter();
        $karmabhomi_ids = $karmabhomi->pluck('id');
        return Excel::download(new KarmabhomiExport($karmabhomi_ids), 'karmabhomi.xlsx');

    //     $karmabhomi_ids = $karmabhomi->pluck('id');
    //     $test = $this->exportYearlyProduction($karmabhomi_ids);

    //    $headers = array(
    //         "Content-type"        => "text/csv",
    //         "Content-Disposition" => "attachment; filename=$fileName",
    //         "Pragma"              => "no-cache",
    //         "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
    //         "Expires"             => "0",
    //         "Content-Encoding"   =>"UTF-8"
    //     );
       
    // $columns =
        // array('नाम',
        // 'प्रदेश',
        // 'जिल्ला',
        // 'पालिका',
        // 'वडा',
        // 'टोल',
        // 'सम्पर्क मोबाइल नम्बर',
        // 'इमेल',
        // 'लिङ्ग',
        // 'जन्ममिति' ,
        // 'शिक्षा' ,
        // 'परिवारमा कुल सदस्य संख्या',
        // 'परिवारमा रहेको महिला सदस्य संख्या',
        // 'परिवारमा रहेको पुरुष सदस्य संख्या',
        // 'परिवारमा रहेको अन्य सदस्य संख्या',
        // 'परियोजनाको किसिम',
        // 'परियोजनाको नाम',
        // 'परियोजनाको ठेगाना (प्रदेश)',
        // 'परियोजनाको ठेगाना (जिल्ला)',
        // 'परियोजनाको ठेगाना (पालिका)',
        // 'परियोजनाको ठेगाना (वडा)',
        // 'परियोजनाको ठेगाना (टोल)',
        // 'परियोजनाको उदेश्य',
        // 'सुचारु वा विस्तार गर्नु को कारण ',
        // 'उत्पादन हुने बस्तु वा सेवा',
        // 'तपाइंको व्यवसाय कुन क्षेत्र अन्तर्गत पर्दछ?',
        // 'आबश्यक पर्ने सिप/तालिम र सो को उपलब्धता',
        // 'आवश्यक कच्चापदार्थ र सो को उपलब्धता',
        // 'आवश्यक कर्मचारी / कामदार',
        // 'मासिक जम्मा तलब',
        // 'संचालन हुने क्षमता' ,
        // 'उत्पादन क्षमता' ,
        // 'व्यवसाय संचालनको कुल लागत',
        // 'आवश्यक वित्तीय श्रोत (बैंक ऋण ) रु.' ,
        // 'आवश्यक वितिय श्रोत (स्वपूंजी ) रु.',
        // 'अपेक्षित ब्याजदर %',
        // 'किस्ता र ऋण भुक्तानी प्रक्रिया',
        // 'ऋणको सुरक्षणको लागि रहने धितोको विवरण',
        // 'ऋण को बर्गिकरण',
        // 'उत्पादित बस्तुको बजार ',
        // 'के तपाइंले नेपाल सरकारको मापदण्ड अनुरुप वार्षिक अडिट, कर चुक्ताको प्रमाणमात्र र कम्पनीको अध्यावधि नियमित रूपमा गर्नु भएको छ?' ,
        // 'तपाईंको व्यवसाय संचालनमा अरु कुनै समस्या छ? ',
        // 'तपाईंलाई पायक पर्ने बैंकको नाम',
        // 'तपाईंलाई पायक पर्ने बैंकको शाखा');

        // $callback = function() use($karmabhomi, $columns) {
        //     $file =fopen('php://output', 'a');
        //     fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));
        //     fputcsv($file, $columns);

        //     foreach ($karmabhomi as $task) {
        //         $row['name']  = $task->name;
        //         $row['pradesh']    = $task->getPradesh->name;
        //         $row['district']    = $task->getDistrict->name;
        //         $row['vdc']  = $task->getMunicipality->name;
        //         $row['ward']  = $task->ward;
        //         $row['tole']  = $task->tole;
        //         $row['number']  = $task->number;
        //         $row['email']  = $task->email;
        //         $row['gender']  = $task->gender;
        //         $row['date']  = $task->date;
        //         $row['education']  = $task->education;
        //         $row['family_total']    = $task->family_total;
        //         $row['family_female']    = $task->family_female;
        //         $row['family_male']    = $task->family_male;
        //         $row['family_others']    = $task->family_others;
        //         $row['ob2']    = $task->ob2;
        //         $row['ob3']  = $task->ob3;
        //         $row['business_pardesh']    = $task->getBusinessPradesh->name;
        //         $row['business_district']    = $task->getBusinessDistrict->name;
        //         $row['business_vdc']    = $task->getBusinessMunicipality->name;
        //         $row['business_ward']    = $task->business_ward;
        //         $row['business_tole']    = $task->business_tole;
        //         $row['business_aim']    = $task->business_aim;
        //         $row['business_reason']    = $task->business_reason;
        //         $row['ob4']  = $task->ob4;
        //         $row['ob5']  = $task->ob5;
        //         $row['ob8']  = $task->ob8;
        //         $row['ob7']    = $task->ob7;
        //         $row['ob10']  = $task->ob10;
        //         $row['total_salary']  = $task->total_salary;
        //         $row['ob11']    = $task->ob11;
        //         $row['ob12']    = $task->ob12;
        //         $row['ob13']  = $task->ob13;
        //         $row['ob20']    = $task->ob20;
        //         $row['ob21']    = $task->ob21;
        //         $row['expected_interest'] = $task->expected_interest;
        //         $row['loan_payment_type'] = $task->loan_payment_type;
        //         $row['ob22']    = $task->ob22;
        //         $row['loan_category']    = $task->loan_category;
        //         $row['ob16']    = $task->ob16;
        //         $row['ob23']  = $task->ob23;
        //         $row['ob24']  = $task->ob24;
        //         $row['bank_name']  = $task->bank_name;
        //         $row['bank_branch']  = $task->bank_branch;   

        //         fputcsv($file, array($row['name'], $row['pradesh'], $row['district'],$row['vdc'], $row['ward'],$row['tole'],$row['number'],$row['email'],$row['gender'],$row['date'], $row['education'],
        //         $row['family_total'],$row['family_female'],$row['family_male'],$row['family_others'], $row['ob2'], $row['ob3'], $row['business_pardesh'], $row['business_district'], $row['business_vdc'], $row['business_ward'], $row['business_tole'],
        //         $row['business_reason'], $row['business_aim'], $row['ob4'],$row['ob5'], $row['ob8'], $row['ob7'], $row['ob10'], $row['total_salary'], $row['ob11'],
        //         $row['ob12'], $row['ob13'], $row['ob20'], $row['ob21'], $row['expected_interest'], $row['loan_payment_type'], $row['ob22'], $row['loan_category'], $row['ob16'],
        //         $row['ob23'], $row['ob24'], $row['bank_name'], $row['bank_branch']));
        //     }

        //     fclose($file);
        // };
        // return response()->stream($callback, 200, $headers);
    }

}
