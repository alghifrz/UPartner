<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
 
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::latest('id')->get();
        $mahasiswa = $mahasiswa->sortBy('number');
        return view('dashboard', compact('mahasiswa'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $title = "Add New Mahasiswa";
    //     $countries = ['Indonesia', 'Malaysia', 'Singapura', 'Thailand', 'Vietnam'];
    //     $positions = ['CF', 'SS', 'RWF', 'LWF', 'AMF', 'RMF', 'LMF', 'DMF', 'RB', 'LB', 'CB', 'GK'];
    //     $allNumbers = range(1, 99); 
    //     $usedNumbers = Mahasiswa::pluck('number')->toArray();
    //     $availableNumbers = array_diff($allNumbers, $usedNumbers);
    //     return view('admin.add_edit_user', compact('title', 'countries', 'positions', 'availableNumbers'));
    // }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'name' => 'required|string|max:255',
        'nim' => 'required|string|unique:mahasiswa,nim',
        'email' => 'required|email|unique:mahasiswa,email',
        'password' => 'required|string|min:8|confirmed',
        'photo' => 'nullable|mimes:png,jpeg,jpg|max:2048',
    ]);

    // Buat instance model Mahasiswa
    $mahasiswa = new Mahasiswa();
    $mahasiswa->name = $request->name;
    $mahasiswa->nim = $request->nim;
    $mahasiswa->email = $request->email;
    $mahasiswa->password = bcrypt($request->password);

    // Upload file jika ada
    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/uploads', $fileName); // Gunakan storage Laravel
        $mahasiswa->photo = $fileName;
    }

    // Simpan data
    $mahasiswa->save();

    // Redirect dengan pesan flash
    Session::flash('success', 'Mahasiswa registered successfully');
    return redirect()->route('mahasiswa.index');
}

 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($id)
    // {
    //     $title = "Update Mahasiswa";
    //     $edit = Mahasiswa::findOrFail($id);
    //     $countries = ['Indonesia', 'Malaysia', 'Singapura', 'Thailand', 'Vietnam'];
    //     $positions = ['CF', 'SS', 'RWF', 'LWF', 'AMF', 'RMF', 'LMF', 'DMF', 'RB', 'LB', 'CB', 'GK'];
    //     $allNumbers = range(1, 99); 
    //     $usedNumbers = Mahasiswa::where('id', '!=', $id)->pluck('number')->toArray();
    //     $availableNumbers = array_diff($allNumbers, $usedNumbers);
    //     return view('admin.add_edit_user', compact('edit', 'title', 'countries', 'positions', 'availableNumbers'));
    // }
 
    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, $id)
    // {
    //     $request->validate(
    //         [
    //             'name' => 'required',
    //             'age' => 'required',
    //             'country' => 'required',
    //             'position' => 'required|array',
    //             'position.*' => 'string',
    //             'number' => 'required|integer|unique:mahasiswa,number,' . $id,
    //             'value' => 'required|integer',
    //             'email' => 'nullable|email|unique:mahasiswa,email',
    //             'photo' => 'mimes:png,jpeg,jpg|max:2048',
    //         ]
    //     );
    //     $update = Mahasiswa::findOrFail($id);
    //     $update->name = $request->name;
    //     $update->age = $request->age;
    //     $update->country = $request->country;
    //     $update->position = json_encode($request->position);
    //     $update->number = $request->number;
    //     $update->value = $request->value;
    //     $update->email = $request->email;
 
    //     if ($request->hasfile('photo')) {
    //         $filePath = public_path('uploads');
    //         $file = $request->file('photo');
    //         $file_name = time() . $file->getClientOriginalName();
    //         $file->move($filePath, $file_name);
    //         // delete old photo
    //         if (!is_null($update->photo)) {
    //             $oldImage = public_path('uploads/' . $update->photo);
    //             if (File::exists($oldImage)) {
    //                 unlink($oldImage);
    //             }
    //         }
    //         $update->photo = $file_name;
    //     }
 
    //     $result = $update->save();
    //     Session::flash('success', 'Mahasiswa updated successfully');
    //     return redirect()->route('Mahasiswa.index');
    // }
 
    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Request $request)
    // {
    //     $userData = Mahasiswa::findOrFail($request->user_id);
    //     $userData->delete();
    //     // delete photo if exists
    //     if (!is_null($userData->photo)) {
    //         $photo = public_path('uploads/' . $userData->photo);
    //         if (File::exists($photo)) {
    //             unlink($photo);
    //         }
    //     }
    //     Session::flash('success', 'Mahasiswa deleted successfully');
    //     return redirect()->route('Mahasiswa.index');
    // }
}