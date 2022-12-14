<?php

namespace App\Models;

class ProductGallery extends NsModel
{
    protected $table = 'nexopos_products_galleries';

    public function product()
    {
        return $this->belongsTo( Product::class );
    }
}
