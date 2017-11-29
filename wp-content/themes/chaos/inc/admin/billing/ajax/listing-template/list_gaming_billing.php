
<h1>List Team</h1>
<table class="wp-list-table widefat fixed " cellspacing="0" >
    <thead>
        <tr style="background: #23282d;color: #fff;">
            <th class="manage-column column-id"><span>S No</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Member Name</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Member Number</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Date</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Bill No</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Bill Amount</span></th>           
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Gaming Bill</span></th>           
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Action</span></th>
        </tr>
    </thead>
    <tbody id="the-list" class="">
    <?php
    global $wpdb;
    $table = $wpdb->prefix. 'chaos_gaming_billing';

    if($_GET['action']=='delete'){
        $id = $_GET['id'];

        $query                      = "SELECT  member_id,gaming_credit_points from $table where id = $id";
        $get_data                   = $wpdb->get_row($query);
        $gaming_credit_points       = $get_data->gaming_credit_points;
        $member_id                  = $get_data->member_id;
        $delete                     = deletebill($member_id,$gaming_credit_points,'gaming_bill',$_GET['id']);


        $data_delete=$wpdb->update( $table ,array( 'active' =>'0' ),array( 'id' => $id ));
    }

   if(isset($_POST['action']) && $_POST['action'] == 'gaming_listing') {
        $gaming_per_page                            = $_POST['gaming_per_page'];
        $gaming_member_name                         = $_POST['gaming_member_name'];
        $gaming_member_number                       = $_POST['gaming_member_number'];
        $gaming_bill_date                           = $_POST['gaming_bill_date'];
        $gaming_bill_no                             = $_POST['gaming_bill_no'];
        $gaming_bill_amt                            = $_POST['gaming_bill_amt'];
        
    
    } 
    else {
        $gaming_per_page                              = isset( $_GET['gaming_per_page'] ) ? abs( (int) $_GET['gaming_per_page'] ) : 5;
        $gaming_member_name                           = isset( $_GET['gaming_member_name'] ) ? $_GET['gaming_member_name']  : '';
        $gaming_member_number                         = isset( $_GET['gaming_member_number'] ) ? $_GET['gaming_member_number']  : '';
        $gaming_bill_date                             = isset( $_GET['gaming_bill_date'] ) ? $_GET['gaming_bill_date']  : '';
        $gaming_bill_no                               = isset( $_GET['gaming_bill_no'] ) ? $_GET['gaming_bill_no']  : '';
        $gaming_bill_amt                              = isset( $_GET['gaming_bill_amt'] ) ? $_GET['gaming_bill_amt']  : '';
    
    }


    $condition = '';
    if($gaming_member_name != '') {
        $condition .= ' AND  gaming_member_name LIKE "'.$gaming_member_name.'%"';
    }
    if($gaming_member_number != '') {
        $condition .= ' AND gaming_membership_no LIKE "'.$gaming_member_number.'%"';
    }
    if($gaming_bill_date != '') {
        $condition .= ' AND gaming_date LIKE "'.$gaming_bill_date.'%"';
    }
    if($gaming_bill_no != '') {
        $condition .= ' AND gaming_bill_no LIKE "'.$gaming_bill_no.'%"';
    }
    if($gaming_bill_amt != '') {
        $condition .= ' AND gaming_bill LIKE "'.$gaming_bill_amt.'%"';
    }
    

    $result_args = array(
        'table_name' => $table,
        'orderby_field' => 'id',
        'page' => 1,
        'order_by' => 'DESC',
        'items_per_page' => $gaming_per_page,
        'condition' => $condition,
    );
    $results = custom_pagination_gaming_billing($result_args);


    // echo "<pre>";
    // var_dump($results); die();

        if(isset($results['result']) && is_array($results['result']) && count($results['result'])>0 ) {
            $per_page = $results['start_count'];
            foreach ($results['result'] as $d_value) {
                $per_page++;
    ?>
    <tr>
        <td> <?php echo $per_page; ?></td>
        <td> <?php echo $d_value->gaming_member_name; ?></td>
        <td> <?php echo $d_value->gaming_membership_no; ?></td>
        <td> <?php echo $d_value->gaming_date; ?></td>
        <td> <?php echo $d_value->gaming_bill_no; ?></td>
        <td> <?php echo $d_value->gaming_bill; ?></td>
        <td class="center">
            <span>
                <a  href="<?php echo admin_url('admin.php?page=display_gaming').'&bill_no='.$d_value->gaming_bill_no.'&id='.$d_value->id.'&action=display_gaming'; ?>"> View </a>
            </span>
        </td>
  
        <td class="center">
            <span>
                <a class="action-icons c-edit employee_edit dashicons dashicons-edit" href="<?php echo admin_url('admin.php?page=gaming_billing').'&id='.$d_value->id.'&action=update'; ?>" title="Edit" data-roll="1" data-id="26"></a>
            </span>
            <span><a class="action-icons c-delete-gaming user_delete dashicons dashicons-trash" title="delete" data-action="employees" data-roll="1" data-id="<?php  echo $d_value->id; ?>"></a>
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








