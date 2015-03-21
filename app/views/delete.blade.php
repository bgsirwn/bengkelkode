@extends('default')
@section('title')
Delete Confirmation
@stop
@section('content')
Are you sure you want to delete?
{{Form::open(['method'=>'delete','url'=>route('{username}.thread.destroy', [Auth::user()->username, $thread->id])])}}
{{Form::submit('delete')}}                                	
{{Form::close()}}
@stop