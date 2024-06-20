<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use \Sushi\Sushi;

    protected $rows = [
        [
            'id' => 1,
            'name' => 'Sofia Davis',
            'email' => 'm@example.com',
            'initials' => 'SD',
            'avatar' => 'https://unavatar.io/gravatar/acme@gmail.com',
            'role' => 'owner',
        ],
        [
            'id' => 2,
            'name' => 'Jackson Lee',
            'email' => 'p@example.com',
            'initials' => 'JL',
            'avatar' => 'https://unavatar.io/gravatar/acme@gmail.com',
            'role' => 'developer',
        ],
    ];
}
