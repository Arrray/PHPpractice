<?php
/**
 * Created by PhpStorm.
 * User: JUN-CHAO
 * Date: 2016/1/15
 * Time: 17:47
 */
class member{
    //获取在线用户列表
    public function grtOnlineUsers(){
        //从数据库中取得所有的在线用户（即用户状态status列为1的数据）
        $rs = base::query("SELECT * 'members' WHERE 'statue' = 1");
        $users = array();
        while ($_ =base::fetch($rs)){
            $users [] = $_;
        }
        return $users;
    }

    //登录
    public function login($email,$password){
        if($_ = $this->authlogin($email,$password)){
            //用户登录成功后更新session和数据库信息
            $_SESSION['uid'] = $this->uid = $_['uid'];
            base::query("UPDATE 'members' SET 'status' = 1,'lastlogin' = '". TIME ."'WHERE 'uid' = '$_[uid]'");
            return true;
        }else{
            return false;
        }
    }

    //注销
    public function logout(){
        //用户注销后清楚session和数据库信息
        unset($_SESSION['uid']);
        if($this->uid){
            base::query("UPDATE 'members' SET 'status' = 0 WHERE 'uid' = '{$this->uid}'");
            $this->uid = 0;
        }
    }

    //注册
    public function register($user){
        //验证输入数据合法性
        $error = array();
        preg_match('/^([\.a-zA-z0-9_-])+@([a-zA-z0-9_-])+((\.[a-zA-z0-9_-]{2,3}){1,2})$/',$user['email'])||$error[] = '邮箱格式错误！';
        mysql_num_rows(base::query("SELECT uid FROM 'members' WHERE 'email' = '$user[email]'")) == 0 || $error [] = '该eamil地址已经存在';
    }
}