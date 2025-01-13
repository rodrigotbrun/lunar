<?php

return [

    'label' => 'Grupo de atributo',

    'plural_label' => 'Grupos de atributos',

    'table' => [
        'attributable_type' => [
            'label' => 'Tipo',
        ],
        'name' => [
            'label' => 'Nome',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'position' => [
            'label' => 'Posição',
        ],
    ],

    'form' => [
        'attributable_type' => [
            'label' => 'Tipo',
        ],
        'name' => [
            'label' => 'Nome',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'position' => [
            'label' => 'Posição',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'Este grupo de atributos não pode ser deletado porque existem atributos associados.',
            ],
        ],
    ],
];
