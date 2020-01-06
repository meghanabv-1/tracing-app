<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'Metro Solutions',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>Metro Solutions</b>',

    'logo_mini' => '<b>ME</b>TRO',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'dashboard',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */
    
    'menu' => [
        'MAIN NAVIGATION',
        [
            'text'        => 'Dashboard',
            'url'         => 'dashboard',
            'icon'        => 'file',
        ],
        'EMPLOYEE DETAILS',
        [
            'text' => 'Add Employees',
            'icon' => 'user',
            'submenu' => [
                [
                    'text' => 'Over All Team Details',
                    'url'  => 'overall/create',
                ],
                [
                    'text' => 'Team Lead Details',
                    'url'  => 'teamlead/create',
                ],
                [
                    'text' => 'Tracer Details',
                    'url'  => 'tracer/create',
                ],
                [
                   'text' => 'Field Executive Detais',
                   'url'  => 'fieldexecutive/create',
                ],
                [
                    'text' => 'Bank Partners',
                    'url'  => 'bank/create',
                ],
            ],
        ],
                

        [
            'text' => ' Our Employees',
            'icon' => 'lock',
            'submenu' => [
                [
                    'text' => 'Team Leads',
                    'url'  => 'teamlead',
                ],
                [
                    'text' => 'Tracers',
                    'url'  => 'tracer',
                ],
                [
                    'text' => 'Field Executives',
                    'url'  => 'fieldexecutive',
                ],
                [
                    'text' => 'Bank Partners',
                    'url'  => 'bank',
                ],
                
            ],
       
        ],
                [
                   'text' => ' Calender',
                   'url'  => 'events',
                   'icon' => 'calendar',
                ],
        [
            'text' => ' Browse Customers',
            'icon' => 'lock',
            'submenu' => [
                [
                    'text' => ' FILE',
                    'url'  => 'importExport',
                ],
                [
                    'text' => 'Customer Details',
                    'url'  => 'customer',
                ],
            ],
        ],
        [   
             'text' => ' Allocation Details',
             'icon' => 'lock',
             'submenu' => [
                [ 
                    'text' => ' FILE',
                    'url'  => 'import',
                ],
                [
                    'text' => 'Customer Details',
                    'url'  => 'loaninfo',
                ],
           ],
        ],
        [
            'text' => 'Performance',
            'icon' => 'lock',
            'submenu' => [
                [
                    'text' => ' FieldExecutive Performance',
                    'url'  => 'chart3',
                ],
                [
                    'text' => ' OverallTeam Performance',
                    'url'  => 'chart',
                ],
                [
                    'text' => ' Enter Team Details',
                    'url'  => 'overall/create',
                ],
                [
                    'text' => ' Overall Team Details',
                    'url'  => 'overall',
                ],

                [
                    'text' => 'Enter Executive Details',
                    'url'  => 'executive/create',
                ],
        
            ],
        ],
           
       
        
            'LABELS',
                [  
                    'text'       => 'EmailBox',
                    'icon_color' => 'yellow',
                    'icon' => 'envelope',
                    'url'  => 'email',
                ],
                [
                    'text'       => 'Rules',
                    'icon_color' => 'yellow',
                    'url'        =>'companyrules',
                ],
                [
                    'text'       => 'Photos',
                    'icon_color' => 'aqua',
                    'icon'       => 'image',
                    'url'        =>'createalbum',
                ],
                [
                    'text'       => 'Our Company',
                    'icon_color' => 'image',
                    'url'        =>'about',
                ],
                [   
                    'text'       => 'ICICI CAPS',
                    'icon_color' => 'image',
                    'url'        =>'https://caps.icicibank.com/finnsso/gateway/SSOGateway?requestID=7000003',
                ],

    ],
  
    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
       // JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        App\MenuFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];
