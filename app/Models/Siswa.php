<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siswa extends Model
{

    protected $fillable = [
        'nis',
        'name',
        'kelas',
        'portofolio_id'
    ];

    public function portofolio(): BelongsTo
    {
        return $this->belongsTo(Portofolio::class);
    }
}
