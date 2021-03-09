<?php

namespace Brain\Games\Even;

use function Brain\Games\Cli\greeting;
use function cli\line;
use function cli\prompt;

function even()
{
    $name = greeting();
    $answers = 3;
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for($i = 0; $i < $answers; $i++) {
        $number = rand();
        line("Question: %s", $number);
        $userAnswer = prompt('Your answer');
        $passed = true;

        if ($number % 2) {
            $answer = 'no';
        } else {
            $answer = 'yes';
        }

        if ($answer === $userAnswer) {
            line('Correct!');
        } else {
            $passed = false;
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $answer);
            break;
        }
    }

    if($passed) {
        line('Congratulations, %s!', $name);
    } else {
        line("Let's try again, %s!", $name);
    }
}
