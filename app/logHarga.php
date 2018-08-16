<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ID_OUTLET
 * @property string $ID_VARIANSI
 * @property float $LOG_HARGA_JUAL
 * @property float $LOG_HARGA_MODAL
 * @property string $LOG_HARGA_TANGGAL
 * @property Variansi $variansi
 * @property Outlet $outlet
 */
class logHarga extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'log_harga';

    /**
     * @var array
     */
    protected $fillable = ['LOG_HARGA_JUAL', 'LOG_HARGA_MODAL', 'LOG_HARGA_TANGGAL'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function variansi()
    {
        return $this->belongsTo('App\Variansi', 'ID_VARIANSI', 'ID_VARIANSI');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function outlet()
    {
        return $this->belongsTo('App\Outlet', 'ID_OUTLET', 'ID_OUTLET');
    }
}
