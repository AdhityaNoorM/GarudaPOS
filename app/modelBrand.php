<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ID_BRAND
 * @property string $ID_PERUSAHAAN
 * @property string $BRAND_TITLE
 * @property Perusahaan $perusahaan
 * @property Produk[] $produks
 */
class modelBrand extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'brand';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID_BRAND';

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
    protected $fillable = ['ID_PERUSAHAAN', 'BRAND_TITLE'];

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
    public function produks()
    {
        return $this->hasMany('App\Produk', 'ID_BRAND', 'ID_BRAND');
    }
}
