<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ID_TRANSAKSI
 * @property string $ID_OUTLET
 * @property string $ID_USER
 * @property string $TANGGAL_TRANSAKSI
 * @property float $TOTAL_HARGA_TRANSAKSI
 * @property float $TOTAL_PEMBAYARAN
 * @property float $BIAYA_TAMBAHAN
 * @property float $ADDED_DISKON
 * @property boolean $METODE_PEMBAYARAN
 * @property string $EMAIL_PEMBELI
 * @property boolean $IS_CASH
 * @property User $user
 * @property Outlet $outlet
 * @property BarangYangDitransaksi[] $barangYangDitransaksis
 */
class transaksi extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'transaksi';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID_TRANSAKSI';

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
    public $incrementing = true;

    /**
     * @var array
     */
    protected $fillable = ['ID_OUTLET', 'ID_USER', 'TANGGAL_TRANSAKSI', 'TOTAL_HARGA_TRANSAKSI', 'TOTAL_PEMBAYARAN', 'BIAYA_TAMBAHAN', 'ADDED_DISKON', 'METODE_PEMBAYARAN', 'EMAIL_PEMBELI', 'IS_CASH'];

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function barangYangDitransaksis()
    {
        return $this->hasMany('App\BarangYangDitransaksi', 'ID_TRANSAKSI', 'ID_TRANSAKSI');
    }
}
