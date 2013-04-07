<!-- Content -->
<script language="javascript" >
function delRec() {    
    var check = confirm("Are you sure to delete selected record ? ");
        if(check){		
            document.getElementById('fdelete').submit();
        }  
}
</script><br><br>

<?php if($this->session->flashdata('notification')){?>
<div class="notification success">
<div><?php echo $this->session->flashdata('notification'); ?></div>
</div>
<?php } ?>
<form id="fdelete" action="<?php echo site_url("websoul/gallery/delete"); ?>" method="post" class="mainForm"><fieldset>
<h3>Gallery List</h3>
            <table cellpadding="0" cellspacing="0" width="100%"> 
    <thead>
    <tr>
        <th width="40">No.</th>
        <th width="120">Category</th>
        <th>Caption</th>
        <th width="100">Publish</th>
        <th width="120">Created</th>
        <th width="20">&nbsp;</th>
        <th width="20">&nbsp;</th>
    </tr></thead><tbody>    
    <?php $i=1;foreach($query as $v){ ?>
    <tr>
        <td valign="top"><?php echo $i+$cur_page;?>.</td>
        <td valign="top"><?php echo $category[$v->category];?></td>
        <td valign="top"><?php echo $v->caption;?></td>
        <td valign="top"><?php echo $publish[$v->publish];?></td>
        <td valign="top"><?php echo date("d M Y, H:i",strtotime($v->created));?></td>
        <td valign="top"><a title="Edit this record" href="<?php echo site_url("websoul/gallery/edit/".$v->id); ?>"><img src="<?php echo site_url(); ?>assets/images/icons/dark/pencil.png" alt="" /></a></td>
        <td valign="top"><input type="checkbox" id="chk<?php echo $i;?>" name="chk[<?php echo $i;?>]" value="<?php echo $v->id;?>" />      
        </td>
    </tr>
    <?php $i++;} ?></tbody>   
</table><input type="hidden" name="<?php echo $this->security->get_csrf_token_name()?>" value="<?php echo $this->security->get_csrf_hash()?>" ></form>
<div class="pagination"><?php echo $paging; ?></div>
<input type="button" id="btnadd" name="btnadd" class="button" value="Add" onclick="location.href='<?php echo site_url("websoul/gallery/add"); ?>'" /><input type="button" id="btndelete" name="btndelete" class="button" value="Delete" onclick="delRec()"  />