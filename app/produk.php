<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ID_PRODUK
 * @property string $ID_PERUSAHAAN
 * @property string $PRODUK_TITLE
 * @property boolean $IS_AVAILABLE
 * @property string $DATE_PRODUK_CREATED
 * @property Perusahaan $perusahaan
 * @property Variansi[] $variansis
 */
class produk extends Model
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
    public $incrementing = true;

    /**
     * @var array
     */
    protected $fillable = ['ID_PERUSAHAAN', 'PRODUK_TITLE', 'IS_AVAILABLE', 'DATE_PRODUK_CREATED'];

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
