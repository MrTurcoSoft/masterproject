/*!
 * FilePondPluginFileValidateType 1.2.8
 * Licensed under MIT, https://opensource.org/licenses/MIT/
 * Please visit https://pqina.nl/filepond/ for details.
 */

/* eslint-disable */

const e=({addFilter:e,utils:t})=>{const{Type:E,isString:T,replaceInString:i,guesstimateMimeType:l,getExtensionFromFilename:n,getFilenameFromURL:_}=t,a=(e,t)=>e.some(e=>/\*$/.test(e)?((e,t)=>{return(/^[^/]+/.exec(e)||[]).pop()===t.slice(0,-2)})(t,e):e===t),o=(e,t,E)=>{if(0===t.length)return!0;const i=(e=>{let t="";if(T(e)){const E=_(e),T=n(E);T&&(t=l(T))}else t=e.type;return t})(e);return E?new Promise((T,l)=>{E(e,i).then(e=>{a(t,e)?T():l()}).catch(l)}):a(t,i)};return e("SET_ATTRIBUTE_TO_OPTION_MAP",e=>Object.assign(e,{accept:"acceptedFileTypes"})),e("ALLOW_HOPPER_ITEM",(e,{query:t})=>!t("GET_ALLOW_FILE_TYPE_VALIDATION")||o(e,t("GET_ACCEPTED_FILE_TYPES"))),e("LOAD_FILE",(e,{query:t})=>new Promise((E,T)=>{if(!t("GET_ALLOW_FILE_TYPE_VALIDATION"))return void E(e);const l=t("GET_ACCEPTED_FILE_TYPES"),n=t("GET_FILE_VALIDATE_TYPE_DETECT_TYPE"),_=o(e,l,n),a=()=>{const e=l.map((e=>t=>null!==e[t]&&(e[t]||t))(t("GET_FILE_VALIDATE_TYPE_LABEL_EXPECTED_TYPES_MAP"))).filter(e=>!1!==e),E=e.filter(function(t,E){return e.indexOf(t)===E});T({status:{main:t("GET_LABEL_FILE_TYPE_NOT_ALLOWED"),sub:i(t("GET_FILE_VALIDATE_TYPE_LABEL_EXPECTED_TYPES"),{allTypes:E.join(", "),allButLastType:E.slice(0,-1).join(", "),lastType:E[e.length-1]})}})};if("boolean"==typeof _)return _?E(e):a();_.then(()=>{E(e)}).catch(a)})),{options:{allowFileTypeValidation:[!0,E.BOOLEAN],acceptedFileTypes:[[],E.ARRAY],labelFileTypeNotAllowed:["File is of invalid type",E.STRING],fileValidateTypeLabelExpectedTypes:["Expects {allButLastType} or {lastType}",E.STRING],fileValidateTypeLabelExpectedTypesMap:[{},E.OBJECT],fileValidateTypeDetectType:[null,E.FUNCTION]}}};"undefined"!=typeof window&&void 0!==window.document&&document.dispatchEvent(new CustomEvent("FilePond:pluginloaded",{detail:e}));export default e;
