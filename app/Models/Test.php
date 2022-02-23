<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    static public function testInf($id)
    {

        $arrayData = [];
        $answers = Characteristic::selectRaw('count(type) as total, type')->groupBy('type')->whereHas('answerTest', function ($answerTest) use ($id) {
            return $answerTest->where('test_id', $id);
        })->get();

        $total = 0;
        $red = 0;
        $yellow = 0;
        $blue = 0;
        $green = 0;

        foreach ($answers as $answer) {
            switch ($answer->type) {
                case Characteristic::SANGUINEO;
                    $red = $answer->total;
                    break;
                case Characteristic::FLEMATICO;
                    $blue = $answer->total;
                    break;
                case Characteristic::COLERICO;
                    $yellow = $answer->total;
                    break;
                case Characteristic::MELANCOLICO;
                    $green = $answer->total;
                    break;
            }

            $total += $answer->total;
        }

        $red = ($red / $total) * 100;
        $blue = ($blue / $total) * 100;
        $green = ($green / $total) * 100;
        $yellow = ($yellow / $total) * 100;

        $obj = new \stdClass();
        $obj->red = $red;
        $obj->blue = $blue;
        $obj->green = $green;
        $obj->yellow = $yellow;

        return $obj;
    }
}
