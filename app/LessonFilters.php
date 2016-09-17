<?php
namespace App;

class LessonFilters extends QueryFilter{
    public function popular($order='desc'){
        $this->builder->orderBy('view', $order);
    }

    public function difficulty($level = 'beginner'){
        $this->builder->where('difficulty', $level);
    }

    public function length($order='asc'){
        return $this->builder->orderBy('length', $order);
    }

    public function take($count){
        return $this->builder->limit($count);
    }
}
