(window.webpackJsonp=window.webpackJsonp||[]).push([[11,19,22,28],{550:function(e,t,r){var content=r(558);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[e.i,content,""]]),content.locals&&(e.exports=content.locals);(0,r(75).default)("039c59a2",content,!0,{sourceMap:!1})},552:function(e,t,r){"use strict";var o=r(13),n=r(3),l=r(4),c=r(135),d=r(20),f=r(16),h=r(405),m=r(48),v=r(134),_=r(404),w=r(5),x=r(93).f,y=r(40).f,N=r(18).f,E=r(406),$=r(554).trim,S="Number",I=n.Number,C=I.prototype,A=n.TypeError,O=l("".slice),k=l("".charCodeAt),F=function(e){var t=_(e,"number");return"bigint"==typeof t?t:j(t)},j=function(e){var t,r,o,n,l,c,d,code,f=_(e,"number");if(v(f))throw A("Cannot convert a Symbol value to a number");if("string"==typeof f&&f.length>2)if(f=$(f),43===(t=k(f,0))||45===t){if(88===(r=k(f,2))||120===r)return NaN}else if(48===t){switch(k(f,1)){case 66:case 98:o=2,n=49;break;case 79:case 111:o=8,n=55;break;default:return+f}for(c=(l=O(f,2)).length,d=0;d<c;d++)if((code=k(l,d))<48||code>n)return NaN;return parseInt(l,o)}return+f};if(c(S,!I(" 0o1")||!I("0b1")||I("+0x1"))){for(var T,B=function(e){var t=arguments.length<1?0:I(F(e)),r=this;return m(C,r)&&w((function(){E(r)}))?h(Object(t),r,B):t},R=o?x(I):"MAX_VALUE,MIN_VALUE,NaN,NEGATIVE_INFINITY,POSITIVE_INFINITY,EPSILON,MAX_SAFE_INTEGER,MIN_SAFE_INTEGER,isFinite,isInteger,isNaN,isSafeInteger,parseFloat,parseInt,fromString,range".split(","),z=0;R.length>z;z++)f(I,T=R[z])&&!f(B,T)&&N(B,T,y(I,T));B.prototype=C,C.constructor=B,d(n,S,B)}},553:function(e,t,r){"use strict";r.r(t);var o=r(21),n=(r(552),r(556),r(190),{props:{label:{default:""},labelWidth:{default:"200px"},error:[Boolean,Number,String,Array,Object]},computed:{_compError:function(){var e=[];return"string"==typeof this.error?e=[this.error]:Array.isArray(this.error)?e=this.error:"object"==Object(o.a)(this.error)&&(e=Object.values(this.error)),e.join("<br>")}},data:function(){return{width:0,widthBig:!1}},methods:{calculateSizes:function(){this.width=this.$el.offsetWidth,this.widthBig=this.$el.offsetWidth>=600},resizeEventListener:function(e){this.calculateSizes()}},beforeDestroy:function(){window.removeEventListener("resize",this.resizeEventListener)},mounted:function(){this.calculateSizes(),window.addEventListener("resize",this.resizeEventListener)}}),l=(r(557),r(14)),component=Object(l.a)(n,(function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{staticClass:"ui-field mb-3",class:{"d-flex":e.widthBig,"ui-field-error":e._compError}},[r("div",{class:{"py-2":e.widthBig,"pb-1":!e.widthBig},style:"min-width:"+(e.widthBig?null:e.labelWidth)+"; max-width:"+(e.widthBig?null:e.labelWidth)+";"},[e._t("label",(function(){return[e._v(e._s(e.label))]}))],2),e._v(" "),r("div",{class:{"flex-grow-1":e.widthBig}},[e._t("default"),e._v(" "),e._compError?r("small",{staticClass:"d-block text-danger",domProps:{innerHTML:e._s(e._compError)}}):e._e()],2)])}),[],!1,null,null,null);t.default=component.exports},554:function(e,t,r){var o=r(4),n=r(25),l=r(15),c=r(555),d=o("".replace),f="["+c+"]",h=RegExp("^"+f+f+"*"),m=RegExp(f+f+"*$"),v=function(e){return function(t){var r=l(n(t));return 1&e&&(r=d(r,h,"")),2&e&&(r=d(r,m,"")),r}};e.exports={start:v(1),end:v(2),trim:v(3)}},555:function(e,t){e.exports="\t\n\v\f\r                　\u2028\u2029\ufeff"},556:function(e,t,r){var o=r(6),n=r(407).values;o({target:"Object",stat:!0},{values:function(e){return n(e)}})},557:function(e,t,r){"use strict";r(550)},558:function(e,t,r){var o=r(74)(!1);o.push([e.i,".ui-field>*{transition:all .3s ease}.ui-field-error .el-input__inner,.ui-field-error .form-control{border-color:var(--bs-danger);box-shadow:none!important;outline:0!important}",""]),e.exports=o},559:function(e,t,r){"use strict";r.r(t);r(12);var o={props:{value:[Boolean,Object],method:{default:"get"},action:{default:""},mountedSubmit:{default:!1,type:Boolean},successText:{default:""}},data:function(){return{loading:!1,response:!1,error:!1,errorFields:{}}},methods:{submit:function(){var e=this;return this.loading=!0,this.error=!1,this.errorFields={},this.$axios({method:this.method,url:this.action,data:"get"!=this.method?this.value:null,params:"get"==this.method?this.value:null}).then((function(t){var r=e.parseResponseData(t.data);e.loading=!1,e.response=r,e.$emit("success",r),e.$emit("response",r),e.successText&&e.$swal.fire(e.successText)})).catch((function(t){var r=e.parseResponseData(t.response.data);e.loading=!1,e.error=r.message,e.errorFields=r.fields,e.$emit("error",r),e.$emit("response",r)}))},parseResponseData:function(e){return["per_page","page"].forEach((function(t){"string"==typeof e[t]&&(e[t]=parseInt(e[t]))})),e}},mounted:function(){this.mountedSubmit&&this.submit()}},n=r(14),component=Object(n.a)(o,(function(){var e=this,t=e.$createElement;return(e._self._c||t)("form",{attrs:{action:""},on:{submit:function(t){return t.preventDefault(),e.submit()}}},[e._t("default",null,{loading:e.loading,response:e.response,error:e.error,errorFields:e.errorFields})],2)}),[],!1,null,null,null);t.default=component.exports},561:function(e,t,r){"use strict";r.r(t);r(61);var o={props:{value:{default:""},show:{default:!1},placeholder:{default:""}},watch:{$props:{deep:!0,handler:function(e){this.__preventRecursive||(this.props=JSON.parse(JSON.stringify(e)))}},props:{deep:!0,handler:function(e){var t=this;for(var i in this.__preventRecursive=!0,this.$emit("input",e.value||!1),e)this.$emit("update:".concat(i),e[i]);setTimeout((function(){t.__preventRecursive=!1}),10)}}},data:function(){return{props:JSON.parse(JSON.stringify(this.$props))}}},n=r(14),component=Object(n.a)(o,(function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{staticClass:"input-group form-control p-0"},["checkbox"==(e.props.show?"text":"password")?r("input",{directives:[{name:"model",rawName:"v-model",value:e.props.value,expression:"props.value"}],staticClass:"form-control border-0",attrs:{placeholder:e.props.placeholder,type:"checkbox"},domProps:{checked:Array.isArray(e.props.value)?e._i(e.props.value,null)>-1:e.props.value},on:{change:function(t){var r=e.props.value,o=t.target,n=!!o.checked;if(Array.isArray(r)){var l=e._i(r,null);o.checked?l<0&&e.$set(e.props,"value",r.concat([null])):l>-1&&e.$set(e.props,"value",r.slice(0,l).concat(r.slice(l+1)))}else e.$set(e.props,"value",n)}}}):"radio"==(e.props.show?"text":"password")?r("input",{directives:[{name:"model",rawName:"v-model",value:e.props.value,expression:"props.value"}],staticClass:"form-control border-0",attrs:{placeholder:e.props.placeholder,type:"radio"},domProps:{checked:e._q(e.props.value,null)},on:{change:function(t){return e.$set(e.props,"value",null)}}}):r("input",{directives:[{name:"model",rawName:"v-model",value:e.props.value,expression:"props.value"}],staticClass:"form-control border-0",attrs:{placeholder:e.props.placeholder,type:e.props.show?"text":"password"},domProps:{value:e.props.value},on:{input:function(t){t.target.composing||e.$set(e.props,"value",t.target.value)}}}),e._v(" "),r("div",{staticClass:"input-group-btn"},[r("button",{staticClass:"btn",attrs:{type:"button"},on:{click:function(t){e.props.show=!e.props.show}}},[e.props.show?r("i",{staticClass:"fas fa-eye"}):r("i",{staticClass:"fas fa-eye-slash"})])])])}),[],!1,null,null,null);t.default=component.exports},593:function(e,t,r){"use strict";r.r(t);var o={data:function(){return{loading:!1,post:{}}},methods:{submit:function(){var e=this;this.loading=!0,this.$axios.post("/api/register",this.post).then((function(t){e.loading=!1})).catch((function(t){e.loading=!1}))}}},n=r(14),component=Object(n.a)(o,(function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",[r("ui-form",{attrs:{method:"post",action:"/api/auth/register"},on:{success:function(t){e.post={}}},scopedSlots:e._u([{key:"default",fn:function(t){var o=t.loading,n=t.response,l=t.errorFields;return[n?r("div",{staticClass:"alert alert-success"},[e._v("\n            Seu registro foi concluído. Agora é só fazer login :)\n        ")]):e._e(),e._v(" "),e._t("fields",(function(){return[r("ui-field",{attrs:{label:"Nome",error:l.name}},[r("input",{directives:[{name:"model",rawName:"v-model",value:e.post.name,expression:"post.name"}],staticClass:"form-control",attrs:{type:"text",placeholder:"Name"},domProps:{value:e.post.name},on:{input:function(t){t.target.composing||e.$set(e.post,"name",t.target.value)}}})]),e._v(" "),r("ui-field",{attrs:{label:"E-mail",error:l.email}},[r("input",{directives:[{name:"model",rawName:"v-model",value:e.post.email,expression:"post.email"}],staticClass:"form-control",attrs:{type:"text",placeholder:"E-mail"},domProps:{value:e.post.email},on:{input:function(t){t.target.composing||e.$set(e.post,"email",t.target.value)}}})]),e._v(" "),r("ui-field",{attrs:{label:"Senha",error:l.password}},[r("ui-password",{attrs:{placeholder:"Senha"},model:{value:e.post.password,callback:function(t){e.$set(e.post,"password",t)},expression:"post.password"}})],1)]})),e._v(" "),e._t("action",(function(){return[r("button",{directives:[{name:"loading",rawName:"v-loading",value:o,expression:"loading"}],staticClass:"btn btn-primary w-100",attrs:{type:"submit",disabled:o}},[e._v("\n                Cadastrar\n            ")])]}))]}}],null,!0),model:{value:e.post,callback:function(t){e.post=t},expression:"post"}})],1)}),[],!1,null,null,null);t.default=component.exports;installComponents(component,{UiField:r(553).default,UiPassword:r(561).default,UiForm:r(559).default})}}]);