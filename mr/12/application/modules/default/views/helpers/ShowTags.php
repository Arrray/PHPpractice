<?php
class Zend_View_Helper_ShowTags
{
    public function showTags ($tagsStr, $baseUrl)
    {
        $result = '';
        $tagsArray = explode(',', $tagsStr);
        foreach ($tagsArray as $tags) {
            if (trim($tags) != '') {
              //  $result .= '<a href="' . $baseUrl . '/tags/keyword/' . urlencode($tags) . '" class="a3">' . $tags . '</a>　';
                $result .= '<a href="' . $baseUrl . '/common/search/keyWord/' . urlencode($tags) . '" class="a3">' . $tags . '</a>　';
            }
        }
        return $result;
    }
}