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
        //
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

            $doctorId = User::orderBy('id', 'desc')->limit(1)->get();
            $doctorId = $doctorId[0]->id;

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
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
