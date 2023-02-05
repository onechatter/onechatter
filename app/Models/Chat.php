<?php

namespace App\Models;

use App\Models\Chat\Type;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        'type',
        'name',
    ];

    protected $casts = [
        'type' => Type::class,
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function attachUser(User $user, Role $role)
    {
        $this->users()->attach($user, [
            'role' => $role,
        ]);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
