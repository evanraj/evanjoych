<?php
    $result_args = array(
        'orderby_field' => 'id',
        'page' => $admin_users->cpage,
        'order_by' => 'DESC',
        'items_per_page' => $admin_users->ppage ,
        'condition' => '',
    );
    $admin_user_list = $admin_users->user_list_pagination($result_args);
?>
        <div class="x_content">
            <div class="table-responsive">
                <table class="wp-list-table widefat fixed ">
                    <thead>
                        <tr class="headings" style="background: #23282d;color: #fff;">
                            <th class="manage-column column-id">
                                S.No
                            </th>
                            <th scope="col" id="wplc_name_colum" class="manage-column column-id">User Name </th>
                            <th scope="col" id="wplc_name_colum" class="manage-column column-id">User Email</th>
                            <th scope="col" id="wplc_name_colum" class="manage-column column-id">User Mobile</th>
                            <th scope="col" id="wplc_name_colum" class="manage-column column-id">Roles </th>
                           
                            <th scope="col" id="wplc_name_colum" class="manage-column column-id">Action </th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                        if( isset($admin_user_list['result']) && $admin_user_list['result'] ) {
                            //$i = $admin_user_list['start_count']+1;
                            $i = 1;

                            foreach ($admin_user_list['result'] as $au_value) {
                                $user_id = $au_value->ID;
                    ?>
                                <tr class="odd pointer">
                                    <td class="a-center ">
                                        <?php echo $i; ?>
                                    </td>
                                    <td class=""><?php echo $au_value->data->user_login; ?></td>
                                    <td class=""><?php echo $au_value->data->user_email; ?></td>
                                    <td class=""><?php echo get_user_meta($user_id, 'mobile', true) ?></td>
                                    <td class=""><?php 
                                        $l_role = implode(', ', $au_value->roles);
                                        echo $admin_user_list['editable_roles'][$l_role]['name'];

                                    ?></td>

                                    <td class=""><a href="<?php echo menu_page_url( 'add_redeem_points', 0 )."&user_id=${user_id}&action=member_data"; ?>">Redeem</a> / 
                                        <a href="<?php echo menu_page_url( 'view_history', 0 )."&user_id=${user_id}&action=history";?>" >Point History</a>
                                        <a href="<?php echo menu_page_url( 'add_admin', 0 )."&user_id=${user_id}"; ?>">Update</a></td> 

                                </tr>
                    <?php
                                $i++;
                            }
                        }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-7">
                <div class="paging_simple_numbers" id="datatable-fixed-header_paginate">
                    <?php
                    echo $admin_user_list['pagination'];
                    ?>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="dataTables_info" id="datatable-fixed-header_info" role="status" aria-live="polite"></div>
            </div>
        </div>
