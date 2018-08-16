<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ID_OUTLET
 * @property string $ID_PERUSAHAAN
 * @property string $NO_HP_OUTLET
 * @property string $ALAMAT_OUTLET
 * @property string $EMAIL_OUTLET
 * @property string $FOTO_OUTLET
 * @property boolean $IS_OUTLET_PUSAT
 * @property boolean $IS_OUTLET_ACTIVE
 * @property Perusahaan $perusahaan
 * @property User[] $users
 * @property Discount[] $discounts
 * @property LogHarga[] $logHargas
 * @property StokBarangOutlet[] $stokBarangOutlets
 * @property Transaksi[] $transaksis
 */
class outlet extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'outlet';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID_OUTLET';

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
    protected $fillable = ['ID_PERUSAHAAN', 'NO_HP_OUTLET', 'ALAMAT_OUTLET', 'EMAIL_OUTLET', 'FOTO_OUTLET', 'IS_OUTLET_PUSAT', 'IS_OUTLET_ACTIVE'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function perusahaan()
    {
        return $this->belongsTo('App\Perusahaan', 'ID_PERUSAHAAN', 'ID_PERUSAHAAN');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'bekerja', 'ID_OUTLET', 'ID_USER');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function discounts()
    {
        return $this->hasMany('App\Discount', 'ID_OUTLET', 'ID_OUTLET');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function logHargas()
    {
        return $this->hasMany('App\LogHarga', 'ID_OUTLET', 'ID_OUTLET');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stokBarangOutlets()
    {
        return $this->hasMany('App\StokBarangOutlet', 'ID_OUTLET', 'ID_OUTLET');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transaksis()
    {
        return $this->hasMany('App\Transaksi', 'ID_OUTLET', 'ID_OUTLET');
    }
}
