@extends('app')
@section('content')
@include('templates.blockheader', ['pagename' => 'Sites Section'])

<div class="row clearfix">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="card project_list">
            <div class="header">
                <h2><strong>Sites</strong> List</h2>
                <ul class="header-dropdown">
                   <li>
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" data-toggle="modal" data-target="#addnewsite"  type="button">
                        <i class="zmdi zmdi-plus" style="color: white;" ></i>
                    </button>
                   </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>                                       
                                <th >Name</th>
                               
                                <th><strong>Address</th>                                        
                                <th >Balance</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                    
                          $sitearray = json_decode($site_data, true);
                          @endphp
                          @foreach($sitearray as $sited)
                                         
                          <tr>
                                       
                                        <td>
                                            <a class="single-user-name" href="#">{{$sited['name']}}</a>
                                        </td>
                                        <td>
                                            {{$sited['address']}}
                                        </td>                                        
                                        
                                        <td>
                                            <strong>{{$sited['balance']}}</strong>
                                        </td>   
                                        @if($sited['status'] == 'Active')
                                        <td><span class="badge badge-success">{{$sited['status']}}</span></td>
                                        @else
                                        <td><span class="badge badge-danger">{{$sited['status']}}</span></td>
                                        @endif
                                        <td>25 Dec 2017</td>
                                    </tr>    
                       @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
