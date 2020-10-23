<?php

function navbarStructure() {
    $navbarStructure = array(
        [
            'label' => 'Home',
            'link' => URL::route('home-page'),
        ],
        [
            'label' => 'About us',
            'link' => URL::route('about-us'),
        ],
        [
            'label' => 'Products',
            'link' => URL::route('home-page'),
            'children' => [
                [ 'label' => '', 'link' => ''],
                [ 'label' => '', 'link' => ''],
                [ 'label' => '', 'link' => ''],
                [ 'label' => '', 'link' => ''],
            ]
        ],
        [
            'label' => 'Services',
            'link' => URL::route('services'),
        ],
        [
            'label' => 'Customers',
            'link' => URL::route('customers'),
        ],
        [
            'label' => 'Partners',
            'link' => URL::route('partners'),
        ],
        [
            'label' => 'Contact',
            'link' => URL::route('contact'),
        ],
    );

    return $navbarStructure;
}

?>