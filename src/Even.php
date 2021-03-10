<?php

namespace Brain\Games\Even;

use function Brain\Games\Cli\greeting;
use function cli\line;
use function cli\prompt;

function main($answers = 3)
{
    $name = greeting();
    even();
}

function even($name = '', $answers = 3)
{
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < $answers; $i++) {
        line("Question: %s", $number);

        $answer = 'yes';
        $userAnswer = prompt('Your answer');
        $passed = true;
        $number = rand();

        if ($number % 2) {
            $answer = 'no';
        }

        if ($answer !== $userAnswer) {
            $passed = false;

            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $answer);
            break;
        }

        line('Correct!');
    }

    if ($passed) {
        line('Congratulations, %s!', $name);
    } else {
        line("Let's try again, %s!", $name);
    }
}
