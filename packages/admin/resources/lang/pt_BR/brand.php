<?php

return [

    'label' => 'Marca',

    'plural_label' => 'Marcas',

    'table' => [
        'name' => [
            'label' => 'Nome',
        ],
        'products_count' => [
            'label' => 'No. Products',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Nome',
        ],
    ],

    'action' => [
        'delete' => [
            'notification' => [
                'error_protected' => 'Esta marca não pode ser deletada porque existem produtos associados.',
            ],
        ],
    ],
    'pages' => [
        'products' => [
            'label' => 'Produtos',
            'actions' => [
                'attach' => [
                    'label' => 'Vincular um produto',
                    'form' => [
                        'record_id' => [
                            'label' => 'Produto',
                        ],
                    ],
                    'notification' => [
                        'success' => 'Produto vinculado com a marca',
                    ],
                ],
                'detach' => [
                    'notification' => [
                        'success' => 'Vínculo removido.',
                    ],
                ],
            ],
        ],
        'collections' => [
            'label' => 'Coleções',
            'table' => [
                'header_actions' => [
                    'attach' => [
                        'record_select' => [
                            'placeholder' => 'Selecione uma coleção',
                        ],
                    ],
                ],
            ],
            'actions' => [
                'attach' => [
                    'label' => 'Associar uma coleção',
                ],
            ],
        ],
    ],

];
