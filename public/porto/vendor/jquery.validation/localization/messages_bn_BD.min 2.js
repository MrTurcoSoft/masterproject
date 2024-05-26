/*! jQuery Validation Plugin - v1.20.0 - 10/10/2023
 * https://jqueryvalidation.org/
 * Copyright (c) 2023 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate.min"],a):"object"==typeof module&&module.exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){return a.extend(a.validator.messages,{required:"এই তথ্যটি আবশ্যক।",remote:"এই তথ্যটি ঠিক করুন।",email:"অনুগ্রহ করে একটি সঠিক মেইল ঠিকানা লিখুন।",url:"অনুগ্রহ করে একটি সঠিক লিঙ্ক দিন।",date:"তারিখ সঠিক নয়।",dateISO:"অনুগ্রহ করে একটি সঠিক (ISO) তারিখ লিখুন।",number:"অনুগ্রহ করে একটি সঠিক নম্বর লিখুন।",digits:"এখানে শুধু সংখ্যা ব্যবহার করা যাবে।",creditcard:"অনুগ্রহ করে একটি ক্রেডিট কার্ডের সঠিক নম্বর লিখুন।",equalTo:"একই মান আবার লিখুন।",extension:"সঠিক ধরনের ফাইল আপলোড করুন।",maxlength:a.validator.format("{0}টির বেশি অক্ষর লেখা যাবে না।"),minlength:a.validator.format("{0}টির কম অক্ষর লেখা যাবে না।"),rangelength:a.validator.format("{0} থেকে {1} টি অক্ষর সম্বলিত মান লিখুন।"),range:a.validator.format("{0} থেকে {1} এর মধ্যে একটি মান ব্যবহার করুন।"),max:a.validator.format("অনুগ্রহ করে {0} বা তার চাইতে কম মান ব্যবহার করুন।"),min:a.validator.format("অনুগ্রহ করে {0} বা তার চাইতে বেশি মান ব্যবহার করুন।")}),a});