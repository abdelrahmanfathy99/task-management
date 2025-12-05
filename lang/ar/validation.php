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

    'accepted' => 'يجب قبول الحقل :attribute.',
    'accepted_if' => 'يجب قبول الحقل :attribute عندما يكون :other بقيمة :value.',
    'active_url' => 'الحقل :attribute يجب أن يكون رابط صحيح.',
    'after' => 'الحقل :attribute يجب أن يكون تاريخ بعد :date.',
    'after_or_equal' => 'الحقل :attribute يجب أن يكون تاريخ بعد أو يساوي :date.',
    'alpha' => 'الحقل :attribute يجب أن يحتوي على أحرف فقط.',
    'alpha_dash' => 'الحقل :attribute يجب أن يحتوي على أحرف وأرقام وشرطات فقط.',
    'alpha_num' => 'الحقل :attribute يجب أن يحتوي على أحرف وأرقام فقط.',
    'any_of' => 'الحقل :attribute غير صالح.',
    'array' => 'الحقل :attribute يجب أن يكون مصفوفة.',
    'ascii' => 'الحقل :attribute يجب أن يحتوي على أحرف وأرقام ورموز أحادية البايت فقط.',
    'before' => 'الحقل :attribute يجب أن يكون تاريخ قبل :date.',
    'before_or_equal' => 'الحقل :attribute يجب أن يكون تاريخ قبل أو يساوي :date.',
    'between' => [
        'array' => 'الحقل :attribute يجب أن يحتوي بين :min و :max عنصر.',
        'file' => 'الحقل :attribute يجب أن يكون بين :min و :max كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون بين :min و :max.',
        'string' => 'الحقل :attribute يجب أن يكون بين :min و :max حرف.',
    ],
    'boolean' => 'الحقل :attribute يجب أن يكون صحيح أو خطأ.',
    'can' => 'الحقل :attribute يحتوي على قيمة غير مصرح بها.',
    'confirmed' => 'تأكيد الحقل :attribute لا يتطابق.',
    'contains' => 'الحقل :attribute يفتقد قيمة مطلوبة.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'الحقل :attribute يجب أن يكون تاريخ صحيح.',
    'date_equals' => 'الحقل :attribute يجب أن يكون تاريخ يساوي :date.',
    'date_format' => 'الحقل :attribute يجب أن يتطابق مع الصيغة :format.',
    'decimal' => 'الحقل :attribute يجب أن يحتوي على :decimal منازل عشرية.',
    'declined' => 'الحقل :attribute يجب رفضه.',
    'declined_if' => 'الحقل :attribute يجب رفضه عندما يكون :other بقيمة :value.',
    'different' => 'الحقل :attribute و :other يجب أن يكونا مختلفين.',
    'digits' => 'الحقل :attribute يجب أن يكون :digits أرقام.',
    'digits_between' => 'الحقل :attribute يجب أن يكون بين :min و :max أرقام.',
    'dimensions' => 'الحقل :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'الحقل :attribute يحتوي على قيمة مكررة.',
    'doesnt_contain' => 'الحقل :attribute يجب ألا يحتوي على أي مما يلي: :values.',
    'doesnt_end_with' => 'الحقل :attribute يجب ألا ينتهي بأي مما يلي: :values.',
    'doesnt_start_with' => 'الحقل :attribute يجب ألا يبدأ بأي مما يلي: :values.',
    'email' => 'الحقل :attribute يجب أن يكون بريد إلكتروني صحيح.',
    'encoding' => 'الحقل :attribute يجب أن يكون مشفراً باستخدام :encoding.',
    'ends_with' => 'الحقل :attribute يجب أن ينتهي بأحد القيم التالية: :values.',
    'enum' => 'القيمة المختارة للحقل :attribute غير صالحة.',
    'exists' => 'القيمة المختارة للحقل :attribute غير صالحة.',
    'extensions' => 'الحقل :attribute يجب أن يحتوي على أحد الامتدادات التالية: :values.',
    'file' => 'الحقل :attribute يجب أن يكون ملف.',
    'filled' => 'الحقل :attribute يجب أن يحتوي على قيمة.',
    'gt' => [
        'array' => 'الحقل :attribute يجب أن يحتوي على أكثر من :value عناصر.',
        'file' => 'الحقل :attribute يجب أن يكون أكبر من :value كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون أكبر من :value.',
        'string' => 'الحقل :attribute يجب أن يكون أكبر من :value حرف.',
    ],
    'gte' => [
        'array' => 'الحقل :attribute يجب أن يحتوي على :value عناصر أو أكثر.',
        'file' => 'الحقل :attribute يجب أن يكون أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون أكبر من أو يساوي :value.',
        'string' => 'الحقل :attribute يجب أن يكون أكبر من أو يساوي :value حرف.',
    ],
    'hex_color' => 'الحقل :attribute يجب أن يكون لون سداسي عشري صالح.',
    'image' => 'الحقل :attribute يجب أن يكون صورة.',
    'in' => 'القيمة المختارة للحقل :attribute غير صالحة.',
    'in_array' => 'الحقل :attribute يجب أن يوجد في :other.',
    'in_array_keys' => 'الحقل :attribute يجب أن يحتوي على واحد على الأقل من المفاتيح التالية: :values.',
    'integer' => 'الحقل :attribute يجب أن يكون عدد صحيح.',
    'ip' => 'الحقل :attribute يجب أن يكون عنوان IP صالح.',
    'ipv4' => 'الحقل :attribute يجب أن يكون عنوان IPv4 صالح.',
    'ipv6' => 'الحقل :attribute يجب أن يكون عنوان IPv6 صالح.',
    'json' => 'الحقل :attribute يجب أن يكون سلسلة JSON صالحة.',
    'list' => 'الحقل :attribute يجب أن يكون قائمة.',
    'lowercase' => 'الحقل :attribute يجب أن يكون بأحرف صغيرة.',
    'lt' => [
        'array' => 'الحقل :attribute يجب أن يحتوي على أقل من :value عناصر.',
        'file' => 'الحقل :attribute يجب أن يكون أقل من :value كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون أقل من :value.',
        'string' => 'الحقل :attribute يجب أن يكون أقل من :value حرف.',
    ],
    'lte' => [
        'array' => 'الحقل :attribute يجب ألا يحتوي على أكثر من :value عناصر.',
        'file' => 'الحقل :attribute يجب أن يكون أقل من أو يساوي :value كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون أقل من أو يساوي :value.',
        'string' => 'الحقل :attribute يجب أن يكون أقل من أو يساوي :value حرف.',
    ],
    'mac_address' => 'الحقل :attribute يجب أن يكون عنوان MAC صالح.',
    'max' => [
        'array' => 'الحقل :attribute يجب ألا يحتوي على أكثر من :max عناصر.',
        'file' => 'الحقل :attribute يجب ألا يكون أكبر من :max كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب ألا يكون أكبر من :max.',
        'string' => 'الحقل :attribute يجب ألا يكون أكبر من :max حرف.',
    ],
    'max_digits' => 'الحقل :attribute يجب ألا يحتوي على أكثر من :max أرقام.',
    'mimes' => 'الحقل :attribute يجب أن يكون ملف من نوع: :values.',
    'mimetypes' => 'الحقل :attribute يجب أن يكون ملف من نوع: :values.',
    'min' => [
        'array' => 'الحقل :attribute يجب أن يحتوي على الأقل على :min عناصر.',
        'file' => 'الحقل :attribute يجب أن يكون على الأقل :min كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون على الأقل :min.',
        'string' => 'الحقل :attribute يجب أن يكون على الأقل :min حرف.',
    ],
    'min_digits' => 'الحقل :attribute يجب أن يحتوي على الأقل على :min أرقام.',
    'missing' => 'الحقل :attribute يجب أن يكون مفقوداً.',
    'missing_if' => 'الحقل :attribute يجب أن يكون مفقوداً عندما يكون :other بقيمة :value.',
    'missing_unless' => 'الحقل :attribute يجب أن يكون مفقوداً ما لم يكن :other بقيمة :value.',
    'missing_with' => 'الحقل :attribute يجب أن يكون مفقوداً عندما يكون :values موجوداً.',
    'missing_with_all' => 'الحقل :attribute يجب أن يكون مفقوداً عندما تكون :values موجودة.',
    'multiple_of' => 'الحقل :attribute يجب أن يكون مضاعفاً لـ :value.',
    'not_in' => 'القيمة المختارة للحقل :attribute غير صالحة.',
    'not_regex' => 'صيغة الحقل :attribute غير صالحة.',
    'numeric' => 'الحقل :attribute يجب أن يكون رقم.',
    'password' => [
        'letters' => 'الحقل :attribute يجب أن يحتوي على حرف واحد على الأقل.',
        'mixed' => 'الحقل :attribute يجب أن يحتوي على حرف كبير وحرف صغير على الأقل.',
        'numbers' => 'الحقل :attribute يجب أن يحتوي على رقم واحد على الأقل.',
        'symbols' => 'الحقل :attribute يجب أن يحتوي على رمز واحد على الأقل.',
        'uncompromised' => 'هذا :attribute ظهر في تسريب بيانات. الرجاء اختيار :attribute مختلف.',
    ],
    'present' => 'الحقل :attribute يجب أن يكون موجوداً.',
    'present_if' => 'الحقل :attribute يجب أن يكون موجوداً عندما يكون :other بقيمة :value.',
    'present_unless' => 'الحقل :attribute يجب أن يكون موجوداً ما لم يكن :other بقيمة :value.',
    'present_with' => 'الحقل :attribute يجب أن يكون موجوداً عندما يكون :values موجوداً.',
    'present_with_all' => 'الحقل :attribute يجب أن يكون موجوداً عندما تكون :values موجودة.',
    'prohibited' => 'الحقل :attribute ممنوع.',
    'prohibited_if' => 'الحقل :attribute ممنوع عندما يكون :other بقيمة :value.',
    'prohibited_if_accepted' => 'الحقل :attribute ممنوع عندما يتم قبول :other.',
    'prohibited_if_declined' => 'الحقل :attribute ممنوع عندما يتم رفض :other.',
    'prohibited_unless' => 'الحقل :attribute ممنوع ما لم يكن :other في :values.',
    'prohibits' => 'الحقل :attribute يمنع وجود :other.',
    'regex' => 'صيغة الحقل :attribute غير صالحة.',
    'required' => 'الحقل :attribute مطلوب.',
    'required_array_keys' => 'الحقل :attribute يجب أن يحتوي على مدخلات لـ: :values.',
    'required_if' => 'الحقل :attribute مطلوب عندما يكون :other بقيمة :value.',
    'required_if_accepted' => 'الحقل :attribute مطلوب عندما يتم قبول :other.',
    'required_if_declined' => 'الحقل :attribute مطلوب عندما يتم رفض :other.',
    'required_unless' => 'الحقل :attribute مطلوب ما لم يكن :other في :values.',
    'required_with' => 'الحقل :attribute مطلوب عندما يكون :values موجوداً.',
    'required_with_all' => 'الحقل :attribute مطلوب عندما تكون جميع :values موجودة.',
    'required_without' => 'الحقل :attribute مطلوب عندما لا يكون :values موجوداً.',
    'required_without_all' => 'الحقل :attribute مطلوب عندما لا يكون أي من :values موجوداً.',
    'same' => 'الحقل :attribute يجب أن يتطابق مع :other.',
    'size' => [
        'array' => 'الحقل :attribute يجب أن يحتوي على :size عناصر.',
        'file' => 'الحقل :attribute يجب أن يكون :size كيلوبايت.',
        'numeric' => 'الحقل :attribute يجب أن يكون :size.',
        'string' => 'الحقل :attribute يجب أن يكون :size حرف.',
    ],
    'starts_with' => 'الحقل :attribute يجب أن يبدأ بأحد القيم التالية: :values.',
    'string' => 'الحقل :attribute يجب أن يكون سلسلة نصية.',
    'timezone' => 'الحقل :attribute يجب أن يكون نطاق زمني صالح.',
    'unique' => 'هذا :attribute مأخوذ مسبقاً.',
    'uploaded' => 'فشل تحميل :attribute.',
    'uppercase' => 'الحقل :attribute يجب أن يكون بأحرف كبيرة.',
    'url' => 'الحقل :attribute يجب أن يكون رابط صحيح.',
    'ulid' => 'الحقل :attribute يجب أن يكون ULID صالح.',
    'uuid' => 'الحقل :attribute يجب أن يكون UUID صالح.',

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
            'rule-name' => 'رسالة مخصصة',
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
