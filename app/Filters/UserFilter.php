<?php

namespace App\Filters;

class UserFilter extends QueryFilter
{

    public function search_field($search_string)
    {
        return $this->builder
            ->where('name', 'LIKE', '%' . $search_string . '%')
            ->orWhere('surname', 'LIKE', '%' . $search_string . '%');
    }
}
