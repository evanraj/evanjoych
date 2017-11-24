<?php
    $admin_users = new AdminUsers();

      if(isset($_POST['action']) && $_POST['action'] == 'football_listing') {
        $receipt_per_page                           = $_POST['receipt_per_page'];
        $member_name                                = $_POST['member_name'];
        $member_number                              = $_POST['member_number'];
        $football_bill_date                         = $_POST['football_bill_date'];
        $bill_no                                    = $_POST['bill_no'];
        $bill_amt                                   = $_POST['bill_amt'];
        
    
    } 
    else {
        $receipt_per_page                       = isset( $_GET['receipt_per_page'] ) ? abs( (int) $_GET['receipt_per_page'] ) : 5;
        $member_name                            = isset( $_GET['member_name'] ) ? $_GET['member_name']  : '';
        $member_number                          = isset( $_GET['member_number'] ) ? $_GET['member_number']  : '';
        $football_bill_date                     = isset( $_GET['football_bill_date'] ) ? $_GET['football_bill_date']  : '';
        $bill_no                                = isset( $_GET['bill_no'] ) ? $_GET['bill_no']  : '';
        $bill_amt                               = isset( $_GET['bill_amt'] ) ? $_GET['bill_amt']  : '';
    
    }


?>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Admin Users <small>Custom design</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                  </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>     
        </div>
        <div class="lot_filter">
        <?php
            include( get_template_directory().'/inc/admin/users/ajax_loading/user-list.php');
        ?>
        </div>
    </div>
</div>