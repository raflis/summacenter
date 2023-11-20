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
        'field_free_1' => 'array',
        'field_free_2' => 'array',
        'field_free_3' => 'array',
        'field_free_4' => 'array',
        'field_free_5' => 'array',
        'field_free_6' => 'array',
        'field_free_7' => 'array',
        'field_free_8' => 'array',
        'field_free_9' => 'array',
        'field_free_10' => 'array',
        'educational_model_learning' => 'array',
        'educational_model_models' => 'array',
        'educational_model_items' => 'array',
        'distinctions_items' => 'array',
        'distinctions_images' => 'array',
        'digital_badges_detail1' => 'array',
        'digital_badges_detail2' => 'array',
        'digital_badges_detail3' => 'array',
        'digital_badges_detail4' => 'array',
        'digital_badges_detail5' => 'array',
        'digital_badges_detail6' => 'array',
        'digital_badges_detail7' => 'array',
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
        'support_button2_name', 'support_button2_telephone', 'support_button2_text', 'field_free_1',
        'field_free_2', 'field_free_3', 'field_free_4', 'field_free_5',
        'field_free_6', 'field_free_7', 'field_free_8', 'field_free_9',
        'field_free_10', 'educational_model_title1', 'educational_model_text1', 'educational_model_image1',
        'educational_model_learning', 'educational_model_text2', 'educational_model_models', 'educational_model_items',
        'educational_model_title2', 'educational_model_title21', 'educational_model_text3', 'educational_model_title22',
        'educational_model_text4', 'educational_model_image2', 'educational_model_title3', 'educational_model_image3',
        'distinctions_title1', 'distinctions_text1', 'distinctions_image1', 'distinctions_image2',
        'distinctions_youtube', 'distinctions_title2', 'distinctions_text2', 'distinctions_items',
        'distinctions_text3', 'distinctions_images', 'distinctions_image3', 'digital_badges_title1',
        'digital_badges_text1', 'digital_badges_image1', 'digital_badges_detail1', 'digital_badges_detail2',
        'digital_badges_detail3', 'digital_badges_detail4', 'digital_badges_detail5', 'digital_badges_detail6',
        'digital_badges_detail7',
    ];
}
