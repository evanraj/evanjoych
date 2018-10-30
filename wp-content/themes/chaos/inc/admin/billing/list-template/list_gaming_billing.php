<style>
input{
    margin: 3px;
    padding: 3px 8px;
}

#icons{
    font-size: 34px;
    color: #000;
}
.widget-top h4{
    margin-left: 12px;
}
#gaming_sms_list,#gaming_report_print{
    background-color: #0073aa;
    color: #fff;
    height: 40px;
}

</style><?php
       if(isset($_POST['action']) && $_POST['action'] == 'gaming_listing') {
        $gaming_per_page                            = $_POST['gaming_per_page'];
        $gaming_member_name                         = $_POST['gaming_member_name'];
        $gaming_member_number                       = $_POST['gaming_member_number'];
        $gaming_bill_date                           = $_POST['gaming_bill_date'];
        $gaming_bill_date_to                        = $_POST['gaming_bill_date_to'];
        $gaming_bill_no                             = $_POST['gaming_bill_no'];
        $gaming_bill_amt                            = $_POST['gaming_bill_amt'];
        
    
    } 
    else {
        $gaming_per_page                              = isset( $_GET['gaming_per_page'] ) ? abs( (int) $_GET['gaming_per_page'] ) : 5;
        $gaming_member_name                           = isset( $_GET['gaming_member_name'] ) ? $_GET['gaming_member_name']  : '';
        $gaming_member_number                         = isset( $_GET['gaming_member_number'] ) ? $_GET['gaming_member_number']  : '';
        $gaming_bill_date                             = isset( $_GET['gaming_bill_date'] ) ? $_GET['gaming_bill_date']  : '';
        $gaming_bill_date_to                          = isset( $_GET['gaming_bill_date_to'] ) ? $_GET['gaming_bill_date_to']  : '';
        $gaming_bill_no                               = isset( $_GET['gaming_bill_no'] ) ? $_GET['gaming_bill_no']  : '';
        $gaming_bill_amt                              = isset( $_GET['gaming_bill_amt'] ) ? $_GET['gaming_bill_amt']  : '';
    
    }

?>

<div class="widget-top">
    <h4>Customer List</h4>
</div>

<div class="search_bar employee_filter">
    <label>Page :</label>
    <select name="gaming_per_page" id="gaming_per_page">
        <option value="5" <?php echo (isset($gaming_per_page) && $gaming_per_page == '5' ) ? 'selected' : ''; ?>>5</option>
        <option value="10" <?php echo (isset($gaming_per_page) && $gaming_per_page == '10' ) ? 'selected' : ''; ?>>10</option>
        <option value="15" <?php echo (isset($gaming_per_page) && $gaming_per_page == '15' ) ? 'selected' : ''; ?>>15</option>

        <option value="20" <?php echo (isset($gaming_per_page) && $gaming_per_page == '20' ) ? 'selected' : ''; ?>>20</option>
        <option value="50" <?php echo (isset($gaming_per_page) && $gaming_per_page == '50' ) ? 'selected' : ''; ?>>50</option>
        <option value="100" <?php echo (isset($gaming_per_page) && $gaming_per_page == '100' ) ? 'selected' : ''; ?>>100</option>
    </select>
    <input type="text" name="gaming_member_name" id="gaming_member_name" autocomplete="off" placeholder="Member Name" value="<?php echo $gaming_member_name; ?>">
    <input type="text" name="gaming_member_number" id="gaming_member_number" autocomplete="off" placeholder="Member Number" value="<?php echo $gaming_member_number; ?>">

    <input type="text" name="gaming_bill_no" id="gaming_bill_no" autocomplete="off" placeholder="Bill Number" value="<?php echo $gaming_bill_no; ?>">
    <input type="text" name="gaming_bill_amt" id="gaming_bill_amt" autocomplete="off" placeholder="Bill Amount" value="<?php echo $gaming_bill_amt; ?>">

    <input type="text" name="gaming_bill_date" id="gaming_bill_date"  class="gaming_bill_date" autocomplete="off" placeholder="Bill From" value="<?php echo $gaming_bill_date; ?>">
    <input type="text" name="gaming_bill_date_to" id="gaming_bill_date_to"  class="gaming_bill_date_to" autocomplete="off" placeholder="Bill To"  value="<?php echo $gaming_bill_date_to; ?>">
    <input type="button" Name="gaming_report_print" id="gaming_report_print" value="Print/Send Report " /> <br/>

    <span class="dashicons dashicons-search search_icons_gaming" id="icons" ></span>


<div class="gaming_listing widget-content table-simple">
    <?php 
        include(get_template_directory() . '/inc/admin/billing/ajax/listing-template/list_gaming_billing.php');
    ?>
    <div class="clear"></div>
</div>
<style type="text/css">
    .popup-container-utility {
        width: 700px;
        height: 350px;
        background-color: #fff;
        display: none;

    }
   .button.b-close {
    border-radius: 7px 7px 7px 7px;
    box-shadow: none;
    font: bold 131% sans-serif;
    padding: 0 6px 2px;
    position: absolute;
    right: -7px;
    top: -7px;
    background-color: #2b91af;
    color:#fff;
}   
    </style>

    <div class="challan_popup">
        <div class="popup-container-utility">
            <span class="button b-close"><span>X</span></span>
            <div class="popup_utility_container">
            </div>
        </div>
    </div>
