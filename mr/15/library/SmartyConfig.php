<?php
/************************************************
 * @ 说明：smarty 模板引擎配置类
 *
 * @ 作者：我的中文名叫 刘中华，我的英文名叫 lzh 
 * @ E-mail:jlnu_lzh@126.com
 * @ Tel：15043191896  
 ************************************************/
require_once 'library/smarty/libs/Smarty.class.php'; //包含Smarty.class.php文件，从而导入Smarty类库
class SmartyConfig extends Smarty //编写SmartyConfig类，使其继承自Smarty类
{
    function SmartyConfig () //构造方法
    {
        $this->Smarty(); //调用父类的构造方法
        $arrayIni = parse_ini_file('config/lzhConfig.ini'); //解析LzhConfig.ini文件，来获取配置信息
        $this->template_dir = $arrayIni['template_dir']; //模板文件保存目录
        $this->compile_dir = $arrayIni['compile_dir']; //编译文件保存目录
        $this->cache_dir = $arrayIni['cache_dir']; //缓存文件保存目录
        $this->config_dir = $arrayIni['config_dir']; //配置文件保存目录
        $this->caching = $arrayIni['caching']; //是否开启视图缓存
    }
}




