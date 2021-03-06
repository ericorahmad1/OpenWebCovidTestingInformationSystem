@extends('layouts.manager')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="main-card mb-6 card">
                                <div class="card-header">New Test Centre
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="#">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="TestCentre_Name" class="col-md-4 col-form-label text-md-right">
                                                {{ __('Test CentreName"') }}
                                            </label>
                                            <div class="col-md-6">
                                                <input id="TestCentre_Name" type="text" class="form-control @error('TestCentre_Name') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('TestCentre_Name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Submit') }}
                                                </button>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
@stop