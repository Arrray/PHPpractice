<?php
/*********************************************
 * @ 说明：ADODB数据库分页类
 *
 * @ 作者：我的中文名叫 刘中华，我的英文名叫 lzh 
 * @ E-mail:jlnu_lzh@126.com
 * @ Tel：15043191896  
 *********************************************/
class PageDB
{
    /*
	 * @ 方法说明：
	 *   数据分页处理，并以数组形式返回分页信息
	 *
	 * @ 参数说明：
	 *   $sql：所要执行的SQL语句
	 *   $connID：数据库连接ID
	 *   $pageSize：每页显示数据的条数
	 *   $page：当前显示的页数
	 */
    function pageData ($sql, $connID, $pageSize, $page)
    {
        $arrayPageInfo = array();
        $nowPage = $page;
        $rs = $connID->PageExecute($sql, $pageSize, $nowPage);
        $arrayData = $rs->GetRows();
        if (count($arrayData) == 0 || $rs == false) {
            return false;
        } else {
            $arrayPageInfo['data'] = $arrayData; //每页的数据
            $rsAll = $connID->Execute($sql);
            $countRs = count($rsAll->GetRows());
            $countPage = ceil($countRs / $pageSize);
            $arrayPageInfo['pageSize'] = $pageSize; //每页显示记录的条数
            $arrayPageInfo['countRs'] = $countRs; //总记录数
            $arrayPageInfo['page'] = $nowPage; //当前页
            $arrayPageInfo['countPage'] = $countPage; //总页数
            $arrayPageInfo['first'] = 1; //第一页的页码
            if ($page > 1) {
                $arrayPageInfo['previous'] = $rs->AbsolutePage() - 1; //前一页的页码
            } else {
                $arrayPageInfo['previous'] = 1;
            }
            if ($page < $countPage) {
                $arrayPageInfo['next'] = $rs->AbsolutePage() + 1; //后一页的页码
            } else {
                $arrayPageInfo['next'] = $countPage;
            }
            $arrayPageInfo['last'] = $countPage; //最后一页的页码
        }
        return $arrayPageInfo;
    }
}


