<div class="overlay"></div>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="profile.html"><img src="{{asset('/images/profile_av.jpg')}}" alt="User"></a></div>
                    <div class="detail">
                        <h4>{{Session::get('name')}}</h4>
                        <small>{{Session::get('rank')}}</small>                        
                    </div>
                    <a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a>
                    <a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a>
                    <a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>
                    <a href="chat.html" title="Chat App"><i class="zmdi zmdi-comments"></i></a>
                    <a data-toggle="modal" data-target="#logoutmodal"  title="Sign out"><i class="zmdi zmdi-power"></i></a>
                </div>
            </li>
            <li class="header">MAIN</li>
            <li class="active open"><a href="{{url('/dashboard')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>            
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Sites & Users</span> </a>
                <ul style="list-style-type: none; display:none;">
                    <li><a href="{{url('/users')}}"> <i class="zmdi zmdi-face"></i> Users</a></li>
                    <li><a href="{{url('/sites')}}"> <i class="zmdi zmdi-city"></i> Sites</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Expenses</span> </a>
                <ul style="list-style-type: none; display:none;">
                    <li><a href="{{url('/users')}}"> <i class="zmdi zmdi-face"></i> Expense Parties</a></li>
                    <li><a href="{{url('/sites')}}"> <i class="zmdi zmdi-city"></i> Expense Head</a></li>
                    <li><a href="{{url('/sites')}}"> <i class="zmdi zmdi-city"></i> New Expenses</a></li>
                    <li><a href="{{url('/sites')}}"> <i class="zmdi zmdi-city"></i> Pending Expense</a></li>
                    <li><a href="{{url('/sites')}}"> <i class="zmdi zmdi-city"></i> Verified Expense</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Materials</span> </a>
                <ul style="list-style-type: none; display:none;">
                    <li><a href="{{url('/users')}}"> <i class="zmdi zmdi-face"></i> Material Suppliers</a></li>
                    <li><a href="{{url('/sites')}}"> <i class="zmdi zmdi-city"></i> Materials</a></li>
                    <li><a href="{{url('/sites')}}"> <i class="zmdi zmdi-city"></i> Units</a></li>
                    <li><a href="{{url('/sites')}}"> <i class="zmdi zmdi-city"></i> New Materials Entry</a></li>
                    <li><a href="{{url('/sites')}}"> <i class="zmdi zmdi-city"></i> Pending Materials Entry</a></li>
                    <li><a href="{{url('/sites')}}"> <i class="zmdi zmdi-city"></i> Verified Materials Entry</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Site Bills</span> </a>
                <ul style="list-style-type: none; display:none;">
                    <li><a href="{{url('/users')}}"> <i class="zmdi zmdi-face"></i> Bill Parties</a></li>
                    <li><a href="{{url('/sites')}}"> <i class="zmdi zmdi-city"></i> Works</a></li>
                    <li><a href="{{url('/sites')}}"> <i class="zmdi zmdi-city"></i> Works Rate</a></li>
                    <li><a href="{{url('/sites')}}"> <i class="zmdi zmdi-city"></i> New Bill</a></li>
                    <li><a href="{{url('/sites')}}"> <i class="zmdi zmdi-city"></i> Pending Bills</a></li>
                    <li><a href="{{url('/sites')}}"> <i class="zmdi zmdi-city"></i> Verified Bills</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Machinery</span> </a>
                <ul style="list-style-type: none; display:none;">
                    <li><a href="{{url('/sites')}}"> <i class="zmdi zmdi-city"></i> Verified Machineries</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Assets</span> </a>
                <ul style="list-style-type: none; display:none;">
                    <li><a href="{{url('/sites')}}"> <i class="zmdi zmdi-city"></i> Verified Assets</a></li>
                </ul>
            </li>
        
        
        </ul>
    </div>
</aside>
<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active slideRight" id="setting">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Skins</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple">
                            <div class="purple"></div>
                        </li>                   
                        <li data-theme="blue" >
                            <div class="blue"></div>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>                    
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                        </li>
                        <li data-theme="blush">
                            <div class="blush"></div>                    
                        </li>
                    </ul>                    
                </div>
                <div class="card">
                    <h6>Left Menu</h6>
                    <ul class="list-unstyled theme-light-dark">
                        <li>
                            <div class="t-light btn btn-default btn-simple btn-round">Light</div>
                        </li>
                        <li>
                            <div class="t-dark btn btn-default btn-round">Dark</div>
                        </li>
                    </ul>
                </div>
               
            </div>                
        </div>       
        
    </div>
</aside>