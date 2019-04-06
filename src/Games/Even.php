<?php

namespace Games\Even;

use function BrainGames\Game\run;
const MIN_NUMBER = 1;
const MAX_NUMBER = 15;
const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function startGame()
{
    $questionAndAnswer = function () {
        $question = rand(MIN_NUMBER, MAX_NUMBER);
        $answer = isEven($question) ? 'yes' : 'no';
        return [$question, $answer];
    };

    run(DESCRIPTION, $questionAndAnswer);
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
