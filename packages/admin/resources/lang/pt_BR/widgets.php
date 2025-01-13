<?php

return [
    'dashboard' => [
        'orders' => [
            'order_stats_overview' => [
                'stat_one' => [
                    'label' => 'Pedidos hoje',
                    'increase' => ':percentage% increase from :count yesterday',
                    'decrease' => ':percentage% decrease from :count yesterday',
                    'neutral' => 'Nenhuma mudança comparado com ontem',
                ],
                'stat_two' => [
                    'label' => 'Pedidos últimos 7 dias',
                    'increase' => ':percentage% increase from :count last period',
                    'decrease' => ':percentage% decrease from :count last period',
                    'neutral' => 'Nenhuma mudança comparado ao período anterior',
                ],
                'stat_three' => [
                    'label' => 'Orders past 30 days',
                    'increase' => ':percentage% increase from :count last period',
                    'decrease' => ':percentage% decrease from :count last period',
                    'neutral' => 'Nenhuma mudança comparado ao período anterior',
                ],
                'stat_four' => [
                    'label' => 'Vendas hoje',
                    'increase' => ':percentage% increase from :total yesterday',
                    'decrease' => ':percentage% decrease from :total yesterday',
                    'neutral' => 'Nenhuma mudança comparado com ontem',
                ],
                'stat_five' => [
                    'label' => 'Vendas 7 dias',
                    'increase' => ':percentage% increase from :total last period',
                    'decrease' => ':percentage% decrease from :total last period',
                    'neutral' => 'Nenhuma mudança comparado ao período anterior',
                ],
                'stat_six' => [
                    'label' => 'Vendas 30 dias',
                    'increase' => ':percentage% increase from :total last period',
                    'decrease' => ':percentage% decrease from :total last period',
                    'neutral' => 'Nenhuma mudança comparado ao período anterior',
                ],
            ],
            'order_totals_chart' => [
                'heading' => 'Order totals for the past year',
                'series_one' => [
                    'label' => 'This Period',
                ],
                'series_two' => [
                    'label' => 'Previous Period',
                ],
                'yaxis' => [
                    'label' => 'Turnover :currency',
                ],
            ],
            'order_sales_chart' => [
                'heading' => 'Orders / Sales Report',
                'series_one' => [
                    'label' => 'Orders',
                ],
                'series_two' => [
                    'label' => 'Revenue',
                ],
                'yaxis' => [
                    'series_one' => [
                        'label' => '# Orders',
                    ],
                    'series_two' => [
                        'label' => 'Total Value',
                    ],
                ],
            ],
            'average_order_value' => [
                'heading' => 'Average Order Value',
            ],
            'new_returning_customers' => [
                'heading' => 'New vs Returning Customers',
                'series_one' => [
                    'label' => 'New Customers',
                ],
                'series_two' => [
                    'label' => 'Returning Customers',
                ],
            ],
            'popular_products' => [
                'heading' => 'Best sellers (last 12 months)',
                'description' => 'These figures are based on the number of times a product appears on an order, not the quantity ordered.',
            ],
            'latest_orders' => [
                'heading' => 'Latest orders',
            ],
        ],
    ],
    'customer' => [
        'stats_overview' => [
            'total_orders' => [
                'label' => 'Total orders',
            ],
            'avg_spend' => [
                'label' => 'Avg. Spend',
            ],
            'total_spend' => [
                'label' => 'Total Spend',
            ],
        ],
    ],
    'variant_switcher' => [
        'label' => 'Switch Variant',
        'table' => [
            'sku' => [
                'label' => 'SKU',
            ],
            'values' => [
                'label' => 'Values',
            ],
        ],
    ],
];
