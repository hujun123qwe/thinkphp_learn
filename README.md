# thinkphp_learn
> JUST FOR FUN !

##### define ('APP_PATH', './PloverUAV/');
>可以定义自己的应用目录，实现多个应用用一个ThinkPHP。

##### $this->display('./index');
>这是个很诡异的方法，会在当前模块下的视图目录下的控制器目录找index.html
>./表示当前目录下的，../表示上一层目录下的。

##### tp.local/home/register/register
>应用目录/模块/控制器/方法
>直接用控制器来控制调用，用方法来显示
>其他的后台处理都在Model上面

##### $model = C('WHERE_IS');
>应用配置参数，使用C方法获取参数
>一般此参数在Conf/config.php中设置
>要在View中用，使用$this->assign('where_is', $model);

##### 实例化数据库模块M和D方法
>继承数据库模块的类UserModel，对应User表
>Model类的方法中可以用$this->直接调用该数据库
>配置数据库的信息在config.php中


