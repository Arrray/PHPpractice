<?php
/**
 * 评论表模型
 *
 */
class Model_DbTable_Comment extends Zend_Db_Table
{
    //表名
    protected $_name = 'tb_comment';
    //主键
    protected $_primary = 'id';
    //缓存对象
    private $_cache;
    /**
     * 模型初始化
     *
     */
    public function init ()
    {
        //初始缓存对象
        $this->_cache = Zend_Registry::get('cache');
    }
    /**
     * 根据类别标识和主题ID查询评论内容
     *
     * @param ind $flag
     * @param int $title_id
     * @param boolean $isCache
     * @return null|array
     */
    public function findByFlagAndTitleid ($flag, $title_id, $isCache = false)
    {
        //flag　1-新闻　2-教程　3-专题　4-数据库　5-服务器　6-考试认证　7-网站运营　10-美工设计
        //查询条件 
        $where1 = $this->getAdapter()->quoteInto('title_id = ?', $title_id);
        $where2 = $this->getAdapter()->quoteInto('flag = ?', $flag);
        //排序方式
        $order = 'addtime';
        //建立并执行查询
        $select = $this->getAdapter()->select();
        $select->from($this->_name)->join('tb_user', $this->_name . '.user_id = tb_user.id', array('id as uid', 'netname', 'face'))->where($where1)->where($where2)->order($order);
        if ($isCache) {
            $cacheId = strtolower($this->_name . '_' . __FUNCTION__ . '_' . $flag . '_' . $title_id);
            if (! $result = $this->_cache->load($cacheId)) {
                $result = $this->getAdapter()->fetchAll($select);
                $this->_cache->save($result, $cacheId);
            }
        } else {
            $result = $this->getAdapter()->fetchAll($select);
        }
        return $result;
    }
}
