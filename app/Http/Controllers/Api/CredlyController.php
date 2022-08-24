<?php

namespace App\Http\Controllers\Api;

use Http;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Admin\IssuedBadge;
use App\Http\Controllers\Controller;

class CredlyController extends Controller
{
    protected $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function getAuthorizationCode()
    {
        return base64_encode('sqkIpUuJTgc5bESkHVwsD5uBC9HWbw9-TKdz:');
    }

    public function results()
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic c3FrSXBVdUpUZ2M1YkVTa0hWd3NENXVCQzlIV2J3OS1US2R6Og=='
        ])->get('https://api.credly.com/v1/organizations/752b2536-ed61-4dbc-8044-043c0846609d/badges.json?filter=query::'.$this->email);
        
        $response = $response->json();

        if($response['metadata']['total_count'] > 0):
            foreach ($response['data'] as $item):
                if(IssuedBadge::where('hash', $item['id'])->get()->count() == 0):
                    $badge_template_activities = '';
                    foreach ($item['badge_template']['badge_template_activities'] as $val1):
                        $badge_template_activities = $badge_template_activities.$val1['title'].'|';
                    endforeach;
                    $badge_template_activities = trim($badge_template_activities, '|');

                    $skills = '';
                    foreach ($item['badge_template']['skills'] as $val2):
                        $skills = $skills.$val2.'|';
                    endforeach;
                    $skills = trim($skills, '|');

                    $issued_to = str_replace('\u', 'u', $item['issued_to']);
                    $issued_to = preg_replace('/u([\da-fA-F]{4})/', '&#x\1;', $issued_to);

                    $issued_badge = new IssuedBadge();
                    $issued_badge->hash = $item['id'];
                    $issued_badge->name = $item['badge_template']['name'];
                    $issued_badge->image = $item['image']['url'];
                    $issued_badge->description = $item['badge_template']['description'];
                    $issued_badge->type_category = $item['badge_template']['type_category'];
                    $issued_badge->level = $item['badge_template']['level'];
                    $issued_badge->time_to_earn = $item['badge_template']['time_to_earn'];
                    $issued_badge->cost = $item['badge_template']['cost'];
                    $issued_badge->badge_template_activities = $badge_template_activities;
                    $issued_badge->skills = $skills;
                    $issued_badge->issued_to = $issued_to;
                    $issued_badge->recipient_email = $item['recipient_email'];
                    $issued_badge->save();
                endif;
            endforeach;
        endif;

        return $response;
    }
}
