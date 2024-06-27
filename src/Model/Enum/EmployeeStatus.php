<?php
namespace App\Model\Enum;

enum EmployeeStatus: string
{
    case fired = 'fired';
    case working = 'working';
}