<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralScorings extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'NIP',
        'stage',
        's1', 's2', 's3', 's4',
        's5', 's6', 's7', 's8',
        's9', 's10', 's11', 's12',
        's13', 's14', 's15', 's16',
        's17', 's18', 's19', 's20',
        's21', 's22', 's23', 's24',
        's25', 's26', 's27', 's28',
        's29', 's30', 's31', 's32'
    ];

    protected $hidden = ['id'];

    public function calculateScoreAndGrade()
    {
        $total_score = 0;
        for ($i = 1; $i <= 35; $i++) {
            $total_score += $this->{"s$i"};
        }
        $this->score = $total_score;

        $grade = $this->calculateGrade($total_score);

        $this->grade = $grade;
    }
    private function calculateGrade($score)
    {
        $score = ($score / 128) * 100;
        if ($score >= 90) {
            return 'A';
        } elseif ($score >= 80) {
            return 'B';
        } elseif ($score >= 70) {
            return 'C';
        } else {
            return 'D';
        }
    }
}
