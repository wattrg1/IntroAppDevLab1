<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Car;
use App\Models\Yard;
class SaleController extends Controller
{
  /**
  * Display a listing of the reservations.
  *
  * @return \Illuminate\Http\Response
  */
 public function index() {
   $sale = Sale::with('car', 'car.yard')->get();

   return view('dashboard.sales')->with('sales', $sale);
 }

 /**
  * Show the form for creating a new reservation.
  *
  * @return \Illuminate\Http\Response
  */
 public function create($yard_id)
 {
   error_log("finding cars at ".$yard_id);
   $yardInfo = Yard::with('cars')->get()->find($yard_id);
   return view('dashboard.saleCreate', compact('yardInfo'));
 }

 /**
  * Store a newly created reservation in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(Request $request)
 {
   $request->request->add(['user_id' => 1]);
   Sale::create($request->all());

   return redirect('dashboard/sales')->with('success', 'Sale created!');
 }

 /**
  * Display the specified reservation.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function show(Sale $sale)
 {
   $sale = Sale::with('car', 'car.yard')->get()->find($sale->id);
   $yard_id = $sale->car->yard_id;
   $yardInfo = Yard::with('cars')->get()->find($yardid);

   return view('dashboard.saleSingle', compact('sale', 'yardInfo'));
 }

 /**
  * Show the form for editing the specified reservation.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function edit(Sale $sale)
 {
   $sale = Sale::with('car', 'car.yard')->get()->find($sale->id);
   $yard_id = $sale->car->yard_id;
   $yardInfo = Yard::with('cars')->get()->find($yard_id);

   return view('dashboard.saleEdit', compact('sale', 'yardInfo'));
 }

 /**
  * Update the specified reservation in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, Sale $sale)
 {
   $sale->user_id = 1;

   $sale->save();
   return redirect('dashboard/sales')->with('success', 'Successfully updated your sale!');
 }

 /**
  * Remove the specified reservation from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function destroy(Sale $sale)
 {
   $sale = Sale::find($sale->id);
   $sale->delete();

   return redirect('dashboard/sales')->with('success', 'Successfully deleted your sale!');
 }
}
