<?php
function validateInt($value)
{
    if (($value = intval($value)) && ($value > 0)) {
        return "OK! type integer: $value ";
    }
    return "Error! Incorrect data of type : $value ";
}

function validateMin($value, $min)
{
    if (mb_strlen($value) >= $min) {
        return "OK! Correct value of min: $value ";
    }
    return "ERROR! Incorrect min: $value ";
}

function validateMax($value, $max)
{
    if (mb_strlen($value) <= $max) {
        return "OK! Correct value of max: $value ";
    }
    return "ERROR! Incorrect value of max: $value ";
}

function validateTransfer($money_in_cents, $sender_account_number, $recipient_account_number)
{
    $validate_money = validateInt($money_in_cents);
    $validate_sender_account_num = validateInt($sender_account_number);
    $validate_recipient_account_num = validateInt($recipient_account_number);
    $validate_money_min = validateMin($money_in_cents, 2);
    $validate_sender_number_min = validateMin($sender_account_number, 9);
    $validate_recipient_number_min = validateMin($recipient_account_number, 9);
    $validate_money_max = validateMax($money_in_cents, 10);
    $validate_sender_number_max = validateMax($sender_account_number, 12);
    $validate_recipient_number_max = validateMax($recipient_account_number, 12);
    return $validate_money . $validate_sender_account_num . $validate_recipient_account_num . $validate_money_min . $validate_sender_number_min . 
           $validate_recipient_number_min . $validate_money_max . $validate_sender_number_max . $validate_recipient_number_max; 
}

$money_in_cents = readline('Enter transfer amount: ');
$sender_account_number = readline('Enter sender account number: ');
$recipient_account_number = readline('Enter recipient account number: ');
echo validateTransfer($money_in_cents, $sender_account_number, $recipient_account_number);