@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Listing</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="panel-body">
                            @include('inc.messages')
                            {!! Form::open(['method'=>'POST', 'action'=>'ListingsController@store']) !!}
                                <div class="form-group">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Company name']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('website', null, ['class' => 'form-control', 'placeholder' => 'Company website']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone number']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::textarea('bio', null, ['class' => 'form-control', 'placeholder' => 'Company Introduction']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
