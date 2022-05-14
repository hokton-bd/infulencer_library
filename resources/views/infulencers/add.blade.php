{{ Form::open(['route' => 'infulencers.store']) }}
{{ Form::text('name', null,['class' => 'form-control', 'placeholder' => '名前']) }}
{{ Form::submit('送信', ['class'=>'form-control']) }}
{{ Form::close() }}