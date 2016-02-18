<?php
class IndexAction extends Action
{
    /**
    +----------------------------------------------------------
    * 默认操作
    +----------------------------------------------------------
    */
    public function index()
    {
        $this->display();
    }
	function adminForm(){
		if(Session::get('PHP')=="phper_ym@163.com"){
			$data['title']=$_POST['text'];
			$data['content']=$_POST['textarea'];
			$data['date_time']=date("Y-m-d");
			$data['update_time']=date("Y-m-d");
			$new=M('news');
			$pc=$new->data($data)->add();
			if($pc){
				$this->assign('hint','插入数据成功');
				$this->assign('url','__URL__/adminIndex');
				$this->display('information');
			}else{
				$this->assign('hint','插入数据失败');
				$this->assign('url','__URL__/adminIndex');
				$this->display('information');
			}
		}else{
			$this->assign('hint','您没有操作权限');
			$this->assign('url','__URL__/admin');
			$this->display('information');
		}
	}
    public function admin(){
    	$this->display();
    }
    public function adminManager(){
    	$username=$_POST['text'];
    	$userpwd=$_POST['pwd'];
		Session::set('admin', $username);
    	define(PHP, '_php');
     	$userpwd=md5($userpwd);
    	$user=M('admin');
    	$user=$user->field('user,pwd')->select();
    	if($username==$user[0]['user']&&$userpwd==$user[0]['pwd']){
    		$this->assign('hint','登录成功');
    		$this->assign('url','__URL__/adminIndex');
    		Session::set('PHP', 'phper_ym@163.com');
    		$this->display('information');
    	}else{
    		$this->assign('hint','登录失败');
    		$this->assign('url','__URL__/admin');
    		$this->display('information');
    	}
    }
  	public function news()
    {
    	load('extend');
    	import("ORG.Util.Page");
    	$new = D("News");
    	$data=$new->select();
		$count=$new->count();
		$Page=new Page($count,3);
		$show= $Page->show();
		$list = $new->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
		$name=$this->assign('list',$list);
		$this->assign('page',$show); 
    	$this->display();
    }
    public function lord()
    {
    	$id=$_GET['id'];
    	$userLord=M('News');
    	$list=$userLord->where('id='.$id)->select();
    	$this->assign('list',$list);
    	$this->display('lord');
    }
    public function develop()
    {
    	load('extend');
    	$Java=D('book');
    	$Java=$Java->field('id,new_book')->where('tid=1')->select();
    	$PHP=D('book');
    	$PHP=$PHP->field('id,new_book')->where('tid=3')->select();
   		$C=D('book');
   		$C=$C->field('id,new_book')->where('tid=2')->select();
   		$content=D('news');
    	$content=$content->field('id,content')->order('id desc')->limit(9)->select();
   		$this->assign('content',$content);
    	$this->assign('Java',$Java);
    	$this->assign('C',$C);
    	$this->assign('PHP',$PHP);
    	$this->display();
    }
    public function dev(){
    	$str=$_GET['id'];
    	$J=M('book');
    	$list=$J->query("select * from think_book where id=$str");
    	$this->assign('list',$list);
    	$this->display('dev');
    }
    public function adminUpdate(){
    	$data['title']=$_POST['title'];
    	$data['content']=$_POST['content'];
    	$data['date_time']=$_POST['time'];
    	$id=$_POST['head'];
    	$data['update_time']=date('Y-m-d');
    	$pc=M('news');
    	$pc=$pc->where('id='.$id)->data($data)->save();
    	if($pc!=false){
    		$this->assign('hint','更新成功');
    		$this->assign('url','__URL__/adminIndex');
    		$this->display('information');
    	}else{
    		$this->assign('hint','更新失败');
    		$this->assign('url','__URL__/adminIndex');
    		$this->display('information');
    	}
    }
    public function viewUpdateNews(){
    	$pc=new M('news');
    	$pc=$pc->select();
    	$this->assign('pc',$pc);
    	$this->display('adminIndex');
    }
   public function framework(){
   		load('extend');
    	import("ORG.Util.Page");
    	if(Session::get('PHP')=="phper_ym@163.com"){
    		$string=$_GET['id'];
    		switch($string){   	
    			case "updateNews";
    			$this->assign('language_2',"block");
    			$this->assign('language_1',"none");
					$this->assign('title'," 操作代码式更新新闻");
    			$this->display('adminIndex');
    			break;
    			case "viewUpdateNews";					//比对超级链接传递的值
					$new = D("News");						//模型实例化
    					$data=$new->select();					//定义查询语句
						$count=$new->count();					//统计记录数
						$Page=new Page($count,14);				//实例化分页类
						$show= $Page->show();					//定义分页查询方法
						$list = $new->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
   						$this->assign('pc',$list);					//将查询结果赋给模板变量
    					$this->assign('page',$show); 				//定义分页超级链接
   						$this->assign('language_3',"block");		//设置display样式的值
    					$this->assign('language_1',"none");		//定义display样式的值
						$this->assign('title'," 操作界面式更新新闻");
    					$this->display('adminIndex');				//指定模板页
				break;
    			case "addBook";
				 
    			$this->assign('language_5',"block");
    			$this->assign('language_1',"none");
				$this->assign('title',"单条增加新书");
    			$this->display('adminIndex');
    			break;

    			case "updateNewbook"; 
    			$this->assign('language_6',"block");
    			$this->assign('language_1',"none");
				$this->assign('title',"操作代码式更新新书");
    			$this->display('adminIndex');
    			break;
    			case "viewUpdateNewbook";
    			$new = D("book");
    			$data=$new->select();
				$count=$new->count();
				$Page=new Page($count,14);
				$show= $Page->show();
				$list = $new->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
    			$this->assign('pc',$list);
    			$this->assign('page',$show); 
    			$this->assign('language_7',"block");
    			$this->assign('language_1',"none");
				$this->assign('title',"操作界面式更新新书");
    			$this->display('adminIndex');
    			break;
    			case "back";
    			$pc=M();
    			$pc=$pc->query('show tables');
    			$this->assign("type","block");
    			$this->assign('list',$pc);
    			$this->display('adminIndex');
    			break;
    			case "cancel";
    			$this->assign("type","none");
    			$this->display('adminIndex');
    			break;
				default: 
    			$this->assign('language_1',"block");
				$this->assign('title',"单条增加新闻");
    			$this->display('adminIndex');
 
    		}
    	}else{
    		$this->assign('hint','您没有操作权限');
    		$this->assign('url','__URL__/admin');
    		$this->display('information');
    	}
    	
    }
    public function delete(){
    	$string=$_GET['newIdDelet'];
    	$pc=M('news');
    	$pc=$pc->where('id='.$string)->delete();
    	if($pc!=false){
    		$this->assign('hint','删除成功');
    		$this->assign('url','__URL__/adminIndex');
    		$this->display('information');
    	}else{
    		$this->assign('hint','删除失败');
    		$this->assign('url','__URL__/adminIndex');
    		$this->display('information');
    	}
    }
    public function inter(){
    	$p=M('news');
    	$p=$p->select();
    	$this->assign('p',$p);
    	$this->display('adminIndex');
    }
    public function action(){
    	$book=M('book');
    	$new=M('news');
    	$str=$_POST['text'];
    	$book_look=$book->query("select * from think_book where new_book like '%".$str."%'");
    	$news_look=$book->query("select * from think_news where title like '%".$str."%'");
    	if(count($book_look)==0 && count($news_look)==0){
    		$this->assign('hint','未得到查询结果');
    		$this->assign('url','__URL__');
    		$this->display('information');
    	}else{
    		$this->assign('book',$book_look);
    		$this->assign('news',$news_look);
    		$this->display('actionBook');
    	}
    }
    public function update(){
    	$string=$_GET['newIdUpdate'];
    	$pc=M('news');
    	$pc=$pc->where('id='.$string)->select();
    	$this->assign('head',$pc[0]['id']);
    	$this->assign('title',$pc[0]['title']);
   		$this->assign('head',$string);
    	$this->assign('content',$pc[0]['content']);
    	$this->assign('time',$pc[0]['date_time']);
    	$this->assign('language_4','block');
    	$this->assign('language_3','none');
    	$this->assign('language_1',"none");
    	$this->display('adminIndex');
    }
    public function adminBookAdd(){
    	$data['tid']=$_POST['select'];
    	$data['new_book']=$_POST['text'];
    	$data['userSay']=$_POST['textarea'];
    	$pc=M('book');
    	$pc=$pc->data($data)->add();
    	if($pc!=false){
    		$this->assign('hint','添加新书成功');
    		$this->assign('url','__URL__/adminIndex');
    		$this->display('information');
    	}else{
    		$this->assign('hint','添加新书失败');
    		$this->assign('url','__URL__/adminIndex');
    		$this->display('information');
    	}
    }
    public function adminUpdateFormBookSQL(){
    	$SQL=stripcslashes($_POST['textarea']);
    	$pc=M('book');
    	$pc=$pc->query($SQL);
    	if(is_array($pc)){
    		$this->assign('hint','更新新书成功');
    		$this->assign('url','__URL__/adminIndex');
    		$this->display('information');
    	}else{
    		$this->assign('hint','更新新书失败');
    		$this->assign('url','__URL__/adminIndex');
    		$this->display('information');
    	}
    }
    public function adminUpdateFormSQL(){
    	$SQL= stripcslashes($_POST['textarea']);
    	$pc=M('news');
    	$pc=$pc->query($SQL);
    	if(is_array($pc)){
    		$this->assign('hint','更新新闻成功');
    		$this->assign('url','__URL__/adminIndex');
    		$this->display('information');
    	}else{
    		$this->assign('hint','更新新闻失败');
    		$this->assign('url','__URL__/adminIndex');
    		$this->display('information');
    	}
    }
   public function updateBook(){
    	$string=$_GET['viewNewIdUpdate'];
    	$pc=M('book');
    	$pc=$pc->where('id='.$string)->select();
    	if($pc[0]['tid']==1){
    		$string="Java";
    	}else{
    		if($pc[0]['tid']==2){
    			$string="C#";
    		}else{
    			$string="PHP";
    		}
    	}
    	$this->assign('title',$pc[0]['new_book']);
    	$this->assign('head',$pc[0]['id']);
    	$this->assign('content',$pc[0]['userSay']);
    	$this->assign('type',$string);
    	$this->assign('language_8','block');
    	$this->assign('language_7','none');
    	$this->assign('language_1',"none");
    	$this->display('adminIndex');
    }
    public function adminUpdateBook(){
    	$data['new_book']=$_POST['title'];
    	$data['userSay']=$_POST['textarea'];
   		if($_POST['type']=="Java"){
    		$string="1";
    	}else{
    		if($_POST['type']=="C#"){
    			$string="2";
    		}else{
    			$string="3";
    		}
    	}
    	$data['tid']=(integer)$string;
    	$id=$_POST['name'];    	
    	$pc=M('book');
    	$pc=$pc->where('id='.$id)->data($data)->save();
    	if($pc!==false){
    		$this->assign('hint','更新成功');
    		$this->assign('url','__URL__/adminIndex');
    		$this->assign('language_1',"block");
    		$this->display('information');
    	}else{
    		$this->assign('hint','更新失败');
    		$this->assign('url','__URL__/adminIndex');
    		$this->assign('language_1',"block");
    		$this->display('information');
    	}
    }
    public function deleteBook(){
    	$string=$_GET['viewNewIdDelet'];
    	$pc=M('book');
    	$pc=$pc->where('id='.$string)->delete();
    	if($pc!=false){
    		$this->assign('hint','删除成功');
    		$this->assign('url','__URL__/adminIndex');
    		$this->display('information');
    	}else{
    		$this->assign('hint','删除失败');
    		$this->assign('url','__URL__/adminIndex');
    		$this->display('information');
    	}
    }
    public function change(){
    	if(Session::get('PHP')=="phper_ym@163.com"){
    		$string=$_POST['pwd'];
    		$stringg=$_POST['pwdd'];
    		if($string==$stringg){
    			$pc=M('admin');
    			define(PHP, '_php');
    			$pc=$pc->where('id');
  				$data['pwd']=md5($string.PHP);
    			$pc=$pc->where('id=1')->data($data)->save();
    			$this->assign('hint','更改密码成功');
    			$this->assign('url','__URL__/adminIndex');
    			$this->assign('language_1',"block");
    			$this->display('information');
    		}else{
    			$this->assign('hint','两次密码输入不一致');
    			$this->assign('url','__URL__/adminIndex');
    			$this->assign('language_1',"block");
    			$this->display('information');
    		}
    	}else{
    		$this->assign('hint','您没有操作权限');
    		$this->assign('url','__URL__/admin');
    		$this->display('information');
    	}
    }
    public function clear(){
    	Session::clear();
    	Session::destroy();
    	$this->display('index');
    }
    public function show(){
    	$string=$_GET['image'];
    	$pc=M('book');
    	$pc=$pc->where('tid='.$string)->order('id desc')->limit(1)->select();
    	$this->assign('list',$pc);
    	$this->display('dev');
    }
    /**
    +----------------------------------------------------------
    * 探针模式
    +----------------------------------------------------------
    */
    public function checkEnv()
    {
        load('pointer',THINK_PATH.'/Tpl/Autoindex');//载入探针函数
        $env_table = check_env();//根据当前函数获取当前环境
        echo $env_table;
    }

}
?>