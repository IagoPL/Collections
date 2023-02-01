<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Add the collection class
use Illuminate\Support\Collection;
class CollectionController extends Controller
{
    //

    public function search_data()
    {
        //Declarar una colección
        $customer = collect([['dni' => '123456789w', 'name' => 'Rahman'],
            ['dni' => '987654321e', 'name' => 'Janifer'],
            ['dni' => '123789456t', 'name' => 'Micheal',]]);

        //Buscar usando método contains
        if ($customer->contains('name', 'Janifer'))
        {
            echo "Janifer exists in the customer list.<br/>";
        }

        //Buscar usando  método where
        echo $customer->where('name', 'Janifer')."<br/>";

        //ordenar segun el nombre
        $sortedCustomer = $customer->sortBy('author');

        //volcar el contenido en el buscador
        dd($sortedCustomer->values()->toArray());
    }
}
