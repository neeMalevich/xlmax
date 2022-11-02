<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'date_of_birth',
        'gender',
        'city',
    ];

    const GENDER_MAN = 0;
    const GENDER_WOMAN = 1;

    public static function getGender(){
        return [
            self::GENDER_MAN => 'Мужчина',
            self::GENDER_WOMAN => 'Женщина',
        ];
    }

    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }

}
