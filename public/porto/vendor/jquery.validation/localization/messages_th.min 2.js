/*! jQuery Validation Plugin - v1.20.0 - 10/10/2023
 * https://jqueryvalidation.org/
 * Copyright (c) 2023 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate.min"],a):"object"==typeof module&&module.exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){return a.extend(a.validator.messages,{required:"โปรดระบุ",remote:"โปรดแก้ไขให้ถูกต้อง",email:"โปรดระบุที่อยู่อีเมล์ที่ถูกต้อง",url:"โปรดระบุ URL ที่ถูกต้อง",date:"โปรดระบุวันที่ ที่ถูกต้อง",dateISO:"โปรดระบุวันที่ ที่ถูกต้อง (ระบบ ISO).",number:"โปรดระบุทศนิยมที่ถูกต้อง",digits:"โปรดระบุจำนวนเต็มที่ถูกต้อง",creditcard:"โปรดระบุรหัสบัตรเครดิตที่ถูกต้อง",equalTo:"โปรดระบุค่าเดิมอีกครั้ง",extension:"โปรดระบุค่าที่มีส่วนขยายที่ถูกต้อง",maxlength:a.validator.format("โปรดอย่าระบุค่าที่ยาวกว่า {0} อักขระ"),minlength:a.validator.format("โปรดอย่าระบุค่าที่สั้นกว่า {0} อักขระ"),rangelength:a.validator.format("โปรดอย่าระบุค่าความยาวระหว่าง {0} ถึง {1} อักขระ"),range:a.validator.format("โปรดระบุค่าระหว่าง {0} และ {1}"),max:a.validator.format("โปรดระบุค่าน้อยกว่าหรือเท่ากับ {0}"),min:a.validator.format("โปรดระบุค่ามากกว่าหรือเท่ากับ {0}")}),a});