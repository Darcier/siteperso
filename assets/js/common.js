const $ = require('jquery');
require('../css/common.scss');
require('bootstrap');
require('@fortawesome/fontawesome-free/js/all.js');

$(function() {
    $('.page-header-p3').html(function(i, html) {
        var chars = $.trim(html).split("");

        return '<span>' + chars.join('</span><span>') + '</span>';
    });
});