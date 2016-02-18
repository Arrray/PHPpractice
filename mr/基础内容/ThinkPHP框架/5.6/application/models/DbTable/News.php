<?php
/**
 * 新闻表模型
 *
 */
class Model_DbTable_News extends Zend_Db_Table
{
    //表名
    protected $_name = 'tb_news';
    //主键
    protected $_primary = 'id';
    //缓存对象

    /**
     * 查询满足指定条件的指定范围内的记录
     *
     * @param int|string $flag
     * @param int $orderIndex
     * @param int_type $offset
     * @param int $count
     * @param boolean $isImg
     * @param boolean $isCache
     * @param boolean $affect
     * @return null|array
     */
    public function findByNum ($flag, $orderIndex, $offset, $count, $isImg = false, $isCache = false, $affect = false)
    {
        //生成select对象
        $select = $this->getAdapter()->select();
        $select->from($this->_name);
        //isTodayCommend-今日推荐　all-全部　0-站内新闻 　1-IT人物　2-高端访谈　3-产品快讯　4-企业动态　5-互联网　6-游戏资讯　7-广告传媒　8-财经报道　9-图片新闻　10-综合资讯 
        if ($flag !== 'all') {
            if ($flag === 'istodaycommend') {
                $where = 'istodaycommend = true';
            } else {
                $where = $this->getAdapter()->quoteInto('flag = ?', $flag);
            }
            $select->where($where);
        }
        //只显示带图片的记录
        if ($isImg) {
            $select->where("imagename <> ''");
        }
        //排序方式
        if ($orderIndex == 0) {
            $order = 'addtime desc';
        } elseif ($orderIndex == 1) {
            $order = 'addtime';
        } elseif ($orderIndex == 2) {
            $order = 'browse desc';
        } elseif ($orderIndex == 3) {
            $order = 'browse ';
        }
        $select->order($order);
        //指定记录条数
        $select->limit($count, $offset);
        //查询结果
      
     
            $result = $this->getAdapter()->fetchAll($select);
    
        return $result;
    }
    /**
     * 新闻分页显示
     *
     * @param int|string $flag
     * @param int $orderIndex
     * @param int $page
     * @param int $itemCountPerPage
     * @param int $pageRange
     * @return Zend_paginator
     */
    public function findByPage ($flag, $orderIndex, $page = 1, $itemCountPerPage = 10, $pageRange = 5)
    {
        //生成select对象
        $select = $this->getAdapter()->select();
        $select->from($this->_name);
        //isTodayCommend-今日推荐　all-全部　0-站内新闻 　1-IT人物　2-高端访谈　3-产品快讯　4-企业动态　5-互联网　6-游戏资讯　7-广告传媒　8-财经报道　9-图片新闻　10-综合资讯 
        if ($flag !== 'all') {
            if ($flag === 'ttj') {
                $where = 'istodaycommend = true';
            } else {
                $where = $this->getAdapter()->quoteInto('flag = ?', $flag);
            }
            $select->where($where);
        }
        //排序方式
        if ($orderIndex == 0) {
            $order = 'addtime desc';
        } elseif ($orderIndex == 1) {
            $order = 'addtime';
        } elseif ($orderIndex == 2) {
            $order = 'browse desc';
        } elseif ($orderIndex == 3) {
            $order = 'browse';
        }
        $select->order($order);
        //实例并构建Zend_Paginator对象
        $paginatorAdapter = new Zend_Paginator_Adapter_DbSelect($select);
        $paginator = new Zend_Paginator($paginatorAdapter);
        $paginator->setPageRange($pageRange)->setItemCountPerPage($itemCountPerPage)->setCurrentPageNumber($page);
        return $paginator;
    }
    
}
