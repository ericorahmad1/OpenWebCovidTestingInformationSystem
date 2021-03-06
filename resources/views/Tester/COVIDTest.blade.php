@extends('layouts.tester')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main-card mb-12 card">
                                <div class="card-body"><h5 class="card-title">COVID Test Results</h5>
                                    <table class="mb-0 table table-hover">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Patient</th>
                                            <th>Test date</th>
                                            <th>Results</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($tests as $index => $thisTest)
                                        <tr>
                                            <th scope="row">{{$index+1}}</th>
                                            <td>{{$thisTest->Patients->Users->name}}</td>
                                            <td>{{$thisTest->test_date}}</td>
                                            <td>{{$thisTest->result}}</td>
                                            <td>{{$thisTest->status}}</td>
                                            <td>
                                                <a href="{{url('/Tester/test/result/'.$thisTest->id)}}" class="btn btn-primary">
                                                    Result
                                                </a>
                                                <a href="{{url('/Tester/test/'.$thisTest->id)}}" class="btn btn-warning">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
@stop