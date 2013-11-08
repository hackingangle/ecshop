var dialog = window.parent ;
var oEditor = dialog.InnerDialogLoaded() ;
var FCK = oEditor.FCK ;
var FCKLang = oEditor.FCKLang ;
var FCKConfig = oEditor.FCKConfig ;
var FCKDebug = oEditor.FCKDebug ;
var FCKTools = oEditor.FCKTools ;

//创建在dialog中显示的tab
dialog.AddTab('Info', "上传") ;
dialog.AddTab('Config', "配置");
dialog.AddTab('Upload', "上传参考案例") ;

//切换动作,回调
function OnDialogTabChange(tabCode){
	ShowE('divInfo', (tabCode == 'Info'));
	ShowE('divUpload', (tabCode == 'Upload'));
	ShowE('divConfig', (tabCode == 'Config'));
}

//加载预定动作
window.onload = function(){
	//应用配置的处理url
	GetE('nanoyunConfig').action = FCKConfig.BasePath + 'plugins/nanoyun/php/editconfig.php';
}
