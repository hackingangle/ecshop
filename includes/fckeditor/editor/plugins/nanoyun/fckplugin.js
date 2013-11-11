/**
 * nano云存储资源管理插件
 * @author service@nanoyun.com(www.nanoyun.com)
 * @version 1.0 2013-11-1
 */

//注册到插件
FCKCommands.RegisterCommand('nanoyun', 
	new FCKDialogCommand('nanoyun', FCKLang.dialogTitle, FCKPlugins.Items['nanoyun'].Path + "index.php", 600, 420));

//工具栏
var nanoyunToolBtn = new FCKToolbarButton('nanoyun', FCKLang.dialogTitle);
nanoyunToolBtn.IconPath = FCKPlugins.Items['nanoyun'].Path + 'images/logo.gif';//定义图标
FCKToolbarItems.RegisterItem('nanoyun', nanoyunToolBtn);//绑定到显示菜单