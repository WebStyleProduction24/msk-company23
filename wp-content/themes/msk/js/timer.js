(function() { var _id = "98a6ea6a305711cb5b8320fba33e532d"; while (document.getElementById("timer" + _id)) _id = _id + "0";
    document.write("<div id='timer" + _id + "' style='min-width:381px;height:100px;'></div>"); var _t = document.createElement("script");
    _t.src = "/wp-content/themes/msk/js/timer.min.js"; var _f = function(_k) { var l = new MegaTimer(_id, { "view": [1, 1, 1, 0], "type": { "currentType": "1", "params": { "usertime": true, "tz": "3", "utc": 1548979140000 } }, "design": { "type": "plate", "params": { "round": "16", "background": "gradient", "background-color": ["#434343", "#999999"], "effect": "flipchart", "space": "1", "separator-margin": "9", "number-font-family": { "family": "PT Sans", "link": "<link href='http://fonts.googleapis.com/css?family=PT+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>" }, "number-font-size": "60", "number-font-color": "#ffffff", "padding": "12", "separator-on": false, "separator-text": ":", "text-on": true, "text-font-family": { "family": "PT Sans", "link": "<link href='http://fonts.googleapis.com/css?family=PT+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>" }, "text-font-size": "14", "text-font-color": "#3c3939" } }, "designId": 3, "theme": "white", "width": 381, "height": 100 }); if (_k != null) l.run(); };
    _t.onload = _f;
    _t.onreadystatechange = function() { if (_t.readyState == "loaded") _f(1); }; var _h = document.head || document.getElementsByTagName("head")[0];
    _h.appendChild(_t); }).call(this);