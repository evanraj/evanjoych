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
</style><?php
      if(isset($_POST['action']) && $_POST['action'] == 'utility_manager') {
        echo $utility_name;
        $receipt_per_page                           = $_POST['receipt_per_page'];
        $utility_name                               = $_POST['utility_name'];
        $emailid                                    = $_POST['emailid'];
        $current_date                               = $_POST['current_date'];
    
    } 
    else {
        $receipt_per_page                    = isset( $_GET['receipt_per_page'] ) ? abs( (int) $_GET['receipt_per_page'] ) : 5;
        $utility_name                        = isset( $_GET['utility_name'] ) ? $_GET['utility_name']  : '';
        $emailid                             = isset( $_GET['emailid'] ) ? $_GET['emailid']  : '';
        $current_date                        = isset( $_GET['current_date'] ) ? $_GET['current_date']  : '';
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
    <input type="text" name="utility_name" id="utility_name" autocomplete="off" placeholder="Utility Name" size="40" value="<?php echo $utility_name; ?>">
    <input type="text" name="emailid" id="emailid" autocomplete="off" placeholder="Email id" size="40" value="<?php echo $emailid; ?>">
    <input type="text" name="current_date" id="current_date"  class="current_date" autocomplete="off" placeholder="Utility Date" size="40" value="<?php echo $current_date; ?>">
    <span class="dashicons dashicons-search search_icons" id="icons" ></span>


<div class="receipt_listing widget-content table-simple">
    <?php 
        include(get_template_directory() . '\inc\admin\utility-manager\ajax\listing-template\list_utility.php');
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
