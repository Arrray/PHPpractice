<?php
	//�ж�Ŀ¼���Ƿ��ظ�
	//$f_fields���ֶ���
	//$tablename�����ݱ���
	//$f_str��Ҫ���ҵ��ֶ�
	function is_chk($f_fields,$tablename,$f_str){
		$conn = &ADONewConnection('mysql');						//����mysql����
		$conn->PConnect("localhost","root","root","db_online");	//����"db_online"���ݿ�
		$is_chk = true;
		$is_sqlstr = "select $f_fields from $tablename";
		$is_rst = $conn->execute($is_sqlstr);
		while(!$is_rst->EOF){
			if($f_str == $is_rst->fields[0]){
				$is_chk = false;
				break;
			}
			$is_rst->MoveNext();
		}
		return $is_chk;
	}
	//�ж��ļ���׺
	//$f_type�������ļ��ĺ�׺����
	//$f_upfiles���ϴ��ļ���
	function f_postfix($f_type,$f_upfiles){
		$is_pass = false;
		$tmp_upfiles = split("\.",$f_upfiles);
		$tmp_num = count($tmp_upfiles);
		for($num = 0; $num < count($f_type);$num++){
			if(strtolower($tmp_upfiles[$tmp_num - 1]) == $f_type[$num]){
				$is_pass = $f_type[$num];
			}
		}
		return $is_pass;
	}
?>