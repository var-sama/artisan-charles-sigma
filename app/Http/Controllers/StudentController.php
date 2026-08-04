<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - diriku hebat";
        $students = [
            ['id' => 1, 'nis' => '1001', 'name' => 'ahuat', 'class' => 'XII TKJ 2', 'major' => 'Teknik Komputer dan Jaringan'],
            ['id' => 2, 'nis' => '1002', 'name' => 'Jane Smith', 'class' => 'XII AKL 1', 'major' => 'Akuntansi'],
            ['id' => 3, 'nis' => '1003', 'name' => 'Michael Johnson', 'class' => 'XII RPL 1', 'major' => 'Rekayasa Perangkat Lunak'],
        ];
        return view('students.index', [
            'title' => $title,
            'students' => $students
        ] );
    }

    public function show(string $id){
        $title = "Sistem Sekolah - diriku show";
        return view('students.show', [
            'title' => $title,
        ] );
    }

    public function create(){
        $title = "Sistem Sekolah - diriku tambah";
        return view('students.create', [
            'title' => $title
        ]);
    }

    public function edit(string $id){
        $title = "Sistem Sekolah - diriku edit";
        return view('students.edit', [
            'title' => $title
        ]);
    }

    public function store(){
        return "Melakukan penambahan data siswa";
    }

    public function update(string $id){
        return "Melakukan perubahan data siswa dengan id {$id}";
    }

    public function destroy(string $id){
        return "Menghapus data siswa dengan id {$id}";
    }
}
