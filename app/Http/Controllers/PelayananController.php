<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pelayanan;

class PelayananController extends Controller
{

    public function index()
    {
        // $pelayanan = DB::table('baskets')->get();
        $pelayanan = pelayanan::all();
        return view('pelayanan.index',['pelayanan'=> $pelayanan]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }
    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
