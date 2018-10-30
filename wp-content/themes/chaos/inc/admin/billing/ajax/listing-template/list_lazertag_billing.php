
<h1>List Team</h1>
<table class="wp-list-table widefat fixed " cellspacing="0" >
    <thead>
        <tr style="background: #23282d;color: #fff;">
            <th class="manage-column column-id"><span>S No</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Member Name</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Member Number</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Mobile</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Date</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Bill No</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Bill Amount</span></th> 
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Lazer Tag Bill</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Send Sms</span></th>
           
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Action</span></th>
        </tr>
    </thead>
    <tbody id="the-list" class="">
    <?php
    global $wpdb;
    $table = $wpdb->prefix. 'chaos_lazertag_billing';

    if($_GET['action']=='delete'){
        $id = $_GET['id'];
        
        $query                      = "SELECT  member_id,lazertag_credit_points from $table where id = $id";
        $get_data                   = $wpdb->get_row($query);
        $lazertag_credit_points     = $get_data->lazertag_credit_points;
        $member_id                  = $get_data->member_id;
        $delete                     = deletebill($member_id,$lazertag_credit_points,'lazertag_bill',$_GET['id']);
        $data_delete=$wpdb->update( $table ,array( 'active' =>'0' ),array( 'id' => $id ));
    }

   if(isset($_POST['action']) && $_POST['action'] == 'lazertag_listing') {
        $lazertag_per_page                            = $_POST['lazertag_per_page'];
        $lazertag_member_name                         = $_POST['lazertag_member_name'];
        $lazertag_member_number                       = $_POST['lazertag_member_number'];
        $lazertag_bill_date                           = $_POST['lazertag_bill_date'];
        $lazertag_bill_date_to                        = $_POST['lazertag_bill_date_to'];
        $lazertag_bill_no                             = $_POST['lazertag_bill_no'];
        $lazertag_bill_amt                            = $_POST['lazertag_bill_amt'];
    
    } 
    else {
        $lazertag_per_page                              = isset( $_GET['lazertag_per_page'] ) ? abs( (int) $_GET['lazertag_per_page'] ) : 5;
        $lazertag_member_name                           = isset( $_GET['lazertag_member_name'] ) ? $_GET['lazertag_member_name']  : '';
        $lazertag_member_number                         = isset( $_GET['lazertag_member_number'] ) ? $_GET['lazertag_member_number']  : '';
        $lazertag_bill_date                             = isset( $_GET['lazertag_bill_date'] ) ? $_GET['lazertag_bill_date']  : '';
        $lazertag_bill_date_to                          = isset( $_GET['lazertag_bill_date_to'] ) ? $_GET['lazertag_bill_date_to']  : '';
        $lazertag_bill_no                               = isset( $_GET['lazertag_bill_no'] ) ? $_GET['lazertag_bill_no']  : '';
        $lazertag_bill_amt                              = isset( $_GET['lazertag_bill_amt'] ) ? $_GET['lazertag_bill_amt']  : '';
    
    }


    $condition = '';
    if($lazertag_member_name != '') {
        $condition .= ' AND  lazertag_member_name LIKE "'.$lazertag_member_name.'%"';
    }
    if($lazertag_member_number != '') {
        $condition .= ' AND lazertag_membership_no LIKE "'.$lazertag_member_number.'%"';
    }


    if($lazertag_bill_date != '' && $lazertag_bill_date_to != '') {
        $condition .= " AND lazer_date >= '".$lazertag_bill_date."' AND lazer_date <= '".$lazertag_bill_date_to."'";
    } else if($lazertag_bill_date != '' || $lazertag_bill_date_to != '') {
        if($this->bill_from != '') {
            $condition .= " AND lazer_date >= '".$lazertag_bill_date."' AND lazer_date <= '".$lazertag_bill_date."'";
        } else {
            $condition .= " AND lazer_date >= '".$lazertag_bill_date_to."' AND lazer_date <= '".$lazertag_bill_date_to."'";
        }
    }
    if($lazertag_bill_no != '') {
        $condition .= ' AND lazertag_bill_no LIKE "'.$lazertag_bill_no.'%"';
    }
    if($lazertag_bill_amt != '') {
        $condition .= ' AND lazertag_bill LIKE "'.$lazertag_bill_amt.'%"';
    }
    

    $result_args = array(
        'table_name' => $table,
        'orderby_field' => 'id',
        'page' => 1,
        'order_by' => 'DESC',
        'items_per_page' => $lazertag_per_page,
        'condition' => $condition,
    );
    $results = custom_pagination_lazertag_billing($result_args);


    // echo "<pre>";
    // var_dump($results); die();

        if(isset($results['result']) && is_array($results['result']) && count($results['result'])>0 ) {
            $per_page = $results['start_count'];
            foreach ($results['result'] as $d_value) {
                $per_page++;
    ?>
    <tr>
        <td> <?php echo $per_page; ?></td>
        <td> <?php echo $d_value->lazertag_member_name; ?></td>
        <td> <?php echo $d_value->lazertag_membership_no; ?></td>
        <td> <?php echo $d_value->lazertag_member_phone_number; ?></td>
        <td> <?php echo $d_value->lazer_date; ?></td>
        <td> <?php echo $d_value->lazertag_bill_no; ?></td>
        <td> <?php echo $d_value->lazertag_bill; ?></td>
        <td> <a href="<?php echo admin_url('admin.php?page=lazertag_billing').'&inv_id='.$d_value->id.'&action=display_lazertag&pagess=4'; ?>">View</a></td>  
        <td> <input type="button" name="lazertag_sms_list" id="lazertag_sms_list" class="lazertag_sms_list" data-phone="<?php echo $d_value->lazertag_member_phone_number; ?>" data-name="<?php  echo $d_value->lazertag_member_name?>" data-date ="<?php echo $d_value->lazer_date; ?>" data-time="<?php echo $d_value->from_time.'to'.$d_value->to_time; ?>"  data-id="<?php  echo $d_value->id; ?>" value="Send Sms" /> / 
            <input type="button" name="lazertag_sms_list_cancel" id="lazertag_sms_list_cancel" class="lazertag_sms_list_cancel btn btn-danger" data-phone="<?php echo $d_value->lazertag_member_phone_number; ?>" data-name="<?php  echo $d_value->lazertag_member_name?>" data-date ="<?php echo $d_value->lazer_date; ?>" data-time="<?php echo $d_value->from_time.'to'.$d_value->to_time; ?>"  data-id="<?php  echo $d_value->id; ?>" value="Cancel Sms" /></td>
        <td class="center">
            <span>
                <a class="action-icons c-edit employee_edit dashicons dashicons-edit" href="<?php echo admin_url('admin.php?page=lazertag_billing').'&inv_id='.$d_value->id.'&action=update&pagess=3'; ?>" title="Edit" data-roll="1" data-id="26"></a>
            </span>
            <span><a class="action-icons c-delete-lazertag user_delete dashicons dashicons-trash" title="delete" data-action="employees" data-roll="1" data-id="<?php  echo $d_value->id; ?>"></a>
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








