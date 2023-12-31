<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    /**
     * @var mixed|string
     */
    public mixed $name;
    /**
     * @var mixed|string
     */
    public mixed $mobile;
}
