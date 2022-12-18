<?php

namespace App\Enum;

enum ProfileTypeEnum: string
{
    case Administrator = 'App\Models\Administrator';
    case Developer = 'App\Models\Developer';
    case Recruiter = 'App\Models\Recruiter';
}
