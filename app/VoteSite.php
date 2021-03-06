<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoteSite extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'link', 'hour_limit', 'reward_amount', 'type', 'double_rewards'];

    public function setDoubleRewardsAttribute( $value )
    {
        $this->attributes['double_rewards'] = $value ? 1 : 0;
    }
}
