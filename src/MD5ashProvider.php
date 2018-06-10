<?php

namespace Laravist\Hash;

use Illuminate\Support\ServiceProvider;

class MD5ashProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
//        通过bind方法创建实例不是单例模式，而是创建新的实例。
//        $this->app->bind();
//        使用singleton创建实例使用的是单例模式，每次返回同一个实例
        //绑定 MD5hasher()类文件 到  app->md5hash,可通过app(md5hash)访问到该类文件

        $this->app->singleton('md5hash',function (){//md5hash为别名
            return new MD5hasher();
        });
    }
}
