window.googletag = window.googletag || {};
window.googletag.cmd = window.googletag.cmd || [];
(function (W, D, N) {
W[N]=W[N]||{};W[N].cmd=W[N].cmd||[];W[N].cmd2=W[N].cmd2||[];
function getDbg(){var dbg=0,m;try{m = W.location.href.match(/pbjs_debug=(\S*)/) || (D.cookie+';').match(/pbjs_debug=(\S*)\;/);dbg=m && m[1] && 'true'===(m[1].split('&')[0]||'')}catch(e){}dbg=dbg||0;D.cookie='pbjs_debug='+dbg+'; path=/; secure';return dbg}
W.G_options=W.G_options||{};
W.G_options.debug=getDbg();
var G_debug=G_options.debug;
function loadScript(url){var o='script',s=document,a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=url;m.parentNode.insertBefore(a,m);};



if(W[N]['affmp2_oto.com']){return}W[N]['affmp2_oto.com']=1;
loadScript('https://cdn4-hbs.affinitymatrix.com/hvrlib/oto.com/1688123882/v2.js');
W[N].cmd.push(function(){
if(!W[N].chkDomain('oto.com')){return}
var cfg = {"aff":{"def":{"maxCall":1,"minVisblePerc":50,"delaySec":30,"kw":{"domain":"oto.com"},"gads":{"enabled":true,"rmslot":0,"cmpsz":{"w_max_perc":2,"h_max_perc":2,"szMobileOnly":["320x50"]},"vspace":"middle","allowWoSlot":1},"HBOnly":{"enabled":true,"minCpm":0.01,"version":2}},"aus":[{"au":"/42115163,127396746/IP_oto.com_ALL_Multisize_RON_Both_HVR","sz":["120x600","160x600","300x250","300x600","320x100","320x50","336x280","728x90","970x250","970x90"],"def":1},{"au":"/21930596546,127396746/IP_oto.com_ALL_Multisize_RON_Both_HVR_MC","sz":["120x600","160x600","300x250","300x600","320x100","320x50","336x280","728x90","970x250","970x90"],"def":1}],"pbjs":{"enabled":true,"nm":"affpbjs","hbsite":"hvr_man_oto.com","cdnEnabled":true}},"pub":{"def":{"maxCall":1,"delaySec":30,"minVisblePerc":50,"reprf":44,"kw":{"domain":"oto.com"},"ajaxpage":0,"excludePatrn":{"enable":1,"patrn":"NO_REFRESH"},"section":{"enable":0,"blacklist":[],"whitelist":[]},"ignireImpForPubAu":1,"dfpids":{"enable":1,"incIds":[],"excIds":{"cmpId":[3065224309],"litId":[5793375978,5885712454,6085582015,6086438588]}},"selfRefresh":{"enable":true,"arPrtn":["SELF_REFRESH"],"refConfFrmAff":true,"arAu":[],"dfpids":{"incIds":{"advId":[],"cmpId":[],"litId":[]}}}},"rule":[{"tp":"exc","au":["*"],"sz":["1x1"],"lbl":"Ignr 1x1"},{"tp":"inc","au":["*"],"sz":["120x600","160x600","300x250","300x600","320x100","320x50","336x280","728x90","970x250","970x90"],"lbl":"All Au"}],"adspots":[]},"geo":{"enable":false,"srvdrct":true,"cc":["*"]}};
if('function' === typeof W[N].hvrCustCfg ){
    cfg = W[N].hvrCustCfg( cfg );
    if( !cfg ){return}
}
if(cfg.aff.pbjs && cfg.aff.pbjs.enabled){
    var hbsite = cfg.aff.pbjs.hbsite || ('hvr_' + cfg.aff.def.kw.domain),d=new Date(),
    hbInvKey='affhb2_affpbjs_' + cfg.aff.pbjs.hbsite.replace('hvr_man_','hvr_'),
    hostUrl = cfg.aff.pbjs.cdnEnabled ? 'cdn4-hbs.affinitymatrix.com' : 'hbs.ph.affinity.com',
    hbLibUrl = 'https://' + hostUrl +'/v5/' + hbsite + '/affhb.data.js.php?t=' + d.getDate() + d.getMonth() + d.getHours(),    
    hbLibLoadDly = 0;
    if(!W[N][hbInvKey]){
        if (hbLibLoadDly > 0) {
            setTimeout(function(){
                if(!W[N][hbInvKey]){
                    W[N].U.loadScript(hbLibUrl);
                }
            }, 0 * 1000);
        } else {
            W[N].U.loadScript(hbLibUrl);
        }
    }
}
if( cfg.aff.def.dfpenblsrv){W[N].U.loadScript("https://securepubads.g.doubleclick.net/tag/js/gpt.js");}

    googletag.cmd.push(function() {
        W[N].AffRefresh(cfg)
    });
});
})(window, document, '__afflib');