<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{


    use HasFactory;
    protected $pendidikan = [
        'SD', 'SMP', 'SMA', 'Diploma', 'Sarjana', 'Magister', 'Doktor'
    ];
    protected $table = 'profiles';
    protected $guarded =[];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getPendidikanAttribute($value)
    {
        return $this->pendidikan[$value-1];
    }

}
