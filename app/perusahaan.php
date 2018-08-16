<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ID_PERUSAHAAN
 * @property string $ALAMAT_PERUSAHAAN
 * @property string $NO_TELP_PERUSAHAAN
 * @property string $NAMA_PERUSAHAAN
 * @property string $LOGO
 * @property string $DESKRIPSI_PERUSAHAAN
 * @property string $EMAIL_PERUSAHAAN
 * @property Outlet[] $outlets
 * @property Produk[] $produks
 * @property User[] $users
 */
class perusahaan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'perusahaan';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ID_PERUSAHAAN';

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
    protected $fillable = ['ALAMAT_PERUSAHAAN', 'NO_TELP_PERUSAHAAN', 'NAMA_PERUSAHAAN', 'LOGO', 'DESKRIPSI_PERUSAHAAN', 'EMAIL_PERUSAHAAN'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function outlets()
    {
        return $this->hasMany('App\Outlet', 'ID_PERUSAHAAN', 'ID_PERUSAHAAN');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produks()
    {
        return $this->hasMany('App\Produk', 'ID_PERUSAHAAN', 'ID_PERUSAHAAN');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\User', 'ID_PERUSAHAAN', 'ID_PERUSAHAAN');
    }
}
