<table>
    <thead>
        <tr>
            <th><strong>नाम</strong></th>
            <th><strong>प्रदेश</strong></th>
            <th><strong>जिल्ला</strong></th>
            <th><strong>पालिका</strong></th>
            <th><strong>वडा</strong></th>
            <th><strong>टोल</strong></th>
            <th><strong>सम्पर्क मोबाइल नम्बर</strong></th>
            <th><strong>इमेल</strong></th>
            <th><strong>लिङ्ग</strong></th>
            <th><strong>जन्ममिति</strong></th>
            <th><strong>शिक्षा</strong></th>
            <th><strong>परिवारमा कुल सदस्य संख्या</strong></th>
            <th><strong>परिवारमा कुल महिला संख्या</strong></th>
            <th><strong>परिवारमा कुल पुरुष संख्या</strong></th>
            <th><strong>परिवारमा कुल अन्य संख्या</strong></th>
            <th><strong>परियोजनाको किसिम</strong></th>
            <th><strong>परियोजनाको नाम</strong></th>
            <th><strong>परियोजनाको ठेगाना (प्रदेश)</strong></th>
            <th><strong>परियोजनाको ठेगाना (जिल्ला)</strong></th>
            <th><strong>परियोजनाको ठेगाना (पालिका)</strong></th>
            <th><strong>परियोजनाको ठेगाना (वडा)</strong></th>
            <th><strong>परियोजनाको ठेगाना (टोल)</strong></th>
            <th><strong>परियोजनाको उदेश्य</strong></th>
            <th><strong>सुचारु वा विस्तार गर्नु को कारण</strong></th>
            <th><strong>उत्पादन हुने बस्तु वा सेवा</strong></th>
            <th><strong>तपाइंको व्यवसाय कुन क्षेत्र अन्तर्गत पर्दछ?</strong></th>
            <th><strong>आबश्यक पर्ने सिप/तालिम र सो को उपलब्धता</strong></th>
            <th><strong>आवश्यक कच्चापदार्थ र सो को उपलब्धता</strong></th>
            <th><strong>आवश्यक कर्मचारी / कामदार</strong></th>
            <th><strong>मासिक जम्मा तलब</strong></th>
            <th><strong>संचालन हुने क्षमता</strong></th>
            <th><strong>उत्पादन क्षमता</strong></th>
            <th><strong>व्यवसाय संचालनको कुल लागत</strong></th>
            <th><strong>आवश्यक वित्तीय श्रोत (बैंक ऋण ) रु.</strong></th>
            <th><strong>आवश्यक वितिय श्रोत (स्वपूंजी ) रु.</strong></th>
            <th><strong>अपेक्षित ब्याजदर %</strong></th>
            <th><strong>किस्ता र ऋण भुक्तानी प्रक्रिया</strong></th>
            <th><strong>ऋणको सुरक्षणको लागि रहने धितोको विवरण</strong></th>
            <th><strong>ऋण को बर्गिकरण</strong></th>
            <th><strong>उत्पादित बस्तुको बजार</strong></th>
            <th><strong>के तपाइंले नेपाल सरकारको मापदण्ड अनुरुप वार्षिक अडिट,
                    कर चुक्ताको प्रमाणमात्र र कम्पनीको अध्यावधि नियमित रूपमा गर्नु भएको छ?</strong></th>
            <th><strong>तपाईंको व्यवसाय संचालनमा अरु कुनै समस्या छ?</strong></th>
            <th><strong>तपाईंलाई पायक पर्ने बैंकको नाम</strong></th>
            <th><strong>पायक पर्ने बैंकको शाखा</strong></th>
            <th><strong>फारम भरेको मिति</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach($karmabhomi as $karma)
        <tr>
            <td>{{ $karma->name }}</td>
            <td>{{ $karma->getPradesh->name }}</td>
            <td>{{ $karma->getDistrict->name }}</td>
            <td>{{ $karma->getMunicipality->name }}</td>
            <td>{{ $karma->ward }}</td>
            <td>{{ $karma->tole }}</td>
            <td>{{ $karma->number }}</td>
            <td>{{ $karma->email }}</td>
            <td>{{ $karma->gender }}</td>
            <td>{{ $karma->date }}</td>
            <td>{{ $karma->education }}</td>
            <td>{{ $karma->family_total }}</td>
            <td>{{ $karma->family_female }}</td>
            <td>{{ $karma->family_male }}</td>
            <td>{{ $karma->family_others }}</td>
            <td>{{ $karma->ob2 }}</td>
            <td>{{ $karma->ob3 }}</td>
            <td>{{ $karma->getBusinessPradesh->name }}</td>
            <td>{{ $karma->getBusinessDistrict->name }}</td>
            <td>{{ $karma->getBusinessMunicipality->name }}</td>
            <td>{{ $karma->business_ward }}</td>
            <td>{{ $karma->business_tole }}</td>
            <td>{{ $karma->business_aim }}</td>
            <td>{{ $karma->business_reason }}</td>
            <td>{{ $karma->ob4 }}</td>
            <td>{{ $karma->ob5 }}</td>
            <td>{{ $karma->ob8 }}</td>
            <td>{{ $karma->ob7 }}</td>
            <td>{{ $karma->ob10 }}</td>
            <td>{{ $karma->total_salary }}</td>
            <td>{{ $karma->ob11 }}</td>
            <td>{{ $karma->ob12 }}</td>
            <td>{{ $karma->ob13 }}</td>
            <td>{{ $karma->ob20 }}</td>
            <td>{{ $karma->ob21 }}</td>
            <td>{{ $karma->expected_interest }}</td>
            <td>{{ $karma->loan_payment_type }}</td>
            <td>{{ $karma->ob22 }}</td>
            <td>{{ $karma->loan_category }}</td>
            <td>{{ $karma->ob16 }}</td>
            <td>{{ $karma->ob23 }}</td>
            <td>{{ $karma->ob24 }}</td>
            <td>{{ $karma->bank_name }}</td>
            <td>{{ $karma->bank_branch }}</td>
            <td>{{ $karma->created_at->format('M, d, Y H:i') }}</td>
            <td>
                <table>
                    <tr>
                        <th><strong>वार्षिक उत्पादन क्षमता (उत्त्पादित बस्तु)</strong></th>
                        <th><strong>वार्षिक उत्पादन क्षमता (परिमाण)</strong></th>
                        <th><strong>वार्षिक उत्पादन क्षमता (उत्पादन मूल्य)</strong></th>
                        <th><strong>वार्षिक उत्पादन क्षमता (कैफियत)</strong></th>
                    </tr>

                    @foreach($karma->yearlyProduction as $production)
                    <tr>
                        <td>{{ $production->product }}</td>
                        <td>{{ $production->qty }}</td>
                        <td>{{ $production->price }}</td>
                        <td>{{ $production->remarks }}</td>
                    </tr>
                    @endforeach
                </table>

                <table>
                    <tr>
                        <th><strong>खरिद गरिने मेशिनरी (मेशिनेरिको नाम)</strong></th>
                        <th><strong>खरिद गरिने मेशिनरी (लागत)</strong></th>
                        <th><strong>खरिद गरिने मेशिनरी (उपलब्दता)</strong></th>
                        <th><strong>खरिद गरिने मेशिनरी (कैफियत)</strong></th>
                    </tr>

                    @foreach($karma->machinery as $machine)
                    <tr>
                        <td>{{ $machine->machine_name }}</td>
                        <td>{{ $machine->total_expense }}</td>
                        <td>{{ $machine->availability }}</td>
                        <td>{{ $machine->remarks }}</td>
                    </tr>

                    @endforeach
                </table>

                <table>
                    <tr>
                        <th><strong>स्थिर पूंजी/सम्पत्ति (स्थिर सम्पत्ति)</strong></th>
                        <th><strong> स्थिर पूंजी/सम्पत्ति (अनुमानित मूल्य)</strong></th>
                        <th><strong> स्थिर पूंजी/सम्पत्ति (विवरण)</strong></th>
                        <th><strong> स्थिर पूंजी/सम्पत्ति (कैफियत)</strong></th>
                    </tr>
                    @foreach($karma->fixedCapital as $fixed_capital)
                    <tr>
                        <td>{{ $fixed_capital->fixed_property }}</td>
                        <td>{{ $fixed_capital->approx_price }}</td>
                        <td>{{ $fixed_capital->details }}</td>
                        <td>{{ $fixed_capital->remarks }}</td>
                    </tr>
                    @endforeach
                </table>

                <table>

                    <th><strong>चालु पूंजी/सम्पत्ति (चालु सम्पत्ति)</strong></th>
                    <th><strong> चालु पूंजी/सम्पत्ति (अनुमानित मूल्य)</strong></th>
                    <th><strong> चालु पूंजी/सम्पत्ति (विवरण)</strong></th>
                    <th><strong> चालु पूंजी/सम्पत्ति (कैफियत)</strong></th>

                    @foreach($karma->runningCapital as $running_capital)
                    <tr>
                        <td>{{ $running_capital->running_property }}</td>
                        <td>{{ $running_capital->approx_price }}</td>
                        <td>{{ $running_capital->details }}</td>
                        <td>{{ $running_capital->remarks }}</td>
                    </tr>
                    @endforeach
                </table>

                <table>
                    <tr>
                        <th><strong>प्रति इकाई खर्चको विवरण (नाम)</strong></th>
                        <th><strong> प्रति इकाई खर्चको विवरण (अनुमानित मूल्य)</strong></th>
                        <th><strong> प्रति इकाई खर्चको विवरण (अनुमानित बार्षिक उत्पादन)</strong></th>
                        <th><strong> प्रति इकाई खर्चको विवरण (जम्मा खर्च)</strong></th>
                    </tr>
                    @foreach($karma->unitExpense as $unit_expense)
                    <tr>
                        <td>{{ $unit_expense->name }}</td>
                        <td>{{ $unit_expense->approx_price }}</td>
                        <td>{{ $unit_expense->approx_annual_production }}</td>
                        <td>{{ $unit_expense->total_expense }}</td>
                    </tr>
                    @endforeach
                </table>

                <table>
                    <tr>
                        <th><strong>प्रति इकाई आम्दानीको विवरण (नाम)</strong></th>
                        <th><strong> प्रति इकाई आम्दानीको विवरण (अनुमानित मूल्य)</strong></th>
                        <th><strong> प्रति इकाई आम्दानीको विवरण (अनुमानित बार्षिक बिक्रि)</strong></th>
                        <th><strong> प्रति इकाई आम्दानीको विवरण (जम्मा खर्च)</strong></th>
                    </tr>
                    @foreach($karma->unitIncome as $unit_income)
                    <tr>
                        <td>{{ $unit_income->name }}</td>
                        <td>{{ $unit_income->approx_price }}</td>
                        <td>{{ $unit_income->approx_annual_sale }}</td>
                        <td>{{ $unit_income->total_expense }}</td>
                    </tr>
                    @endforeach
                </table>

                <table>
                    <tr>
                        <th><strong> बार्षिक संचालन खर्च (नाम)</strong></th>
                        <th><strong> बार्षिक संचालन खर्च (अनुमानित मूल्य)</strong></th>
                        <th><strong> बार्षिक संचालन खर्च (अनुमानित बार्षिक बिक्रि)</strong></th>
                        <th><strong> बार्षिक संचालन खर्च (जम्मा खर्च)</strong></th>
                    </tr>
                    @foreach($karma->annualOperationCost as $annual_cost)
                    <tr>
                        <td>{{ $annual_cost->name }}</td>
                        <td>{{ $annual_cost->approx_price }}</td>
                        <td>{{ $annual_cost->approx_annual_sale }}</td>
                        <td>{{ $annual_cost->total_expense }}</td>
                    </tr>
                    @endforeach
                </table>
            </td>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>