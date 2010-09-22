<?php
echo $this->Html->div('user_info btnbar');

	if(true)
	{
		echo String::insert( __('Hello :username | :logoff', true), array(
			'username' => 'd1rk',
			'logoff' => $this->Html->link( __('logout', true), '#'),
		));
	}

echo $this->Html->tag('/div'); //div.fav_actions

echo $this->Html->div('fav_actions btnbar');

	$fav_actions = array(
		$this->Html->link( __('New Article', true), '#'),
		$this->Html->link( __('New Draft', true), '#'),
		$this->Html->link( __('New Page', true), '#'),
		$this->Html->link( __('Upload File', true), '#'),
	);

	echo $this->Html->nestedList($fav_actions);

echo $this->Html->tag('/div'); //div.user_info

