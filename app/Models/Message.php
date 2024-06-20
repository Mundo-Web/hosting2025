<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'email', 'phone', 'message', 'status', 'source','client_width','client_height','client_latitude',
                            'client_longitude', 'client_system', 'ip', 'device', 'is_read'];


}
