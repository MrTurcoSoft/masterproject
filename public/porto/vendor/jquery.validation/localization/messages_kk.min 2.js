/*! jQuery Validation Plugin - v1.20.0 - 10/10/2023
 * https://jqueryvalidation.org/
 * Copyright (c) 2023 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate.min"],a):"object"==typeof module&&module.exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){return a.extend(a.validator.messages,{required:"Бұл өрісті міндетті түрде толтырыңыз.",remote:"Дұрыс мағына енгізуіңізді сұраймыз.",email:"Нақты электронды поштаңызды енгізуіңізді сұраймыз.",url:"Нақты URL-ды енгізуіңізді сұраймыз.",date:"Нақты URL-ды енгізуіңізді сұраймыз.",dateISO:"Нақты ISO форматымен сәйкес датасын енгізуіңізді сұраймыз.",number:"Күнді енгізуіңізді сұраймыз.",digits:"Тек қана сандарды енгізуіңізді сұраймыз.",creditcard:"Несие картасының нөмірін дұрыс енгізуіңізді сұраймыз.",equalTo:"Осы мәнді қайта енгізуіңізді сұраймыз.",extension:"Файлдың кеңейтуін дұрыс таңдаңыз.",maxlength:a.validator.format("Ұзындығы {0} символдан көр болмасын."),minlength:a.validator.format("Ұзындығы {0} символдан аз болмасын."),rangelength:a.validator.format("Ұзындығы {0}-{1} дейін мән енгізуіңізді сұраймыз."),range:a.validator.format("Пожалуйста, введите число от {0} до {1}. - {0} - {1} санын енгізуіңізді сұраймыз."),max:a.validator.format("{0} аз немесе тең санын енгізуіңіді сұраймыз."),min:a.validator.format("{0} көп немесе тең санын енгізуіңізді сұраймыз.")}),a});