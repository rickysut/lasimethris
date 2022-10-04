/**
 *	This script should be placed right after the body tag for fast execution 
 *	Note: the script is written in pure javascript and does not depend on thirdparty library
 **/
'use strict';

var classHolder = document.getElementsByTagName("BODY")[0],
	/** 
	 * Load from localstorage
	 **/

	//themeSettings =  JSON.parse('{"themeOptions":"mod-bg-1 mod-nav-link header-function-fixed  mod-skin-light","themeURL":"' + window.location.origin +'/css/smartadmin/themes/cust-theme-3.css"}'),
	themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
	{},
	themeURL = themeSettings.themeURL || '',
	themeOptions = themeSettings.themeOptions || '';
	console.log(themeURL);
/** 
 * Load theme options
 **/
if (themeSettings.themeOptions)
{
	classHolder.className = themeSettings.themeOptions;
	console.log("%c✔ Theme settings loaded", "color: #148f32");
}
else
{
	console.log("%c✔ Heads up! Theme settings is empty or does not exist, loading default settings...", "color: #ed1c24");
}
if (themeSettings.themeURL && !document.getElementById('mytheme'))
{
	var cssfile = document.createElement('link');
	cssfile.id = 'mytheme';
	cssfile.rel = 'stylesheet';
	cssfile.href = themeURL;
	document.getElementsByTagName('head')[0].appendChild(cssfile);

}
else if (themeSettings.themeURL && document.getElementById('mytheme'))
{
	document.getElementById('mytheme').href = themeSettings.themeURL;
}
/** 
 * Save to localstorage 
 **/
var saveSettings = function()
{
	themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
	{
		return /^(nav|header|footer|mod|display)-/i.test(item);
	}).join(' ');
	if (document.getElementById('mytheme'))
	{
		themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
	};
	localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
}
/** 
 * Reset settings
 **/
var resetSettings = function()
{
	localStorage.setItem("themeSettings", "");
}