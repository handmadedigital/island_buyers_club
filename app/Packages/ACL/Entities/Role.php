<?php namespace TGL\Packages\Acl\Entities;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description'];

    /**
     * @var string
     */
    protected $table = 'roles';






    /*
     * Relationship Methods
     */
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('TGL\Packages\Acl\Entities\Permission');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('TGL\Users\Entities\User');
    }
}