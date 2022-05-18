<?php

function getRole($id)
{
    $roles=['2'=>'Usuario normal','1'=>'Administrador','0'=>'Administrador'];
    return $roles[$id];
}

function getBadge($id, $type)
{
    $roles=[
        '1' => 'Black',
        '2' => 'Platinum',
        '3' => 'Gold',
        '4' => 'Silver',
        '5' => 'Bronce',
    ];

    $stars=[
        '1' => 5,
        '2' => 4,
        '3' => 3,
        '4' => 2,
        '5' => 1,
    ];

    switch ($type) {
        case 'all':
            return $roles;
            break;
        case 'stars':
            return $stars[$id];
            break;
        default:
            return $roles[$id];
            break;
    }
    
}

function getStatus($value)
{
    $status = [
        'PUBLISHED' => 'Publicado',
        'DRAFT' => 'Borrador',
    ];
    return $status[$value];
}

function outP($text)
{
    $text = str_replace(array("<p>","</p>"), "", $text);
    return $text;
}