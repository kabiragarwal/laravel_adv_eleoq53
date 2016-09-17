<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Document extends Model {

    public static function boot() {
        parent::boot();

        static::updating(function($document) {
                    $document->adjust();
                });
    }

    public function adjustments() {
        return $this->belongsToMany('App\User', 'adjustments')
                        ->withTimestamps()
                        ->withPivot(['before', 'after'])
                        ->latest('pivot_updated_at');
    }

    public function adjust($diff = null) {
        $userId = Auth::id();
        $diff = ($diff)?:$this->getDiff();
        return $this->adjustments()->attach(Auth::id(), $this->getDiff());
    }

    protected function getDiff() {
        $changed = $this->getDirty();
        $before = json_encode(array_intersect_key($this->fresh()->toArray(), $changed));
        $after = json_encode($changed);
        return compact('before', 'after');
    }
}
