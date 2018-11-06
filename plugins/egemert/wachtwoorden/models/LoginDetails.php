<?php namespace Egemert\Wachtwoorden\Models;

use Model;

/**
 * LoginDetails Model
 */
class LoginDetails extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'egemert_wachtwoorden_login_details';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'account' => ['Ewgemert\Wachtwoorden\Models\Account'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
