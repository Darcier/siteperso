const $ = require('jquery');

require('../css/common.scss');
require('bootstrap');
require('@fortawesome/fontawesome-free/js/all.js');

$(function() {
    $('.page-header-p3').html(function(i, html) {
        var chars = $.trim(html).split("");

        return '<span>' + chars.join('</span><span>') + '</span>';
    });
    var today = new Date();
    var myAge = today.getFullYear() - 1995;
    $('#myAge').html(myAge + ' ans');
});