<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScoresModel extends Model
{
    protected $table = 'scores';
    
    protected $fillable = [
        'uid', 'score_positive', 'ml_score_positive', 'dsa_score_positive', 'java_score_positive',
        'score_negative', 'ml_score_negative', 'dsa_score_negative', 'java_score_negative',
        'recommended_course',
    ];
}
