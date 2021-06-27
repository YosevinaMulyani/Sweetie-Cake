<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\Auth;
use Illuminate\support\Facades\File;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cake;
use App\Models\Cart;
use carbon\carbon;



class CostumerController extends Controller
{
    public function index()
    {
        return view('costumer.index');
    }
    public function cake()
    {
        $cake = Cake::get();
        return view('costumer.cake', ['cake' => $cake]);
    }

    public function requestform($id)
    {
        $cake = Cake::where('id', $id)->get();
        return view('costumer.requestform', ['cake' => $cake]);
    }

    public function cart()
    {
        $user = Auth::user()->id;
        $cart = DB::table('cart')->join('cake', 'cart.cakecode', '=', 'cake.cakecode')->where('userid', $user)->get();
        return view('costumer.cart', ['cart' => $cart]);
    }
    public function postcart(Request $request)
    {
        $user = Auth::user()->id;
        $cakeid = $request->id;
        $biaya = $request->banyak * $request->harga;
        DB::table('cart')->insert([
            'cakecode' => $request->cakecode,
            'userid' => $user,
            'banyak' => $request->banyak,
            'biaya' => $biaya,
        ]);
        $cart = DB::table('cart')->join('cake', 'cart.cakecode', '=', 'cake.cakecode')->where('userid', $user)->get();
        return redirect('costumer/cart');
    }
    public function history()
    {
        $user = Auth::user()->id;
        $history = DB::table('payment')->select(DB::raw("userid, status, sum(biaya) as biaya, sum(banyak) as banyak, paymentcode, tanggal"))->groupBy("paymentcode", "status", "tanggal", "userid")->where('userid', $user)->get();
        return view('costumer.history', ['history' => $history]);
    }
    public function payment()
    {
        return view('costumer.payment');
    }
    public function cartdelete($id)
    {
        $cart = Cart::where('cartid', $id)->delete();
        // dd($cart->all());
        return redirect('costumer/cart');
    }
    public function postpayment(Request $request)
    {
        $payment = $request->file('payment');
        $filename = time() . "_" . $payment->getClientOriginalName();
        $folder = 'payment';
        $payment->move($folder, $filename);

        $user = Auth::user()->id;
        $paymentcode = 'PC' . sprintf("%04s", rand(1, 1000));
        DB::table('paid')->insert([
            'userid' => $user,
            'paymentcode' => $paymentcode,
            'paid' => $filename,
            'status' => 'belum valid',
        ]);
        $paymentt = DB::table('cart')->where('userid', $user)->get();
        foreach ($paymentt as $paid) {
            DB::table('payment')
                ->insert([
                    'userid' => $user,
                    'paymentcode' => $paymentcode,
                    'cakecode' => $paid->cakecode,
                    'banyak' => $paid->banyak,
                    'biaya' => $paid->biaya,
                    'tanggal' => Carbon::now()->format('y-m-d'),
                    'status' => 'belum dikirim',
                ]);
            $pay = DB::table('cake')->select("stok")->where('cakecode', $paid->cakecode)->first();
            $buy = (int)$pay->stok;
            $buyy = $buy - $paid->banyak;
            DB::table('cake')->where('cakecode', $paid->cakecode)->update([
                "stok" => $buyy,
            ]);
        }
        DB::table('cart')->where('userid', $user)->delete();
        return redirect('/costumer/payment/history');
    }
    public function profile(Request $request)
    {
        $profile = Auth::user()->id;
        $user = User::where('id', $profile)->get();
        return view('costumer.profile', ['user' => $user]);
    }

    public function updateprofile(Request $request)
    {
        $profile = Auth::user()->id;
        $user = User::where('id', $profile)->update([
            'email' => $request->email,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);
        return redirect('costumer/profile');
    }
}
