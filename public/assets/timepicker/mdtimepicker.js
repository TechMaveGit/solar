/* -- DO NOT REMOVE --
 * jQuery MDTimePicker v1.0.2 plugin
 * https://github.com/dmuy/MDTimePicker
 * 
 * Author: Dionlee Uy
 * Email: dionleeuy@gmail.com
 *
 * @requires jQuery
 * -- DO NOT REMOVE -- 
 */
! function (e) {
  "function" == typeof define && define.amd ? define(["jquery"], e) : "object" == typeof exports ? module.exports = e(require("jquery")) : e(jQuery)
}(function (e) {
  if ("undefined" == typeof e) throw new Error("MDTimePicker: This plugin requires jQuery");
  var t = "mdtimepicker",
    i = 120,
    s = 90,
    n = 360,
    r = 30,
    a = 6,
    o = [9, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123],
    c = function (t, i) {
      this.hour = t, this.minute = i, this.format = function (t, i) {
        var s = this,
          n = (t.match(/h/g) || []).length > 1;
        return e.trim(t.replace(/(hh|h|mm|ss|tt|t)/g, function (e) {
          switch (e.toLowerCase()) {
            case "h":
              var t = s.getHour(!0);
              return i && 10 > t ? "0" + t : t;
            case "hh":
              return s.hour < 10 ? "0" + s.hour : s.hour;
            case "mm":
              return s.minute < 10 ? "0" + s.minute : s.minute;
            case "ss":
              return "00";
            case "t":
              return n ? "" : s.getPeriod().toLowerCase();
            case "tt":
              return n ? "" : s.getPeriod()
          }
        }))
      }, this.setHour = function (e) {
        this.hour = e
      }, this.getHour = function (e) {
        return e ? [0, 12].indexOf(this.hour) >= 0 ? 12 : this.hour % 12 : this.hour
      }, this.invert = function () {
        "AM" === this.getPeriod() ? this.setHour(this.getHour() + 12) : this.setHour(this.getHour() - 12)
      }, this.setMinutes = function (e) {
        this.minute = e
      }, this.getMinutes = function () {
        return this.minute
      }, this.getPeriod = function () {
        return this.hour < 12 ? "AM" : "PM"
      }
    },
    d = function (t, i) {
      var s = this;
      this.visible = !1, this.activeView = "hours", this.hTimeout = null, this.mTimeout = null, this.input = e(t), this.config = i, this.time = new c(0, 0), this.selected = new c(0, 0), this.timepicker = {
        overlay: e('<div class="mdtimepicker hidden"></div>'),
        wrapper: e('<div class="mdtp__wrapper" tabindex="0"></div>'),
        timeHolder: {
          wrapper: e('<section class="mdtp__time_holder"></section>'),
          hour: e('<span class="mdtp__time_h">12</span>'),
          dots: e('<span class="mdtp__timedots">:</span>'),
          minute: e('<span class="mdtp__time_m">00</span>'),
          am_pm: e('<span class="mdtp__ampm">AM</span>')
        },
        clockHolder: {
          wrapper: e('<section class="mdtp__clock_holder"></section>'),
          am: e('<span class="mdtp__am">AM</span>'),
          pm: e('<span class="mdtp__pm">PM</span>'),
          clock: {
            wrapper: e('<div class="mdtp__clock"></div>'),
            dot: e('<span class="mdtp__clock_dot"></span>'),
            hours: e('<div class="mdtp__hour_holder"></div>'),
            minutes: e('<div class="mdtp__minute_holder"></div>')
          },
          buttonsHolder: {
            wrapper: e('<div class="mdtp__buttons">'),
            btnClear: e('<span class="mdtp__button clear-btn">Clear</span>'),
            btnOk: e('<span class="mdtp__button ok">Ok</span>'),
            btnCancel: e('<span class="mdtp__button cancel">Cancel</span>')
          }
        }
      }, this.setMinTime(this.input.data("mintime") || this.config.minTime), this.setMaxTime(this.input.data("maxtime") || this.config.maxTime);
      var n = s.timepicker;
      if (s.setup().appendTo("body"), n.overlay.click(function () {
          s.hide()
        }), n.wrapper.click(function (e) {
          e.stopPropagation()
        }).on("keydown", function (e) {
          27 === e.keyCode && s.hide()
        }), n.clockHolder.am.click(function () {
          "AM" !== s.selected.getPeriod() && s.setPeriod("am")
        }), n.clockHolder.pm.click(function () {
          "PM" !== s.selected.getPeriod() && s.setPeriod("pm")
        }), n.timeHolder.hour.click(function () {
          "hours" !== s.activeView && s.switchView("hours")
        }), n.timeHolder.minute.click(function () {
          "minutes" !== s.activeView && s.switchView("minutes")
        }), n.clockHolder.buttonsHolder.btnOk.click(function () {
          var e = s.selected;
          if (!s.isDisabled(e.getHour(), e.getMinutes(), !1)) {
            s.setValue(e);
            var t = s.getFormattedTime();
            s.triggerChange({
              time: t.time,
              value: t.value
            }), s.hide()
          }
        }), n.clockHolder.buttonsHolder.btnCancel.click(function () {
          s.hide()
        }), s.config.clearBtn && n.clockHolder.buttonsHolder.btnClear.click(function () {
          s.input.val("").attr("data-time", null).attr("value", ""), s.triggerChange({
            time: null,
            value: ""
          }), s.hide()
        }), s.input.on("keydown", function (e) {
          return 13 === e.keyCode && s.show(), !(o.indexOf(e.which) < 0 && s.config.readOnly)
        }).on("click", function () {
          s.show()
        }).prop("readonly", !0), "" !== s.input.val()) {
        var r = s.parseTime(s.input.val(), s.config.format);
        s.setValue(r)
      } else {
        var r = s.getSystemTime();
        s.time = new c(r.hour, r.minute)
      }
      s.resetSelected(), s.switchView(s.activeView)
    };
  d.prototype = {
    constructor: d,
    setup: function () {
      var t = this,
        o = t.timepicker,
        c = o.overlay,
        d = o.wrapper,
        u = o.timeHolder,
        m = o.clockHolder;
      u.wrapper.append(u.hour).append(u.dots).append(u.minute).appendTo(d), t.config.is24hour || u.wrapper.append(u.am_pm);
      for (var l = t.config.is24hour ? 24 : 12, h = 0; l > h; h++) {
        var p = h + 1,
          f = (i + h * r) % n - (t.config.is24hour && 13 > p ? 15 : 0),
          g = 24 === p,
          v = e('<div class="mdtp__digit rotate-' + f + '" data-hour="' + (g ? 0 : p) + '"><span>' + (g ? "00" : p) + "</span></div>");
        t.config.is24hour && 13 > p && v.addClass("inner--digit"), v.find("span").click(function () {
          var i = parseInt(e(this).parent().data("hour")),
            s = t.selected.getPeriod(),
            n = t.config.is24hour ? i : (i + ("PM" === s && 12 > i || "AM" === s && 12 === i ? 12 : 0)) % 24,
            r = t.isDisabled(n, 0, !0);
          r || (t.setHour(n), t.switchView("minutes"))
        }), m.clock.hours.append(v)
      }
      for (var h = 0; 60 > h; h++) {
        var k = 10 > h ? "0" + h : h,
          f = (s + h * a) % n,
          w = e('<div class="mdtp__digit rotate-' + f + '" data-minute="' + h + '"></div>');
        h % 5 === 0 ? w.addClass("marker").html("<span>" + k + "</span>") : w.html("<span></span>"), w.find("span").click(function () {
          var i = parseInt(e(this).parent().data("minute")),
            s = t.selected.getHour(),
            n = t.isDisabled(s, i, !0);
          n || t.setMinute(i)
        }), m.clock.minutes.append(w)
      }
      return t.config.is24hour || m.clock.wrapper.append(m.am).append(m.pm), m.clock.wrapper.append(m.clock.dot).append(m.clock.hours).append(m.clock.minutes).appendTo(m.wrapper), t.config.clearBtn && m.buttonsHolder.wrapper.append(m.buttonsHolder.btnClear), m.buttonsHolder.wrapper.append(m.buttonsHolder.btnCancel).append(m.buttonsHolder.btnOk).appendTo(m.wrapper), m.wrapper.appendTo(d), d.attr("data-theme", t.input.data("theme") || t.config.theme || e.fn.mdtimepicker.defaults.theme), d.appendTo(c), c
    },
    setHour: function (t) {
      if ("undefined" == typeof t) throw new Error("Expecting a value.");
      var i = this,
        s = !i.config.is24hour;
      this.selected.setHour(t);
      var n = this.selected.getHour(s);
      this.timepicker.timeHolder.hour.text(s ? n : this.selected.format("hh")), this.timepicker.clockHolder.clock.hours.children("div").each(function (t, i) {
        var s = e(i),
          r = s.data("hour");
        s[r === n ? "addClass" : "removeClass"]("active")
      })
    },
    setMinute: function (t) {
      if ("undefined" == typeof t) throw new Error("Expecting a value.");
      this.selected.setMinutes(t), this.timepicker.timeHolder.minute.text(10 > t ? "0" + t : t), this.timepicker.clockHolder.clock.minutes.children("div").each(function (i, s) {
        var n = e(s),
          r = n.data("minute");
        n[r === t ? "addClass" : "removeClass"]("active")
      })
    },
    setPeriod: function (e) {
      if ("undefined" == typeof e) throw new Error("Expecting a value.");
      this.selected.getPeriod() !== e.toUpperCase() && this.selected.invert();
      var t = this.selected.getPeriod();
      this.setDisabled(this.activeView), this.timepicker.timeHolder.am_pm.text(t), this.timepicker.clockHolder.am["AM" === t ? "addClass" : "removeClass"]("active"), this.timepicker.clockHolder.pm["PM" === t ? "addClass" : "removeClass"]("active")
    },
    setValue: function (e) {
      if ("undefined" == typeof e) throw new Error("Expecting a value.");
      var t = "string" == typeof e ? this.parseTime(e, this.config.format) : e;
      this.time = new c(t.hour, t.minute);
      var i = this.getFormattedTime();
      this.input.val(i.value).attr("data-time", i.time).attr("value", i.value)
    },
    setMinTime: function (e) {
      this.minTime = e
    },
    setMaxTime: function (e) {
      this.maxTime = e
    },
    setDisabled: function (t) {
      if ("hours" === t || "minutes" === t) {
        var i = this,
          s = this.timepicker.clockHolder.clock;
        "hours" === t && s.hours.find(".mdtp__digit").each(function (t, s) {
          var n = e(s),
            r = parseInt(n.data("hour")),
            a = i.selected.getPeriod(),
            o = new c(r, 0);
          i.config.is24hour || a === o.getPeriod() || o.invert();
          var d = i.isDisabled(o.getHour(), 0, !0);
          n[d ? "addClass" : "removeClass"]("digit--disabled")
        }), "minutes" === t && s.minutes.find(".mdtp__digit").each(function (t, s) {
          var n = e(s),
            r = parseInt(n.data("minute")),
            a = i.selected.getHour(),
            o = i.isDisabled(a, r, !0);
          n[o ? "addClass" : "removeClass"]("digit--disabled")
        })
      }
    },
    isDisabled: function (e, t, i) {
      var s = this,
        n = null,
        r = null,
        a = null,
        o = null,
        c = new Date,
        d = new Date(c.getFullYear(), c.getMonth(), c.getDate(), e, t, 0, 0),
        u = "hours" === s.activeView;
      return s.minTime && (n = "now" === s.minTime ? s.getSystemTime() : s.parseTime(s.minTime)), s.maxTime && (a = "now" === s.maxTime ? s.getSystemTime() : s.parseTime(s.maxTime)), n && (r = new Date(c.getFullYear(), c.getMonth(), c.getDate(), n.getHour(), u && i ? 0 : n.getMinutes(), 0, 0)), a && (o = new Date(c.getFullYear(), c.getMonth(), c.getDate(), a.getHour(), u && i ? 0 : a.getMinutes(), 0, 0)), r && r > d || o && d > o
    },
    resetSelected: function () {
      this.setHour(this.time.hour), this.setMinute(this.time.minute), this.setPeriod(this.time.getPeriod())
    },
    getFormattedTime: function () {
      var e = this.time.format(this.config.timeFormat, !1),
        t = this.time.format(this.config.format, this.config.hourPadding);
      return {
        time: e,
        value: t
      }
    },
    getSystemTime: function () {
      var e = new Date;
      return new c(e.getHours(), e.getMinutes())
    },
    parseTime: function (e, t) {
      var i = this,
        s = "undefined" == typeof t ? i.config.format : t,
        n = (s.match(/h/g) || []).length,
        r = n > 1,
        a = ((s.match(/m/g) || []).length, (s.match(/t/g) || []).length),
        o = e.length,
        d = s.indexOf("h"),
        u = s.lastIndexOf("h"),
        m = "",
        l = "",
        h = "";
      if (i.config.hourPadding || r) m = e.substr(d, 2);
      else {
        var p = s.substring(d - 1, d),
          f = s.substring(u + 1, u + 2);
        m = u === s.length - 1 ? e.substring(e.indexOf(p, d - 1) + 1, o) : 0 === d ? e.substring(0, e.indexOf(f, d)) : e.substring(e.indexOf(p, d - 1) + 1, e.indexOf(f, d + 1))
      }
      s = s.replace(/(hh|h)/g, m);
      var g = s.indexOf("m"),
        v = s.lastIndexOf("m"),
        k = s.indexOf("t"),
        w = s.substring(g - 1, g);
      s.substring(v + 1, v + 2);
      l = v === s.length - 1 ? e.substring(e.indexOf(w, g - 1) + 1, o) : 0 === g ? e.substring(0, 2) : e.substr(g, 2), h = r ? parseInt(m) > 11 ? a > 1 ? "PM" : "pm" : a > 1 ? "AM" : "am" : e.substr(k, 2);
      var b = "pm" === h.toLowerCase(),
        H = new c(parseInt(m), parseInt(l));
      return (b && parseInt(m) < 12 || !b && 12 === parseInt(m)) && H.invert(), H
    },
    switchView: function (e) {
      var t = this,
        i = this.timepicker,
        s = 350;
      "hours" !== e && "minutes" !== e || (t.activeView = e, t.setDisabled(e), i.timeHolder.hour["hours" === e ? "addClass" : "removeClass"]("active"), i.timeHolder.minute["hours" === e ? "removeClass" : "addClass"]("active"), i.clockHolder.clock.hours.addClass("animate"), "hours" === e && i.clockHolder.clock.hours.removeClass("hidden"), clearTimeout(t.hTimeout), t.hTimeout = setTimeout(function () {
        "hours" !== e && i.clockHolder.clock.hours.addClass("hidden"), i.clockHolder.clock.hours.removeClass("animate")
      }, "hours" === e ? 20 : s), i.clockHolder.clock.minutes.addClass("animate"), "minutes" === e && i.clockHolder.clock.minutes.removeClass("hidden"), clearTimeout(t.mTimeout), t.mTimeout = setTimeout(function () {
        "minutes" !== e && i.clockHolder.clock.minutes.addClass("hidden"), i.clockHolder.clock.minutes.removeClass("animate")
      }, "minutes" === e ? 20 : s))
    },
    show: function () {
      var t = this;
      if ("" === t.input.val()) {
        var i = t.getSystemTime();
        this.time = new c(i.hour, i.minute)
      }
      t.resetSelected(), e("body").attr("mdtimepicker-display", "on"), t.timepicker.wrapper.addClass("animate"), t.timepicker.overlay.removeClass("hidden").addClass("animate"), setTimeout(function () {
        t.timepicker.overlay.removeClass("animate"), t.timepicker.wrapper.removeClass("animate").focus(), t.visible = !0, t.input.blur()
      }, 10)
    },
    hide: function () {
      var t = this;
      t.timepicker.overlay.addClass("animate"), t.timepicker.wrapper.addClass("animate"), setTimeout(function () {
        t.switchView("hours"), t.timepicker.overlay.addClass("hidden").removeClass("animate"), t.timepicker.wrapper.removeClass("animate"), e("body").removeAttr("mdtimepicker-display"), t.visible = !1, t.input.focus()
      }, 300)
    },
    destroy: function () {
      var e = this;
      e.input.removeData(t).unbind("keydown").unbind("click").removeProp("readonly"), e.timepicker.overlay.remove()
    },
    triggerChange: function (t) {
      this.input.trigger(e.Event("timechanged", t)).trigger("onchange").trigger("change")
    }
  }, e.fn.mdtimepicker = function () {
    var i = arguments,
      s = i[0],
      n = e.extend({}, e.fn.mdtimepicker.defaults);
    return "object" == typeof s && s.is24hour && (n.format = "hh:mm"), e(this).each(function () {
      var r = this,
        a = e(this),
        o = e(this).data(t),
        c = e.extend({}, n, a.data(), "object" == typeof s && s);
      o || a.data(t, o = new d(r, c)), "string" == typeof s && o[s].apply(o, Array.prototype.slice.call(i).slice(1))
    })
  }, e.fn.mdtimepicker.defaults = {
    timeFormat: "hh:mm:ss.000",
    format: "h:mm tt",
    theme: "blue",
    hourPadding: !1,
    clearBtn: !1,
    is24hour: !1
  }
});