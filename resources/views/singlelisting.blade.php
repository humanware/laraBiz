@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $listing->name }} <span class="float-right"><a href="{{ route('listings.index')  }}" class="btn btn-outline-success btn-xs">Go Back</a></span></div>

                    <div class="card-body">

                        <div class="panel-body">
                            @if($listing)
                                <ul class="list-group">
                                    <li class="list-group-item"><strong>Address:</strong> {{$listing->address}}</li>
                                    <li class="list-group-item"><strong>Phone:</strong> {{$listing->phone}}</li>
                                    <li class="list-group-item"><strong>Email:</strong> {{$listing->email}}</li>
                                    <li class="list-group-item"><strong>Website:</strong> <a href="{{ $listing->website }}" target="_blank">{{$listing->website}}</a></li>
                                </ul>
                                <div class="card card-body bg-light mt-3">
                                    {{$listing->bio}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
