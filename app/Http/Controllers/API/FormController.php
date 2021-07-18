<?php
namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Validator;
use App\Models\Enterprenure;
use App\Models\Mentor;
use App\Models\Karmabhomi;
use App\Models\UserKarmabhomi;
use App\Models\UserEnterprenure;
use App\Models\UserMentor;
use App\Models\MobileUserAuth;
use Illuminate\Http\Request;
use App\Models\Pradesh;
use App\Models\Municipality;
use App\Models\District;
use App\Http\Controllers\Controller;
use App\Models\YearlyProduction;
use App\Models\Machinery;
use App\Models\FixedCapital;
use App\Models\RunningCapital;
use App\Models\UnitIncome;
use App\Models\UnitExpense;
use App\Models\AnnualOperationCost;
use File;
use Illuminate\Support\Facades\Storage;
class FormController extends Controller
{
   
    public function karmabhomiform(Request $request)
    {
        \Log::info("Form Data");
        \Log::info($request->all());
        $ob24 =implode(",", $request->ob24);
        \Log::info("ob24 data");
        \Log::info($ob24);
        try{
        $userauth = MobileUserAuth::where('auth_token',$request->auth_token)->first();
        $userid = $userauth->user_id;
        $alreadyuser = Karmabhomi::where('user_id',$userid)->first();

        $eform = new Karmabhomi();
        $eform->name = $request->name;
        $eform->pradesh = $request->pradesh;
        $eform->district = $request->district;
        $eform->vdc = $request->vdc;
        $eform->ward = $request->ward;
        $eform->number = $request->number;
        $eform->tole = $request->tole;
        $eform->email = $request->email;
        $eform->gender = $request->gender;
        $eform->date = $request->date;
        $eform->education = $request->education;
        $eform->family_total= $request->family_total;
        $eform->family_male= $request->family_male;
        $eform->family_female= $request->family_female;
        $eform->family_others= $request->family_others;
        $eform->ob2 = $request->ob2;
        $eform->ob3 = $request->ob3;
        $eform->business_pradesh = $request->business_pradesh;
        $eform->business_district = $request->business_district;
        $eform->business_vdc = $request->business_vdc;
        $eform->business_ward = $request->business_ward;
        $eform->business_tole = $request->business_tole;
        $eform->business_aim = $request->business_aim;
        $eform->business_reason = $request->business_reason;
        $eform->ob4 = $request->ob4;
        $eform->ob5 = $request->ob5;
        $eform->ob7 = $request->ob7;
        $eform->ob8 = $request->ob8;
        $eform->ob10 = $request->ob10;
        $eform->total_salary=$request->total_salary;
        $eform->ob11 = $request->ob11;
        $eform->ob12 = $request->ob12;
        $eform->ob13 = $request->ob13;
        $eform->ob16 = $request->ob16;
        $eform->ob20 = $request->ob20;
        $eform->ob21 = $request->ob21;
        $eform->expected_interest= $request->expected_interest;
        $eform->loan_payment_type=$request->loan_payment_type;
        $eform->ob22 = $request->ob22;
        $eform->loan_category=$request->loan_category;
        $eform->ob23 = $request->ob23;
        $eform->ob24 = $ob24;
        $eform->bank_name = $request->bank_name;
        $eform->bank_branch = $request->bank_branch;
        $eform->user_id = $userid;
        $eform->user_type = 'mobile';
        $eform->save();
       
        foreach((array)$request->yearly_production as $production)
        {
            $productionArray = json_decode($production, 1);
            YearlyProduction::create([
                'karmabhomi_id'=>$eform->id,
                'product'=>$production['ans1'],
                'qty'=>$production['ans2'],
                'price'=>$production['ans3'],
                'remarks'=>$production['ans4'],
            ]);
        }
      
        foreach((array) $request->fixed_capital as $fixed)
        {
            FixedCapital::create([
                'karmabhomi_id'=>$eform->id,
                'fixed_property'=>$fixed['ans1'],
                'approx_price'=>$fixed['ans2'],
                'details'=>$fixed['ans3'],
                'remarks'=>$fixed['ans4'],
            ]);
        }
        foreach( (array)$request->running_capital as $running)
        {
            RunningCapital::create([
                'karmabhomi_id'=>$eform->id,
                'running_property'=>$running['ans1'],
                'approx_price'=>$running['ans2'],
                'details'=>$running['ans3'],
                'remarks'=>$running['ans4'],
            ]);
        }
        foreach((array) $request->unit_expense as $expense)
        {
            UnitExpense::create([
                'karmabhomi_id'=>$eform->id,
                'name'=>$expense['ans1'],
                'approx_price'=>$expense['ans2'],
                'approx_annual_production'=>$expense['ans3'],
                'total_expense'=>$expense['ans4'],
            ]);
        }
        foreach( (array)$request->unit_income as $income)
        {
            UnitIncome::create([
                'karmabhomi_id'=>$eform->id,
                'name'=>$income['ans1'],
                'approx_price'=>$income['ans2'],
                'approx_annual_sale'=>$income['ans3'],
                'total_expense'=>$income['ans4'],
            ]);
        }
        foreach((array) $request->annual_operation_cost as $annual_cost)
        {
            AnnualOperationCost::create([
                'karmabhomi_id'=>$eform->id,
                'name'=>$annual_cost['ans1'],
                'approx_price'=>$annual_cost['ans2'],
                'approx_annual_sale'=>$annual_cost['ans3'],
                'total_expense'=>$annual_cost['ans4'],
            ]);
        }
            foreach((array) $request->machinery as $machine)
            {
            Machinery::create([
                'karmabhomi_id'=>$eform->id,
                'machine_name'=>$machine['ans1'],
                'total_expense'=>$machine['ans2'],
                'availability'=>$machine['ans3'],
                'remarks'=>$machine['ans4'],
                ]);
            }
        $userentrep = new UserKarmabhomi();
        $userentrep->user_id = $userid;
        $userentrep->user_type = 'mobile';
        $userentrep->status = '0';
        $userentrep->try_counter = 1;
        $userentrep->karmabhomi_id = $eform->id;
        $userentrep->save();
        $response = [
                
                'status' => 200,
                'error' => false,
                'message' => 'Form successfully Submitted'
            ];
            echo json_encode($response);
        exit();

       } catch (\Throwable $th) {
           \Log::info($th->getMessage());
           $response = [      
            'status' => 200,
            'error' => true,
            'message' => $th->getMessage(),
        ];
        echo json_encode($response);
        exit();
       }   

    }
    
    public function karmabhomiformedit(Request $request)
    {
        
        $userauth = MobileUserAuth::where('auth_token',$request->auth_token)->first();
        $userid = $userauth->user_id;
        $eform =Karmabhomi::where('id',$request->karmabhomi_id)->where('user_type','mobile')->where('user_id',$userid)->first();
        $eform->name = $request->name;
        $eform->pradesh = $request->pradesh;
        $eform->district = $request->district;
        $eform->vdc = $request->vdc;
        $eform->ward = $request->ward;
        $eform->gender = $request->gender;
        $eform->tole = $request->tole;
        $eform->email = $request->email;
        $eform->number = $request->number;
        
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
    
        $eform->user_id = $userid;
        $eform->user_type = 'mobile';
         $eform->update();
        $userentrep =UserKarmabhomi::where('user_id',$userid)->where('user_type','mobile')->first();
        $userentrep->user_id = $userid;
        $userentrep->user_type = 'mobile';
        $userentrep->status = '0';
        $userentrep->try_counter = $userentrep->try_counter + 1 ;
        $userentrep->karmabhomi_id = $eform->id;
        $userentrep->update();
        $response = [
                
                'status' => 200,
                'error' => false,
                'message' => 'Form successfully Submitted'
            ];
            echo json_encode($response);
        exit();

    }
    
     public function karmabhomiuserform(Request $request)
    {
        $userauth = MobileUserAuth::where('auth_token', $request->auth_token)->first();
        $userid = $userauth->user_id;
        $karmabhomis =Karmabhomi::where('user_id',$userid)->first();
        if($karmabhomis)
            {
                $message = "तपाईले बुझाउनु भएको फारम को विवरण।";
                $data = $karmabhomis;
                $response = [
                    'data'=> $data,
                    'message'=> $message,
                    'status'=> 200,
                    'errror'=> false,
                    'message' => $message
                ];
            }else
            {
                $karmabhomi= '';
                $message='Fill karmabhomi form';
                $pradeshs = Pradesh::all();
                $districts = District::all();
                $municipality = Municipality::all();
                
                $response = [
                    'pradeshs' => $pradeshs,
                    'districts'=> $districts,
                    'municipality'=>$municipality,
                    'status' =>200,
                    'error' => false,
                    'message'=> $message,
                ];
            }       
             echo json_encode($response);
         exit();    
    }
    
    public function getKarmabhomiForm()
    {
        $userauth = MobileUserAuth::where('auth_token', $request->auth_token)->first();
        $userid = $userauth->user_id;
         $message='Fill karmabhomi form';
         $pradeshs = Pradesh::all();
         $districts = District::all();
         $municipality = Municipality::all();
                
           $response = [
                'pradeshs' => $pradeshs,
                'districts'=> $districts,
                'municipality'=>$municipality,
                'status' =>200,
                'error' => false,
                'message'=> $message,
            ];
            echo json_encode($response);
            exit();
    }
    
    public function entreprenureform(Request $request)
    {
        
        $userauth = MobileUserAuth::where('auth_token',$request->auth_token)->first();
        $userid = $userauth->user_id;
        $alreadyuser = Enterprenure::where('user_id',$userid)->where('user_type','mobile')->first();
        if($alreadyuser)
        {
             $response = [
                
                'status' => 200,
                'error' => false,
                'message' => 'Already Form sucessfully Submitted'
            ];
             echo json_encode($response);
        exit();
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
        $eform->user_id = $userid;
        $eform->user_type = 'mobile';
         $eform->save();
        $userentrep = new UserEnterprenure();
        $userentrep->user_id = $userid;
        $userentrep->user_type = 'mobile';
        $userentrep->status = '0';
        $userentrep->try_counter = 1;
        $userentrep->enterprenure_id = $eform->id;
        $userentrep->save();
        $response = [
                
                'status' => 200,
                'error' => false,
                'message' => 'Form successfully Submitted'
            ];
            echo json_encode($response);
        exit();

    }
    
      
    public function entreprenureformedit(Request $request)
    {
        
        $userauth = MobileUserAuth::where('auth_token',$request->auth_token)->first();
        $userid = $userauth->user_id;
        $eform =Enterprenure::where('id',$request->enteprenure_id)->where('user_type','mobile')->where('user_id',$userid)->first();
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
        $eform->user_id = $userid;
        $eform->user_type = 'mobile';
         $eform->update();
        $userentrep =UserEnterprenure::where('user_id',$userid)->where('user_type','mobile')->first();
        $userentrep->user_id = $userid;
        $userentrep->user_type = 'mobile';
        $userentrep->status = '0';
        $userentrep->try_counter = $userentrep->try_counter + 1 ;
        $userentrep->enterprenure_id = $eform->id;
        $userentrep->update();
        $response = [
                
                'status' => 200,
                'error' => false,
                'message' => 'Form successfully Submitted'
            ];
            echo json_encode($response);
        exit();

    }
    
    
    public function mentorform(Request $request)
    {
        $userauth = MobileUserAuth::where('auth_token',$request->auth_token)->first();
        $userid = $userauth->user_id;
        $alreadyuser = Mentor::where('user_id',$userid)->where('user_type','mobile')->first();
        if($alreadyuser)
        {
             $response = [
                
                'status' => 200,
                'error' => false,
                'message' => 'Already Form sucessfully Submitted'
            ];
             echo json_encode($response);
        exit();
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
        $eform->ob10 = $request->ob10;
        
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
        $eform->user_id = $userid;
        $eform->user_type = 'mobile';
        $eform->save();
        
        $usermentor = new UserMentor();
        $usermentor->user_id = $userid;
        $usermentor->user_type = 'mobile';
        $usermentor->status = '0';
         $usermentor->try_counter = 1;
        $usermentor->mentor_id = $eform->id;
        $usermentor->save();

       $response = [
                
                'status' => 200,
                'error' => false,
                'message' => 'Form successfully Submitted'
            ];
             echo json_encode($response);
        exit();

    }
    
    public function mentorformedit(Request $request)
    {
        $userauth = MobileUserAuth::where('auth_token',$request->auth_token)->first();
        $userid = $userauth->user_id;
        $eform = Mentor::where('id',$request->mentor_id)->where('user_type','mobile')->where('user_id',$userid)->first();
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
        $eform->ob10 = $request->ob10;
        
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
        $eform->user_id = $userid;
        $eform->user_type = 'mobile';
        $eform->update();
        
        $usermentor =UserMentor::where('user_type','mobile')->where('user_id',$userid)->first();
        $usermentor->user_id = $userid;
        $usermentor->user_type = 'mobile';
        $usermentor->status = '0';
        $usermentor->try_counter = $usermentor->try_counter + 1;
        $usermentor->mentor_id = $eform->id;
        $usermentor->update();

       $response = [
                
                'status' => 200,
                'error' => false,
                'message' => 'Form successfully Submitted'
            ];
             echo json_encode($response);
        exit();

    }
    
    
   
    public function formstatus(Request $request)
    {
        $userauth = MobileUserAuth::where('auth_token',$request->auth_token)->first();
        $userid = $userauth->user_id;
        $data = [];
        $enterprenurestatus = '';
        $entreprenurereply = '';
        $karmabhomistatus = '';
        $karmabhomireply = '';
        $mentorststus ='';
        $mentorreply = '';
        
        $karmabhomi = UserKarmabhomi::where('user_type','mobile')->where('user_id',$userid)->first();
        if($karmabhomi)
        {
            $karmabhomireply = $karmabhomi->reply;
        }
        if($karmabhomi && $karmabhomi->status == 0 )
        $karmabhomistatus = 'Your Enterprenure Form Is In Pending State';
        if($karmabhomi && $karmabhomi->status == 1 )
        $karmabhomistatus = 'Your Enterprenure Form Has Accepted';
        if($karmabhomi && $karmabhomi->status == 2 )
        $karmabhomistatus = 'Your Enterprenure Form Has Rejected';
        
        $enterprenure = UserEnterprenure::where('user_type','mobile')->where('user_id',$userid)->first();
        if($enterprenure)
        {
            $entreprenurereply = $enterprenure->reply;
        }
        if($enterprenure && $enterprenure->status == 0 )
        $enterprenurestatus = 'Your Enterprenure Form Is In Pending State';
        if($enterprenure && $enterprenure->status == 1 )
        $enterprenurestatus = 'Your Enterprenure Form Has Accepted';
        if($enterprenure && $enterprenure->status == 2 )
        $enterprenurestatus = 'Your Enterprenure Form Has Rejected';
        
         $mentor = UserMentor::where('user_type','mobile')->where('user_id',$userid)->first();
         
        if($mentor)
        {
            $mentorreply = $mentor->reply;
        }
        if($mentor && $mentor->status == 0 )
        $mentorststus = 'Your Enterprenure Form Is In Pending State';
        if($mentor && $mentor->status == 1 )
        $mentorststus = 'Your Enterprenure Form Has Accepted';
        if($mentor && $mentor->status == 2 )
        $mentorststus = 'Your Enterprenure Form Has Rejected';
        
        $data[]= [
                'entreprenure_reply' => $entreprenurereply,
                'entreprenure_form_status' =>$enterprenurestatus,
                'karmabhomi_reply' => $karmabhomireply,
                'karmabhomi_form_status' =>$karmabhomistatus,
                'mentor_reply' => $mentorreply,
                'mentor_form_status' =>$mentorststus,
                
               ];
        
        $response = [
                'data' =>$data,
                'status' => 200,
                'error' => false,
                'message' => 'Form status'
            ];
             echo json_encode($response);
        exit();

        
        
    }
    
    public function enterprenureuserform(Request $request)
    {
        $userauth = MobileUserAuth::where('auth_token',$request->auth_token)->first();
        $userid = $userauth->user_id;
        $enterprenure =Enterprenure::where('user_type','mobile')->where('user_id',$userid)->first();
        $data = [];
        $message = 'No Enterprenure form submitted till now';
        if($enterprenure)
        {
           $rejectstatus = UserEnterprenure::where('enterprenure_id',$enterprenure->id)->where('accept_status',2)->first();
              $acceptstatus = UserEnterprenure::where('enterprenure_id',$enterprenure->id)->where('accept_status',1)->first();
              $pendingstatus = UserEnterprenure::where('enterprenure_id',$enterprenure->id)->where('accept_status',0)->first();
              
              if($rejectstatus)
            {
                $message = "Your Enterprenure Form has Rejected";
                $data = [
                    'id' =>$enterprenure->id,
                    'name' => $enterprenure->name,
                    'address' => $enterprenure->address,
                    'pradesh' => $enterprenure->pradesh,
                    'district' => $enterprenure->district,
                    'vdc' => $enterprenure->vdc,
                    'ward' => $enterprenure->ward,
                    'caste' => $enterprenure->caste,
                    'gender' => $enterprenure->gender,
                    'tole' => $enterprenure->tole,
                    'date' => $enterprenure->date,
                    'education' => $enterprenure->education,
                    'ob1' => $enterprenure->ob1,
                    'ob2' => $enterprenure->ob2,
                    'ob3' => $enterprenure->ob3,
                    'ob4' => $enterprenure->ob4,
                    'ob5' => $enterprenure->ob5,
                    'ob6' => $enterprenure->ob6,
                    'ob7' => $enterprenure->ob7,
                    'ob8' => $enterprenure->ob8,
                    'ob9' => $enterprenure->ob9,
                    'ob10' => $enterprenure->ob10,
                    'ob11' => $enterprenure->ob11,
                    'ob12' => $enterprenure->ob12,
                    'ob13' => $enterprenure->ob13,
                    'ob14' => $enterprenure->ob14,
                    'ob15' => $enterprenure->ob15,
                    'ob16' => $enterprenure->ob16,
                    'ob17' => $enterprenure->ob17,
                    'ob18' => $enterprenure->ob18,
                    'ob19' => $enterprenure->ob19,
                    'ob20' => $enterprenure->ob20,
                    'ob21' => $enterprenure->ob21,
                    'ob22' => $enterprenure->ob22,
                    'ob23' => $enterprenure->ob23,
                    'ob24' => $enterprenure->ob24,
                    'ob25' => $enterprenure->ob25,
                    'ob26' => $enterprenure->ob26,
                    'ob27' => $enterprenure->ob27,
                    'ob28' => $enterprenure->ob28,
                    'ob29' => $enterprenure->ob29,
                    'ob30' => $enterprenure->ob30,
                    'ob31' => $enterprenure->ob31,
                                    
                    
                    ];
            }
            elseif($acceptstatus)
            {
                $data = [];
                $message = "Your Enterprenure Form has Accepted Already";
            }
            elseif($pendingstatus)
            {
                  $data = [
                    'id' =>$enterprenure->id,
                    'name' => $enterprenure->name,
                    'address' => $enterprenure->address,
                    'pradesh' => $enterprenure->pradesh,
                    'district' => $enterprenureequest->district,
                    'vdc' => $enterprenure->vdc,
                    'ward' => $enterprenure->ward,
                    'caste' => $enterprenure->caste,
                    'gender' => $enterprenure->gender,
                    'tole' => $enterprenure->tole,
                    'date' => $enterprenure->date,
                    'education' => $enterprenure->education,
                    'ob1' => $enterprenure->ob1,
                    'ob2' => $enterprenure->ob2,
                    'ob3' => $enterprenure->ob3,
                    'ob4' => $enterprenure->ob4,
                    'ob5' => $enterprenure->ob5,
                    'ob6' => $enterprenure->ob6,
                    'ob7' => $enterprenure->ob7,
                    'ob8' => $enterprenure->ob8,
                    'ob9' => $enterprenure->ob9,
                    'ob10' => $enterprenure->ob10,
                    'ob11' => $enterprenure->ob11,
                    'ob12' => $enterprenure->ob12,
                    'ob13' => $enterprenure->ob13,
                    'ob14' => $enterprenure->ob14,
                    'ob15' => $enterprenure->ob15,
                    'ob16' => $enterprenure->ob16,
                    'ob17' => $enterprenure->ob17,
                    'ob18' => $enterprenure->ob18,
                    'ob19' => $enterprenure->ob19,
                    'ob20' => $enterprenure->ob20,
                    'ob21' => $enterprenure->ob21,
                    'ob22' => $enterprenure->ob22,
                    'ob23' => $enterprenure->ob23,
                    'ob24' => $enterprenure->ob24,
                    'ob25' => $enterprenure->ob25,
                    'ob26' => $enterprenure->ob26,
                    'ob27' => $enterprenure->ob27,
                    'ob28' => $enterprenure->ob28,
                    'ob29' => $enterprenure->ob29,
                    'ob30' => $enterprenure->ob30,
                    'ob31' => $enterprenure->ob31,
                                    
                    
                    ];
                $message = "Your Enterprenure Form  is Pending";
            }
        }
        $response = [
                'data' =>$data,
                'status' => 200,
                'error' => false,
                'message' => $message
            ];
             echo json_encode($response);
        exit();
        
    }
    
    public function mentoruserform(Request $request)
    {
         $userauth = MobileUserAuth::where('auth_token',$request->auth_token)->first();
        $userid = $userauth->user_id;
         $mentor = Mentor::where('user_type','web')->where('user_id',$userid)->first();
           
        $data = [];
       $message = 'No Mentor form submitted till now';
          if($mentor)
          {
              
                $rejectstatus = UserMentor::where('mentor_id',$mentor->id)->where('accept_status',2)->first();
                $acceptstatus = UserMentor::where('mentor_id',$mentor->id)->where('accept_status',1)->first();
                $pendingstatus = UserMentor::where('mentor_id',$mentor->id)->where('accept_status',0)->first();
              if($rejectstatus)
            {
            
                $message = "Your Enterprenure Form has Rejected Please fill the form";
                $data = [
                    id=>$mentor->id,
                    
                    'name' => $mentor->name,
                'email' => $mentor->email,
                'gender' => $mentor->gender,
                'phone' => $mentor->phone,
                'pradesh' => $mentor->pradesh,
                'district' => $mentor->district,
                'vdc' => $mentor->vdc,
                'ob1' => $mentor->ob1,
                'ob2' => $mentor->ob2,
                'ob3' => $mentor->ob3,
                'ob4' => $mentor->ob4,
                'ob5' => $mentor->ob5,
                'ob6' => $mentor->ob6,
                'ob7' => $mentor->ob7,
                'ob8' => $mentor->ob8,
                'ob9' => $mentor->ob9,
                    
                'ob10' => $mentor->ob10,
                
                    
                'ob11' => $mentor->ob11,
                'psp' => url('/images/mentor/psp/'.$mentor->psp),
                'citizen' => url('/images/mentor/citizen/'.$mentor->citizen)
                ];
                
            }
             elseif($acceptstatus)
                {
                  $data = [];
                  $message = "Your Mentor Form Has been Accepted";
              }
              elseif($pendingstatus)
              {
                 $data = [
                    id=>$mentor->id,
                    
                    'name' => $mentor->name,
                'email' => $mentor->email,
                'gender' => $mentor->gender,
                'phone' => $mentor->phone,
                'pradesh' => $mentor->pradesh,
                'district' => $mentor->district,
                'vdc' => $mentor->vdc,
                'ob1' => $mentor->ob1,
                'ob2' => $mentor->ob2,
                'ob3' => $mentor->ob3,
                'ob4' => $mentor->ob4,
                'ob5' => $mentor->ob5,
                'ob6' => $mentor->ob6,
                'ob7' => $mentor->ob7,
                'ob8' => $mentor->ob8,
                'ob9' => $mentor->ob9,
                    
                'ob10' => $mentor->ob10,
                
                    
                'ob11' => $mentor->ob11,
                'psp' => url('/images/mentor/psp/'.$mentor->psp),
                'citizen' => url('/images/mentor/citizen/'.$mentor->citizen)
                ];
                  $message = "Your Mentor Form  is Pending";
              }
             
          
         
        }
        $response = [
                'data' =>$data,
                'status' => 200,
                'error' => false,
                'message' => $message
            ];
             echo json_encode($response);
        exit();
        
       
    }
    public function pradesh()
    {

        $pradesh = Pradesh::all();
        $data = [];
        if($pradesh)
        {
            foreach($pradesh as $p)
            {
                    $data []= [
                    'name'=>$p->name,
                    'id' =>$p->id
                    ];
            }
        }    
       $response = [
                'data' =>$data,
                'status' => 200,
                'error' => false,
                'message' => 'All Pradesh'
            ];
             echo json_encode($response);
        exit();
    }
    
    
    public function pradeshdistrict(Request $request)
    
    {
         /*
         * url:{{live}}/api/district
         * method: get 
         parm : pradesh_id

         * */
        $district = District::where('pradesh_id',($request->pradesh_id))->get();
      
        $data = [];
        if($district)
        {
            foreach($district as $d)
            {
                    $data []= [
                    'name'=>$d->name,
                    'id' =>$d->id
                    ];

            }
        }
       
        $response = [
                'data' =>$data,
                'status' => 200,
                'error' => false,
                'message' => 'All Pradesh Disrtict'
            ];
             echo json_encode($response);
        exit();
    }
    public function districtvdc(Request $request)
    {
        /*
         * url:{{live}}/api/municipality
         * method: get 
         parm : district_id

         * */
        $district = Municipality::where('district_id',($request->district_id))->get();
      
        $data = [];
        if($district)
        {
            foreach($district as $d)
            {
                    $data []= [
                    'name'=>$d->name,
                    'id' =>$d->id
                    ];
            }
        }
       
        $response = [
                'data' =>$data,
                'status' => 200,
                'error' => false,
                'message' => 'All District Municipality'
            ];
             echo json_encode($response);
        exit();
    }
    
}