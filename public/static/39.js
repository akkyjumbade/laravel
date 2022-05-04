(self.webpackChunk=self.webpackChunk||[]).push([[39],{7757:(e,t,r)=>{e.exports=r(5666)},3476:(e,t,r)=>{"use strict";r.d(t,{T:()=>a});var n=r(1636),o=r(5893),i=["children","className"];function l(e,t){if(null==e)return{};var r,n,o=function(e,t){if(null==e)return{};var r,n,o={},i=Object.keys(e);for(n=0;n<i.length;n++)r=i[n],t.indexOf(r)>=0||(o[r]=e[r]);return o}(e,t);if(Object.getOwnPropertySymbols){var i=Object.getOwnPropertySymbols(e);for(n=0;n<i.length;n++)r=i[n],t.indexOf(r)>=0||Object.prototype.propertyIsEnumerable.call(e,r)&&(o[r]=e[r])}return o}function a(e){var t=e.title,r=e.children,i=(0,n.qt)().props.errors;return(0,o.jsxs)(o.Fragment,{children:[(0,o.jsx)("header",{className:"container mx-auto py-3",children:t&&(0,o.jsx)("h1",{className:"leading-10 text-3xl font-bold",children:t})}),i&&Object.keys(i).length>0&&(0,o.jsx)("div",{className:"container mx-auto py-3 mb-4 bg-red-400 text-white px-4 rounded-md",children:(0,o.jsx)("ol",{className:"text-sm",children:Object.keys(i).map((function(e){return(0,o.jsx)("li",{children:i[e]},e)}))})}),r]})}a.Section=function(e){var t=e.children,r=e.className;l(e,i);return(0,o.jsx)("div",{className:"container mx-auto ".concat(r),children:t})}},1039:(e,t,r)=>{"use strict";r.r(t),r.d(t,{default:()=>b});var n=r(7757),o=r.n(n),i=r(7294),l=(r(1636),r(9680),r(3476)),a=r(6621),s=r(3954);function c(e,t,r,n){Object.defineProperty(e,t,{get:r,set:n,enumerable:!0,configurable:!0})}function u(e,t){let{cursor:r,getKey:n}=e;return{setSelectedKeys(e){t((t=>({...t,selectedKeys:e})))},setFilterText(e){t((t=>({...t,filterText:e})))},insert(e,...r){t((t=>f(t,e,...r)))},insertBefore(e,...r){t((t=>{let o=t.items.findIndex((t=>n(t)===e));if(-1!==o)return f(t,o,...r)}))},insertAfter(e,...r){t((t=>{let o=t.items.findIndex((t=>n(t)===e));if(-1!==o)return f(t,o+1,...r)}))},prepend(...e){t((t=>f(t,0,...e)))},append(...e){t((t=>f(t,t.items.length,...e)))},remove(...e){t((t=>{let o=new Set(e),i=t.items.filter((e=>!o.has(n(e)))),l="all";if("all"!==t.selectedKeys){l=new Set(t.selectedKeys);for(let t of e)l.delete(t)}return null==r&&0===i.length&&(l=new Set),{...t,items:i,selectedKeys:l}}))},removeSelectedItems(){t((e=>{if("all"===e.selectedKeys)return{...e,items:[],selectedKeys:new Set};let t=e.selectedKeys,r=e.items.filter((e=>!t.has(n(e))));return{...e,items:r,selectedKeys:new Set}}))},move(e,r){t((t=>{let o=t.items.findIndex((t=>n(t)===e));if(-1===o)return t;let i=t.items.slice(),[l]=i.splice(o,1);return i.splice(r,0,l),{...t,items:i}}))},moveBefore(e,r){t((t=>{let o=t.items.findIndex((t=>n(t)===e));if(-1===o)return t;let i=r.map((e=>t.items.findIndex((t=>n(t)===e)))).sort();return d(t,i,o)}))},moveAfter(e,r){t((t=>{let o=t.items.findIndex((t=>n(t)===e));if(-1===o)return t;let i=r.map((e=>t.items.findIndex((t=>n(t)===e)))).sort();return d(t,i,o+1)}))},update(e,r){t((t=>{let o=t.items.findIndex((t=>n(t)===e));return-1===o?t:{...t,items:[...t.items.slice(0,o),r,...t.items.slice(o+1)]}}))}}}function f(e,t,...r){return{...e,items:[...e.items.slice(0,t),...r,...e.items.slice(t)]}}function d(e,t,r){for(let e of t)e<r&&r--;let n=t.map((e=>({from:e,to:r++})));for(let e=0;e<n.length;e++){let t=n[e].from;for(let r=e;r<n.length;r++){n[r].from>t&&n[r].from--}}for(let e=0;e<n.length;e++){let t=n[e];for(let r=n.length-1;r>e;r--){let e=n[r];e.from<t.to?t.to++:e.from++}}let o=e.items.slice();for(let e of n){let[t]=o.splice(e.from,1);o.splice(e.to,0,t)}return{...e,items:o}}function h(e,t){let r;switch(e.state){case"idle":case"error":switch(t.type){case"loading":case"loadingMore":case"sorting":case"filtering":var n,o;return{...e,filterText:null!==(n=t.filterText)&&void 0!==n?n:e.filterText,state:t.type,items:"loading"===t.type?[]:e.items,sortDescriptor:null!==(o=t.sortDescriptor)&&void 0!==o?o:e.sortDescriptor,abortController:t.abortController};case"update":return{...e,...t.updater(e)};case"success":case"error":return e;default:throw new Error(`Invalid action "${t.type}" in state "${e.state}"`)}case"loading":case"sorting":case"filtering":switch(t.type){case"success":return t.abortController!==e.abortController?e:(r=null!==(i=t.selectedKeys)&&void 0!==i?i:e.selectedKeys,{...e,filterText:null!==(l=t.filterText)&&void 0!==l?l:e.filterText,state:"idle",items:[...t.items],selectedKeys:"all"===r?"all":new Set(r),sortDescriptor:null!==(a=t.sortDescriptor)&&void 0!==a?a:e.sortDescriptor,abortController:null,cursor:t.cursor});var i,l,a;case"error":return t.abortController!==e.abortController?e:{...e,state:"error",error:t.error,abortController:null};case"loading":case"loadingMore":case"sorting":case"filtering":var s;return e.abortController.abort(),{...e,filterText:null!==(s=t.filterText)&&void 0!==s?s:e.filterText,state:t.type,items:"loading"===t.type?[]:e.items,abortController:t.abortController};case"update":return{...e,...t.updater(e)};default:throw new Error(`Invalid action "${t.type}" in state "${e.state}"`)}case"loadingMore":switch(t.type){case"success":var c,u;return r="all"===e.selectedKeys||"all"===t.selectedKeys?"all":new Set([...e.selectedKeys,...null!==(c=t.selectedKeys)&&void 0!==c?c:[]]),{...e,state:"idle",items:[...e.items,...t.items],selectedKeys:r,sortDescriptor:null!==(u=t.sortDescriptor)&&void 0!==u?u:e.sortDescriptor,abortController:null,cursor:t.cursor};case"error":return t.abortController!==e.abortController?e:{...e,state:"error",error:t.error};case"loading":case"sorting":case"filtering":var f;return e.abortController.abort(),{...e,filterText:null!==(f=t.filterText)&&void 0!==f?f:e.filterText,state:t.type,items:"loading"===t.type?[]:e.items,abortController:t.abortController};case"loadingMore":return t.abortController.abort(),e;case"update":return{...e,...t.updater(e)};default:throw new Error(`Invalid action "${t.type}" in state "${e.state}"`)}default:throw new Error(`Invalid state "${e.state}"`)}}function p(e){const{load:t,sort:r,initialSelectedKeys:n,initialSortDescriptor:o,getKey:l=(e=>e.id||e.key),initialFilterText:a=""}=e;let[s,c]=(0,i.useReducer)(h,{state:"idle",error:null,items:[],selectedKeys:"all"===n?"all":new Set(n),sortDescriptor:o,filterText:a});const f=async(e,r)=>{let n=new AbortController;try{var o;c({...e,abortController:n});let a=null!==(o=e.filterText)&&void 0!==o?o:s.filterText;var i;let u=await r({items:s.items.slice(),selectedKeys:s.selectedKeys,sortDescriptor:null!==(i=e.sortDescriptor)&&void 0!==i?i:s.sortDescriptor,signal:n.signal,cursor:"loadingMore"===e.type?s.cursor:null,filterText:a});var l;let d=null!==(l=u.filterText)&&void 0!==l?l:a;c({type:"success",...u,abortController:n}),d&&d!==a&&!n.signal.aborted&&f({type:"filtering",filterText:d},t)}catch(e){c({type:"error",error:e,abortController:n})}};return(0,i.useEffect)((()=>{f({type:"loading"},t)}),[]),{items:s.items,selectedKeys:s.selectedKeys,sortDescriptor:s.sortDescriptor,isLoading:"loading"===s.state||"loadingMore"===s.state||"sorting"===s.state||"filtering"===s.state,loadingState:s.state,error:s.error,filterText:s.filterText,getItem:e=>s.items.find((t=>l(t)===e)),reload(){f({type:"loading"},t)},loadMore(){"loadingMore"!==s.state&&"filtering"!==s.state&&null!=s.cursor&&f({type:"loadingMore"},t)},sort(e){f({type:"sorting",sortDescriptor:e},r||t)},...u({...e,getKey:l,cursor:s.cursor},(e=>{c({type:"update",updater:e})})),setFilterText(e){f({type:"filtering",filterText:e},t)}}}c({},"useAsyncList",(()=>p));function y(e){let{initialItems:t=[],initialSelectedKeys:r,getKey:n=(e=>e.id||e.key),getChildren:o=(e=>e.children)}=e,l=(0,i.useMemo)((()=>new Map),[]),a=(0,i.useMemo)((()=>d(t)),[]),[s,c]=(0,i.useState)(a),[u,f]=(0,i.useState)(new Set(r||[]));function d(e=[],t){return e.map((e=>{let r={key:n(e),parentKey:t,value:e,children:null};return r.children=d(o(e),r.key),l.set(r.key,r),r}))}function h(e,t,r){let n=l.get(t);if(!n)return e;let o=r(n);for(null==o?y(n):p(o);n.parentKey;){let e=l.get(n.parentKey),t={key:e.key,parentKey:e.parentKey,value:e.value,children:null},r=e.children;null==o&&(r=r.filter((e=>e!==n))),t.children=r.map((e=>e===n?o:e)),l.set(t.key,t),o=t,n=e}return null==o&&(e=e.filter((e=>e!==n))),e.map((e=>e===n?o:e))}function p(e){l.set(e.key,e);for(let t of e.children)p(t)}function y(e){l.delete(e.key);for(let t of e.children)y(t)}return{items:s,selectedKeys:u,setSelectedKeys:f,getItem:e=>l.get(e),insert(e,t,...r){c((n=>{let o=d(r,e);return null==e?[...n.slice(0,t),...o,...n.slice(t)]:h(n,e,(e=>({key:e.key,parentKey:e.parentKey,value:e.value,children:[...e.children.slice(0,t),...o,...e.children.slice(t)]})))}))},insertBefore(e,...t){let r=l.get(e);if(!r)return;let n=l.get(r.parentKey),o=(n?n.children:s).indexOf(r);this.insert(null==n?void 0:n.key,o,...t)},insertAfter(e,...t){let r=l.get(e);if(!r)return;let n=l.get(r.parentKey),o=(n?n.children:s).indexOf(r);this.insert(null==n?void 0:n.key,o+1,...t)},prepend(e,...t){this.insert(e,0,...t)},append(e,...t){if(null==e)this.insert(null,s.length,...t);else{let r=l.get(e);if(!r)return;this.insert(e,r.children.length,...t)}},remove(...e){let t=s;for(let r of e)t=h(t,r,(()=>null));c(t);let r=new Set(u);for(let e of u)l.has(e)||r.delete(e);f(r)},removeSelectedItems(){this.remove(...u)},move(e,t,r){c((n=>{let o=l.get(e);if(!o)return n;n=h(n,e,(()=>null));const i={...o,parentKey:t};return h(n,t,(e=>({key:e.key,parentKey:e.parentKey,value:e.value,children:[...e.children.slice(0,r),i,...e.children.slice(r)]})))}))},update(e,t){c((r=>h(r,e,(e=>{let r={key:e.key,parentKey:e.parentKey,value:t,children:null};return r.children=d(o(t),r.key),r}))))}}}c({},"useTreeData",(()=>y));var m=r(5893);function g(e,t,r,n,o,i,l){try{var a=e[i](l),s=a.value}catch(e){return void r(e)}a.done?t(s):Promise.resolve(s).then(n,o)}function v(e){return function(){var t=this,r=arguments;return new Promise((function(n,o){var i=e.apply(t,r);function l(e){g(i,n,o,l,a,"next",e)}function a(e){g(i,n,o,l,a,"throw",e)}l(void 0)}))}}function x(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var r=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null==r)return;var n,o,i=[],l=!0,a=!1;try{for(r=r.call(e);!(l=(n=r.next()).done)&&(i.push(n.value),!t||i.length!==t);l=!0);}catch(e){a=!0,o=e}finally{try{l||null==r.return||r.return()}finally{if(a)throw o}}return i}(e,t)||function(e,t){if(!e)return;if("string"==typeof e)return w(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);"Object"===r&&e.constructor&&(r=e.constructor.name);if("Map"===r||"Set"===r)return Array.from(e);if("Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r))return w(e,t)}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function w(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}function b(e){var t=e.users,r=x((0,i.useState)(null),2),n=(r[0],r[1],x(i.useState(new Set([2])),2)),c=n[0],u=n[1],f=p({load:function(e){return v(o().mark((function r(){var n,i;return o().wrap((function(r){for(;;)switch(r.prev=r.next){case 0:return n=e.signal,r.next=3,fetch("https://swapi.py4e.com/api/people/?search",{signal:n});case 3:return i=r.sent,r.next=6,i.json();case 6:return r.sent,r.abrupt("return",{items:null==t?void 0:t.data});case 8:case"end":return r.stop()}}),r)})))()},sort:function(e){return v(o().mark((function t(){var r,n;return o().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return r=e.items,n=e.sortDescriptor,t.abrupt("return",{items:r.sort((function(e,t){var r=e[n.column],o=t[n.column],i=(parseInt(r)||r)<(parseInt(o)||o)?-1:1;return"descending"===n.direction&&(i*=-1),i}))});case 2:case"end":return t.stop()}}),t)})))()}});return t?(0,m.jsxs)(l.T,{title:"Users",children:[(0,m.jsx)(a.PG,{selectedRows:c,onDeleteMany:function(e){console.log(Array.from(c))}}),(0,m.jsx)(l.T.Section,{children:(0,m.jsxs)(a.iA,{"aria-label":"Example static collection table",selectionMode:"multiple",sortDescriptor:f.sortDescriptor,onSortChange:f.sort,pagination:t,selectedKeys:c,onSelectionChange:u,children:[(0,m.jsxs)(s.xD,{children:[(0,m.jsx)(s.sg,{allowsSorting:!0,children:"Name"},"name"),(0,m.jsx)(s.sg,{allowsSorting:!0,children:"Username"},"username"),(0,m.jsx)(s.sg,{allowsSorting:!0,children:"Email"},"email"),(0,m.jsx)(s.sg,{allowsSorting:!0,children:"Mobile number"},"phone_number"),(0,m.jsx)(s.sg,{allowsSorting:!0,children:"Created at"},"created_at"),(0,m.jsx)(s.sg,{allowsSorting:!0,children:"Updated at"},"updated_at")]}),(0,m.jsx)(s.RM,{items:f.items,children:function(e){return(0,m.jsx)(s.X2,{children:function(t){return(0,m.jsx)(s.bL,{textValue:e[t],children:e[t]})}},e.name)}})]})})]}):null}},5666:e=>{var t=function(e){"use strict";var t,r=Object.prototype,n=r.hasOwnProperty,o="function"==typeof Symbol?Symbol:{},i=o.iterator||"@@iterator",l=o.asyncIterator||"@@asyncIterator",a=o.toStringTag||"@@toStringTag";function s(e,t,r){return Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}),e[t]}try{s({},"")}catch(e){s=function(e,t,r){return e[t]=r}}function c(e,t,r,n){var o=t&&t.prototype instanceof m?t:m,i=Object.create(o.prototype),l=new L(n||[]);return i._invoke=function(e,t,r){var n=f;return function(o,i){if(n===h)throw new Error("Generator is already running");if(n===p){if("throw"===o)throw i;return O()}for(r.method=o,r.arg=i;;){var l=r.delegate;if(l){var a=T(l,r);if(a){if(a===y)continue;return a}}if("next"===r.method)r.sent=r._sent=r.arg;else if("throw"===r.method){if(n===f)throw n=p,r.arg;r.dispatchException(r.arg)}else"return"===r.method&&r.abrupt("return",r.arg);n=h;var s=u(e,t,r);if("normal"===s.type){if(n=r.done?p:d,s.arg===y)continue;return{value:s.arg,done:r.done}}"throw"===s.type&&(n=p,r.method="throw",r.arg=s.arg)}}}(e,r,l),i}function u(e,t,r){try{return{type:"normal",arg:e.call(t,r)}}catch(e){return{type:"throw",arg:e}}}e.wrap=c;var f="suspendedStart",d="suspendedYield",h="executing",p="completed",y={};function m(){}function g(){}function v(){}var x={};s(x,i,(function(){return this}));var w=Object.getPrototypeOf,b=w&&w(w(C([])));b&&b!==r&&n.call(b,i)&&(x=b);var S=v.prototype=m.prototype=Object.create(x);function K(e){["next","throw","return"].forEach((function(t){s(e,t,(function(e){return this._invoke(t,e)}))}))}function j(e,t){function r(o,i,l,a){var s=u(e[o],e,i);if("throw"!==s.type){var c=s.arg,f=c.value;return f&&"object"==typeof f&&n.call(f,"__await")?t.resolve(f.__await).then((function(e){r("next",e,l,a)}),(function(e){r("throw",e,l,a)})):t.resolve(f).then((function(e){c.value=e,l(c)}),(function(e){return r("throw",e,l,a)}))}a(s.arg)}var o;this._invoke=function(e,n){function i(){return new t((function(t,o){r(e,n,t,o)}))}return o=o?o.then(i,i):i()}}function T(e,r){var n=e.iterator[r.method];if(n===t){if(r.delegate=null,"throw"===r.method){if(e.iterator.return&&(r.method="return",r.arg=t,T(e,r),"throw"===r.method))return y;r.method="throw",r.arg=new TypeError("The iterator does not provide a 'throw' method")}return y}var o=u(n,e.iterator,r.arg);if("throw"===o.type)return r.method="throw",r.arg=o.arg,r.delegate=null,y;var i=o.arg;return i?i.done?(r[e.resultName]=i.value,r.next=e.nextLoc,"return"!==r.method&&(r.method="next",r.arg=t),r.delegate=null,y):i:(r.method="throw",r.arg=new TypeError("iterator result is not an object"),r.delegate=null,y)}function k(e){var t={tryLoc:e[0]};1 in e&&(t.catchLoc=e[1]),2 in e&&(t.finallyLoc=e[2],t.afterLoc=e[3]),this.tryEntries.push(t)}function E(e){var t=e.completion||{};t.type="normal",delete t.arg,e.completion=t}function L(e){this.tryEntries=[{tryLoc:"root"}],e.forEach(k,this),this.reset(!0)}function C(e){if(e){var r=e[i];if(r)return r.call(e);if("function"==typeof e.next)return e;if(!isNaN(e.length)){var o=-1,l=function r(){for(;++o<e.length;)if(n.call(e,o))return r.value=e[o],r.done=!1,r;return r.value=t,r.done=!0,r};return l.next=l}}return{next:O}}function O(){return{value:t,done:!0}}return g.prototype=v,s(S,"constructor",v),s(v,"constructor",g),g.displayName=s(v,a,"GeneratorFunction"),e.isGeneratorFunction=function(e){var t="function"==typeof e&&e.constructor;return!!t&&(t===g||"GeneratorFunction"===(t.displayName||t.name))},e.mark=function(e){return Object.setPrototypeOf?Object.setPrototypeOf(e,v):(e.__proto__=v,s(e,a,"GeneratorFunction")),e.prototype=Object.create(S),e},e.awrap=function(e){return{__await:e}},K(j.prototype),s(j.prototype,l,(function(){return this})),e.AsyncIterator=j,e.async=function(t,r,n,o,i){void 0===i&&(i=Promise);var l=new j(c(t,r,n,o),i);return e.isGeneratorFunction(r)?l:l.next().then((function(e){return e.done?e.value:l.next()}))},K(S),s(S,a,"Generator"),s(S,i,(function(){return this})),s(S,"toString",(function(){return"[object Generator]"})),e.keys=function(e){var t=[];for(var r in e)t.push(r);return t.reverse(),function r(){for(;t.length;){var n=t.pop();if(n in e)return r.value=n,r.done=!1,r}return r.done=!0,r}},e.values=C,L.prototype={constructor:L,reset:function(e){if(this.prev=0,this.next=0,this.sent=this._sent=t,this.done=!1,this.delegate=null,this.method="next",this.arg=t,this.tryEntries.forEach(E),!e)for(var r in this)"t"===r.charAt(0)&&n.call(this,r)&&!isNaN(+r.slice(1))&&(this[r]=t)},stop:function(){this.done=!0;var e=this.tryEntries[0].completion;if("throw"===e.type)throw e.arg;return this.rval},dispatchException:function(e){if(this.done)throw e;var r=this;function o(n,o){return a.type="throw",a.arg=e,r.next=n,o&&(r.method="next",r.arg=t),!!o}for(var i=this.tryEntries.length-1;i>=0;--i){var l=this.tryEntries[i],a=l.completion;if("root"===l.tryLoc)return o("end");if(l.tryLoc<=this.prev){var s=n.call(l,"catchLoc"),c=n.call(l,"finallyLoc");if(s&&c){if(this.prev<l.catchLoc)return o(l.catchLoc,!0);if(this.prev<l.finallyLoc)return o(l.finallyLoc)}else if(s){if(this.prev<l.catchLoc)return o(l.catchLoc,!0)}else{if(!c)throw new Error("try statement without catch or finally");if(this.prev<l.finallyLoc)return o(l.finallyLoc)}}}},abrupt:function(e,t){for(var r=this.tryEntries.length-1;r>=0;--r){var o=this.tryEntries[r];if(o.tryLoc<=this.prev&&n.call(o,"finallyLoc")&&this.prev<o.finallyLoc){var i=o;break}}i&&("break"===e||"continue"===e)&&i.tryLoc<=t&&t<=i.finallyLoc&&(i=null);var l=i?i.completion:{};return l.type=e,l.arg=t,i?(this.method="next",this.next=i.finallyLoc,y):this.complete(l)},complete:function(e,t){if("throw"===e.type)throw e.arg;return"break"===e.type||"continue"===e.type?this.next=e.arg:"return"===e.type?(this.rval=this.arg=e.arg,this.method="return",this.next="end"):"normal"===e.type&&t&&(this.next=t),y},finish:function(e){for(var t=this.tryEntries.length-1;t>=0;--t){var r=this.tryEntries[t];if(r.finallyLoc===e)return this.complete(r.completion,r.afterLoc),E(r),y}},catch:function(e){for(var t=this.tryEntries.length-1;t>=0;--t){var r=this.tryEntries[t];if(r.tryLoc===e){var n=r.completion;if("throw"===n.type){var o=n.arg;E(r)}return o}}throw new Error("illegal catch attempt")},delegateYield:function(e,r,n){return this.delegate={iterator:C(e),resultName:r,nextLoc:n},"next"===this.method&&(this.arg=t),y}},e}(e.exports);try{regeneratorRuntime=t}catch(e){"object"==typeof globalThis?globalThis.regeneratorRuntime=t:Function("r","regeneratorRuntime = r")(t)}}}]);