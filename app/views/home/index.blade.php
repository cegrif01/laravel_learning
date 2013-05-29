
@section('content')
        {{ Form::open(array('action' => 'HomeController@index')) }}
        {{ Form::label('firstName', 'First Name:') }}
        {{ Form::text('firstName') }}
        {{ Form::close() }}
@stop