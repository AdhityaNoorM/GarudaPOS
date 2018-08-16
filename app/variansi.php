<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ID_VARIANSI
 * @property string $ID_PRODUK
 * @property string $SKU
 * @property string $NAMA_VARIAN
 * @property string $KET_VARIAN
 * @property boolean $IS_VAR_AVAILABLE
 * @property string $DATE_VARIAN_CREATED
 * @property Produk $produk
 * @property BarangYangDitransaksi[] $barangYangDitransaksis
 * @property LogHarga[] $logHargas
 * @property StokBarangOutlet[] $stokBarangOutlets
 */
class variansi extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'variansi';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ID_VARIANSI';

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
    protected $fillable = ['ID_PRODUK', 'SKU', 'NAMA_VARIAN', 'KET_VARIAN', 'IS_VAR_AVAILABLE', 'DATE_VARIAN_CREATED'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function produk()
    {
        return $this->belongsTo('App\Produk', 'ID_PRODUK', 'ID_PRODUK');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function barangYangDitransaksis()
    {
        return $this->hasMany('App\BarangYangDitransaksi', 'ID_VARIANSI', 'ID_VARIANSI');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function logHargas()
    {
        return $this->hasMany('App\LogHarga', 'ID_VARIANSI', 'ID_VARIANSI');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stokBarangOutlets()
    {
        return $this->hasMany('App\StokBarangOutlet', 'ID_VARIANSI', 'ID_VARIANSI');
    }
}
