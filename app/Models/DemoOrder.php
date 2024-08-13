<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoOrder extends Model
{
    use HasFactory;

    public function refund()
    {
        $this->status = 'refunded';
        $this->save();
    }
}
