<?php
/************************************************
 * @ ˵����smarty ģ������������
 *
 * @ ���ߣ��ҵ��������� ���л����ҵ�Ӣ������ lzh 
 * @ E-mail:jlnu_lzh@126.com
 * @ Tel��15043191896  
 ************************************************/
require_once 'library/smarty/libs/Smarty.class.php'; //����Smarty.class.php�ļ����Ӷ�����Smarty���
class SmartyConfig extends Smarty //��дSmartyConfig�࣬ʹ��̳���Smarty��
{
    function SmartyConfig () //���췽��
    {
        $this->Smarty(); //���ø���Ĺ��췽��
        $arrayIni = parse_ini_file('config/lzhConfig.ini'); //����LzhConfig.ini�ļ�������ȡ������Ϣ
        $this->template_dir = $arrayIni['template_dir']; //ģ���ļ�����Ŀ¼
        $this->compile_dir = $arrayIni['compile_dir']; //�����ļ�����Ŀ¼
        $this->cache_dir = $arrayIni['cache_dir']; //�����ļ�����Ŀ¼
        $this->config_dir = $arrayIni['config_dir']; //�����ļ�����Ŀ¼
        $this->caching = $arrayIni['caching']; //�Ƿ�����ͼ����
    }
}




