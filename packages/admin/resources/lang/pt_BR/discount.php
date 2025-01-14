<?php

return [
    'plural_label' => 'Descontos',
    'label' => 'Desconto',
    'form' => [
        'conditions' => [
            'heading' => 'Condições',
        ],
        'buy_x_get_y' => [
            'heading' => 'Compre um leve outro',
        ],
        'amount_off' => [
            'heading' => 'Valor de desconto',
        ],
        'name' => [
            'label' => 'Nome',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'starts_at' => [
            'label' => 'Data início',
        ],
        'ends_at' => [
            'label' => 'Data fim',
        ],
        'priority' => [
            'label' => 'Prioridade',
            'helper_text' => 'Descontos com maior prioridade serão aplicados primeiro.',
            'options' => [
                'low' => [
                    'label' => 'Baixa',
                ],
                'medium' => [
                    'label' => 'Média',
                ],
                'high' => [
                    'label' => 'Alta',
                ],
            ],
        ],
        'stop' => [
            'label' => 'Parar outros descontos depois deste.',
        ],
        'coupon' => [
            'label' => 'Cupom',
            'helper_text' => 'Informe o código do cupom para aplicar o disconto, se manter este campo vazio, um código sera gerado automaticamente.',
        ],
        'max_uses' => [
            'label' => 'Quantidade máxima de usos',
            'helper_text' => 'Deixe em branco para usos ilimitados.',
        ],
        'max_uses_per_user' => [
            'label' => 'Quantidade máxima de usos por usuario',
            'helper_text' => 'Deixe em branco para usos ilimitados.',
        ],
        'minimum_cart_amount' => [
            'label' => 'Valor mínimo do carrinho',
        ],
        'min_qty' => [
            'label' => 'Quantidade de produto',
            'helper_text' => 'Defina a quantidade de produtos para qualificar o uso deste cupom.',
        ],
        'reward_qty' => [
            'label' => 'No. of free items',
            'helper_text' => 'How many of each item are discounted.',
        ],
        'max_reward_qty' => [
            'label' => 'Maximum reward quantity',
            'helper_text' => 'The maximum amount of products which can be discounted, regardless of criteria.',
        ],
        'automatic_rewards' => [
            'label' => 'Automatically add rewards',
            'helper_text' => 'Switch on to add reward products when not present in the basket.',
        ],
    ],
    'table' => [
        'name' => [
            'label' => 'Nome',
        ],
        'status' => [
            'label' => 'Situação',
            \Lunar\Models\Discount::ACTIVE => [
                'label' => 'Ativo',
            ],
            \Lunar\Models\Discount::PENDING => [
                'label' => 'Pendente',
            ],
            \Lunar\Models\Discount::EXPIRED => [
                'label' => 'Expirado',
            ],
            \Lunar\Models\Discount::SCHEDULED => [
                'label' => 'Agendado',
            ],
        ],
        'type' => [
            'label' => 'Tipo',
        ],
        'starts_at' => [
            'label' => 'Data início',
        ],
        'ends_at' => [
            'label' => 'Data fim',
        ],
    ],
    'pages' => [
        'availability' => [
            'label' => 'Disponibilidade',
        ],
        'limitations' => [
            'label' => 'Limitações',
        ],
    ],
    'relationmanagers' => [
        'collections' => [
            'title' => 'Coleções',
            'description' => 'Selecione em quais coleções este disconto será limitado.',
            'actions' => [
                'attach' => [
                    'label' => 'Vincular Coleção',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Nome',
                ],
                'type' => [
                    'label' => 'Tipo',
                    'limitation' => [
                        'label' => 'Limitação',
                    ],
                    'exclusion' => [
                        'label' => 'Exclusão',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Limitação',
                        ],
                        'exclusion' => [
                            'label' => 'Exclusão',
                        ],
                    ],
                ],
            ],
        ],
        'brands' => [
            'title' => 'Marcas',
            'description' => 'Selecione em quais marcas este disconto pode ser aplicado.',
            'actions' => [
                'attach' => [
                    'label' => 'Vincular Marca',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Nome',
                ],
                'type' => [
                    'label' => 'Tipo',
                    'limitation' => [
                        'label' => 'Limitação',
                    ],
                    'exclusion' => [
                        'label' => 'Exclusão',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Limitação',
                        ],
                        'exclusion' => [
                            'label' => 'Exclusão',
                        ],
                    ],
                ],
            ],
        ],
        'products' => [
            'title' => 'Produtos',
            'description' => 'Selecione em quais produtos limitam o uso deste desconto.',
            'actions' => [
                'attach' => [
                    'label' => 'Adicinar Produto',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Nome',
                ],
                'type' => [
                    'label' => 'Tipo',
                    'limitation' => [
                        'label' => 'Limitação',
                    ],
                    'exclusion' => [
                        'label' => 'Exclusão',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Limitação',
                        ],
                        'exclusion' => [
                            'label' => 'Exclusão',
                        ],
                    ],
                ],
            ],
        ],
        'rewards' => [
            'title' => 'Product Rewards',
            'description' => 'Select which products will be discounted if they exist in the cart and the above conditions are met.',
            'actions' => [
                'attach' => [
                    'label' => 'Add Product',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Name',
                ],
                'type' => [
                    'label' => 'Type',
                    'limitation' => [
                        'label' => 'Limitação',
                    ],
                    'exclusion' => [
                        'label' => 'Exclusão',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Limitação',
                        ],
                        'exclusion' => [
                            'label' => 'Exclusão',
                        ],
                    ],
                ],
            ],
        ],
        'conditions' => [
            'title' => 'Product Conditions',
            'description' => 'Select the products required for the discount to apply.',
            'actions' => [
                'attach' => [
                    'label' => 'Add Product',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Name',
                ],
                'type' => [
                    'label' => 'Type',
                    'limitation' => [
                        'label' => 'Limitação',
                    ],
                    'exclusion' => [
                        'label' => 'Exclusão',
                    ],
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Limitação',
                        ],
                        'exclusion' => [
                            'label' => 'Exclusão',
                        ],
                    ],
                ],
            ],
        ],
        'productvariants' => [
            'title' => 'Variantes de produtos',
            'description' => 'Select which product variants this discount should be limited to.',
            'actions' => [
                'attach' => [
                    'label' => 'Adicionar variante de produto',
                ],
            ],
            'table' => [
                'name' => [
                    'label' => 'Nome',
                ],
                'sku' => [
                    'label' => 'SKU',
                ],
                'values' => [
                    'label' => 'Opção(ões)',
                ],
            ],
            'form' => [
                'type' => [
                    'options' => [
                        'limitation' => [
                            'label' => 'Limitação',
                        ],
                        'exclusion' => [
                            'label' => 'Exclusão',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
