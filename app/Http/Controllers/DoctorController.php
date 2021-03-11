<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            ->paginate(9);

        return view('create.doctor', ['doctors'=>$doctors]);
    }

    public function store(Request $request)
    {
        dd('hited');
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
