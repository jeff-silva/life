(window.webpackJsonp=window.webpackJsonp||[]).push([[41,20,21,22,25,28,29,32],{554:function(t,e,o){"use strict";var r=o(14),n=o(3),l=o(4),d=o(136),c=o(21),f=o(16),h=o(405),v=o(51),m=o(135),w=o(406),_=o(5),y=o(95).f,x=o(42).f,$=o(18).f,N=o(407),S=o(556).trim,C="Number",O=n.Number,k=O.prototype,E=n.TypeError,I=l("".slice),j=l("".charCodeAt),L=function(t){var e=w(t,"number");return"bigint"==typeof e?e:A(e)},A=function(t){var e,o,r,n,l,d,c,code,f=w(t,"number");if(m(f))throw E("Cannot convert a Symbol value to a number");if("string"==typeof f&&f.length>2)if(f=S(f),43===(e=j(f,0))||45===e){if(88===(o=j(f,2))||120===o)return NaN}else if(48===e){switch(j(f,1)){case 66:case 98:r=2,n=49;break;case 79:case 111:r=8,n=55;break;default:return+f}for(d=(l=I(f,2)).length,c=0;c<d;c++)if((code=j(l,c))<48||code>n)return NaN;return parseInt(l,r)}return+f};if(d(C,!O(" 0o1")||!O("0b1")||O("+0x1"))){for(var R,J=function(t){var e=arguments.length<1?0:O(L(t)),o=this;return v(k,o)&&_((function(){N(o)}))?h(Object(e),o,J):e},T=r?y(O):"MAX_VALUE,MIN_VALUE,NaN,NEGATIVE_INFINITY,POSITIVE_INFINITY,EPSILON,MAX_SAFE_INTEGER,MIN_SAFE_INTEGER,isFinite,isInteger,isNaN,isSafeInteger,parseFloat,parseInt,fromString,range".split(","),F=0;T.length>F;F++)f(O,R=T[F])&&!f(J,R)&&$(J,R,x(O,R));J.prototype=k,k.constructor=J,c(n,C,J)}},555:function(t,e,o){var content=o(562);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[t.i,content,""]]),content.locals&&(t.exports=content.locals);(0,o(74).default)("039c59a2",content,!0,{sourceMap:!1})},556:function(t,e,o){var r=o(4),n=o(26),l=o(15),d=o(557),c=r("".replace),f="["+d+"]",h=RegExp("^"+f+f+"*"),v=RegExp(f+f+"*$"),m=function(t){return function(e){var o=l(n(e));return 1&t&&(o=c(o,h,"")),2&t&&(o=c(o,v,"")),o}};t.exports={start:m(1),end:m(2),trim:m(3)}},557:function(t,e){t.exports="\t\n\v\f\r                　\u2028\u2029\ufeff"},559:function(t,e,o){"use strict";o.r(e);var r=o(20),n=(o(554),o(560),o(191),{props:{label:{default:""},labelWidth:{default:"200px"},info:{default:""},error:[Boolean,Number,String,Array,Object],widthBreakpoint:{default:600}},computed:{_compError:function(){var t=[];return"string"==typeof this.error?t=[this.error]:Array.isArray(this.error)?t=this.error:"object"==Object(r.a)(this.error)&&(t=Object.values(this.error)),t.join("<br>")}},data:function(){return{parentWidth:0,isLarge:!1}},methods:{calculateSizes:function(){this.parentWidth=this.$el.offsetWidth,this.isLarge=this.$el.offsetWidth>=this.widthBreakpoint},resizeEventListener:function(t){this.calculateSizes()}},beforeDestroy:function(){window.removeEventListener("resize",this.resizeEventListener)},mounted:function(){this.calculateSizes(),window.addEventListener("resize",this.resizeEventListener)}}),l=(o(561),o(11)),component=Object(l.a)(n,(function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("div",{staticClass:"ui-field mb-3",class:{"d-flex":t.isLarge,"ui-field-error":t._compError}},[o("div",{class:{"py-2":t.isLarge,"pb-1":!t.isLarge},style:"min-width:"+(t.isLarge?null:t.labelWidth)+"; max-width:"+(t.isLarge?null:t.labelWidth)+";"},[t._t("label",(function(){return[t._v(t._s(t.label))]})),t._v(" "),o("small",{staticClass:"d-block text-muted"},[t._t("info",(function(){return[o("span",{domProps:{innerHTML:t._s(t.info)}})]}))],2)],2),t._v(" "),o("div",{class:{"flex-grow-1":t.isLarge}},[t._t("default"),t._v(" "),t._compError?o("small",{staticClass:"d-block text-danger",domProps:{innerHTML:t._s(t._compError)}}):t._e()],2)])}),[],!1,null,null,null);e.default=component.exports},560:function(t,e,o){var r=o(6),n=o(408).values;r({target:"Object",stat:!0},{values:function(t){return n(t)}})},561:function(t,e,o){"use strict";o(555)},562:function(t,e,o){var r=o(73)(!1);r.push([t.i,".ui-field-error .el-input__inner,.ui-field-error .form-control{border-color:var(--bs-danger);box-shadow:none!important;outline:0!important}",""]),t.exports=r},563:function(t,e,o){"use strict";o.r(e);var r=o(20),n=(o(25),o(192),o(409),o(569),o(12),o(570),o(571),o(572),o(573),o(574),o(575),o(576),o(577),o(578),o(579),o(580),o(581),o(582),o(583),o(584),o(585),o(586),o(587),o(588),o(589),o(590),o(591),o(592),o(593),o(29),{props:{value:[Boolean,Object],method:{default:"get"},action:{default:""},mountedSubmit:{default:!1,type:Boolean},successText:{default:""}},data:function(){return{loading:!1,response:!1,error:!1,errorFields:{}}},methods:{submit:function(){var t=this,e=this.method,o=this.action,data=null,n=null;if("post"==this.method)for(var l in data=new FormData,this.value){var d=this.value[l];if(Array.isArray(d)){if(0==d.length){data.append("".concat(l),"");continue}for(var i in d)data.append("".concat(l,"[]"),d[i]||"")}else if(d&&"object"==Object(r.a)(d)&&d.type&&d.base64){for(var c=d.base64.split(","),f=(c[0].match(/:(.*?);/)[1],atob(c[1])),h=f.length,v=new Uint8Array(h);h--;)v[h]=f.charCodeAt(h);data.append(l,new File([v],d.name,{type:d.type}))}else data.append(l,d||"")}else n=this.value;return this.loading=!0,this.error=!1,this.errorFields={},this.$axios({method:e,url:o,data:data,params:n,headers:{"Content-Type":"multipart/form-data"}}).then((function(e){var o=t.parseResponseData(e.data);t.loading=!1,t.response=o,t.$emit("success",o),t.$emit("response",o),t.successText&&t.$swal.fire(t.successText)})).catch((function(e){var o=t.parseResponseData(e.response.data);t.loading=!1,t.error=o.message,t.errorFields=o.fields,t.$emit("error",o),t.$emit("response",o)}))},parseResponseData:function(t){return["per_page","page"].forEach((function(e){"string"==typeof t[e]&&(t[e]=parseInt(t[e]))})),t}},mounted:function(){this.mountedSubmit&&this.submit()}}),l=o(11),component=Object(l.a)(n,(function(){var t=this,e=t.$createElement;return(t._self._c||e)("form",{attrs:{action:""},on:{submit:function(e){return e.preventDefault(),t.submit()}}},[t._t("default",null,{loading:t.loading,response:t.response,error:t.error,errorFields:t.errorFields})],2)}),[],!1,null,null,null);e.default=component.exports},565:function(t,e,o){var content=o(567);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[t.i,content,""]]),content.locals&&(t.exports=content.locals);(0,o(74).default)("dc996836",content,!0,{sourceMap:!1})},566:function(t,e,o){"use strict";o(565)},567:function(t,e,o){var r=o(73)(!1);r.push([t.i,"@media (max-width:768px){.ui-model-edit-fields{margin-bottom:50px}.ui-model-edit-actions{position:fixed;bottom:0;left:0;width:100%;display:flex}.ui-model-edit-actions>.btn{flex-basis:100%;text-align:center;margin-left:5px;margin-right:5px}}",""]),t.exports=r},568:function(t,e,o){"use strict";o.r(e);var r=o(20),n=(o(554),o(61),o(96),o(410),o(12),{props:{value:{default:function(){return{}},type:[Boolean,Number,String,Object]},modelName:{default:""},modelId:{default:!1,type:[Boolean,Number,String]},singular:{default:"Item"},plural:{default:"Itens"},showActions:{default:!0},redirect:{default:"edit"}},watch:{$props:{deep:!0,handler:function(t){this.__preventRecursive||(this.props=JSON.parse(JSON.stringify(t)))}},props:{deep:!0,handler:function(t){var e=this;for(var i in this.__preventRecursive=!0,t)this.$emit("update:".concat(i),t[i]);setTimeout((function(){e.__preventRecursive=!1}),10)}}},computed:{_modelId:function(){var t=+this.props.modelId;return"object"==Object(r.a)(this.props.value)&&this.props.value.id&&(t=+this.props.value.id),!isNaN(t)&&t}},data:function(){return{finding:!1,backUrl:localStorage.getItem("ui-model-search-".concat(this.modelName,"-url"))||"",props:JSON.parse(JSON.stringify(this.$props))}},methods:{find:function(){var t=this;this._modelId&&(this.finding=!0,this.$axios.get("/api/".concat(this.modelName,"/find/").concat(this._modelId)).then((function(e){t.finding=!1,t.props.value=e.data})))},onSuccess:function(t){var e=this;this.props.value=t,this.$emit("success",t),this.$swal.fire({title:"Dados de ".concat(this.singular," foram salvos"),confirmButtonText:"Lista de ".concat(this.plural),showCancelButton:!0,cancelButtonText:"Fechar"}).then((function(t){t.isConfirmed&&e.$router.push(e.backUrl)})),this.$router.push("/admin/".concat(this.modelName,"/").concat(t.id))},successRedirect:function(){"edit"==this.redirect?this.$router.push("/admin/".concat(this.modelName,"/").concat(this.props.value&&this.props.value.id?this.props.value.id:"new")):"back"==this.redirect?this.$router.go(-1):this.$router.push(this.redirect)}},mounted:function(){this.find()}}),l=(o(566),o(11)),component=Object(l.a)(n,(function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("ui-form",{attrs:{method:"post",action:"/api/"+t.modelName+"/save"},on:{success:t.onSuccess},scopedSlots:t._u([{key:"default",fn:function(e){var r=e.loading,n=e.error,l=e.errorFields;return[o("div",{staticClass:"ui-model-edit-fields bg-white p-3 shadow-sm"},[o("el-collapse-transition",[n?o("div",{staticClass:"alert alert-danger"},[o("a",{staticClass:"float-end text-danger fw-bold",attrs:{href:"javascript:;"},on:{click:function(t){n=!1}}},[o("i",{staticClass:"fas fa-fw fa-times"})]),t._v(" "),o("div",{domProps:{innerHTML:t._s(n)}})]):t._e()]),t._v(" "),t._t("default",null,{value:t.props.value,loading:r,error:n,errorFields:l})],2),t._v(" "),t.showActions?o("div",{staticClass:"ui-model-edit-actions text-end bg-white shadow-sm py-2 mt-md-3 p-md-3"},[t._t("actions"),t._v(" "),t.props.value.id?o("nuxt-link",{staticClass:"btn btn-light",attrs:{to:"/admin/"+t.modelName+"/new"}},[t._v("\n            Criar "+t._s(t.singular)+"\n        ")]):t._e(),t._v(" "),o("nuxt-link",{staticClass:"btn btn-light",attrs:{to:t.backUrl}},[t._v("\n            Voltar\n        ")]),t._v(" "),o("button",{directives:[{name:"loading",rawName:"v-loading",value:r,expression:"loading"}],staticClass:"btn btn-primary",attrs:{type:"submit"}},[t._v("\n            Salvar\n        ")])],2):t._e()]}}],null,!0),model:{value:t.props.value,callback:function(e){t.$set(t.props,"value",e)},expression:"props.value"}})}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{UiForm:o(563).default})},595:function(t,e,o){"use strict";o.r(e);o(61),o(25),o(75),o(29),o(192);var r={props:{value:{default:!1,type:[Boolean,Object]},folder:{default:""},preview:{default:!0},previewHeight:{default:"200px"}},watch:{$props:{deep:!0,handler:function(t){this.__preventRecursive||(this.props=JSON.parse(JSON.stringify(t)))}},props:{deep:!0,handler:function(t){var e=this;for(var i in this.__preventRecursive=!0,this.$emit("input",t.value||!1),t)this.$emit("update:".concat(i),t[i]);setTimeout((function(){e.__preventRecursive=!1}),10)}}},data:function(){return{props:JSON.parse(JSON.stringify(this.$props))}},methods:{fileBrowser:function(){var t=this;Object.assign(document.createElement("input"),{type:"file",onchange:function(e){t.fileGet(e.target.files[0])}}).click()},fileGet:function(t){var e=this,o=new FileReader;o.readAsDataURL(t),o.onload=function(){e.props.value={name:t.name.replace(/(.+)\.[a-zA-Z0-9]{2,}$/g,"$1"),folder:e.props.folder,size:t.size,mime:t.type,type:t.type.split("/").shift(),ext:t.name.split(".").pop(),content:o.result},e.$emit("input",e.props.value),e.$emit("file-get",t)}},fileClear:function(){this.props.value=!1,this.$emit("file-clear",!1)}}},n=r,l=o(11),component=Object(l.a)(n,(function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("div",{staticClass:"ui-file",on:{dragover:function(t){t.preventDefault()},drop:function(e){return e.preventDefault(),t.fileGet(e.dataTransfer.files[0])}}},[o("div",{staticClass:"d-flex align-items-center"},[t.props.value?t._e():o("div",{staticClass:"flex-grow-1"},[o("button",{staticClass:"btn btn-light w-100",attrs:{type:"button"},on:{click:function(e){return t.fileBrowser()}}},[t.props.value?o("div",[t._v(t._s(t.props.value.name))]):o("div",[t._v("Browse")])])]),t._v(" "),t.props.value?o("div",{staticClass:"flex-grow-1"},[o("input",{directives:[{name:"model",rawName:"v-model",value:t.props.value.name,expression:"props.value.name"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:t.props.value.name},on:{input:function(e){e.target.composing||t.$set(t.props.value,"name",e.target.value)}}})]):t._e(),t._v(" "),t.props.value?o("div",{staticClass:"ms-2"},[o("button",{staticClass:"btn btn-light w-100",attrs:{type:"button"},on:{click:function(e){return t.fileClear()}}},[o("i",{staticClass:"fas fa-fw fa-times"})])]):t._e(),t._v(" "),t._t("actions")],2),t._v(" "),t.props.preview?o("div",{staticClass:"bg-light mt-2 d-flex align-items-center justify-content-center",style:"height:calc("+t.previewHeight+" + 30px);"},[t._t("preview",(function(){return[t.props.value&&t.props.value.type.includes("image")?o("div",[o("img",{style:"height:"+t.previewHeight+"; max-width:300px; object-fit:cover;",attrs:{src:t.props.value.content,alt:""}}),t._v(" "),o("small",{staticClass:"d-block text-center"},[t._v(t._s(t._f("fileSize")(t.props.value.size)))])]):t.props.value?o("div",[o("div",{staticStyle:{"font-size":"40px","line-height":"35px","text-transform":"uppercase"}},[t._v(t._s(t.props.value.ext))]),t._v(" "),o("small",{staticClass:"d-block text-center"},[t._v(t._s(t._f("fileSize")(t.props.value.size)))])]):o("div",[t._v("Arraste o arquivo aqui")])]}),{value:t.props.value,previewHeight:t.previewHeight})],2):t._e()])}),[],!1,null,null,null);e.default=component.exports},597:function(t,e,o){var content=o(606);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[t.i,content,""]]),content.locals&&(t.exports=content.locals);(0,o(74).default)("6fc917e8",content,!0,{sourceMap:!1})},605:function(t,e,o){"use strict";o(597)},606:function(t,e,o){var r=o(73)(!1);r.push([t.i,'.ui-dropdown{position:relative;z-index:2}.ui-dropdown-dropdown{position:absolute;opacity:0;visibility:hidden;transition:all .3s ease}.ui-dropdown .ui-dropdown-dropdown-shown,.ui-dropdown:hover .ui-dropdown-dropdown{z-index:9;opacity:1;visibility:visible}.ui-dropdown .ui-dropdown-dropdown-caret{position:absolute;color:#fff;line-height:0;text-shadow:0 0 #222;opacity:0;visibility:hidden}.ui-dropdown .ui-dropdown-dropdown-shown .ui-dropdown-dropdown-caret,.ui-dropdown:hover .ui-dropdown-dropdown-caret{opacity:1;visibility:visible}.ui-dropdown-type-top-left .ui-dropdown-dropdown{bottom:100%;left:0;margin-bottom:10px}.ui-dropdown-type-top-left .ui-dropdown-dropdown:after{content:"▼";position:absolute;bottom:-5px;left:20px;line-height:0;color:#fff}.ui-dropdown-type-top .ui-dropdown-dropdown{bottom:100%;left:50%;transform:translate(-50%);margin-bottom:10px}.ui-dropdown-type-top .ui-dropdown-dropdown:after{content:"▼";position:absolute;bottom:-5px;left:50%;line-height:0;color:#fff}.ui-dropdown-type-top-right .ui-dropdown-dropdown{bottom:100%;right:0;margin-bottom:10px}.ui-dropdown-type-top-right .ui-dropdown-dropdown:after{content:"▼";position:absolute;bottom:-5px;right:20px;line-height:0;color:#fff}.ui-dropdown-type-right-top .ui-dropdown-dropdown{left:100%;top:0;margin-left:10px}.ui-dropdown-type-right-top .ui-dropdown-dropdown:after{content:"◀";position:absolute;top:20px;left:-10px;line-height:0;color:#fff}.ui-dropdown-type-right .ui-dropdown-dropdown{left:100%;top:50%;transform:translateY(-50%);margin-left:10px}.ui-dropdown-type-right .ui-dropdown-dropdown:after{content:"◀";position:absolute;top:50%;left:-10px;line-height:0;color:#fff}.ui-dropdown-type-right-bottom .ui-dropdown-dropdown{left:100%;bottom:0;margin-left:10px}.ui-dropdown-type-right-bottom .ui-dropdown-dropdown:after{content:"◀";position:absolute;bottom:20px;left:-10px;line-height:0;color:#fff}.ui-dropdown-type-bottom-right .ui-dropdown-dropdown{top:100%;right:0;margin-top:10px}.ui-dropdown-type-bottom-right .ui-dropdown-dropdown:after{content:"▲";position:absolute;top:-5px;right:20px;line-height:0;color:#fff}.ui-dropdown-type-bottom .ui-dropdown-dropdown{top:100%;left:50%;transform:translate(-50%);margin-top:10px}.ui-dropdown-type-bottom .ui-dropdown-dropdown:after{content:"▲";position:absolute;top:-5px;left:50%;line-height:0;color:#fff}.ui-dropdown-type-bottom-left .ui-dropdown-dropdown{top:100%;left:0;margin-top:10px}.ui-dropdown-type-bottom-left .ui-dropdown-dropdown:after{content:"▲";position:absolute;top:-5px;left:20px;line-height:0;color:#fff}.ui-dropdown-type-left-bottom .ui-dropdown-dropdown{right:100%;bottom:0;margin-right:10px}.ui-dropdown-type-left-bottom .ui-dropdown-dropdown:after{content:"▶";position:absolute;bottom:20px;right:-10px;line-height:0;color:#fff}.ui-dropdown-type-left .ui-dropdown-dropdown{right:100%;top:50%;transform:translateY(-50%);margin-right:10px}.ui-dropdown-type-left .ui-dropdown-dropdown:after{content:"▶";position:absolute;top:50%;right:-10px;line-height:0;color:#fff}.ui-dropdown-type-left-top .ui-dropdown-dropdown{right:100%;top:0;margin-right:10px}.ui-dropdown-type-left-top .ui-dropdown-dropdown:after{content:"▶";position:absolute;top:20px;right:-10px;line-height:0;color:#fff}',""]),t.exports=r},611:function(t,e,o){"use strict";o.r(e);o(61);var r={props:{type:{default:"bottom"},shown:{default:!1}},watch:{$props:{deep:!0,handler:function(t){this.__preventRecursive||(this.props=JSON.parse(JSON.stringify(t)))}},props:{deep:!0,handler:function(t){var e=this;for(var i in this.__preventRecursive=!0,this.$emit("input",t.value||!1),t)this.$emit("update:".concat(i),t[i]);setTimeout((function(){e.__preventRecursive=!1}),10)}}},data:function(){return{props:JSON.parse(JSON.stringify(this.$props))}},methods:{handleClick:function(t){this.props.shown=this.$el.contains(document.activeElement)}},mounted:function(){document.addEventListener("click",this.handleClick)},beforeDestroy:function(){document.removeEventListener("click",this.handleClick)}},n=(o(605),o(11)),component=Object(n.a)(r,(function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("div",{staticClass:"ui-dropdown d-inline-block",class:"ui-dropdown-type-"+t.type},[t._t("default"),t._v(" "),o("div",{staticClass:"ui-dropdown-dropdown bg-white shadow-sm",class:{"ui-dropdown-dropdown-shown":t.props.shown}},[t._t("dropdown",(function(){return[t._v("\n            Ações\n        ")]}))],2)],2)}),[],!1,null,null,null);e.default=component.exports},612:function(t,e,o){"use strict";o.r(e);var r={props:{value:[Boolean,String,Array,Object],width:{default:"400px"}},watch:{$props:{deep:!0,handler:function(t){this.props=JSON.parse(JSON.stringify(t))}}},data:function(){return{props:JSON.parse(JSON.stringify(this.$props))}},methods:{emitValue:function(){this.$emit("value",this.props.value),this.$emit("input",this.props.value),this.$emit("change",this.props.value),this.props.value?this.$emit("open",this.props.value):this.$emit("close",this.props.value)}}},n=o(11),component=Object(n.a)(r,(function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("div",[o("transition",{attrs:{name:"custom-unique-name","enter-active-class":"animate__animated animate__fadeIn","leave-active-class":"animate__animated animate__fadeOut"}},[t.props.value?o("div",{staticClass:"modal show",staticStyle:{display:"block",background:"#00000044","animation-duration":"200ms"},attrs:{tabindex:"-1"},on:{click:function(e){if(e.target!==e.currentTarget)return null;t.props.value=!1,t.emitValue()}}},[o("div",{staticClass:"modal-dialog",style:"max-width:"+t.width+"!important;"},[o("div",{staticClass:"modal-content"},[o("div",{staticClass:"modal-header"},[t._t("header"),t._v(" "),o("button",{staticClass:"btn-close",attrs:{type:"button"},on:{click:function(e){t.props.value=!1,t.emitValue()}}})],2),t._v(" "),o("div",{staticClass:"modal-body"},[t._t("body")],2),t._v(" "),o("div",{staticClass:"modal-footer"},[t._t("footer")],2)])])]):t._e()])],1)}),[],!1,null,null,null);e.default=component.exports},634:function(t,e,o){"use strict";o.r(e);var r=o(20),n=(o(61),o(25),o(75),o(12),o(98),o(28),o(27),o(604),o(411),{props:{value:{default:""},url:{default:""}},watch:{$props:{deep:!0,handler:function(t){this.__preventRecursive||(this.props=JSON.parse(JSON.stringify(t)))}},props:{deep:!0,handler:function(t){var e=this;for(var i in this.__preventRecursive=!0,this.$emit("input",t.value||!1),t)this.$emit("update:".concat(i),t[i]);setTimeout((function(){e.__preventRecursive=!1}),10)}}},data:function(){return{props:JSON.parse(JSON.stringify(this.$props))}},methods:{photopeaIframeUrl:function(){var t=Object.assign(new URL(location.href),{pathname:this.props.url}).toString().replace(/\?.+/g,"");return"https://www.photopea.com#"+JSON.stringify({files:[t]})},save:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"jpg",e=this.$refs.photopeaIframe.contentWindow;e.postMessage('activeDocument.saveToOE("'.concat(t,'")'),"*")},photopeaIframeCallback:function(t){var e=this;if("object"==Object(r.a)(t.data)){var o=new Blob([t.data],{type:"image/jpeg"}),n=new FileReader;n.readAsDataURL(o),n.onloadend=function(){e.props.value=n.result,e.$forceUpdate()}}}},mounted:function(){window.addEventListener("message",this.photopeaIframeCallback)},beforeDestroy:function(){window.removeEventListener("message",this.photopeaIframeCallback)}}),l=n,d=o(11),component=Object(d.a)(l,(function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("div",{staticStyle:{width:"100%",height:"400px"}},[o("iframe",{ref:"photopeaIframe",staticStyle:{position:"relative",width:"100%",height:"100%",border:"none"},attrs:{src:t.photopeaIframeUrl()}})])}),[],!1,null,null,null);e.default=component.exports},771:function(t,e,o){"use strict";o.r(e);o(61);var r={layout:"admin",middleware:["auth","permission"],head:function(){return{title:"Editar arquivo"}},methods:{photopeaSave:function(){var t=this,e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"jpg";this.$refs.photopea.save(e),setTimeout((function(){t.$router.push({query:{}})}),100)}}},n=r,l=o(11),component=Object(l.a)(n,(function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("ui-model-edit",{attrs:{"model-name":"files","model-id":t.$route.params.id,singular:"Arquivo",plural:"Arquivos"},scopedSlots:t._u([{key:"default",fn:function(e){var r=e.value,n=e.errorFields;return[o("ui-field",{attrs:{label:"Nome",layout:"horizontal",error:n.name}},[o("input",{directives:[{name:"model",rawName:"v-model",value:r.name,expression:"value.name"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:r.name},on:{input:function(e){e.target.composing||t.$set(r,"name",e.target.value)}}})]),t._v(" "),o("ui-field",{attrs:{label:"Pasta",layout:"horizontal",error:n.folder}},[o("input",{directives:[{name:"model",rawName:"v-model",value:r.folder,expression:"value.folder"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:r.folder},on:{input:function(e){e.target.composing||t.$set(r,"folder",e.target.value)}}})]),t._v(" "),o("ui-field",{attrs:{label:"Arquivo",layout:"horizontal"}},[o("ui-file",{model:{value:r.content,callback:function(e){t.$set(r,"content",e)},expression:"value.content"}})],1),t._v(" "),"image"==r.type?o("ui-modal",{attrs:{value:t.$route.query.contentEdit,width:"90vw"},on:{close:function(e){return t.$router.push({query:{}})}},scopedSlots:t._u([{key:"header",fn:function(){return[t._v("Editar")]},proxy:!0},{key:"body",fn:function(){return[o("ui-photopea",{ref:"photopea",staticStyle:{height:"70vh"},attrs:{url:r.url},model:{value:r.content,callback:function(e){t.$set(r,"content",e)},expression:"value.content"}})]},proxy:!0},{key:"footer",fn:function(){return[o("ui-dropdown",{attrs:{type:"top-right"},scopedSlots:t._u([{key:"dropdown",fn:function(){return[o("div",{staticClass:"p-1",staticStyle:{width:"150px"}},[o("button",{staticClass:"btn btn-primary w-100",attrs:{type:"button"},on:{click:function(e){return t.photopeaSave("jpg")}}},[t._v("\n                            JPG\n                        ")]),t._v(" "),o("button",{staticClass:"btn btn-primary w-100 mt-1",attrs:{type:"button"},on:{click:function(e){return t.photopeaSave("png")}}},[t._v("\n                            PNG\n                        ")])])]},proxy:!0}],null,!0)},[o("button",{staticClass:"btn btn-success",attrs:{type:"button"},on:{click:function(e){return t.photopeaSave()}}},[t._v("\n                    Salvar\n                ")])])]},proxy:!0}],null,!0)}):t._e()]}}])})}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{UiField:o(559).default,UiFile:o(595).default,UiPhotopea:o(634).default,UiDropdown:o(611).default,UiModal:o(612).default,UiModelEdit:o(568).default})}}]);