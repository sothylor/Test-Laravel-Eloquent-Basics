<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Morningnews extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'news_text'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'morning_news';
}
