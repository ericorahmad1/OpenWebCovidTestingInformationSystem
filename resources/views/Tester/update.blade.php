@extends('layouts.tester')
@section('content')
<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="main-card mb-6 card">
                                <div class="card-header">Update COVID Test
                                </div>
                                <div class="card-body" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <form method="POST" action="">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="Patient" class="col-md-4 col-form-label text-md-right">
                                                {{ __('Patient') }}
                                            </label>

                                            <div class="col-md-6">
                                                <input type="text" name="patient" id="patient"
                                                    value="{{$COVIDTest->Patients->Users->name}}" disabled
                                                    class="form-control js-kit-single">

                                                @error('Patient')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Kits" class="col-md-4 col-form-label text-md-right">
                                                {{ __('Kits') }}
                                            </label>

                                            <div class="col-md-6">
                                                <select name="Kits" id="Kits"
                                                class="form-control js-kit-single">
                                                    @foreach($Kits as $Kit)
                                                    <option value="{{$Kit->id}}"
                                                        @if($Kit->id==$COVIDTest->test_kit_id)
                                                            selected
                                                        @endif>
                                                        {{$Kit->name}}
                                                    </option>
                                                    @endforeach
                                                </select>

                                                @error('Kits')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="symptoms" class="col-md-4 col-form-label text-md-right">
                                                {{ __('Symptoms') }}
                                            </label>

                                            <div class="col-md-6">
                                                <textarea class="form-control"
                                                name="symptoms" id="symptoms" 
                                                cols="30" rows="10" required>{{$COVIDTest->Patients->symptoms}}</textarea>
                                                @error('symptoms')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Type" class="col-md-4 col-form-label text-md-right">
                                                {{ __('Type') }}
                                            </label>

                                            <div class="col-md-6">
                                                <select name="Type" id="Type"
                                                class="form-control js-symptoms-multiple">
                                                    <option value="Returnee"
                                                        @if($COVIDTest->Patients->type=="Returnee")
                                                            selected
                                                        @endif>
                                                        Returnee
                                                    </option>
                                                    <option value="Quarantined"
                                                        @if($COVIDTest->Patients->type=="Quarantined")
                                                            selected
                                                        @endif>
                                                        Quarantined
                                                    </option>
                                                    <option value="Contact"
                                                        @if($COVIDTest->Patients->type=="Contact")
                                                            selected
                                                        @endif>
                                                        Close Contact
                                                    </option>
                                                    <option value="Infected"
                                                        @if($COVIDTest->Patients->type=="Infected")
                                                            selected
                                                        @endif>
                                                        Infected
                                                    </option>
                                                    <option value="Suspected"
                                                        @if($COVIDTest->Patients->type=="Suspected")
                                                            selected
                                                        @endif>
                                                        Suspected
                                                    </option>
                                                </select>

                                                @error('Type')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Submit
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
@endsection

@section('customejs')

<script>
    
</script>

<script>
    $(document).ready(function() {
        $('.js-patient-single').select2({
            theme: "bootstrap"
        });
        $('.js-kit-single').select2({
            theme: "bootstrap"
        });
        $('.js-symptoms-multiple').select2({
            theme: "bootstrap"
        });
    });
</script>
@endsection

