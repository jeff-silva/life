(window.webpackJsonp=window.webpackJsonp||[]).push([[49,20,24,28],{558:function(e,t,r){"use strict";var n=r(14),o=r(3),l=r(4),c=r(136),d=r(21),f=r(16),m=r(407),v=r(52),h=r(135),_=r(408),x=r(5),w=r(95).f,y=r(42).f,N=r(18).f,E=r(409),I=r(560).trim,$="Number",S=o.Number,C=S.prototype,L=o.TypeError,F=l("".slice),O=l("".charCodeAt),j=function(e){var t=_(e,"number");return"bigint"==typeof t?t:k(t)},k=function(e){var t,r,n,o,l,c,d,code,f=_(e,"number");if(h(f))throw L("Cannot convert a Symbol value to a number");if("string"==typeof f&&f.length>2)if(f=I(f),43===(t=O(f,0))||45===t){if(88===(r=O(f,2))||120===r)return NaN}else if(48===t){switch(O(f,1)){case 66:case 98:n=2,o=49;break;case 79:case 111:n=8,o=55;break;default:return+f}for(c=(l=F(f,2)).length,d=0;d<c;d++)if((code=O(l,d))<48||code>o)return NaN;return parseInt(l,n)}return+f};if(c($,!S(" 0o1")||!S("0b1")||S("+0x1"))){for(var A,T=function(e){var t=arguments.length<1?0:S(j(e)),r=this;return v(C,r)&&x((function(){E(r)}))?m(Object(t),r,T):t},P=n?w(S):"MAX_VALUE,MIN_VALUE,NaN,NEGATIVE_INFINITY,POSITIVE_INFINITY,EPSILON,MAX_SAFE_INTEGER,MIN_SAFE_INTEGER,isFinite,isInteger,isNaN,isSafeInteger,parseFloat,parseInt,fromString,range".split(","),M=0;P.length>M;M++)f(S,A=P[M])&&!f(T,A)&&N(T,A,y(S,A));T.prototype=C,C.constructor=T,d(o,$,T)}},559:function(e,t,r){var content=r(566);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[e.i,content,""]]),content.locals&&(e.exports=content.locals);(0,r(63).default)("039c59a2",content,!0,{sourceMap:!1})},560:function(e,t,r){var n=r(4),o=r(26),l=r(15),c=r(561),d=n("".replace),f="["+c+"]",m=RegExp("^"+f+f+"*"),v=RegExp(f+f+"*$"),h=function(e){return function(t){var r=l(o(t));return 1&e&&(r=d(r,m,"")),2&e&&(r=d(r,v,"")),r}};e.exports={start:h(1),end:h(2),trim:h(3)}},561:function(e,t){e.exports="\t\n\v\f\r                　\u2028\u2029\ufeff"},563:function(e,t,r){"use strict";r.r(t);var n=r(20),o=(r(558),r(564),r(191),{props:{label:{default:""},labelWidth:{default:"200px"},info:{default:""},error:[Boolean,Number,String,Array,Object],widthBreakpoint:{default:600}},computed:{_compError:function(){var e=[];return"string"==typeof this.error?e=[this.error]:Array.isArray(this.error)?e=this.error:"object"==Object(n.a)(this.error)&&(e=Object.values(this.error)),e.join("<br>")}},data:function(){return{parentWidth:0,isLarge:!1}},methods:{calculateSizes:function(){this.parentWidth=this.$el.offsetWidth,this.isLarge=this.$el.offsetWidth>=this.widthBreakpoint},resizeEventListener:function(e){this.calculateSizes()}},beforeDestroy:function(){window.removeEventListener("resize",this.resizeEventListener)},mounted:function(){this.calculateSizes(),window.addEventListener("resize",this.resizeEventListener)}}),l=(r(565),r(9)),component=Object(l.a)(o,(function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{staticClass:"ui-field mb-3",class:{"d-flex":e.isLarge,"ui-field-error":e._compError}},[r("div",{class:{"py-2":e.isLarge,"pb-1":!e.isLarge},style:"min-width:"+(e.isLarge?null:e.labelWidth)+"; max-width:"+(e.isLarge?null:e.labelWidth)+";"},[e._t("label",(function(){return[e._v(e._s(e.label))]})),e._v(" "),r("small",{staticClass:"d-block text-muted"},[e._t("info",(function(){return[r("span",{domProps:{innerHTML:e._s(e.info)}})]}))],2)],2),e._v(" "),r("div",{class:{"flex-grow-1":e.isLarge}},[e._t("default"),e._v(" "),e._compError?r("small",{staticClass:"d-block text-danger",domProps:{innerHTML:e._s(e._compError)}}):e._e()],2)])}),[],!1,null,null,null);t.default=component.exports},564:function(e,t,r){var n=r(6),o=r(410).values;n({target:"Object",stat:!0},{values:function(e){return o(e)}})},565:function(e,t,r){"use strict";r(559)},566:function(e,t,r){var n=r(62)(!1);n.push([e.i,".ui-field-error .el-input__inner,.ui-field-error .form-control{border-color:var(--bs-danger);box-shadow:none!important;outline:0!important}",""]),e.exports=n},567:function(e,t,r){"use strict";r.r(t);var n=r(20),o=(r(25),r(192),r(411),r(572),r(12),r(573),r(574),r(575),r(576),r(577),r(578),r(579),r(580),r(581),r(582),r(583),r(584),r(585),r(586),r(587),r(588),r(589),r(590),r(591),r(592),r(593),r(594),r(595),r(596),r(29),{props:{value:[Boolean,Object],method:{default:"get"},action:{default:""},mountedSubmit:{default:!1,type:Boolean},successText:{default:""}},data:function(){return{loading:!1,response:!1,error:!1,errorFields:{}}},methods:{submit:function(){var e=this,t=this.method,r=this.action,data=null,o=null;if("post"==this.method)for(var l in data=new FormData,this.value){var c=this.value[l];if(Array.isArray(c)){if(0==c.length){data.append("".concat(l),"");continue}for(var i in c)data.append("".concat(l,"[]"),c[i]||"")}else if(c&&"object"==Object(n.a)(c)&&c.mime&&c.content){for(var d=c.content.split(","),f=(d[0].match(/:(.*?);/)[1],atob(d[1])),m=f.length,v=new Uint8Array(m);m--;)v[m]=f.charCodeAt(m);data.append(l,new File([v],c.name,{type:c.mime}))}else data.append(l,c||"")}else o=this.value;return this.loading=!0,this.error=!1,this.errorFields={},this.$axios({method:t,url:r,data:data,params:o,headers:{"Content-Type":"multipart/form-data"}}).then((function(t){var r=e.parseResponseData(t.data);e.loading=!1,e.response=r,e.$emit("success",r),e.$emit("response",r),e.successText&&e.$swal.fire(e.successText)})).catch((function(t){var r=e.parseResponseData(t.response.data);e.loading=!1,e.error=r.message,e.errorFields=r.fields,e.$emit("error",r),e.$emit("response",r)}))},parseResponseData:function(e){return["per_page","page"].forEach((function(t){"string"==typeof e[t]&&(e[t]=parseInt(e[t]))})),e}},mounted:function(){this.mountedSubmit&&this.submit()}}),l=r(9),component=Object(l.a)(o,(function(){var e=this,t=e.$createElement;return(e._self._c||t)("form",{attrs:{action:""},on:{submit:function(t){return t.preventDefault(),e.submit()}}},[e._t("default",null,{loading:e.loading,response:e.response,error:e.error,errorFields:e.errorFields})],2)}),[],!1,null,null,null);t.default=component.exports},569:function(e,t,r){var content=r(571);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[e.i,content,""]]),content.locals&&(e.exports=content.locals);(0,r(63).default)("dc996836",content,!0,{sourceMap:!1})},570:function(e,t,r){"use strict";r(569)},571:function(e,t,r){var n=r(62)(!1);n.push([e.i,"@media (max-width:768px){.ui-model-edit-fields{margin-bottom:50px}.ui-model-edit-actions{position:fixed;bottom:0;left:0;width:100%;display:flex}.ui-model-edit-actions>.btn{flex-basis:100%;text-align:center;margin-left:5px;margin-right:5px}}",""]),e.exports=n},597:function(e,t,r){"use strict";r.r(t);var n=r(20),o=(r(558),r(51),r(96),r(412),r(12),{props:{value:{default:function(){return{}},type:[Boolean,Number,String,Object]},modelName:{default:""},modelId:{default:!1,type:[Boolean,Number,String]},singular:{default:"Item"},plural:{default:"Itens"},showActions:{default:!0},redirect:{default:"edit"}},watch:{$props:{deep:!0,handler:function(e){this.__preventRecursive||(this.props=JSON.parse(JSON.stringify(e)))}},props:{deep:!0,handler:function(e){var t=this;for(var i in this.__preventRecursive=!0,e)this.$emit("update:".concat(i),e[i]);setTimeout((function(){t.__preventRecursive=!1}),10)}}},computed:{_modelId:function(){var e=+this.props.modelId;return"object"==Object(n.a)(this.props.value)&&this.props.value.id&&(e=+this.props.value.id),!isNaN(e)&&e}},data:function(){return{finding:!1,backUrl:localStorage.getItem("ui-model-search-".concat(this.modelName,"-url"))||"",props:JSON.parse(JSON.stringify(this.$props))}},methods:{find:function(){var e=this;this._modelId&&(this.finding=!0,this.$axios.get("/api/".concat(this.modelName,"/find/").concat(this._modelId)).then((function(t){e.finding=!1,e.props.value=t.data})))},onSuccess:function(e){var t=this;this.props.value=e,this.$emit("success",e),this.$swal.fire({title:"Dados de ".concat(this.singular," foram salvos"),confirmButtonText:"Lista de ".concat(this.plural),showCancelButton:!0,cancelButtonText:"Fechar"}).then((function(e){e.isConfirmed&&t.$router.push(t.backUrl)})),this.$router.push("/admin/".concat(this.modelName,"/").concat(e.id))},successRedirect:function(){"edit"==this.redirect?this.$router.push("/admin/".concat(this.modelName,"/").concat(this.props.value&&this.props.value.id?this.props.value.id:"new")):"back"==this.redirect?this.$router.go(-1):this.$router.push(this.redirect)}},mounted:function(){this.find()}}),l=(r(570),r(9)),component=Object(l.a)(o,(function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("ui-form",{attrs:{method:"post",action:"/api/"+e.modelName+"/save"},on:{success:e.onSuccess},scopedSlots:e._u([{key:"default",fn:function(t){var n=t.loading,o=t.error,l=t.errorFields;return[r("div",{staticClass:"ui-model-edit-fields bg-white p-3 shadow-sm"},[r("el-collapse-transition",[o?r("div",{staticClass:"alert alert-danger"},[r("a",{staticClass:"float-end text-danger fw-bold",attrs:{href:"javascript:;"},on:{click:function(e){o=!1}}},[r("i",{staticClass:"fas fa-fw fa-times"})]),e._v(" "),r("div",{domProps:{innerHTML:e._s(o)}})]):e._e()]),e._v(" "),e._t("default",null,{value:e.props.value,loading:n,error:o,errorFields:l})],2),e._v(" "),e.showActions?r("div",{staticClass:"ui-model-edit-actions text-end bg-white shadow-sm py-2 mt-md-3 p-md-3"},[e._t("actions"),e._v(" "),e.props.value.id?r("nuxt-link",{staticClass:"btn btn-light",attrs:{to:"/admin/"+e.modelName+"/new"}},[e._v("\n            Criar "+e._s(e.singular)+"\n        ")]):e._e(),e._v(" "),r("nuxt-link",{staticClass:"btn btn-light",attrs:{to:e.backUrl}},[e._v("\n            Voltar\n        ")]),e._v(" "),r("button",{directives:[{name:"loading",rawName:"v-loading",value:n,expression:"loading"}],staticClass:"btn btn-primary",attrs:{type:"submit"}},[e._v("\n            Salvar\n        ")])],2):e._e()]}}],null,!0),model:{value:e.props.value,callback:function(t){e.$set(e.props,"value",t)},expression:"props.value"}})}),[],!1,null,null,null);t.default=component.exports;installComponents(component,{UiForm:r(567).default})},775:function(e,t,r){"use strict";r.r(t);var n={layout:"admin",middleware:["auth","permission"],head:function(){return{title:"Editar"}}},o=r(9),component=Object(o.a)(n,(function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("ui-model-edit",{attrs:{"model-name":"life-worlds","model-id":e.$route.params.id,singular:"Item",plural:"Itens"},scopedSlots:e._u([{key:"default",fn:function(t){var n=t.value,o=t.errorFields;return[r("ui-field",{attrs:{label:"Nome",error:o.name}},[r("input",{directives:[{name:"model",rawName:"v-model",value:n.name,expression:"value.name"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:n.name},on:{input:function(t){t.target.composing||e.$set(n,"name",t.target.value)}}})]),e._v(" "),r("ui-field",{attrs:{label:"Quanto dura um ano neste mundo?",error:o.year_seconds}},[r("select",{directives:[{name:"model",rawName:"v-model",value:n.year_seconds,expression:"value.year_seconds"}],staticClass:"form-control",on:{change:function(t){var r=Array.prototype.filter.call(t.target.options,(function(e){return e.selected})).map((function(e){return"_value"in e?e._value:e.value}));e.$set(n,"year_seconds",t.target.multiple?r:r[0])}}},[r("option",{attrs:{value:""}},[e._v("Selecione")]),e._v(" "),r("option",{domProps:{value:60}},[e._v("1 minuto")]),e._v(" "),r("option",{domProps:{value:300}},[e._v("5 minutos")]),e._v(" "),r("option",{domProps:{value:600}},[e._v("10 minutos")]),e._v(" "),r("option",{domProps:{value:1800}},[e._v("30 minutos")]),e._v(" "),r("option",{domProps:{value:3600}},[e._v("1 hora")]),e._v(" "),r("option",{domProps:{value:7200}},[e._v("2 horas")]),e._v(" "),r("option",{domProps:{value:86400}},[e._v("1 dia")]),e._v(" "),r("option",{domProps:{value:604800}},[e._v("1 semana")]),e._v(" "),r("option",{domProps:{value:2592e3}},[e._v("30 dias")])])])]}}])})}),[],!1,null,null,null);t.default=component.exports;installComponents(component,{UiField:r(563).default,UiModelEdit:r(597).default})}}]);