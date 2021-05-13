<?php

namespace App\Http\Livewire;

use App\Models\QuizAnswer;
use Auth;
use Livewire\Component;

class Quiz extends Component
{

    public $total_questions;
    public $total_answered;
    public $quiztest ;
    public $quiztest_answers ;
    public $current_answer;
    public $user_answer;
    public $current_question;
    public $questions;
    public $answers;

    public $markedQuiz= false;

    public $counter =0;

    public $position =1;



    public function updatedCurrentAnswer()
    {
        //dd($this->current_answer);

        $qa = QuizAnswer::where('quiz_id',$this->quiztest->id)
            ->where('question_id',$this->current_question->id)
            ->first();

        if($qa){
            $qa->update(['answer_id'=>$this->current_answer]);

            if($this->current_question->correct_answer == $this->current_answer){
                $this->quiztest->increment('mark',10);
                $status = 'Correct';
            }
            else{
                $this->quiztest->decrement('mark',10);
                $status = 'Wrong';
            }
            $qa->update(['status'=>$status]);

        }
        else{

            if($this->current_question->correct_answer == $this->current_answer){
                $this->quiztest->increment('mark',10);
                $status = 'Correct';
            }
            else{
                $status = 'Wrong';
            }

           $new_qa= QuizAnswer::create([
                'question_id'=>$this->current_question->id,
                'answer_id'=>$this->current_answer,
                'quiz_id'=>$this->quiztest->id,
            ]);

            $new_qa->update(['status'=>$status]);
        }



    }



    public function render()
    {

        $this->quiztest = \App\Models\Quiz::where('user_id',Auth::user()->id)->where('status','Active')->first();

        if(!$this->quiztest){
            $this->quiztest = \App\Models\Quiz::where('user_id',Auth::user()->id)->where('status','Marked')->latest()->first();
        }
        $this->questions= \App\Models\Question::with(['answers' , 'correct'])->get();

        $this->total_questions = $this->questions->count();

        $this->current_question = $this->questions[$this->counter];


        $dup_qa = QuizAnswer::where('quiz_id',$this->quiztest->id)
            ->where('question_id',$this->current_question->id)
            ->first();
        if($dup_qa){
            $this->current_answer = $dup_qa->answer_id;
        }
        else{
            $this->current_answer=null;
        }


        $this->total_answered = QuizAnswer::where('quiz_id',$this->quiztest->id)->count();

        return view('livewire.quiz');
    }

    public function previous(){

        if($this->counter == 0){

        }
        else{
            $this->counter -=1;
            $this->position -=1;
        }
    }
    public function next(){

        if($this->position == $this->total_questions){

        }
        else{
            $this->counter +=1;
            $this->position +=1;
        }
    }
    public function markQuiz(){
        $this->quiztest->update(['status'=>'Marked']);
        $this->markedQuiz = true;
    }

}
