<!DOCTYPE html>
<html>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Yantramanav&display=swap" rel="stylesheet">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$userform->name}}{{$userform->created_at->format('Y-m-d')}}</title>
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
         Mentor
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
        १. सामान्य जानकारी
    </div>
    <table width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;font-family: 'Open Sans';">
        <tr>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                पूरा नाम
            </th>
            <th  align="left" style="border: 1px solid black; padding: 5px;">
                इमेल ठेगाना
            </th>
            <th  align="left" style="border: 1px solid black; padding: 5px;">
                लिङ्ग
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                फोन नम्बर
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                ठेगाना: प्रदेश 
            </th>
            <th  align="left" style="border: 1px solid black; padding: 5px;">
                ठेगाना: जिल्ला
            </th>
            <th  align="left" style="border: 1px solid black; padding: 5px;">
                पालिका 
            </th>
        
        </tr>
        <tr>
            <td style="border: 1px solid black; padding: 5px;">
                <b>
                    {{$userform->name}}
                </b>
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                {{$userform->email}}
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                <b>
                    {{$userform->gender}}
                </b>
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                {{$userform->phone}}
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
                {{$userform->vdc}}
            </td>
           
        </tr>
        
    </table>

</section>







<!-- Page Number 2 -->
<section class="sheet padding-10mm" style="page-break-after: auto;">

<div class="page-heading">
    २. व्यक्तिगत जानकारी
</div>
<table width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;">
    <tr>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            हाल कार्यरत वा आवद्ध रहेको संस्था 
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            हालको पद 
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            क्षेत्रगत विज्ञता/ तपाइंको विशेषज्ञताको क्षेत्रको अनुभव
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            तपाइंको अनुभवको अवधि कति हो?
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            तपाइंको अन्य पेशागत आवद्धता के-के छन्, अथवा अन्य संलग्नता उल्लेख गर्नुहोस 
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            तपाईं कस्तो प्रकारको प्रशिक्षक हुनलाई आवेदन भर्दै हुनुहुन्छ?
        </th>
        <th align="left" style="border: 1px solid black; padding: 5px;">
            यदि प्राज्ञिक व्यक्ति क्षेत्रगत विशेषज्ञ हो उक्त विषय, क्षेत्र र पक्षको उल्लेख गर्नुहोस 
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
        
    </tr>
</table>
<br><br>

<div class="page-heading">
    प्रशिक्षण कार्यको बारेमा
    </div>
    <table width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;font-family: 'Open Sans';">
        <tr>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                तपाइंको भविष्यका प्रशिक्षार्थीलाई महिनामा कति घण्टा (अधिकतम) दिन सक्नुहुन्छ?
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                प्रशिक्षण कार्यक्रमबाट तपाईंका अपेक्षाहरु के छन्?
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                यसभन्दा अघि पनि प्रशिक्षकको रूपमा काम गर्नुभएको छ?
            </th>
          <th align="left" style="border: 1px solid black; padding: 5px;">
            यदि छ भने कस्तो प्रशिक्षण कार्यमा सहभागी हुनुहुन्थ्यो? उल्लेख गर्नुहोस *
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
                तपाईंको व्यक्तिगत विवरण वा तपाइंको अनुभव तथा योग्यता समावेश भएको संक्षिप्त विवरण संलग्न गर्नुहोस:
                </th>
                <th align="left" style="border: 1px solid black; padding: 5px;">
                    तपाईंको पासपोर्ट आकारको तस्वीर संलग्न गर्नुहोस (गगल्स, सन्ग्लास अथवा क्याप लगाएको तस्वीर प्रयोग नगर्नुहोला):
                    </th>
        </tr>


      
            <tr>
                <td valign="top" style="border: 1px solid black; padding: 5px;" align="center">
                    {{$userform->ob8}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->ob9}}
                </td>

                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->ob10}}
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;">
                    {{$userform->ob11}}
                </td>
                
                <td valign="top" style="border: 1px solid black; padding: 5px;">
                <img src ="{{asset('images/mentor/psp/'.$userform->psp)}}">
                </td>
                <td valign="top" style="border: 1px solid black; padding: 5px;">
                 {{$userform->citizen}}
                    <embed name="plugin" src="{{asset('images/mentor/citizen/'.$userform->citizen)}}" type="application/pdf">
                    </td>
            </tr>
       
    </table>
    <br>


    
</section>
</body>

</html>