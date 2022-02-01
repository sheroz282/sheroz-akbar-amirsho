<?php

function typeOfVariables(
    $transfer_amount,
    $sender_number,
    $recipient_number
)
{
    if (is_int($transfer_amount)); {
    return "type of transfer_amount is "     .gettype($transfer_amount)."<br>";
}
    return "Incorrect value"."<br>";
    if (is_int($sender_number)); {
    return "type of sender is "              .gettype($sender_number)."<br>";
}
    return "Incorrect value"."<br>";
    if (is_int($sender_number)); {
    return "type of recipient is "           .gettype($recipient_number)."<br>";
}
    return "Incorrect value"."<br>";
}
function minSumOfTransfer(
    $transfer_amount,
    $min_sum
)
{
    if ($transfer_amount < $min_sum) {
        return "It is very little!!!"."<br>";
    }
    return "OK!"."<br>";
}

function maxSumOfTransfer(
    $transfer_amount,
    $max_sum
)
{
    if ($transfer_amount > $max_sum) {
        return "It is very lot!!!"."<br>";
    }
    return "OK!"."<br>";
}
function numberValidatyCheck(
    $sender_number,
    $recipient_number,
    $correct_number
)
{
    if (mb_strlen($sender_number) <> $correct_number) {
        return "Incorrect adress of sender!!!"."<br>";
    }
    if (mb_strlen($recipient_number) <> $correct_number) {
        return "Incorrect adress of recipient!!!"."<br>";
    }
    return "Done!";
}
typeOfVariables(25000, 944445222, 933007337);
minSumOfTransfer(25000, 10000);
maxSumOfTransfer(25000, 100000);
numberValidatyCheck(944445222, 933007337, 9);