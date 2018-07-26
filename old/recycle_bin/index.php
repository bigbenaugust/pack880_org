<?php
if (!ini_get('date.timezone')) {
        ini_set('date.timezone', 'America/New_York');
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title><?php print $_SERVER['SERVER_NAME']; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css" media="screen">  
/* RESET */
html {
        color:#000;
        background:#FFF;
}
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, code, form, fieldset, legend, input, textarea, p, blockquote, th, td {
        margin:0;
        padding:0;
}
table {
        border-collapse:collapse;
        border-spacing:0;
}
fieldset, img {
        border:0;
}
address, caption, cite, code, dfn, em, strong, th, var {
        font-style:normal;
        font-weight:normal;
}
li {
        list-style:none;
}
caption, th {
        text-align:left;
}
h1, h2, h3, h4, h5, h6 {
        font-size:100%;
        font-weight:normal;
}
q:before, q:after {
        content:'';
}
abbr, acronym {
        border:0;
        font-variant:normal;
}
sup {
        vertical-align:text-top;
}
sub {
        vertical-align:text-bottom;
}
input, textarea, select {
        font-family:inherit;
        font-size:inherit;
        font-weight:inherit;
}
legend {
        color:#000;
}
/*fonts*/
body {
        font:13px/1.231 arial, helvetica, clean, sans-serif;
*font-size:small;
*font:x-small;
}
table {
        font-size:inherit;
        font:100%;
}
pre, code, kbd, samp, tt {
        font-family:monospace;
*font-size:108%;
        line-height:100%;
}
/*base*/
h1 {
        font-size:138.5%;
}
h2 {
        font-size:123.1%;
}
h3 {
        font-size:108%;
}
h1, h2, h3 {
        margin:1em 0;
}
h1, h2, h3, h4, h5, h6, strong {
        font-weight:bold;
}
abbr, acronym {
        border-bottom:1px dotted #000;
        cursor:help;
}
em {
        font-style:italic;
}
blockquote, ul, ol, dl {
        margin:1em;
}
ol, ul, dl {
        margin-left:2em;
}
ol li {
        list-style:decimal outside;
}
ul li {
        list-style:disc outside;
}
dl dd {
        margin-left:1em;
}
th, td {
        border:1px solid #000;
        padding:.5em;
}
th {
        font-weight:bold;
        text-align:center;
}
caption {
        margin-bottom:.5em;
        text-align:center;
}
p, fieldset, table, pre {
        margin-bottom:1em;
}
input[type=text], input[type=password], textarea {
        width:23.25em;
*width:20em;
}
/*Slick Link */

#slicklink a:visited {
        color:#fff;
        text-decoration: none;
}
a:active {
        color:#000
}
a:hover {
        color:gray;
        text-decoration:none;
}
/* Page defaults */


body {
        font-family:Arial, Helvetica, sans-serif;
        font-size:12px;
        color:#000;
        text-align:center;
}
#header ul, #footer ul {
        margin:0;
        padding:0;
        text-align:center;
        line-height:20px;
}
#header ul li, #footer ul li {
        float: left;
        margin-right:20px;
        list-style-type:none;
}

a {
        color:#001e9f;
        text-decoration:none;
}
hr {
        border: 1px solid #eee;
        width: 960px;
        margin:0 auto;
}
/* Page Container */
#container {
        width:960px;
        margin:0px auto;
        text-align:left;
}
/* Page Heading */
#header {
        width:400px;
        padding-top:10px;
}
#search {
        width:900px;
        text-align:left;
        clear:both;
}
#main {
        clear:both;
        padding:5px;
        width:960px;
        min-height:200px;
        background: transparent url(http://www.ait.com/images/long-gradient.png) repeat-x bottom;
        border: 1px solid #ccc;
        padding-bottom: 20px;
}
#left {
        width:400px;
        float:left;
        padding-top:20px;
        padding-left:20px;
}
#middle {
        width:915px;
        float:left;
        padding-top:20px;
        padding-left:20px;
}
#right {
        width:500px;
        float:left;
        padding-top:20px;
        padding-right:20px;
}

        #main h3 {
        color:#c00;
        font-weight:bold;
        font-size: 153.9%;
}
#footer {
        margin-top:10px;
        width:960px;

        clear:both;
        text-align:left
}
.blur {
        color: #999;
}
#search_area {
        float: left;
        width: 400px;
        background: url(http://www.ait.com/images/tybit-logo.png) no-repeat;
        height: 99px;
        padding-left: 192px;
        behavior: url(http://www.ait.com/css/iepngfix.htc);
}
.png {
        behavior: url(http://www.ait.com/images/iepngfix.htc);
}
#cpr {
        text-align: center;
        margin-top: 20px;
}
h1 {
        font-size: 245%;
        font-family:Arial Black, Arial;
}
h1 span {
        color:#c00;
}
</style>

</head>
<body>
<div style="width:960px; text-align:left; margin:auto; color:#001e9f">
  <h1> <b>Future Home of Pack880.org
    </b></h1>
</div><!-- /search -->
<div id="container">
        <div id="main">

<h3>Web hosting provided by <a href="http://www.ait.com/?provided-by">AIT, Inc.</a></h3>

<?php /*/ ?>
<div style="margin:10px;float:left;width:610px;height:120px;padding-top:20px;padding-left:20px;">
  <div id="search_area">
          <div>
            <div id="header">
              <div style="float:left;" id="source_select">
                <ul>
                  <li><a href="#">Web</a></li>
                  <li><a href="#">Image</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Music</a></li>
                  <li><a href="#">Local</a></li>
                </ul>
              </div>
              <br style="clear:both;" />
            </div>
          </div>
          <div style="float: left; margin-top: 10px">
            <form id="tybitminisearch" method="get" action="http://www.tybit.com/search/">
              <input type="hidden" value="Web" name="t"/>
              <input type="text" title="Perform a Unified Search" id="t_search" name="q" size="35" />
              <input type="submit" onClick="javascript: return inject(this)" id="sb" value="Web Search" title="Perform tyBit Search" />
            </form>
            <br />
          </div>
    </div>
                </div>
<div style="margin:10px;float:left; width:200px; margin-left:20px; padding:10px;">
          <p align="center"><strong>Place Your Ad Here<br />
          </strong>  </p>
    <p align="left" style="margin:"><strong><u><a href="http://ads.tyBit.com">Register Your Keywords Now!</a></u></strong> <br />
        100% Click Fraud Free!<br />
  <a href="http://ads.tyBit.com">http://ads.tyBit.com</a></p>
    <h2 align="center" style="margin:"><a href="http://www.tybit.com/download.php">Download tyBit FREE!</a></h2>
   <p align="center">&nbsp;</p>
      </div>
          <br style="clear:both;" />
<?php /**/ ?>

        </div><!-- /main -->
</div>
<div id="footer" style="margin:auto">
        <div align="left" style="padding-top:10px;">Copyright &copy; AIT, Inc. 2007-<?php print date('Y'); ?>, All Rights Reserved.</div>
</div>
<!-- /footer -->
</div>
<!-- /container -->
<script src="http://www.ait.com/js/jquery-1.2.2.pack.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" charset="utf-8">
  var tybit_source = "Web";
  
  $(document).ready(function(){
    $("#source_select a").click(function(){
      $(this).parent().children().removeClass("active");
      document.forms[0].t.value = window.tybit_source = $(this).text();
      $(this).addClass("active");
      $("#sbox").removeClass().addClass(window.tybit_source.toLowerCase());
      $("#sb").attr("value", window.tybit_source + " Search");  
      return false;
    });
  });

  function inject(input) {
    if ("createEvent" in document) {
      var element = document.createElement("tyBitSearch");
      element.setAttribute("query", input.form.q.value);
      element.setAttribute("source", window.tybit_source);
      document.documentElement.appendChild(element);
      var evt = document.createEvent("Events");
      evt.initEvent("tyBitSearchEvent", true, false);
      element.dispatchEvent(evt);
    }
    return true;
  }
</script>
</body>
</html>
