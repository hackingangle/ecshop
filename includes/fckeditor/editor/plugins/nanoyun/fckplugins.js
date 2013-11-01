/**
 * nano云存储资源管理插件
 * @author service@nanoyun.com(www.nanoyun.com)
 * @version 1.0 2013-11-1
 */

//注册
FCKCommands.RegisterCommand('nanoyun', 
	new FCKDialogCommand('nanoyun', FCKLang.title, FCKPlugins.Items['nanoyun'].Path+ "index.php", 500, 420));

//定义工具栏
var nanoyunToolBtn = new FCKToolbarButton('nanoyun', FCKLang.title);
nanoyunToolBtn.IconPath = FCKPlugins.Items['nanoyun'].Path + 'images/toolbutton.jpg';//菜单按钮

//binds to toolbar button
FCKToolbarItems.RegisterItem('nanoyun', nanoyunToolBtn);
