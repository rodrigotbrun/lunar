<?php

return [

    'label' => 'Produto',

    'plural_label' => 'Produtos',

    'status' => [
        'unpublished' => [
            'content' => 'Rascunho, este produto esta escondido em todos os canais e grupos de clientes.',
        ],
        'availability' => [
            'customer_groups' => 'Este produto está atualmente indisponível para todos grupos de clientes.',
            'channels' => 'Este produto está atualmente indisponível para todos os canais.',
        ],
    ],

    'table' => [
        'status' => [
            'label' => 'Situação',
            'states' => [
                'deleted' => 'Deletado',
                'draft' => 'Rascunho',
                'published' => 'Publicado',
            ],
        ],
        'name' => [
            'label' => 'Nome',
        ],
        'brand' => [
            'label' => 'Marca',
        ],
        'sku' => [
            'label' => 'SKU',
        ],
        'stock' => [
            'label' => 'Estoque',
        ],
        'producttype' => [
            'label' => 'Tipo de produto',
        ],
    ],

    'actions' => [
        'edit_status' => [
            'label' => 'Atualizar situação',
            'heading' => 'Atualizar situação',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Nome',
        ],
        'brand' => [
            'label' => 'Marca',
        ],
        'sku' => [
            'label' => 'SKU',
        ],
        'producttype' => [
            'label' => 'Tipo de produto',
        ],
        'status' => [
            'label' => 'Situação',
            'options' => [
                'published' => [
                    'label' => 'Publicado',
                    'description' => 'Este produto estará disponível em todos os grupos de clientes e canais ativos.',
                ],
                'draft' => [
                    'label' => 'Rascunho',
                    'description' => 'Este produto estará escondido em todos os grupos de clientes e canais ativos.',
                ],
            ],
        ],
        'tags' => [
            'label' => 'Tags',
        ],
        'collections' => [
            'label' => 'Coleções',
        ],
    ],

    'pages' => [
        'availability' => [
            'label' => 'Disponibilidade',
        ],
        'edit' => [
            'title' => 'Informações Básicas',
        ],
        'identifiers' => [
            'label' => 'Identificadores do produto',
        ],
        'inventory' => [
            'label' => 'Inventario',
        ],
        'pricing' => [
            'form' => [
                'tax_class_id' => [
                    'label' => 'Classe de impostos',
                ],
                'tax_ref' => [
                    'label' => 'Referência de impostos',
                    'helper_text' => 'Opcional, para integração com sistemas de terceiros.',
                ],
            ],
        ],
        'shipping' => [
            'label' => 'Envio',
        ],
        'variants' => [
            'label' => 'Variantes',
        ],
        'collections' => [
            'label' => 'Coleções',
        ],
        'associations' => [
            'label' => 'Produtos associados',
        ],
    ],

];
