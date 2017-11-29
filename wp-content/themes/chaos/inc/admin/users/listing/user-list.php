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
      if(isset($_POST['action']) && $_POST['action'] == 'user_listing') {
        $user_per_page                           = $_POST['user_per_page'];
        $user_name                                = $_POST['user_name'];
        $user_phone                              = $_POST['user_phone'];
     
        
    
    } 
    else {
        $user_per_page                       = isset( $_GET['user_per_page'] ) ? abs( (int) $_GET['user_per_page'] ) : 5;
        $user_name                            = isset( $_GET['user_name'] ) ? $_GET['user_name']  : '';
        $user_phone                          = isset( $_GET['user_phone'] ) ? $_GET['user_phone']  : '';    
    }

?>

<div class="widget-top">
    <h4>Customer List</h4>
</div>

<div class="search_bar employee_filter">
    <label>Page :</label>
    <select name="user_per_page" id="user_per_page">
        <option value="5" <?php echo (isset($user_per_page) && $user_per_page == '5' ) ? 'selected' : ''; ?>>5</option>
        <option value="10" <?php echo (isset($user_per_page) && $user_per_page == '10' ) ? 'selected' : ''; ?>>10</option>
        <option value="15" <?php echo (isset($user_per_page) && $user_per_page == '15' ) ? 'selected' : ''; ?>>15</option>

        <option value="20" <?php echo (isset($user_per_page) && $user_per_page == '20' ) ? 'selected' : ''; ?>>20</option>
        <option value="50" <?php echo (isset($user_per_page) && $user_per_page == '50' ) ? 'selected' : ''; ?>>50</option>
        <option value="100" <?php echo (isset($user_per_page) && $user_per_page == '100' ) ? 'selected' : ''; ?>>100</option>
    </select>
    <input type="text" name="user_name" id="user_name" autocomplete="off" placeholder="Member Name" size="40" value="<?php echo $user_name; ?>">
    <input type="text" name="user_phone" id="user_phone" autocomplete="off" placeholder="Phone" size="40" value="<?php echo $user_phone; ?>">
    <span class="dashicons dashicons-search user_search_icons" id="icons" ></span>


<div class="user_listing widget-content table-simple">
    <?php 
        include(get_template_directory() . '/inc/admin/users/ajax_loading/user-list.php');
    ?>
    <div class="clear"></div>
</div>



