<?php

return [
    /* ------------------------------------------------------------------------------------------------
     |  Title
     | ------------------------------------------------------------------------------------------------
     */
    'title' => [
        'default'   => 'ЧТО Я НАШЕЛ НА АЛИЭКСПРЕСС',
        'site-name' => 'http://aliinfo.ru',
        'separator' => '|',
        'first'     => true,
        'max'       => 55,
    ],

    /* ------------------------------------------------------------------------------------------------
     |  Description
     | ------------------------------------------------------------------------------------------------
     */
    'description' => [
        'default'   => 'Что я нашел на алиэкспресс — это крутые видеообзоры на самые интересные вещи с сайта Aliexpress! Заходи!',
        'max'       => 155,
    ],

    /* ------------------------------------------------------------------------------------------------
     |  Keywords
     | ------------------------------------------------------------------------------------------------
     */
    'keywords'  => [
        'default'   => [
            'алиэкспресс', 'aliexpress', 'обзоры товаров', 'китайский магазин', 'топ алиэкспресс', 'что я нашел на алиэкспресс'
        ],
    ],

    /* ------------------------------------------------------------------------------------------------
     |  Miscellaneous
     | ------------------------------------------------------------------------------------------------
     */
    'misc'      => [
        'canonical' => true,
        'robots'    => ! env('APP_DEBUG', false), // Tell robots not to index the content if it's not on production
        'default'   => [
            'viewport'  => 'width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,minimal-ui', // Responsive design thing
            'author'    => '', // https://plus.google.com/[YOUR PERSONAL G+ PROFILE HERE]
            'publisher' => '', // https://plus.google.com/[YOUR PERSONAL G+ PROFILE HERE]
        ],
    ],

    /* ------------------------------------------------------------------------------------------------
     |  Webmaster Tools
     | ------------------------------------------------------------------------------------------------
     */
    'webmasters' => [
        'google'    => '',
        'bing'      => '',
        'alexa'     => '',
        'pinterest' => '',
        'yandex'    => '',
    ],

    /* ------------------------------------------------------------------------------------------------
     |  Open Graph
     | ------------------------------------------------------------------------------------------------
     */
    'open-graph' => [
        'enabled'     => true,
        'prefix'      => 'og:',
        'type'        => 'website',
        'title'       => 'ЧТО Я НАШЕЛ НА АЛИЭКСПРЕСС',
        'description' => 'Что я нашел на алиэкспресс — это крутые видеообзоры на самые интересные вещи с сайта Aliexpress! Заходи!',
        'site-name'   => 'http://aliinfo.ru',
        'properties'  => [
            //
        ],
    ],

    /* ------------------------------------------------------------------------------------------------
     |  Twitter
     | ------------------------------------------------------------------------------------------------
     |  Supported card types : 'app', 'gallery', 'photo', 'player', 'product', 'summary', 'summary_large_image'.
     */
    'twitter' => [
        'enabled' => true,
        'prefix'  => 'twitter:',
        'card'    => 'summary_large_image',
        'site'    => '@aliinfo',
        'title'   => 'aliinfo.ru',
        'metas'   => [
            //
        ],
    ],

    /* ------------------------------------------------------------------------------------------------
     |  Analytics
     | ------------------------------------------------------------------------------------------------
     */
    'analytics' => [
        'google' => '', // UA-XXXXXXXX-X
    ],
];