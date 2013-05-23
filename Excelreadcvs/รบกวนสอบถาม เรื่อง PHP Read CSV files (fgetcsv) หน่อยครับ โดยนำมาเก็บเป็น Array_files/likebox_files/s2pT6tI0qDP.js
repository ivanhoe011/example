/*1347278126,173213983*/

if (window.CavalryLogger) { CavalryLogger.start_js(["ne+Ol"]); }

__d("IEPinnedSite",["Arbiter"],function(a,b,c,d,e,f){var g=b('Arbiter'),h={listenToNotifications:function(i){var j=window.external;if(j&&('msIsSiteMode' in j)&&j.msIsSiteMode()){var k={};j.msSiteModeClearIconOverlay();g.subscribe('jewel/count-updated',function(l,m){k[m.jewel]=m.count;var n=0;for(var o in k)n+=k[o];if(n>0){j.msSiteModeSetIconOverlay(i);}else j.msSiteModeClearIconOverlay();});}}};e.exports=h;});