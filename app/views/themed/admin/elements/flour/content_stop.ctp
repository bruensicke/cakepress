	</div>
</div>
<?php
$url = Router::url(array('action' => 'type'), true);
$tags_url = Router::url(array('controller' => 'tags', 'action' => 'get'), true);
echo $this->Html->scriptBlock("$().ready(function(){
	// $('.tags').tokenInput('$tags_url', {});

$('.caption').live('mouseover mouseout click', function(event) {
	switch(event.type)
	{
		case 'mouseover':
			$(this).toggleClass('hover');
			break;
		case 'mouseout':
			$(this).toggleClass('hover');
			break;
		case 'click':
			// TODO: prevent bubbling.
			// if(event.)
			// console.log(event);
			$(this).next('.wrapper').toggle();
			break;
	}
});	

$('.item').live('mouseover mouseout click', function(event) {
	switch(event.type)
	{
		case 'mouseover':
			$(this).toggleClass('hover');
			break;
		case 'mouseout':
			$(this).toggleClass('hover');
			break;
		case 'click':
			break;
	}
});	

$('.input').live('mouseover mouseout click', function(event) {
	switch(event.type)
	{
		case 'mouseover':
			$(this).toggleClass('hover');
			break;
		case 'mouseout':
			$(this).toggleClass('hover');
			break;
		case 'click':
			break;
	}
});	

	$('.elastic').elastic();
	$('.slugify').slug({slug:'slug', hide: false});
	$('.auto_switch_type').change(function() {
		type = $('.auto_switch_type').attr('value');
		if(type=='') {
			$('div.type_details').html('');
		} else {
			$.get('$url/type:' + type, function(data)
			{
				$('div.type_details').html(data);
			});
		}
	});
});");

