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

    'accepted' => ':attribute መስክ ተቀበል መሆን አለበት።',
    'accepted_if' => ':other :value ከሆነ :attribute መስክ ተቀበል መሆን አለበት።',
    'active_url' => ':attribute መስክ ዋጋ ያለው ዩአርኤል መሆን አለበት።',
    'after' => ':attribute መስክ የ :date በኋላ የሆነ ቀን መሆን አለበት።',
    'after_or_equal' => ':attribute መስክ የ :date በኋላ ወይም እኩል የሆነ ቀን መሆን አለበት።',
    'alpha' => ':attribute መስክ መደበኛ ፊደሎችን ብቻ መያዝ አለበት።',
    'alpha_dash' => ':attribute መስክ መደበኛ ፊደሎች፣ ቁጥሮች፣ ዳሽ እና አንደበለጠ መያዝ አለበት።',
    'alpha_num' => ':attribute መስክ መደበኛ ፊደሎች እና ቁጥሮችን ብቻ መያዝ አለበት።',
    'array' => ':attribute መስክ አደባባይ መሆን አለበት።',
    'ascii' => ':attribute መስክ ነጠላ-ባይት አልፋቤት እና ቁጥር ፊደሎች እና ምልክቶችን ብቻ መያዝ አለበት።',
    'before' => ':attribute መስክ የ :date በፊት የሆነ ቀን መሆን አለበት።',
    'before_or_equal' => ':attribute መስክ የ :date በፊት ወይም እኩል የሆነ ቀን መሆን አለበት።',
    'between' => [
        'array' => ':attribute መስክ በ :min እና :max ዕቃዎች መካከል መያዝ አለበት።',
        'file' => ':attribute መስክ በ :min እና :max ኪሎባይት መካከል መሆን አለበት።',
        'numeric' => ':attribute መስክ በ :min እና :max መካከል መሆን አለበት።',
        'string' => ':attribute መስክ በ :min እና :max ፊደሎች መካከል መሆን አለበት።',
    ],
    'boolean' => ':attribute መስክ ውነት ወይም ሐሰት መሆን አለበት።',
    'confirmed' => ':attribute መስክ ማረጋገጫ ከተመሳሳይ አይደለም።',
    'current_password' => 'የይለፍ ቃሉ ትክክል አይደለም።',
    'date' => ':attribute መስክ ዋጋ ያለው ቀን መሆን አለበት።',
    'date_equals' => ':attribute መስክ ከ :date ጋር እኩል የሆነ ቀን መሆን አለበት።',
    'date_format' => ':attribute መስክ ከ :format ጋር መዛመድ አለበት።',
    'decimal' => ':attribute መስክ ከ :decimal አስርዮሽ ቦታዎች ጋር መሆን አለበት።',
    'declined' => ':attribute መስክ ውድቅ መሆን አለበት።',
    'declined_if' => ':other :value ከሆነ :attribute መስክ ውድቅ መሆን አለበት።',
    'different' => ':attribute መስክ እና :other የተለየ መሆን አለበት።',
    'digits' => ':attribute መስክ :digits አሃዞች መሆን አለበት።',
    'digits_between' => ':attribute መስክ በ :min እና :max አሃዞች መካከል መሆን አለበት።',
    'dimensions' => ':attribute መስክ ዋጋ የሌለው የምስል መጠን አለው።',
    'distinct' => ':attribute መስክ የተባዛ ዋጋ አለው።',
    'doesnt_end_with' => ':attribute መስክ ከሚከተሉት አንዱን መጨረስ የለበትም: :values.',
    'doesnt_start_with' => ':attribute መስክ ከሚከተሉት አንዱን መጀመር የለበትም: :values.',
    'email' => ':attribute መስክ ዋጋ ያለው የኢሜል አድራሻ መሆን አለበት።',
    'ends_with' => ':attribute መስክ ከሚከተሉት አንዱን መጨረስ አለበት: :values.',
    'enum' => 'የተመረጠው :attribute ዋጋ የለውም።',
    'exists' => 'የተመረጠው :attribute ዋጋ የለውም።',
    'file' => ':attribute መስክ ፋይል መሆን አለበት።',
    'filled' => ':attribute መስክ ዋጋ መያዝ አለበት።',
    'gt' => [
        'array' => ':attribute መስክ ከ :value ዕቃዎች በላይ መያዝ አለበት።',
        'file' => ':attribute መስክ ከ :value ኪሎባይት በላይ መሆን አለበት።',
        'numeric' => ':attribute መስክ ከ :value በላይ መሆን አለበት።',
        'string' => ':attribute መስክ ከ :value ፊደሎች በላይ መሆን አለበት።',
    ],
    'gte' => [
        'array' => ':attribute መስክ :value ዕቃዎች ወይም በላይ መያዝ አለበት።',
        'file' => ':attribute መስክ ከ :value ኪሎባይት በላይ ወይም እኩል መሆን አለበት።',
        'numeric' => ':attribute መስክ ከ :value በላይ ወይም እኩል መሆን አለበት።',
        'string' => ':attribute መስክ ከ :value ፊደሎች በላይ ወይም እኩል መሆን አለበት።',
    ],
    'image' => ':attribute መስክ ምስል መሆን አለበት።',
    'in' => 'የተመረጠው :attribute ዋጋ የለውም።',
    'in_array' => ':attribute መስክ :other ውስጥ መኖር አለበት።',
    'integer' => ':attribute መስክ ኢንቲጀር መሆን አለበት።',
    'ip' => ':attribute መስክ ዋጋ ያለው የአይፒ አድራሻ መሆን አለበት።',
    'ipv4' => ':attribute መስክ ዋጋ ያለው የአይፒቪፎር አድራሻ መሆን አለበት።',
    'ipv6' => ':attribute መስክ ዋጋ ያለው የአይፒቪሲክስ አድራሻ መሆን አለበት።',
    'json' => ':attribute መስክ ዋጋ ያለው የጄሶን ሕብረቁምፊ መሆን አለበት።',
    'lowercase' => ':attribute መስክ ትንሽ ፊደል መሆን አለበት።',
    'lt' => [
        'array' => ':attribute መስክ ከ :value ዕቃዎች በታች መያዝ አለበት።',
        'file' => ':attribute መስክ ከ :value ኪሎባይት በታች መሆን አለበት።',
        'numeric' => ':attribute መስክ ከ :value በታች መሆን አለበት።',
        'string' => ':attribute መስክ ከ :value ፊደሎች በታች መሆን አለበት።',
    ],
    'lte' => [
        'array' => ':attribute መስክ ከ :value ዕቃዎች በላይ መያዝ የለበትም።',
        'file' => ':attribute መስክ ከ :value ኪሎባይት በታች ወይም እኩል መሆን አለበት።',
        'numeric' => ':attribute መስክ ከ :value በታች ወይም እኩል መሆን አለበት።',
        'string' => ':attribute መስክ ከ :value ፊደሎች በታች ወይም እኩል መሆን አለበት።',
    ],
    'mac_address' => ':attribute መስክ ዋጋ ያለው የማክ አድራሻ መሆን አለበት።',
    'max' => [
        'array' => ':attribute መስክ ከ :max ዕቃዎች በላይ መያዝ የለበትም።',
        'file' => ':attribute መስክ ከ :max ኪሎባይት በላይ መሆን የለበትም።',
        'numeric' => ':attribute መስክ ከ :max በላይ መሆን የለበትም።',
        'string' => ':attribute መስክ ከ :max ፊደሎች በላይ መሆን የለበትም።',
    ],
    'max_digits' => ':attribute መስክ ከ :max አሃዞች በላይ መያዝ የለበትም።',
    'mimes' => ':attribute መስክ የሚከተለው ዓይነት ፋይል መሆን አለበት: :values.',
    'mimetypes' => ':attribute መስክ የሚከተለው ዓይነት ፋይል መሆን አለበት: :values.',
    'min' => [
        'array' => ':attribute መስክ ቢያንስ :min ዕቃዎች መያዝ አለበት።',
        'file' => ':attribute መስክ ቢያንስ :min ኪሎባይት መሆን አለበት።',
        'numeric' => ':attribute መስክ ቢያንስ :min መሆን አለበት።',
        'string' => ':attribute መስክ ቢያንስ :min ፊደሎች መሆን አለበት።',
    ],
    'min_digits' => ':attribute መስክ ቢያንስ :min አሃዞች መያዝ አለበት።',
    'missing' => ':attribute መስክ ተጠናቋል።',
    'missing_if' => ':other :value ከሆነ :attribute መስክ ተጠናቋል።',
    'missing_unless' => ':other :value ካልሆነ በስተቀር :attribute መስክ ተጠናቋል።',
    'missing_with' => ':values አለ ከሆነ :attribute መስክ ተጠናቋል።',
    'missing_with_all' => ':values አሉ ከሆነ :attribute መስክ ተጠናቋል።',
    'multiple_of' => ':attribute መስክ :value ብዜት መሆን አለበት።',
    'not_in' => 'የተመረጠው :attribute ዋጋ የለውም።',
    'not_regex' => ':attribute መስክ ቅርጸት ዋጋ የለውም።',
    'numeric' => ':attribute መስክ ቁጥር መሆን አለበት።',
    'password' => [
        'letters' => ':attribute መስክ ቢያንስ አንድ ፊደል መያዝ አለበት።',
        'mixed' => ':attribute መስክ ቢያንስ አንድ ከፍተኛ እና አንድ ትንሽ ፊደል መያዝ አለበት።',
        'numbers' => ':attribute መስክ ቢያንስ አንድ ቁጥር መያዝ አለበት።',
        'symbols' => ':attribute መስክ ቢያንስ አንድ ምልክት መያዝ አለበት።',
        'uncompromised' => 'የተሰጠው :attribute በውሂብ ማምረቂያ ውስጥ ተገኝቷል። እባክዎ የተለየ :attribute ይምረጡ።',
    ],
    'present' => ':attribute መስክ መኖር አለበት።',
    'prohibited' => ':attribute መስክ ተከልክሏል።',
    'prohibited_if' => ':other :value ከሆነ :attribute መስክ ተከልክሏል።',
    'prohibited_unless' => ':other :values ውስጥ ካልሆነ በስተቀር :attribute መስክ ተከልክሏል።',
    'prohibits' => ':attribute መስክ :other መኖር አያስችልም።',
    'regex' => ':attribute መስክ ቅርጸት ዋጋ የለውም።',
    'required' => ':attribute መስክ ያስፈልጋል።',
    'required_array_keys' => ':attribute መስክ ለሚከተሉት ግቤቶች መያዝ አለበት: :values.',
    'required_if' => ':other :value ከሆነ :attribute መስክ ያስፈልጋል።',
    'required_if_accepted' => ':other ተቀባይነት ከተቀበሉ :attribute መስክ ያስፈልጋል።',
    'required_unless' => ':other :values ውስጥ ካልሆነ በስተቀር :attribute መስክ ያስፈልጋል።',
    'required_with' => ':values አለ ከሆነ :attribute መስክ ያስፈልጋል።',
    'required_with_all' => ':values አሉ ከሆነ :attribute መስክ ያስፈልጋል።',
    'required_without' => ':values የለም ከሆነ :attribute መስክ ያስፈልጋል።',
    'required_without_all' => ':values አንዳንዱም የለም ከሆነ :attribute መስክ ያስፈልጋል።',
    'same' => ':attribute መስክ :other ጋር መዛመድ አለበት።',
    'size' => [
        'array' => ':attribute መስክ :size ዕቃዎች መያዝ አለበት።',
        'file' => ':attribute መስክ :size ኪሎባይት መሆን አለበት።',
        'numeric' => ':attribute መስክ :size መሆን አለበት።',
        'string' => ':attribute መስክ :size ፊደሎች መሆን አለበት።',
    ],
    'starts_with' => ':attribute መስክ ከሚከተሉት አንዱን መጀመር አለበት: :values.',
    'string' => ':attribute መስክ ሕብረቁምፊ መሆን አለበት።',
    'timezone' => ':attribute መስክ ዋጋ ያለው የጊዜ ክልል መሆን አለበት።',
    'unique' => ':attribute ቀድሞውኑ ተወስኖበታል።',
    'uploaded' => ':attribute መስክ ማስቀመጥ አልተሳካም።',
    'uppercase' => ':attribute መስክ ከፍተኛ ፊደል መሆን አለበት።',
    'url' => ':attribute መስክ ዋጋ ያለው ዩአርኤል መሆን አለበት።',
    'ulid' => ':attribute መስክ ዋጋ ያለው ዩኤልአይዲ መሆን አለበት።',
    'uuid' => ':attribute መስክ ዋጋ ያለው ዩዩአይዲ መሆን አለበት።',

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
        'attribute-name' => [
            'rule-name' => 'custom-message',
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