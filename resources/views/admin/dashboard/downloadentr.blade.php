<!DOCTYPE html>
<html>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Yantramanav&display=swap" rel="stylesheet">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$userform->name}} {{$userform->created_at->format('Y-m-d')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700');

    .sheet {
        page-break-after: always;
        width: 100%;
        size: A3;
    }

    @media print {
        * {
            padding: 0;
            margin: 0;
        }

        html, body {
            width: 420mm;
            height: 297mm;
        }

        body {
            font-family: 'Noto Sans', sans-serif;
            width: 420mm;
            height: 297mm;
            color: black;
        }

        .heading {
            font-size: 20px;
            margin-top: 60px;
            font-weight: bold;
            text-align: center;
        }

        .heading .bordered {
            border-top: 3px solid black;
            border-bottom: 3px solid black;
            padding-top: 20px;
            padding-bottom: 20px;
            text-align: center;
        }

        .sub-heading {
            font-size: 16px;
            text-align: center;
            font-weight: bold;
        }

        .page {
            page-break-before: always;
            page-break-after: always;
        }

        .cover-page {
            /* display: flex;
            justify-content: center;
            flex-direction: column; */
            height: 100%;
        }

        .page-heading {
            font-size: 14px;
            font-weight: normal;
        }

        p {
            font-size: 12px;
        }

        footer {

        }
    }
    

</style>

<style>
    
  * { font-family: 'Noto Sans', sans-serif; }
</style>

<body class="A4">
<!-- Cover Number -->
<section class="sheet padding-10mm cover-page" align="center">
    
    <center>
        <hr style="margin-top: 15px; margin-bottom: 15px;">

        <span style="font-size: 26px; font-weight: bold;">
            Form Submission
</span>
        <hr style="margin-top: 15px; margin-bottom: 15px;">
        <br><br>
        <span style="font-size: 26px; font-weight: bold;">
            For
            <br><br>
          Entreprenure
            <br><br>
        </span>
       
        <br><br>
        <span style="font-size: 12px; font-weight: bold;">
        Submission Date:  {{$userform->created_at->format('Y-m-d')}}

            <br>
            <br>
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
    <table width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;font-family: 'Noto Sans';">
        <tr>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                नाम
            </th>
            <th  align="left" style="border: 1px solid black; padding: 5px;">
                ठेगाना
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
                जातजाति 
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
        
        </tr>
        <tr>
            <td style="border: 1px solid black; padding: 5px;">
                <b>
                    {{$userform->name}}
                </b>
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                {{$userform->address}}
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                <b>
                    {{$userform->pradesh}}
                </b>
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                {{$userform->district}}
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                <b>
                    {{$userform->vdc}}
                </b>
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                {{$userform->ward}}
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                {{$userform->tole}}
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                <b>
                    {{$userform->caste}}
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
        </tr>
        
    </table>

</section>







<!-- Page Number 2 -->
<section class="sheet padding-10mm" style="page-break-after: auto;">

<div class="page-heading">
    २. रोजगारी/ व्यवसाय विवरण
</div>
<table width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;">
    <tr>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            के तपाइँ विदेशवाट हालसालै फर्किनु भएको हो?
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            हो भने, कुन क्षेत्र/ देशबाट फर्किनु भएको हो?
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            फर्केको साल/ अवधी
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            फर्कनुको कारण
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            कार्यक्षेत्र
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            तपाइंको हालको अवस्था के हो? 
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            के तपाइंले नेपाल सरकारको मापदण्ड अनुरुप वार्षिक अडिट, कर चुक्ताको प्रमाणमात्र र कम्पनीको अध्यावधि नियमित रूपमा गर्नु भएको छ? 
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            तपाइंको व्यवसायको वित्तीय जानकारी खुलाई दिनु होला
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            वार्षिक आम्दानी 
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            वार्षिक खर्च
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            चल सम्पत्ति 
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            अचल सम्पत्ति
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            पूंजीको संरचना
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            तपाइंको व्यावास्स्य संचालन गर्न कुनै प्रकारको आर्थिक चुनौती सामना गर्नु भएको छ?
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            तपाइंले आफ्नो व्यवसाय संचालनको निम्ति कुनै आर्थिक सहयोग (ऋण) जुटाउने सोच बनाउनु भएको छ? 
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            यदि छ भने तपाईंले आर्थिक पूर्वानुमान सहितका विस्तृत प्रस्ताव निर्माण गर्नु भएको छ?
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            तपाइंको व्यवसाय कुन क्षेत्र अन्तर्गत पर्दछ?  
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            तपाईंको व्यवसाय संचालनमा अरु कुनै समस्या भोग्नु भएको छ?
        </th>
        
    </tr>
    <tr>
        <td valign="top" style="border: 1px solid black; padding: 5px;">
            {{$userform->ob1}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob2}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob3}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob4}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob5}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob6}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob7}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob8}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob9}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob10}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob11}}
        </td>
        
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob13}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob14}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob15}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob16}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob17}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob18}}
        </td>
        <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
            {{$userform->ob19}}
        </td>
        
    </tr>
</table>
<br><br>

<div class="page-heading">
    नयाँ व्यवसाय गर्ने सोच भएको खण्डमा
    </div>
    <table width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;font-family: 'Noto Sans';">
        <tr>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                के तपाईंले आफ्नो नयाँ व्यवसायको विस्तृत योजना बनाउनु भएको छ?
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                के तपाईं आफ्नो नयाँ व्यवसाय दर्ता गर्ने प्रक्रियामा हुनुहुन्छ?
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                के तपाइंले विस्तृत प्रस्ताव (आर्थिक पूर्वानूमान) सहितको प्रस्ताव निर्माण गर्नु भएको छ?
            </th>
          <th align="left" style="border: 1px solid black; padding: 5px;">
            तपाइंको सम्भावित व्यवसाय कुन क्षेत्र अन्तर्गत पर्दछ? 
            </th>
            
        </tr>


      
            <tr>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$userform->ob20}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->ob21}}
                </td>

                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->ob22}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->ob23}}
                </td>
            </tr>
       
    </table>

    <br>
    <br>





    <div class="page-heading">
        4. रोजगारीको खोजीमा हुनु भएको खण्डमा
        
    </div>
    <table width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;font-family: 'Noto Sans';">
        <tr>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                तपाईं रोजगारीको खोजीमा हुनुहुन्छ? 
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                यदि रोजगारीको खोजीमा हो भने, तपाइंले कुन क्षेत्रमा रोजगारीको खोजी गरिरहनुभएको छ?
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                विगतमा रोजगारी भएको तर हाल बेरोजगार हो भने, तपाइंको आफ्नो कार्य अनुभवको विस्तृत विवरण खुलाइदिनु होला?
            </th>
          <th align="left" style="border: 1px solid black; padding: 5px;">
            सीप तथा दक्षता
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
            अनुभव अवधि
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                कार्यक्षेत्र
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                के तपाइँ प्रशिक्षण, व्यवसाय विकास, परियोजनाको अध्ययन र विकासमा सहयोगको लागी निश्चित शुल्क तिर्न सक्ने अवस्थामा हुनुहुन्छ?
            </th>
          <th align="left" style="border: 1px solid black; padding: 5px;">
            यदि हुनुहुन्छ भने कति?
            </th>
            
        </tr>


      
            <tr>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$userform->ob24}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->ob25}}
                </td>

                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->ob26}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->ob27}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$userform->ob28}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->ob29}}
                </td>

                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->ob30}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->ob31}}
                </td>
              
            </tr>
       
    </table>

    <br>


    
</section>
</body>

</html>