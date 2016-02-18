<?php
/******************************************************************
 * @ 说明：ADODB数据库操作类，可同时进行查询、填加、删除和查找操作
 *
 * @ 作者：我的中文名叫 刘中华，我的英文名叫 lzh 
 * @ E-mail:jlnu_lzh@126.com
 * @ Tel：15043191896  
 ******************************************************************/
class AdminDB
{
    /*
	 * @ 方法说明：
	 *   执行SQL语句
	 *
	 * @ 参数说明：
	 *   $sql：所要执行的SQL语句
	 *   $connID：数据库连接ID
	 */
    function executeSQL ($sql, $connID)
    {
        $sqlType = strtolower(substr(trim($sql), 0, 6)); //提取SQL语句的类型
        $rs = $connID->Execute($sql); //执行SQL语句  
        if ($sqlType == 'select') { //如果是select查询
            $arrayData = $rs->GetRows(); //返回查询记录集
            if (count($arrayData) == 0 || $rs == false) { //如果没查询到或发生错误
                return false; //返回false
            } else { //否则
                return $arrayData; //返回记录集
            }
        } elseif ($sqlType == 'insert' || $sqlType == 'update' || $sqlType == 'delete') { //如果执行插入、更新或删除语句
            return $rs; //返回语句执行状态，即成功返回true，失败返回false
        } else {
            return false; //如果不是上述查询，则返回false
        }
    }
}



