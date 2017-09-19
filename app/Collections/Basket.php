<?php

namespace App\Collections;

use Illuminate\Database\Eloquent\Collection;

use App\Interfaces;

class Basket extends Collection
{
    protected static $_cache_discounts = NULL;

    public function totalPrice()
    {
        $total = 0;

        foreach( $this as $item )
        {
            $total += $item->getPrice();
        }

        return $total;
    }
}
