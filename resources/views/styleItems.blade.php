{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('styleID', 'StyleID:') !!}
			{!! Form::text('styleID') !!}
		</li>
		<li>
			{!! Form::label('itemID', 'ItemID:') !!}
			{!! Form::text('itemID') !!}
		</li>
		<li>
			{!! Form::label('consumption', 'Consumption:') !!}
			{!! Form::text('consumption') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}