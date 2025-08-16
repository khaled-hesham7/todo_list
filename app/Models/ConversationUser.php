<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConversationUser extends Model
{
     protected $table = 'conversation_user';

    protected $fillable = [
        'conversation_id',
        'user_id',
        'joined_at',
        'is_admin',
    ];

    public $timestamps = true;
}
