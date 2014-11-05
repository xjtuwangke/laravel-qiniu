##

laravel-qiniu

### 说明

这个package只是方便将php-qiniu-sdk的akey和skey设置整合进laravel的config文件中。

核心功能依赖[xjtuwangke/php-qiniu/sdk](https://github.com/xjtuwangke/qiniu-php-sdk)

[readme](https://github.com/xjtuwangke/qiniu-php-sdk/blob/master/README.md)

### composer安装

```
...
"require": {
    "php": ">=5.4.0"
    , "xjtuwangke/laravel-qiniu": "dev-master"
    ...
},
"minimum-stability": "dev"
```

composer update

### 设置laravel环境

1. 将 'Xjtuwangke\LaravelQiniu\LaravelQiniuServiceProvider' 加入 app/config/app.php

2. publish config

    ```
php artisan config:publish xjtuwangke/laravel-qiniu
```

