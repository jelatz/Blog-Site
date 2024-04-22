<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'logo',
        'content'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getImageURL()
    {
        if ($this->logo) {
            return url('storage/' . $this->logo);
        }
    
        return asset('images/person-circle-sharp.svg');
    }
}
