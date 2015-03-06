<?php namespace TGL\Packages\Acl\Entities;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description'];

    /**
     * @var string
     */
    protected $table = 'permission';






    /*
     * Relationship Methods
     */
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('TGL\Packages\Acl\Entities\Role');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('TGL\Users\Entities\User');
    }
}