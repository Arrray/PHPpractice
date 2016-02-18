<?php
/*********************************************
 * @ ˵�������ﳵ��
 *
 * @ ���ߣ��ҵ��������� ���л����ҵ�Ӣ������ lzh 
 * @ E-mail:jlnu_lzh@126.com
 * @ Tel��15043191896  
 *********************************************/
class Cart
{
    var $idStr; //��ƷID��ɵ��ַ��������ַ�@��������
    var $numStr; //��Ʒ������ɵ��ַ��������ַ�@��������
    /*
	 * @ ����˵����
	 *   ���췽��
	 *
	 * @ ����˵����
	 *   $idStr���洢��ƷID���ַ���
	 *   $numStr���洢��Ʒ�������ַ���
	 */
    function Cart ($idStr, $numStr)
    {
        $this->idStr = $idStr; //ΪID������ֵ
        $this->numStr = $numStr; //Ϊ����������ֵ
    }
    /*
	 * @ ����˵����
	 *   ����Ʒ��ӵ����ﳵ
	 *
	 * @ ����˵����
	 *   $goodsId����ƷID
	 *   $goodsNum����������
	 */
    function addCart ($goodsId, $goodsNum)
    {
        $arrayIds = explode('@', $this->idStr);
        $flag = 0;
        for ($i = 0; $i < count($arrayIds); $i ++) {
            if ($arrayIds[$i] == $goodsId) {
                $flag = 1;
            }
        }
        if ($flag == 0) {
            $this->idStr .= $goodsId . '@';
            $this->numStr .= $goodsNum . '@';
        } else {
            echo "<script>alert('����Ʒ�Ѿ���ӣ�');</script>";
        }
    }
    /*
	 * @ ����˵����
	 *   ����Ʒ�ӹ��ﳵ�Ƴ�
	 *
	 * @ ����˵����
	 *   $goodsId����ƷID
	 */
    function removeCart ($goodsId)
    {
        $arrayIds = explode('@', $this->idStr);
        $arrayNums = explode('@', $this->numStr);
        for ($i = 0; $i < count($arrayIds); $i ++) {
            if ($arrayIds[$i] == $goodsId) {
                unset($arrayIds[$i]);
                unset($arrayNums[$i]);
            }
        }
        $this->idStr = implode('@', $arrayIds);
        $this->numStr = implode('@', $arrayNums);
    }
    /*
	 * @ ����˵����
	 *   ���Ĺ��ﳵ����Ʒ����
	 *
	 * @ ����˵����
	 *   $goodsId����ƷID
	 *   $goodsNum����������
	 */
    function changeNum ($goodsId, $goodsNum)
    {
        $arrayIds = explode('@', $this->idStr);
        $arrayNums = explode('@', $this->numStr);
        for ($i = 0; $i < count($arrayIds); $i ++) {
            if ($arrayIds[$i] == $goodsId) {
                $arrayNums[$i] = $goodsNum;
            }
        }
        $this->idStr = implode('@', $arrayIds);
        $this->numStr = implode('@', $arrayNums);
    }
    /*
	 * @ ����˵����
	 *   ��չ��ﳵ
	 */
    function setCartNull ()
    {
        $this->idStr = '';
        $this->numStr = '';
    }
    /*
	 * @ ����˵����
	 *   ��ȡ���ﳵ����ƷID�ַ���
	 */
    function getIdStr ()
    {
        return $this->idStr;
    }
    /*
 * @ ����˵����
 *   ��ȡ���ﳵ����Ʒ�����ַ���
 */
    function getNumStr ()
    {
        return $this->numStr;
    }
}


