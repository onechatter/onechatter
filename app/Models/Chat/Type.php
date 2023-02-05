<?php

namespace App\Models\Chat;

enum Type : int
{
    case PRIVATE = 0;
    case GROUP = 1;
}
