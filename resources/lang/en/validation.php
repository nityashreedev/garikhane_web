<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'pradesh' => [
            'required' => 'परदेश रोज्नुहोस ',
        ],
        'district' => [
            'required' => 'जिल्ला  रोज्नुहोस ',
        ],
        'vdc' => [
            'required' => 'पालिका   रोज्नुहोस ',
        ],
        'ward' => [
            'required' => 'वडा रोज्नुहोस ',
        ],
        'gender' => [
            'required' => 'लिङ्ग रोज्नुहोस',
        ],
        'education' => [
            'required' => 'सैक्षिक योग्यता रोज्नुहोस',
        ],
        'ob2' => [
            'required' => 'व्यवसायको किसिम रोज्नुहोस',
        ],
        'business_pradesh' => [
            'required' => 'परदेश रोज्नुहोस ',
        ],
        'business_district' => [
            'required' => 'जिल्ला  रोज्नुहोस ',
        ],
        'business_vdc' => [
            'required' => 'पालिका   रोज्नुहोस ',
        ],
        'business_ward' => [
            'required' => 'वडा रोज्नुहोस ',
        ],
        'business_tole' => [
            'required' => 'परियोजना को  ठेगाना , टोल उल्लेख गर्नुहोस ',
        ],
        'ob5' => [
            'required' => ' व्यवसायको क्षेत्र रोज्नुहोस ',
        ],
        'loan_payment_type' => [
            'required' => 'किस्ता र ऋण भुक्तानी प्रक्रिया रोज्नुहोस ',
        ],
        'loan_category' => [
            'required' => 'ऋण को बर्गिकरण रोज्नुहोस ',
        ],
        'ob23' => [
            'required' => 'वार्षिक अडिट, कर चुक्ताको प्रमाणमात्र रोज्नुहोस ',
        ],
        'ob24' => [
            'required' => 'व्यवसाय संचालनमा समस्या रोज्नुहोस ',
        ],
        'machinery.0.total_expense' => [
            'required_with' => 'मेसिनरी संगै लागत पनि  उल्लेख गर्नुहोस। ',
        ],
        'machinery.0.availability' => [
            'required_with' => 'मेसिनरी संगै उपलब्दता पनि  उल्लेख गर्नुहोस।  ',
        ],
        'machinery.0.remarks' => [
            'required_with' => 'मेसिनरी संगै कैफियत पनि  उल्लेख गर्नुहोस। ',
        ],
        'number' => [
            'required' => 'मोबाइल नम्बर भर्नुहोस्',
        ],
        'number' => [
            'regex' => 'मोबाइल नम्बर गलत भयो, 98XXXXXXXX येसरी १० अंक लेख्नुहोस।',
        ],
        'number' => [
            'digits' => 'मोबाइल नम्बर गलत भयो,१० अंक लेख्नुहोस।  ',
        ],
        'name' => [
            'required' => 'नाम भर्नुहोस्।',
        ],
        'tole' => [
            'required' => 'टोल भर्नुहोस्।',
        ],
        'email' => [
            'required' => 'इमेल भर्नुहोस्।',
        ],
        'date' => [
            'required' => 'जन्ममिति भर्नुहोस्।',
        ],
        'date' => [
            'before' => 'जन्ममिति आजको मिति भन्दा पछाडीको हुन पर्छ।',
        ], 
        'ob3' => [
            'required' => 'व्यवसायको नाम भर्नुहोस्।',
        ],
        'business_aim' => [
            'required' => 'व्यवसायको उदेश्य भर्नुहोस्।',
        ],
        'business_reason' => [
            'required' => 'सुचारु वा विस्तार गर्नु को कारण भर्नुहोस्।',
        ],
        'ob4' => [
            'required' => 'उत्पादन हुने बस्तु वा सेवा भर्नुहोस्।',
        ],
        'ob8' => [
            'required' => ' व्यवसायको लागि आबश्यक पर्ने सिप/तालिम भर्नुहोस्।',
        ],
        'ob7' => [
            'required' => 'आवश्यक कच्चापदार्थ भर्नुहोस्।',
        ],
        'ob10' => [
            'required' => 'आवश्यक कर्मचारी/कामदार भर्नुहोस्।',
        ],
        'total_salary' => [
            'required' => 'मासिक जम्मा तलब भर्नुहोस्।',
        ],
        'total_salary' => [
            'required' => 'मासिक जम्मा तलब भर्नुहोस्।',
        ],
        'ob11' => [
            'required' => 'संचालन हुने क्षमता भर्नुहोस्।',
        ],
        'ob13' => [
            'required' => 'व्यवसाय संचालनको कुल लागत भर्नुहोस्।',
        ],
        'ob16' => [
            'required' => 'उत्पादित बस्तुको बजार भर्नुहोस्।',
        ],
        'ob20' => [
            'required' => 'बैंक ऋण भर्नुहोस्।',
        ],
        'ob21' => [
            'required' => 'स्वपूंजी भर्नुहोस्।',
        ],
        'expected_interest' => [
            'required' => 'अपेक्षित ब्याजदर भर्नुहोस्।',
        ],
        'ob22' => [
            'required' => 'ऋणको सुरक्षणको लागि रहने धितोको विवरण भर्नुहोस्।',
        ],
        'bank_name' => [
            'required' => 'बैंक को नाम भर्नुहोस्।',
        ],
        'bank_branch' => [
            'required' => 'बैंक को शाखा भर्नुहोस्। ',
        ],
        'family_total' => [
            'required' => 'परिवारमा रहेको कुल सदस्य संख्या भर्नुहोस्।',
        ],
        'family_female' => [
            'required' => 'परिवारमा रहेको महिला सदस्य संख्या भर्नुहोस्।',
        ],
        'family_male' => [
            'required' => 'परिवारमा रहेको पुरुष सदस्य संख्या भर्नुहोस्।',
        ],
        'business_field_others' => [
            'required_if' => 'ब्यबसायको क्षेत्र अन्य उल्लेख गर्नुहोस।',
        ],
        'loan_category_others_text' => [
            'required_if' => 'ऋण को बर्गिकरण अन्य उल्लेख गर्नुहोस।',
        ], 
        'ob24_others_text' => [
            'required_if' => 'ब्यबसायको संचालनमा अन्य उल्लेख गर्नुहोस।',
        ],
        'password' => [
            'regex' => 'Need at least 6 character with one capital letter and one special character',
        ],             
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
