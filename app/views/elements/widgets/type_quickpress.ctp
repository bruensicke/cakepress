<?php
$data = (isset($data))
	? $data 
	: array();

$quickpress_options = array(
	'title' => __('title', true),
	'content' => __('content', true),
	'tags' => __('tags', true),
);

$fields = (isset($fields))
	? $fields
	: array_keys($quickpress_options);


$caption = (isset($caption))
	? $caption
	: __('Quickpress', true);

$content = (isset($content))
	? $content
	: array();

$header = (isset($header))
	? $header
	: array();

$footer = (isset($footer))
	? $footer
	: array();

if($template == 'admin')
{

	$header[] = __('Configure which fields to see in Quickpress.', true);

	$content[] = $this->Form->input('Widget.data.fields', array(
		'type' => 'select',
		'multiple' => true,
		'options' => $quickpress_options,
	));
	$footer['actions'] = array();
	$footer['actions'][] = $this->Html->link( __('cancel', true), '#', array(
		'class' => '',
	));
	$footer['actions'][] = $this->Html->link( __('cancel', true), '#', array(
		'class' => 'btn',
	));
	$footer['actions'][] = $this->Html->link( __('Save', true), '#', array(
		'class' => 'btn primary',
	));

} else {

	$header[] = __('Please write some content.', true);

	foreach($fields as $field)
	{
		switch($field)
		{
			case 'title':
				$content[] = $this->Form->input('ContentObject.title', array(
					'type' => 'text',
					'default' => 'put your title here',
				));
				break;

			case 'content':
				$content[] = $this->Form->input('ContentObject.content', array(
					'type' => 'textarea',
					'default' => 'put your content here',
				));
				break;

			case 'tags':
				$content[] = $this->Form->input('ContentObject.tags', array(
					'type' => 'text',
					'default' => 'put your tags here',
				));
				break;
		}
	}

	$footer['actions'] = $this->Form->button( __('Save', true), array(
		'class' => 'primary',
	));

}

echo $this->element('flour/box', 
	compact(
		'caption',
		'content',
		'header',
		'footer'
));
