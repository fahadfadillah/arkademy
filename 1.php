<?php


$biodata = [
    'name' => 'Fahad Fadillah',
    'age' => 23,
    'address' => 'Blok Babakan Sari',
    'hobbies' => 'futsal',
    'is_married' => false,
    'list_school' => [
        [
            'name' => 'SDN 6 Batujajar',
            'year_in' => 2002,
            'year_out' => 2008,
            'major' => null
        ],
        [
            'name' => 'SMP 1 Batujajar',
            'year_in' => 2008,
            'year_out' => 2011,
            'major' => null
        ],
        [
            'name' => 'SMA 1 Batujajar',
            'year_in' => 2011,
            'year_out' => 2014,
            'major' => null
        ],
        [
            'name' => 'Politeknik TEDC Bandung',
            'year_in' => 2015,
            'year_out' => 2018,
            'major' => 'Teknik Komputer'
        ]
    ],
    'skills' => [
        [
            'skill_name' => 'PHP',
            'level' => 'beginner'
        ],
        [
            'skill_name' => 'MySql',
            'level' => 'beginner'
        ],
    ],
    'interest_in_coding' => true
];

print_r($biodata);
