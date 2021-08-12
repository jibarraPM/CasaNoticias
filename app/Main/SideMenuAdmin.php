<?php

namespace App\Main;

class SideMenuAdmin
{
    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard-Admin',
                'sub_menu' => [
                    'dashboard-overview-1' => [
                        'icon' => '',
                        'route_name' => 'dashboard-admin',
                        'title' => 'Overview 1'
                    ],
                    'dashboard-overview-2' => [
                        'icon' => '',
                        'route_name' => 'dashboard-admin-2',
                        'title' => 'Overview 2'
                    ],
                    'dashboard-overview-3' => [
                        'icon' => '',
                        'route_name' => 'dashboard-admin-3',
                        'title' => 'Overview 3'
                    ]
                ]
            ],
        ];
    }
}
