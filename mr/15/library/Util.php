<?php
/***********************************************
 * @ 说明：项目工具类
 *
 * @ 作者：我的中文名叫 刘中华，我的英文名叫 lzh 
 * @ E-mail:jlnu_lzh@126.com
 * @ Tel：15043191896  
 ***********************************************/
class Util
{
    var $arrayIni;
    /**
     * 构造方法
     *
     * @return Util
     */
    function Util ()
    {
        $this->arrayIni = parse_ini_file('config/lzhConfig.ini');
    }
    /*
	 * @ 方法说明：
	 *   网站相对地址
	 */
    function baseUrl ()
    {
        $arrayIni = $this->arrayIni;
        return $arrayIni['baseUrl'];
    }
    /*
	 * @ 方法说明：
	 *   对货币进行格式化
	 *
	 * @ 参数说明：
	 *   $money：金额
	 */
    function moneyFormat ($money)
    {
        return str_replace(',', '', number_format($money, 2));
    }
    /*
	 * @ 方法说明：
	 *   对html标记进行转意输出
	 *
	 * @ 参数说明：
	 *   $text：需转意的文本
	 */
    function unHtml ($text)
    {
        $str = htmlspecialchars($text);
        // $str = ereg_replace('<br>', chr(13), $str);
        // $str = nl2br($str);
        // $str = ereg_replace(' ', chr(32), $str);
        $str = str_replace(chr(13), "<br>", $str);
        $str = nl2br($str);
        $str = str_replace(chr(32), "&nbsp;", $str);
        return $str;
    }
    /*
	 * @ 方法说明：
	 *   对中文进行截取，防止出现乱码
	 *
	 * @ 参数说明：
	 *   $str：要截取的字符串
	 *   $start：开始截取的位置
	 *   $len：截取的长度
	 */
    function msubstr ($str, $start, $len)
    {
        $strlen = $start + $len;
        for ($i = 0; $i < $strlen; $i ++) {
            if (ord(substr($str, $i, 1)) > 0xa0) {
                $tmpstr .= substr($str, $i, 2);
                $i ++;
            } else
                $tmpstr .= substr($str, $i, 1);
        }
        return $tmpstr;
    }
    /*
	 * @ 方法说明：
	 *   集成FCKEditor
	 *
	 * @ 参数说明：
	 *   $name：编辑器名称
	 *   $value：编辑器内容
	 *   $width：编辑器宽度
	 *   $height：编辑器高度
	 */
    function editor ($name, $value, $width = '100%', $height = '200')
    {
        require_once 'library/fckeditor/fckeditor.php';
        $arrayIni = $this->arrayIni;
        $oFCKeditor = new FCKeditor($name);
        $oFCKeditor->BasePath = $arrayIni['baseUrl'] . '/library/fckeditor/';
        $oFCKeditor->Width = $width;
        $oFCKeditor->Height = $height;
        $oFCKeditor->ToolbarSet = 'Default';
        $oFCKeditor->Value = $value;
        $oFCKeditor->Create();
    }
    /*
	 * @ 方法说明：
	 *   对编辑器输出内容转移
	 *
	 * @ 参数说明：
	 *   $text：输出内容
	 */
    function editorUnHtml ($text)
    {
        return stripslashes($text);
    }
    function setRed ($arrayKey, $text)
    {
        $tmpText = $this->unHtml($text);
        for ($i = 0; $i < count($arrayKey); $i ++) {
            if ($arrayKey[$i] != '') {
                $tmpText = str_replace(trim($arrayKey[$i]), "<font color=\"#FF0000\">" . $arrayKey[$i] . "</font>", $tmpText);
            }
        }
        return $tmpText;
    }
}


