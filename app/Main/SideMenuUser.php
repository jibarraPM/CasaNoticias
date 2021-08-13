<?php

namespace App\Main;

class SideMenuUser
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
            'Inicio' => [
                'icon' => 'home',
                'route_name' => 'index',
                'params' => [
                    'layout' => 'simple-menu-user'
                ],
                'title' => 'Inicio'
            ],
            
        ];
    }
}
