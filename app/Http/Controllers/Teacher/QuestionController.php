<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $exam = Exam::find($request->exam_id);

        return view('teacher.question.create', [
            'exam' => $exam
        ]);
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8048',
        ]);

        $file = $request->file('file');
        $imageName = time() . '.' . $file->extension();

        $path = $file->storeAs('question', $imageName, 'public');

        return response()->json([
            'location' => url('public/storage/' . $path)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $exam_id = $request->exam_id;
        $question = $request->soal;
        $group_id = 1;
        $question_type = $request->jenis_soal;
        $weight = $request->bobot_soal;

        DB::beginTransaction();

        try {

            // count question
            $find = Question::where('exam_id', $exam_id)->count();

            $data = Question::create([
                'exam_id'   => $exam_id,
                'group_id'  => $group_id,
                'question_type' => $question_type,
                'question_title' => 'Soal No ' . ($find + 1),
                'question_content' => json_encode($question),
                'correction_mode' => $request->penilaian_otomatis,
                'weight' => $weight
            ]);

            if($question_type == 'multiple_choice') {

                Answer::create([
                    'question_id' => $data->id,
                    'label' => 'a',
                    'answer_text' => $request->jawaban_a,
                    'is_correct' => $request->is_true == 'a' ? 1 : 0,
                    'weight' => 10
                ]);
    
                Answer::create([
                    'question_id' => $data->id,
                    'label' => 'b',
                    'answer_text' => $request->jawaban_b,
                    'is_correct' => $request->is_true == 'b' ? 1 : 0,
                    'weight' => 10
                ]);
    
                Answer::create([
                    'question_id' => $data->id,
                    'label' => 'c',
                    'answer_text' => $request->jawaban_c,
                    'is_correct' => $request->is_true == 'c' ? 1 : 0,
                    'weight' => 10
                ]);
    
                Answer::create([
                    'question_id' => $data->id,
                    'label' => 'd',
                    'answer_text' => $request->jawaban_d,
                    'is_correct' => $request->is_true == 'd' ? 1 : 0,
                    'weight' => 10
                ]);

            }


            DB::commit();

            return redirect()->route('teacher.exam.show', $exam_id)->with('success', 'Soal berhasil ditambahkan');
            
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Gagal menambahkan soal');
        }
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
        //
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
        //
    }
}
