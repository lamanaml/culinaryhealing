webpackJsonp([12],{54:function(e,t){e.exports=function(){var e,t=function(t){e=t,e(".repeater").length&&(a(),c())},a=function(){e(".repeater:not([data-init])").length&&(r(),n(),f(),s(),c(),e(".repeater:not([data-init])").attr("data-init",!0))},r=function(){var t=e(".repeater .repeated-item.spare");t.hide(),t.find("*[required]").attr("required",!1).attr("data-required","true")},n=function(){var t=e(".repeater:not([data-init])");t.find(".repeater-footer").append(e('<a href="#" class="plusone">'+Perch.Lang.get("Add an item")+"</a>")),o(),d(),t.on("click","a.plusone",function(t){t.preventDefault();var a=e(t.target);if(a.hasClass("disabled"))return!1;var n=a.closest(".repeater");if(n){var f=n.find(".spare");if(f.length){f.find("*[data-required]").attr("data-required",!1).attr("required",!0);var c=n.find(".repeated-item"),s=p(f,c.length,n.attr("data-prefix"));f.removeClass("spare").fadeIn(function(){var e=n.find(".repeated");e.append(s),e.animate({scrollTop:e.prop("scrollHeight")-e.height()},1e3),s.addClass("spare"),r(),i(n),o()}),d()}}e(window).trigger("Perch.FieldTypes.redraw")})},i=function(t){var a=t.find(".repeated-item, .repeater-footer"),r=t.attr("data-prefix");a.each(function(t,a){var n=e(a),i=t,o=r+"_",d=new RegExp(o+"([0-9]+)_","i");n.find('*[id^="'+o+'"]').each(function(t,a){var n=e(a);n.attr("id",n.attr("id").replace(d,r+"_"+i+"_"))}),n.find('*[name^="'+o+'"]').each(function(t,a){var n=e(a);n.attr("name",n.attr("name").replace(d,r+"_"+i+"_"))}),n.find('label[for^="'+o+'"]').each(function(t,a){var n=e(a);n.attr("for",n.attr("for").replace(d,r+"_"+i+"_"))}),n.find(".index span:not(.icon)").text(i+1)}),o(),d()},o=function(){e(".repeater[data-max]").each(function(t,a){var r=e(a),n=r.find(".repeated-item:not(.spare)"),i=parseInt(r.attr("data-max"));n.length>=i?r.find("a.plusone").addClass("disabled"):r.find("a.plusone").removeClass("disabled")})},d=function(){var t=e(".repeater");t.each(function(t,a){var r=e(a),n=r.find(".repeated-item:not(.spare)");r.attr("data-item-count",n.length),0==n.length?r.addClass("repeater-empty"):r.removeClass("repeater-empty")})},p=function(t,a,r){var n=t.clone(),i=a-1,o=r+"_"+i+"_";n.find('*[id*="'+o+'"]').each(function(t,n){var i=e(n);i.attr("id",i.attr("id").replace(o,r+"_"+a+"_"))}),n.find('*[name*="'+o+'"]').each(function(t,n){var i=e(n);i.attr("name",i.attr("name").replace(o,r+"_"+a+"_"))}),n.find('label[for*="'+o+'"]').each(function(t,n){var i=e(n);i.attr("for",i.attr("for").replace(o,r+"_"+a+"_"))});for(var d=n.get(0).getElementsByTagName("*"),p=0;p<d.length;p++)for(var f=d[p],c=f.attributes,s=0;s<c.length;s++)c[s].value.indexOf(o)!=-1&&(c[s].value=c[s].value.replace(o,r+"_"+a+"_"));return n.find(".index span:not(.icon)").text(a+1),n},f=function(){Perch.UI.Sortables.makeSortable(".repeater:not([data-init]) .repeated",{items:"> .repeated-item",handle:".index",axis:"y",helper:function(t,a){var r=a.children(),n=a.clone();return n.children().each(function(t){e(this).width(r.eq(t).width())}),n},update:function(t,a){i(e(this).parents(".repeater"))},sort:function(t,a){e(this).parents(".repeater").find(".ui-sortable-helper").siblings(".repeated-item").addClass("sorting")},stop:function(t,a){e(this).parents(".repeater").find(".repeated-item").removeClass("sorting")}})},c=function(){e(".repeater:first").parents("form").on("submit",function(){e(".repeater").each(function(t,a){var r=e(a),n=r.find(".repeater-footer input.count");n.val(r.find(".repeated-item:not(.spare)").length),r.find(".spare").remove()})})},s=function(){e(".repeater:not([data-init]) .repeated .rm").each(function(t,a){var r=e(a),n=e('<a href="#">'+Perch.UI.Helpers.icon("core/cancel")+"<span>"+Perch.Lang.get("Delete this item?")+"</span></a>");n.appendTo(r)}),e(".repeater:not([data-init])").on("click",".rm a",function(t){t.preventDefault();var a=e(this),r=a.parents(".repeater");a.parents(".repeated-item").selfHealingRemove({speed:"fast"},function(){i(r)})})},l=function(t){e(t).on("Perch_Init_Editors",function(){a()})};return{init:t,registerEvents:l}}()}});