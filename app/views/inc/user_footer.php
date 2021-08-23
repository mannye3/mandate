<!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; <?php echo date('Y'); ?> NASD
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="<?php echo URLROOT; ?>/assets/assets/js/bundle.js?ver=1.8.0"></script>
    <script src="<?php echo URLROOT; ?>/assets/assets/js/scripts.js?ver=1.8.0"></script>
    <script src="<?php echo URLROOT; ?>/assets/assets/js/charts/gd-invest.js?ver=1.8.0"></script>


    <script src="<?php echo URLROOT; ?>/assets/js/dropzone.min.js"></script>
    <script src="<?php echo URLROOT; ?>/assets/js/default-assets/dropzone-custom.js"></script>
    <script src="<?php echo URLROOT; ?>/assets/js/default-assets/dropzone-and-module.min.js"></script>


   <script src="<?php echo URLROOT; ?>/assets/js/pass.js"></script>


 <script type="text/javascript">
            function archiveFunction() {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: "Are you sure?",
  text: "",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel please!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    form.submit();          // submitting the form when user press yes
  } else {
    swal("Cancelled", "", "error");
  }
});
}
        </script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
</body>

</html>












