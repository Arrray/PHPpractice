<?php
/******************************************************************
 * @ ˵����ADODB���ݿ�����࣬��ͬʱ���в�ѯ����ӡ�ɾ���Ͳ��Ҳ���
 *
 * @ ���ߣ��ҵ��������� ���л����ҵ�Ӣ������ lzh 
 * @ E-mail:jlnu_lzh@126.com
 * @ Tel��15043191896  
 ******************************************************************/
class AdminDB
{
    /*
	 * @ ����˵����
	 *   ִ��SQL���
	 *
	 * @ ����˵����
	 *   $sql����Ҫִ�е�SQL���
	 *   $connID�����ݿ�����ID
	 */
    function executeSQL ($sql, $connID)
    {
        $sqlType = strtolower(substr(trim($sql), 0, 6)); //��ȡSQL��������
        $rs = $connID->Execute($sql); //ִ��SQL���  
        if ($sqlType == 'select') { //�����select��ѯ
            $arrayData = $rs->GetRows(); //���ز�ѯ��¼��
            if (count($arrayData) == 0 || $rs == false) { //���û��ѯ����������
                return false; //����false
            } else { //����
                return $arrayData; //���ؼ�¼��
            }
        } elseif ($sqlType == 'insert' || $sqlType == 'update' || $sqlType == 'delete') { //���ִ�в��롢���»�ɾ�����
            return $rs; //�������ִ��״̬�����ɹ�����true��ʧ�ܷ���false
        } else {
            return false; //�������������ѯ���򷵻�false
        }
    }
}



