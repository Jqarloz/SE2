(function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

if (location.host == "www.dgae.unam.mx") {
    ga('create', 'UA-77016801-1', 'auto');
} else if (location.host == "servicios.dgae.unam.mx") {
    ga('create', 'UA-77016801-2', 'auto');
} else if (location.host == "www.escolar.unam.mx") {
    ga('create', 'UA-77016801-3', 'auto');
} else if (location.host == "escolar0.unam.mx") {
    ga('create', 'UA-77016801-4', 'auto');
}
ga('send', 'pageview');