<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\PriceOrderInterface;
use App\Http\Traits\PriceOrderTrait;
use App\Models\PriceOrder;
use Illuminate\Support\Facades\Session;

class PriceOrderRepository implements PriceOrderInterface
{
    use PriceOrderTrait;
    private $priceOrderModel;

    public function __construct(PriceOrder $priceOrder)
    {
        $this->priceOrderModel = $priceOrder;
    }

    public function index()
    {
        $messages = $this->show_all_message();
        return view('Dashboard.PriceOrder.index', compact('messages'));
    }

    public function create_new_order()
    {
        // TODO: Implement create_new_order() method.
    }

    public function store_new_order($request)
    {
        $this->priceOrderModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'message' => $request->message,
            'kind' => $request->select
        ]);
    }

    public function show_order($id)
    {
        $message = $this->get_message_by_id($id);
        return view('Dashboard.PriceOrder.show', compact('message'));
    }

    public function update($request)
    {
        $message = $this->get_message_by_id($request->message_id);
        $message->is_read = 1;
        $message->save();
        Session::flash('done', 'Message Approved');
        return redirect((route('admin.priceOrder.index')));
    }

    public function delete($request)
    {
        $message = $this->get_message_by_id($request->message_id);
        if ($message)
            $message->delete();
        Session::flash('done', 'Message Deleted Success');
        return redirect()->back();
    }
}
