(function(e){function t(t){for(var r,a,s=t[0],c=t[1],u=t[2],l=0,d=[];l<s.length;l++)a=s[l],Object.prototype.hasOwnProperty.call(o,a)&&o[a]&&d.push(o[a][0]),o[a]=0;for(r in c)Object.prototype.hasOwnProperty.call(c,r)&&(e[r]=c[r]);m&&m(t);while(d.length)d.shift()();return i.push.apply(i,u||[]),n()}function n(){for(var e,t=0;t<i.length;t++){for(var n=i[t],r=!0,a=1;a<n.length;a++){var s=n[a];0!==o[s]&&(r=!1)}r&&(i.splice(t--,1),e=c(c.s=n[0]))}return e}var r={},a={app:0},o={app:0},i=[];function s(e){return c.p+"js/"+({about:"about"}[e]||e)+"."+{about:"f10f7a2b"}[e]+".js"}function c(t){if(r[t])return r[t].exports;var n=r[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,c),n.l=!0,n.exports}c.e=function(e){var t=[],n={about:1};a[e]?t.push(a[e]):0!==a[e]&&n[e]&&t.push(a[e]=new Promise((function(t,n){for(var r="css/"+({about:"about"}[e]||e)+"."+{about:"e3d5bd27"}[e]+".css",o=c.p+r,i=document.getElementsByTagName("link"),s=0;s<i.length;s++){var u=i[s],l=u.getAttribute("data-href")||u.getAttribute("href");if("stylesheet"===u.rel&&(l===r||l===o))return t()}var d=document.getElementsByTagName("style");for(s=0;s<d.length;s++){u=d[s],l=u.getAttribute("data-href");if(l===r||l===o)return t()}var m=document.createElement("link");m.rel="stylesheet",m.type="text/css",m.onload=t,m.onerror=function(t){var r=t&&t.target&&t.target.src||o,i=new Error("Loading CSS chunk "+e+" failed.\n("+r+")");i.code="CSS_CHUNK_LOAD_FAILED",i.request=r,delete a[e],m.parentNode.removeChild(m),n(i)},m.href=o;var v=document.getElementsByTagName("head")[0];v.appendChild(m)})).then((function(){a[e]=0})));var r=o[e];if(0!==r)if(r)t.push(r[2]);else{var i=new Promise((function(t,n){r=o[e]=[t,n]}));t.push(r[2]=i);var u,l=document.createElement("script");l.charset="utf-8",l.timeout=120,c.nc&&l.setAttribute("nonce",c.nc),l.src=s(e);var d=new Error;u=function(t){l.onerror=l.onload=null,clearTimeout(m);var n=o[e];if(0!==n){if(n){var r=t&&("load"===t.type?"missing":t.type),a=t&&t.target&&t.target.src;d.message="Loading chunk "+e+" failed.\n("+r+": "+a+")",d.name="ChunkLoadError",d.type=r,d.request=a,n[1](d)}o[e]=void 0}};var m=setTimeout((function(){u({type:"timeout",target:l})}),12e4);l.onerror=l.onload=u,document.head.appendChild(l)}return Promise.all(t)},c.m=e,c.c=r,c.d=function(e,t,n){c.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},c.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},c.t=function(e,t){if(1&t&&(e=c(e)),8&t)return e;if(4&t&&"object"===typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(c.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)c.d(n,r,function(t){return e[t]}.bind(null,r));return n},c.n=function(e){var t=e&&e.__esModule?function(){return e["default"]}:function(){return e};return c.d(t,"a",t),t},c.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},c.p="/",c.oe=function(e){throw console.error(e),e};var u=window["webpackJsonp"]=window["webpackJsonp"]||[],l=u.push.bind(u);u.push=t,u=u.slice();for(var d=0;d<u.length;d++)t(u[d]);var m=l;i.push([0,"chunk-vendors"]),n()})({0:function(e,t,n){e.exports=n("56d7")},"56d7":function(e,t,n){"use strict";n.r(t);n("e260"),n("e6cf"),n("cca6"),n("a79d");var r=n("2b0e"),a=(n("d3b7"),n("bc3a")),o=n.n(a),i={},s=o.a.create(i);s.interceptors.request.use((function(e){return e}),(function(e){return Promise.reject(e)})),s.interceptors.response.use((function(e){return e}),(function(e){return Promise.reject(e)})),Plugin.install=function(e){e.axios=s,window.axios=s,Object.defineProperties(e.prototype,{axios:{get:function(){return s}},$axios:{get:function(){return s}}})},r["a"].use(Plugin);Plugin;var c=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-app",[n("v-app-bar",{staticClass:"green lighten-5",attrs:{app:""}},[n("router-link",{attrs:{to:"/"}},[n("v-img",{staticClass:"shrink mt-1 rounded-circle",attrs:{alt:"Vuetify Name",contain:"","min-width":"50",src:"uploads/logo.jpg","max-width":"50"}})],1),n("v-spacer"),n("div",{directives:[{name:"show",rawName:"v-show",value:!e.mobile,expression:"!mobile"}]},[n("v-btn",{staticClass:"mr-2",attrs:{rounded:"",text:"",small:"",outlined:"",depressed:"",color:"green darken-4",href:e.mainHome}},[n("v-icon",[e._v("mdi-home")]),e._v(" Main-Home ")],1),n("v-btn",{staticClass:"mr-2",attrs:{rounded:"",text:"",small:"",outlined:"",depressed:"",color:"green darken-4",to:"/"}},[n("v-icon",[e._v("mdi-bank")]),e._v(" Home ")],1),n("v-btn",{staticClass:"mr-2",attrs:{rounded:"",text:"",small:"",outlined:"",depressed:"",color:"green darken-4",to:{name:"patients"}}},[n("v-icon",[e._v("mdi-account-multiple")]),e._v(" Patients ")],1),n("v-btn",{staticClass:"mr-2",attrs:{rounded:"",text:"",small:"",outlined:"",depressed:"",color:"green darken-4",to:{name:"newPatient"}}},[n("v-icon",[e._v("mdi-plus-box")]),e._v(" New Patient ")],1),n("v-btn",{attrs:{rounded:"",text:"",small:"",outlined:"",depressed:"",color:"green darken-4"},on:{click:e.logout}},[n("v-icon",[e._v("mdi-export")]),e._v(" Logout ")],1)],1),n("v-app-bar-nav-icon",{directives:[{name:"show",rawName:"v-show",value:e.mobile,expression:"mobile"}],on:{click:function(t){e.drawer=!e.drawer}}})],1),n("v-main",[n("router-view"),n("p",[e._v(e._s(e.cUser))])],1),n("v-navigation-drawer",{attrs:{app:e.mobile,clipped:"",right:"",width:"175"},model:{value:e.drawer,callback:function(t){e.drawer=t},expression:"drawer"}},[n("nav-drawer",{attrs:{hideDrawer:e.hideDrawer,logout:e.logout}})],1)],1)},u=[],l=n("5530"),d=n("2f62"),m=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"d-block"},[n("v-list",[n("v-list-item",[n("v-btn",{attrs:{color:"green darken-4",href:e.mainHome,text:""},on:{click:e.hideDrawer}},[n("v-icon",[e._v("mdi-home")]),e._v(" Main-Home")],1)],1),n("v-list-item",[n("v-btn",{attrs:{color:"green darken-4",to:{name:"home"},text:""},on:{click:e.hideDrawer}},[n("v-icon",[e._v("mdi-bank")]),e._v(" Home")],1)],1),n("v-list-item",[n("v-btn",{attrs:{color:"green darken-4",to:{name:"patients"},text:""},on:{click:e.hideDrawer}},[n("v-icon",[e._v("mdi-account-multiple")]),e._v(" Patients")],1)],1),n("v-list-item",[n("v-btn",{attrs:{color:"green darken-4",to:{name:"newPatient"},text:""},on:{click:e.hideDrawer}},[n("v-icon",[e._v("mdi-plus-box")]),e._v(" New Patient")],1)],1),n("v-divider"),n("v-list-item",[n("v-btn",{attrs:{color:"green darken-4",text:""},on:{click:e.logout}},[n("v-icon",[e._v("mdi-export")]),e._v(" Logout")],1)],1)],1)],1)},v=[],p={name:"NavDrawer",props:{hideDrawer:Function,logout:Function},data:function(){return{}},computed:Object(d["c"])(["mainHome"])},f=p,b=n("2877"),h=n("6544"),g=n.n(h),w=n("8336"),_=n("ce7e"),x=n("132d"),y=n("8860"),k=n("da13"),j=Object(b["a"])(f,m,v,!1,null,null,null),P=j.exports;g()(j,{VBtn:w["a"],VDivider:_["a"],VIcon:x["a"],VList:y["a"],VListItem:k["a"]});var C={name:"App",components:{NavDrawer:P},data:function(){return{drawer:!1}},computed:Object(l["a"])(Object(l["a"])({},Object(d["c"])(["mainHome"])),{},{mobile:function(){return this.$vuetify.breakpoint.smAndDown},cUser:function(){return JSON.parse(localStorage.getItem("_c_u"))}}),created:function(){var e=JSON.parse(localStorage.getItem("_c_u"));e&&this.setCurUser(e),console.log(e)},watch:{mobile:function(e){e||(this.drawer=!1)}},methods:Object(l["a"])(Object(l["a"])({},Object(d["b"])(["setCurUser"])),{},{hideDrawer:function(){this.mobile&&(this.drawer=!1)},logout:function(){localStorage.removeItem("_c_u"),location.assign(this.mainHome)},confirmUser:function(){var e=JSON.parse(localStorage.getItem("_c_u"));e&&this.setCurUser(e),console.log(e)}})},O=C,N=n("7496"),V=n("40dc"),S=n("5bc1"),D=n("adda"),U=n("f6c4"),E=n("f774"),A=n("2fa4"),I=Object(b["a"])(O,c,u,!1,null,null,null),H=I.exports;g()(I,{VApp:N["a"],VAppBar:V["a"],VAppBarNavIcon:S["a"],VBtn:w["a"],VIcon:x["a"],VImg:D["a"],VMain:U["a"],VNavigationDrawer:E["a"],VSpacer:A["a"]});var L=n("8c4f"),T=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"home"},[n("clinical-data")],1)},B=[],M=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",[n("h1",{staticClass:"text-center my-3 greencolor"},[e._v("NEONATAL UNIT")]),n("v-row",{attrs:{justify:"center"}},[n("v-card",{staticClass:"pa-8 rounded-xl",attrs:{elevation:"12"}},[n("v-card",{attrs:{color:"green"}},[n("h2",{staticClass:"white--text ml-3 text-center"},[e._v(e._s(e.totalPatients)),n("span",{staticClass:"d-block"},[e._v("Patients")])])]),n("v-img",{staticClass:"my-7 rounded-xl",attrs:{src:"uploads/ntbaby.jpg",contain:""}}),n("v-row",{attrs:{justify:"space-around"}},[n("v-btn",{staticClass:"white--text",attrs:{rounded:"",to:{name:"patients"},color:"green darken-2"}},[n("v-icon",[e._v("mdi-account-multiple")]),e._v(" Patients ")],1),n("v-btn",{staticClass:"white--text",attrs:{rounded:"",to:{name:"newPatient"},color:"green darken-2"}},[n("v-icon",[e._v("mdi-plus-box")]),e._v(" New Patient ")],1)],1)],1)],1)],1)},$=[],J=n("dde5"),q={name:"ClinicalData",data:function(){return{totalPatients:0}},created:function(){var e=this;J["a"].get("/?u=2&count=1").then((function(t){t.data.total&&(e.totalPatients=t.data.total)})).catch((function(e){console.log(e.message)}))}},F=q,R=(n("adbe"),n("b0af")),K=n("0fd9"),z=Object(b["a"])(F,M,$,!1,null,null,null),G=z.exports;g()(z,{VBtn:w["a"],VCard:R["a"],VIcon:x["a"],VImg:D["a"],VRow:K["a"]});var Q={name:"Home",components:{ClinicalData:G}},W=Q,X=Object(b["a"])(W,T,B,!1,null,null,null),Y=X.exports;r["a"].use(L["a"]);var Z=[{path:"/Neonatal-Unit",alias:"/",name:"home",component:Y},{path:"/about",name:"about",component:function(){return n.e("about").then(n.bind(null,"f820"))}},{path:"/patients",name:"patients",component:function(){return n.e("about").then(n.bind(null,"fe1b"))}},{path:"/new-patient",name:"newPatient",props:function(e){return{editUser:e.params.editUser}},component:function(){return n.e("about").then(n.bind(null,"2d5b"))}}],ee=new L["a"]({mode:"history",base:"/",routes:Z}),te=ee;r["a"].use(d["a"]);var ne=new d["a"].Store({state:{curUser:null,mainHome:"//fethipaediatrics.com/"},mutations:{curUser:function(e,t){return e.curUser=Object(l["a"])({},t)}},actions:{setCurUser:function(e,t){var n=e.commit;return n("curUser",t)}},modules:{}}),re=n("f309");r["a"].use(re["a"]);var ae=new re["a"]({});r["a"].config.productionTip=!1,new r["a"]({router:te,store:ne,vuetify:ae,render:function(e){return e(H)}}).$mount("#app")},"58e9":function(e,t,n){},adbe:function(e,t,n){"use strict";n("58e9")},dde5:function(e,t,n){"use strict";n.d(t,"a",(function(){return i})),n.d(t,"b",(function(){return s}));var r=n("bc3a"),a=n.n(r),o=n("11c1"),i=a.a.create({baseURL:"/api"}),s=o["v4"]}});
//# sourceMappingURL=app.dea6a3f4.js.map