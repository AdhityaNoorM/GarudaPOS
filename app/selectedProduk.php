<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ID_VARIANSI
 * @property string $ID_TRANSAKSI
 * @property int $JUMLAH_BARANG_TRANSAKSI
 * @property float $SUB_TOTAL_MODAL
 * @property float $SUB_TOTAL_HARGA
 * @property Variansi $variansi
 * @property Transaksi $transaksi
 */
class selectedProduk extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'barang_yang_ditransaksi';

    /**
     * @var array
     */
    protected $fillable = ['JUMLAH_BARANG_TRANSAKSI', 'SUB_TOTAL_MODAL', 'SUB_TOTAL_HARGA'];

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
    public function transaksi()
    {
        return $this->belongsTo('App\Transaksi', 'ID_TRANSAKSI', 'ID_TRANSAKSI');
    }
}
