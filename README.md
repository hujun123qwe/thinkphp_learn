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