<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseType extends Model
{
    protected $fillable = [
        'name',
        'remark'
    ];

    public function expenses() {
        $this->hasMany('App\Expense');
    }
}
