<?php

return [

    'label' => 'Grupo de clientes',

    'plural_label' => 'Grupos de clientes',

    'table' => [
        'name' => [
            'label' => 'Nome',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'default' => [
            'label' => 'Padrão',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Nome',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'default' => [
            'label' => 'Padrão',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'Este grupo de clientes não pode ser deletado pois existem clientes vinculados.',
            ],
        ],
    ],
];
