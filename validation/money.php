<?php
function validateInt($money_in_cents)
{
    if (is_int($money_in_cents))
    {
        return "Error! Incorrect data";
    }

    return "OK! 200. ";
}

function validateMin($money_in_cents, $min_value)
{
    if ($money_in_cents <= $min_value)
    {
        return "ERROR! This amount of money is not enough";
    }
    return "OK! This amount of money in the range";
}

function validateMax($money_in_cents, $max_value)
{
    if ($money_in_cents >= $max_value) {
        return "ERROR! This amount of money is a lot";
    }
    return "OK! This amount of money in the range";
}

function validateTransfer($money_in_cents, $sender_account_number, $recipient_account_number)
{
    $validate_message = "";
    $validate_message .= validateInt($money_in_cents);
    $validate_message .= validateMin($money_in_cents, 10000);
    $validate_message .= validateMax($money_in_cents, 100000);
    return "$validate_message";
}

$money_in_cents = 15000;
$sender_account_number = 944445222;
$recipient_account_number = 933007337;
validateTransfer($money_in_cents, $sender_account_number, $recipient_account_number);