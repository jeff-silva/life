(window.webpackJsonp=window.webpackJsonp||[]).push([[10,11],{546:function(t,e,r){var content=r(551);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[t.i,content,""]]),content.locals&&(t.exports=content.locals);(0,r(74).default)("039c59a2",content,!0,{sourceMap:!1})},548:function(t,e,r){"use strict";r.r(e);var n=r(21),o=(r(549),r(552),r(189),{props:{label:{default:""},layout:{default:"vertical"},labelWidth:{default:"200px"},error:[Boolean,Number,String,Array,Object]},computed:{compError:function(){var t=[];return"string"==typeof this.error?t=[this.error]:Array.isArray(this.error)?t=this.error:"object"==Object(n.a)(this.error)&&(t=Object.values(this.error)),t.join("<br>")}}}),l=(r(550),r(16)),component=Object(l.a)(o,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",["horizontal"==t.layout?r("div",{staticClass:"d-flex align-items-center mb-3"},[r("div",{style:{minWidth:t.labelWidth,maxWidth:t.labelWidth}},[t._t("label",(function(){return[t._v(t._s(t.label))]}))],2),t._v(" "),r("div",{staticClass:"flex-grow-1"},[t._t("default"),t._v(" "),r("div",{staticClass:"ui-field-info"},[t._t("info")],2),t._v(" "),t.compError?r("small",{staticClass:"d-block text-danger pt-1",domProps:{innerHTML:t._s(t.compError)}}):t._e()],2)]):r("div",{staticClass:"mb-3"},[r("div",{staticClass:"form-label"},[t._t("label",(function(){return[t._v(t._s(t.label))]}))],2),t._v(" "),t._t("default"),t._v(" "),r("div",{staticClass:"ui-field-info"},[t._t("info")],2),t._v(" "),t.compError?r("small",{staticClass:"d-block text-danger pt-1",domProps:{innerHTML:t._s(t.compError)}}):t._e()],2)])}),[],!1,null,null,null);e.default=component.exports},549:function(t,e,r){"use strict";var n=r(13),o=r(3),l=r(4),c=r(135),f=r(20),d=r(15),v=r(404),m=r(48),_=r(134),h=r(402),y=r(5),E=r(92).f,x=r(40).f,N=r(18).f,I=r(553),C=r(554).trim,A="Number",O=o.Number,j=O.prototype,k=o.TypeError,w=l("".slice),T=l("".charCodeAt),F=function(t){var e=h(t,"number");return"bigint"==typeof e?e:M(e)},M=function(t){var e,r,n,o,l,c,f,code,d=h(t,"number");if(_(d))throw k("Cannot convert a Symbol value to a number");if("string"==typeof d&&d.length>2)if(d=C(d),43===(e=T(d,0))||45===e){if(88===(r=T(d,2))||120===r)return NaN}else if(48===e){switch(T(d,1)){case 66:case 98:n=2,o=49;break;case 79:case 111:n=8,o=55;break;default:return+d}for(c=(l=w(d,2)).length,f=0;f<c;f++)if((code=T(l,f))<48||code>o)return NaN;return parseInt(l,n)}return+d};if(c(A,!O(" 0o1")||!O("0b1")||O("+0x1"))){for(var P,S=function(t){var e=arguments.length<1?0:O(F(t)),r=this;return m(j,r)&&y((function(){I(r)}))?v(Object(e),r,S):e},$=n?E(O):"MAX_VALUE,MIN_VALUE,NaN,NEGATIVE_INFINITY,POSITIVE_INFINITY,EPSILON,MAX_SAFE_INTEGER,MIN_SAFE_INTEGER,isFinite,isInteger,isNaN,isSafeInteger,parseFloat,parseInt,fromString,range".split(","),L=0;$.length>L;L++)d(O,P=$[L])&&!d(S,P)&&N(S,P,x(O,P));S.prototype=j,j.constructor=S,f(o,A,S)}},550:function(t,e,r){"use strict";r(546)},551:function(t,e,r){var n=r(73)(!1);n.push([t.i,".ui-field-info *{font-size:12px;color:var(--bs-gray)!important}",""]),t.exports=n},552:function(t,e,r){var n=r(7),o=r(403).values;n({target:"Object",stat:!0},{values:function(t){return o(t)}})},553:function(t,e,r){var n=r(4);t.exports=n(1..valueOf)},554:function(t,e,r){var n=r(4),o=r(25),l=r(14),c=r(555),f=n("".replace),d="["+c+"]",v=RegExp("^"+d+d+"*"),m=RegExp(d+d+"*$"),_=function(t){return function(e){var r=l(o(e));return 1&t&&(r=f(r,v,"")),2&t&&(r=f(r,m,"")),r}};t.exports={start:_(1),end:_(2),trim:_(3)}},555:function(t,e){t.exports="\t\n\v\f\r                　\u2028\u2029\ufeff"},563:function(t,e,r){"use strict";r.r(e);var n={props:{container:{default:!0},header:"",body:"",footer:""}},o=r(16),component=Object(o.a)(n,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("ui-field",{attrs:{label:"Container"}},[r("input",{attrs:{type:"checkbox"},domProps:{value:t.container,checked:!!t.container},on:{input:function(e){return t.$log("update:container",e.target.checked)}}})]),t._v(" "),r("ui-field",{attrs:{label:"Header"}},[r("input",{staticClass:"form-control",attrs:{type:"text"},domProps:{value:t.header},on:{input:function(e){return t.$emit("update:header",e.target.value)}}})]),t._v(" "),r("ui-field",{attrs:{label:"Body"}},[r("input",{staticClass:"form-control",attrs:{type:"text"},domProps:{value:t.body},on:{input:function(e){return t.$emit("update:body",e.target.value)}}})]),t._v(" "),r("ui-field",{attrs:{label:"Footer"}},[r("input",{staticClass:"form-control",attrs:{type:"text"},domProps:{value:t.footer},on:{input:function(e){return t.$emit("update:footer",e.target.value)}}})])],1)}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{UiField:r(548).default})}}]);