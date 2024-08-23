<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_pasien extends Model
{
    use HasFactory;

    protected $table = 'tb_pasiens';

    protected $primaryKey = 'id_pasien';

    protected $fillable = [
        'nama_pasien',
        'no_nik',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
    ];

    public $timestamps = true;

    public function diagnosas()
    {
        return $this->hasMany(M_diagnosa::class, 'id_pasien', 'id_pasien');
    }
}
