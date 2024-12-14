<?php

$questions = [
    ['question' => 'what is the number 5 + 5?', 'correct' => '10'],
    ['question' => 'what is the capital of Bangladesh?', 'correct' => 'Dhaka'],
    ['question' => 'who is the current Prime Minister of the Bangladesh?', 'correct' => 'DR Younus'],
];

$answers = [];

foreach ($questions as $index => $question){
    echo ($index+1) . ". ". $question ['question'] ."\n";
    $answers[] = trim(readline("Your answers: "));
}

//Evaluate Functions
function evaluateQuiz(array $questions , array $answers): int{
    $score = 0;
    foreach ($questions as $index => $question){
        if($answers[$index] === $question['correct']){
            $score++;
        }
    }
    return $score;
}

//Evaluate Quiz
$score = evaluateQuiz($questions, $answers);
    echo "\n";
    echo "Your Scored $score out of ". count($questions)."\n";

    if ($score === count($questions)){
        echo "Congratulation!!! You passed the quiz.";
    }elseif ($score >1){
        echo "You need to improve your score.";
    }else{
        echo "You need to study more.";
    }

    //Thank You @Manik Hasan Munna