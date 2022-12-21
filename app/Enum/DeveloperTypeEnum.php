<?php

namespace App\Enum;

enum DeveloperTypeEnum: string
{
    case Backend = 'Backend Developer';
    case Frontend = 'Fronted Developer';
    case Mobile = 'Mobile Developer';
    case DevOps = 'DevOps';
}
