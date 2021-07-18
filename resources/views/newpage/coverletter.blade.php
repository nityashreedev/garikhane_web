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
           Cover Letter
</span>
        <hr style="margin-top: 15px; margin-bottom: 15px;">
        <br><br>
        <span style="font-size: 26px; font-weight: bold;">
            For
            <br><br>
        Job Applied
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

    <table width="100%" style="border-collapse: collapse; font-size: 14px; margin-top: 10px;font-family: 'Open Sans';">
        <tr>
            <th align="left" style="border: 1px solid black; padding: 5px;">
              Name
            </th>
            <th align="left" style="border: 1px solid black; padding: 5px;">
              Description
            </th>
        
        </tr>
      
        <tr>
            <td style="border: 1px solid black; padding: 5px;">
                <b>
                    {{$userform->mobileuser ? $userform->mobileuser->lname : $userform->user->lname }}
                </b>
            </td>
            <td style="border: 1px solid black; padding: 5px;">
                <b>
                    
                    {!! strip_tags(\Illuminate\Support\Str::words($userform->text, 950,'....'))  !!}
                </b>
            </td>
           
           
        </tr>
        
    </table>

</section>


</body>

</html>