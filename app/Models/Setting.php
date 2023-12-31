<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public $timestamps = false;

    public const SETTINGS = ['title', 'author', 'keywords', 'description', 'css', 'js', 'logo_path', 'site_name', 'logo_dark_path', 'github_active', 'twitter_active', 'google_active', 'facebook_active', 'privacy_enable', 'register_active', 'lnsp_bminl_1', 'lnsp_bmin_1', 'lnsp_bminl_2', 'lnsp_bmin_2', 'lnsp_bminl_3', 'lnsp_bmin_3', 'lnsp_bminl_4', 'lnsp_bmin_4', 'lnsp_bminl_5', 'lnsp_bmin_5', 'favicon_path', 'dashboard_code_before_head'];
}
