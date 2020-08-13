<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'producto' => [
        'title' => 'Productos',

        'actions' => [
            'index' => 'Productos',
            'create' => 'New Producto',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Nombre' => 'Nombre',
            'Localizacion' => 'Localizacion',
            'Precio' => 'Precio',
            'Caducidad' => 'Caducidad',
            
        ],
    ],

    'oferta' => [
        'title' => 'Ofertas',

        'actions' => [
            'index' => 'Ofertas',
            'create' => 'New Oferta',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'masproducto' => [
        'title' => 'Masproductos',

        'actions' => [
            'index' => 'Masproductos',
            'create' => 'New Masproducto',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'usuario' => [
        'title' => 'Usuarios',

        'actions' => [
            'index' => 'Usuarios',
            'create' => 'New Usuario',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];