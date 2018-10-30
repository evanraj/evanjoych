<style type="text/css">
#dashboard-widgets .postbox-container, #wpbody-content #dashboard-widgets.columns-4 .postbox-container{
        width: 100% !important;
}</style>
<h1>Today Events</h1>
<table class="wp-list-table widefat fixed " cellspacing="0" >
    <thead>
        <tr style="background: #23282d;color: #fff;">
            <th class="manage-column column-id"><span>S No</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Event Name</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Description</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Start Date</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>End Date</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Start Time</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>End Time</span></th>
        </tr>
    </thead>
    <tbody id="the-list" class="">
    <?php
    global $wpdb;
    $table = $wpdb->prefix. 'chaos_football_billing';
    $result_args = array(
        'orderby_field' => 'StartDate',
        'date' => date('Y-m-d'),
        'page' => 1,
        'order_by' => 'DESC',
        'items_per_page' => '20', 
    );
    $results = custom_pagination_event_list($result_args);


    // echo "<pre>";
    // var_dump($results); die();

        if(isset($results['result']) && is_array($results['result']) && count($results['result'])>0 ) {
            $per_page = $results['start_count'];
            foreach ($results['result'] as $d_value) {
               
                $per_page++;
    ?>
    <tr>
        <td> <?php echo $per_page; ?></td>
        <td> <?php echo $d_value->post_title; ?></td>
        <td> <?php echo $d_value->post_content; ?></td>
        <td><?php echo  $d_value->StartDate; ?></td>
        <td> <?php echo $d_value->EndDate; ?></td>
        <td> <?php echo $d_value->StartTime; ?></td>
        <td> <?php echo $d_value->FinishTime; ?></td>
    </tr>
    <?php
    }
}
 ?>
    </tbody>
</table>
<?php echo $results['pagination']; ?>








