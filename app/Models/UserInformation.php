<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserInformation extends Model
{
    use HasFactory;
    
    protected $fillable = ['fullname', 'gender', 'phone', 'address', 'user_id'];
    protected $attributes = [
        'fullname' => 'Anonymous',
    ];
    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
