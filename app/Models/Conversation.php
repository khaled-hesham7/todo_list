<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conversation extends Model
{
     use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'created_by',
    ];

    // المنشئ
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // المشاركين
    public function participants()
    {
        return $this->belongsToMany(User::class, 'conversation_user')
                    ->withPivot('joined_at', 'is_admin')
                    ->withTimestamps();
    }

    // الرسائل
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
