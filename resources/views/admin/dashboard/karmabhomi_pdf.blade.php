<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
        <link href="{{asset('panel/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

        <style>
            body {
                overflow-x: hidden;
            }

            .page-break {
                margin-bottom: 60px;
            }

            div {
                display: inline-block;
            }

            input {
                height: 45px;

            }

            .name {
                width: 1100px;
            }

            textarea {
                width: 1200px;
                height: 100px;
            }

            li {
                display: inline-flex;
                float: left;
            }

            .checkbox {
                height: 25px;
                width: 25px;
            }

            ul {
                width: 100%;
            }

            .thegana input {
                width: 250px;
            }

            .samparka .mobile {
                width: 250px;
            }

            .samparka .email {
                width: 565px;
            }

            .margin {
                margin-left: 125px;
            }

            .margin1 {
                margin-left: 250px;
            }

            .marginright {
                margin-right: 400px;
            }

            .sewa {
                width: 1100px;
            }

            .table {
                width: 95%;
                margin: 0 30px 10px 30px;
            }

            .tbody::after {
                page-break-after: always;
                page-break-inside: avoid;
                page-break-before: avoid;
            }

            .xamata,
            .laagat {
                max-width: 250px;
            }

            .marginmany {
                margin-left: 400px;
            }

            .note {
                display: block;
                justify-content: center;
                border-bottom: 3px solid gray;
            }

            .bg-black {
                margin-top: 20px;
                background-color: black;
                color: white;
                width: 100%;
                text-align: center;
                align-items: center;
            }

            .header {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                border-bottom: 2px solid grey;
            }

            .jaankaari {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .listing {
                list-style-type: disc;
            }

            .logo1 {
                margin-bottom: 5px;
            }

            input.full-width {
                width: 751px;
                margin-bottom: 5px;
            }

            .pt-1 {
                color: white;
            }
        </style>
    </head>

    <body>
        <div class="container-fluid">

            <div class=" col-md-12">
                <header>
                    <div class="header">
                        <div class="logo1">
                            <img src="/front/assets/images/Karmabhoomi Logo.JPG" width="200px">

                        </div>
                        <div class="title text-center">
                            <h2>
                                <b> गरिखाने अभियान <br> व्यवसाय सन्चालन आवेदन फारम</b>

                            </h2>
                        </div>
                        <div class="logo2">
                            <img src="/front/assets/images/logo-Garikhane_Final.png" width="200px">
                        </div>
                    </div>
                </header>
            </div>
            <form action="">


                <div class=" col-md-12 ">
                    <h3 class="m-2"> <b>व्यक्तिगत बिवरण </b></h3>

                    <div>


                        <ul>

                            <h3> (१)नाम : &nbsp; &nbsp; &nbsp; {{ $userform->name }}</h3>

                        </ul>
                    </div>
                    <div>
                        <ul class="thegana">
                            <li>
                                <h3>(२) ठेगाना : &nbsp; &nbsp; &nbsp;</h3>
                            </li>

                        </ul>

                        <table class="table table-bordered col-md-12 col-lg-12 ml-5">

                            <tbody>
                                <tr>
                                    <th style="width: 200px;">टोल:</th>

                                    <td style="width: 1000px;">{{ $userform->tole }}</td>

                                </tr>
                                <tr>
                                    <th style="width: 200px;">पालिका:</th>

                                    <td style="width: 1000px;">{{ $userform->getMunicipality->name }}</td>

                                </tr>
                                <tr>
                                    <th style="width: 200px;">वडा नं.:</th>

                                    <td style="width: 1000px;">{{ $userform->ward }}</td>

                                </tr>
                                <tr>
                                    <th style="width: 200px;">जिल्ला:</th>

                                    <td style="width: 1000px;">{{ $userform->getDistrict->name }}</td>

                                </tr>
                                <tr>
                                    <th style="width: 200px;">प्रदेश:</th>

                                    <td style="width: 1000px;">{{ $userform->getPradesh->name }}</td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div>
                        <ul class="samparka">
                            <li>
                                <h3>(३) सम्पर्क : &nbsp; &nbsp; &nbsp;</h3>
                            </li>

                            <li class="mr-4">
                                <h3> मोबाईल: &nbsp; <input type="text" class="mobile" value="{{ $userform->number }}"
                                        disabled></h3>
                            </li>
                            <li class="mr-4">
                                <h3> ई-मेल: &nbsp; <input type="text" class="email" value="{{ $userform->email }}"
                                        disabled></h3>
                            </li>

                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <h3>(४) लिंग : &nbsp; &nbsp; &nbsp;</h3>
                            </li>
                            <li class="mr-4">
                                <h3><input type="checkbox" class="checkbox"
                                        {{ ($userform->gender == 'महिला')? 'checked': 'disabled' }}> महिला </h3>
                            </li>
                            <li class="mr-4">
                                <h3><input type="checkbox" class="checkbox"
                                        {{ ($userform->gender == 'पुरुष')? 'checked': 'disabled' }}>&nbsp; पुरुष </h3>
                            </li>
                            <li class="mr-4">
                                <h3><input type="checkbox" class="checkbox"
                                        {{ ($userform->gender == 'अन्य')? 'checked': 'disabled' }}>&nbsp; अन्य </h3>
                            </li>

                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <h3>(५)जन्म मिति (वि. सं.) &nbsp; &nbsp; &nbsp;</h3>

                            </li>
                            <li>
                                <h3><input class="marginright " type="text" value="{{ $userform->date }}" disabled></h3>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <h3>(६) शैक्षिक योग्यता : &nbsp; &nbsp; &nbsp;</h3>
                            </li>
                            <li class="mr-4">
                                <h3><input type="checkbox" class="checkbox"
                                        {{ ($userform->education == 'साधारण लेखपढ')? 'checked': 'disabled' }}>&nbsp;
                                    साधारण
                                    लेखपढ </h3>
                            </li>
                            <li class="mr-4 ">
                                <h3><input type="checkbox" class="checkbox "
                                        {{ ($userform->education == '१० कक्षासम्म')? 'checked': 'disabled' }}>&nbsp; १०
                                    कक्षा
                                    सम्म </h3>
                            </li>
                            <li class="mr-4 ">
                                <h3><input type="checkbox" class="checkbox " {{ ($userform->education == '१२ कक्षासम्म')?
                                    'checked' :  'disabled' }}>&nbsp; १२ कक्षा सम्म </h3>
                            </li>
                            <li class=" margin1 ">
                                <h3><input type="checkbox" class="checkbox " {{ ($userform->education == 'स्नातक')?
                                    'checked': 'disabled' }}>&nbsp;स्नातक</h3>
                            </li>
                            <li class="ml-4">
                                <h3><input type="checkbox" class="checkbox " {{ ($userform->education == 'स्नातकोत्तर वा
                                    अधिक')? 'checked': 'disabled' }}>&nbsp; स्नातकोत्तर वा सो भन्दा माथि &nbsp;</h3>
                            </li>
                            <li class="mr-4 ">
                                <h3><input type="checkbox" class="checkbox " {{ ($userform->education == 'सी. टि.ई.भी.
                                    टि. अन्तर्गत मान्यता प्राप्त')? 'checked' : 'disabled' }}> सी. टि.ई.भी. टि.
                                    अन्तर्गत मान्यता
                                    प्राप्त </h3>
                            </li>
                        </ul>
                    </div>


                    <h3 class="m-2"> <b>व्यवसायसम्बन्धी बिवरण </b></h3>
                    <div>
                        <ul>
                            <li>
                                <h3>(१)व्यवसायको किसिम: &nbsp; &nbsp; &nbsp;</h3>
                            </li>
                            <li class="mr-4">
                                <h3><input type="checkbox" class="checkbox"
                                        {{ ($userform->ob2 == 'नयाँ उद्योग/व्यवसाय स्थापना')? 'checked' : 'disabled'  }}>&nbsp;नयाँ
                                    उद्योग/व्यवसाय स्थापना </h3>
                            </li>
                            <li class="mr-4 ">
                                <h3><input type="checkbox" class="checkbox "
                                        {{ ($userform->ob2 == 'पुरानो उद्योग/व्यवसाय विस्तार')? 'checked' : 'disabled'  }}>&nbsp;
                                    पुरानो उद्योग/व्यवसाय
                                    विस्तार</h3>
                            </li>

                        </ul>
                    </div>
                    <div>


                        <ul>

                            <h3>(२)व्यवसायको नाम : &nbsp; &nbsp; &nbsp; <input type="text" class="name margin"
                                    value="{{ $userform->ob3 }}" disabled></h3>

                        </ul>
                    </div>
                    <div>
                        <ul class="thegana">
                            <li>
                                <h3>(२) ठेगाना : &nbsp; &nbsp; &nbsp;</h3>
                            </li>

                        </ul>

                        <table class="table table-bordered col-md-12 col-lg-12 ml-5">

                            <tbody>
                                <tr>
                                    <th style="width: 200px;">टोल:</th>

                                    <td style="width: 1000px;">{{ $userform->business_tole }}
                                    </td>

                                </tr>
                                <tr>
                                    <th style="width: 200px;">पालिका:</th>

                                    <td style="width: 1000px;">
                                        {{ $userform->getBusinessMunicipality->name }}</td>

                                </tr>
                                <tr>
                                    <th style="width: 200px;">वडा नं.:</th>

                                    <td style="width: 1000px;">{{ $userform->business_ward }}
                                    </td>

                                </tr>
                                <tr>
                                    <th style="width: 200px;">जिल्ला:</th>

                                    <td style="width: 1000px;">
                                        {{ $userform->getBusinessDistrict->name }}</td>

                                </tr>
                                <tr>
                                    <th style="width: 200px;">प्रदेश:</th>

                                    <td style="width: 1000px;">
                                        {{ $userform->getBusinessPradesh->name }}</td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div>


                        <ul>

                            <h3>(४)उद्धेश्य : &nbsp; &nbsp; &nbsp; <textarea name="" id="" cols="40" rows="15"
                                    disabled>{{ $userform->business_aim }}</textarea></h3>

                        </ul>
                    </div>
                    <div class="page-break">


                        <ul>

                            <h3>(५)सुचारु वा विस्तार गर्नको कारण : &nbsp; &nbsp; &nbsp; <textarea name="" id=""
                                    cols="40" rows="10" disabled>{{ $userform->business_reason }}</textarea></h3>

                        </ul>
                    </div>
                    <div>


                        <ul>

                            <h3>(६)उत्पादनहुने वस्तु वा सेवा: &nbsp; &nbsp; &nbsp; <input type="text"
                                    class="sewa margin" value="{{ $userform->ob4 }}" disabled></h3>

                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <h3>(७) व्यवसायको क्षेत्र : &nbsp; &nbsp; </h3>
                            </li>
                            <li class="mr-4">
                                <h3><input type="checkbox" class="checkbox" {{ ($userform->ob5 == 'कृषि')?  'checked':'disabled'
                                 }}>&nbsp; कृषि</h3>
                            </li>
                            <li class="mr-4 ">
                                <h3><input type="checkbox" class="checkbox "
                                        {{ ($userform->ob5 == 'उत्पादन तथा प्रसोधन')? 'checked': 'disabled'  }}>&nbsp;
                                    उत्पादन तथा प्रसोधन </h3>
                            </li>
                            <li class="mr-4 ">
                                <h3><input type="checkbox" class="checkbox " {{ ($userform->ob5 == 'शिक्षा')? 'checked':'disabled'
                                     }}>&nbsp; शिक्षा</h3>
                            </li>
                            <li class="mr-4 ">
                                <h3><input type="checkbox" class="checkbox " {{ ($userform->ob5 == 'पर्यटन')? 'checked':'disabled'
                                     }}>&nbsp;पर्यटन</h3>
                            </li>
                            <li class="mr-4 ">
                                <h3><input type="checkbox" class="checkbox "
                                        {{ ($userform->ob5 == 'सेवा उन्मुख व्यवसाय')? 'checked': 'disabled' }}>&nbsp;सेवा
                                    उन्मुख व्यवसाय</h3>
                            </li>
                            <li class="margin1 ">
                                <h3><input type="checkbox" class="checkbox "
                                        {{ ($userform->ob5 == 'विज्ञान तथा प्रविधि')? 'checked':'disabled'  }}>&nbsp;
                                    बिज्ञान तथा प्रविधि</h3>
                            </li>
                            <li class="ml-4 ">
                                <h3><input type="checkbox" class="checkbox " {{ ($userform->ob5 == 'सूचना तथा संचार')?
                                    'checked': 'disabled'  }}>&nbsp;सुचना तथा संचार</h3>
                            </li>
                            <li class="margin1 ">
                                <h3><input type="checkbox" class="checkbox " {{ (str_contains($userform->ob5, 'अन्य'))?
                                    'checked': 'disabled' }}> @if(str_contains($userform->ob5,
                                    'अन्य')){{ $userform->ob5 }} @else
                                    अन्य @endif</h3>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <h3>(८) वार्षिक उत्पादन क्षमता : &nbsp; &nbsp; &nbsp;</h3>

                            </li>
                        </ul>
                    </div>
                    <table class="table table-bordered col-md-12 col-lg-12">
                        <thead>
                            <tr>

                                <th scope="col">क्र.सं</th>
                                <th scope="col">उत्पादित वस्तु वा सेवा</th>
                                <th scope="col">परिमाण</th>
                                <th scope="col">उत्पादन मूल्य</th>

                                <th scope="col">कैफियत</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userform->yearlyProduction as $production)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $production->product }}</td>
                                <td>{{ $production->qty}}</td>
                                <td>{{ $production->price }}</td>
                                <td>{{ $production->remarks }}</td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        <ul>

                            <h3>(९)आवश्यक सीप / तालिम र सो को उपलब्दता: &nbsp; &nbsp; &nbsp; <input type="text"
                                    class="sewa margin" value="{{ $userform->ob8 }}" disabled></h3>

                        </ul>
                    </div>
                    <div>
                        <ul>

                            <h3>(१०)आवश्यक कच्चा पदार्थ र सो को उपलब्दता: &nbsp; &nbsp; &nbsp; <input type="text"
                                    class="sewa margin" value="{{ $userform->ob7 }}" disabled></h3>

                        </ul>
                    </div>
                    <div>
                        <ul>

                            <li class="mr-4">
                                <h3>(११) आवश्यक कर्मचारी/कामदार: &nbsp; <input class="margin" type="text" width="300px"
                                        value="{{ $userform->ob10 }}" disabled></h3>
                            </li>
                            <li class="mr-4 margin ">
                                <h3> मासिक तलब: &nbsp; <input type="text" value="{{ $userform->total_salary }}"
                                        disabled></h3>
                            </li>

                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <h3>(१२)व्यवसायिक क्षमता: &nbsp; &nbsp; &nbsp;</h3>
                            </li>
                            <li class="mr-4">
                                <h3>सन्चालन क्षमता : &nbsp;<input type="text" class="xamata"
                                        value="{{ $userform->ob11 }}" disabled> </h3>
                            </li>
                            <li class="mr-4 ">
                                <h3> उत्पादन क्षमता : &nbsp;<input type="text" class="xamata"
                                        value="{{ $userform->ob12 }}" disabled></h3>
                            </li>

                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <h3>(१३)व्यवसाय सन्चालनको कुल लागत: &nbsp; &nbsp; &nbsp;</h3>
                            </li>
                            <li>
                                <h3> <input type="text" class="full-width" value="{{ $userform->ob13 }}" disabled>
                                </h3>
                            </li>
                            <li class="mr-4">
                                <h3>स्वपूंजी : &nbsp;<input type="text" class="laagat" value="{{ $userform->ob21 }}"
                                        disabled>
                                </h3>
                            </li>
                            <li class="mr-4 ">
                                <h3> बैंक ऋण : &nbsp;<input type="text" class="laagat" value="{{ $userform->ob20}}"
                                        disabled>
                                </h3>
                            </li>
                            <li class="mr-4   marginmany">
                                <h3> &nbsp; &nbsp; अपेछित ब्याजदर (%): &nbsp;<input type="text" class="laagat"
                                        value="{{ $userform->expected_interest }}" disabled></h3>
                            </li>

                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <h3>(१४) किस्ता र ऋण भुक्तानी प्रक्रिया : &nbsp; &nbsp; &nbsp;</h3>
                            </li>
                            <li class="mr-4">
                                <h3><input type="checkbox" class="checkbox" {{ ($userform->loan_payment_type == 'मासिक')?
                                    'checked' : 'disabled'   }}>&nbsp; मासिक</h3>
                            </li>
                            <li class="mr-4 ">
                                <h3><input type="checkbox" class="checkbox " {{ ($userform->loan_payment_type ==
                                    'त्रैमासिक')? 'checked':'disabled' }}>&nbsp; त्रैमासिक</h3>
                            </li>
                        </ul>
                    </div>
                    <div>


                        <ul>

                            <h3>(१५)ऋणको सुरक्षणको लागि रहने धितोको बिवरण : &nbsp; &nbsp; &nbsp; <input type="text"
                                    class="name ml-5" value="{{ $userform->ob22 }}" disabled></h3>

                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <h3>(१६) वर्गीकरण : &nbsp; &nbsp; &nbsp;</h3>
                            </li>
                            <li class="mr-4">
                                <h3><input type="checkbox" class="checkbox" {{ ($userform->loan_category == 'कृषि' )?
                                    'checked' :'disabled' }}>&nbsp; कृषि</h3>
                            </li>
                            <li class="mr-4 ">
                                <h3><input type="checkbox" class="checkbox " {{ ($userform->loan_category == 'महिला' )?
                                    'checked' : 'disabled'  }}>&nbsp; महिला</h3>
                            </li>
                            <li class="mr-4 ">
                                <h3><input type="checkbox" class="checkbox "
                                        {{ ($userform->loan_category == 'दलित' )?'checked' : 'disabled'  }}>&nbsp; दलित
                                </h3>
                            </li>
                            <li class="mr-4 ">
                                <h3><input type="checkbox" class="checkbox " {{ ($userform->loan_category == 'बिदेशबाट
                                    फर्किएको' )?'checked' : 'disabled'  }}>&nbsp; बिदेशबाट फर्किएको</h3>
                            </li>
                            <li class="mr-4 ">
                                <h3><input type="checkbox" class="checkbox " {{ ($userform->loan_category == 'शिक्षित
                                    युवा' )? 'checked' : 'disabled'  }}>&nbsp; शिक्षित युवा</h3>
                            </li>
                            <li class="margin ">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <h3><input type="checkbox" class="checkbox " {{ (str_contains($userform->loan_category,
                                    'अन्य'))? 'checked' :'disabled' }}>&nbsp;@if(str_contains($userform->loan_category,
                                    'अन्य'))
                                    {{ $userform->loan_category }}@else अन्य @endif </h3>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <h3>(१७) खरिद गर्ने मेशिनरी तथा औजारको बिवरण (आवश्यक पर्ने भए मात्र उल्लेख गर्ने) :
                                    &nbsp; &nbsp; &nbsp;</h3>

                            </li>
                        </ul>
                    </div>
                    <table class="table table-bordered col-md-12 col-lg-12">
                        <thead>
                            <tr>

                                <th scope="col">क्र.सं</th>
                                <th scope="col">मेशिनरीको नाम</th>
                                <th scope="col">लागत</th>
                                <th scope="col">उपलब्धता</th>
                                <th scope="col">कैफियत</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userform->machinery as $machine)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $machine->machine_name }}</td>
                                <td>{{ $machine->total_expense }}</td>
                                <td>{{ $machine->availability }}</td>
                                <td>{{ $machine->remarks }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div>
                        <ul>
                            <li>
                                <h3>(१८) स्थिर सम्पतिको बिवरण : &nbsp; &nbsp; &nbsp;</h3>

                            </li>
                        </ul>
                    </div>
                    <table class="table table-bordered col-md-12 col-lg-12">
                        <thead>
                            <tr>

                                <th scope="col">क्र.सं</th>
                                <th scope="col">स्थिर सम्पति</th>
                                <th scope="col">अनुमानित मूल्य</th>
                                <th scope="col">बिवरण</th>

                                <th scope="col">कैफियत</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userform->fixedCapital as $fixed_capital)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $fixed_capital->fixed_property }}</td>
                                <td>{{ $fixed_capital->approx_price }}</td>
                                <td>{{ $fixed_capital->details }}</td>
                                <td>{{ $fixed_capital->remarks }}</td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        <ul>
                            <li>
                                <h3>(१९) चालु सम्पतिको बिवरण : &nbsp; &nbsp; &nbsp;</h3>

                            </li>
                        </ul>
                    </div>
                    <table class="table table-bordered col-md-12 col-lg-12 page-break">
                        <thead>
                            <tr>

                                <th scope="col">क्र.सं</th>
                                <th scope="col">चालु सम्पति</th>
                                <th scope="col">अनुमानित मूल्य</th>
                                <th scope="col">बिवरण</th>
                                <th scope="col">कैफियत</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userform->runningCapital as $running_capital)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $running_capital->running_property }}</td>
                                <td>{{ $running_capital->approx_price }}</td>
                                <td>{{ $running_capital->details }}</td>
                                <td>{{ $running_capital->remarks }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="page2-break">
                        <p></p>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <h3>(२०) वस्तु / सेवामा लाग्ने प्रतिइकाईको खर्चको बिवरण : &nbsp; &nbsp; &nbsp;</h3>

                            </li>
                        </ul>
                    </div>
                    <table class="table table-bordered col-md-12 col-lg-12 page-break">
                        <thead>
                            <tr>

                                <th scope="col">क्र.सं</th>
                                <th scope="col">&nbsp;नाम &nbsp;</th>
                                <th scope="col">अनुमानित मूल्य</th>
                                <th scope="col">अनुमानित बार्षिक उत्पादन</th>
                                <th scope="col">जम्मा खर्च</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userform->unitExpense as $expense)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $expense->name }}</td>
                                <td>{{ $expense->approx_price }}</td>
                                <td>{{ $expense->approx_annual_production }}</td>
                                <td>{{ $expense->total_expense }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        <ul>
                            <li>
                                <h3>(२१)उत्पादित वस्तु/सेवाको बिक्रिबाट हुने प्रतिइकाईको आम्दानिको बिवरण : &nbsp; &nbsp;
                                    &nbsp;</h3>

                            </li>
                        </ul>
                    </div>
                    <table class="table table-bordered col-md-12 col-lg-12 ">
                        <thead>
                            <tr>

                                <th scope="col">क्र.सं</th>
                                <th scope="col">&nbsp;नाम &nbsp;</th>
                                <th scope="col">अनुमानित मूल्य</th>
                                <th scope="col">अनुमानित बार्षिक बिक्रि</th>
                                <th scope="col">जम्मा खर्च</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userform->unitIncome as $income)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $income->name }}</td>
                                <td>{{ $income->approx_price }}</td>
                                <td>{{ $income->approx_annual_sale }}</td>
                                <td>{{ $income->total_expense }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        <ul>
                            <li>
                                <h3>(२२) बार्षिक सन्चालनको खर्चको बिवरण : &nbsp; &nbsp; &nbsp;</h3>

                            </li>
                        </ul>
                    </div>
                    <table class="table table-bordered col-md-12 col-lg-12">
                        <thead>
                            <tr>

                                <th scope="col">क्र.सं</th>
                                <th scope="col">&nbsp;नाम &nbsp;</th>
                                <th scope="col">अनुमानित खर्च</th>
                                <th scope="col">अनुमानित बार्षिक सन्चालन खर्च</th>
                                <th scope="col">जम्मा खर्च</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userform->annualOperationCost as $cost)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $cost->name }}</td>
                                <td>{{ $cost->approx_price}}</td>
                                <td>{{ $cost->approx_annual_sale }}</td>
                                <td>{{ $cost->total_expense }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div>


                        <ul>

                            <h3>(२३)उत्पादित वस्तु/सेवाको बजार : &nbsp; &nbsp; &nbsp;<textarea name="" id="" cols="30"
                                    rows="10" disabled>{{ $userform->ob16 }}</textarea></h3>

                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <h3>(२४) नेपाल सरकारको मापदण्ड अनुरुप बार्षिक अडिट, कर चुक्ताको प्रमाणपत्र र कम्पनीको
                                    अध्यावधिक गर्नु भएको छ? (सन्चालनमा रहेको व्यवसाय भए मात्र भर्नु होला) : &nbsp;
                                    &nbsp; &nbsp;</h3>
                            </li>
                            <li class="mr-4">
                                <h3><input type="checkbox" class="checkbox"
                                        {{ ($userform->ob23 == 'छ')?  'checked': 'disabled' }}>&nbsp; छ</h3>
                            </li>
                            <li class="mr-4 ">
                                <h3><input type="checkbox" class="checkbox" {{ ($userform->ob23 == 'छैन')? 'checked':'disabled'
                                     }}>&nbsp; छैन</h3>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <h3>(२५) व्यवसाय सन्चालनमा कुनै समस्या छ? : &nbsp; &nbsp; &nbsp;</h3>
                            </li>
                            <h3><textarea disabled>{{ $userform->ob24 }}</textarea></h3>
                        </ul>
                    </div>
                    <div>
                        <ul>

                            <h3>(२६)पायक पर्ने बैंकको नाम : &nbsp; &nbsp; &nbsp; <input type="text" class="name margin"
                                    value="{{ $userform->bank_name }}" disabled></h3>

                        </ul>
                    </div>
                    <div>


                        <ul>

                            <h3 class="margin">साखा : &nbsp; &nbsp; &nbsp; <input type="text" class="name"
                                    value="{{ $userform->bank_branch }}" disabled></h3>

                        </ul>
                    </div>
                    <div class="m-5" style="display: flex; justify-content: space-between;">

                        <h3>
                            आवेदकको हस्ताक्षर<input class="text" value="{{ $userform->name }}" disabled> &nbsp; &nbsp;
                            &nbsp;
                            &nbsp;
                        </h3>

                        <h3>
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; मिति <input class="date"
                                value="{{ $userform->created_at->format('F, j, Y') }}" disabled>
                        </h3>

                    </div>
                    <div class="mt-3 mb-5 note">

                        <h4>
                            <I>नोट: व्यवसाय विस्तारको लागि दर्ता कागज, कर चुक्ता प्रमाणपत्र, अडिट रिपोर्ट पेश गर्नुपर्ने
                                छ!!</I>
                        </h4>


                    </div>

                    <div class="bg-black mb-3">
                        <h3 class="pt-1"> उद्धेश्य</h3>
                    </div>
                    <div class="listing">
                        <ul>
                            <li style="display:list-item">
                                <h5>
                                    सम्भावित उद्धमी, नवीन उद्धमी तथा विस्तार/वृद्धिको सम्भावना बोकेका उद्धमीको पहिचान
                                    गर्ने ।</h5>
                            </li>
                            <br>
                            <li style="display:list-item">
                                <h5>
                                    पहिचान गरिएको सम्भावित उद्धमी, नवीन उद्धमी तथा उद्धमी, व्यवसायीलाई बैंक तथा बित्तिय
                                    संस्था, लगानीकर्ता, सरकार, र विकास साझेदारहरुसँग जोड्ने । </h5>
                            </li>
                            <br>
                            <li style="display:list-item">
                                <h5>
                                    उद्धमी, उद्धमी लगानी तथा लगानीकर्ताको समन्वय हुने आधार निर्माण गर्ने ।
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </h5>
                            </li>
                            <br>
                            <li style="display:list-item">
                                <h5>
                                    विदेश / वैदेशिक रोजगारी बाट फर्केका युवालाई उद्धमशिलता सुरु गर्न प्रोत्साहन
                                    गर्ने।&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </h5>
                            </li>
                            <br>
                            <li style="display:list-item">
                                <h5>
                                    बेरोजगार युवालाई रोजगारीको अवसर, ज्ञान तथा सीप एवं श्रोतसँग जोड्न समन्वय गर्ने।</h5>
                            </li>


                            <br>
                            <br>
                            <br>
                            <h5 class="mt-3 mb-5 note">
                                यस पृष्ठभुमि र उद्देश्य अनुरुप, हामीले सातै प्रदेशबाट सम्भाव्य उद्धमी, व्यवसायीहरुको
                                खोजी गरिरहेका छौ । कृषि र यससंग सम्बन्धित परियोजना, उत्पादनमुलक क्षेत्र, पर्यटन,
                                प्रविधि, शिक्षा, स्वास्थ्य तथा अन्य क्षेत्रका परियोजनाहरुका लागि आवेदन दिन सकिने छ।
                            </h5>
                        </ul>
                    </div>
                    <div class="bg-black mb-3">
                        <h3 class="pt-1"> कार्यक्रमहरु छनोट गर्दा निम्न विषयमा ध्यान दिइनेछ।</h3>
                    </div>
                    <div class="listing">
                        <ul>
                            <li style="display:list-item">
                                <h5>
                                    एउटा उद्धमीको रुपमा उद्धम, उद्धमशीलता को यात्रालाई नेतृत्व दिनसक्ने, सुदृढ,
                                    प्रतिबद्ध व्यक्ति हुनुपर्नेछ। </h5>
                            </li>
                            <br>
                            <li style="display:list-item">
                                <h5>
                                    उद्धम/व्यवसाय- सन्चालनको अनुभव भएका र यस सम्बन्धी सीप तथा ज्ञान भएकाहरुलाई
                                    प्राथमिकता दिइनेछ।</h5>
                            </li>
                            <br>
                            <li style="display:list-item">
                                <h5>
                                    इको सिस्टम (पारीस्थितिकी)- यहाँको समुदायसँग काम गर्ने मूल्य शृंखलाका हरेक पक्षसँग
                                    सुदृढ सम्बन्ध भएको हुनुपर्नेछ। </h5>
                            </li>
                            <br>
                            <li style="display:list-item">
                                <h5>
                                    अर्थतन्त्रमा योगदान- परियोजना/ स्टार्ट अप्स (सानो व्यवसायको सुरुवात गर्ने) आकर्षक र
                                    उच्च वृद्धि/विस्तारको सम्भावना, रोजगारी सिर्जना गर्ने, र सरकारले प्राथमिकीकरण गरेको
                                    उत्पादनमुलक क्षेत्र हुदा राम्रो हुन्छ।</h5>
                            </li>


                            <br>
                            <br>
                            <br>
                            <div class="mt-3 mb-5 note">

                                <h4>
                                    <b> <I>नोट: यो अभियान उद्धमशील बन्न चाहाने व्यक्ति वा समुहहरूलाई उद्धमशील बनाउने
                                            कार्यमा सहयोगी संस्था मात्र हो ।
                                            यसले गरिखाने कार्यक्रम (व्यवसाय) का निम्ति आवश्यक ऋण उपलब्ध गराउनका निमित्त
                                            बैंक तथा बित्तिय\ संस्थासँग समन्वय गराइदिनुका साथै आवश्यक कानुनी कागजात तयार
                                            गरिदिने, तालिम दिने तथा व्यबस्थापनि कार्यमा सहयोग गर्दछ।
                                        </I></b>
                                </h4>


                            </div>
                        </ul>
                    </div>
                    <div class="bg-black mb-3">
                        <h3 class="pt-1"> आवश्यक जानकारीको लागि सम्पर्क </h3>
                    </div>
                    <div class="jaankaari">

                        <h6> <b>टेलिफोन : ९८४१९५०४५८, ई-मेल :gareekhane@gmail.com</b>
                        </h6>




                        <h6><b>
                                अनलाइन आबेदन फारम भर्न कृपया तलको लिंक मा क्लिक गर्नुहोला।</b>
                        </h6>


                        <b>
                            <h6>https://www.garikhane.com/garikhane-app-form</h6>
                        </b>

                    </div>
                </div>
            </form>
        </div>

        <script type="text/javascript" src="/asset/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
        window.print();
    });
        </script>
    </body>

</html>