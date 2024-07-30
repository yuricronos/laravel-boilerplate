<?PHP

$roles = new stdClass;
$roles->all = [0, 1];
$roles->admin = [0];
$roles->user = [1];

return [
    'roles' => $roles,











    // side bar 
    'side_bar' => [
        [
            'name' => "Dashboard",
            'route' => "dashboard",
            'icon' => "home",
            'view' => "pages.dashboard",
            'role' => $roles->all
        ], [
            'name' => "Basic UI Elements",
            'route' => "#",
            'icon' => "crosshairs-gps",
            'role' => $roles->all,
            'collapse' => [
                'prefix' => "basic-ui",
                'id' => "ui-basic",
                'item' => [
                    [
                        'name' => "Buttons",
                        'route' => "basic-ui.buttons",
                        'view' => "pages.basic-ui.buttons",
                        'role' => $roles->all
                    ], [
                        'name' => "Typography",
                        'route' => "basic-ui.typography",
                        'view' => "pages.basic-ui.typography",
                        'role' => $roles->all
                    ]
                ]
            ]
        ], [
            'name' => "Icons",
            'route' => "icons",
            'icon' => "contacts",
            'view' => "pages.icons",
            'role' => $roles->all
        ], [
            'name' => "Forms",
            'route' => "forms",
            'icon' => "format-list-bulleted",
            'view' => "pages.forms",
            'role' => $roles->all
        ], [
            'name' => "Charts",
            'route' => "charts",
            'icon' => "chart-bar",
            'view' => "pages.charts",
            'role' => $roles->all
        ], [
            'name' => "Tables",
            'route' => "basic-tables",
            'icon' => "table-large",
            'view' => "pages.tables",
            'role' => $roles->all
        ], [
            'name' => "Toast & Alerts",
            'route' => "toast",
            'icon' => "tooltip",
            'view' => "pages.toast",
            'role' => $roles->all
        ], [
            'name' => "Sample Pages",
            'route' => "#",
            'icon' => "medical-bag",
            'role' => $roles->all,
            'collapse' => [
                'prefix' => "sample-pages",
                'id' => "general-pages",
                'item' => [
                    [
                        'name' => "Blank Page",
                        'route' => "",
                        'view' => "",
                        'role' => $roles->all
                    ], [
                        'name' => "Login",
                        'route' => "",
                        'view' => "",
                        'role' => $roles->all
                    ], [
                        'name' => "Register",
                        'route' => "",
                        'view' => "",
                        'role' => $roles->all
                    ], [
                        'name' => "404",
                        'route' => "",
                        'view' => "",
                        'role' => $roles->all
                    ], [
                        'name' => "500",
                        'route' => "",
                        'view' => "",
                        'role' => $roles->all
                    ]
                ]
            ]
        ]
    ],










    // nav menu
    'nav_menu' => [
        'messages' => true,
        'notification' => true,
        'profile' => [
            'item' => [
                [
                    'name' => "Manage Users",
                    'route' => "manage-users",
                    'icon' => "account-multiple",
                    'view' => "pages.manage-users",
                    'role' => $roles->admin
                ]
            ],
            'logout' => true
        ],
        'fullscreen' => true,
        'settings' => true,
        'logout' => true
    ]










];
