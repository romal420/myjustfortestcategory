<?php

class DuplicateCategory extends \Illuminate\Database\Eloquent\Model
{
    use \myjustfortestcategory\nestedset\NodeTrait;

    protected $table = 'categories';

    protected $fillable = [ 'name' ];

    public $timestamps = false;
}
