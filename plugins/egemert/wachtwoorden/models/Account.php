<?php namespace Egemert\Wachtwoorden\Models;

use Model;

/**
 * Account Model
 */
class Account extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'egemert_wachtwoorden_accounts';

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
    public $hasMany = [
        'LoginDetails' => ['Egemert\Wachtwoorden\Models\LoginDetails'],
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
