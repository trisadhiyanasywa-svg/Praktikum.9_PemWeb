<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function index()
    {
        $ar_staff = Staff::orderBy('id', 'desc')->get();
        return view('staff.index', compact('ar_staff'));
    }

    public function create()
    {
        $ar_gender = ['L', 'P'];
        return view('staff.form', compact('ar_gender'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:staff|max:3',
            'nama' => 'required|max:50',
            'gender' => 'required',
            'alamat' => 'required',
            'email' => 'required|unique:staff|max:50',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:9000',
        ]);

        $foto = 'profile.jpg';
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('staff', 'public');
        }

        Staff::create([
            'nip' => $request->nip,
            'nama' => $request->nama, // Perbaikan: Ganti 'name' jadi 'nama'
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'foto' => $foto,
        ]);

        return redirect()->route('staff.index')->with('success', 'Staff berhasil ditambah.');
    }

    public function show(string $id)
    {
        $row = Staff::find($id);
        return view('staff.show', compact('row'));
    }

    public function edit(string $id)
    {
        $ar_gender = ['L', 'P'];
        $row = Staff::find($id);
        return view('staff.form_edit', compact('row', 'ar_gender'));
    }

    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'nip' => 'required|max:3|unique:staff,nip,' . $staff->id,
            'nama' => 'required|max:50',
            'gender' => 'required',
            'alamat' => 'required',
            'email' => 'required|max:50|unique:staff,email,' . $staff->id,
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:9000',
        ]);

        $foto = $staff->foto;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('staff', 'public');
        }

        $staff->update([
            'nip' => $request->nip,
            'nama' => $request->nama, // Perbaikan: Ganti 'name' jadi 'nama'
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'foto' => $foto,
        ]);

        return redirect()->route('staff.index')->with('success', 'Staff berhasil diubah.');
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->route('staff.index')->with('success', 'Staff berhasil dihapus.');
    }
}