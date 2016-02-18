<?php
/*********************************************
 * @ 说明：ADODB数据库连接类
 *
 * @ 作者：我的中文名叫 刘中华，我的英文名叫 lzh 
 * @ E-mail:jlnu_lzh@126.com
 * @ Tel：15043191896  
 *********************************************/
class ConnDB
{
    var $dbType; //数据库类型标识
    var $host; //数据库服务器地址
    var $userName; //数据库服务器用户名
    var $password; //数据库用户密码
    var $dbName; //要连接的数据库名
    var $isDebug; //是否显示调试信息
    var $connID; //数据库连接ID
    /*
	 * @ 方法说明：
	 *   构造方法，类的初始化
	 *
	 * @ 参数说明：
	 *   $dbType：连接数据库的类型
	 *   $host：数据库服务器主机名或IP地址
	 *   $userName：用户名
	 *   $password：密码
	 *   $dbName：数据库名称
	 *   $isDebug：是否显示SQL语句
	 */
    function ConnDB ($dbType = 'mysql', $host, $userName, $password, $dbName, $isDebug = false)
    {
        $this->dbType = $dbType; //为数据库类型赋初值
        $this->host = $host; //为服务器地址赋初值
        $this->userName = $userName; //为用户名赋初值
        $this->password = $password; //为密码赋初值
        $this->dbName = $dbName; //为数据库名赋初值
        $this->isDebug = $isDebug; //为调试信息赋初值
    }
    /*
	 * @ 方法说明：
	 *   获取数据库连接ID
	 */
    function getConnID ()
    {
        require_once 'library/adodb/adodb.inc.php'; //导入ADODB类库
        $this->connID = NewADOConnection($this->dbType); //生成数据库连接对象
        if ($this->dbType == 'mysql' || $this->dbType == 'mssql') { //如果为MySQL数据库或者SQL Server数据库
            $this->connID->Connect($this->host, $this->userName, $this->password, $this->dbName); //通过Connect()方法建立与数据库连接
            if ($this->dbType == 'mysql') {
                $this->connID->Execute('set names gb2312'); //设置数据库编码
            }
        } elseif ($this->dbType == 'access') { //如过为ACCESS数据库
            $this->connID->Connect('Driver = {Microsoft Access Driver (*.mdb)}; Dbq =' . realpath($this->dbName) . ';Uid = ' . $this->userName . ';Pwd = ' . $this->password . ';');
        } else {
            return false;
        }
        $this->connID->debug = $this->isDebug; //是否调试
        return $this->connID; //返回数据库连接对象
    }
    /*
	 * @ 方法说明：
	 *   关闭与数据库的连接
	 */
    function closeConnID ()
    {
        @$this->connID->Disconnect(); //关闭与数据库的连接
    }
}


