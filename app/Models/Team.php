<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Relatie: Een team heeft veel spelers.
     */
    public function players()
    {
        return $this->hasMany(User::class);
    }

}
