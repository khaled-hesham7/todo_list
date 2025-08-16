<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
      use HasFactory;

    protected $fillable = [
        'conversation_id',
        'sender_id',
        'message',
        'attachment_path',
        'message_type',
    ];

    // المحادثة اللي الرسالة تبعها
    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }

    // الراسل
    public function user()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // حالات الرسالة
    public function statuses()
    {
        return $this->hasMany(MessageStatus::class);
    }
}
