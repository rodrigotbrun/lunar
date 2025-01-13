<?php

return [
    'collections' => [
        'create_root' => [
            'label' => 'Criar coleção raiz',
        ],
        'create_child' => [
            'label' => 'Criar coleção filho',
        ],
        'move' => [
            'label' => 'Mover coleção',
        ],
        'delete' => [
            'label' => 'Deletar',
        ],
    ],
    'orders' => [
        'update_status' => [
            'label' => 'Atualizar situação',
            'wizard' => [
                'step_one' => [
                    'label' => 'Situação',
                ],
                'step_two' => [
                    'label' => 'Mailers & Notifications',
                    'no_mailers' => 'There are no mailers available for this status.',
                ],
                'step_three' => [
                    'label' => 'Visualizar e Salvar',
                    'no_mailers' => 'No mailers have been chosen for preview.',
                ],
            ],
            'notification' => [
                'label' => 'Situação do pedido atualizado',
            ],
            'billing_email' => [
                'label' => 'Email de cobrança',
            ],
            'shipping_email' => [
                'label' => 'Email de envio',
            ],
        ],

    ],
];
