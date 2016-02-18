function chkinputsysteminfo(form) {
	if (form.merid.value == '') {
		alert('请输入商城ID！');
		form.merid.focus();
		return false;
	}

	if (form.meracct.value == '') {
		alert('请输入企业账号！');
		form.meracct.focus();
		return false;
	}

	if (form.bq.value == '') {
		alert('请输入版权信息！');
		form.bq.focus();
		return false;
	}

	if (form.address.value == '') {
		alert('请输入公司地址！');
		form.address.focus();
		return false;
	}

	if (form.tel.value == '') {
		alert('请输入联系电话！');
		form.tel.focus();
		return false;
	}

	if (form.cz.value == '') {
		alert('请输入传真号码！');
		form.cz.focus();
		return false;
	}

	if (form.email.value == '') {
		alert('请输入Email地址！');
		form.email.focus();
		return false;
	}

	if (form.qq.value == '') {
		alert('请输入QQ号码！');
		form.qq.focus();
		return false;
	}

	if (form.icp.value == '') {
		alert('请输入ICP备案号！');
		form.icp.focus();
		return false;
	}

	if (form.bookimgurl.value == '') {
		alert('请输入图书封面地址！');
		form.bookimgurl.focus();
		return false;
	}

	if (form.ggurl.value == '') {
		alert('请输入广告地址！');
		form.ggurl.focus();
		return false;
	}

	if (form.readurl.value == '') {
		alert('请输入试读下载文件地址！');
		form.readurl.focus();
		return false;
	}

	return true;

}

//
function chkChangePwd(form) {
	if (form.oldpwd.value == '') {
		alert('请输入原密码！');
		form.oldpwd.focus();
		return false;
	}
	if (form.pwd1.value == '') {
		alert('请输入新密码！');
		form.pwd1.focus();
		return false;
	}
	if (form.pwd2.value == '') {
		alert('请输入确认密码！');
		form.pwd2.focus();
		return false;
	}
	if (form.pwd1.value != form.pwd2.value) {
		alert('密码与确认密码不同！');
		form.pwd1.focus();
		return false;
	}
	if (form.pwd1.value.length < 6) {
		alert('密码长度应该大于6位！');
		form.pwd1.focus();
		return false;
	}

	return true;

}

//
function chkinputadmin(form) {
	if (form.anc.value == "") {
		alert("请输入管理员名称！");
		form.anc.focus();
		return (false);
	}
	if (form.pwd.value == "") {
		alert("请输入登录密码！");
		form.pwd.focus();
		return (false);
	}
	if (form.xym.value == "") {
		alert("请输入验证码！");
		form.xym.select();
		return (false);
	}
	if (form.xym.value != form.xym1.value) {
		alert("验证码输入错误！");
		form.xym.select();
		return (false);
	}

	return (true);
}

//
function chkInputBigtype(form) {
	if (form.typename.value == "") {
		alert("请输入图书大类名称！");
		form.typename.focus();
		return false;
	}
	return true;
}

//
function chkInputSmalltype(form) {
	if (form.typename.value == "") {
		alert("请输入图书小类名称！");
		form.typename.focus();
		return false;
	}

	if (form.bigtypeid.value == "") {
		alert("请选择所属大类！");
		form.bigtypeid.focus();
		return false;
	}
	
	return true;
}
//
function chkInputPub(form) {
	if (form.pubname.value == "") {
		alert("请输入出版社名称！");
		form.pubname.focus();
		return false;
	}
	return true;
}
//

function chkInputBook(form)
{
	if (form.bookname.value == "") {
		alert("请输入图书名称！");
		form.bookname.focus();
		return false;
	}

	if (form.smalltypeid.value == "") {
		alert("请选择图书类别！");
		form.smalltypeid.focus();
		return false;
	}

	if (form.pubid.value == "") {
		alert("请选择出版社类别！");
		form.pubid.focus();
		return false;
	}	

	if (form.page.value == "") {
		alert("请输入图书页数！");
		form.page.focus();
		return false;
	}	
	
	if(isNaN(form.page.value)){
		alert("页数只能为数字！");
	    form.page.focus();
	    return false;
    }			
	if (form.zs.value == "") {
		alert("请输入图书字数！");
		form.zs.focus();
		return false;
	}	
	
	if(isNaN(form.zs.value)){
		alert("字数只能为数字！");
	    form.zs.focus();
	    return false;
    }
	
	if (form.isbn.value == "") {
		alert("请输入图书ISBN号！");
		form.isbn.focus();
		return false;
	}	
	
	if (form.bc.value == "") {
		alert("请输入图书版次！");
		form.bc.focus();
		return false;
	}	

	if (form.writer.value == "") {
		alert("请输入作者！");
		form.writer.focus();
		return false;
	}

	if (form.pyear.value == "") {
		alert("请选择出版年份！");
		form.pyear.focus();
		return false;
	}
	
	if (form.pmonth.value == "") {
		alert("请选择出版月份！");
		form.pmonth.focus();
		return false;
	}
	
	if (form.oldprice.value == "") {
		alert("请输入图书原价！");
		form.oldprice.focus();
		return false;
	}	
	if(isNaN(form.oldprice.value)){
		alert("原价只能为数字！");
	    form.oldprice.focus();
	    return false;
    }
	if (form.newprice.value == "") {
		alert("请输入图书会员价！");
		form.newprice.focus();
		return false;
	}	
	if(isNaN(form.newprice.value)){
		alert("会员价只能为数字！");
	    form.newprice.focus();
	    return false;
    }	
	
	if (form.bookcc.value == "") {
		alert("请选择图书层次！");
		form.bookcc.focus();
		return false;
	}
	
	if (form.bookids.value == "") {
		alert("请输入图书组合ID号！");
		form.bookids.focus();
		return false;
	}
	
	if (form.directory.value == "") {
		alert("请输入图书目录！");
		form.directory.focus();
		return false;
	}	
	
	if (form.about.value == "") {
		alert("请输入图书内容简介！");
		form.about.focus();
		return false;
	}		
	
	return true;
}


//
function chkinputsearchbook(form)
{
	if (form.bookname.value == "") {
		alert("请输入查询关键字！");
		form.bookname.focus();
		return false;
	}		
	
	return true;
}

//
function chkInputRead(form)
{
	if(form.bookid.value=="")
	{
		alert("请选择试读的图书！");
		form.bookid.focus();
		return false;		
	}	
	
	if(form.filename.value=="")
	{
		alert("请输入试读文件名！");
		form.filename.focus();
		return false;		
	}	
	return true;
}

//
function chkInputCommon(form)
{
	if(form.title.value=="")
	{
		alert("请输入主题！");
		form.title.focus();
		return false;		
	}	
	return true;	
}