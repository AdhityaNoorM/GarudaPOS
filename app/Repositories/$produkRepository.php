<?php

namespace App\Repositories;

use App\Models\$produk;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class $produkRepository
 * @package App\Repositories
 * @version August 14, 2018, 3:09 am UTC
 *
 * @method $produk findWithoutFail($id, $columns = ['*'])
 * @method $produk find($id, $columns = ['*'])
 * @method $produk first($columns = ['*'])
*/
class $produkRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ID_PERUSAHAAN',
        'PRODUK_TITLE',
        'IS_AVAILABLE',
        'DATE_PRODUK_CREATED'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return $produk::class;
    }
}
