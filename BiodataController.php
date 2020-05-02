<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BiodataController extends Controller
{
    public function created(){
        return view('forminputbiodata');
    }
    public function savecreate(Request $request){
        DB::table('table_biodata') ->insert([
         'nama' => $request['xnama'],
         'tempat_lahir' => $request['xtempat'],
         'tanggal_lahir' => $request['xtanggal'],
         'jenis_kelamin' => $request['xjenis'],
         'agama' => $request['xagama'],
         'alamat' => $request['xalamat'],
         'status' => $request['xstatus'],
        ]);
        return redirect('daftarbiodata');
        
    }
    public function read(){
        $data= DB::table('table_biodata') ->get();
        return view('daftarbiodata',compact('data'));
    }
    public function update($id){
        $data = DB::table('table_biodata')->where('id',$id)->get();
        return view('formupdatebiodata',compact('data'));
    }
    public function saveupdate(Request $request){
        DB::table('table_biodata') ->where('id',$request->id)->update([
            'nama' => $request['xnama'],
            'tempat_lahir' => $request['xtempat'],
            'tanggal_lahir' => $request['xtanggal'],
            'jenis_kelamin' => $request['xjenis'],
            'agama' => $request['xagama'],
            'alamat' => $request['xalamat'],
            'status' => $request['xstatus'],
           ]);

           return redirect('daftarbiodata');
    }
    public function delete($id){
        DB::table('table_biodata')->where('id',$id)->delete();
        return redirect('daftarbiodata');
    }
}
  