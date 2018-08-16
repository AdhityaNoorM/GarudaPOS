<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $ID_USER
 * @property string $ID_PERUSAHAAN
 * @property string $NAMA_USER
 * @property string $PASSWORD_USER
 * @property int $HAK_AKSES_USER
 * @property string $JABATAN
 * @property string $EMAIL_USER
 * @property string $NO_HP_USER
 * @property string $FOTO
 * @property boolean $IS_USER_ACTIVE
 * @property Perusahaan $perusahaan
 * @property Outlet[] $outlets
 * @property Transaksi[] $transaksis
 */
class user extends Model implements
    AuthenticatableContract,    //
    AuthorizableContract,       // Using Authenticatable method for users
    CanResetPasswordContract    //
{

  use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ID_USER';

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
    protected $fillable = ['ID_PERUSAHAAN', 'NAMA_USER', 'PASSWORD_USER', 'HAK_AKSES_USER', 'JABATAN', 'EMAIL_USER', 'NO_HP_USER', 'FOTO', 'IS_USER_ACTIVE'];

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
    public function outlets()
    {
        return $this->belongsToMany('App\Outlet', 'bekerja', 'ID_USER', 'ID_OUTLET');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transaksis()
    {
        return $this->hasMany('App\Transaksi', 'ID_USER', 'ID_USER');
    }
}
