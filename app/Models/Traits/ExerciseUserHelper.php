<?php

namespace App\Models\Traits;

use Cache;

trait ExerciseUserHelper
{
    //用于存放临时用户数据
    protected $user = [];

    //配置信息
    protected $pass_days = 7;//多少天内

    //缓存相关配置
    protected $cache_key = 'exercise_users';
    protected $cache_expire_in_seconds = 60 * 60;


}
