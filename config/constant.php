<?php

return [

    'email_varified'    => false,
    'secret_token'      => 'k9l3xJuL6D9dBmvPIDMe6Th3Wj8WpzeJKvDbcBU4vgsdfgvdgdfN6DOVXmZzgKHEZ2hPYdGsyhhJdmCWzvFkGpl',
    'phoneRegExp'       => "/^(?:(?:\+|0{0,2})91(\s*|[-])?|[0]?)?([6789]\d{2}([ -]?)\d{3}([ -]?)\d{4})$/",
    'emailRegExp'       => '/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i',
    'gstinRegExp'       => "/\d{2}[A-Z]{5}\d{4}[A-Z]{1}[A-Z\d]{1}[Z]{1}[A-Z\d]{1}/",

    'setting_array'     => [
        '1'             => 'General Settings',
        '2'             => 'Social Links Setting',
        '3'             => 'Mail Setting',
    ],
    'countries' => [
        // --- Middle East ---
        ['code' => '+971', 'name' => 'United Arab Emirates', 'flag' => '🇦🇪'],
        ['code' => '+966', 'name' => 'Saudi Arabia',         'flag' => '🇸🇦'],
        ['code' => '+974', 'name' => 'Qatar',                'flag' => '🇶🇦'],
        ['code' => '+973', 'name' => 'Bahrain',              'flag' => '🇧🇭'],
        ['code' => '+965', 'name' => 'Kuwait',               'flag' => '🇰🇼'],
        ['code' => '+968', 'name' => 'Oman',                 'flag' => '🇴🇲'],
        ['code' => '+964', 'name' => 'Iraq',                 'flag' => '🇮🇶'],
        ['code' => '+962', 'name' => 'Jordan',               'flag' => '🇯🇴'],
        ['code' => '+961', 'name' => 'Lebanon',              'flag' => '🇱🇧'],
        ['code' => '+972', 'name' => 'Israel',               'flag' => '🇮🇱'],
        ['code' => '+963', 'name' => 'Syria',                'flag' => '🇸🇾'],
        ['code' => '+98',  'name' => 'Iran',                 'flag' => '🇮🇷'],
        ['code' => '+90',  'name' => 'Turkey',               'flag' => '🇹🇷'],
        ['code' => '+967', 'name' => 'Yemen',                'flag' => '🇾🇪'],

        // --- South Asia ---
        ['code' => '+91',  'name' => 'India',                'flag' => '🇮🇳'],
        ['code' => '+92',  'name' => 'Pakistan',             'flag' => '🇵🇰'],
        ['code' => '+977', 'name' => 'Nepal',                'flag' => '🇳🇵'],
        ['code' => '+94',  'name' => 'Sri Lanka',            'flag' => '🇱🇰'],
        ['code' => '+880', 'name' => 'Bangladesh',           'flag' => '🇧🇩'],
        ['code' => '+975', 'name' => 'Bhutan',               'flag' => '🇧🇹'],
        ['code' => '+960', 'name' => 'Maldives',             'flag' => '🇲🇻'],

        // --- East Asia ---
        ['code' => '+86',  'name' => 'China',                'flag' => '🇨🇳'],
        ['code' => '+81',  'name' => 'Japan',                'flag' => '🇯🇵'],
        ['code' => '+82',  'name' => 'South Korea',          'flag' => '🇰🇷'],
        ['code' => '+852', 'name' => 'Hong Kong',            'flag' => '🇭🇰'],
        ['code' => '+853', 'name' => 'Macau',                'flag' => '🇲🇴'],
        ['code' => '+886', 'name' => 'Taiwan',               'flag' => '🇹🇼'],

        // --- Southeast Asia ---
        ['code' => '+65',  'name' => 'Singapore',            'flag' => '🇸🇬'],
        ['code' => '+60',  'name' => 'Malaysia',             'flag' => '🇲🇾'],
        ['code' => '+62',  'name' => 'Indonesia',            'flag' => '🇮🇩'],
        ['code' => '+63',  'name' => 'Philippines',          'flag' => '🇵🇭'],
        ['code' => '+66',  'name' => 'Thailand',             'flag' => '🇹🇭'],
        ['code' => '+84',  'name' => 'Vietnam',              'flag' => '🇻🇳'],
        ['code' => '+855', 'name' => 'Cambodia',             'flag' => '🇰🇭'],
        ['code' => '+856', 'name' => 'Laos',                 'flag' => '🇱🇦'],
        ['code' => '+95',  'name' => 'Myanmar',              'flag' => '🇲🇲'],
        ['code' => '+673', 'name' => 'Brunei',               'flag' => '🇧🇳'],

        // --- Central Asia ---
        ['code' => '+7',   'name' => 'Kazakhstan',           'flag' => '🇰🇿'],
        ['code' => '+996', 'name' => 'Kyrgyzstan',           'flag' => '🇰🇬'],
        ['code' => '+998', 'name' => 'Uzbekistan',           'flag' => '🇺🇿'],
        ['code' => '+992', 'name' => 'Tajikistan',           'flag' => '🇹🇯'],
        ['code' => '+993', 'name' => 'Turkmenistan',         'flag' => '🇹🇲'],
    ],




];
