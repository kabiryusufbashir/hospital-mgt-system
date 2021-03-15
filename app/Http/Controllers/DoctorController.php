<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Bio;


class DoctorController extends Controller
{
    public function index()
    {
        $doctors = DB::table('users')
            ->where('users.category','=',2)
            ->join('bios', 'users.id', '=', 'bios.user_id')
            ->orderby('users.id','desc')
            ->paginate(9);

        return view('dashboard.doctor', ['doctors'=>$doctors]);
    }

    public function create()
    {
        $doctors = DB::table('users')
            ->where('users.category','=',2)
            ->join('bios', 'users.id', '=', 'bios.user_id')
            ->orderby('users.id','desc')
            ->paginate(9);

        return view('create.doctor', ['doctors'=>$doctors]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username'=>'required',
            'email'=>'required|email|max:255',
            'name'=>'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $password = 12345678;
        $category = 2;
        $status = 1;

        try{
            User::create([
                'username'=>$request->username,
                'email'=>$request->email,
                'password'=>Hash::make($password),
                'category'=> $category,
                'status'=> $status
            ]);

            //Getting doctors' id    
            $doctorId = User::orderBy('id', 'desc')->limit(1)->get();
            $doctorId = $doctorId[0]->id;

            //Storing doctor's Photo
            $imageName = 'images/doctors/'.time().'.'.$request->photo->extension();  
            $request->photo->move(public_path('images/doctors'), $imageName);
            
            try{
                Bio::create([
                    'title'=>$request->title,
                    'name'=>$request->name,
                    'photo'=>$request->photo,
                    'city'=>$request->city,
                    'country'=>$request->country,
                    'address'=>$request->address,
                    'phone'=>$request->phone,
                    'gender'=>$request->gender,
                    'dob'=>$request->dob,
                    'user_id'=>$doctorId,
                    'photo'=>$imageName,
                ]);
                return back()->with('success', 'Doctor Created successfully!');
            }catch(Exception $e){
                return back()->with('error', $e->getMessage());
            }
        }catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $doctorBio = Bio::where('id',$id)->first();
        $doctorId = $doctorBio->user_id;
        $doctorRecord = User::where('id', $doctorId)->first();
        
        return view('edit.doctor',['doctorBio'=>$doctorBio, 'doctorRecord'=>$doctorRecord]);
    }

    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'title'=>'',
            'name'=>'required',
            'city'=>'',
            'country'=>'',
            'address'=>'',
            'phone'=>'',
            'gender'=>'',
            'dob'=>'',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try{
            $doctorUpdate = Bio::where('id',$id)->update($data);
            return back()->with('success', 'Doctor Update');
        }catch(Exception $e){
            return back()->with('error', 'Please try again... '.$e);
        }
    }

    public function destroy($id)
    {
        $doctorBio = Bio::findOrFail($id);
        $doctorId = $doctorBio->user_id;
        $doctorRecord = User::findOrFail($doctorId);

        try{
            $doctorBio->delete();
            try{
                $doctorRecord->delete();
                return back()->with('success', 'Doctor Deleted');
            }catch(Exception $e){
                return back()->with('error', 'Please try again... '.$e);
            }
        }catch(Exception $e){
            return back()->with('error', 'Please try again... '.$e);
        }
        
    }
}
