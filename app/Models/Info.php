<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'infos';

    protected $fillable = [
        'company_name',
        'company_desc',
        'company_address',
        'company_visi',
        'company_misi',
        'company_no_telephone',
        'company_founder_img',
        'company_founder_desc',
    ];

    public function getInfo()
    {
        return $this->get();
    }
}
