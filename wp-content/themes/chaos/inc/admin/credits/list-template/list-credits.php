<style>
    .credits {
        margin-top: 60px;
        margin-bottom: 60px;
        text-align: center;
    }    
    .credits h1 {
        text-align: center;
    }
    .name-id {
        margin: 10px 30px 10px 5px;
        font-size: 17px;
        font-weight: 600;        
        color: #000;
    }
    .name-id .member_name {
        padding-left: 20px;
    }
</style>

<?php
if(isset($_POST['action']) AND $_POST['action'] == 'search_credit') {
    $memberid         = ( isset($_POST['memberid']) && $_POST['memberid']!='')  ? $_POST['memberid'] : '';
    ?>
<?php
}
?>

<div class="credits">
    <h1>Credit System</h1>
    <input type="text" name="member_id" id="member_id" value=""> 
    <input type="button" value="Search" id="credit_search">
</div>

<?php
    global $wpdb;
    $table_name = $wpdb->prefix. 'chaos_credits';
?>
<div class="list-credits">
    <?php 
    if(isset($_GET['action']) && $_GET['action'] == 'credit' ) {
    $member_id      = $_GET['member_id'];
    $results        = $wpdb->get_results("SELECT * FROM ${table_name} WHERE member_id = $member_id");
    $resultdata     = $wpdb->get_row("SELECT * FROM ${table_name} WHERE member_id = $member_id");
    ?>
    <div class="name-id" > 
        <span class="member_id">Member Id : <?php echo $resultdata->member_id; ?> </span> 
        <span class="member_name">Name : <?php echo $resultdata->name; ?> </span>
    </div>
    

    <table class="wp-list-table widefat fixed" cellspacing="0" >
        <thead>
            <tr style="background: rgb(229, 229, 229);color: #fff;">
                <th class="manage-column column-id"><span>S No</span></th>
                <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Game Name</span></th>
                <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Amount</span></th>
                <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Credit Points</span></th>
            </tr>
        </thead>
        <tbody id="the-list" class="list:wp_list_text_link">
        <?php
        if(count($results)>0) {
            $start_count = 0;
            foreach ($results as $c_value) {
            $start_count++;
        ?> 
        <tr>
            <td class=""><?php echo $start_count; ?>
            </td>            
            <td> <?php echo $c_value->game_name; ?></td>
            <td> <?php echo $c_value->amount; ?></td>
            <td> <?php echo $c_value->credit_points; ?></td>
        </tr>
        <?php 
        } ?>        
        </tbody>
    </table>
    <?php
    }else {
    ?>  <table class="wp-list-table widefat fixed" cellspacing="0" >
            <thead>
                <tr style=" text-align: center; background: rgb(229, 229, 229);color: #fff;">
                    <h1 style="text-align: center;">No Data Found</h1>
                </tr>
            </thead>
        </table>
    <?php 
        }
    }
    ?>
</div>


