<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exams = Exam::select('id', 'exam_name', 'package_name')->get();

        return view('teacher.exam.index',[
            'exams' => $exams
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.exam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'exam_name'     => 'required|string|max:255',
            'package_name'  => 'required|string',
        ]);

        Exam::updateOrCreate(['id' => $request->id],
        [
            'exam_name'     => $request->exam_name,
            'package_name'  => $request->package_name,
        ]);

        return redirect()->route('teacher.exam.index')->with('success', 'Data ujian berhasil ditambahkan');
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
    public function edit(string $id)
    {
        $exam = Exam::select('id', 'exam_name', 'package_name')->where('id', $id)->firstOrFail();

        return response()->json($exam);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $exam = Exam::findOrFail($id);
        $exam->delete();

        return redirect()->route('teacher.exam.index')->with('success', 'Data ujian berhasil dihapus');
    }
}
