(window.webpackJsonp=window.webpackJsonp||[]).push([[35,13,21,22,23,24,33,36,37,38,39,40],{554:function(t,e,r){"use strict";var n=r(14),o=r(3),l=r(4),c=r(136),d=r(21),v=r(16),f=r(405),h=r(51),m=r(135),_=r(406),y=r(5),x=r(95).f,w=r(42).f,$=r(18).f,C=r(407),O=r(556).trim,S="Number",E=o.Number,N=E.prototype,k=o.TypeError,j=l("".slice),F=l("".charCodeAt),U=function(t){var e=_(t,"number");return"bigint"==typeof e?e:I(e)},I=function(t){var e,r,n,o,l,c,d,code,v=_(t,"number");if(m(v))throw k("Cannot convert a Symbol value to a number");if("string"==typeof v&&v.length>2)if(v=O(v),43===(e=F(v,0))||45===e){if(88===(r=F(v,2))||120===r)return NaN}else if(48===e){switch(F(v,1)){case 66:case 98:n=2,o=49;break;case 79:case 111:n=8,o=55;break;default:return+v}for(c=(l=j(v,2)).length,d=0;d<c;d++)if((code=F(l,d))<48||code>o)return NaN;return parseInt(l,n)}return+v};if(c(S,!E(" 0o1")||!E("0b1")||E("+0x1"))){for(var A,z=function(t){var e=arguments.length<1?0:E(U(t)),r=this;return h(N,r)&&y((function(){C(r)}))?f(Object(e),r,z):e},L=n?x(E):"MAX_VALUE,MIN_VALUE,NaN,NEGATIVE_INFINITY,POSITIVE_INFINITY,EPSILON,MAX_SAFE_INTEGER,MIN_SAFE_INTEGER,isFinite,isInteger,isNaN,isSafeInteger,parseFloat,parseInt,fromString,range".split(","),R=0;L.length>R;R++)v(E,A=L[R])&&!v(z,A)&&$(z,A,w(E,A));z.prototype=N,N.constructor=z,d(o,S,z)}},555:function(t,e,r){var content=r(562);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[t.i,content,""]]),content.locals&&(t.exports=content.locals);(0,r(74).default)("039c59a2",content,!0,{sourceMap:!1})},556:function(t,e,r){var n=r(4),o=r(26),l=r(15),c=r(557),d=n("".replace),v="["+c+"]",f=RegExp("^"+v+v+"*"),h=RegExp(v+v+"*$"),m=function(t){return function(e){var r=l(o(e));return 1&t&&(r=d(r,f,"")),2&t&&(r=d(r,h,"")),r}};t.exports={start:m(1),end:m(2),trim:m(3)}},557:function(t,e){t.exports="\t\n\v\f\r                　\u2028\u2029\ufeff"},559:function(t,e,r){"use strict";r.r(e);var n=r(20),o=(r(554),r(560),r(191),{props:{label:{default:""},labelWidth:{default:"200px"},info:{default:""},error:[Boolean,Number,String,Array,Object],widthBreakpoint:{default:600}},computed:{_compError:function(){var t=[];return"string"==typeof this.error?t=[this.error]:Array.isArray(this.error)?t=this.error:"object"==Object(n.a)(this.error)&&(t=Object.values(this.error)),t.join("<br>")}},data:function(){return{parentWidth:0,isLarge:!1}},methods:{calculateSizes:function(){this.parentWidth=this.$el.offsetWidth,this.isLarge=this.$el.offsetWidth>=this.widthBreakpoint},resizeEventListener:function(t){this.calculateSizes()}},beforeDestroy:function(){window.removeEventListener("resize",this.resizeEventListener)},mounted:function(){this.calculateSizes(),window.addEventListener("resize",this.resizeEventListener)}}),l=(r(561),r(11)),component=Object(l.a)(o,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"ui-field mb-3",class:{"d-flex":t.isLarge,"ui-field-error":t._compError}},[r("div",{class:{"py-2":t.isLarge,"pb-1":!t.isLarge},style:"min-width:"+(t.isLarge?null:t.labelWidth)+"; max-width:"+(t.isLarge?null:t.labelWidth)+";"},[t._t("label",(function(){return[t._v(t._s(t.label))]})),t._v(" "),r("small",{staticClass:"d-block text-muted"},[t._t("info",(function(){return[r("span",{domProps:{innerHTML:t._s(t.info)}})]}))],2)],2),t._v(" "),r("div",{class:{"flex-grow-1":t.isLarge}},[t._t("default"),t._v(" "),t._compError?r("small",{staticClass:"d-block text-danger",domProps:{innerHTML:t._s(t._compError)}}):t._e()],2)])}),[],!1,null,null,null);e.default=component.exports},560:function(t,e,r){var n=r(6),o=r(408).values;n({target:"Object",stat:!0},{values:function(t){return o(t)}})},561:function(t,e,r){"use strict";r(555)},562:function(t,e,r){var n=r(73)(!1);n.push([t.i,".ui-field-error .el-input__inner,.ui-field-error .form-control{border-color:var(--bs-danger);box-shadow:none!important;outline:0!important}",""]),t.exports=n},594:function(t,e,r){"use strict";r.r(e);r(61);var n=r(598),o={props:{value:[Boolean,String],language:{default:"html"},theme:{default:"vs-dark"}},data:function(){return{props:JSON.parse(JSON.stringify(this.$props)),monaco:!1}},watch:{$props:{deep:!0,handler:function(t){this.__preventRecursive||(this.props=JSON.parse(JSON.stringify(t)),this.setValue(this.props.value||""))}},props:{deep:!0,handler:function(t){var e=this;for(var i in this.__preventRecursive=!0,this.$emit("input",t.value||!1),t)this.$emit("update:".concat(i),t[i]);setTimeout((function(){e.__preventRecursive=!1}),10)}}},methods:{monacoInit:function(){var t=this;setTimeout((function(){var e=t.$refs.monaco;t.monaco=n.a.create(e,{value:t.props.value||"",language:t.props.language,theme:t.props.theme,automaticLayout:!0}),t.monaco.getModel().onDidChangeContent((function(e){t.props.value=t.monaco.getModel().getValue()})),t.monaco.getModel().setValue(t.props.value)}),100)},setValue:function(t){this.$el.contains(document.activeElement)||this.monaco.getModel().setValue(t)},getValue:function(){return this.props.value=this.monaco.getModel().getValue()},resizeHandler:function(){this.monaco.layout({width:0})}},mounted:function(){this.monacoInit(),window.addEventListener("resize",this.resizeHandler)},beforeDestroy:function(){window.removeEventListener("resize",this.resizeHandler)}},l=r(11),component=Object(l.a)(o,(function(){var t=this.$createElement;return(this._self._c||t)("div",{ref:"monaco",staticStyle:{width:"100%",height:"150px"}})}),[],!1,null,null,null);e.default=component.exports},595:function(t,e,r){"use strict";r.r(e);r(61),r(25),r(75),r(29),r(192);var n={props:{value:{default:!1,type:[Boolean,Object]},folder:{default:""},preview:{default:!0},previewHeight:{default:"200px"}},watch:{$props:{deep:!0,handler:function(t){this.__preventRecursive||(this.props=JSON.parse(JSON.stringify(t)))}},props:{deep:!0,handler:function(t){var e=this;for(var i in this.__preventRecursive=!0,this.$emit("input",t.value||!1),t)this.$emit("update:".concat(i),t[i]);setTimeout((function(){e.__preventRecursive=!1}),10)}}},data:function(){return{props:JSON.parse(JSON.stringify(this.$props))}},methods:{fileBrowser:function(){var t=this;Object.assign(document.createElement("input"),{type:"file",onchange:function(e){t.fileGet(e.target.files[0])}}).click()},fileGet:function(t){var e=this,r=new FileReader;r.readAsDataURL(t),r.onload=function(){e.props.value={name:t.name.replace(/(.+)\.[a-zA-Z0-9]{2,}$/g,"$1"),folder:e.props.folder,size:t.size,mime:t.type,type:t.type.split("/").shift(),ext:t.name.split(".").pop(),content:r.result},e.$emit("input",e.props.value),e.$emit("file-get",t)}},fileClear:function(){this.props.value=!1,this.$emit("file-clear",!1)}}},o=n,l=r(11),component=Object(l.a)(o,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"ui-file",on:{dragover:function(t){t.preventDefault()},drop:function(e){return e.preventDefault(),t.fileGet(e.dataTransfer.files[0])}}},[r("div",{staticClass:"d-flex align-items-center"},[t.props.value?t._e():r("div",{staticClass:"flex-grow-1"},[r("button",{staticClass:"btn btn-light w-100",attrs:{type:"button"},on:{click:function(e){return t.fileBrowser()}}},[t.props.value?r("div",[t._v(t._s(t.props.value.name))]):r("div",[t._v("Browse")])])]),t._v(" "),t.props.value?r("div",{staticClass:"flex-grow-1"},[r("input",{directives:[{name:"model",rawName:"v-model",value:t.props.value.name,expression:"props.value.name"}],staticClass:"form-control",attrs:{type:"text"},domProps:{value:t.props.value.name},on:{input:function(e){e.target.composing||t.$set(t.props.value,"name",e.target.value)}}})]):t._e(),t._v(" "),t.props.value?r("div",{staticClass:"ms-2"},[r("button",{staticClass:"btn btn-light w-100",attrs:{type:"button"},on:{click:function(e){return t.fileClear()}}},[r("i",{staticClass:"fas fa-fw fa-times"})])]):t._e(),t._v(" "),t._t("actions")],2),t._v(" "),t.props.preview?r("div",{staticClass:"bg-light mt-2 d-flex align-items-center justify-content-center",style:"height:calc("+t.previewHeight+" + 30px);"},[t._t("preview",(function(){return[t.props.value&&t.props.value.type.includes("image")?r("div",[r("img",{style:"height:"+t.previewHeight+"; max-width:300px; object-fit:cover;",attrs:{src:t.props.value.content,alt:""}}),t._v(" "),r("small",{staticClass:"d-block text-center"},[t._v(t._s(t._f("fileSize")(t.props.value.size)))])]):t.props.value?r("div",[r("div",{staticStyle:{"font-size":"40px","line-height":"35px","text-transform":"uppercase"}},[t._v(t._s(t.props.value.ext))]),t._v(" "),r("small",{staticClass:"d-block text-center"},[t._v(t._s(t._f("fileSize")(t.props.value.size)))])]):r("div",[t._v("Arraste o arquivo aqui")])]}),{value:t.props.value,previewHeight:t.previewHeight})],2):t._e()])}),[],!1,null,null,null);e.default=component.exports},601:function(t,e,r){"use strict";r.r(e);r(61);var n=function(t,e,r){if(!e.hasOwnProperty(r)){var n=Object.getOwnPropertyDescriptor(t,r);Object.defineProperty(e,r,n)}},o={components:{VRuntimeTemplate:{props:{template:String,parent:Object,templateProps:{type:Object,default:function(){return{}}}},render:function(t){if(this.template){var e=this.parent||this.$parent,r=e.$data;void 0===r&&(r={});var o=e.$props;void 0===o&&(o={});var a=e.$options;void 0===a&&(a={});var p=a.components;void 0===p&&(p={});var l=a.computed;void 0===l&&(l={});var i=a.methods;void 0===i&&(i={});var s=this.$data;void 0===s&&(s={});var c=this.$props;void 0===c&&(c={});var d=this.$options;void 0===d&&(d={});var v=d.methods;void 0===v&&(v={});var f=d.computed;void 0===f&&(f={});var u=d.components;void 0===u&&(u={});var h={$data:{},$props:{},$options:{},components:{},computed:{},methods:{}};Object.keys(r).forEach((function(t){void 0===s[t]&&(h.$data[t]=r[t])})),Object.keys(o).forEach((function(t){void 0===c[t]&&(h.$props[t]=o[t])})),Object.keys(i).forEach((function(t){void 0===v[t]&&(h.methods[t]=i[t])})),Object.keys(l).forEach((function(t){void 0===f[t]&&(h.computed[t]=l[t])})),Object.keys(p).forEach((function(t){void 0===u[t]&&(h.components[t]=p[t])}));var m=Object.keys(h.methods||{}),_=Object.keys(h.$data||{}),b=Object.keys(h.$props||{}),y=Object.keys(this.templateProps),x=_.concat(b).concat(m).concat(y),w=(C=e,O={},m.forEach((function(t){return n(C,O,t)})),O),$=function(t){var e={};return t.forEach((function(t){t&&Object.getOwnPropertyNames(t).forEach((function(r){return n(t,e,r)}))})),e}([h.$data,h.$props,w,this.templateProps]);return t({template:this.template||"<div></div>",props:x,computed:h.computed,components:h.components,provide:this.$parent._provided},{props:$})}var C,O}}},props:{value:{default:""},height:{default:"300px"}},watch:{$props:{deep:!0,handler:function(t){this.__preventRecursive||(this.props=JSON.parse(JSON.stringify(t)))}},props:{deep:!0,handler:function(t){var e=this;for(var i in this.__preventRecursive=!0,this.$emit("input",t.value||!1),t)this.$emit("update:".concat(i),t[i]);setTimeout((function(){e.__preventRecursive=!1}),10)}}},data:function(){return{props:JSON.parse(JSON.stringify(this.$props))}}},l=r(11),component=Object(l.a)(o,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"ui-playground shadow-sm"},[r("div",{staticClass:"row g-0"},[r("div",{staticClass:"col-6 border p-2 bg-light",style:"height:"+t.height+";"},[r("v-runtime-template",{attrs:{template:t.props.value}})],1),t._v(" "),r("div",{staticClass:"col-6"},[r("ui-code",{style:"height:"+t.height+";",attrs:{language:"html"},model:{value:t.props.value,callback:function(e){t.$set(t.props,"value",e)},expression:"props.value"}})],1)])])}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{UiCode:r(594).default})},602:function(t,e,r){"use strict";r.r(e);r(554),r(61);var n={props:{value:{default:!1,type:[Boolean,Number,String]},file:{default:!1,type:[Boolean,Object]}},watch:{$props:{deep:!0,handler:function(t){this.__preventRecursive||(this.props=JSON.parse(JSON.stringify(t)),this.fileFind())}},props:{deep:!0,handler:function(t){var e=this;for(var i in this.__preventRecursive=!0,this.$emit("input",t.value||!1),t)this.$emit("update:".concat(i),t[i]);setTimeout((function(){e.__preventRecursive=!1}),10)}}},data:function(){return{fileUpload:!1,props:JSON.parse(JSON.stringify(this.$props))}},methods:{fileFind:function(){var t=this;+this.props.value&&!this.props.file&&this.$axios.get("/api/files/find/".concat(this.props.value)).then((function(e){t.props.file=e.data}))},upload:function(){var t=this;if(this.fileUpload){var data=new FormData;data.append("content",this.fileUpload),this.$axios.post("/api/files/save",data).then((function(e){t.props.value=e.data.id,t.props.file=e.data,t.fileUpload=!1}))}}},mounted:function(){this.fileFind()}},o=r(11),component=Object(o.a)(n,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("ui-file",{on:{"file-get":function(e){t.fileUpload=e},"file-clear":function(e){t.fileUpload=!1}},scopedSlots:t._u([t.fileUpload?{key:"actions",fn:function(){return[r("div",{staticClass:"ms-2"},[r("button",{staticClass:"btn btn-success",attrs:{type:"button"},on:{click:function(e){return t.upload()}}},[r("i",{staticClass:"fas fa-fw fa-upload"})])])]},proxy:!0}:null,t.props.file?{key:"preview",fn:function(e){e.value;var n=e.previewHeight;return[t.props.file&&"image"==t.props.file.type?r("div",[r("img",{style:"height:"+n+"; max-width:300px; object-fit:cover;",attrs:{src:t.props.file.url,alt:""}})]):r("div",{staticStyle:{"font-size":"30px","text-transform":"uppercase"}},[t._v(t._s(t.props.file.ext))])]}}:null],null,!0)})}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{UiFile:r(595).default})},610:function(t,e,r){"use strict";r.r(e);r(554),r(61),r(25),r(193),r(43),r(12),r(412),r(36);var n={props:{value:{default:!1,type:[Boolean,Number,String,Array,Object]},multiple:{default:!1},selectField:{default:!1,type:[Boolean,String]}},watch:{$props:{deep:!0,handler:function(t){this.__preventRecursive||(this.props=JSON.parse(JSON.stringify(t)))}},props:{deep:!0,handler:function(t){var e=this;for(var i in this.__preventRecursive=!0,this.$emit("input",t.value||!1),t)this.$emit("update:".concat(i),t[i]);setTimeout((function(){e.__preventRecursive=!1}),10)}}},data:function(){return{file:!1,search:{loading:!1,params:{q:"",folder:""},resp:!1},props:JSON.parse(JSON.stringify(this.$props))}},methods:{fileSearch:function(){var t=this,e=this.search.params;this.$axios.get("/api/files/search/",{params:e}).then((function(e){t.search.resp=e.data}))},fileSelected:function(t){if(this.props.multiple){var e=this.props.value||[];if(Array.isArray(e)||(e=e?[e]:[]),this.props.selectField){var r=t[this.props.selectField]||!1;return e.indexOf(r)>=0}return e.filter((function(e){return e.id==t.id})).length>0}if(this.props.selectField){var n=t[this.props.selectField]||!1;return this.props.value==n}return this.props.value&&this.props.value.id==t.id},selectToggle:function(t){if(this.props.multiple){var e=this.props.value||[];if(Array.isArray(e)||(e=e?[e]:[]),this.props.selectField){var r=t[this.props.selectField]||!1,n=e.indexOf(r);n>=0?e.splice(n,1):e.push(r)}else{var o=-1;e.forEach((function(e,r){e.id==t.id&&(o=r)})),o>=0?e.splice(o,1):e.push(t)}this.props.value=e}else this.props.selectField?this.props.value==t[this.props.selectField]?this.props.value=!1:this.props.value=t[this.props.selectField]:this.props.value&&this.props.value.id==t.id?this.props.value=!1:this.props.value=t;console.log(this.props.value),this.$emit("input",this.props.value)}},mounted:function(){this.fileSearch()}},o=r(11),component=Object(o.a)(n,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"d-flex border shadow-sm"},[r("div",{staticClass:"border-end p-2 bg-light",staticStyle:{"min-width":"200px","max-width":"200px"}},[r("div",{staticClass:"fw-bold mb-2"},[t._v("Pastas")]),t._v(" "),t.search.resp?r("div",{staticClass:"list-group list-group-flush"},t._l(t.search.resp.folders,(function(e){return r("a",{staticClass:"list-group-item p-2",attrs:{href:"javascript:;"},on:{click:function(r){t.search.params.folder=e.name,t.fileSearch()}}},[t._v("\n                /"+t._s(e.name||".")+"\n            ")])})),0):t._e()]),t._v(" "),r("div",{staticClass:"flex-grow-1"},[r("div",{staticClass:"bg-light p-2 border-bottom"},[t._v("\n            /"+t._s(t.search.params.folder||".")+"\n        ")]),t._v(" "),t.search.resp?r("div",{staticClass:"bg-white p-1",staticStyle:{"max-height":"400px",overflow:"auto"}},[0==t.search.resp.data.length?r("div",{staticClass:"bg-light py-5 m-2 text-center"},[t._v("\n                Nenhum arquivo\n            ")]):t._e(),t._v(" "),t._l(t.search.resp.data,(function(e){return r("div",{staticClass:"d-inline-block m-2"},[r("div",{staticClass:"border p-3",class:{"border-primary":t.fileSelected(e)},staticStyle:{position:"relative",width:"150px",height:"150px",cursor:"pointer"},on:{click:function(r){return t.selectToggle(e)}}},["image"==e.type?r("img",{staticStyle:{width:"100%",height:"100%","object-fit":"cover"},attrs:{src:e.url,alt:""}}):r("div",{staticStyle:{width:"100%",height:"100%"}},[r("div",[t._v(t._s(e.ext))]),t._v(" "),r("div",[t._v("/"+t._s(e.folder))]),t._v(" "),r("div",[t._v(t._s(t._f("fileSize")(e.size)))])])])])}))],2):t._e()])])}),[],!1,null,null,null);e.default=component.exports},627:function(t,e,r){"use strict";r.r(e);var n={head:function(){return{title:"Endpoints"}},data:function(){return{endpoints:[]}},methods:{endpointsList:function(){var t=this;this.$axios.get("/api/app/endpoints").then((function(e){t.endpoints=e.data}))}},mounted:function(){this.endpointsList()}},o=r(11),component=Object(o.a)(n,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("table",{staticClass:"table"},[t._m(0),t._v(" "),r("tbody",t._l(t.endpoints,(function(e,i){return r("tr",[r("td",[t._v(t._s(i))]),t._v(" "),r("td",[t._v(t._s(e.methods.join(" | ")))]),t._v(" "),r("td",[r("div",[t._v(t._s(e.uri))]),t._v(" "),e.name?r("div",{staticClass:"text-muted"},[t._v("name: "+t._s(e.name))]):t._e()]),t._v(" "),r("td",[t._v(t._s(e.parameterNames.join(" | ")))])])})),0)])])}),[function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("thead",[r("tr",[r("th",{attrs:{width:"50px"}}),t._v(" "),r("th",{attrs:{width:"150px"}},[t._v("Métodos")]),t._v(" "),r("th",[t._v("URI")]),t._v(" "),r("th",[t._v("Parâmetros")])])])}],!1,null,null,null);e.default=component.exports},628:function(t,e,r){"use strict";r.r(e);var n={head:function(){return{title:"Principal"}}},o=r(11),component=Object(o.a)(n,(function(){var t=this,e=t.$createElement;t._self._c;return t._m(0)}),[function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("h3",[t._v("Instalação")]),t._v(" "),r("pre",{staticClass:"bg-dark p-2 m-0 text-white"},[t._v("composer install"),r("br"),t._v("npm install"),r("br"),t._v("php artisan app:install")]),t._v(" "),r("br"),t._v(" "),r("h3",[t._v("Criar uma tabela")]),t._v(" "),r("pre",{staticClass:"bg-dark p-2 m-0 text-white"},[t._v("php artisan app:table-generate")]),t._v(" "),r("p",[t._v("Após executar o comando, informe o nome da tabela para o banco.")]),t._v(" "),r("br")])}],!1,null,null,null);e.default=component.exports},629:function(t,e,r){"use strict";r.r(e);r(191);var n={head:function(){return{title:"Checks"}},data:function(){return{colorUse:!1,bind:{color:"red"}}},computed:{_code:function(){var t=this.colorUse?"--color: ".concat(this.bind.color):"";return["<div>",'\t<label class="d-flex align-items-center mb-3">','\t\t<input type="checkbox" class="form-control" style="'.concat(t,'" />'),'\t\t<div class="flex-grow-1 ps-2">Hello</div>',"\t</label>","\t",'\t<label class="d-flex align-items-center mb-2">','\t\t<input type="radio" name="aaa" class="form-control" style="'.concat(t,'" />'),'\t\t<div class="flex-grow-1 ps-2">Opção A</div>',"\t</label>","\t",'\t<label class="d-flex align-items-center mb-2">','\t\t<input type="radio" name="aaa" class="form-control" style="'.concat(t,'" />'),'\t\t<div class="flex-grow-1 ps-2">Opção B</div>',"\t</label>","\t",'\t<label class="d-flex align-items-center mb-2">','\t\t<input type="radio" name="aaa" class="form-control" style="'.concat(t,'" />'),'\t\t<div class="flex-grow-1 ps-2">Opção C</div>',"\t</label>","</div>"].join("\n")}}},o=r(11),component=Object(o.a)(n,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("ui-field",{attrs:{label:""}},[r("input",{directives:[{name:"model",rawName:"v-model",value:t.colorUse,expression:"colorUse"}],staticClass:"form-control",attrs:{type:"checkbox"},domProps:{checked:Array.isArray(t.colorUse)?t._i(t.colorUse,null)>-1:t.colorUse},on:{change:function(e){var r=t.colorUse,n=e.target,o=!!n.checked;if(Array.isArray(r)){var l=t._i(r,null);n.checked?l<0&&(t.colorUse=r.concat([null])):l>-1&&(t.colorUse=r.slice(0,l).concat(r.slice(l+1)))}else t.colorUse=o}}}),t._v(" "),r("div",{staticClass:"d-inline-block ms-2"},[t._v("Utilizar cor?")])]),t._v(" "),t.colorUse?r("ui-field",{attrs:{label:"Cor"}},[r("el-color-picker",{model:{value:t.bind.color,callback:function(e){t.$set(t.bind,"color",e)},expression:"bind.color"}}),t._v(" "),r("select",{directives:[{name:"model",rawName:"v-model",value:t.bind.color,expression:"bind.color"}],staticClass:"form-control",on:{change:function(e){var r=Array.prototype.filter.call(e.target.options,(function(t){return t.selected})).map((function(t){return"_value"in t?t._value:t.value}));t.$set(t.bind,"color",e.target.multiple?r:r[0])}}},[r("option",[t._v("var(--bs-primary);")]),t._v(" "),r("option",[t._v("var(--bs-secondary);")]),t._v(" "),r("option",[t._v("var(--bs-success);")]),t._v(" "),r("option",[t._v("var(--bs-danger);")]),t._v(" "),r("option",[t._v("var(--bs-info);")]),t._v(" "),r("option",[t._v("var(--bs-warning);")]),t._v(" "),r("option",[t._v("var(--bs-dark);")]),t._v(" "),r("option",[t._v("var(--bs-indigo);")]),t._v(" "),r("option",[t._v("var(--bs-purple);")]),t._v(" "),r("option",[t._v("var(--bs-pink);")]),t._v(" "),r("option",[t._v("var(--bs-orange);")]),t._v(" "),r("option",[t._v("var(--bs-teal);")]),t._v(" "),r("option",[t._v("var(--bs-cyan);")])])],1):t._e(),t._v(" "),r("ui-field",{attrs:{label:"Preview"}},[r("ui-playground",{attrs:{value:t._code}})],1)],1)}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{UiField:r(559).default,UiPlayground:r(601).default})},630:function(t,e,r){"use strict";r.r(e);r(25),r(192),r(191);var n={head:function(){return{title:"Dropdown"}},data:function(){return{types:"top-left|top|top-right|right-top|right|right-bottom|bottom-right|bottom|bottom-left|left-bottom|left|left-top".split("|"),bind:{type:"bottom-left"}}},computed:{_code:function(){return['<ui-dropdown type="'.concat(this.bind.type,'" :shown="true">'),'\t<button type="button" class="btn btn-primary">',"\t\tDropdown","\t</button>","\t","\t<template #dropdown>",'\t\t<div class="p-2" style="width:150px;">',"\t\t\t<div>Big</div>","\t\t\t<div>Content</div>","\t\t\t<div>Example</div>","\t\t</div>","\t</template>","</ui-dropdown>"].join("\n")}}},o=r(11),component=Object(o.a)(n,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("ui-field",{attrs:{label:"Position"}},[r("select",{directives:[{name:"model",rawName:"v-model",value:t.bind.type,expression:"bind.type"}],staticClass:"form-control",on:{change:function(e){var r=Array.prototype.filter.call(e.target.options,(function(t){return t.selected})).map((function(t){return"_value"in t?t._value:t.value}));t.$set(t.bind,"type",e.target.multiple?r:r[0])}}},t._l(t.types,(function(e){return r("option",{domProps:{value:e}},[t._v(t._s(e))])})),0)]),t._v(" "),r("ui-field",{attrs:{label:"Preview"}},[r("ui-playground",{attrs:{value:t._code}})],1)],1)}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{UiField:r(559).default,UiPlayground:r(601).default})},631:function(t,e,r){"use strict";r.r(e);var n={head:function(){return{title:"Arquivos"}},data:function(){return{uiFile:!1,uiFileId:16}}},o=r(11),component=Object(o.a)(n,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("div",{staticClass:"row g-0"},[r("div",{staticClass:"col-6 p-2"},[r("ui-file",{model:{value:t.uiFile,callback:function(e){t.uiFile=e},expression:"uiFile"}})],1),t._v(" "),r("div",{staticClass:"col-6 p-2"},[r("ui-file-id",{model:{value:t.uiFileId,callback:function(e){t.uiFileId=e},expression:"uiFileId"}})],1),t._v(" "),r("div",{staticClass:"col-12 p-2"},[r("ui-file-select",{attrs:{"select-field":"id"},model:{value:t.uiFileId,callback:function(e){t.uiFileId=e},expression:"uiFileId"}})],1)])])}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{UiFile:r(595).default,UiFileId:r(602).default,UiFileSelect:r(610).default})},645:function(t,e,r){var map={"./endpoints.vue":627,"./index.vue":628,"./ui-check.vue":629,"./ui-dropdown.vue":630,"./ui-file.vue":631};function n(t){var e=o(t);return r(e)}function o(t){if(!r.o(map,t)){var e=new Error("Cannot find module '"+t+"'");throw e.code="MODULE_NOT_FOUND",e}return map[t]}n.keys=function(){return Object.keys(map)},n.resolve=o,t.exports=n,n.id=645},757:function(t,e,r){"use strict";r.r(e);r(64),r(12),r(27),r(25),r(75);var n={data:function(){return{navItems:this.getComponents()}},methods:{getComponents:function(){var t=r(645);return t.keys().map((function(e){var r=t(e).default.head();return r.label=r.title,delete r.title,r.to="/admin/dev/".concat(e).replace(/(\.\/)|(\.vue)|(index)/g,""),r}))}}},o=r(11),component=Object(o.a)(n,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("div",{staticClass:"d-flex"},[r("div",{staticClass:"bg-dark",staticStyle:{height:"100vh",width:"200px"}},[r("ui-nav",{attrs:{items:t.navItems,"text-color":"#fff"}})],1),t._v(" "),r("div",{staticClass:"flex-grow-1 p-3",staticStyle:{height:"100vh",overflow:"auto"}},[r("nuxt-child")],1)])])}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{UiNav:r(420).default})}}]);