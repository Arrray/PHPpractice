<?php
/***********************************************
 * @ ˵������Ŀ������
 *
 * @ ���ߣ��ҵ��������� ���л����ҵ�Ӣ������ lzh 
 * @ E-mail:jlnu_lzh@126.com
 * @ Tel��15043191896  
 ***********************************************/
class Util
{
    var $arrayIni;
    /**
     * ���췽��
     *
     * @return Util
     */
    function Util ()
    {
        $this->arrayIni = parse_ini_file('config/lzhConfig.ini');
    }
    /*
	 * @ ����˵����
	 *   ��վ��Ե�ַ
	 */
    function baseUrl ()
    {
        $arrayIni = $this->arrayIni;
        return $arrayIni['baseUrl'];
    }
    /*
	 * @ ����˵����
	 *   �Ի��ҽ��и�ʽ��
	 *
	 * @ ����˵����
	 *   $money�����
	 */
    function moneyFormat ($money)
    {
        return str_replace(',', '', number_format($money, 2));
    }
    /*
	 * @ ����˵����
	 *   ��html��ǽ���ת�����
	 *
	 * @ ����˵����
	 *   $text����ת����ı�
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
	 * @ ����˵����
	 *   �����Ľ��н�ȡ����ֹ��������
	 *
	 * @ ����˵����
	 *   $str��Ҫ��ȡ���ַ���
	 *   $start����ʼ��ȡ��λ��
	 *   $len����ȡ�ĳ���
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
	 * @ ����˵����
	 *   ����FCKEditor
	 *
	 * @ ����˵����
	 *   $name���༭������
	 *   $value���༭������
	 *   $width���༭�����
	 *   $height���༭���߶�
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
	 * @ ����˵����
	 *   �Ա༭���������ת��
	 *
	 * @ ����˵����
	 *   $text���������
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


