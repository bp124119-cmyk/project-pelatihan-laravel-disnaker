<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SosialMedia extends Model
{
    protected $table = 'sosial_media';

    protected $fillable = [
        'sosial_media_name',
        'sosial_media_link',
        'sosial_media_icon',
    ];

    public function getSosialMedia()
    {
        return $this->get();
    }
}