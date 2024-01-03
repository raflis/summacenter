<?php

function getRole($id)
{
    $roles = [
        '3' => 'Empresa',
        '2' => 'Postulante',
        '1' => 'Usuario' ,
        '0' => 'Administrador'
    ];
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

function zero_fill($valor, $long = 0)
{
    return str_pad($valor, $long, '0', STR_PAD_LEFT);
}

function work_modality()
{
    $work_modality = [
        'Presencial' => 'Presencial',
        'Híbrido' => 'Híbrido',
        'Remoto' => 'Remoto',
    ];
    return $work_modality;
}

function departments()
{
    $departments = [
        'Amazonas' => 'Amazonas',
        'Ancash' => 'Ancash',
        'Apurímac' => 'Apurímac',
        'Arequipa' => 'Arequipa',
        'Ayacucho' => 'Ayacucho',
        'Cajamarca' => 'Cajamarca',
        'Callao' => 'Callao',
        'Cuzco' => 'Cuzco',
        'Huancavelica' => 'Huancavelica',
        'Huánuco' => 'Huánuco',
        'Ica' => 'Ica',
        'Junín' => 'Junín',
        'La Libertad' => 'La Libertad',
        'Lambayeque' => 'Lambayeque',
        'Lima' => 'Lima',
        'Loreto' => 'Loreto',
        'Madre de Dios' => 'Madre de Dios',
        'Moquegua' => 'Moquegua',
        'Pasco' => 'Pasco',
        'Piura' => 'Piura',
        'Puno' => 'Puno',
        'San Martín' => 'San Martín',
        'Tacna' => 'Tacna',
        'Tumbes' => 'Tumbes',
        'Ucayali' => 'Ucayali',
    ];
    return $departments;
}

function workload()
{
    $workload = [
        'Full-time' => 'Full-time',
        'Part-time' => 'Part-time',
        'Por Horas' => 'Por Horas',
        'Pasantia' => 'Pasantia',
        'Nocturno' => 'Nocturno',
        'Temporario' => 'Temporario',
        'Por Contrato' => 'Por Contrato',
        'Fines de Semana' => 'Fines de Semana',
    ];
    return $workload;
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