<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ID_USER
 * @property string $ID_OUTLET
 * @property User $user
 * @property Outlet $outlet
 */
class bekerjaDi extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'bekerja';

    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'ID_USER', 'ID_USER');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function outlet()
    {
        return $this->belongsTo('App\Outlet', 'ID_OUTLET', 'ID_OUTLET');
    }
}
