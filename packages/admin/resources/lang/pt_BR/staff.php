<?php

return [

    'label' => 'Staff',

    'plural_label' => 'Staff',

    'table' => [
        'firstname' => [
            'label' => 'Nome',
        ],
        'lastname' => [
            'label' => 'Sobrenome',
        ],
        'email' => [
            'label' => 'Email',
        ],
        'admin' => [
            'badge' => 'Super Administrador',
        ],
    ],

    'form' => [
        'firstname' => [
            'label' => 'Primeiro Nome',
        ],
        'lastname' => [
            'label' => 'Sobrenome',
        ],
        'email' => [
            'label' => 'Email',
        ],
        'password' => [
            'label' => 'Senha',
            'hint' => 'Resetar senha',
        ],
        'admin' => [
            'label' => 'Super Administrador',
            'helper' => 'Papeis de super administradores não podem ser alterados.',
        ],
        'roles' => [
            'label' => 'Papeis',
            'helper' => ':roles tem acesso total',
        ],
        'permissions' => [
            'label' => 'Permissões',
        ],
        'role' => [
            'label' => 'Nome do grupo de permissões (Papel)',
        ],
    ],

    'action' => [
        'acl' => [
            'label' => 'Controle de acesso',
        ],
        'add-role' => [
            'label' => 'Adicionar papel',
        ],
        'delete-role' => [
            'label' => 'Deletar papel',
            'heading' => 'Deletar papel: :role',
        ],
    ],

    'acl' => [
        'title' => 'Controle de acesso',
        'tooltip' => [
            'roles-included' => 'A permissão esta incluída nos seguintes papeis.',
        ],
        'notification' => [
            'updated' => 'Atualizado',
            'error' => 'Erro!',
            'no-role' => 'Papel não registrado no Lunar',
            'no-permission' => 'Permissão não registrada no Lunar',
            'no-role-permission' => 'Papel e Permissão não registrados no Lunar',
        ],
    ],

];
