<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Mentor;
use App\Models\Enterprenure;
use App\Models\Municipality;
use App\Models\Karmabhomi;
use App\Models\UserKarmabhomi;
use App\Models\Pradesh;
use App\Models\UserEnterprenure;
use App\Models\UserMentor;
use App\Models\YearlyProduction;
use App\Models\Machinery;
use App\Models\FixedCapital;
use App\Models\RunningCapital;
use App\Models\UnitIncome;
use App\Models\UnitExpense;
use App\Models\AnnualOperationCost;
use Mail;
use App\Libraries\PushNotificationLibrary;
use App\Models\MobileUserAuth;
use App\Mail\KarmabhomiFormSubmission;

use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function entreprenureform()
    {
        if(Auth::user())
        {
            $message ='';
            $districts ='';
            $municipality ='';
            $pradeshs = Pradesh::all();
            
            $enterprenure = Enterprenure::where('user_type','web')->where('user_id',Auth::user()->id)->first();
            
            
          if($enterprenure)
          {
              $rejectstatus = UserEnterprenure::where('enterprenure_id',$enterprenure->id)->where('accept_status',2)->first();
              $acceptstatus = UserEnterprenure::where('enterprenure_id',$enterprenure->id)->where('accept_status',1)->first();
              $pendingstatus = UserEnterprenure::where('enterprenure_id',$enterprenure->id)->where('accept_status',0)->first();
              if($rejectstatus)
            {
                $message = "Your Enterprenure Form has Rejected Please fill the form";
                $pradesh_id = Pradesh::where('name',$enterprenure->pradesh)->first();
                $vdc_id = Municipality::where('name' ,$enterprenure->vdc)->first();
               
                $districts = District::where('pradesh_id',$pradesh_id->id)->get();
                $municipality = Municipality::where('district_id',$vdc_id->district_id)->get();
            }
            elseif($acceptstatus)
            {
                $enterprenure = '';
                $message = "Your Enterprenure Form has Accepted Already";
            }
            elseif($pendingstatus)
            {
                 $message = "Your Enterprenure Form has Rejected Please fill the form";
                $pradesh_id = Pradesh::where('name',$enterprenure->pradesh)->first();
                $vdc_id = Municipality::where('name' ,$enterprenure->vdc)->first();
               
                $districts = District::where('pradesh_id',$pradesh_id->id)->get();
                $municipality = Municipality::where('district_id',$vdc_id->district_id)->get();
                $message = "Your Enterprenure Form  is Pending";
            }
          }
          else
          {
              
    
              
              $enterprenure = '';
          }
            
            
           
           
            return view('newpage.entreprenure')->with(compact('pradeshs','enterprenure','districts','municipality','message'));
        }
        else
        {
            return redirect('/login');
        }
       
       
    }
    public function mentorform()
    {
        if(Auth::user())
        {
            $message ='';
            $districts ='';
            $municipality ='';
            $pradeshs = Pradesh::all();
            $mentor = Mentor::where('user_type','web')->where('user_id',Auth::user()->id)->first();
           
        
          if($mentor)
          {
              
                $rejectstatus = UserMentor::where('mentor_id',$mentor->id)->where('accept_status',2)->first();
                $acceptstatus = UserMentor::where('mentor_id',$mentor->id)->where('accept_status',1)->first();
                $pendingstatus = UserMentor::where('mentor_id',$mentor->id)->where('accept_status',0)->first();
              if($rejectstatus)
            {
            
                $message = "Your Enterprenure Form has Rejected Please fill the form";
                $pradesh_id = Pradesh::where('name',$mentor->pradesh)->first();
                $vdc_id = Municipality::where('name' ,$mentor->vdc)->first();
               
                $districts = District::where('pradesh_id',$pradesh_id->id)->get();
                
                $municipality = Municipality::where('district_id',$vdc_id->district_id)->get();
            }
             elseif($acceptstatus)
                {
                   $mentor = '';
                  $message = "Your Mentor Form Has been Accepted";
              }
              elseif($pendingstatus)
              {
                $pradesh_id = Pradesh::where('name',$mentor->pradesh)->first();
                $vdc_id = Municipality::where('name' ,$mentor->vdc)->first();
               
                $districts = District::where('pradesh_id',$pradesh_id->id)->get();
                
                $municipality = Municipality::where('district_id',$vdc_id->district_id)->get();
                  $message = "Your Mentor Form  is Pending";
              }
             
          }
          else
          {
               $mentor = '';
          }
        
            return view('newpage.mentor')->with(compact('pradeshs','mentor','districts','municipality','message'));
        }
        else
        {
            return redirect('/login');
        }
       
    }

    public function pradeshdistrict(Request $request)
    {
        $district = District::where('pradesh_id',($request->id))->get();
      
        $data = [];
        if($district)
        {
            foreach($district as $d)
            {
                   $data []= [
                    'id' =>$d->id,
                    'name'=>$d->name,
                    ];
            }
        }
        return $data;
    }
    public function districtvdc(Request $request)
    {
        $district = Municipality::where('district_id',($request->id))->get();
      
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
       
        return json_encode($data);
    }
    
    public function karmabhomiform()
    {
        $karmabhomis = Karmabhomi::where('user_id', Auth::id())->latest()->get(); 
        
        if(count($karmabhomis))
            {
                $message = "तपाईले बुझाउनु भएको फारम को विवरण। 
                ";
                return view('newpage.user_karmabhomi_list',compact('karmabhomis', 'message'));
            }else
            {
                $karmabhomi= '';
                $message='';
                $pradeshs = Pradesh::all();
                $districts = '';
                $municipality = '';
                return view('newpage.karmabhomi', compact('karmabhomi', 'message', 'pradeshs','districts','municipality'));
            }
        // if(Auth::user())
        // {
        //     $message ='';
        //     $districts ='';
        //     $municipality ='';
        //     $pradeshs = Pradesh::all();
            
        //     $karmabhomi = Karmabhomi::where('user_type','web')->where('user_id',Auth::user()->id)->get();
           
        
            
        //   if($karmabhomi)
        //   {
        //       $rejectstatus = UserKarmabhomi::where('karmabhomi_id',$karmabhomi->id)->where('accept_status',2)->first();
        //       $acceptstatus = UserKarmabhomi::where('karmabhomi_id',$karmabhomi->id)->where('accept_status',1)->first();
        //       $pendingstatus = UserKarmabhomi::where('karmabhomi_id',$karmabhomi->id)->where('accept_status',0)->first();
        //       if($rejectstatus)
        //     {
        //         $message = "Your karmabhomi Form has Rejected Please fill the form";
        //         $pradesh_id = Pradesh::where('name',$karmabhomi->pradesh)->first();
        //         $vdc_id = Municipality::where('name' ,$karmabhomi->vdc)->first();
               
        //         $districts = District::where('pradesh_id',$pradesh_id->id)->get();
        //         $municipality = Municipality::where('district_id',$vdc_id->district_id)->get();
        //     }
        //     elseif($acceptstatus)
        //     {
        //         $karmabhomi = '';
        //         $message = "Your Form has Accepted Already";
        //     }
        //     elseif($pendingstatus)
        //     {
        //         $message = "Your karmabhomi Form has Rejected Please fill the form";
        //         $pradesh_id = Pradesh::where('name',$karmabhomi->pradesh)->first();
        //         $vdc_id = Municipality::where('id' ,$karmabhomi->vdc)->first();
               
               
        //          $districts = District::where('pradesh_id',$karmabhomi->pradesh)->get();
        //          $municipality = Municipality::where('district_id',$karmabhomi->district)->get();
        //         $message = "Your Form  is Pending";
        //     }
        // return view('newpage.user_karmabhomi_list')->with(compact('pradeshs','karmabhomi','districts','municipality','message'));
        //   }
        //   else
        //   {
              
    
              
        //       $karmabhomi = '';
        //   }
            
            
           
           
        //     return view('newpage.karmabhomi')->with(compact('pradeshs','karmabhomi','districts','municipality','message'));
        // }
        // else
        // {
        //     return redirect('/login');
        // }
       
       
        
    }
    
    public function karmabhomiformsubmission(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=> 'required',
            'tole'=> 'required',
            'email'=> 'required',
            'date'=> 'required',
            'number' => 'required|digits:10',
            'pradesh'=>'required',
            'district'=>'required',
            'vdc'=>'required',
            'ward'=>'required',
            'gender'=>'required',
            'education'=>'required',
            'family_total'=>'required',
            'family_female'=>'required',
            'family_male'=>'required',
            'family_others'=>'nullable',
            'ob2'=>'required',
            'ob3'=> 'required',
            'ob4'=> 'required',
            'business_pradesh'=>'required',
            'business_district'=>'required',
            'business_vdc'=>'required',
            'business_ward'=>'required',
            'business_tole'=>'required',
            'business_aim' =>'required',
            'business_reason'=>'required',
            'ob5'=>'required',
            'loan_payment_type'=>'required',
            'loan_category'=>'required', 
            'ob8'=>'required',
            'ob7'=>'required',
            'ob10'=>'required',
            'total_salary'=>'required',
            'ob11'=>'required',
            'ob13'=>'required',
            'ob16'=>'required',
            'ob20'=>'required',
            'ob21'=>'required',
            'expected_interest'=>'required',
            'ob22'=>'required',
            'bank_name'=>'required',
            'bank_branch'=>'required',
            'ob24'=>'required',
            'machinery.0.machine_name'=>'sometimes|',
            'machinery.0.total_expense'=>'required_with:machinery.0.machine_name|string|nullable',
            'machinery.0.availability'=>'required_with:machinery.0.machine_name|string|nullable',
            'business_field_others'=>'required_if:ob5,अन्य',
            'loan_category_others_text'=>'required_if:loan_category,अन्य',
            'ob24_others_text'=>'required_if:ob24[],अन्य',
        ]);
        if($validator->fails()) { 
            return redirect()->back() //change this to your desired url 
                ->withErrors($validator) 
                ->withInput(); 
        }

        if($request->ob5 == 'अन्य')
        {
            $ob5 = $request->ob5.','.$request->business_field_others;
        }else
        {
            $ob5 = $request->ob5;
        }

        if($request->loan_category == 'अन्य')
        {
            $loan_category = $request->loan_category.','.$request->loan_category_others_text;
        }else
        {
            $loan_category = $request->loan_category;
        }

        if(in_array("अन्य", $request->ob24))
        {
            $ob =implode(",", $request->ob24);
            $ob24 = $ob.'/'.$request->ob24_others_text; 
        }else
        {
            $ob24 = implode(",", $request->ob24);
        }

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
        $eform->ob5 = $ob5;
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
        $eform->loan_category=$loan_category;
        $eform->ob23 = $request->ob23;
        $eform->ob24 = $ob24;
        $eform->bank_name = $request->bank_name;
        $eform->bank_branch = $request->bank_branch;
        $eform->user_id = Auth::user()->id;
        $eform->user_type = 'web';
        $eform->save();
        $userentrep = new UserKarmabhomi();
        $userentrep->user_id = Auth::user()->id;
        $userentrep->user_type = 'web';
        $userentrep->status = '0';
        $userentrep->try_counter = '1';
        $userentrep->karmabhomi_id = $eform->id;
        $userentrep->save();
        foreach($request->yearly_production as $production)
        {
            YearlyProduction::create([
                'karmabhomi_id'=>$eform->id,
                'product'=>$production['product'],
                'qty'=>$production['qty'],
                'price'=>$production['price'],
                'remarks'=>$production['remarks'],
            ]);
        }
      
        foreach($request->fixed_capital as $fixed)
        {
            FixedCapital::create([
                'karmabhomi_id'=>$eform->id,
                'fixed_property'=>$fixed['fixed_property'],
                'approx_price'=>$fixed['approx_price'],
                'details'=>$fixed['details'],
                'remarks'=>$fixed['remarks'],
            ]);
        }
        foreach($request->running_capital as $running)
        {
            RunningCapital::create([
                'karmabhomi_id'=>$eform->id,
                'running_property'=>$running['running_property'],
                'approx_price'=>$running['approx_price'],
                'details'=>$running['details'],
                'remarks'=>$running['remarks'],
            ]);
        }
        foreach($request->unit_expense as $expense)
        {
            UnitExpense::create([
                'karmabhomi_id'=>$eform->id,
                'name'=>$expense['name'],
                'approx_price'=>$expense['approx_price'],
                'approx_annual_production'=>$expense['approx_annual_production'],
                'total_expense'=>$expense['total_expense'],
            ]);
        }
        foreach($request->unit_income as $income)
        {
            UnitIncome::create([
                'karmabhomi_id'=>$eform->id,
                'name'=>$income['name'],
                'approx_price'=>$income['approx_price'],
                'approx_annual_sale'=>$income['approx_annual_sale'],
                'total_expense'=>$income['total_expense'],
            ]);
        }
        foreach($request->annual_operation_cost as $annual_cost)
        {
            AnnualOperationCost::create([
                'karmabhomi_id'=>$eform->id,
                'name'=>$annual_cost['name'],
                'approx_price'=>$annual_cost['approx_price'],
                'approx_annual_sale'=>$annual_cost['approx_annual_sale'],
                'total_expense'=>$annual_cost['total_expense'],
            ]);
        }
        if(!is_null($request->machinery['0']['machine_name']))
        {
            foreach($request->machinery as $machine)
            {
            Machinery::create([
                'karmabhomi_id'=>$eform->id,
                'machine_name'=>$machine['machine_name'],
                'total_expense'=>$machine['total_expense'],
                'availability'=>$machine['availability'],
                'remarks'=>$machine['remarks'],
                ]);
            }
        }
        $users = MobileUserAuth::where('user_id', Auth::id())->whereNotNull('fcm_token')->first();
        if(!is_null($users))
        {
           PushNotificationLibrary::SpecificUserNotification($users, 'Garikhanne', ' Thank You for submitting the form', 1, 'main', 'default', 'Form Submission', $eform->id); 
           
        }    
        return redirect('garikhane-app-form')->with('success', 'धन्यवाद, तपाइको बिवरण हामीले प्राप्त गर्यौ।');

    }
    
    public function karmabhomiformsubmissionupdate($id,Request $request)
    {
       
        $pendingstatus = UserKarmabhomi::where('karmabhomi_id',$id)->where('user_type','web')->where('user_id',Auth::user()->id)->where('status',1)->first();
        if($pendingstatus)
        {
            $request->session()->flash('success','Form has already accepted');
            return redirect('karmabhomi');
        }
      
        $eform = Karmabhomi::findOrFail($id);
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
        $eform->user_id = Auth::user()->id;
        $eform->user_type = 'web';
        $e = $eform->save();
        $try_counter =  UserKarmabhomi::where('karmabhomi_id',$id)->first();
        UserKarmabhomi::where('karmabhomi_id',$id)->update([
            'status' => 0,
            'accept_status' => 0,
            'try_counter' => $try_counter->try_counter + 1 
            
            ]);
       
        $request->session()->flash('success','तपाइको बिवरण हामीले प्राप्त गर्यौ धन्यवाद। ');
        return redirect('garikhane-app-form');
    }

    public function getKarmabhomiForm()
    {
        $karmabhomi= '';
        $message='';
        $pradeshs = Pradesh::all();
        $districts = '';
        $municipality = '';
        return view('newpage.karmabhomi', compact('karmabhomi', 'message', 'pradeshs','districts','municipality'));
        return view('newpage.karmabhomi');
    }
}