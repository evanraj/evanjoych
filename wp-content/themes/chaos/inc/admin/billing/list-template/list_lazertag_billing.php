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
</style>
<?php
       if(isset($_POST['action']) && $_POST['action'] == 'lazertag_listing') {
        $lazertag_per_page                            = $_POST['lazertag_per_page'];
        $lazertag_member_name                         = $_POST['lazertag_member_name'];
        $lazertag_member_number                       = $_POST['lazertag_member_number'];
        $lazertag_bill_date                           = $_POST['lazertag_bill_date'];
        $lazertag_bill_no                             = $_POST['lazertag_bill_no'];
        $lazertag_bill_amt                            = $_POST['lazertag_bill_amt'];
        
    
    } 
    else {
        $lazertag_per_page                              = isset( $_GET['lazertag_per_page'] ) ? abs( (int) $_GET['lazertag_per_page'] ) : 5;
        $lazertag_member_name                           = isset( $_GET['lazertag_member_name'] ) ? $_GET['lazertag_member_name']  : '';
        $lazertag_member_number                         = isset( $_GET['lazertag_member_number'] ) ? $_GET['lazertag_member_number']  : '';
        $lazertag_bill_date                             = isset( $_GET['lazertag_bill_date'] ) ? $_GET['lazertag_bill_date']  : '';
        $lazertag_bill_no                               = isset( $_GET['lazertag_bill_no'] ) ? $_GET['lazertag_bill_no']  : '';
        $lazertag_bill_amt                              = isset( $_GET['lazertag_bill_amt'] ) ? $_GET['lazertag_bill_amt']  : '';
    
    }

?>

<div class="widget-top">
    <h4>Customer List</h4>
</div>

<div class="search_bar employee_filter">
    <label>Page :</label>
    <select name="lazertag_per_page" id="lazertag_per_page">
        <option value="5" <?php echo (isset($lazertag_per_page) && $lazertag_per_page == '5' ) ? 'selected' : ''; ?>>5</option>
        <option value="10" <?php echo (isset($lazertag_per_page) && $lazertag_per_page == '10' ) ? 'selected' : ''; ?>>10</option>
        <option value="15" <?php echo (isset($lazertag_per_page) && $lazertag_per_page == '15' ) ? 'selected' : ''; ?>>15</option>

        <option value="20" <?php echo (isset($lazertag_per_page) && $lazertag_per_page == '20' ) ? 'selected' : ''; ?>>20</option>
        <option value="50" <?php echo (isset($lazertag_per_page) && $lazertag_per_page == '50' ) ? 'selected' : ''; ?>>50</option>
        <option value="100" <?php echo (isset($lazertag_per_page) && $lazertag_per_page == '100' ) ? 'selected' : ''; ?>>100</option>
    </select>
    <input type="text" class="lazertag_member_name" name="lazertag_member_name" id="lazertag_member_name" autocomplete="off" placeholder="Member Name" size="40" value="<?php echo $lazertag_member_name; ?>">

    <input type="text" class="lazertag_member_number" name="lazertag_member_number" id="lazertag_member_number" autocomplete="off" placeholder="Member Number" size="40" value="<?php echo $lazertag_member_number; ?>">

    <input type="text" class="lazertag_bill_date" name="lazertag_bill_date" id="lazertag_bill_date"  class="lazertag_bill_date" autocomplete="off" placeholder="Bill Paid Date" size="40" value="<?php echo $lazertag_bill_date; ?>">

    <input type="text" class="lazertag_bill_no" name="lazertag_bill_no" id="lazertag_bill_no" autocomplete="off" placeholder="Bill Number" size="40" value="<?php echo $lazertag_bill_no; ?>">

    <input type="text" class="lazertag_bill_amt" name="lazertag_bill_amt" id="lazertag_bill_amt" autocomplete="off" placeholder="Bill Amount" size="40" value="<?php echo $lazertag_bill_amt; ?>">
    
    <span class="dashicons dashicons-search search_icons_lazertag" id="icons" ></span>


<div class="lazertag_listing_team widget-content table-simple">
    <?php 
        include(get_template_directory() . '/inc/admin/billing/ajax/listing-template/list_lazertag_billing.php');
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