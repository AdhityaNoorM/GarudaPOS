<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ID_VARIANSI
 * @property string $ID_OUTLET
 * @property float $HARGA_JUAL
 * @property int $STOK
 * @property float $HARGA_MODAL
 * @property int $STOK_MINIMUM
 * @property Variansi $variansi
 * @property Outlet $outlet
 */
class outletStok extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'stok_barang_outlet';

    /**
     * @var array
     */
    protected $fillable = ['HARGA_JUAL', 'STOK', 'HARGA_MODAL', 'STOK_MINIMUM'];

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
