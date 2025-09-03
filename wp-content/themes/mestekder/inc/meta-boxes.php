<?php

// SAYFA AYARLARI
add_filter('rwmb_meta_boxes', 'sayfa_ayarlari');
function sayfa_ayarlari($meta_boxes)
{
    $prefix = 'mestekder_sayfalar_';
    $meta_boxes[] = [
        'title'      => esc_html__('Sayfa Ayarları', 'mestekder'),
        'id'         => 'sayfa',
        'post_types' => ['page'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'type' => 'image',
                'name' => esc_html__('Sayfa Banner Resmi', 'mestekder'),
                'id'   => $prefix . 'banner',
            ],
        ],
    ];
    return $meta_boxes;
}


// SLIDER AYARLARI
add_filter('rwmb_meta_boxes', 'slider_ayarlari');
function slider_ayarlari($meta_boxes)
{
    $prefix = 'mestekder_slider_';

    $meta_boxes[] = [
        'title'      => esc_html__('Slider Ayarları', 'mestekder'),
        'id'         => 'slider',
        'post_types' => ['slider'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'id'   => $prefix . 'slider_ikinci_baslik',
                'name' => 'Slider İkinci Başlık',
                'type' => 'text',
            ],
            [
                'id'   => $prefix . 'slider_desc',
                'name' => 'Slider Açıklama',
                'type' => "text",
            ],

        ],
    ];

    return $meta_boxes;
}


// HİZMET AYARLARI
add_filter('rwmb_meta_boxes', 'hizmet_ayarlari');
function hizmet_ayarlari($meta_boxes)
{
    $prefix = 'mestekder_hizmet_';
    $meta_boxes[] = [
        'title'      => esc_html__('Hizmet Ayarları', 'mestekder'),
        'id'         => 'hizmetler',
        'post_types' => ['hizmetler'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'type' => 'image',
                'name' => esc_html__('Hizmet Kapak Resmi', 'mestekder'),
                'id'   => $prefix . 'hizmet_kapak_img',
            ],
            [
                'type' => 'image',
                'name' => esc_html__('Hizmet Banner Resmi', 'mestekder'),
                'id'   => $prefix . 'hizmet_banner_img',
            ],
            [
                'type' => 'wysiwyg',
                'name' => esc_html__('Hizmet Kısa Açıklama', 'mestekder'),
                'id'   => $prefix . 'hizmet_short_content',
            ],
        ],
    ];
    return $meta_boxes;
}

// FİYATLARIMIZ AYARLARI
add_filter('rwmb_meta_boxes', 'fiyatlarimiz_ayarlari');
function fiyatlarimiz_ayarlari($meta_boxes)
{
    $prefix = 'mestekder_fiyatlarimiz_';
    $meta_boxes[] = [
        'title'      => esc_html__('Fiyatlarımız Ayarları', 'mestekder'),
        'id'         => 'fiyatlar',
        'post_types' => ['fiyatlar'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'type' => 'wysiwyg',
                'name' => esc_html__('Fiyatlar Açıklama', 'mestekder'),
                'id'   => $prefix . 'fiyatlar_text',
            ],
            [
                'type' => 'text',
                'name' => esc_html__('Fiyat', 'mestekder'),
                'id'   => $prefix . 'fiyat',
            ],
        ],
    ];
    return $meta_boxes;
}

// ÜRÜN AYARLARI
add_filter('rwmb_meta_boxes', 'urun_ayarlari');
function urun_ayarlari($meta_boxes)
{
    $prefix = 'mestekder_urun_';
    $meta_boxes[] = [
        'title'      => esc_html__('Ürün Ayarları', 'mestekder'),
        'id'         => 'urun',
        'post_types' => ['urun'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'type' => 'image',
                'name' => esc_html__('Ürün Resmi', 'mestekder'),
                'id'   => $prefix . 'urun_image',
            ],
            [
                'type' => 'text',
                'name' => esc_html__('Ürün Alt Başlık', 'mestekder'),
                'id'   => $prefix . 'urun_altbaslik',
            ],
        ],
    ];
    return $meta_boxes;
}

// LOGO SLIDER AYARLARI
add_filter('rwmb_meta_boxes', 'logo_slider_ayarlari');
function logo_slider_ayarlari($meta_boxes)
{
    $prefix = 'mestekder_logo_slider_';
    $meta_boxes[] = [
        'title'      => esc_html__('logo Slider Ayarları', 'mestekder'),
        'id'         => 'logo_slider',
        'post_types' => ['logo_slider'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'type' => 'image',
                'name' => esc_html__('logo Slider Background Resmi', 'mestekder'),
                'id'   => $prefix . 'logo_slider_background_image',
            ],
            [
                'type' => 'image',
                'name' => esc_html__('logo Slider Mobil Resmi', 'mestekder'),
                'id'   => $prefix . 'logo_slider_mobil_image',
            ],
        ],
    ];
    return $meta_boxes;
}
// HABERLER AYARLARI
add_filter('rwmb_meta_boxes', 'haberler_ayarlari');
function haberler_ayarlari($meta_boxes)
{
    $prefix = 'haberler_';
    $meta_boxes[] = [
        'title'      => esc_html__('Haberler Ayarları', 'mestekder'),
        'id'         => 'haberler_meta',
        'post_types' => ['haberler'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'type' => 'date',
                'name' => esc_html__('Tarih', 'mestekder'),
                'id'   => $prefix . 'tarih',
            ],
            [
                'type' => 'text',
                'name' => esc_html__('Yazan Kişi', 'mestekder'),
                'id'   => $prefix . 'yazar',
            ],
        ],
    ];
    return $meta_boxes;
}

// projeler AYARLARI
add_filter('rwmb_meta_boxes', 'projeler_ayarlari');
function projeler_ayarlari($meta_boxes)
{
    $prefix = 'projeler_';
    $meta_boxes[] = [
        'title'      => esc_html__('projeler Ayarları', 'mestekder'),
        'id'         => 'projeler_meta',
        'post_types' => ['projeler'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'type' => 'date',
                'name' => esc_html__('Tarih', 'mestekder'),
                'id'   => $prefix . 'tarih',
            ],
            [
                'type' => 'text',
                'name' => esc_html__('Yazan Kişi', 'mestekder'),
                'id'   => $prefix . 'yazar',
            ],
        ],
    ];
    return $meta_boxes;
}
// faaliyet_alan AYARLARI
add_filter('rwmb_meta_boxes', 'faaliyet_alan_ayarlari');
function faaliyet_alan_ayarlari($meta_boxes)
{
    $prefix = 'faaliyet_alan_';
    $meta_boxes[] = [
        'title'      => esc_html__('faaliyet_alan Ayarları', 'mestekder'),
        'id'         => 'faaliyet_alan_meta',
        'post_types' => ['faaliyet_alan'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'type' => 'text',
                'name' => esc_html__('Proje Baslik', 'mestekder'),
                'id'   => $prefix . 'proje_baslik',
            ],
        ],
    ];
    return $meta_boxes;
}
// EKİBİMİZ AYARLARI
add_filter('rwmb_meta_boxes', 'ekibimiz_ayarlari');
function ekibimiz_ayarlari($meta_boxes)
{
    $prefix = 'ekibimiz_ayarlari_';

    $meta_boxes[] = [
        'title'      => esc_html__('Ekibimiz Ayarları', 'mestekder'),
        'id'         => 'ekibimiz_meta',
        'post_types' => ['ekip'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            ['type' => 'text', 'name' => 'Facebook', 'id' => $prefix . 'facebook'],
            ['type' => 'text', 'name' => 'Twitter', 'id' => $prefix . 'twitter'],
            ['type' => 'text', 'name' => 'Linkedin', 'id' => $prefix . 'linkedin'],
            ['type' => 'text', 'name' => 'Mail', 'id' => $prefix . 'mail'],
            ['type' => 'text', 'name' => 'Üye Adı', 'id' => $prefix . 'uyead'],
            ['type' => 'text', 'name' => 'Ünvanı', 'id' => $prefix . 'unvan'],
        ],
    ];

    return $meta_boxes;
}


// YÖNETİM KURULU AYARLARI
add_filter('rwmb_meta_boxes', 'yonetim_ayarlari');
function yonetim_ayarlari($meta_boxes)
{
    $prefix = 'ekibimiz_';
    $meta_boxes[] = [
        'title'      => esc_html__('yonetim Ayarları', 'mestekder'),
        'id'         => 'yonetim_meta',
        'post_types' => ['yonetim'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'type' => 'text',
                'name' => esc_html__('Facebook', 'mestekder'),
                'id'   => $prefix . 'facebook',
            ],
            [
                'type' => 'text',
                'name' => esc_html__('Twitter', 'mestekder'),
                'id'   => $prefix . 'twitter',
            ],
            [
                'type' => 'text',
                'name' => esc_html__('Linkedin', 'mestekder'),
                'id'   => $prefix . 'linkedin',
            ],
            [
                'type' => 'text',
                'name' => esc_html__('Mail', 'mestekder'),
                'id'   => $prefix . 'mail',
            ],
            [
                'type' => 'text',
                'name' => esc_html__('Üye Adı', 'mestekder'),
                'id'   => $prefix . 'uyead',
            ],
            [
                'type' => 'text',
                'name' => esc_html__('Ünvanı', 'mestekder'),
                'id'   => $prefix . 'unvan',
            ],
        ],
    ];
    return $meta_boxes;
}
// HAKKIMIZDA AYARLARI
add_filter('rwmb_meta_boxes', 'hakkimizda_ayarlari');
function hakkimizda_ayarlari($meta_boxes)
{
    $prefix = 'hakkimizda_';
    $meta_boxes[] = [
        'title'      => esc_html__('hakkimizda Ayarları', 'mestekder'),
        'id'         => 'hakkimizda_meta',
        'post_types' => ['hakkimizda'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'type' => 'text',
                'name' => esc_html__('Biz Kimiz Yazisi', 'mestekder'),
                'id'   => $prefix . 'biz_kimiz',
            ],
            [
                'type' => 'text',
                'name' => esc_html__('Misyon Yazisi', 'mestekder'),
                'id'   => $prefix . 'misyon_yazi',
            ],
            [
                'type' => 'text',
                'name' => esc_html__('Bagis Yazisi', 'mestekder'),
                'id'   => $prefix . 'bagis_yazi',
            ],
        ],
    ];
    return $meta_boxes;
}
// DUYURU AYARLARI
add_filter('rwmb_meta_boxes', 'duyuru_ayarlari');
function duyuru_ayarlari($meta_boxes)
{
    $prefix = 'duyuru_';
    $meta_boxes[] = [
        'title'      => esc_html__('duyuru Ayarları', 'mestekder'),
        'id'         => 'duyuru_meta',
        'post_types' => ['duyuru'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'type' => 'date',
                'name' => esc_html__('Yayın Tarihi', 'mestekder'),
                'id'   => $prefix . 'yayin_tarih',
            ],

        ],
    ];
    return $meta_boxes;
}


add_filter('rwmb_meta_boxes', 'faaliyetler_ayarlari');
function faaliyetler_ayarlari($meta_boxes)
{
    $prefix = 'duyuru_';
    $meta_boxes[] = [
        'title'      => esc_html__('faaliyetler Ayarları', 'mestekder'),
        'id'         => 'faaliyetler_meta',
        'post_types' => ['faaliyetler'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'type' => 'text',
                'name' => esc_html__('İkon Kodu', 'mestekder'),
                'id'   => $prefix . 'faaliyet_icon',
            ],

        ],
    ];
    return $meta_boxes;
}

function faaliyet_icon_renk_callback($post)
{
    // Mevcut değerleri al
    $icon = get_post_meta($post->ID, '_faaliyet_icon', true);
    $color = get_post_meta($post->ID, '_faaliyet_color', true);
?>
    <p>
        <label>İkon (Font Awesome class):</label>
        <input type="text" name="faaliyet_icon" value="<?php echo esc_attr($icon); ?>" placeholder="fa-home">
    </p>
    <p>
        <label>Renk (Hex kodu):</label>
        <input type="text" name="faaliyet_color" value="<?php echo esc_attr($color); ?>" placeholder="#1f3a93">
    </p>
<?php
}

// Kaydetme işlemi
add_action('save_post', 'faaliyet_icon_renk_save');
function faaliyet_icon_renk_save($post_id)
{
    if (isset($_POST['faaliyet_icon'])) {
        update_post_meta($post_id, '_faaliyet_icon', sanitize_text_field($_POST['faaliyet_icon']));
    }
    if (isset($_POST['faaliyet_color'])) {
        update_post_meta($post_id, '_faaliyet_color', sanitize_text_field($_POST['faaliyet_color']));
    }
}
