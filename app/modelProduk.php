<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ID_PRODUK
 * @property string $ID_KATEGORI
 * @property string $ID_PERUSAHAAN
 * @property string $ID_BRAND
 * @property string $PRODUK_TITLE
 * @property boolean $IS_AVAILABLE
 * @property string $DATE_PRODUK_CREATED
 * @property Brand $brand
 * @property Kategori $kategori
 * @property Perusahaan $perusahaan
 * @property Variansi[] $variansis
 */
class modelProduk extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'produk';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID_PRODUK';

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
    protected $fillable = ['ID_KATEGORI', 'ID_PERUSAHAAN', 'ID_BRAND', 'PRODUK_TITLE', 'IS_AVAILABLE', 'DATE_PRODUK_CREATED'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo('App\Brand', 'ID_BRAND', 'ID_BRAND');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'ID_KATEGORI', 'ID_KATEGORI');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function perusahaan()
    {
        return $this->belongsTo('App\Perusahaan', 'ID_PERUSAHAAN', 'ID_PERUSAHAAN');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function variansis()
    {
        return $this->hasMany('App\Variansi', 'ID_PRODUK', 'ID_PRODUK');
    }
}
