<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    use HasFactory;

    public $fillable = ['hobi'];
    public $timestamps = true;

     /*
     * Relasi Many-to-Many
     */

     public function mahasiswa()
    {
        //Model hobi berlerasi Many to Many dengan
        //Model mahasiswa melalui table pivot 'Mahasiswa_hobi'
        //yang di wakili oleh 2fk id_hobi & id_mahasiswa
        return $this->belongsToMany(Mahasiswa::class,
            'mahasiswa_hobi',
            'id_hobi', 
            'id_mahasiswa');
    }
}
