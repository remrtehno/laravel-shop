<?php
namespace App\Http\Controllers\API;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;


class CountOrdersController extends Controller
{
	public $successStatus = 200;

	/**
	 * details api
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$order =  Order::where('status', '=', 'Ожидает')->get();
		return response()->json(['success' => "OK", 'orders' => $order->count()], $this-> successStatus);
	}
}
