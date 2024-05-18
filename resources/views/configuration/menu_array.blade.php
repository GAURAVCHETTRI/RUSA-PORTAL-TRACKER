<?php

$userRole = session('user_role', 'guest'); // Default to 'guest' if no role is set

$menu = array(
    array(
        'name' => 'Dashboard',
        'icon' => 'fa fa-dashboard',
        'dropdown' => false,
        'route' => 'admin.dashboard',
        'dropdown_items' => array(),
    ),
);

if ($userRole == 'admin') {
    $menu = array_merge($menu, array(
        array(
            'name' => 'Users',
            'icon' => 'fa fa-users',
            'dropdown' => true,
            'route' => '',
            'dropdown_items' => array(
                array(
                    'name' => 'Add User',
                    'icon' => 'fa fa-circle-o',
                    'route' => 'admin.users.create',
                ),
                array(
                    'name' => 'Manage Users',
                    'icon' => 'fa fa-circle-o',
                    'route' => 'admin.users.index',
                ),
                array(
                    'name' => 'Manage User Roles',
                    'icon' => 'fa fa-circle-o',
                    'route' => 'admin.roles.index',
                ),
            ),
        ),
        array(
            'name' => 'Pages',
            'icon' => 'fa fa-file',
            'dropdown' => true,
            'route' => '',
            'dropdown_items' => array(
                array(
                    'name' => 'Add Page',
                    'icon' => 'fa fa-circle-o',
                    'route' => 'admin.pages.create',
                ),
                array(
                    'name' => 'Manage Pages',
                    'icon' => 'fa fa-circle-o',
                    'route' => 'admin.pages.index',
                ),
            ),
        ),
        array (
          'name' => 'MDC',
          'icon' => 'fa fa-file',
          'dropdown' => true,
          'route' => '',
          'dropdown_items' => 
          array (
            0 => 
            array (
              'name' => 'Add MDC',
              'icon' => 'fa fa-circle-o',
              'route' => 'admin.MDC.create',
            ),
            1 => 
            array (
              'name' => 'Manage MDC',
              'icon' => 'fa fa-circle-o',
              'route' => 'admin.MDC.index',
            ),
          ),
        ),
        array(
            'name' => 'Professional College',
            'icon' => 'fa fa-file',
            'dropdown' => true,
            'route' => '',
            'dropdown_items' => array(
                array(
                    'name' => 'Add Professional College',
                    'icon' => 'fa fa-circle-o',
                    'route' => 'admin.Professional_college.create',
                ),
                array(
                    'name' => 'Manage Professional College',
                    'icon' => 'fa fa-circle-o',
                    'route' => 'admin.Professional_college.index',
                ),
            ),
        ),
        array(
            'name' => 'Girls Hostel',
            'icon' => 'fa fa-file',
            'dropdown' => true,
            'route' => '',
            'dropdown_items' => array(
                array(
                    'name' => 'Add Girls Hostel',
                    'icon' => 'fa fa-circle-o',
                    'route' => 'admin.Girls_Hostel.create',
                ),
                array(
                    'name' => 'Manage Girls Hostel',
                    'icon' => 'fa fa-circle-o',
                    'route' => 'admin.Girls_Hostel.index',
                ),
            ),
        ),
        array (
          'name' => 'Settings',
          'icon' => 'fa fa-gear',
          'dropdown' => true,
          'route' => '',
          'dropdown_items' => 
          array (
            0 => 
            array (
              'name' => 'General Settings',
              'icon' => 'fa fa-circle-o',
              'route' => 'admin.settings.index',
            ),
            1 => 
            array (
              'name' => 'Edit Profile',
              'icon' => 'fa fa-circle-o',
              'route' => 'admin.settings.edit_profile',
            ),
          ),
        ),
    ));
}

if ($userRole == 'mdc') {
    $menu = array_merge($menu, array(
        array(
            'name' => 'Settings',
            'icon' => 'fa fa-gear',
            'dropdown' => true,
            'route' => '',
            'dropdown_items' => array(
                array(
                    'name' => 'Edit Profile',
                    'icon' => 'fa fa-circle-o',
                    'route' => 'admin.settings.edit_profile',
                ),
            ),
        ),
        array(
            'name' => 'MDC',
            'icon' => 'fa fa-file',
            'dropdown' => true,
            'route' => '',
            'dropdown_items' => array(
                array(
                    'name' => 'Add MDC',
                    'icon' => 'fa fa-circle-o',
                    'route' => 'admin.MDC.create',
                ),
                array(
                    'name' => 'Manage MDC',
                    'icon' => 'fa fa-circle-o',
                    'route' => 'admin.MDC.index',
                ),
            ),
        ),
    ));
}

if ($userRole == 'girls_hostel') {
  $menu = array_merge($menu, array(
      array(
          'name' => 'Settings',
          'icon' => 'fa fa-gear',
          'dropdown' => true,
          'route' => '',
          'dropdown_items' => array(
              array(
                  'name' => 'Edit Profile',
                  'icon' => 'fa fa-circle-o',
                  'route' => 'admin.settings.edit_profile',
              ),
          ),
      ),
      array(
          'name' => 'Girls Hostel',
          'icon' => 'fa fa-file',
          'dropdown' => true,
          'route' => '',
          'dropdown_items' => array(
              array(
                  'name' => 'Add Girls Hostel',
                  'icon' => 'fa fa-circle-o',
                  'route' => 'admin.Girls_Hostel.create',
              ),
              array(
                  'name' => 'Manage Girls Hostel',
                  'icon' => 'fa fa-circle-o',
                  'route' => 'admin.Girls_Hostel.index',
              ),
          ),
      ),
      array(
          'name' => 'Modules',
          'icon' => 'fa fa-cubes',
          'dropdown' => false,
          'route' => 'admin.modules.index',
          'dropdown_items' => array(),
      ),
      // array(
      //     'name' => 'Option 1',
      //     'icon' => 'fa fa-circle-o',
      //     'dropdown' => false,
      //     'route' => '#',
      //     'dropdown_items' => array(),
      // ),
      // array(
      //     'name' => 'Option 2',
      //     'icon' => 'fa fa-circle-o',
      //     'dropdown' => false,
      //     'route' => '#',
      //     'dropdown_items' => array(),
      // ),
      array(
          'name' => 'Logout',
          'icon' => 'fa fa-sign-out',
          'dropdown' => false,
          'route' => 'logout',
          'dropdown_items' => array(),
      ),
  ));
}



if ($userRole == 'professional_colleges') {
    $menu = array_merge($menu, array(
        array(
            'name' => 'Settings',
            'icon' => 'fa fa-gear',
            'dropdown' => true,
            'route' => '',
            'dropdown_items' => array(
                array(
                    'name' => 'Edit Profile',
                    'icon' => 'fa fa-circle-o',
                    'route' => 'admin.settings.edit_profile',
                ),
            ),
        ),
        array(
            'name' => 'Professional College',
            'icon' => 'fa fa-file',
            'dropdown' => true,
            'route' => '',
            'dropdown_items' => array(
                array(
                    'name' => 'Add Professional College',
                    'icon' => 'fa fa-circle-o',
                    'route' => 'admin.Professional_college.create',
                ),
                array(
                    'name' => 'Manage Professional College',
                    'icon' => 'fa fa-circle-o',
                    'route' => 'admin.Professional_college.index',
                ),
            ),
        ),
        // array(
        //     'name' => 'Option 1',
        //     'icon' => 'fa fa-circle-o',
        //     'dropdown' => false,
        //     'route' => '.',
        //     'dropdown_items' => array(),
        // ),
        // array(
        //     'name' => 'Option 2',
        //     'icon' => 'fa fa-circle-o',
        //     'dropdown' => false,
        //     'route' => '#',
        //     'dropdown_items' => array(),
        // ),
        array(
            'name' => 'Logout',
            'icon' => 'fa fa-sign-out',
            'dropdown' => false,
            'route' => 'logout',
            'dropdown_items' => array(),
        ),
    ));
  }
?>