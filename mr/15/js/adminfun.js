function chkinputsysteminfo(form) {
	if (form.merid.value == '') {
		alert('�������̳�ID��');
		form.merid.focus();
		return false;
	}

	if (form.meracct.value == '') {
		alert('��������ҵ�˺ţ�');
		form.meracct.focus();
		return false;
	}

	if (form.bq.value == '') {
		alert('�������Ȩ��Ϣ��');
		form.bq.focus();
		return false;
	}

	if (form.address.value == '') {
		alert('�����빫˾��ַ��');
		form.address.focus();
		return false;
	}

	if (form.tel.value == '') {
		alert('��������ϵ�绰��');
		form.tel.focus();
		return false;
	}

	if (form.cz.value == '') {
		alert('�����봫����룡');
		form.cz.focus();
		return false;
	}

	if (form.email.value == '') {
		alert('������Email��ַ��');
		form.email.focus();
		return false;
	}

	if (form.qq.value == '') {
		alert('������QQ���룡');
		form.qq.focus();
		return false;
	}

	if (form.icp.value == '') {
		alert('������ICP�����ţ�');
		form.icp.focus();
		return false;
	}

	if (form.bookimgurl.value == '') {
		alert('������ͼ������ַ��');
		form.bookimgurl.focus();
		return false;
	}

	if (form.ggurl.value == '') {
		alert('���������ַ��');
		form.ggurl.focus();
		return false;
	}

	if (form.readurl.value == '') {
		alert('�������Զ������ļ���ַ��');
		form.readurl.focus();
		return false;
	}

	return true;

}

//
function chkChangePwd(form) {
	if (form.oldpwd.value == '') {
		alert('������ԭ���룡');
		form.oldpwd.focus();
		return false;
	}
	if (form.pwd1.value == '') {
		alert('�����������룡');
		form.pwd1.focus();
		return false;
	}
	if (form.pwd2.value == '') {
		alert('������ȷ�����룡');
		form.pwd2.focus();
		return false;
	}
	if (form.pwd1.value != form.pwd2.value) {
		alert('������ȷ�����벻ͬ��');
		form.pwd1.focus();
		return false;
	}
	if (form.pwd1.value.length < 6) {
		alert('���볤��Ӧ�ô���6λ��');
		form.pwd1.focus();
		return false;
	}

	return true;

}

//
function chkinputadmin(form) {
	if (form.anc.value == "") {
		alert("���������Ա���ƣ�");
		form.anc.focus();
		return (false);
	}
	if (form.pwd.value == "") {
		alert("�������¼���룡");
		form.pwd.focus();
		return (false);
	}
	if (form.xym.value == "") {
		alert("��������֤�룡");
		form.xym.select();
		return (false);
	}
	if (form.xym.value != form.xym1.value) {
		alert("��֤���������");
		form.xym.select();
		return (false);
	}

	return (true);
}

//
function chkInputBigtype(form) {
	if (form.typename.value == "") {
		alert("������ͼ��������ƣ�");
		form.typename.focus();
		return false;
	}
	return true;
}

//
function chkInputSmalltype(form) {
	if (form.typename.value == "") {
		alert("������ͼ��С�����ƣ�");
		form.typename.focus();
		return false;
	}

	if (form.bigtypeid.value == "") {
		alert("��ѡ���������࣡");
		form.bigtypeid.focus();
		return false;
	}
	
	return true;
}
//
function chkInputPub(form) {
	if (form.pubname.value == "") {
		alert("��������������ƣ�");
		form.pubname.focus();
		return false;
	}
	return true;
}
//

function chkInputBook(form)
{
	if (form.bookname.value == "") {
		alert("������ͼ�����ƣ�");
		form.bookname.focus();
		return false;
	}

	if (form.smalltypeid.value == "") {
		alert("��ѡ��ͼ�����");
		form.smalltypeid.focus();
		return false;
	}

	if (form.pubid.value == "") {
		alert("��ѡ����������");
		form.pubid.focus();
		return false;
	}	

	if (form.page.value == "") {
		alert("������ͼ��ҳ����");
		form.page.focus();
		return false;
	}	
	
	if(isNaN(form.page.value)){
		alert("ҳ��ֻ��Ϊ���֣�");
	    form.page.focus();
	    return false;
    }			
	if (form.zs.value == "") {
		alert("������ͼ��������");
		form.zs.focus();
		return false;
	}	
	
	if(isNaN(form.zs.value)){
		alert("����ֻ��Ϊ���֣�");
	    form.zs.focus();
	    return false;
    }
	
	if (form.isbn.value == "") {
		alert("������ͼ��ISBN�ţ�");
		form.isbn.focus();
		return false;
	}	
	
	if (form.bc.value == "") {
		alert("������ͼ���Σ�");
		form.bc.focus();
		return false;
	}	

	if (form.writer.value == "") {
		alert("���������ߣ�");
		form.writer.focus();
		return false;
	}

	if (form.pyear.value == "") {
		alert("��ѡ�������ݣ�");
		form.pyear.focus();
		return false;
	}
	
	if (form.pmonth.value == "") {
		alert("��ѡ������·ݣ�");
		form.pmonth.focus();
		return false;
	}
	
	if (form.oldprice.value == "") {
		alert("������ͼ��ԭ�ۣ�");
		form.oldprice.focus();
		return false;
	}	
	if(isNaN(form.oldprice.value)){
		alert("ԭ��ֻ��Ϊ���֣�");
	    form.oldprice.focus();
	    return false;
    }
	if (form.newprice.value == "") {
		alert("������ͼ���Ա�ۣ�");
		form.newprice.focus();
		return false;
	}	
	if(isNaN(form.newprice.value)){
		alert("��Ա��ֻ��Ϊ���֣�");
	    form.newprice.focus();
	    return false;
    }	
	
	if (form.bookcc.value == "") {
		alert("��ѡ��ͼ���Σ�");
		form.bookcc.focus();
		return false;
	}
	
	if (form.bookids.value == "") {
		alert("������ͼ�����ID�ţ�");
		form.bookids.focus();
		return false;
	}
	
	if (form.directory.value == "") {
		alert("������ͼ��Ŀ¼��");
		form.directory.focus();
		return false;
	}	
	
	if (form.about.value == "") {
		alert("������ͼ�����ݼ�飡");
		form.about.focus();
		return false;
	}		
	
	return true;
}


//
function chkinputsearchbook(form)
{
	if (form.bookname.value == "") {
		alert("�������ѯ�ؼ��֣�");
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
		alert("��ѡ���Զ���ͼ�飡");
		form.bookid.focus();
		return false;		
	}	
	
	if(form.filename.value=="")
	{
		alert("�������Զ��ļ�����");
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
		alert("���������⣡");
		form.title.focus();
		return false;		
	}	
	return true;	
}