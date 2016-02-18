<?php
/**
 * 验证码类
 *
 */
class Plugin_Util_ValidateCode
{
    //宽度
    private $_width;
    //长度
    private $_height;
    //验证码
    private $_codeStr;
    //字体类型 0-粗体 1-体
    private $_fontType;
    //图像句柄
    private $_img;
    //private $_codeArray = array('0' , '1' , '2' , '3' , '4' , '5' , '6' , '7' , '8' , '9' , 'A' , 'B' , 'C' , 'D' , 'E' , 'F' , 'G' , 'H' , 'I' , 'J' , 'K' , 'L' , 'M' , 'N' , 'O' , 'P' , 'Q' , 'R' , 'S' , 'T' , 'U' , 'V' , 'W' , 'X' , 'Y' , 'Z');
    /**
     * 构造方法
     *
     * @param string $width
     * @param string $height
     * @param string $codeStr
     * @param int $fontType
     */
    public function __construct ($width, $height, $codeStr = '0000', $fontType = 0)
    {
        $this->_width = $width;
        $this->_height = $height;
        $this->_codeStr = substr($codeStr, 0, 4);
        $this->_fontType = $fontType;
    }
    /**
     * 获取颜色
     *
     * @param 颜色范围最小值 $x
     * @param 颜色范围最大值 $y
     * @return imagecolorallocate()
     */
    private function _getColor ($x, $y)
    {
        $r = mt_rand($x, $y);
        $g = mt_rand($x, $y);
        $b = mt_rand($x, $y);
        return imagecolorallocate($this->_img, $r, $g, $b);
    }
    /**
     * 初始图像
     *
     */
    private function _init ()
    {
        $this->_img = imagecreate($this->_width, $this->_height);
    }
    /**
     * 创建验证码
     *
     */
    private function _build ()
    {
        imagefill($this->_img, 0, 0, $this->_getColor(150, 250));
        imagerectangle($this->_img, 0, 0, $this->_width - 1, $this->_height - 1, $this->_getColor(50, 150));
        if ($this->_fontType == 0) {
            $fontFileName = 'ARIALBI.TTF';
        } else {
            $fontFileName = 'ARIALN.TTF';
        }
        for ($i = 0; $i < strlen($this->_codeStr); $i ++) {
            imagettftext($this->_img, mt_rand(12, 24), 0, ($this->_width) / 4 * $i, mt_rand(20, $this->_height - 5), $this->_getColor(10, 180), APPLICATION_PATH . '/resources/' . $fontFileName, substr($this->_codeStr, $i, 1));
        }
        for ($i = 0; $i < 15; $i ++) {
            imageline($this->_img, mt_rand(0, $this->_width), mt_rand(0, $this->_height), mt_rand(0, $this->_width), mt_rand(0, $this->_height), $this->_getColor(110, 210));
        }
    }
    /**
     * 显示图像
     *
     */
    public function show ()
    {
        header('content-type:image/png');
        $this->_init();
        $this->_build();
        imagepng($this->_img);
    }
}