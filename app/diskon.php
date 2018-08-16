<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ID_DISKON
 * @property string $ID_OUTLET
 * @property string $START_DATE
 * @property string $END_DATE
 * @property boolean $IS_ACTIVE
 * @property float $TOTAL_DISKON
 * @property string $DISC_DESC
 * @property string $NAMA_DISKON
 * @property Outlet $outlet
 */
class diskon extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'discount';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ID_DISKON';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['ID_OUTLET', 'START_DATE', 'END_DATE', 'IS_ACTIVE', 'TOTAL_DISKON', 'DISC_DESC', 'NAMA_DISKON'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function outlet()
    {
        return $this->belongsTo('App\Outlet', 'ID_OUTLET', 'ID_OUTLET');
    }
}
