<h2>BrowniePHP demo</h2>

<p>Username: <strong>demo@browniephp.org</strong></p>

<p>Password: <strong>123</strong></p>

<p>Access URL: <strong><?php
echo $html->link(
	'click here',
	array('plugin' => 'brownie', 'controller' => 'brownie', 'action' => 'login')
) ?></strong></p>
