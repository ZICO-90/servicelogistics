<?php
/**
 * Created by PhpStorm.
 * User: nana
 * Date: 11/20/2021
 * Time: 8:08 AM
 */

namespace App\Http\Interfaces\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\PriceRequest;



interface PriceInterface
{

    public function all_prices();

    public function create_price();

    public function store_price(Request $request);



    public function show_price($id);


    public function edit_price($id);


    public function update_price( Request $request);



    public function destroy_price(Request $request);

}