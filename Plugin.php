<?php namespace October\Test;

use Backend;
use System\Classes\PluginBase;

/**
 * Test Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'October Tester',
            'description' => 'Used for testing the Relation Controller behavior and others.',
            'author'      => 'Alexey Bobkov, Samuel Georges',
            'icon'        => 'icon-child',
            'homepage'    => 'https://github.com/daftspunk/oc-test-plugin'
        ];
    }

    public function registerNavigation()
    {
        return [
            'test' => [
                'label'       => 'Playground',
                'url'         => Backend::url('october/test/people'),
                'icon'        => 'icon-child',
                'order'       => 200,

                'sideMenu' => [
                    'people' => [
                        'label'       => 'People',
                        'icon'        => 'icon-database',
                        'url'         => Backend::url('october/test/people'),
                    ],
                    'posts' => [
                        'label'       => 'Posts',
                        'icon'        => 'icon-database',
                        'url'         => Backend::url('october/test/posts'),
                    ],
                    'users' => [
                        'label'       => 'Users',
                        'icon'        => 'icon-database',
                        'url'         => Backend::url('october/test/users'),
                    ],
                    'countries' => [
                        'label'       => 'Countries',
                        'icon'        => 'icon-database',
                        'url'         => Backend::url('october/test/countries'),
                    ],
                    'reviews' => [
                        'label'       => 'Reviews',
                        'icon'        => 'icon-database',
                        'url'         => Backend::url('october/test/reviews'),
                    ],
                    'galleries' => [
                        'label'       => 'Galleries',
                        'icon'        => 'icon-database',
                        'url'         => Backend::url('october/test/galleries'),
                    ],
                    'trees' => [
                        'label'       => 'Trees',
                        'icon'        => 'icon-database',
                        'url'         => Backend::url('october/test/trees'),
                    ],
                ]
            ]
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'October\Test\FormWidgets\TimeChecker' => [
                'code'  => 'timecheckertest'
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            'October\Test\Components\PersonCreate' => 'personCreate',
            'October\Test\Components\PersonUpdate' => 'personUpdate',
            'October\Test\Components\PersonPreview' => 'personPreview',
            'October\Test\Components\PersonList' => 'personList',
            'October\Test\Components\CountryCreate' => 'countryCreate',
            'October\Test\Components\CountryUpdate' => 'countryUpdate',
            'October\Test\Components\CountryPreview' => 'countryPreview',
            'October\Test\Components\CountryList' => 'countryList',
            'October\Test\Components\UserCreate' => 'userCreate',
            'October\Test\Components\UserUpdate' => 'userUpdate',
            'October\Test\Components\UserList' => 'userList',
        ];
    }
}
