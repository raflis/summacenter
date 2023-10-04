<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageField extends Model
{
    use HasFactory;

    protected $table = 'page_fields';

    protected $casts = [
        'choose_items' => 'array',
        'achievement_items' => 'array',
        'support_text' => 'array',
        'support_items1' => 'array',
        'support_items2' => 'array',
        'cover_pages' => 'array',
        'graduates_titles' => 'array',
        'graduates_images' => 'array',
        'graduates_items' => 'array',
        'job_bank_advertising' => 'array',
        'aboutus_images' => 'array',
        'aboutus_items1' => 'array',
        'aboutus_items2' => 'array',
        'certifications_items2' => 'array',
        'certifications_items4' => 'array',
    ];

    protected $fillable = [
        'choose_title', 'choose_text', 'choose_background', 'choose_items', 
        'achievement_title', 'achievement_text', 'achievement_items',
        'support_text', 'support_items1', 'support_items2',
        'cover_pages', 'graduates_titles', 'graduates_images', 'graduates_items',
        'job_bank_advertising', 'aboutus_title', 'aboutus_description', 'aboutus_video',
        'aboutus_mission', 'aboutus_vision', 'aboutus_images', 'aboutus_items1',
        'aboutus_items2', 'terms_and_conditions', 'privacy_policies',
        'responsibility_text1', 'responsibility_image1', 'responsibility_text2', 'responsibility_image2',
        'responsibility_text3', 'responsibility_image3', 'responsibility_text4', 'responsibility_image4',
        'responsibility_text5', 'responsibility_image5', 'responsibility_text6', 'responsibility_image6',
        'certifications_title1', 'certifications_subtitle1', 'certifications_text1', 'certifications_image1',
        'certifications_title2', 'certifications_items2', 'certifications_title3', 'certifications_text3',
        'certifications_youtube3', 'certifications_title4', 'certifications_text4', 'certifications_youtube4',
        'certifications_items4', 'support_button1_name', 'support_button1_telephone', 'support_button1_text',
        'support_button2_name', 'support_button2_telephone', 'support_button2_text',
    ];
}
