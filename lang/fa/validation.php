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

    'accepted' => 'فیلد :attribute باید پذیرفته شود.',
    'accepted_if' => 'فیلد :attribute باید پذیرفته شود وقتی که :other برابر با :value است.',
    'active_url' => 'فیلد :attribute باید یک URL معتبر باشد.',
    'after' => 'فیلد :attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal' => 'فیلد :attribute باید تاریخی بعد از یا مساوی با :date باشد.',
    'alpha' => 'فیلد :attribute فقط باید شامل حروف باشد.',
    'alpha_dash' => 'فیلد :attribute فقط باید شامل حروف، اعداد، خطوط و زیرخط‌ها باشد.',
    'alpha_num' => 'فیلد :attribute فقط باید شامل حروف و اعداد باشد.',
    'array' => 'فیلد :attribute باید یک آرایه باشد.',
    'ascii' => 'فیلد :attribute فقط باید شامل کاراکترهای الفبایی و نمادهای تک‌بایتی باشد.',
    'before' => 'فیلد :attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal' => 'فیلد :attribute باید تاریخی قبل از یا مساوی با :date باشد.',
    'between' => [
        'array' => 'فیلد :attribute باید بین :min و :max آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید بین :min و :max کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید بین :min و :max باشد.',
        'string' => 'فیلد :attribute باید بین :min و :max کاراکتر باشد.',
    ],
    'boolean' => 'فیلد :attribute باید true یا false باشد.',
    'can' => 'مقدار :attribute حاوی یک مقدار غیرمجاز است.',
    'confirmed' => 'تاییدیه فیلد :attribute مطابقت ندارد.',
    'current_password' => 'رمز عبور نادرست است.',
    'date' => 'فیلد :attribute باید یک تاریخ معتبر باشد.',
    'date_equals' => 'فیلد :attribute باید یک تاریخ مساوی با :date باشد.',
    'date_format' => 'فرمت فیلد :attribute با :format مطابقت ندارد.',
    'decimal' => 'فیلد :attribute باید :decimal مرتبه اعشار داشته باشد.',
    'declined' => 'فیلد :attribute باید رد شود.',
    'declined_if' => 'فیلد :attribute باید رد شود وقتی که :other برابر با :value است.',
    'different' => 'فیلد :attribute و :other باید متفاوت باشند.',
    'digits' => 'فیلد :attribute باید :digits رقم باشد.',
    'digits_between' => 'فیلد :attribute باید بین :min و :max رقم باشد.',
    'dimensions' => 'ابعاد تصویر :attribute نامعتبر است.',
    'distinct' => 'فیلد :attribute دارای مقدار تکراری است.',
    'doesnt_end_with' => 'فیلد :attribute نباید با یکی از مقادیر زیر پایان یابد: :values.',
    'doesnt_start_with' => 'فیلد :attribute نباید با یکی از مقادیر زیر شروع شود: :values.',
    'email' => 'فیلد :attribute باید یک آدرس ایمیل معتبر باشد.',
    'ends_with' => 'فیلد :attribute باید با یکی از مقادیر زیر پایان یابد: :values.',
    'enum' => 'انتخاب شده :attribute نامعتبر است.',
    'exists' => 'انتخاب شده :attribute نامعتبر است.',
    'extensions' => 'فیلد :attribute باید یکی از پسوندهای زیر را داشته باشد: :values.',
    'file' => 'فیلد :attribute باید یک فایل باشد.',
    'filled' => 'فیلد :attribute باید دارای مقدار باشد.',
    'gt' => [
        'array' => 'فیلد :attribute باید بیشتر از :value آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید بیشتر از :value کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید بیشتر از :value باشد.',
        'string' => 'فیلد :attribute باید بیشتر از :value کاراکتر باشد.',
    ],
    'gte' => [
        'array' => 'فیلد :attribute باید حداقل :value آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید حداقل :value کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید حداقل :value باشد.',
        'string' => 'فیلد :attribute باید حداقل :value کاراکتر باشد.',
    ],
    'hex_color' => 'فیلد :attribute باید یک رنگ شش‌زا باشد.',
    'image' => 'فیلد :attribute باید یک تصویر باشد.',
    'in' => 'انتخاب شده :attribute نامعتبر است.',
    'in_array' => 'فیلد :attribute باید در :other وجود داشته باشد.',
    'integer' => 'فیلد :attribute باید یک عدد صحیح باشد.',
    'ip' => 'فیلد :attribute باید یک آدرس IP معتبر باشد.',
    'ipv4' => 'فیلد :attribute باید یک آدرس IPv4 معتبر باشد.',
    'ipv6' => 'فیلد :attribute باید یک آدرس IPv6 معتبر باشد.',
    'json' => 'فیلد :attribute باید یک رشته JSON معتبر باشد.',
    'list' => 'فیلد :attribute باید یک لیست باشد.',
    'lowercase' => 'فیلد :attribute باید حروف کوچک باشد.',
    'lt' => [
        'array' => 'فیلد :attribute باید کمتر از :value آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید کمتر از :value کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید کمتر از :value باشد.',
        'string' => 'فیلد :attribute باید کمتر از :value کاراکتر باشد.',
    ],
    'lte' => [
        'array' => 'فیلد :attribute نباید بیشتر از :value آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید کمتر یا مساوی با :value کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید کمتر یا مساوی با :value باشد.',
        'string' => 'فیلد :attribute باید کمتر یا مساوی با :value کاراکتر باشد.',
    ],
    'mac_address' => 'فیلد :attribute باید یک آدرس MAC معتبر باشد.',
    'max' => [
        'array' => 'فیلد :attribute نباید بیشتر از :max آیتم داشته باشد.',
        'file' => 'فیلد :attribute نباید بیشتر از :max کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute نباید بیشتر از :max باشد.',
        'string' => 'فیلد :attribute نباید بیشتر از :max کاراکتر باشد.',
    ],
    'max_digits' => 'فیلد :attribute نباید بیشتر از :max رقم باشد.',
    'mimes' => 'فیلد :attribute باید یک فایل از نوع :values باشد.',
    'mimetypes' => 'فیلد :attribute باید یک فایل از نوع :values باشد.',
    'min' => [
        'array' => 'فیلد :attribute باید حداقل :min آیتم داشته باشد.',
        'file' => 'فیلد :attribute باید حداقل :min کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید حداقل :min باشد.',
        'string' => 'فیلد :attribute باید حداقل :min کاراکتر باشد.',
    ],
    'min_digits' => 'فیلد :attribute باید حداقل :min رقم داشته باشد.',
    'missing' => 'فیلد :attribute باید مفقود باشد.',
    'missing_if' => 'فیلد :attribute باید مفقود باشد وقتی که :other برابر با :value است.',
    'missing_unless' => 'فیلد :attribute باید مفقود باشد مگر اینکه :other برابر با :value باشد.',
    'missing_with' => 'فیلد :attribute باید مفقود باشد وقتی که :values موجود است.',
    'missing_with_all' => 'فیلد :attribute باید مفقود باشد وقتی که :values موجود هستند.',
    'multiple_of' => 'فیلد :attribute باید یک ضریب از :value باشد.',
    'not_in' => 'انتخاب شده :attribute نامعتبر است.',
    'not_regex' => 'فرمت فیلد :attribute نامعتبر است.',
    'numeric' => 'فیلد :attribute باید یک عدد باشد.',
    'password' => [
        'letters' => 'فیلد :attribute باید حاوی حداقل یک حرف باشد.',
        'mixed' => 'فیلد :attribute باید حاوی حداقل یک حرف بزرگ و یک حرف کوچک باشد.',
        'numbers' => 'فیلد :attribute باید حاوی حداقل یک عدد باشد.',
        'symbols' => 'فیلد :attribute باید حاوی حداقل یک نماد باشد.',
        'uncompromised' => 'با :attribute داده‌هایی که در یک نشت داده ظاهر شده‌اند. لطفاً یک :attribute متفاوت انتخاب کنید.',
    ],
    'present' => 'فیلد :attribute باید حاضر باشد.',
    'present_if' => 'فیلد :attribute باید حاضر باشد وقتی که :other برابر با :value است.',
    'present_unless' => 'فیلد :attribute باید حاضر باشد مگر اینکه :other برابر با :value باشد.',
    'present_with' => 'فیلد :attribute باید حاضر باشد وقتی که :values موجود است.',
    'present_with_all' => 'فیلد :attribute باید حاضر باشد وقتی که :values موجود هستند.',
    'prohibited' => 'فیلد :attribute ممنوع است.',
    'prohibited_if' => 'فیلد :attribute ممنوع است وقتی که :other برابر با :value است.',
    'prohibited_unless' => 'فیلد :attribute ممنوع است مگر اینکه :other در :values باشد.',
    'prohibits' => 'فیلد :attribute ممنوع می‌کند :other از حضور داشتن.',
    'regex' => 'فرمت فیلد :attribute نامعتبر است.',
    'required' => 'فیلد :attribute الزامی است.',
    'required_array_keys' => 'فیلد :attribute باید شامل موارد برای :values باشد.',
    'required_if' => 'فیلد :attribute الزامی است وقتی که :other برابر با :value است.',
    'required_if_accepted' => 'فیلد :attribute الزامی است وقتی که :other پذیرفته شود.',
    'required_unless' => 'فیلد :attribute الزامی است مگر اینکه :other در :values باشد.',
    'required_with' => 'فیلد :attribute الزامی است وقتی که :values موجود است.',
    'required_with_all' => 'فیلد :attribute الزامی است وقتی که :values موجود هستند.',
    'required_without' => 'فیلد :attribute الزامی است وقتی که :values موجود نیست.',
    'required_without_all' => 'فیلد :attribute الزامی است وقتی که هیچ یک از :values موجود نیستند.',
    'same' => 'فیلد :attribute باید با :other مطابقت داشته باشد.',
    'size' => [
        'array' => 'فیلد :attribute باید شامل :size آیتم باشد.',
        'file' => 'فیلد :attribute باید :size کیلوبایت باشد.',
        'numeric' => 'فیلد :attribute باید :size باشد.',
        'string' => 'فیلد :attribute باید :size کاراکتر باشد.',
    ],
    'starts_with' => 'فیلد :attribute باید با یکی از مقادیر زیر شروع شود: :values.',
    'string' => 'فیلد :attribute باید یک رشته باشد.',
    'timezone' => 'فیلد :attribute باید یک منطقه زمانی معتبر باشد.',
    'unique' => ' :attribute از قبل گرفته شده است.',
    'uploaded' => 'آپلود فایل :attribute انجام نشد.',
    'uppercase' => 'فیلد :attribute باید حروف بزرگ باشد.',
    'url' => 'فیلد :attribute باید یک URL معتبر باشد.',
    'ulid' => 'فیلد :attribute باید یک ULID معتبر باشد.',
    'uuid' => 'فیلد :attribute باید یک UUID معتبر باشد.',

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

    'attributes' => [
        'title' => 'عنوان ویدیو',
        'length' => 'مدت زمان ویدیو',
        'slug' => 'نام یکتا ویدیو',
        'url' => 'آدرس اینترنتی ویدیو',
        'thumbnail' => 'تصویر بند انگشتی ویدیو',
        'description' => 'توضیحات ویدیو',
    ],

];
