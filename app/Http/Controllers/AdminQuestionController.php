<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestionRequest;
use App\Models\Question;
use Illuminate\Http\Request;

class AdminQuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('owner:owner');
    }
    
    public function index()
    {
        return view('backend.questions.index')->with([
            'questions' => Question::paginate(10),
        ]);
    }

    public function create()
    {
        return view('backend.questions.create');
    }

    public function store(StoreQuestionRequest $request)
    {
        $question = Question::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('questions.index')->with('status', "ID $question->id bo'lgan savol yaratildi.");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Question $question)
    {
        return view('backend.questions.edit')->with([
            'question' => $question,
        ]);
    }

    public function update(StoreQuestionRequest $request, Question $question)
    {
        $question->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('questions.index')->with('status', "ID $question->id bo'lgan savoldagi o'zgartirishlar saqlandi.");
    }

    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->route('questions.index')->with('status', "ID $question->id bo'lgan savol o'chirildi.");
    }
}
