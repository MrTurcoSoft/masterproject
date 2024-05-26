/*! jQuery Validation Plugin - v1.20.0 - 10/10/2023
 * https://jqueryvalidation.org/
 * Copyright (c) 2023 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate.min"],a):"object"==typeof module&&module.exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){return a.extend(a.validator.messages,{required:"Պարտադիր լրացման դաշտ",remote:"Ներմուծեք ճիշտ արժեքը",email:"Ներմուծեք վավեր էլեկտրոնային փոստի հասցե",url:"Ներմուծեք վավեր URL",date:"Ներմուծեք վավեր ամսաթիվ",dateISO:"Ներմուծեք ISO ֆորմատով վավեր ամսաթիվ։",number:"Ներմուծեք թիվ",digits:"Ներմուծեք միայն թվեր",creditcard:"Ներմուծեք ճիշտ բանկային քարտի համար",equalTo:"Ներմուծեք միևնուն արժեքը ևս մեկ անգամ",extension:"Ընտրեք ճիշտ ընդլանումով ֆայլ",maxlength:a.validator.format("Ներմուծեք ոչ ավել քան {0} նիշ"),minlength:a.validator.format("Ներմուծեք ոչ պակաս քան {0} նիշ"),rangelength:a.validator.format("Ներմուծեք {0}֊ից {1} երկարությամբ արժեք"),range:a.validator.format("Ներմուծեք թիվ {0}֊ից {1} միջակայքում"),max:a.validator.format("Ներմուծեք թիվ, որը փոքր կամ հավասար է {0}֊ին"),min:a.validator.format("Ներմուծեք թիվ, որը մեծ կամ հավասար է {0}֊ին")}),a});