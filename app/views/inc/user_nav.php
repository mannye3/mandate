<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="<?php echo URLROOT; ?>/accounts" class="logo-link nk-sidebar-logo">
                             <center><img class="logo-img logo-img-lg" style="width: 200px;" src="https://nasdng.com/wp-content/uploads/2018/11/NASD-OTC-EXchange-Logo-1.png"></center>
                           
                        </a>
                    </div>
                     <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <hr>
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
 

                    <?php if ($_SESSION['role'] == 'Admin') : ?>


                             <ul class="nk-menu">

                                     <li class="nk-menu-heading">
                                        
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                         <a href="<?php echo URLROOT; ?>/accounts/home" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Dashboard</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    


                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Firm Mangement</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/fees" class="nk-menu-link">
                                            <span class="nk-menu-text">Firm Fees</span>
                                        </a>
                                            </li>
                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/categories" class="nk-menu-link">     
                                               <span class="nk-menu-text">Firm Categories</span>
                                        </a>
                                            </li>

                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item --> 




                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Mangers and Traders List</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/Allmanagers" class="nk-menu-link">
                                           <span class="nk-menu-text">Mangers</span>
                                        </a>
                                            </li>
                                            <li class="nk-menu-item">
                                              <a  href="<?php echo URLROOT; ?>/accounts/Alltraders" class="nk-menu-link">     
                                                <span class="nk-menu-text">Traders</span>
                                        </a>
                                            </li>

                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/positions" class="nk-menu-link">     
                                               <span class="nk-menu-text">Mangers Roles</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item --> 






                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Participating Institutions</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/mandates" class="nk-menu-link">
                                          <span class="nk-menu-text">Active / Suspended</span>
                                        </a>
                                            </li>
                                            <li class="nk-menu-item">
                                              <a  href="<?php echo URLROOT; ?>/accounts/revoked_mandates" class="nk-menu-link">     
                                                <span class="nk-menu-text">Revoked</span>
                                        </a>
                                            </li>

                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/add_mandate" class="nk-menu-link">     
                                               <span class="nk-menu-text">Add New</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item --> 




                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span>
                                            <span class="nk-menu-text">Issuers</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/issuers" class="nk-menu-link">
                                          <span class="nk-menu-text">Issuers</span>
                                        </a>
                                            </li>
                                          
                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/add_issuer" class="nk-menu-link">     
                                               <span class="nk-menu-text">Add New</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->



                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span>
                                            <span class="nk-menu-text">Data Portal Request / N-ETS Training</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/data_portal_request" class="nk-menu-link">
                                          <span class="nk-menu-text">Data Portal Request</span>
                                        </a>
                                            </li>
                                          
                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/NesTraining" class="nk-menu-link">     
                                               <span class="nk-menu-text">N-ETS Training</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->  



                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span>
                                            <span class="nk-menu-text">Users List</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/users" class="nk-menu-link">
                                           <span class="nk-menu-text">Users</span>
                                        </a>
                                            </li>
                                          
                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/email_list" class="nk-menu-link">     
                                                <span class="nk-menu-text">Email List</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->  



                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span>
                                            <span class="nk-menu-text">Transactions</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/Bankpayments" class="nk-menu-link">
                                          <span class="nk-menu-text">Bank Payments</span>
                                        </a>
                                            </li>
                                          
                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/Allpayments" class="nk-menu-link">     
                                                <span class="nk-menu-text">Mandate Payments</span>
                                        </a>
                                            </li>


                                             <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/ArchivePayment" class="nk-menu-link">     
                                                <span class="nk-menu-text">Archive Payment</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->  



                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span>
                                            <span class="nk-menu-text">Reports</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/logs" class="nk-menu-link">
                                          <span class="nk-menu-text">Logs</span>
                                        </a>
                                            </li>
                                          
                                            <li class="nk-menu-item">
                                                  <?php $selected_year =  date('Y'); ?>
                                              <a  href="<?php echo URLROOT; ?>/accounts/report_pi_payment/<?php echo $selected_year; ?>" class="nk-menu-link">     
                                                <span class="nk-menu-text">PIs Payment</span>
                                        </a>
                                            </li>

                                              <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/report_traders" class="nk-menu-link">
                                          <span class="nk-menu-text">Authorised  Traders</span>
                                        </a>
                                            </li>

                                              <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/report_pis" class="nk-menu-link">
                                          <span class="nk-menu-text">PIs</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->  


   
                                      



                                   
                                  
                                 
                                </ul>

                            <?php endif; ?>




                             <?php if ($_SESSION['role'] == 'Sub_Admin') : ?>

                                 <ul class="nk-menu">

                                     <li class="nk-menu-heading">
                                        
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                         <a href="<?php echo URLROOT; ?>/accounts/home" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Dashboard</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    


                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Firm Mangement</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/fees" class="nk-menu-link">
                                            <span class="nk-menu-text">Firm Fees</span>
                                        </a>
                                            </li>
                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/categories" class="nk-menu-link">     
                                               <span class="nk-menu-text">Firm Categories</span>
                                        </a>
                                            </li>

                                           
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item --> 




                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Mangers and Traders List</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/Allmanagers" class="nk-menu-link">
                                           <span class="nk-menu-text">Mangers</span>
                                        </a>
                                            </li>
                                            <li class="nk-menu-item">
                                              <a  href="<?php echo URLROOT; ?>/accounts/Alltraders" class="nk-menu-link">     
                                                <span class="nk-menu-text">Traders</span>
                                        </a>
                                            </li>

                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/positions" class="nk-menu-link">     
                                               <span class="nk-menu-text">Mangers Roles</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item --> 






                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Participating Institutions</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/mandates" class="nk-menu-link">
                                          <span class="nk-menu-text">Active / Suspended</span>
                                        </a>
                                            </li>
                                            <li class="nk-menu-item">
                                              <a  href="<?php echo URLROOT; ?>/accounts/revoked_mandates" class="nk-menu-link">     
                                                <span class="nk-menu-text">Revoked</span>
                                        </a>
                                            </li>

                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/add_mandate" class="nk-menu-link">     
                                               <span class="nk-menu-text">Add New</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item --> 




                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span>
                                            <span class="nk-menu-text">Issuers</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/issuers" class="nk-menu-link">
                                          <span class="nk-menu-text">Issuers</span>
                                        </a>
                                            </li>
                                          
                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/add_issuer" class="nk-menu-link">     
                                               <span class="nk-menu-text">Add New</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->



                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span>
                                            <span class="nk-menu-text">Data Portal Request / N-ETS Training</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/data_portal_request" class="nk-menu-link">
                                          <span class="nk-menu-text">Data Portal Request</span>
                                        </a>
                                            </li>
                                          
                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/NesTraining" class="nk-menu-link">     
                                               <span class="nk-menu-text">N-ETS Training</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->  



                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span>
                                            <span class="nk-menu-text">Users List</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                           <!--  <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/users" class="nk-menu-link">
                                           <span class="nk-menu-text">Users</span>
                                        </a>
                                            </li> -->
                                          
                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/email_list" class="nk-menu-link">     
                                                <span class="nk-menu-text">Email List</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->  



                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span>
                                            <span class="nk-menu-text">Transactions</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/Bankpayments" class="nk-menu-link">
                                          <span class="nk-menu-text">Bank Payments</span>
                                        </a>
                                            </li>
                                          
                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/Allpayments" class="nk-menu-link">     
                                                <span class="nk-menu-text">Mandate Payments</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->  



                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span>
                                            <span class="nk-menu-text">Reports</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/logs" class="nk-menu-link">
                                          <span class="nk-menu-text">Logs</span>
                                        </a>
                                            </li>
                                          
                                            <li class="nk-menu-item">
                                                  <?php $selected_year =  date('Y'); ?>
                                              <a  href="<?php echo URLROOT; ?>/accounts/report_pi_payment/<?php echo $selected_year; ?>" class="nk-menu-link">     
                                                <span class="nk-menu-text">PIs Payment</span>
                                        </a>
                                            </li>

                                              <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/report_traders" class="nk-menu-link">
                                          <span class="nk-menu-text">Authorised  Traders</span>
                                        </a>
                                            </li>

                                              <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/report_pis" class="nk-menu-link">
                                          <span class="nk-menu-text">PIs</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->  


   
                                      



                                   
                                  
                                 
                                </ul>

                            <?php endif; ?>



                       



                             <?php if ($_SESSION['role'] == 'User') : ?>
                            
                              <ul class="nk-menu">

                                     <li class="nk-menu-heading">
                                        
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                         <a href="<?php echo URLROOT; ?>/accounts/home" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Dashboard</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    


                                  




                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Mangers and Traders List</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/Allmanagers" class="nk-menu-link">
                                           <span class="nk-menu-text">Mangers</span>
                                        </a>
                                            </li>
                                            <li class="nk-menu-item">
                                              <a  href="<?php echo URLROOT; ?>/accounts/Alltraders" class="nk-menu-link">     
                                                <span class="nk-menu-text">Traders</span>
                                        </a>
                                            </li>

                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/positions" class="nk-menu-link">     
                                               <span class="nk-menu-text">Mangers Roles</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item --> 






                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Participating Institutions</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/mandates" class="nk-menu-link">
                                          <span class="nk-menu-text">Active / Suspended</span>
                                        </a>
                                            </li>
                                            <li class="nk-menu-item">
                                              <a  href="<?php echo URLROOT; ?>/accounts/revoked_mandates" class="nk-menu-link">     
                                                <span class="nk-menu-text">Revoked</span>
                                        </a>
                                            </li>

                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/add_mandate" class="nk-menu-link">     
                                               <span class="nk-menu-text">Add New</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item --> 




                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span>
                                            <span class="nk-menu-text">Issuers</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/issuers" class="nk-menu-link">
                                          <span class="nk-menu-text">Issuers</span>
                                        </a>
                                            </li>
                                          
                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/add_issuer" class="nk-menu-link">     
                                               <span class="nk-menu-text">Add New</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->



                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span>
                                            <span class="nk-menu-text">Data Portal Request / N-ETS Training</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/data_portal_request" class="nk-menu-link">
                                          <span class="nk-menu-text">Data Portal Request</span>
                                        </a>
                                            </li>
                                          
                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/NesTraining" class="nk-menu-link">     
                                               <span class="nk-menu-text">N-ETS Training</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->  



                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span>
                                            <span class="nk-menu-text">Users List</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                           <!--  <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/users" class="nk-menu-link">
                                           <span class="nk-menu-text">Users</span>
                                        </a>
                                            </li> -->
                                          
                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/email_list" class="nk-menu-link">     
                                                <span class="nk-menu-text">Email List</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->  



                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span>
                                            <span class="nk-menu-text">Transactions</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/Bankpayments" class="nk-menu-link">
                                          <span class="nk-menu-text">Bank Payments</span>
                                        </a>
                                            </li>
                                          
                                            <li class="nk-menu-item">
                                              <a href="<?php echo URLROOT; ?>/accounts/Allpayments" class="nk-menu-link">     
                                                <span class="nk-menu-text">Mandate Payments</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->  



                                     <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                           <span class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span>
                                            <span class="nk-menu-text">Reports</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/logs" class="nk-menu-link">
                                          <span class="nk-menu-text">Logs</span>
                                        </a>
                                            </li>
                                          
                                            <li class="nk-menu-item">
                                                  <?php $selected_year =  date('Y'); ?>
                                              <a  href="<?php echo URLROOT; ?>/accounts/report_pi_payment/<?php echo $selected_year; ?>" class="nk-menu-link">     
                                                <span class="nk-menu-text">PIs Payment</span>
                                        </a>
                                            </li>

                                              <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/report_traders" class="nk-menu-link">
                                          <span class="nk-menu-text">Authorised  Traders</span>
                                        </a>
                                            </li>

                                              <li class="nk-menu-item">
                                                <a href="<?php echo URLROOT; ?>/accounts/report_pis" class="nk-menu-link">
                                          <span class="nk-menu-text">PIs</span>
                                        </a>
                                            </li>
                                           
                                           
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->  


   
                                      



                                   
                                  
                                 
                                </ul>


                            <?php endif; ?>




                                <!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                          
                           
                            <div class="nk-header-tools">

                                <?php if ($_SESSION['role'] == 'Admin') : ?>
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status"></div>
                                                    <div class="user-name dropdown-indicator"><?php echo $_SESSION['name']; ?></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                     <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                    <div class="user-info">
                                                        <span class="lead-text"><?php echo $_SESSION['name']; ?></span>
                                                        <span class="sub-text"><?php echo $_SESSION['email']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    
                                                    <li><a href="<?php echo URLROOT; ?>/accounts/profile"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="<?php echo URLROOT; ?>/users/logout"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                    
                                </ul>

                            <?php endif; ?>



                              <?php if ($_SESSION['role'] == 'Sub_Admin') : ?>
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status"></div>
                                                    <div class="user-name dropdown-indicator"><?php echo $_SESSION['name']; ?></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                     <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                    <div class="user-info">
                                                        <span class="lead-text"><?php echo $_SESSION['name']; ?></span>
                                                        <span class="sub-text"><?php echo $_SESSION['email']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    
                                                    <li><a href="<?php echo URLROOT; ?>/accounts/profile"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="<?php echo URLROOT; ?>/users/logout"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                    
                                </ul>

                            <?php endif; ?>



                             <?php if ($_SESSION['role'] == 'User') : ?>
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status"></div>
                                                    <div class="user-name dropdown-indicator"><?php echo $_SESSION['name']; ?></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                     <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                    <div class="user-info">
                                                        <span class="lead-text"><?php echo $_SESSION['name']; ?></span>
                                                        <span class="sub-text"><?php echo $_SESSION['email']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    
                                                    <li><a href="<?php echo URLROOT; ?>/accounts/profile"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="<?php echo URLROOT; ?>/users/logout"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                    
                                </ul>

                            <?php endif; ?>




                                <!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>


















