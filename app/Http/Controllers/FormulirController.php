<?php

namespace App\Http\Controllers;

use App\Models\formulir;
use Illuminate\Http\Request;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //memanggil semua data tabel formulir
        $data = formulir::all();
        //mengirim data ke view listdataform
        return view('FormListData', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('FormBiodata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'FullName' => 'required|string|max:255',
            'NickName' => 'required|string|max:255',
            'Nim' => 'required|string|max:255',
            'Faculty' => 'required|string|max:255',
            'Email' => 'required|email',
            'Password' => 'required|string|min:8',
            'DateOfBirth' => 'required|date',
            'Address' => 'required|string|max:255',
            'Gender' => 'required|string|max:255',
            'Experience' => 'required|string',
            'Textarea' => 'required|string',
            'Color' => 'required|string|max:255',
            'Range' => 'required|string',
            'PersonalTerms' => 'accepted',
            'Profile_picture' => 'file|max:1024|mimes:jpeg,png,gif,jpg', // Hanya menerima file gambar dengan tipe jpeg, png, atau gif
        ]);
        
        // Simpan data formulir ke dalam tabel formulir
        $formulir = new formulir();
        $formulir->Fullname = $request->FullName;
        $formulir->NickName = $request->NickName;
        $formulir->Nim = $request->Nim;
        $formulir->Faculty = $request->Faculty;
        $formulir->Email = $request->Email;
        $formulir->Password = $request->Password;
        $formulir->Date_of_birth = $request->DateOfBirth;
        $formulir->Address = $request->Address;
        $formulir->Gender = $request->Gender;
        $formulir->Experience = $request->Experience;
        $formulir->Describe_yourself = $request->Textarea;
        $formulir->Favorite_color = $request->Color;
        $formulir->Skills_range = $request->Range;
        if ($request->file('File')) {
            $image_name = $request->file('File')->store('profile_pictures', 'public');
            $formulir->Profile_picture = $image_name;
        }
        $formulir->Terms = $request->PersonalTerms;
        $formulir->save();
        return redirect('StudentListData');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = formulir::find($id);
        
        if ($data) {
            return view('FormShowDetail', compact('data'));
        } else {
            return abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = formulir::find($id);
        
        if ($data) {
            return view('FormEditStudentData', compact('data'));
        } else {
            return abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = formulir::find($id);
        // Perbarui data berdasarkan input form
        $data->Fullname = $request->input('FullName');
        $data->NickName = $request->input('NickName');
        $data->Nim = $request->input('Nim');
        $data->Faculty = $request->input('Faculty');
        $data->Email = $request->input('Email');
        $data->Password = $request->input('Password');
        $data->Date_of_birth = $request->input('DateOfBirth');
        $data->Address = $request->input('Address');
        $data->Gender = $request->input('Gender');
        $data->Experience = $request->input('Experience');
        $data->Describe_yourself = $request->input('Textarea');
        $data->Favorite_color = $request->input('Color');
        $data->Skills_range = $request->input('Range');
        // Tangani gambar profil yang baru jika diunggah
        if ($request->file('File')) {
            $image_name = $request->file('File')->store('profile_pictures', 'public');
            $data->Profile_picture = $image_name;
        }
        $data->Terms = $request->input('PersonalTerms');
        $data->save();
    
        return redirect('StudentListData');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Temukan data berdasarkan ID
        $data = formulir::find($id);
    
        if (!$data) {
            return abort(404); // Jika data tidak ditemukan, kembalikan respons 404
        }
    
        // Hapus data
        $data->delete();
    
        return redirect('StudentListData');
    }
}

