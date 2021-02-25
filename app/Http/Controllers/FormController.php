<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\FormQuestion;
use App\Models\FormQuestionAnswer;

class FormController extends Controller
{
    public function index(Request $request)
    {
        $forms = Form::with('questions.answer')->get();

        return response()->json([
            "forms" => $forms
        ], 200);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

        $form = new Form;

        $form->title = $request->input('title');
        $form->save();

        foreach($request->input('questions') as $question){
            $formQuestion = new FormQuestion;

            $formQuestion->form_id = $form->id;
            $formQuestion->question = $question['question'];

            $formQuestion->save();
        }

        return response()->json([
            "message" => "Formulário cadastrado com sucesso!"
        ], 200);
    }

    public function update(Request $request, $id)
    {
        try{
            foreach($request->input('question') as $question)
            {
                $form_question_answer = new FormQuestionAnswer;

                $form_question_answer->form_question_id = $question['id'];
                $form_question_answer->answer = $question['answer'];
                $form_question_answer->lat = $request->input('location.coords.latitude');
                $form_question_answer->long = $request->input('location.coords.longitude');

                $form_question_answer->save();
            }

            return response()->json([
                "message" => "Formulário respondido com sucesso!"
            ], 200);
        }
        catch(\Exception $e)
        {
            return response()->json([
                "message" => $e->getMessage()
            ], 500);
        }
    }

}
