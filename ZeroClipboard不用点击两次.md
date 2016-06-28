##如果使用bootstrap框架
	
	使用初始化调用即可
	window.operateEvents = {
		'mouseover .finger':function(e){
			
			copyToClipboard();
			copyToClipboards();
		},

	function copyToClipboard(){

		var clip = new ZeroClipboard($('.wechat'), {
			moviePath: "html/js/ZeroClipboard/ZeroClipboard.swf"
		} );

		// 复制内容到剪贴板成功后的操作

		clip.on( 'complete', function(client, args) {

			alert("复制成功，复制内容为："+ args.text);
		} );
	}


	function copyToClipboards(){
		var clip2= new ZeroClipboard($('.showindex'), {
			moviePath: "html/js/ZeroClipboard/ZeroClipboard2.swf"
		} );

		// 复制内容到剪贴板成功后的操作

		clip2.on( 'complete', function(client, args) {

			alert("复制成功，复制内容为："+ args.text);
		} );
	}
	