@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <section class="sheet padding-10mm cover-page" align="center">
    
    <center>
        <hr style="margin-top: 15px; margin-bottom: 15px;">

        <span style="font-size: 26px; font-weight: bold;">
            गरिखाने फारम विवरण
        </span>
        <hr style="margin-top: 15px; margin-bottom: 15px;">
        <span style="font-size: 12px; font-weight: bold;">
        Submission Date:  {{$userform->created_at->format('Y-m-d')}}
        </span>

    </center>
    <footer style="position: absolute;       bottom: 0;        width: 100%;        font-size: 13px;">
        <table class="no-border" width="100%">
            <tr>
               
                <td align="right" width="33.33%" style="padding-right: 0">
                    1
                </td>
            </tr>
        </table>
    </footer>
</section>

<!-- Page Number 1 -->
<section class="sheet padding-10mm">
    <div class="page-heading">
        १. व्यक्तिगत विवरण
    </div>
    <table class="table table-responsive" width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;font-family: 'Noto Sans';">
        <tr>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                नाम
            </th>
           
            <th  align="left" style="border: 1px solid black; padding: 5px;">
                प्रदेश
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                जिल्ला
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                पालिका
            </th>
            <th  align="left" style="border: 1px solid black; padding: 5px;">
                वडा
            </th>
            <th  align="left" style="border: 1px solid black; padding: 5px;">
                टोल
            </th>
             <th  align="left" style="border: 1px solid black; padding: 5px;">
                सम्पर्क मोबाइल नम्बर
            </th>
            <th  align="left" style="border: 1px solid black; padding: 5px;">
                इमेल
            </th>
            <th  align="left" style="border: 1px solid black; padding: 5px;">
                लिङ्ग
            </th>
            <th  align="left" style="border: 1px solid black; padding: 5px;">
                
            जन्म मिति
            </th>
            <th  align="left" style="border: 1px solid black; padding: 5px;">
                शिक्षा 
            </th>
            <th  align="left" style="border: 1px solid black; padding: 5px;">
                परिवार संख्या
            </th>
            <th  align="left" style="border: 1px solid black; padding: 5px;">
                महिला संख्या
            </th>
            <th  align="left" style="border: 1px solid black; padding: 5px;">
                पुरुष संख्या 
            </th>
            <th  align="left" style="border: 1px solid black; padding: 5px;">
                अन्य संख्या 
            </th>
        </tr>
        <tr>
            <td style="border: 1px solid black; padding: 5px;">
                <b>
                    {{$userform->name}}
                </b>
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                {{$userform->getPradesh->name}}
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                <b>
                    {{$userform->getDistrict->name}}
                </b>
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                {{$userform->getMunicipality->name}}
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                <b>
                    {{$userform->ward}}
                </b>
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                {{$userform->tole}}
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                {{$userform->number}}
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                <b>
                    {{$userform->email}}
                </b>
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                {{$userform->gender}}
            </td>
           
            <td style="border: 1px solid black; padding: 5px;">
                <b>
                    {{$userform->date}}
                </b>
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                {{$userform->education}}
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                {{$userform->family_total}}
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                {{$userform->family_female}}
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                {{$userform->family_male}}
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                {{$userform->family_others}}
            </td>
        </tr>
        
    </table>

</section>

<!-- Page Number 2 -->
<section class="sheet padding-10mm" style="page-break-after: auto;">

<div class="page-heading">
    २. परियोजनासंग सम्बन्धित विवरण
</div>
<table class="table table-responsive" width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;">
    <tr>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            परियोजनाको किसिम
        </th>
        
        <th align="left" style="border: 1px solid black; padding: 5px;">
            परियोजनाको नाम
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            परियोजनाको ठेगाना (प्रदेश)
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            परियोजनाको ठेगाना (जिल्ला)
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            परियोजनाको ठेगाना (पालिका)
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            परियोजनाको ठेगाना (वडा)
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            परियोजनाको ठेगाना (टोल)
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            परियोजनाको उदेश्य
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            परियोजना सुचारु/विस्तार को कारण
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            उत्पादन हुने बस्तु वा सेवा
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            तपाइंको व्यवसाय कुन क्षेत्र अन्तर्गत पर्दछ?
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            आवश्यक कच्चापदार्थ र सो को उपलब्धता
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            आवश्यक सिप/तालिम र सो को उपलब्धता
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            आवश्यक कर्मचारी / कामदार
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            मासिक जम्मा तलब
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            संचालन हुने क्षमता
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            उत्पादन क्षमता
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            व्यवसाय संचालनको कुल लागत
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            (बैंक ऋण)रु.
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            (स्वपूंजी )रु. 
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            (अपेक्षित ब्याजदर ) % 
        </th>        
    </tr>
    <tr>
        <td valign="top" style="border: 1px solid black; padding: 5px;">
            {{$userform->ob2}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob3}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->getBusinessPradesh->name}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->getBusinessDistrict->name}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->getBusinessMunicipality->name}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->business_ward}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->business_tole}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->business_aim}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->business_reason}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob4}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob5}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob7}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob8}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob10}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->total_salary}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob11}}
        </td>
        
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob12}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob13}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob20}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob21}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{ $userform->expected_interest }}
        </td>       
    </tr>
</table>
<br><br>

<div class="page-heading">
    </div>
    <table class="table table-responsive" width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;font-family: 'Noto Sans';">
        <tr>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                उत्पादित बस्तुको बजार 
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                किस्ता र ऋण भुक्तानी प्रक्रिया
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                ऋणको सुरक्षणको लागि रहने धितोको विवरण
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                ऋण को बर्गिकरण
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                उत्पादित बस्तुको बजार
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                के तपाइंले नेपाल सरकारको मापदण्ड अनुरुप वार्षिक अडिट, कर चुक्ताको प्रमाणमात्र र कम्पनीको अध्यावधि नियमित रूपमा गर्नु भएको छ?
                </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                तपाईंको व्यवसाय संचालनमा अरु कुनै समस्या छ?
            </th>
          <th align="left" style="border: 1px solid black; padding: 5px;">
            तपाईंलाई पायक पर्ने बैंकको नाम के हो ?.
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                पायक पर्ने बैंकको शाखा
            </th>
            
        </tr>

            <tr>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$userform->ob16}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$userform->loan_payment_type}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->ob22}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->loan_category}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->ob16}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$userform->ob23}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->ob24}}
                </td>

                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->bank_name}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->bank_branch}}
                </td>
            </tr>
       
    </table>

    <div class="page-heading">
        वार्षिक उत्पादन क्षमता (परिमाण)
        <table class="table table-responsive"  width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;font-family: 'Noto Sans';">
            <tr>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    उत्त्पादित बस्तु
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    परिमाण
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    उत्पादन मूल्य
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    कैफियत
                </th>
            </tr>
            @foreach($userform->yearlyProduction as $production)
            <tr>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$production->product}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$production->qty}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$production->price}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$production->remarks}}
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="page-heading">
        स्थिर पूंजी/सम्पत्ति को विवरण
        <table class="table table-responsive"  width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;font-family: 'Noto Sans';">
            <tr>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    स्थिर सम्पत्ति
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    अनुमानित मूल्य
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    विवरण
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    कैफियत
                </th>
            </tr>
            @foreach($userform->fixedCapital as $fixed_capital)
            <tr>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$fixed_capital->fixed_property}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$fixed_capital->approx_price}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$fixed_capital->details}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$fixed_capital->remarks}}
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="page-heading">
        चालु पूंजी/सम्पत्ति को विवरण
        <table class="table table-responsive"  width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;font-family: 'Noto Sans';">
            <tr>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    चालु सम्पत्ति
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    अनुमानित मूल्य
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    विवरण
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    कैफियत
                </th>
            </tr>
            @foreach($userform->runningCapital as $running_capital)
            <tr>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$running_capital->running_property}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$running_capital->approx_price}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$running_capital->details}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$running_capital->remarks}}
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="page-heading">
        उत्पादनमा लाग्ने प्रति इकाई खर्चको विवरण 
        <table class="table table-responsive"  width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;font-family: 'Noto Sans';">
            <tr>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    नाम
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    अनुमानित मूल्य
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    अनुमानित बार्षिक उत्पादन
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    जम्मा खर्च
                </th>
            </tr>
            @foreach($userform->unitExpense as $expense)
            <tr>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$expense->name}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$expense->approx_price}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$expense->approx_annual_production}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$expense->total_expense}}
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="page-heading">
        बिक्रिबाट हुने प्रति इकाई आम्दानीको विवरण
        <table class="table table-responsive"  width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;font-family: 'Noto Sans';">
            <tr>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    नाम
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    अनुमानित मूल्य
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    अनुमानित बार्षिक बिक्रि
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    जम्मा खर्च
                </th>
            </tr>
            @foreach($userform->unitIncome as $income)
            <tr>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$income->name}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$income->approx_price}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$income->approx_annual_sale}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$income->total_expense}}
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="page-heading">
        बार्षिक संचालन खर्च
        <table class="table table-responsive"  width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;font-family: 'Noto Sans';">
            <tr>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    नाम
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    अनुमानित मूल्य
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    अनुमानित बार्षिक बिक्रि
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    जम्मा खर्च
                </th>
            </tr>
            @foreach($userform->annualOperationCost as $annual_cost)
            <tr>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$annual_cost->name}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$annual_cost->approx_price}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$annual_cost->approx_annual_sale}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$annual_cost->total_expense}}
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="page-heading">
        खरिद गरिने मेशिनरी तथा औजार को विवरण
        @if(count($userform->machinery))
        <table class="table table-responsive"  width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;font-family: 'Noto Sans';">
            <tr>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    मेशिनेरिको नाम
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    लागत
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    उपलब्दता
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    कैफियत
                </th>
            </tr>
            
                @foreach($userform->machinery as $machine)
                <tr>
                    <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                        {{$machine->machine_name}}
                    </td>
                    <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                        {{$machine->total_expense}}
                    </td>
                    <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                        {{$machine->availability}}
                    </td>
                    <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                        {{$machine->remarks}}
                    </td>
                </tr>
                @endforeach
        </table>
        
        @else
        
            <br>!! मेशिनरी आवश्यक नपर्ने !!
        
    @endif
    </div>
    
<br>
<br>    
</section>
<!-- Cover Number -->
</div>
</div>
@endsection