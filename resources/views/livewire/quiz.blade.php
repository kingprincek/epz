<div>
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10 col-lg-10">
                <div class="border">
                    <div class="question bg-white p-3 border-bottom">
                        <div class="d-flex flex-row justify-content-between align-items-center mcq">
                            <h4> Quiz  </h4><span>({{$position}} of {{$total_questions}})</span>
                        </div>
                    </div>

                    @if($markedQuiz)
                        <div class="container d-flex justify-content-center mt-4">
                            <div class="card p-3 mt-3">
                                <h5 class="mt-3 mb-3">Performance score</h5>

                                @if($quiztest->mark*2 == 100)
                                <div class="border p-2 rounded d-flex flex-row align-items-center">
                                    <div class="p-1 px-4 d-flex flex-column align-items-center score rounded"> <span class="d-block char text-success">A</span> <span class="text-white">100%</span> </div>
                                    <div class="ml-2 p-3">
                                        <h6 class="heading1">Pass</h6> <span>Excellent keep it up</span>
                                    </div>
                                </div>
                                @elseif($quiztest->mark*2 == 80)
                                <div class="border p-2 rounded d-flex flex-row align-items-center mt-2">
                                    <div class="p-1 px-4 d-flex flex-column align-items-center speed rounded"> <span class="d-block char text-warning">B</span> <span class="text-white">80%</span> </div>
                                    <div class="ml-2 p-4">
                                        <h6 class="text">Pass</h6> <span>Well done</span>
                                    </div>
                                </div>
                                @elseif($quiztest->mark*2 == 60)
                                <div class="border p-2 rounded d-flex flex-row align-items-center">
                                    <div class="p-1 px-4 d-flex flex-column align-items-center cpass rounded"> <span class="d-block char text-success">C</span> <span class="text-white">60%</span> </div>
                                    <div class="ml-2 p-3">
                                        <h6 class="heading1">Pass</h6> <span>The average score</span>
                                    </div>
                                </div>
                                @elseif($quiztest->mark*2 == 40)
                                <div class="border p-2 rounded d-flex flex-row align-items-center mt-2">
                                    <div class="p-1 px-4 d-flex flex-column align-items-center dpass rounded"> <span class="d-block char text-white">D</span> <span class="text-white">40%</span> </div>
                                    <div class="ml-2 p-4">
                                        <h6 class="text">Fail</h6> <span>better luck next time</span>
                                    </div>
                                </div>
                                @elseif($quiztest->mark*2 == 20)
                                <div class="border p-2 rounded d-flex flex-row align-items-center mt-2">
                                    <div class="p-1 px-4 d-flex flex-column align-items-center speed rounded"> <span class="d-block char text-white">E</span> <span class="text-white">20%</span> </div>
                                    <div class="ml-2 p-4">
                                        <h6 class="text">Fail</h6> <span>Fail !!!!</span>
                                    </div>
                                </div>
                                @elseif($quiztest->mark == 0)
                                <div class="border p-2 rounded d-flex flex-row align-items-center mt-2">
                                    <div class="p-1 px-4 d-flex flex-column align-items-center fpass rounded"> <span class="d-block char text-white">F</span> <span class="text-white">0%</span> </div>
                                    <div class="ml-2 p-4">
                                        <h6 class="text">Fail</h6> <span> !!!!</span>
                                    </div>
                                </div>
                                @endif


                                <a class="btn btn-lg btn-primary" href="{{route('taketest')}}">Retake Test</a>
                            </div>
                        </div>
                    @else
                    <div class="question bg-white p-3 border-bottom">
                        <div class="d-flex flex-row align-items-center question-title">
                            <h3 class="text-danger">Q.{{$position}}</h3>
                            <h6 class="mt-1 ml-2">
                                {!! (str_replace(array("\r\n","\r","\n","\\r","\\n","\\r\\n"),"<br/>",$current_question->body)) !!}
                            </h6>
                        </div>
                        <ul class="list-group">
                            @foreach ($current_question->answers as $index => $option)
                                <li class="{{$loop->last ? '' : 'mb-4'}} list-group-item">
                                    <div class="ans ml-2">
                                        <label class="radio"> <input wire:model="current_answer" type="radio" name="answer[{{$index}}]" value="{{$option->id}}"> <span>{{$option->body}}</span>
                                        </label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">
                        <button wire:click="previous" class="btn btn-primary d-flex align-items-center btn-danger" type="button"><i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;previous</button>

                        @if($total_answered == $total_questions)


                        <button wire:click="markQuiz" class="btn btn-primary d-flex align-items-center btn-info" type="button"><i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;submit</button>

                        @endif


                        <button wire:click="next" class="btn btn-primary border-success align-items-center btn-success" type="button">Next<i class="fa fa-angle-right ml-2"></i></button></div>
                    @endif
                </div>
                <br><br><br><br>
            </div>
        </div>
    </div>

</div>
