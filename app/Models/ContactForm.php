<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class ContactForm extends Model
{
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phone',
        'query_tag',
        'query',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
    
}
