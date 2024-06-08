<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Barang;
use App\User;
use App\Basket;
use Alert;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class BarangsController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    public function index()
    {
        $user = FacadesAuth::user();
        $barangs = $user->barangs;
        return view('barangs.index',compact('barangs'));
    }

    public function create()
    {
        $baskets = Basket::all();
        return view('barangs.create',compact('baskets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'stok' => 'required|numeric',
            'totalharga' => 'required',
        ]);
        $barang = new Barang;
        $barang->baskets_id = $request->baskets_id;
        $barang->totalharga = $request->totalharga;
        $barang->stok = $request->stok;
        $barang->user_id = $request->user_id;
        // 
        if ($request->stok > $barang->baskets->stok) {
            alert()->info('Stok Yang Anda Beli Terlalu Banyak','#informasi');
            return redirect('/baskets')->with('info','stok yang di beli terlalu banyak');
        }elseif ($request->stok < 1) {
            alert()->info('Stok Yang Anda Beli Kurang Dari 1','info');
            return redirect('/baskets');
        }else {
            $barang->stok = $request->stok;
            $barang->save();
            alert()->success('keranjang berhasil di tambah','sukses');
            return redirect('/baskets');
        }
    }

    public function updateqty(Request $request, $id){
        $barangs = Barang::find($id);
        $satu = $barangs->baskets->hargabarang;
        $barangs->baskets_id = $request->baskets_id;
        if ($request->stok > $barangs->baskets->stok) {
        alert()->info('keranjang Gagal di Update','info');
        return redirect('/barangs');
        }elseif ($request->stok < 1) {
        alert()->info('keranjang Gagal di Update','info');
        return redirect('/barangs');
        }else {
        $barangs->stok = $request->stok;
        $barangs->totalharga = $satu * $barangs->stok;
        $barangs->save();
        alert()->success('keranjang berhasil di Update','sukses');
        return redirect('/barangs');
        }
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
    }
    public function update(Request $request,Barang $barang)
    {}
    public function destroy($id)
    {
        Barang::destroy($id);
        alert()->success('keranjang berhasil di Hapus','sukses');
        return redirect('/baskets');
    }
    public function delete($id)
{
    $barangs = Barang::where('user_id',$id);
    $barangs->delete();
    alert()->success('keranjang berhasil di Konfirmasi','suksess');
    return redirect('baskets');
}
}
