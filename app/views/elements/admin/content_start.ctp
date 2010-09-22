<?php
$title = (isset($this->title))
	? $this->title
	: null;


echo (isset($title))
	? $this->Html->tag('h2', $title)
	: null;