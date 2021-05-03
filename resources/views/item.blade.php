{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('itemID', 'ItemID:') !!}
			{!! Form::text('itemID') !!}
		</li>
		<li>
			{!! Form::label('categoryID', 'CategoryID:') !!}
			{!! Form::text('categoryID') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}