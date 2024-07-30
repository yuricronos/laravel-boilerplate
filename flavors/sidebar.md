
## Dynamic Sidebar Content
### Quick Links
- [Installation](../README.md)
- [Dynamic Sidebar](flavors/sidebar.md)
<br/> <br/>

### Create a View Using Artisan
To create a new view for your sidebar, use the Laravel Artisan command. For example, to create a view for a dashboard page, you can run:

```
$ php artisan make:view pages/dashboard
```

This will generate a new view file located at resources/views/pages/dashboard.blade.php

### Define the side_bar Constant
Open the config folder of your Laravel project and find the appropriate configuration file (e.g., sidebar.php or a custom configuration file). If it doesn’t exist, create a new file called sidebar.php inside the config folder.

### Set the side_bar Array
In your sidebar.php or the relevant configuration file, define the side_bar constant as an array. Each element of the array should be an associative array with the following key-value pairs:

```

<!-- sampl roles -->
$roles = new stdClass;
$roles->all = [0, 1];
$roles->admin = [0];
$roles->user = [1];

return [
    'side_bar' => [
        [
            'name' => "Dashboard", // Name displayed in the sidebar
            'route' => "dashboard", // Route name
            'icon' => "home", // Icon name
            'view' => "pages.dashboard", // View location
            'role' => $roles->all,

            // Optional collapse key for items with sub-items
            'collapse' => [
                'prefix' => "basic-ui", // Prefix for the URL path
                'id' => "ui-basic", // ID used for collapsing sub-items
                'item' => [
                    [
                        'name' => "Buttons", 
                        'route' => "basic-ui.buttons", 
                        'view' => "pages.basic-ui.buttons",
                        'role' => $roles->admin
                    ],
                    [
                        'name' => "Typography", 
                        'route' => "basic-ui.typography", 
                        'view' => "pages.basic-ui.typography",
                        'role' => $roles->admin
                    ]
                ]
            ]
        ],
        // Add more items here as needed
    ]
];

```
<ul>
<li> <b>name</b>: The name or text to display in the sidebar. </li>
<li> <b>route</b>: The name of the route defined in your web.php or API routes file. </li>
<li> <b>icon</b>: The name of the icon to display (make sure to use an appropriate icon name). </li>
<li> <b>view</b>: The location of the view file to be rendered. </li>
<li> <b>collapse</b>: An optional key that defines sub-items if the main item has a dropdown or nested items. </li>
<li>
    <ul>
        <li> prefix: The prefix for the URL path of sub-items. </li>
        <li> id: The ID used for collapsing the sub-items in the sidebar. </li>
        <li> item: An array of sub-items, each with name, route, and view keys. </li>
    </ul>
</li>
</ul>