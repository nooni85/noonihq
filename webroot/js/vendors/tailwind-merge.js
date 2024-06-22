(()=>{var zr=Object.defineProperty;var cr=(r,e)=>{for(var t in e)zr(r,t,{get:e[t],enumerable:!0})};var $={};cr($,{createTailwindMerge:()=>S,extendTailwindMerge:()=>kr,fromTheme:()=>d,getDefaultConfig:()=>T,join:()=>Jr,mergeConfigs:()=>O,twJoin:()=>E,twMerge:()=>Sr,validators:()=>rr});function E(){for(var r=0,e,t,o="";r<arguments.length;)(e=arguments[r++])&&(t=ur(e))&&(o&&(o+=" "),o+=t);return o}function ur(r){if(typeof r=="string")return r;for(var e,t="",o=0;o<r.length;o++)r[o]&&(e=ur(r[o]))&&(t&&(t+=" "),t+=e);return t}var H="-";function br(r){var e=Ir(r),t=r.conflictingClassGroups,o=r.conflictingClassGroupModifiers,a=o===void 0?{}:o;function s(i){var c=i.split(H);return c[0]===""&&c.length!==1&&c.shift(),gr(c,e)||Gr(i)}function n(i,c){var u=t[i]||[];return c&&a[i]?[].concat(u,a[i]):u}return{getClassGroupId:s,getConflictingClassGroupIds:n}}function gr(r,e){if(r.length===0)return e.classGroupId;var t=r[0],o=e.nextPart.get(t),a=o?gr(r.slice(1),o):void 0;if(a)return a;if(e.validators.length!==0){var s=r.join(H);return e.validators.find(function(n){var i=n.validator;return i(s)})?.classGroupId}}var pr=/^\[(.+)\]$/;function Gr(r){if(pr.test(r)){var e=pr.exec(r)[1],t=e?.substring(0,e.indexOf(":"));if(t)return"arbitrary.."+t}}function Ir(r){var e=r.theme,t=r.prefix,o={nextPart:new Map,validators:[]},a=Tr(Object.entries(r.classGroups),t);return a.forEach(function(s){var n=s[0],i=s[1];X(i,o,n,e)}),o}function X(r,e,t,o){r.forEach(function(a){if(typeof a=="string"){var s=a===""?e:fr(e,a);s.classGroupId=t;return}if(typeof a=="function"){if(Pr(a)){X(a(o),e,t,o);return}e.validators.push({validator:a,classGroupId:t});return}Object.entries(a).forEach(function(n){var i=n[0],c=n[1];X(c,fr(e,i),t,o)})})}function fr(r,e){var t=r;return e.split(H).forEach(function(o){t.nextPart.has(o)||t.nextPart.set(o,{nextPart:new Map,validators:[]}),t=t.nextPart.get(o)}),t}function Pr(r){return r.isThemeGetter}function Tr(r,e){return e?r.map(function(t){var o=t[0],a=t[1],s=a.map(function(n){return typeof n=="string"?e+n:typeof n=="object"?Object.fromEntries(Object.entries(n).map(function(i){var c=i[0],u=i[1];return[e+c,u]})):n});return[o,s]}):r}function mr(r){if(r<1)return{get:function(){},set:function(){}};var e=0,t=new Map,o=new Map;function a(s,n){t.set(s,n),e++,e>r&&(e=0,o=t,t=new Map)}return{get:function(n){var i=t.get(n);if(i!==void 0)return i;if((i=o.get(n))!==void 0)return a(n,i),i},set:function(n,i){t.has(n)?t.set(n,i):a(n,i)}}}var Q="!";function vr(r){var e=r.separator||":",t=e.length===1,o=e[0],a=e.length;return function(n){for(var i=[],c=0,u=0,b,f=0;f<n.length;f++){var g=n[f];if(c===0){if(g===o&&(t||n.slice(f,f+a)===e)){i.push(n.slice(u,f)),u=f+a;continue}if(g==="/"){b=f;continue}}g==="["?c++:g==="]"&&c--}var y=i.length===0?n:n.substring(u),x=y.startsWith(Q),m=x?y.substring(1):y,w=b&&b>u?b-u:void 0;return{modifiers:i,hasImportantModifier:x,baseClassName:m,maybePostfixModifierPosition:w}}}function hr(r){if(r.length<=1)return r;var e=[],t=[];return r.forEach(function(o){var a=o[0]==="[";a?(e.push.apply(e,t.sort().concat([o])),t=[]):t.push(o)}),e.push.apply(e,t.sort()),e}function yr(r){return{cache:mr(r.cacheSize),splitModifiers:vr(r),...br(r)}}var Rr=/\s+/;function xr(r,e){var t=e.splitModifiers,o=e.getClassGroupId,a=e.getConflictingClassGroupIds,s=new Set;return r.trim().split(Rr).map(function(n){var i=t(n),c=i.modifiers,u=i.hasImportantModifier,b=i.baseClassName,f=i.maybePostfixModifierPosition,g=o(f?b.substring(0,f):b),y=!!f;if(!g){if(!f)return{isTailwindClass:!1,originalClassName:n};if(g=o(b),!g)return{isTailwindClass:!1,originalClassName:n};y=!1}var x=hr(c).join(":"),m=u?x+Q:x;return{isTailwindClass:!0,modifierId:m,classGroupId:g,originalClassName:n,hasPostfixModifier:y}}).reverse().filter(function(n){if(!n.isTailwindClass)return!0;var i=n.modifierId,c=n.classGroupId,u=n.hasPostfixModifier,b=i+c;return s.has(b)?!1:(s.add(b),a(c,u).forEach(function(f){return s.add(i+f)}),!0)}).reverse().map(function(n){return n.originalClassName}).join(" ")}function S(){for(var r=arguments.length,e=new Array(r),t=0;t<r;t++)e[t]=arguments[t];var o,a,s,n=i;function i(u){var b=e[0],f=e.slice(1),g=f.reduce(function(y,x){return x(y)},b());return o=yr(g),a=o.cache.get,s=o.cache.set,n=c,c(u)}function c(u){var b=a(u);if(b)return b;var f=xr(u,o);return s(u,f),f}return function(){return n(E.apply(null,arguments))}}function d(r){var e=function(o){return o[r]||[]};return e.isThemeGetter=!0,e}var rr={};cr(rr,{isAny:()=>I,isArbitraryLength:()=>L,isArbitraryNumber:()=>z,isArbitraryPosition:()=>Y,isArbitraryShadow:()=>K,isArbitrarySize:()=>V,isArbitraryUrl:()=>D,isArbitraryValue:()=>l,isArbitraryWeight:()=>Ur,isInteger:()=>G,isLength:()=>h,isNumber:()=>M,isPercent:()=>_,isTshirtSize:()=>C});var Cr=/^\[(?:([a-z-]+):)?(.+)\]$/i,Nr=/^\d+\/\d+$/,Er=new Set(["px","full","screen"]),Lr=/^(\d+(\.\d+)?)?(xs|sm|md|lg|xl)$/,Wr=/\d+(%|px|r?em|[sdl]?v([hwib]|min|max)|pt|pc|in|cm|mm|cap|ch|ex|r?lh|cq(w|h|i|b|min|max))|\b(calc|min|max|clamp)\(.+\)|^0$/,jr=/^-?((\d+)?\.?(\d+)[a-z]+|0)_-?((\d+)?\.?(\d+)[a-z]+|0)/;function h(r){return M(r)||Er.has(r)||Nr.test(r)||L(r)}function L(r){return P(r,"length",Or)}function V(r){return P(r,"size",Ar)}function Y(r){return P(r,"position",Ar)}function D(r){return P(r,"url",$r)}function z(r){return P(r,"number",M)}var Ur=z;function M(r){return!Number.isNaN(Number(r))}function _(r){return r.endsWith("%")&&M(r.slice(0,-1))}function G(r){return wr(r)||P(r,"number",wr)}function l(r){return Cr.test(r)}function I(){return!0}function C(r){return Lr.test(r)}function K(r){return P(r,"",Br)}function P(r,e,t){var o=Cr.exec(r);return o?o[1]?o[1]===e:t(o[2]):!1}function Or(r){return Wr.test(r)}function Ar(){return!1}function $r(r){return r.startsWith("url(")}function wr(r){return Number.isInteger(Number(r))}function Br(r){return jr.test(r)}function T(){var r=d("colors"),e=d("spacing"),t=d("blur"),o=d("brightness"),a=d("borderColor"),s=d("borderRadius"),n=d("borderSpacing"),i=d("borderWidth"),c=d("contrast"),u=d("grayscale"),b=d("hueRotate"),f=d("invert"),g=d("gap"),y=d("gradientColorStops"),x=d("gradientColorStopPositions"),m=d("inset"),w=d("margin"),k=d("opacity"),A=d("padding"),er=d("saturate"),B=d("scale"),tr=d("sepia"),or=d("skew"),nr=d("space"),ir=d("translate"),F=function(){return["auto","contain","none"]},q=function(){return["auto","hidden","clip","visible","scroll"]},J=function(){return["auto",l,e]},p=function(){return[l,e]},ar=function(){return["",h]},W=function(){return["auto",M,l]},sr=function(){return["bottom","center","left","left-bottom","left-top","right","right-bottom","right-top","top"]},j=function(){return["solid","dashed","dotted","double","none"]},lr=function(){return["normal","multiply","screen","overlay","darken","lighten","color-dodge","color-burn","hard-light","soft-light","difference","exclusion","hue","saturation","color","luminosity","plus-lighter"]},Z=function(){return["start","end","center","between","around","evenly","stretch"]},R=function(){return["","0",l]},dr=function(){return["auto","avoid","all","avoid-page","page","left","right","column"]},N=function(){return[M,z]},U=function(){return[M,l]};return{cacheSize:500,theme:{colors:[I],spacing:[h],blur:["none","",C,l],brightness:N(),borderColor:[r],borderRadius:["none","","full",C,l],borderSpacing:p(),borderWidth:ar(),contrast:N(),grayscale:R(),hueRotate:U(),invert:R(),gap:p(),gradientColorStops:[r],gradientColorStopPositions:[_,L],inset:J(),margin:J(),opacity:N(),padding:p(),saturate:N(),scale:N(),sepia:R(),skew:U(),space:p(),translate:p()},classGroups:{aspect:[{aspect:["auto","square","video",l]}],container:["container"],columns:[{columns:[C]}],"break-after":[{"break-after":dr()}],"break-before":[{"break-before":dr()}],"break-inside":[{"break-inside":["auto","avoid","avoid-page","avoid-column"]}],"box-decoration":[{"box-decoration":["slice","clone"]}],box:[{box:["border","content"]}],display:["block","inline-block","inline","flex","inline-flex","table","inline-table","table-caption","table-cell","table-column","table-column-group","table-footer-group","table-header-group","table-row-group","table-row","flow-root","grid","inline-grid","contents","list-item","hidden"],float:[{float:["right","left","none"]}],clear:[{clear:["left","right","both","none"]}],isolation:["isolate","isolation-auto"],"object-fit":[{object:["contain","cover","fill","none","scale-down"]}],"object-position":[{object:[].concat(sr(),[l])}],overflow:[{overflow:q()}],"overflow-x":[{"overflow-x":q()}],"overflow-y":[{"overflow-y":q()}],overscroll:[{overscroll:F()}],"overscroll-x":[{"overscroll-x":F()}],"overscroll-y":[{"overscroll-y":F()}],position:["static","fixed","absolute","relative","sticky"],inset:[{inset:[m]}],"inset-x":[{"inset-x":[m]}],"inset-y":[{"inset-y":[m]}],start:[{start:[m]}],end:[{end:[m]}],top:[{top:[m]}],right:[{right:[m]}],bottom:[{bottom:[m]}],left:[{left:[m]}],visibility:["visible","invisible","collapse"],z:[{z:["auto",G]}],basis:[{basis:J()}],"flex-direction":[{flex:["row","row-reverse","col","col-reverse"]}],"flex-wrap":[{flex:["wrap","wrap-reverse","nowrap"]}],flex:[{flex:["1","auto","initial","none",l]}],grow:[{grow:R()}],shrink:[{shrink:R()}],order:[{order:["first","last","none",G]}],"grid-cols":[{"grid-cols":[I]}],"col-start-end":[{col:["auto",{span:["full",G]},l]}],"col-start":[{"col-start":W()}],"col-end":[{"col-end":W()}],"grid-rows":[{"grid-rows":[I]}],"row-start-end":[{row:["auto",{span:[G]},l]}],"row-start":[{"row-start":W()}],"row-end":[{"row-end":W()}],"grid-flow":[{"grid-flow":["row","col","dense","row-dense","col-dense"]}],"auto-cols":[{"auto-cols":["auto","min","max","fr",l]}],"auto-rows":[{"auto-rows":["auto","min","max","fr",l]}],gap:[{gap:[g]}],"gap-x":[{"gap-x":[g]}],"gap-y":[{"gap-y":[g]}],"justify-content":[{justify:["normal"].concat(Z())}],"justify-items":[{"justify-items":["start","end","center","stretch"]}],"justify-self":[{"justify-self":["auto","start","end","center","stretch"]}],"align-content":[{content:["normal"].concat(Z(),["baseline"])}],"align-items":[{items:["start","end","center","baseline","stretch"]}],"align-self":[{self:["auto","start","end","center","stretch","baseline"]}],"place-content":[{"place-content":[].concat(Z(),["baseline"])}],"place-items":[{"place-items":["start","end","center","baseline","stretch"]}],"place-self":[{"place-self":["auto","start","end","center","stretch"]}],p:[{p:[A]}],px:[{px:[A]}],py:[{py:[A]}],ps:[{ps:[A]}],pe:[{pe:[A]}],pt:[{pt:[A]}],pr:[{pr:[A]}],pb:[{pb:[A]}],pl:[{pl:[A]}],m:[{m:[w]}],mx:[{mx:[w]}],my:[{my:[w]}],ms:[{ms:[w]}],me:[{me:[w]}],mt:[{mt:[w]}],mr:[{mr:[w]}],mb:[{mb:[w]}],ml:[{ml:[w]}],"space-x":[{"space-x":[nr]}],"space-x-reverse":["space-x-reverse"],"space-y":[{"space-y":[nr]}],"space-y-reverse":["space-y-reverse"],w:[{w:["auto","min","max","fit",l,e]}],"min-w":[{"min-w":["min","max","fit",l,h]}],"max-w":[{"max-w":["0","none","full","min","max","fit","prose",{screen:[C]},C,l]}],h:[{h:[l,e,"auto","min","max","fit"]}],"min-h":[{"min-h":["min","max","fit",l,h]}],"max-h":[{"max-h":[l,e,"min","max","fit"]}],"font-size":[{text:["base",C,L]}],"font-smoothing":["antialiased","subpixel-antialiased"],"font-style":["italic","not-italic"],"font-weight":[{font:["thin","extralight","light","normal","medium","semibold","bold","extrabold","black",z]}],"font-family":[{font:[I]}],"fvn-normal":["normal-nums"],"fvn-ordinal":["ordinal"],"fvn-slashed-zero":["slashed-zero"],"fvn-figure":["lining-nums","oldstyle-nums"],"fvn-spacing":["proportional-nums","tabular-nums"],"fvn-fraction":["diagonal-fractions","stacked-fractons"],tracking:[{tracking:["tighter","tight","normal","wide","wider","widest",l]}],"line-clamp":[{"line-clamp":["none",M,z]}],leading:[{leading:["none","tight","snug","normal","relaxed","loose",l,h]}],"list-image":[{"list-image":["none",l]}],"list-style-type":[{list:["none","disc","decimal",l]}],"list-style-position":[{list:["inside","outside"]}],"placeholder-color":[{placeholder:[r]}],"placeholder-opacity":[{"placeholder-opacity":[k]}],"text-alignment":[{text:["left","center","right","justify","start","end"]}],"text-color":[{text:[r]}],"text-opacity":[{"text-opacity":[k]}],"text-decoration":["underline","overline","line-through","no-underline"],"text-decoration-style":[{decoration:[].concat(j(),["wavy"])}],"text-decoration-thickness":[{decoration:["auto","from-font",h]}],"underline-offset":[{"underline-offset":["auto",l,h]}],"text-decoration-color":[{decoration:[r]}],"text-transform":["uppercase","lowercase","capitalize","normal-case"],"text-overflow":["truncate","text-ellipsis","text-clip"],indent:[{indent:p()}],"vertical-align":[{align:["baseline","top","middle","bottom","text-top","text-bottom","sub","super",l]}],whitespace:[{whitespace:["normal","nowrap","pre","pre-line","pre-wrap","break-spaces"]}],break:[{break:["normal","words","all","keep"]}],hyphens:[{hyphens:["none","manual","auto"]}],content:[{content:["none",l]}],"bg-attachment":[{bg:["fixed","local","scroll"]}],"bg-clip":[{"bg-clip":["border","padding","content","text"]}],"bg-opacity":[{"bg-opacity":[k]}],"bg-origin":[{"bg-origin":["border","padding","content"]}],"bg-position":[{bg:[].concat(sr(),[Y])}],"bg-repeat":[{bg:["no-repeat",{repeat:["","x","y","round","space"]}]}],"bg-size":[{bg:["auto","cover","contain",V]}],"bg-image":[{bg:["none",{"gradient-to":["t","tr","r","br","b","bl","l","tl"]},D]}],"bg-color":[{bg:[r]}],"gradient-from-pos":[{from:[x]}],"gradient-via-pos":[{via:[x]}],"gradient-to-pos":[{to:[x]}],"gradient-from":[{from:[y]}],"gradient-via":[{via:[y]}],"gradient-to":[{to:[y]}],rounded:[{rounded:[s]}],"rounded-s":[{"rounded-s":[s]}],"rounded-e":[{"rounded-e":[s]}],"rounded-t":[{"rounded-t":[s]}],"rounded-r":[{"rounded-r":[s]}],"rounded-b":[{"rounded-b":[s]}],"rounded-l":[{"rounded-l":[s]}],"rounded-ss":[{"rounded-ss":[s]}],"rounded-se":[{"rounded-se":[s]}],"rounded-ee":[{"rounded-ee":[s]}],"rounded-es":[{"rounded-es":[s]}],"rounded-tl":[{"rounded-tl":[s]}],"rounded-tr":[{"rounded-tr":[s]}],"rounded-br":[{"rounded-br":[s]}],"rounded-bl":[{"rounded-bl":[s]}],"border-w":[{border:[i]}],"border-w-x":[{"border-x":[i]}],"border-w-y":[{"border-y":[i]}],"border-w-s":[{"border-s":[i]}],"border-w-e":[{"border-e":[i]}],"border-w-t":[{"border-t":[i]}],"border-w-r":[{"border-r":[i]}],"border-w-b":[{"border-b":[i]}],"border-w-l":[{"border-l":[i]}],"border-opacity":[{"border-opacity":[k]}],"border-style":[{border:[].concat(j(),["hidden"])}],"divide-x":[{"divide-x":[i]}],"divide-x-reverse":["divide-x-reverse"],"divide-y":[{"divide-y":[i]}],"divide-y-reverse":["divide-y-reverse"],"divide-opacity":[{"divide-opacity":[k]}],"divide-style":[{divide:j()}],"border-color":[{border:[a]}],"border-color-x":[{"border-x":[a]}],"border-color-y":[{"border-y":[a]}],"border-color-t":[{"border-t":[a]}],"border-color-r":[{"border-r":[a]}],"border-color-b":[{"border-b":[a]}],"border-color-l":[{"border-l":[a]}],"divide-color":[{divide:[a]}],"outline-style":[{outline:[""].concat(j())}],"outline-offset":[{"outline-offset":[l,h]}],"outline-w":[{outline:[h]}],"outline-color":[{outline:[r]}],"ring-w":[{ring:ar()}],"ring-w-inset":["ring-inset"],"ring-color":[{ring:[r]}],"ring-opacity":[{"ring-opacity":[k]}],"ring-offset-w":[{"ring-offset":[h]}],"ring-offset-color":[{"ring-offset":[r]}],shadow:[{shadow:["","inner","none",C,K]}],"shadow-color":[{shadow:[I]}],opacity:[{opacity:[k]}],"mix-blend":[{"mix-blend":lr()}],"bg-blend":[{"bg-blend":lr()}],filter:[{filter:["","none"]}],blur:[{blur:[t]}],brightness:[{brightness:[o]}],contrast:[{contrast:[c]}],"drop-shadow":[{"drop-shadow":["","none",C,l]}],grayscale:[{grayscale:[u]}],"hue-rotate":[{"hue-rotate":[b]}],invert:[{invert:[f]}],saturate:[{saturate:[er]}],sepia:[{sepia:[tr]}],"backdrop-filter":[{"backdrop-filter":["","none"]}],"backdrop-blur":[{"backdrop-blur":[t]}],"backdrop-brightness":[{"backdrop-brightness":[o]}],"backdrop-contrast":[{"backdrop-contrast":[c]}],"backdrop-grayscale":[{"backdrop-grayscale":[u]}],"backdrop-hue-rotate":[{"backdrop-hue-rotate":[b]}],"backdrop-invert":[{"backdrop-invert":[f]}],"backdrop-opacity":[{"backdrop-opacity":[k]}],"backdrop-saturate":[{"backdrop-saturate":[er]}],"backdrop-sepia":[{"backdrop-sepia":[tr]}],"border-collapse":[{border:["collapse","separate"]}],"border-spacing":[{"border-spacing":[n]}],"border-spacing-x":[{"border-spacing-x":[n]}],"border-spacing-y":[{"border-spacing-y":[n]}],"table-layout":[{table:["auto","fixed"]}],caption:[{caption:["top","bottom"]}],transition:[{transition:["none","all","","colors","opacity","shadow","transform",l]}],duration:[{duration:U()}],ease:[{ease:["linear","in","out","in-out",l]}],delay:[{delay:U()}],animate:[{animate:["none","spin","ping","pulse","bounce",l]}],transform:[{transform:["","gpu","none"]}],scale:[{scale:[B]}],"scale-x":[{"scale-x":[B]}],"scale-y":[{"scale-y":[B]}],rotate:[{rotate:[G,l]}],"translate-x":[{"translate-x":[ir]}],"translate-y":[{"translate-y":[ir]}],"skew-x":[{"skew-x":[or]}],"skew-y":[{"skew-y":[or]}],"transform-origin":[{origin:["center","top","top-right","right","bottom-right","bottom","bottom-left","left","top-left",l]}],accent:[{accent:["auto",r]}],appearance:["appearance-none"],cursor:[{cursor:["auto","default","pointer","wait","text","move","help","not-allowed","none","context-menu","progress","cell","crosshair","vertical-text","alias","copy","no-drop","grab","grabbing","all-scroll","col-resize","row-resize","n-resize","e-resize","s-resize","w-resize","ne-resize","nw-resize","se-resize","sw-resize","ew-resize","ns-resize","nesw-resize","nwse-resize","zoom-in","zoom-out",l]}],"caret-color":[{caret:[r]}],"pointer-events":[{"pointer-events":["none","auto"]}],resize:[{resize:["none","y","x",""]}],"scroll-behavior":[{scroll:["auto","smooth"]}],"scroll-m":[{"scroll-m":p()}],"scroll-mx":[{"scroll-mx":p()}],"scroll-my":[{"scroll-my":p()}],"scroll-ms":[{"scroll-ms":p()}],"scroll-me":[{"scroll-me":p()}],"scroll-mt":[{"scroll-mt":p()}],"scroll-mr":[{"scroll-mr":p()}],"scroll-mb":[{"scroll-mb":p()}],"scroll-ml":[{"scroll-ml":p()}],"scroll-p":[{"scroll-p":p()}],"scroll-px":[{"scroll-px":p()}],"scroll-py":[{"scroll-py":p()}],"scroll-ps":[{"scroll-ps":p()}],"scroll-pe":[{"scroll-pe":p()}],"scroll-pt":[{"scroll-pt":p()}],"scroll-pr":[{"scroll-pr":p()}],"scroll-pb":[{"scroll-pb":p()}],"scroll-pl":[{"scroll-pl":p()}],"snap-align":[{snap:["start","end","center","align-none"]}],"snap-stop":[{snap:["normal","always"]}],"snap-type":[{snap:["none","x","y","both"]}],"snap-strictness":[{snap:["mandatory","proximity"]}],touch:[{touch:["auto","none","pinch-zoom","manipulation",{pan:["x","left","right","y","up","down"]}]}],select:[{select:["none","text","all","auto"]}],"will-change":[{"will-change":["auto","scroll","contents","transform",l]}],fill:[{fill:[r,"none"]}],"stroke-w":[{stroke:[h,z]}],stroke:[{stroke:[r,"none"]}],sr:["sr-only","not-sr-only"]},conflictingClassGroups:{overflow:["overflow-x","overflow-y"],overscroll:["overscroll-x","overscroll-y"],inset:["inset-x","inset-y","start","end","top","right","bottom","left"],"inset-x":["right","left"],"inset-y":["top","bottom"],flex:["basis","grow","shrink"],gap:["gap-x","gap-y"],p:["px","py","ps","pe","pt","pr","pb","pl"],px:["pr","pl"],py:["pt","pb"],m:["mx","my","ms","me","mt","mr","mb","ml"],mx:["mr","ml"],my:["mt","mb"],"font-size":["leading"],"fvn-normal":["fvn-ordinal","fvn-slashed-zero","fvn-figure","fvn-spacing","fvn-fraction"],"fvn-ordinal":["fvn-normal"],"fvn-slashed-zero":["fvn-normal"],"fvn-figure":["fvn-normal"],"fvn-spacing":["fvn-normal"],"fvn-fraction":["fvn-normal"],rounded:["rounded-s","rounded-e","rounded-t","rounded-r","rounded-b","rounded-l","rounded-ss","rounded-se","rounded-ee","rounded-es","rounded-tl","rounded-tr","rounded-br","rounded-bl"],"rounded-s":["rounded-ss","rounded-es"],"rounded-e":["rounded-se","rounded-ee"],"rounded-t":["rounded-tl","rounded-tr"],"rounded-r":["rounded-tr","rounded-br"],"rounded-b":["rounded-br","rounded-bl"],"rounded-l":["rounded-tl","rounded-bl"],"border-spacing":["border-spacing-x","border-spacing-y"],"border-w":["border-w-s","border-w-e","border-w-t","border-w-r","border-w-b","border-w-l"],"border-w-x":["border-w-r","border-w-l"],"border-w-y":["border-w-t","border-w-b"],"border-color":["border-color-t","border-color-r","border-color-b","border-color-l"],"border-color-x":["border-color-r","border-color-l"],"border-color-y":["border-color-t","border-color-b"],"scroll-m":["scroll-mx","scroll-my","scroll-ms","scroll-me","scroll-mt","scroll-mr","scroll-mb","scroll-ml"],"scroll-mx":["scroll-mr","scroll-ml"],"scroll-my":["scroll-mt","scroll-mb"],"scroll-p":["scroll-px","scroll-py","scroll-ps","scroll-pe","scroll-pt","scroll-pr","scroll-pb","scroll-pl"],"scroll-px":["scroll-pr","scroll-pl"],"scroll-py":["scroll-pt","scroll-pb"]},conflictingClassGroupModifiers:{"font-size":["leading"]}}}function O(r,e){for(var t in e)Mr(r,t,e[t]);return r}var Fr=Object.prototype.hasOwnProperty,qr=new Set(["string","number","boolean"]);function Mr(r,e,t){if(!Fr.call(r,e)||qr.has(typeof t)||t===null){r[e]=t;return}if(Array.isArray(t)&&Array.isArray(r[e])){r[e]=r[e].concat(t);return}if(typeof t=="object"&&typeof r[e]=="object"){if(r[e]===null){r[e]=t;return}for(var o in t)Mr(r[e],o,t[o])}}function kr(r){for(var e=arguments.length,t=new Array(e>1?e-1:0),o=1;o<e;o++)t[o-1]=arguments[o];return typeof r=="function"?S.apply(void 0,[T,r].concat(t)):S.apply(void 0,[function(){return O(T(),r)}].concat(t))}var Sr=S(T);var Jr=E;var{twMerge:Zr}=$;document.querySelectorAll("[data-tw-merge]").forEach(r=>{r.setAttribute("class",Zr(r.getAttribute("class"))),r.removeAttribute("data-tw-merge")});window.twMerge=$;})();
