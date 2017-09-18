<?php

namespace  App\Model\Abstracts;

use Illuminate\Database\Eloquent;
use Watson\Rememberable\Rememberable;

use Config;

class Model extends Eloquent\Model
{
    use Rememberable;

    protected $rememberCacheTag = NULL;

    protected static function nullIfEmpty($input)
    {
        return trim($input) == '' ? NULL : trim($input);
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function($model)
        {
           $model->clearCache();
        });

        static::deleting(function($model){
           $model->clearCache();
        });
    }

    public function __construct($attributes = array())
    {
        parent::__construct($attributes);

        $this->setCacheTag($this->getCacheTag());
    }

    public function setCacheTag($tag)
    {
        $this->rememberCacheTag = $tag;
    }

    public function getCacheTag()
    {
        $class = explode('\\', get_called_class());

        return end($class);
    }

    public function clearCache()
    {
        static::flushCache();
    }
}