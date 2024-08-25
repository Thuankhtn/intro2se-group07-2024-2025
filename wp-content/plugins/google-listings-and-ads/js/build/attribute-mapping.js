"use strict";(self.webpackChunkgoogle_listings_and_ads=self.webpackChunkgoogle_listings_and_ads||[]).push([[648],{1103:function(e,t,a){a.r(t),a.d(t,{default:function(){return ae}});var l=a(9307),n=a(5736),i=a(1693),o=()=>(0,l.createElement)("p",null,(0,n.__)("Create attribute rules to control what product data gets sent to Google and to manage product attributes in bulk.","google-listings-and-ads")),s=a(6020),r=a(5609),g=a(3036),d=a(965),c=a(5720),u=a(7714),p=a(4863),m=a(3108),_=a(1653);const b=e=>{let{categories:t}=e;return(0,l.createElement)("div",{className:"gla-attribute-mapping__table-categories-help"},(0,n.sprintf)(
// translators: %d: number of categories.
(0,n._n)("%d category","%d categories",t.length,"google-listings-and-ads"),t.length))};var E=e=>{let{categories:t,condition:a}=e;const i=t?.split(",")||[],{names:o}=(0,_.Z)(i);if(a===m.YN.ALL)return(0,n.__)("All","google-listings-and-ads");const s=i.length>m.E?(0,n.sprintf)(
// translators: %d: The number of categories.
(0,n.__)("+ %d more","google-listings-and-ads"),i.length-m.E):"";return(0,l.createElement)(l.Fragment,null,(0,l.createElement)("span",null,a===m.YN.ONLY?(0,n.__)("Only in","google-listings-and-ads"):(0,n.__)("All except","google-listings-and-ads")),(0,l.createElement)(p.Z,{text:(0,l.createElement)("div",{className:"gla-attribute-mapping__table-categories-tooltip"},o,s&&(0,l.createElement)("span",null,s))},(0,l.createElement)(b,{categories:i})))},h=a(2819),y=a(9054),v=a(591),f=a(3091),C=a(724),Z=a(3922),k=a(7462),N=e=>{let{sources:t=[],help:a,...i}=e;return(0,l.createElement)(l.Fragment,null,(0,l.createElement)(f.Z,(0,k.Z)({options:[{value:"",label:(0,n.__)("Select an option","google-listings-and-ads")},...t.map((e=>({...e,disabled:e.value.includes("disabled:")})))]},i)),a)},x=a(9985),L=a(2),P=a(8027),w=a(8500);const T="fixed",A="field",F=(0,n.__)("Set a fixed value","google-listings-and-ads"),S=(0,n.__)("Use value from existing product field","google-listings-and-ads");var Y=e=>{let{sources:t=[],onChange:a=h.noop,value:i}=e;const[o,s]=(0,l.useState)(!i||i?.includes(":")?A:T),r=e=>{a(""),s(e)};return(0,l.createElement)(l.Fragment,null,(0,l.createElement)(y.Z.Subtitle,{className:"gla_attribute_mapping_helper-text"},(0,n.__)("Choose how to assign a value to the target attribute","google-listings-and-ads")),(0,l.createElement)(x.Z,{className:"gla-attribute-mapping__radio-control",label:(0,l.createElement)(l.Fragment,null,S,(0,l.createElement)(w.Z,{id:`${A}-helper-popover`},(0,l.createElement)("div",null,(0,n.__)("Auto-populate the target attribute with the value of the field you link it to.","google-listings-and-ads")))),onChange:r,value:A,selected:o,collapsible:!0},(0,l.createElement)(N,{value:i,onChange:a,"aria-label":S,sources:t,help:(0,l.createElement)(y.Z.HelperText,{className:"gla-attribute-mapping__help-text"},(0,l.createInterpolateElement)((0,n.__)("Can’t find an appropriate field? <link>Create a new attribute</link>","google-listings-and-ads"),{link:(0,l.createElement)(P.Z,{context:"attribute-mapping",linkId:"create-new-attribute",href:"/wp-admin/edit.php?post_type=product&page=product_attributes"})}))})),(0,l.createElement)(x.Z,{className:"gla-attribute-mapping__radio-control",label:(0,l.createElement)(l.Fragment,null,F,(0,l.createElement)(w.Z,{id:`${T}-helper-popover`},(0,l.createElement)("div",null,(0,l.createInterpolateElement)((0,n.__)("Use fixed values to populate the target attribute with a value you specify. For example, you can enter a fixed value of <em>'White'</em> to specify a single color for all your products.","google-listings-and-ads"),{em:(0,l.createElement)("em",null)})))),onChange:r,value:T,selected:o,collapsible:!0},(0,l.createElement)(L.Z,{value:i,maxLength:100,onChange:a,"aria-label":F,placeholder:(0,n.__)("Enter a value","google-listings-and-ads")})))},q=a(5390),R=e=>{let{selectedConditionalType:t=m.YN.ALL,selectedCategories:a,onConditionalTypeChange:i=h.noop,onCategoriesChange:o=h.noop}=e;const{categories:s,selected:r}=(0,_.Z)(a);return(0,l.createElement)(l.Fragment,null,(0,l.createElement)(f.Z,{options:[{value:m.YN.ALL,label:(0,n.__)("Apply to all categories","google-listings-and-ads")},{value:m.YN.EXCEPT,label:(0,n.__)("Apply to all categories EXCEPT","google-listings-and-ads")},{value:m.YN.ONLY,label:(0,n.__)("Apply ONLY to these categories","google-listings-and-ads")}],value:t,onChange:i}),(t===m.YN.ONLY||t===m.YN.EXCEPT)&&(0,l.createElement)(q.Z,{options:s,isSearchable:!0,placeholder:(0,n.__)("Type for search","google-listings-and-ads"),selected:r,onChange:e=>o(e.map((e=>e.value))),multiple:!0,inlineTags:!0}))},M=a(279),D=a(4028),G=a(1410);const j=(0,n.__)("Select default value","google-listings-and-ads"),I=(0,n.__)("Select a Google attribute that you want to manage","google-listings-and-ads"),O=function(){return[...(arguments.length>0&&void 0!==arguments[0]?arguments[0]:[]).map((e=>({value:e.id,label:e.label})))]};var X=e=>{let{rule:t,onRequestClose:a=h.noop}=e;const[i,o]=(0,l.useState)(t?{...t}:{category_condition_type:m.YN.ALL}),[s,r]=(0,l.useState)(!1),{updateMappingRule:g,createMappingRule:c}=(0,D.T)(),{data:u}=(0,C.Z)(),{data:p=[],hasFinishedResolution:_}=(0,Z.Z)(i.attribute),b=u.find((e=>{let{id:t}=e;return t===i.attribute}))?.enum||!1,E=O(p),k=[{value:"",label:(0,n.__)("Select an attribute","google-listings-and-ads")},...O(u)],x=i.source&&i.attribute&&(i.category_condition_type===m.YN.ALL||i.categories?.length>0)&&!(0,h.isEqual)(i,t),L=e=>{o((e=>({...e,categories:e.category_condition_type===m.YN.ALL?"":e.categories}))(e))},P=e=>{L({...i,source:e})},w=()=>{s||a("dismiss")};return(0,l.createElement)(v.Z,{overflow:"visible",onRequestClose:w,className:"gla-attribute-mapping__rule-modal",title:t?(0,n.__)("Manage attribute rule"," google-listings-and-ads"):(0,n.__)("Create attribute rule"," google-listings-and-ads"),buttons:[(0,l.createElement)(d.Z,{disabled:s,key:"cancel",isLink:!0,onClick:w},(0,n.__)("Cancel","google-listings-and-ads")),(0,l.createElement)(d.Z,{disabled:!x||s,key:"save-rule",isPrimary:!0,text:s?(0,n.__)("Saving…","google-listings-and-ads"):(0,n.__)("Save rule","google-listings-and-ads"),eventName:"gla_attribute_mapping_save_rule_click",eventProps:{context:t?"attribute-mapping-manage-rule-modal":"attribute-mapping-create-rule-modal"},onClick:async()=>{r(!0);try{t?(await g(i),(0,G.dk)("gla_attribute_mapping_update_rule",{context:"attribute-mapping-manage-rule-modal"})):(await c(i),(0,G.dk)("gla_attribute_mapping_create_rule",{context:"attribute-mapping-create-rule-modal"})),a("confirm")}catch(e){r(!1)}}})]},(0,l.createElement)(y.Z,null,(0,l.createElement)(y.Z.Title,null,(0,n.__)("Target attribute","google-listings-and-ads")),(0,l.createElement)(y.Z.Subtitle,{className:"gla_attribute_mapping_helper-text"},I),(0,l.createElement)(f.Z,{value:i.attribute,"aria-label":I,onChange:e=>{L({...i,attribute:e,source:""})},options:k})),!_&&(0,l.createElement)(M.Z,null),E.length>0&&_&&(0,l.createElement)(l.Fragment,null,(0,l.createElement)(y.Z,null,(0,l.createElement)(y.Z.Title,null,b?j:(0,n.__)("Assign value","google-listings-and-ads")),b?(0,l.createElement)(N,{sources:E,onChange:P,value:i.source,"aria-label":j}):(0,l.createElement)(Y,{sources:E,onChange:P,value:i.source})),(0,l.createElement)(y.Z,null,(0,l.createElement)(y.Z.Title,null,(0,n.__)("Categories","google-listings-and-ads")),(0,l.createElement)(R,{selectedConditionalType:i.category_condition_type,selectedCategories:i.categories?.length?i.categories.split(","):[],onConditionalTypeChange:e=>{L({...i,category_condition_type:e})},onCategoriesChange:e=>{L({...i,categories:e.join(",")})}}))))},$=e=>{let{onRequestClose:t=h.noop,rule:a}=e;const[i,o]=(0,l.useState)(!1),{deleteMappingRule:s}=(0,D.T)(),r=()=>{i||t("dismiss")};return(0,l.createElement)(v.Z,{onRequestClose:r,title:(0,n.__)("Delete attribute rule?"," google-listings-and-ads"),buttons:[(0,l.createElement)(d.Z,{disabled:i,key:"cancel",isLink:!0,onClick:r},(0,n.__)("Cancel","google-listings-and-ads")),(0,l.createElement)(d.Z,{disabled:i,key:"delete-rule",isPrimary:!0,text:i?(0,n.__)("Deleting…","google-listings-and-ads"):(0,n.__)("Delete attribute rule","google-listings-and-ads"),eventName:"gla_attribute_mapping_delete_rule_click",eventProps:{context:"attribute-mapping-delete-rule-modal"},onClick:async()=>{o(!0);try{await s(a),(0,G.dk)("gla_attribute_mapping_delete_rule",{context:"attribute-mapping-delete-rule-modal"}),t("confirm")}catch(e){o(!1)}}})]},(0,l.createElement)("div",null,(0,l.createElement)("p",null,(0,n.__)("Deleting a rule does’t affect any data that has already been submitted to Google.","google-listings-and-ads")),(0,l.createElement)("p",null,(0,n.__)("Product data is re-submitted to Google every 30 days to ensure that the information in your product listings are up-to-date.","google-listings-and-ads")),(0,l.createElement)("p",null,(0,n.__)("To ensure your products continue to be approved and promoted by Google, make sure that your product fields include all the required information.","google-listings-and-ads"))))},U=a(9771),W=a(7543),z=a(6166),B=a(8299),H=()=>{const{data:e,start:t}=(0,W.Z)({path:`${z.Pj}/mc/mapping/sync`});if((0,l.useEffect)((()=>{t()}),[t]),!e)return null;const a=(0,n.__)("Scheduled for sync","google-listings-and-ads"),i=e.last_sync?(0,U.format)(B.Z,new Date(1e3*e.last_sync)):(0,n.__)("Never","google-listings-and-ads");return(0,l.createElement)(r.Flex,{justify:"end",align:"center"},(0,l.createElement)("strong",null,(0,n.__)("Last sync:","google-listings-and-ads")),(0,l.createElement)("span",{className:"gla-attribute-mapping__sync-status"},e.is_scheduled?a:i),(0,l.createElement)(w.Z,{id:"gla-attribute-mapping-last-sync-helper-popover",position:"bottom left"},(0,l.createElement)("div",null,(0,n.__)("When an attribute rule is added or changed, data will be synced to Google Merchant Center via an async job. Note that it may take a while for the update to show up on Merchant Center, especially if it involves products that have not been synced and approved before.","google-listings-and-ads"))))},V=a(796),J=a(5873);const K=[{key:"attribute",label:(0,n.__)("Target Attribute","google-listings-and-ads"),isLeftAligned:!0,required:!0},{key:"source",label:(0,n.__)("Data Source / Default Value","google-listings-and-ads"),isLeftAligned:!0,required:!0},{key:"categories",label:(0,n.__)("Categories","google-listings-and-ads"),isLeftAligned:!0,required:!0},{key:"controls",label:"",required:!0}];var Q=()=>{const{page:e,setPage:t}=(0,J.Z)("attribute-mapping"),{data:{rules:a,total:i},hasFinishedResolution:o}=(0,V.Z)({page:e,perPage:10}),{data:p,hasFinishedResolution:m}=(0,C.Z)(),_=!m||!o;return(0,l.useEffect)((()=>{o&&0===a?.length&&e>1&&t(e-1)}),[e,a,o,t]),(0,l.createElement)(c.Z,null,(0,l.createElement)(g.Z,null,(0,l.createElement)(r.CardBody,{size:null},_?(0,l.createElement)(s.TablePlaceholder,{headers:K,caption:(0,n.__)("Loading Attribute Mapping rules","google-listings-and-ads")}):(0,l.createElement)(s.Table,{emptyMessage:(0,n.__)("You have no attribute rules","google-listings-and-ads"),caption:(0,n.__)("Attribute Mapping configuration","google-listings-and-ads"),headers:K,rows:a.map((e=>{return[{display:(t=e.attribute,p.find((e=>e.id===t))?.label||"")},{display:(0,l.createElement)("span",{className:"gla-attribute-mapping__table-label"},e.source)},{display:(0,l.createElement)("span",{className:"gla-attribute-mapping__table-categories"},(0,l.createElement)(E,{categories:e.categories,condition:e.category_condition_type}))},{display:(0,l.createElement)(r.Flex,{justify:"end"},(0,l.createElement)(r.FlexItem,null,(0,l.createElement)(u.Z,{button:(0,l.createElement)(d.Z,{isLink:!0,text:(0,n.__)("Edit","google-listings-and-ads"),eventName:"gla_modal_open",eventProps:{context:"attribute-mapping-manage-rule-modal"}}),modal:(0,l.createElement)(X,{rule:e,onRequestClose:e=>{(0,G.dk)("gla_modal_closed",{context:"attribute-mapping-manage-rule-modal",action:e})}})})),(0,l.createElement)(r.FlexItem,null,(0,l.createElement)(u.Z,{button:(0,l.createElement)(d.Z,{isLink:!0,text:(0,n.__)("Delete","google-listings-and-ads"),eventName:"gla_modal_open",eventProps:{context:"attribute-mapping-delete-rule-modal"}}),modal:(0,l.createElement)($,{rule:e,onRequestClose:e=>{(0,G.dk)("gla_modal_closed",{context:"attribute-mapping-delete-rule-modal",action:e})}})})))}];var t}))})),(0,l.createElement)(r.CardFooter,{align:"between",className:"gla-attribute-mapping__table-footer"},(0,l.createElement)(u.Z,{button:(0,l.createElement)(d.Z,{isSecondary:!0,text:(0,n.__)("Create attribute rule","google-listings-and-ads"),eventName:"gla_modal_open",eventProps:{context:"attribute-mapping-create-rule-modal"}}),modal:(0,l.createElement)(X,{onRequestClose:e=>{(0,G.dk)("gla_modal_closed",{context:"attribute-mapping-create-rule-modal",action:e})}})}),(0,l.createElement)(s.Pagination,{className:"gla-attribute-mapping__pagination",page:e,perPage:10,total:i,showPagePicker:!1,showPerPagePicker:!1,onPageChange:(e,a)=>{t(e),(0,G.eF)("attribute-mapping-rules",e,a)}}),(0,l.createElement)(H,null))))},ee=a(6439),te=a(4121),ae=()=>(0,l.createElement)("div",{className:"gla-attribute-mapping"},(0,l.createElement)(ee.Z,null),(0,l.createElement)(te.Z,null),(0,l.createElement)(i.Z,{title:(0,n.__)("Manage attributes","google-listings-and-ads"),description:(0,l.createElement)(o,null)},(0,l.createElement)(Q,null)))}}]);