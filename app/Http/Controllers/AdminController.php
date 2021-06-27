<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\Auth;
use App\Models\User;
use Illuminate\support\Facades\DB;
use App\Models\Cake;
use App\Models\Paid;
use App\Models\Buktibayar;
use App\Models\Payment;
use App\Models\Transaksi;
use Illuminate\support\Facades\File;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function addform()
    {
        return view('admin.add');
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $gambar = $request->file('gambar');
        $nama_file = time() . "_" . $gambar->getClientOriginalName();
        $tujuan_upload = 'cake';
        $gambar->move($tujuan_upload, $nama_file);
        $cakecode = 'CC' . sprintf("%04s", rand(1, 1000));
        DB::table('cake')->insert([
            'gambar' => $nama_file,
            'cakecode' => $cakecode,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'keterangan' => $request->keterangan,

        ]);
        return view('admin.add');
    }

    public function cake()
    {
        $cake = Cake::get();
        return view('admin.cake', ['cake' => $cake]);
    }

    public function laporan()
    {
        $payment = DB::table('payment')->select(DB::raw("userid, status, sum(biaya) as biaya, sum(banyak) as banyak, paymentcode, tanggal"))->groupBy("paymentcode", "status", "tanggal", "userid")->get();
        $sum = Payment::sum('biaya');
        return view('admin.laporan', ['payment' => $payment], ['sum' => $sum]);
    }
    public function updatelaporan(Request $request)
    {
        $paymentcode = $request->paymentcode;
        $payment = Payment::where('paymentcode', $paymentcode)->update([
            'status' => $request->status,
        ]);
        return redirect('admin/laporan');
    }
    public function paymentcheck()
    {
        $payment = Paid::get();
        return view('admin.paymentcheckform', ['payment' => $payment]);
    }
    public function updatepaymentcheck(Request $request)
    {
        $paymentcode = $request->paymentcode;
        $payment = Paid::where('paymentcode', $paymentcode)->update([
            'status' => $request->status,
        ]);
        return redirect('admin/paymentcheckform');
    }

    public function user()
    {
        $costumer = DB::table('users')->where('role', 'costumer')->get();
        return view('admin.user', ['costumer' => $costumer]);
    }
    public function profile(Request $request)
    {
        $profile = Auth::user()->id;
        $user = User::where('id', $profile)->get();
        return view('admin.profile', ['user' => $user]);
    }

    public function updateprofile(Request $request)
    {

        $profile = $request->id;
        $user = User::where('id', $profile)->update([
            'email' => $request->email,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);
        return redirect('admin/profile');
    }

    public function ubahcakeform($cakecode)
    {
        $cake = Cake::where('cakecode', $cakecode)->get();
        return view('admin.ubahcakeform', ['cake' => $cake]);
    }

    public function ubahcake(Request $request)
    {
        $cakecode = $request->cakecode;
        $cake = Cake::where('cakecode', $cakecode)->update([
            'cakecode' => $cakecode,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('admin/cake');
    }
    public function hapus($id)
    {
        $cake = Cake::where('id', $id)->first();
        File::delete('cake/' . $cake->file);
        Cake::where('id', $id)->delete();
        return redirect('admin/cake');
    }
}
