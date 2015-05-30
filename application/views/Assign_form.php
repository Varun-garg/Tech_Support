
            <link type="text/css" rel="stylesheet" href="<?php  echo  base_url().'application/views/common/'.'input/jquery-te-1.4.0.css'?>">
<script type="text/javascript" src="<?php  echo  base_url().'application/views/common/'.'input/jquery-te-1.4.0.min.js'?>" charset="utf-8"></script>
    

<?php 
/* 
 * Copyright (C) 2015 Varun Garg <varun.10@live.com> - All Rights Reserved
*/
?>
         
<?php 
$tick = $this->session->userdata('at');
 echo  form_open('Geass/assign_ticket/'.$tick); ?>

<!--
<label>Notes for user</label>
<textarea name="action" class="jqte-test" hieght="10000" rows="10"></textarea>

!-->
<div class="col-sm-10">
<label>Assign To</label>
<select name="user_id" class="selectpicker" data-live-search="true" data-width="100%">
<?php
if($this->session->userdata('type')=='admin')
{   
    $query2=  $this->db->query("select user_id,username from users order by user_id");
        foreach ($query2->result() as $row2)
        {
           echo  '<option value="'.$row2->user_id.'">'.$row2->username.'</option>';
        }
}


else  echo  '<option value="0">No one</option>';
?>
</select>
</br>

    <?php
 echo  '<label><font color="red">'.validation_errors().'</font></label>'; 

?>
<br>
<div><input type="submit" value="Submit" class="btn btn-default"/></div>
</div>
</form>
