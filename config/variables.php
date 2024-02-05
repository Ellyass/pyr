<?php

/*
 * Variables
 */

return [
    'user' => [
        'select_types' => [
            'job' => 'Meslek',
            'department' => 'Bölüm',
            'work_title' => 'Ünvan',
        ]
    ],
    'crm' => [
        'customer_types' => [
            '1' => 'TEŞVİK',
            '2' => 'KVKK',
            '3' => 'BODROLAMA',
            '4' => 'EĞİTİM',
            '5' => 'DANIŞMANLIK',
            '6' => 'İKMETRİK',
            '8' => 'YAZILIM',
            '9' => 'PERFORMANS'
        ],
        'status' => [
            '' => 'SEÇİNİZ',
            'POTANSİYEL' => 'POTANSİYEL',
            'GERÇEK' => 'GERÇEK',
        ]
    ],
    'cv' => [
        'tabs' => [
            'personal_detail' => 'Kişisel Bilgiler',
            'personal_contact' => 'İletişim Bilgileri',
            'work_experience' => 'İş Deneyimi',
            'educational_information' => 'Eğitim Bilgileri',
            'certificate' => 'Sertifikalar',
            'foreign_language' => 'Yabancı Dil',
            'skill' => 'Yetenekler',
            'reference' => 'Referanslar',
            'expert_detail' => 'Uzman Ücret & Yetkinlik Detayı',
        ],
        'genders' => [
            'e' => 'Erkek',
            'k' => 'Kadın',
        ],
        'marital' => [
            0 => 'Bekar',
            1 => 'Evli',
        ],
        'working_styles' => [
            1 => 'Serbest',
            2 => 'Yarı Zamanlı / Parttime',
            3 => 'Dönemsel / Proje Bazlı',
            4 => 'Stajyer',
            5 => 'Tam Zamanlı',
            6 => 'Gönüllü',
        ],
        'language_points' => [
            1 => 'Başlangıç',
            2 => 'Temel',
            3 => 'Orta',
            4 => 'İyi',
            5 => 'İleri',
        ],
        'training_levels' => [
            1 => 'Lise',
            2 => 'Ön Lisans',
            3 => 'Lisans',
            4 => 'Yüksek Lisans',
            5 => 'Doktora',
        ],

    ],
    'months' => [
        0 => 'Seçiniz',
        1 => 'Ocak',
        2 => 'Şubat',
        3 => 'Mart',
        4 => 'Nisan',
        5 => 'Mayıs',
        6 => 'Haziran',
        7 => 'Temmuz',
        8 => 'Ağustos',
        9 => 'Eylül',
        10 => 'Ekim',
        11 => 'Kasım',
        12 => 'Aralık',
    ],
    'question' => [
        'types' => [
            1 => 'Tek doğru cevap',
            2 => 'Birden çok doğru cevap',
            3 => 'Cevapsız',
        ],
        'type_colors' => [
            1 => 'dark',
            2 => 'info',
            3 => 'warning',
        ],
        'difficulties' => [
            '' => 'Seçiniz',
            'kolay' => 'Kolay',
            'orta' => 'Orta',
            'zor' => 'Zor',
        ],
    ],
    'test_types' => [
        1 => 'Standart hesaplama',
        2 => 'Seçeneklerin toplanması',
        3 => 'Seçeneklerin puanlarının toplanması',
    ],
    'test' => [
        'groups' => [
            1 => 'Genel',
            2 => 'İngilizce',
            3 => 'Yetkinlik',
            4 => 'Almanca',
            5 => 'Fransızca',
            6 => 'İtalyanca',
        ]
    ],

    'performance' => [
          'units' => [
                '' => 'Seçiniz',
                'kilo' => 'Kilo',
                'adet' => 'Adet',
                'saat' => 'Saat',
          ],
          'periods' => [
                '' => 'Seçiniz',
                '3' => '3 Ay',
                '6' => '6 Ay',
                '12' => '12 Ay',
          ],
          'status' => [
                0 => '<span class="label label-outline label-warning">Onay sürecinde</span>',
                1 => '<span class="label label-outline label-danger">Düzenleme talep edildi</span>',
                2 => '<span class="label label-outline label-success">Onaylandı</span>',
                3 => '<span class="label label-outline label-success">Değerlendirme için düzenleme talep edildi</span>',
                4 => '<span class="label label-outline label-success">Değerlendirme onay sürecinde</span>',
                5 => '<span class="label label-outline label-success">Değerlendirme Onaylandı</span>',
          ],
          'realizations' => [
                '' => 'Seçiniz',
                1 => 'Düşük Performans',
                2 => 'Tam Performans',
                3 => 'Mükemmel Performans',
          ],

    ],
    'customization' => [
          'dashboard_background' => [
                'bg-1.jpg' => 'Resim 1',
                'bg-2.jpg' => 'Resim 2',
                'bg-3.jpg' => 'Resim 3',
                'bg-4.jpg' => 'Resim 4',
                'bg-5.jpg' => 'Resim 5',
                'bg-6.jpg' => 'Resim 6',
                'bg-7.jpg' => 'Resim 7',
          ]
    ],
    'interview' => [
          'types' => [
                0 => 'Yüz Yüze',
                1 => 'Online',
                2 => 'Video',
          ],
          'types_interview' => [
                0 => 'Yüz Yüze',
                1 => 'Online',
          ],
          'status' => [
                0 => 'Bekliyor',
                1 => 'Gerçekleşti',
                2 => 'Gerçekleşmedi',
          ]

    ],
];
