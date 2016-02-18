<?php
class Zend_View_Helper_SearchLink
{
    public function searchLink ($id, $flag, $type, $userid = null)
    {
        $config = Zend_Registry::get('config');
        $link = '';
        $url = '';
        switch ($flag) {
            case 0:
                $link = '/news/info-' . $id . '-1.html';
                $url = $config['pageInfo']['default']['domain'] . '/news/info-' . $id . '-1.html';
                break;
/*            case 1:
                $link = '/program/info-' . $id . '-1.html';
                $url = $config['pageInfo']['default']['domain'] . '/program/info-' . $id . '-1.html';
                break;
            case 2:
                $link = '/design/info-' . $id . '-1.html';
                $url = $config['pageInfo']['default']['domain'] . '/design/info-' . $id . '-1.html';
                break;
            case 3:
                $link = '/db/info-' . $id . '-1.html';
                $url = $config['pageInfo']['default']['domain'] . '/db/info-' . $id . '-1.html';
                break;
            case 4:
                $link = '/server/info-' . $id . '-1.html';
                $url = $config['pageInfo']['default']['domain'] . '/server/info-' . $id . '-1.html';
                break;
            case 5:
                $link = '/exam/info-' . $id . '-1.html';
                $url = $config['pageInfo']['default']['domain'] . '/exam/info-' . $id . '-1.html';
                break;
            case 6:
                $link = '/material/info-' . $id . '-1.html';
                $url = $config['pageInfo']['default']['domain'] . '/material/info-' . $id . '-1.html';
                break;
            case 7:
                $link = '/webmanage/info-' . $id . '-1.html';
                $url = $config['pageInfo']['default']['domain'] . '/webmanage/info-' . $id . '-1.html';
                break;
            case 8:
                $link = '/dissertation/info-' . $id . '-1.html';
                $url = $config['pageInfo']['default']['domain'] . '/dissertation/info-' . $id . '-1.html';
                break;
            case 9:
                $link = '/space/articleinfo-' . $userid . '-' . $id . '.html';
                $url = $config['pageInfo']['default']['domain'] . '/space/articleinfo-' . $userid . '-' . $id . '.html';
                break;
            case 10:
                $link = '/bbs/thread-' . $id . '-1.html';
                $url = $config['pageInfo']['default']['domain'] . '/bbs/thread-' . $id . '-1.html';
                break;*/
        }
        //返回结果
        if ($type == 0) {
            return $link;
        } else {
            return $url;
        }
    }
}