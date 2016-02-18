<?php
/*********************************************
 * @ ˵����ADODB���ݿ�������
 *
 * @ ���ߣ��ҵ��������� ���л����ҵ�Ӣ������ lzh 
 * @ E-mail:jlnu_lzh@126.com
 * @ Tel��15043191896  
 *********************************************/
class ConnDB
{
    var $dbType; //���ݿ����ͱ�ʶ
    var $host; //���ݿ��������ַ
    var $userName; //���ݿ�������û���
    var $password; //���ݿ��û�����
    var $dbName; //Ҫ���ӵ����ݿ���
    var $isDebug; //�Ƿ���ʾ������Ϣ
    var $connID; //���ݿ�����ID
    /*
	 * @ ����˵����
	 *   ���췽������ĳ�ʼ��
	 *
	 * @ ����˵����
	 *   $dbType���������ݿ������
	 *   $host�����ݿ��������������IP��ַ
	 *   $userName���û���
	 *   $password������
	 *   $dbName�����ݿ�����
	 *   $isDebug���Ƿ���ʾSQL���
	 */
    function ConnDB ($dbType = 'mysql', $host, $userName, $password, $dbName, $isDebug = false)
    {
        $this->dbType = $dbType; //Ϊ���ݿ����͸���ֵ
        $this->host = $host; //Ϊ��������ַ����ֵ
        $this->userName = $userName; //Ϊ�û�������ֵ
        $this->password = $password; //Ϊ���븳��ֵ
        $this->dbName = $dbName; //Ϊ���ݿ�������ֵ
        $this->isDebug = $isDebug; //Ϊ������Ϣ����ֵ
    }
    /*
	 * @ ����˵����
	 *   ��ȡ���ݿ�����ID
	 */
    function getConnID ()
    {
        require_once 'library/adodb/adodb.inc.php'; //����ADODB���
        $this->connID = NewADOConnection($this->dbType); //�������ݿ����Ӷ���
        if ($this->dbType == 'mysql' || $this->dbType == 'mssql') { //���ΪMySQL���ݿ����SQL Server���ݿ�
            $this->connID->Connect($this->host, $this->userName, $this->password, $this->dbName); //ͨ��Connect()�������������ݿ�����
            if ($this->dbType == 'mysql') {
                $this->connID->Execute('set names gb2312'); //�������ݿ����
            }
        } elseif ($this->dbType == 'access') { //���ΪACCESS���ݿ�
            $this->connID->Connect('Driver = {Microsoft Access Driver (*.mdb)}; Dbq =' . realpath($this->dbName) . ';Uid = ' . $this->userName . ';Pwd = ' . $this->password . ';');
        } else {
            return false;
        }
        $this->connID->debug = $this->isDebug; //�Ƿ����
        return $this->connID; //�������ݿ����Ӷ���
    }
    /*
	 * @ ����˵����
	 *   �ر������ݿ������
	 */
    function closeConnID ()
    {
        @$this->connID->Disconnect(); //�ر������ݿ������
    }
}


