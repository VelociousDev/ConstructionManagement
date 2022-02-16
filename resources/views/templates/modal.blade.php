<div class="modal fade" id="logoutmodal" tabindex="-1" role="dialog" style="padding: 150px; magin:100px;">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h4 class="title" id="smallModalLabel">Are You Sure!</h4>
            </div>
            <div class="modal-body">Do You Really Want To Logout!</div>
            <div class="modal-footer">
                <a href="{{url('/logout')}}" class="btn btn-danger btn-round waves-effect">Logout</a>
                <button type="button" class="btn btn-neutral btn-round  waves-effect" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addnewuser" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
       <form action="addnewuser" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" >Add New User</h4>
            </div>
            <div class="modal-body"> 
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group">                                   
                            <img height= "200" width="200" id="user_image" src="{{asset('/images/noprofile.jpg')}}"  class="rounded-circle img-raised"> 
                            <input type="file" accept="Image/*" id="image" name="image" onchange="document.getElementById('user_image').src = window.URL.createObjectURL(this.files[0])">            
                        </div>
                    </div>
                    <div class="col-sm-8">
                       <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">                                   
                                <input type="text" class="form-control" required placeholder="Name">                                    
                            </div>
                        </div>  
                        <div class="col-lg-6 col-sm-6 col-md-6"> <b>Phone Number</b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                                <input type="text" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00">
                            </div>
                        </div>
                       </div>
                       <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">                                   
                                <input type="text" class="form-control" required placeholder="UserName">                                    
                            </div>
                        </div>  
                         <div class="col-sm-6">
                            <div class="form-group">                                   
                                <input type="password" class="form-control" required placeholder="Password">                                    
                            </div>
                        </div>
                       </div>
                    </div>
                 
                </div>
            </div>
            <div class="modal-footer">
               
                <button type="button" class="btn btn-primary btn-simple waves-effect" data-dismiss="modal"><a >CLOSE</a></button>
                <button type="submit" class="btn btn-primary btn-simple btn-round waves-effect"><a >SAVE CHANGES</a></button>
            </div>
        </div>
    </form>
    </div>
</div>



<div class="modal fade" id="testmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
       <form action="#" method="post" class="form">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" >Add New User</h4>
            </div>
            <div class="modal-body"> 
               
            </div>
            <div class="modal-footer">
               
                <button type="button" class="btn btn-primary btn-simple waves-effect" data-dismiss="modal"><a >CLOSE</a></button>
                <button type="submit" class="btn btn-primary btn-simple btn-round waves-effect"><a >SAVE CHANGES</a></button>
            </div>
        </div>
    </form>
    </div>
</div>