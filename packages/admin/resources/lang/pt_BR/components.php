<?php

return [
    'tags' => [
        'notification' => [

            'updated' => 'Tags atualizadas',

        ],
    ],

    'activity-log' => [

        'input' => [

            'placeholder' => 'Adicionar um comentário',

        ],

        'action' => [

            'add-comment' => 'Adicionar comentário',

        ],

        'system' => 'Sistema',

        'partials' => [
            'orders' => [
                'order_created' => 'Pedido criado',

                'status_change' => 'Situação atualizada',

                'capture' => 'Pagamento de :amount com cartão terminando em :last_four',

                'authorized' => 'Autorizado o valor de :amount no cartão terminado em :last_four',

                'refund' => 'Reembolso no valor de :amount no cartão terminado em :last_four',

                'address' => ':type atualizado',

                'billingAddress' => 'Endereço de cobrança',

                'shippingAddress' => 'Endereço de entrega',
            ],

            'update' => [
                'updated' => ':model atualizado',
            ],

            'create' => [
                'created' => ':model criado',
            ],

            'tags' => [
                'updated' => 'Tags atualizadas',
                'added' => 'Adicionado',
                'removed' => 'Removido',
            ],
        ],

        'notification' => [
            'comment_added' => 'Comentário adicionado',
        ],

    ],

    'forms' => [
        'youtube' => [
            'helperText' => 'Informe o código (ID) do video do YouTube, por exemplo: dQw4w9WgXcQ',
        ],
    ],

    'collection-tree-view' => [
        'actions' => [
            'move' => [
                'form' => [
                    'target_id' => [
                        'label' => 'Coleção pai',
                    ],
                ],
            ],
        ],
        'notifications' => [
            'collections-reordered' => [
                'success' => 'Coleções reordenadas',
            ],
            'node-expanded' => [
                'danger' => 'Não foi possível carregar as coleções',
            ],
            'delete' => [
                'danger' => 'Não foi possível deletar a coleção',
            ],
        ],
    ],

    'product-options-list' => [
        'add-option' => [
            'label' => 'Adicionar Opção',
        ],
        'delete-option' => [
            'label' => 'Deletar opção',
        ],
        'remove-shared-option' => [
            'label' => 'Remover opção compartilhada',
        ],
        'add-value' => [
            'label' => 'Adicionar outro valor',
        ],
        'name' => [
            'label' => 'Nome',
        ],
        'values' => [
            'label' => 'Valores',
        ],
    ],
];
