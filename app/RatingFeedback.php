<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RatingFeedback extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rating_feedbacks';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     /**
     * The primary key used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';
}
