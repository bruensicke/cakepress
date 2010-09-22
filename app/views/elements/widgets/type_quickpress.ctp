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

$footer = (isset($footer))
	? $footer
	: array();

if($template == 'admin')
{

	$content[] = $this->Form->input('Widget.data.fields', array(
		'type' => 'select',
		'multiple' => true,
		'options' => $quickpress_options,
	));


} else {

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
					'type' => 'text',
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

	$footer[] = $this->Form->button( __('Save', true), array(
		'class' => 'primary',
	));

}

echo $this->element('flour/box', array(
	'caption' => $caption,
	'content' => (is_array($content)) ? implode($content) : $content,
	'footer' => (is_array($footer)) ? implode($footer) : $footer,
));
