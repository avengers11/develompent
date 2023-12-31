<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingTwo extends Model
{
    use HasFactory;

    public function languages(): array
    {
        return explode(',', $this->languages) ?? [];
    }
}
