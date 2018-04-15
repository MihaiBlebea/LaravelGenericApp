<?php

namespace MihaiBlebea\GenericApp\Models;

use Illuminate\Database\Eloquent\Model;

class ActivationToken extends Model
{
    protected $fillable = [
        'user_id',
        'token',
        'expire_at'
    ];

    public static function generate()
    {
        return str_random(config('generic.activation_token_length'));
    }
}
