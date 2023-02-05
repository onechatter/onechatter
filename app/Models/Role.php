<?php

namespace App\Models;

enum Role : int
{
    case MEMBER = 0;
    case ADMIN = 1;
    case OWNER = 2;
}
