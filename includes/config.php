<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Noack News',
        'site_url' => '',
        'pretty_uri' => false,
        'nav_menu' => [
            '' => 'Home',
            'Noticia 1' => 'Noticia 1',
            'Noticia 2' => 'Noticia 2',
            'contacto' => 'Contacto',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v1.5',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
