<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    use \Sushi\Sushi;

    protected $rows = [
        [
            'id' => 1,
            'address' => 'one@foo.bar',
        ],
        [
            'id' => 2,
            'address' => 'two@foo.bar',
        ],
        [
            'id' => 3,
            'address' => 'three@foo.bar',
        ],
    ];

    public function mails()
    {
        return $this->hasMany(DemoMail::class);
    }
}
