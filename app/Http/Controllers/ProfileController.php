<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    
    public function index()
    {
    	// mengambil data dari table
    	$profile = DB::table('profile')->get();
		$kdmax = DB::scalar('select max(kd_profile)+1 as kd_max from profile');
 
    	// mengirim data ke view
    	return view('Vprofile',['profile' => $profile],['kdmax' => value($kdmax)]);
 
    }

	public function tambah(Request $request)
    {
    	DB::table('profile')->insert([
			'kd_profile' => $request->kd_profile,
			'nama_profile' => $request->nama_profile,

		]);
		// alihkan halaman ke halaman berita
		return redirect('/profile');
 
    }



	public function hapus(Request $request)
	{
		$kd_profile=$request->kd_profile;
		DB::table("profile")->where('kd_profile', $kd_profile)->delete();

		return redirect('/profile');
	}

	public function edit(Request $request)
	{
		DB::table('profile')->where('kd_profile',$request->kd_profile)->update([

			'nama_profile' => $request->nama_profile,

		]);
		return redirect('/profile');
	}


}
