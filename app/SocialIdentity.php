<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialIdentity extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'provider_name', 'provider_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\User');
    }
}
