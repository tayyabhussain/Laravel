<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Person extends Eloquent implements UserInterface, RemindableInterface
{
    public $timestamps = false;
    protected $fillable = array("email", "name", "address", "phone", "password");

    use UserTrait,
        RemindableTrait;

    protected $table = 'persons';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

}
