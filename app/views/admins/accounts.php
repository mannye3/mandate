
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row page-title">
                            <div class="col-md-12">
                                <!-- <nav aria-label="breadcrumb" class="float-right mt-1">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Shreyu</a></li>
                                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Advanced</li>
                                    </ol>
                                </nav> -->
                                <h4 class="mb-1 mt-0">Account List</h4>
                            </div>
                        </div>

                        


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                              Add new account
                                            </button>
                                            <br>
                                            <br>
                                            <br>

                                        <h4 class="header-title mt-0 mb-1"> <?php flash('alert_message'); ?></h4>
                                        


                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Reg Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                               <tbody>
                                     <?php  $count = 0; foreach($data['All_Users'] as $All_Users) :  $count++; ?>
                                    <tr>
                                        <td><?php echo $count;  ?></td>
                                        <td><?php echo $All_Users->name; ?></td>
                                        <td><?php echo $All_Users->email; ?></td>
                                        <td><?php echo $All_Users->role; ?></td>
                                        <td><?php echo $All_Users->reg_date; ?></td>
                                         <td>
                                        <div class="table-action-buttons">
                                       
                                          <!--   <button class="edit button button-box button-xs button-info" data-toggle="modal" data-target="#exampleModal<?php echo $All_Users->id; ?>" data-whatever="@fat"><i class="zmdi zmdi-edit"></i> Edit </button> -->
                                             <button class="btn btn-info btn-rounded"  data-toggle="modal" data-target="#exampleModal<?php echo $All_Users->id; ?>" data-whatever="@fat">

                                        <i data-feather="edit"></i>
                                            Edit
                                    </button>
                                         <!--    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a> -->



                                            <form action="<?php echo URLROOT; ?>/admins/delete_account/<?php echo $All_Users->id; ?>" method="POST">
                                    <input type="hidden" name="id" id="p_id" value="<?php echo $All_Users->id; ?>">
                                    <button class="btn btn-danger btn-rounded" name="archive" type="submit" onclick="archiveFunction()">
                                        <i data-feather="trash-2"></i>
                                            Delete
                                    </button>
                            </form>
                                        </div>
                                    </td>
                                       
                                    </tr>
                                      <div class="modal fade" id="exampleModal<?php echo $All_Users->id; ?>">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Account</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                        </div>

                                         <!--  EDIT ACCOUNT MODAL -->
                                        <div class="modal-body">
                                            <form action="<?php echo URLROOT; ?>/admins/edit_account/<?php echo $All_Users->id; ?>" method="post">
                                                <div class="form-group">
                                                    <input type="hidden" value="<?php echo $All_Users->id; ?>" name="id" >
                                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                                    <input  value="<?php echo $All_Users->name; ?>" type="text" name="name" class="form-control" id="recipient-name">
                                                </div>
                                                 <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                                    <input  value="<?php echo $All_Users->email; ?>" type="email" name="email" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Phone:</label>
                                                    <input  value="<?php echo $All_Users->phone; ?>" type="number" name="phone" class="form-control">
                                                </div>
                                                 <div class="form-group">
                                                    <label for="recipient-name"  class="col-form-label">Password:</label>
                                                    <input  minlength="6" type="password" name="password" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Company:</label>
                                                    <input  value="<?php echo $All_Users->company; ?>" type="text" name="company" class="form-control" id="recipient-name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Role:</label>
                                                   <select name="role"  required="" class="form-control select2">
                                                        <option><?php echo $All_Users->role; ?></option>
                                            <?php foreach($data['load_roles'] as $load_roles) : ?>

                                                <option value="<?php echo $load_roles->role_title; ?>"><?php echo $load_roles->role_title; ?></option>
                                                <?php endforeach; ?>
                                                    <option value="PI">PI</option>
                                                   <option value="Issuer">Issuer</option>
                                                   <option value="Vendor">Vendor</option>
                                                   <option value="Partner">Partner</option>
                                            </select>
                                                </div>
                                            
                                        </div>
                                       <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                                    <?php endforeach; ?>
                                 
                                </tbody>
                              
                            </table>
                                        
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->


                       
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">ADD ACCOUNT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?php echo URLROOT; ?>/admins/add_account">
      <div class="modal-body">
       <div class="form-group">
             
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" name="name" class="form-control" id="recipient-name">
                 </div>

            <div class="form-group">
             <label for="recipient-name" class="col-form-label">Email:</label>
                  <input   type="email" name="email" class="form-control" id="recipient-name">
                </div>


                 <div class="form-group">
                     <label for="recipient-name"  class="col-form-label">Phone:</label>
                         <input  type="number" name="phone" class="form-control" id="recipient-name">
                            </div>

                            <div class="form-group">
                     <label for="recipient-name"  class="col-form-label">Company:</label>
                         <input  type="text" name="company" class="form-control" id="recipient-name">
                            </div>

                            <div class="form-group">
                             <label for="message-text" class="col-form-label">Role:</label>
                            <select name="role"  required="" class="form-control select2">
                               <option value="PI">PI</option>
                               <option value="Issuer">Issuer</option>
                               <option value="Vendor">Vendor</option>
                               <option value="Partner">Partner</option>
                                 </select>
                                   </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
  </form>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">


<script type="text/javascript">
    function archiveFunction() {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: "Are you sure?",
  text: "User dettails will be removed from database",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete user!",
  cancelButtonText: "No, cancel please!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    form.submit();          // submitting the form when user press yes
  } else {
    swal("Cancelled", "Action Cancelled", "error");
  }
});
}
</script>