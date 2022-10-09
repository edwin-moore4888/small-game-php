<?php
function compare(int $numOne, int $numTwo) {
    if($numOne == $numTwo) {
        return 0;
    } elseif ($numOne > $numTwo) {
        return 1;
    } else {
        return -1;
    }
}

function giveGlue(int $diff) {
    if($diff == 0) {
        echo "Success ! You find the right number." ;
    } elseif ($diff == 1) {
        echo "The given number is too low.";
    } else {
        echo "The given number is too height.";
    }
}

function getGivenNumber() 
{
    return readline("Please give a number: ");
}

function replay() 
{
    switch(readline("Do you want to replay ? (y/n) ")) {
        case "yes":
            return true;
            break;
        case "y":
            return true;
            break;
        default:
            return false;
            break;
    }
}

function play()
{
    $random = rand(0, 10000);
    do {
        $given = getGivenNumber();
    } while(giveClue(compare($random, $given)));
}
do {
    play();
} while(replay());
echo "<hr>";
?>
