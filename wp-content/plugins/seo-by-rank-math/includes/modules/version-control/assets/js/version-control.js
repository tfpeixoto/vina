!function(){"use strict";var n,r={n:function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return r.d(t,{a:t}),t},d:function(n,t){for(var e in t)r.o(t,e)&&!r.o(n,e)&&Object.defineProperty(n,e,{enumerable:!0,get:t[e]})},o:function(n,r){return Object.prototype.hasOwnProperty.call(n,r)}},t=jQuery;(n=r.n(t)())((function(){n(".rank-math-rollback-form").on("submit",(function(){if(!confirm(rankMath.rollbackConfirm.replace("%s",n("#rm_rollback_version").val())))return!1;n("#rm-rollback-button").prop("disabled",!0),n(".rollback-loading-indicator").removeClass("hidden")}));var r=n("#rm-rollback-button");n("#rm_rollback_version").on("change",(function(){r.text(r.data("buttonlabel").replace("%s",n(this).val()))})).trigger("change"),n('input[name="enable_auto_update"]').on("change",(function(){n("#control_update_notification_email").toggleClass("hidden","on"===n(this).attr("value"))})).filter(":checked").trigger("change")}))}();