<?php

return [
    [
        'name' => 'menus.home',
        'route' => fn() => route('home.index')
    ],
    [
        'name' => 'About',
        'route' => fn() => route('about.index')
    ],
    [
        'name' => 'menus.services',
        'route' => fn() => route('service.index')
    ],
    [
        'name' => 'menus.portfolio',
        'route' => fn() => route('portfolio.index')
    ],
    [
        'name' => 'menus.contact',
        'route' => fn() => route('contact.index')
    ],
];
