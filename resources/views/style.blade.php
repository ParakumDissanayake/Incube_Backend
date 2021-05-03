{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('styleCode', 'StyleCode:') !!}
			{!! Form::text('styleCode') !!}
		</li>
		<li>
			{!! Form::label('styleName', 'StyleName:') !!}
			{!! Form::text('styleName') !!}
		</li>
		<li>
			{!! Form::label('styleQuantity', 'StyleQuantity:') !!}
			{!! Form::text('styleQuantity') !!}
		</li>
		<li>
			{!! Form::label('styleStatus', 'StyleStatus:') !!}
			{!! Form::text('styleStatus') !!}
		</li>
		<li>
			{!! Form::label('styleType', 'StyleType:') !!}
			{!! Form::text('styleType') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}