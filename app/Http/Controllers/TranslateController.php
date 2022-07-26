<?php

namespace App\Http\Controllers;

use App\Imports\KatasImport;
use App\Models\Kata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class TranslateController extends Controller
{
    public function index()
    {
        $data = Kata::all();
        return view('admin.translate', ['data' => $data]);
    }
    public function store(Request $request)
    {
        Kata::create($request->all());
        return back()->with('succes', 'Data Berhasil Di Tambahkan');
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $data = [
            'indonesia' => $request->indonesia,
            'daerah'  => $request->daerah,
            'type'  => $request->type,
        ];
        Kata::where(['id' => $id])->update($data);
        return back()->with('succes', 'Data Berhasil Di Edit');
    }

    public function edit($id)
    {
        $respon = Kata::where('id', $id)->first();
        return response()->json($respon);
    }

    public function destroy(Request $request)
    {
        Kata::where('id', $request->id)->delete();
        return redirect()->back()->with('succes', 'Data berhasil dihapus');
    }

    public function kamus()
    {
        $data = Kata::all();
        return view('public', ['data' => $data]);
    }

    public function search(Request $request)
    {
        $text = $request->indo;
        $result = DB::table('katas')->where('indonesia', 'Like', "$text")->first();
        $result_id = $result->id;
        $data = DB::table('katas')->where('indonesia', 'Like', "$text")->first();
        $data2 = DB::table('katas')->where([['indonesia', 'Like', "%$text%"], ['id', '!=', $result_id]])->get();

        return response()->json([$data, $data2]);
    }

    public function search2(Request $request)
    {
        $text = $request->indo;
        // dd($text);
        $result = DB::table('katas')->where('daerah', 'Like', "$text")->first();
        $result_id = $result->id;
        $data = DB::table('katas')->where('daerah', 'Like', "$text")->first();
        $data2 = DB::table('katas')->where([['daerah', 'Like', "%$text%"], ['id', '!=', $result_id]])->get();

        return response()->json([$data, $data2]);
    }

    public function import(Request $request)
    {
        Excel::import(new KatasImport, $request->file('file'));

        return back();
    }
}
