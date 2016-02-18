<?php
/**
 * 用户表模型
 *
 */
class Model_DbTable_User extends Zend_Db_Table
{
    //表名
    protected $_name = 'tb_user';
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
     * 按昵称查找用户
     *
     * @param string $netname
     * @return null|array
     */
    public function findByNetname ($netname)
    {
        $where = $this->getAdapter()->quoteInto('netname = ?', $netname);
        $result = $this->fetchRow($where);
        if ($result != null) {
            $result = $result->toArray();
        }
        return $result;
    }
    /**
     * 对用户身份进行验证
     *
     * @param string $netname
     * @param string $password
     * @return boolean
     */
    public function isValid ($netname, $password)
    {
        //构建验证适配器
        $authAdapter = new Zend_Auth_Adapter_DbTable($this->getAdapter());
        $authAdapter->setTableName($this->_name)->setIdentityColumn('netname')->setCredentialColumn('password')->setIdentity($netname)->setCredential($password);
        //获取Zend_Auth对象并验证
        $auth = Zend_Registry::get('auth');
        return $auth->authenticate($authAdapter)->isValid();
    }
    /**
     * 按ID查找用户信息
     *
     * @param int $id
     */
    public function findById ($id)
    {
        //发帖总数
        $select1 = $this->getAdapter()->select();
        $select1->from('tb_title', 'count(*)')->join($this->_name, 'tb_title.user_id = ' . $this->_name . '.id', null)->where($this->_name . '.id = uid');
        //评论总数
        $select2 = $this->getAdapter()->select();
        $select2->from('tb_comment', 'count(*)')->join($this->_name, 'tb_comment.user_id = ' . $this->_name . '.id', null)->where($this->_name . '.id = uid');
        //文章总数
        $select3 = $this->getAdapter()->select();
        $select3->from('tb_article', 'count(*)')->join($this->_name, 'tb_article.user_id = ' . $this->_name . '.id', null)->where($this->_name . '.id = uid');
        //文章总浏览数
        $select4 = $this->getAdapter()->select();
        $select4->from('tb_article', 'sum(tb_article.browse)')->join($this->_name, 'tb_article.user_id = ' . $this->_name . '.id', null)->where($this->_name . '.id = uid');
        //主查询
        $select = $this->getAdapter()->select();
        $select->from($this->_name, array('id' , 'id as uid' , 'netname' , 'password' , 'email' , 'fromcity' , 'regip' , 'lastlogintime' , 'lastloginip' , 'regtime' , 'usertype' , 'score' , 'face' , 'signature' , 'friendid' , 'spacebrowse' , '(' . $select1 . ') as totalnote' , '(' . $select2 . ') as totalcomment' , '(' . $select3 . ') as totalarticle' , '(' . $select4 . ') as totalarticlebrowse'));
        $select->where($this->getAdapter()->quoteInto($this->_name . '.id = ?', $id));
        //返回查询结果
        return $this->getAdapter()->fetchRow($select);
    }
    /**
     * 按好友ID查询好友信息
     *
     * @param string $friendid
     */
    public function findFriendByFriendid ($friendid, $offset = null, $count = null)
    {
        //查询条件
        $where = $this->getAdapter()->quoteInto('id in(?)', explode(',', $friendid));
        //执行查询
        $select = $this->select()->from($this->_name)->where($where)->order('regtime');
        //查询指定范围内的记录
        if ($offset != null && $count != null) {
            $select->limit($count, $offset);
        }
        $result = $this->fetchAll($select);
        if ($result != null) {
            //查询结果转化为数组
            $result = $result->toArray();
        }
        //返回查询结果
        return $result;
    }
    /**
     * 按积分查询指定范围内的用户
     *
     * @param int $count
     * @param int $offset
     * @return null|array
     */
    public function findTopByScore ($count, $offset)
    {
        //建立Zend_Select
        $select = $this->select();
        $select->from($this->_name)->order('score desc')->limit($count, $offset);
        $result = $this->fetchAll($select);
        if ($result != null) {
            //查询结果转化为数组
            $result = $result->toArray();
        }
        //返回查询结果
        return $result;
    }
    /**
     * 用户信息分页显示
     *
     * @param int $orderIndex
     * @param int $page
     * @param int $itemCountPerPage
     * @param int $pageRange
     * @return Zend_paginator
     */
    public function findByPage ($orderIndex, $page = 1, $itemCountPerPage = 10, $pageRange = 5)
    {
        //生成select对象
        $select = $this->getAdapter()->select();
        $select->from($this->_name);
        //排序方式
        if ($orderIndex == 0) {
            $order = 'regtime desc';
        } elseif ($orderIndex == 1) {
            $order = 'regtime';
        } elseif ($orderIndex == 2) {
            $order = 'score desc';
        } elseif ($orderIndex == 3) {
            $order = 'score';
        }
        $select->order('usertype desc');
        $select->order($order);
        //实例Zend_Paginator对象
        $paginatorAdapter = new Zend_Paginator_Adapter_DbSelect($select);
        $paginator = new Zend_Paginator($paginatorAdapter);
        $paginator->setPageRange($pageRange)->setItemCountPerPage($itemCountPerPage)->setCurrentPageNumber($page);
        return $paginator;
    }
    /**
     * 按昵称模糊查找
     *
     * @param string $netname
     * @return null|array
     */
    public function findByLike ($netname)
    {
        $where = $this->getAdapter()->quoteInto('netname like ?', '%' . $netname . '%');
        $result = $this->fetchAll($where);
        if ($result != null) {
            $result = $result->toArray();
        }
        return $result;
    }
}
    