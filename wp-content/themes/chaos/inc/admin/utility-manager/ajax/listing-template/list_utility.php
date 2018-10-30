<style>
.postponed_days{
    display: none;
}
.need_update{
    width: 10px;
    height: 10px;
    background: red;
    border-radius: 10px;
}
.email_sent{
    width: 10px;
    height: 10px;
    background: #ab9b0e;
    border-radius: 10px;

}
</style>
<h1>List Team</h1>
<table class="wp-list-table widefat fixed " cellspacing="0" >
    <thead>
        <tr style="background: #23282d;color: #fff;">
            <th class="manage-column column-id"><span>S No</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Employee Name</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Utility Name</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Amount</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Emailid</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Type</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Utility Date</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Pay Date</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Days Remain</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Quick View</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Utility Status</span></th>
          <!--   <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Payment Methods</span></th> -->
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Action</span></th>
        </tr>
    </thead>
    <tbody id="the-list" class="">
    <?php
    global $wpdb;
    $table = $wpdb->prefix. 'chaos_utility';

    if($_GET['action']=='delete'){
        $id = $_GET['id'];
        $data_delete=$wpdb->update( $table ,array( 'active' =>'0' ),array( 'id' => $id ));
    }

    if(isset($_POST['action']) && $_POST['action'] == 'utility_manager') {
        $receipt_per_page                            = $_POST['receipt_per_page'];
        $utility_name                                = $_POST['utility_name'];
        $emailid                                     = $_POST['emailid'];
        $current_date                                = $_POST['current_date'];
    } 
    else {
        $receipt_per_page                            = isset( $_GET['receipt_per_page'] ) ? abs( (int) $_GET['receipt_per_page'] ) : 5;
        $utility_name                                = isset( $_GET['utility_name'] ) ? $_GET['utility_name']  : '';
        $emailid                                     = isset( $_GET['emailid'] ) ? $_GET['emailid']  : '';
        $current_date                                = isset( $_GET['current_date'] ) ? $_GET['current_date']  : '';
    }


    $condition = '';
    if($utility_name != '') {
        $condition .= ' AND ut_name LIKE "'.$utility_name.'%"';
    }
    if($emailid != '') {
        $condition .= ' AND ut_emailid LIKE "'.$emailid.'%"';
    }
    if($current_date != '') {
        $condition .= ' AND  ut_utillity_date LIKE "'.$current_date.'%"';
    }
    

    $result_args = array(
        'table_name' => $table,
        'orderby_field' => 'days_remain',
        'page' => 1,
        'order_by' => 'ASC',
        'items_per_page' => $receipt_per_page,
        'condition' => $condition,
    );
    $results = custom_pagination_utility($result_args);


    // echo "<pre>";
    // var_dump($results); die();

        if(isset($results['result']) && is_array($results['result']) && count($results['result'])>0 ) {
            $per_page = $results['start_count'];
            foreach ($results['result'] as $d_value) {
                $per_page++;
    ?>
    <tr>
        <td>
        <div>
            <?php 
                echo  '<div>'.$per_page.'</div>'; 
                if($d_value->under_alert == '1'){
                    echo '<div class="email_sent"></div>';
                }
                else if($d_value->days_remain < 0){
                     echo '<div class="need_update"></div>';
                }
            ?> 
        </div>        
        </td>
        <td> <?php echo $d_value->ut_person_name; ?></td>
        <td> <?php echo $d_value->ut_name; ?></td>
        <td> <?php echo $d_value->ut_amount; ?></td>
        <td> <?php echo $d_value->ut_emailid; ?></td>
        <td> <?php echo $d_value->ut_utility_type; ?></td>
        <td> <?php echo $d_value->ut_utillity_date; ?></td>
        <td> <?php echo $d_value->next_pay_date; ?></td>
        <td> <?php echo $d_value->days_remain; ?>
              
        </td>
        <td><button type="button" class="utility_detail" data-id="<?php  echo $d_value->id; ?>" id="utility_detail" value="<?php  echo $d_value->id; ?>">Quick View</button>
        </td>
        <td>
            <select class="utility_status" data-id="<?php  echo $d_value->id; ?>">
                <option value="select">Select</option>
                <option value="done">Done</option>
                <option value="postponed">Postponed</option>
                <option value="cancelled">Cancelled</option>
            </select>
            <span class="">
                <?php
                    if($d_value->was_postponded=='1'){
                        echo 'Postponed';
                    } 
                ?>
            </span>
            <div class="postponed_days"><input type="text" data-id="<?php  echo $d_value->id; ?>" name="postponed_days"  class="postponed_cal"/></div>
        </td>
        <td class="center">
            <span>
                <a class="action-icons c-edit employee_edit dashicons dashicons-edit" href="<?php echo admin_url('admin.php?page=add_utility').'&id='.$d_value->id.'&action=update'; ?>" title="Edit" data-roll="1" data-id="26"></a>
            </span>
            <span><a class="action-icons c-delete-utility user_delete dashicons dashicons-trash" title="delete" data-action="employees" data-roll="1" data-id="<?php  echo $d_value->id; ?>"></a>
            </span>
        </td>
    </tr>
    <?php
    }
}
 ?>
    </tbody>
</table>
<?php echo $results['pagination']; ?>








