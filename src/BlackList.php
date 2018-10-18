<?php

namespace Artiden\Blacklist;

use Illuminate\Database\Eloquent\Model;

class BlackList extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
    ];
}
