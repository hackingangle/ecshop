/**
 * nano云存储资源管理插件
 * @author service@nanoyun.com(www.nanoyun.com)
 * @version 1.0 2013-11-1
 */

//注册到插件
FCKCommands.RegisterCommand('nanoyun', 
	new FCKDialogCommand('nanoyun', FCKLang.dialogTitle, FCKPlugins.Items['nanoyun'].Path + "index.php", 500, 420));

//工具栏
var nanoyunToolBtn = new FCKToolbarButton('nanoyun', FCKLang.dialogTitle);
nanoyunToolBtn.IconPath = FCKPlugins.Items['nanoyun'].Path + 'images/toolbutton.jpg';//定义图标
FCKToolbarItems.RegisterItem('nanoyun', nanoyunToolBtn);//绑定到显示菜单

//显示定义
// var nanoyunConfigPanel = new Object();

// nanoyunConfigPanel.add = function(name){
// 	var configSpan = FCK.CreateElement('nanoyunconfig');
// 	this.setup(configSpan, name);
// }

// nanoyunConfigPanel.setup = function(span, name){
// 	span.innerHtml = '[[ ' + name + ' ]]';
// 	span.style.backgroundColor = '#ffff00';
// 	span.style.color = '#000000';
// 	if(FCKBrowserInfo.IsGecko){
// 		span.style.cursor = 'default';
// 	}
// 	span._nanoyunconfig = name;
// 	span.contentEditable = false;

// 	span.onresizestart = function(){
// 		FCk.EditorWindow.event.returnValue = false;
// 		return false;
// 	}
// }