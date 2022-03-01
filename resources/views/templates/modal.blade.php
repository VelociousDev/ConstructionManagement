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
       <form action="addnewuser" method="post" class="form" enctype="multipart/form-data">
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
                            <input type="file" accept="Image/*" name="image" onchange="document.getElementById('user_image').src = window.URL.createObjectURL(this.files[0])">            
                        </div>
                    </div>
                    <div class="col-sm-8">
                       <div class="row clearfix">
                        <div class="col-sm-6"><b>Name</b>
                            <div class="input-group">                                   
                               <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                                <input type="text" required name="name" class="form-control" required placeholder="Name">                                    
                            </div>
                        </div>  
                        <div class="col-lg-6 col-sm-6 col-md-6"> <b>Phone Number</b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                                <input type="number" required name="contact_no" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00">
                            </div>
                        </div>
                       </div>
                       <div class="row clearfix">
                        <div class="col-sm-6"><b>Username</b>
                            <div class="input-group">                                   
                                <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                                <input type="text" name="username" class="form-control" required placeholder="UserName">                                    
                            </div>
                        </div>  
                         <div class="col-sm-6"><b>Password<b>
                            <div class="input-group">                                   
                                <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                                <input type="password"  name="password" class="form-control" required placeholder="Password">                                    
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





<div class="modal fade" id="newexpensemodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
       <form action="adduser" method="post" class="form">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" >Add New Expense Parties</h4>
            </div>
            <div class="modal-body"> 
            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="email_address_2">Name</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="email_address_2" class="form-control" placeholder="Enter the name of expense party">
                                    </div>
                                </div>
                            </div>        
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="email_address_2">Address</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="email_address_2" class="form-control" placeholder="Enter the address of expense party">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix" >
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="email_address_2">Pan</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="email_address_2" class="form-control" placeholder="Enter the Pan No. of expense party">
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
<div class="modal fade" id="newexpensehead1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
       <form action="adduser" method="post" class="form">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" >Add New Expense Head</h4>
            </div>
            <div class="modal-body"> 
            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Name">Name</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="Name" class="form-control" placeholder="Enter the Expense Head Name">
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

<div class="modal fade" id="newmaterialsupplier" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
       <form action="adduser" method="post" class="form">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" >Add New Material Supplier</h4>
            </div>
            <div class="modal-body"> 
            <div class="row clearfix" >
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix" >
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Name">Name</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group" style="margin-left: 1rem">
                                        <input type="text" id="Name" class="form-control" placeholder="Enter the name of expense party">
                                    </div>
                                </div>    
</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Address">Address</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="Address" class="form-control" placeholder="Enter the Address of expense party">
                                    </div>
                                </div>                   
</div>
                </div>
                

                            </div>        
                            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Gstnumber">Gst.No.</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="Gstnumber" class="form-control" placeholder="Enter the Address of expense party">
                                    </div>
                                </div>    
</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Phone">Phone</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="Phone" class="form-control" placeholder="Enter the Gst number of expense party">
                                    </div>
                                </div>
</div>
                </div>
                

                            </div>     
                            <div class="row clearfix" style="place-content:center;">
                                <h4>Bank Account Info</h4>
                            </div>
                            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="A/c">A/C</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="A/c" class="form-control" placeholder="Enter the Bamk Account of expense party">
                                    </div>
                                </div>    
</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Ifsc">IFSC</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="Ifsc" class="form-control" placeholder="Enter the Bank Ifsc of expense party">
                                    </div>
                                </div>
</div>
                </div>
                

                            </div>     
                            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Bank">Bank</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="Bank" class="form-control" placeholder="Enter the Bank name of expense party">
                                    </div>
                                </div>    
</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Holder">Holder</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="Holder" class="form-control" placeholder="Enter the Name of Account Holder ">
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

<div class="modal fade" id="newmaterialunit" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
       <form action="adduser" method="post" class="form">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" >Add New Material Unit</h4>
            </div>
            <div class="modal-body"> 
            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="unitname">Name</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="unitname" class="form-control" placeholder="Enter the new material unit">
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
<div class="modal fade" id="newbillparty" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
       <form action="adduser" method="post" class="form">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" >Add New Bill Party</h4>
            </div>
            <div class="modal-body"> 
            <div class="row clearfix" >
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix" >
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Name">Name</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group" >
                                        <input type="text" id="Name" class="form-control" placeholder="Enter the name of Bill party">
                                    </div>
                                </div>    
</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Pannumber">Pan.No.</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="Pannumber" class="form-control" placeholder="Enter the Pan number of Bill party">
                                    </div>
                                </div>                   
</div>
                </div>
                
                <!-- <div class="row clearfix"> -->
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Address">Address</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="Address" class="form-control" placeholder="Enter the Address of bill party">
                                    </div>
                                </div>    
</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Phone">Phone</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="Phone" class="form-control" placeholder="Enter the Phone number of bill party">
                                    </div>
                                </div>
</div>
                </div>
                            </div>        
                            
                
                            <div class="row clearfix" style="place-content:center;">
                                <h4>Bank Account Info</h4>
                            </div>
                            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="A/c">A/C</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="A/c" class="form-control" placeholder="Enter the Bamk Account of Bill party">
                                    </div>
                                </div>    
</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Ifsc">IFSC</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="Ifsc" class="form-control" placeholder="Enter the Bank Ifsc of Bill party">
                                    </div>
                                </div>
</div>
                </div>
                

                            </div>     
                            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Bank">Bank</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="Bank" class="form-control" placeholder="Enter the Bank name of Bill party">
                                    </div>
                                </div>    
</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Holder">Holder</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="Holder" class="form-control" placeholder="Enter the Name of Account Holder ">
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


<div class="modal fade" id="newbillwork" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
       <form action="adduser" method="post" class="form">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" >Add New Bill Work</h4>
            </div>
            <div class="modal-body"> 
            <div class="row clearfix" >
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix" >
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Name">Name</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group" >
                                        <input type="text" id="Name" class="form-control" placeholder="Enter the Work Name">
                                    </div>
                                </div>    
</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Unit">Unit</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="Unit" class="form-control" placeholder="Enter the unit of work ">
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

                   <div class="form-group" >
                  
<div class="modal fade" id="newmachinery" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
       <form action="adduser" method="post" class="form">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" >Add New Machinery</h4>
            </div>
            <div class="modal-body"> 
            <div class="row clearfix" >
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix" >
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Name">Name</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                       <input type="text" id="Name" class="form-control" placeholder="Enter the Name of Machinery">
                                    </div>
                                </div>    
</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Unit">Qanty</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="Unit" class="form-control" placeholder="Enter the Quantity of Machinery ">
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


<div class="modal fade" id="newasset" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
       <form action="adduser" method="post" class="form">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" >Add New Asset</h4>
            </div>
            <div class="modal-body"> 
            <div class="row clearfix" >
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix" >
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Name">Name</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                       <input type="text" id="Name" class="form-control" placeholder="Enter the Name of Asset">
                                    </div>
                                </div>    
</div>
                
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Cost">Cost</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="Cost" class="form-control" placeholder="Enter the Cost of asset ">
                                    </div>
                                </div>    
</div>
                
</div>
                <!-- <div class="row clearfix" > -->
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix" >
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Site">Site</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                       <input type="text" id="Site" class="form-control" placeholder="Enter the Site Name ">
                                    </div>
                                </div>    
</div>
                
                <div class="col-lg-6 col-md-6 col-sm-6">
<div class="row clearfix">
<div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="Date">Date</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="Date" class="form-control" placeholder="Enter the Date of Asset">
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