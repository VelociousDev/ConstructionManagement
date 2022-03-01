@extends('app')
@section('content')
@include('templates.blockheader', ['pagename' => 'Users Section'])

<div class="row clearfix">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="card project_list">
            <div class="header">
                <h2><strong>Users</strong> List</h2>
                <ul class="header-dropdown">
                   <li>
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" data-toggle="modal" data-target="#addnewuser"  type="button">
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
                                <th style="width:50px;">Name</th>
                                <th></th>
                                <th><strong>Site</th>                                        
                                <th >Other Site Members</th>
                                <th>Status</th>
                                <th>Rights</th>
                                <th>Work Progress</th>
                                <th>Pan No.</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @php
                    
                          $userarray = json_decode($users_list, true);
                          @endphp
                          @foreach($userarray as $userd)
                          @php 
                          $user = json_decode(json_encode($userd), true);
                          $userdata = array();
                          $userlist = array();
                          $userlist = $user['list'];
                          $userdata = $user['data'];
                          
                          @endphp
                        
                          <tr>
                                        <td>
                                            <img class="rounded avatar" src="{{asset('/images/'.print_r($userdata['image'], true))}}" alt="im">
                                        </td>
                                        <td>
                                            <a class="single-user-name" href="#">{{print_r($userdata['name'], true)}}</a><br>
                                            <small>{{print_r($userdata['rank'], true)}}</small>
                                        </td>
                                        <td>
                                            <strong>{{print_r($userdata['site'], true)}}</strong>
                                        </td>                                        
                                        <td class="hidden-md-down">
                                            <ul class="list-unstyled team-info margin-0">     
                                                               @foreach($userlist as $ul)                           
                                                <li>
                                                   <a title="{{$ul['name']}}"><img src="{{asset('/images/'.print_r($ul['image'], true))}}" alt="{{print_r($ul['name'], true)}}"></a>
                                                </li>
                                                                     @endforeach
                                            </ul>
                                        </td>
                                       
                                        @if($userdata['status'] == 'Active')
                                        <td><span class="badge badge-success">{{print_r($userdata['status'], true)}}</span></td>
                                        @else
                                        <td><span class="badge badge-danger">{{print_r($userdata['status'], true)}}</span></td>
                                        @endif
                                        <td>{{print_r($userdata['status'], true)}}</td>
                                        <td class="hidden-md-down">
                                            <div class="progress">
                                                <div class="progress-bar l-blue" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                            </div>
                                        </td>
                                        
                                        <td>{{print_r($userdata['pan_no'], true)}}</td>
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
