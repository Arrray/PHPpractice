<?php
/*********************************************
 * @ ˵����ADODB���ݿ��ҳ��
 *
 * @ ���ߣ��ҵ��������� ���л����ҵ�Ӣ������ lzh 
 * @ E-mail:jlnu_lzh@126.com
 * @ Tel��15043191896  
 *********************************************/
class PageDB
{
    /*
	 * @ ����˵����
	 *   ���ݷ�ҳ��������������ʽ���ط�ҳ��Ϣ
	 *
	 * @ ����˵����
	 *   $sql����Ҫִ�е�SQL���
	 *   $connID�����ݿ�����ID
	 *   $pageSize��ÿҳ��ʾ���ݵ�����
	 *   $page����ǰ��ʾ��ҳ��
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
            $arrayPageInfo['data'] = $arrayData; //ÿҳ������
            $rsAll = $connID->Execute($sql);
            $countRs = count($rsAll->GetRows());
            $countPage = ceil($countRs / $pageSize);
            $arrayPageInfo['pageSize'] = $pageSize; //ÿҳ��ʾ��¼������
            $arrayPageInfo['countRs'] = $countRs; //�ܼ�¼��
            $arrayPageInfo['page'] = $nowPage; //��ǰҳ
            $arrayPageInfo['countPage'] = $countPage; //��ҳ��
            $arrayPageInfo['first'] = 1; //��һҳ��ҳ��
            if ($page > 1) {
                $arrayPageInfo['previous'] = $rs->AbsolutePage() - 1; //ǰһҳ��ҳ��
            } else {
                $arrayPageInfo['previous'] = 1;
            }
            if ($page < $countPage) {
                $arrayPageInfo['next'] = $rs->AbsolutePage() + 1; //��һҳ��ҳ��
            } else {
                $arrayPageInfo['next'] = $countPage;
            }
            $arrayPageInfo['last'] = $countPage; //���һҳ��ҳ��
        }
        return $arrayPageInfo;
    }
}


