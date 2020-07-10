setInterval(function () {
  $("head title").html($("head title").html().substring(1) + $("head title").html().substring(0,1));
}, 300);