<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3808395-6']);
  _gaq.push(['_setDomainName', '.browniephp.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<h2>BrowniePHP demo</h2>

<p>Username: <strong>demo@browniephp.org</strong></p>

<p>Password: <strong>123</strong></p>

<p>Access URL: <strong><?php
echo $html->link(
	'click here',
	array('plugin' => 'brownie', 'controller' => 'brownie', 'action' => 'login')
) ?></strong></p>
