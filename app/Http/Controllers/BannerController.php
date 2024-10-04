<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\User;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function b_simpan(Request $request)
    {
    $request->validate([
        'text1_banner' => 'required|string',
        'text2_banner' => 'required|string',
        'text3_banner' => 'required|string',
        'img_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:12048'
    ]);

    $image = $request->file('img_banner');
    $image->storeAs('public/images/banner', $image->hashName());

    // Buat banner
    Banner::create([
        'text1_banner' => $request->text1_banner,
        'text2_banner' => $request->text2_banner,
        'text3_banner' => $request->text3_banner,
        'img_banner' => $image->hashName(),
    ]);

    return redirect()->route('banner.daftarbanner')->with('success', 'Banner berhasil dibuat!');
    }

    public function b_daftar()
	{
		$banners = Banner::latest('id')->paginate(5);

        return view('banner.daftarbanner', compact('banners'));
	}
	
	public function b_tambah()
    { 
        return view('banner.tambah');
    }
	
	public function b_hapus($id)
    {
		$banner = Banner::findOrFail($id);
        $banner->delete();
        return redirect()
            ->route('banner.daftarbanner');
    }
	
	public function b_edit($id)
    {
		$banner = Banner::findOrFail($id);
        return view('banner.edit', compact('banner'));
    }

    public function b_update(Request $request, $id)
    {
        $request->validate([
            'text1_banner' => 'required|string',
            'text2_banner' => 'required|string',
            'text3_banner' => 'required|string',
            'img_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:12048'
        ]);
        
		$banner = Banner::findOrFail($id);

        if ($request->hasFile('img_banner')) {

            //upload new image
            $image = $request->file('img_banner');
            $image->storeAs('public/images/banner', $image->hashName());

            //delete old image
            Storage::delete('public/images/banner/'.$banner->img_banner);

            //update product with new imag
            $banner->update([
                'text1_banner' => $request->text1_banner,
                'text2_banner' => $request->text2_banner,
                'text3_banner' => $request->text3_banner,
                'img_banner' => $image->hashName(),
            ]);

        } else {
            //update product without image
            $banner->update([
                'text1_banner' => $request->text1_banner,
                'text2_banner' => $request->text2_banner,
                'text3_banner' => $request->text3_banner,
            ]);
        }
        return redirect()->route('banner.daftarbanner');
    }

}
