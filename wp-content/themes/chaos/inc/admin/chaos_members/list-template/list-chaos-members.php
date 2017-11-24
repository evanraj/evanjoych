<?php 
if(isset($_POST['action']) && $_POST['action'] == 'chaos_members_list') {
        $cpage          = 1;
        $ppage          = $_POST['per_page'];
        $membership_no  = $_POST['membership_no'];
        $name           = $_POST['name'];
        $phone          = $_POST['phone'];
    } else {
        $cpage          = isset( $_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : 1;
        $ppage          = isset( $_GET['ppage'] ) ? abs( (int) $_GET['ppage'] ) : 10;
        $membership_no  = isset( $_GET['membership_no'] ) ? abs( (int) $_GET['membership_no'] ) : '';
        $name           = isset( $_GET['name'] ) ? abs( (int) $_GET['name'] ) : '';
        $phone          = isset( $_GET['phone'] ) ? abs( (int) $_GET['phone'] ) : '';
    }
    $condition = '';
    if($membership_no != '') {
        $condition .= " AND membership_no LIKE '".$membership_no."%' ";
    }
    if($name != '') {
        $condition .= " AND name LIKE '".$name."%' ";
    }
    if($phone != '') {
        $condition .= " AND phone LIKE '".$phone."%' ";
    }

    global $wpdb;
    $table_name = $wpdb->prefix. 'chaos_members';
    if(isset($_GET['action']) && $_GET['action'] == 'delete' ) {
        $wpdb->update($table_name, array(
            'active' => 0
            ),
            array(
                'id' => $_GET['member_id']
            )
        );
    }
    $result_args = array(
            'table'         => $table_name,
            'orderby_field' => 'id',
            'page'          => isset($_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : 1 ,
            'order_by'      => 'DESC',
            'items_per_page' => $ppage,
            'condition'     => $condition
        );
    $results = chaos_members_pagination($result_args);
    ?>
<div id="dialog-confirm" style="display:none">Are you sure?</div>
<table class="wp-list-table widefat fixed" cellspacing="0" >
    <thead>
        <tr style="background: rgb(229, 229, 229);color: #fff;">
            <th class="manage-column column-id"><span>S No</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Membership No</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Name</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Phone</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>E-mail</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Action</span></th>
        </tr>
    </thead>
    <tbody id="the-list" class="list:wp_list_text_link">
 	<?php
    if(count($results['result'])>0) {  
        $start_count = $results['start_count'];
        foreach ($results['result'] as $m_value) {
        $start_count++;
	?>
  	<tr>
	  	<td class=""><?php echo $start_count; ?>
        </td>
	  	<td> <?php echo $m_value->membership_no; ?></td>
        <td> <?php echo $m_value->name; ?></td>
        <td> <?php echo $m_value->phone; ?></td>
	  	<td> <?php echo $m_value->email; ?></td>
        <td>
            <input class="btn-edit" type="button" value="Edit" data-reqid="<?php echo $m_value->id; ?>">
            <input class="btn-delete" type="button" value="Delete" data-reqid="<?php echo $m_value->id; ?>">
            <input class="btn-credit" type="button" value="Credits" data-reqid="<?php echo $m_value->membership_no; ?>">
        </td>
  	</tr>
  	<?php
        }
    }
    ?>
    </tbody>
</table>
<?php echo $results['pagination']; ?>


