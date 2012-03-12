// Created by iWeb 2.0.4 local-build-20090822

setTransparentGifURL('Media/transparent.gif');function applyEffects()
{var registry=IWCreateEffectRegistry();registry.registerEffects({shadow_0:new IWShadow({blurRadius:10,offset:new IWPoint(4.2426,4.2426),color:'#ffffff',opacity:0.750000}),shadow_1:new IWShadow({blurRadius:10,offset:new IWPoint(0.2094,5.9963),color:'#ffffff',opacity:0.750000}),reflection_0:new IWReflection({opacity:0.50,offset:1.00}),reflection_1:new IWReflection({opacity:0.50,offset:1.00}),shadow_2:new IWShadow({blurRadius:10,offset:new IWPoint(0.2094,5.9963),color:'#ffffff',opacity:0.750000})});registry.applyEffects();}
function hostedOnDM()
{return false;}
function onPageLoad()
{loadMozillaCSS('home_files/homeMoz.css')
adjustLineHeightIfTooBig('id1');adjustFontSizeIfTooBig('id1');adjustLineHeightIfTooBig('id2');adjustFontSizeIfTooBig('id2');adjustLineHeightIfTooBig('id3');adjustFontSizeIfTooBig('id3');fixupAllIEPNGBGs();fixAllIEPNGs('Media/transparent.gif');applyEffects()}
