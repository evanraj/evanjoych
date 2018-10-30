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

#football_sms_list,#football_report_print{
    background-color: #0073aa;
    color: #fff;
    height: 40px;
}

</style><?php
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

<div class="widget-top">
    <h4>Customer List</h4>
</div>

<div class="search_bar employee_filter">
    <label>Page :</label>
    <select name="receipt_per_page" id="receipt_per_page">
        <option value="5" <?php echo (isset($receipt_per_page) && $receipt_per_page == '5' ) ? 'selected' : ''; ?>>5</option>
        <option value="10" <?php echo (isset($receipt_per_page) && $receipt_per_page == '10' ) ? 'selected' : ''; ?>>10</option>
        <option value="15" <?php echo (isset($receipt_per_page) && $receipt_per_page == '15' ) ? 'selected' : ''; ?>>15</option>

        <option value="20" <?php echo (isset($receipt_per_page) && $receipt_per_page == '20' ) ? 'selected' : ''; ?>>20</option>
        <option value="50" <?php echo (isset($receipt_per_page) && $receipt_per_page == '50' ) ? 'selected' : ''; ?>>50</option>
        <option value="100" <?php echo (isset($receipt_per_page) && $receipt_per_page == '100' ) ? 'selected' : ''; ?>>100</option>
    </select>
    <input type="text" name="member_name" id="member_name" autocomplete="off" placeholder="Member Name" value="<?php echo $member_name; ?>">
    <input type="text" name="member_number" id="member_number" autocomplete="off" placeholder="Member Number" value="<?php echo $member_number; ?>">

    <input type="text" name="bill_no" id="bill_no" autocomplete="off" placeholder="Bill Number" value="<?php echo $bill_no; ?>">
    <input type="text" name="bill_amt" id="bill_amt" autocomplete="off" placeholder="Bill Amount" value="<?php echo $bill_amt; ?>">

    <input type="text" name="football_bill_date" id="football_bill_date"  class="football_bill_date" autocomplete="off" placeholder="Bill From"  value="<?php echo $football_bill_date; ?>">
    <input type="text" name="football_bill_date_to" id="football_bill_date_to"  class="football_bill_date_to" autocomplete="off" placeholder="Bill To"  value="<?php echo $football_bill_date_to; ?>">
    <input type="button" Name="football_report_print" id="football_report_print" value="Print/Send Report " /> <br/>
    <span class="dashicons dashicons-search search_icons" id="icons" ></span>


<div class="football_listing widget-content table-simple">
    <?php 
        include(get_template_directory() . '/inc/admin/billing/ajax/listing-template/list_football_billing.php');
    ?>
    <div class="clear"></div>
</div>



