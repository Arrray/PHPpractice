function delete_video(x){
if(window.confirm('��ȷ��Ҫɾ������Ƶ��')==true){
	window.location.href='delete_video.php?video_id='+x;
}

}
function cancel_subscibe(x,x2){
 if(window.confirm('��ȷ��Ҫȡ���ö�����')==true){
	window.location.href='cancel_subscibe_ok.php?video_user='+x+'&name='+x2;
}

}

