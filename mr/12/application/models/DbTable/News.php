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
     * 按ID查找新闻
     *
     * @param int $id
     * @param boolean $isCache
     * @return null|array
     */
    public function findById ($id, $isCache = false)
    {
        //查询上条记录where条件
        $where1 = $this->getAdapter()->quoteInto('id < ? and flag=fg', $id);
        //查询下条记录where条件
        $where2 = $this->getAdapter()->quoteInto('id > ? and flag=fg', $id);
        //上一条记录id
        $innerSelect1 = $this->getAdapter()->select();
        $innerSelect1->from($this->_name, 'id')->where($where1)->order('id desc')->limit(1, 0);
        //上一条记录title
        $innerSelect2 = $this->getAdapter()->select();
        $innerSelect2->from($this->_name, 'title')->where($where1)->order('id desc')->limit(1, 0);
        //下一条记录id
        $innerSelect3 = $this->getAdapter()->select();
        $innerSelect3->from($this->_name, 'id')->where($where2)->order('id')->limit(1, 0);
        //下一条记录title
        $innerSelect4 = $this->getAdapter()->select();
        $innerSelect4->from($this->_name, 'title')->where($where2)->order('id')->limit(1, 0);
        //外层查询条件
        $where = $this->getAdapter()->quoteInto('id = ?', $id);
        //构建外层查询select语句
        $select = $this->getAdapter()->select();
        $select->from($this->_name, array('id' , 'title' , 'content' , 'uncontent' , 'addtime' , 'flag' , 'flag as fg' , 'imagename' , 'browse' , 'relativetag' , 'tags' , 'author' , 'source' , 'istodaycommend' , '(' . $innerSelect1 . ') as pid' , '(' . $innerSelect2 . ') as ptitle' , '(' . $innerSelect3 . ') as nid' , '(' . $innerSelect4 . ') as ntitle'))->where($where);
        if ($isCache) {
            //缓存ID
            $cacheId = strtolower($this->_name . '_' . __FUNCTION__ . '_' . $id);
            //缓存标识
            $arrayCacheIag = array(strtolower($this->_name . '_' . __FUNCTION__ . '_' . $id));
            //带缓存的查询
            if (! $result = $this->_cache->load($cacheId)) {
                $result = $this->getAdapter()->fetchRow($select);
                $this->_cache->save($result, $cacheId, $arrayCacheIag);
            }
        } else {
            //不带缓存的查询
            $result = $this->getAdapter()->fetchRow($select);
        }
        //返回查询结果
        return $result;
    }
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
        if ($isCache) {
            //缓存ID
            $cacheId = strtolower($this->_name . '_' . __FUNCTION__ . '_' . $flag . '_' . $orderIndex . '_' . $offset . '_' . $count . '_' . $isImg);
            //缓存标识
            $arrayCacheIag = array();
            if ($affect) {
                $arrayCacheIag = array(strtolower($this->_name));
            }
            //带缓存的查询
            if (! $result = $this->_cache->load($cacheId)) {
                $result = $this->getAdapter()->fetchAll($select);
                $this->_cache->save($result, $cacheId, $arrayCacheIag);
            }
        } else {
            //不带缓存的查询
            $result = $this->getAdapter()->fetchAll($select);
        }
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
    /**
     * 关联新闻
     *
     * @param int $selfid
     * @param string $keywords
     * @param int $orderIndex
     * @param int $offset
     * @param int $count
     * @return null|array
     */
    public function findByRelativetag ($selfid, $keywords, $orderIndex = 0, $offset = 0, $count = 10)
    {
        //将关键字保存到数组中
        $arrayKeyWords = explode(' ', $keywords);
        //构建select对象
        $select = $this->getAdapter()->select();
        //指定查询表名
        $select->from($this->_name);
        //指定查询条件
        $orWhere = '';
        $j = 0;
        //按主题查询
        foreach ($arrayKeyWords as $key) {
            if (trim($key) != '') {
                if ($j == 0) {
                    $orWhere .= $this->getAdapter()->quoteInto('title like ?', '%' . $key . '%');
                } else {
                    $orWhere .= $this->getAdapter()->quoteInto(' or title like ?', '%' . $key . '%');
                }
                $j ++;
            }
        }
        //按内容查询
        foreach ($arrayKeyWords as $key) {
            if (trim($key) != '') {
                if ($j == 0) {
                    $orWhere .= $this->getAdapter()->quoteInto('uncontent like ?', '%' . $key . '%');
                } else {
                    $orWhere .= $this->getAdapter()->quoteInto(' or uncontent like ?', '%' . $key . '%');
                }
                $j ++;
            }
        }
        $select->where($orWhere)->where($this->getAdapter()->quoteInto('id <> ?', $selfid));
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
        //记录数量
        $select->limit($count, $offset);
        //执行查询
        $result = $this->getAdapter()->fetchAll($select);
        //返回结果
        return $result;
    }
    /**
     * 按主题查找新闻
     *
     * @param string $title
     * @return null|array
     */
    public function findByTitle ($title)
    {
        //查询条件
        $where = $this->getAdapter()->quoteInto('title = ?', $title);
        $result = $this->fetchRow($where);
        if ($result != null) {
            //将查询结果转换为数组
            $result = $result->toArray();
        }
        //返回查询结果
        return $result;
    }
    /**
     * 根据关键字和其他条件对新闻进行模糊查询
     *
     * @param string $keywords
     * @param int $flag
     * @param datetime $fromTime
     * @param datetime $toTime
     * @param string $ftitle
     * @param string $fcontent
     * @param int $page
     * @param int $pageSize
     * @param int $pageRange
     * @return null|array
     */
    public function findByPageAndLike ($keywords, $flag = null, $fromTime = null, $toTime = null, $ftitle = null, $fcontent = null, $page = 1, $pageSize = 10, $pageRange = 5)
    {
        //将关键字保存到数组中
        $arrayKeyWords = explode(' ', $keywords);
        //查询结果排序方式
        $order = 'addtime desc';
        //构建select对象
        $select = $this->getAdapter()->select();
        //指定查询表名
        $select->from($this->_name);
        //指定查询条件
        $orWhere = '';
        $j = 0;
        //按主题查询
        if ($ftitle == 1) {
            foreach ($arrayKeyWords as $key) {
                if (trim($key) != '') {
                    if ($j == 0) {
                        $orWhere .= $this->getAdapter()->quoteInto('title like ?', '%' . $key . '%');
                    } else {
                        $orWhere .= $this->getAdapter()->quoteInto(' or title like ?', '%' . $key . '%');
                    }
                    $j ++;
                }
            }
        }
        //按内容查询
        if ($fcontent == 1) {
            foreach ($arrayKeyWords as $key) {
                if (trim($key) != '') {
                    if ($j == 0) {
                        $orWhere .= $this->getAdapter()->quoteInto('content like ?', '%' . $key . '%');
                    } else {
                        $orWhere .= $this->getAdapter()->quoteInto(' or content like ?', '%' . $key . '%');
                    }
                    $j ++;
                }
            }
        }
        $select->where($orWhere);
        //查询的类别
        if ($flag != null && $flag != '') {
            $where = $this->getAdapter()->quoteInto('flag = ?', $flag);
            $select->where($where);
        }
        //查询特定时间段内的内容
        if ($fromTime != null) {
            $where = $this->getAdapter()->quoteInto('addtime > ?', $fromTime);
            $select->where($where);
            $where = $this->getAdapter()->quoteInto('addtime < ?', $toTime);
            $select->where($where);
        }
        //排序方式
        $select->order($order);
        //查询结果分页
        $adapter = new Zend_Paginator_Adapter_DbSelect($select);
        $paginator = new Zend_Paginator($adapter);
        $paginator->setItemCountPerPage($pageSize)->setCurrentPageNumber($page)->setPageRange($pageRange);
        //返回查询结果
        return $paginator;
    }
    /**
     * 对新闻进行匹配查询
     *
     * @param string $keywords
     * @return null|array
     */
    public function findByLike ($keywords)
    {
        //将关键字保存到数组中
        $arrayKeyWords = explode(' ', $keywords);
        //查询结果排序方式
        $order = 'addtime desc';
        //构建select对象
        $select = $this->getAdapter()->select();
        //指定查询表名
        $select->from($this->_name);
        //指定查询条件
        $orWhere = '';
        $j = 0;
        //按主题查询
        foreach ($arrayKeyWords as $key) {
            if (trim($key) != '') {
                if ($j == 0) {
                    $orWhere .= $this->getAdapter()->quoteInto('title like ?', '%' . $key . '%');
                } else {
                    $orWhere .= $this->getAdapter()->quoteInto(' or title like ?', '%' . $key . '%');
                }
                $j ++;
            }
        }
        //按内容查询
        foreach ($arrayKeyWords as $key) {
            if (trim($key) != '') {
                if ($j == 0) {
                    $orWhere .= $this->getAdapter()->quoteInto('content like ?', '%' . $key . '%');
                } else {
                    $orWhere .= $this->getAdapter()->quoteInto(' or content like ?', '%' . $key . '%');
                }
                $j ++;
            }
        }
        $select->where($orWhere);
        //排序方式
        $select->order($order);
        $result = $this->getAdapter()->fetchAll($select);
        return $result;
    }
    /**
     * 添加新闻信息
     *
     * @param array $arrayInsert
     */
    public function insert ($arrayInsert)
    {
        try {
            //开启事务
            $this->getAdapter()->beginTransaction();
            //调用父类方法添加
            parent::insert($arrayInsert);
            //根据缓存标识清除缓存的数据
            $this->_cache->clean(Zend_Cache::CLEANING_MODE_MATCHING_TAG, array(strtolower($this->_name)));
            //提交查询
            $this->getAdapter()->commit();
        } catch (Zend_Exception $e) {
            echo $e->getMessage();
            //如果出错则事务回滚
            $this->getAdapter()->rollBack();
        }
    }
    /**
     * 按ID更改新闻信息
     *
     * @param array $arrayUpdate
     * @param int $id
     */
    public function update ($arrayUpdate, $id, $isCleanCache = true)
    {
        try {
            //开启事务
            $this->getAdapter()->beginTransaction();
            //如果需要删除缓存
            if ($isCleanCache) {
                //清除指定标识的缓存
                $this->_cache->clean(Zend_Cache::CLEANING_MODE_MATCHING_TAG, array(strtolower($this->_name)));
                $this->_cache->clean(Zend_Cache::CLEANING_MODE_MATCHING_TAG, array(strtolower($this->_name . '_findById_' . $id)));
            }
            //指定查询条件
            $where = $this->getAdapter()->quoteInto('id = ?', $id);
            //调用父类方法更改数据
            parent::update($arrayUpdate, $where);
            //提交查询
            $this->getAdapter()->commit();
        } catch (Zend_Exception $e) {
            echo $e->getMessage();
            //如果出错则事务回滚
            $this->getAdapter()->rollBack();
        }
    }
    /**
     * 删除新闻
     *
     * @param array $arrayID
     */
    public function delete ($arrayID)
    {
        try {
            //开启事务
            $this->getAdapter()->beginTransaction();
            //遍历所有ID
            foreach ($arrayID as $id) {
                //清除指定标识的缓存
                $this->_cache->clean(Zend_Cache::CLEANING_MODE_MATCHING_TAG, array(strtolower($this->_name)));
                $this->_cache->clean(Zend_Cache::CLEANING_MODE_MATCHING_TAG, array(strtolower($this->_name . '_findById_' . $id)));
            }
            //指定查询条件
            $where = $this->getAdapter()->quoteInto('id in(?)', $arrayID);
            parent::delete($where);
            //提交查询
            $this->getAdapter()->commit();
        } catch (Zend_Exception $e) {
            echo $e->getMessage();
            //如果出错则事务回滚
            $this->getAdapter()->rollBack();
        }
    }
}
