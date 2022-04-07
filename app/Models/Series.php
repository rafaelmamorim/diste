<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Series
 *
 * @property $id
 * @property $name
 * @property $session
 * @property $episode
 * @property $date_last_episode
 * @property $is_ended
 * @property $notes
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Series extends Model
{
    
    static $rules = [
		'name' => 'required|max:255',
		'session' => 'required',
		'episode' => 'required',
		'date_last_episode' => 'required',
		'id_user' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','session','episode','date_last_episode','is_ended','notes','session_ended','id_user'];

}
