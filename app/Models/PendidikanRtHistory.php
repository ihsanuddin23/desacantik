<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendidikanRtHistory extends Model
{
    use HasFactory;

    protected $table = 'pendidikanrt_history';

    protected $fillable = [
        'pendidikanrt_id',
        'data',
    ];

    // Relasi dengan model PendidikanRt
    public function pendidikanRt()
    {
        return $this->belongsTo(PendidikanRt::class);
    }
}
