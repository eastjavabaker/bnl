  <h3> Modules &raquo; Gallery &raquo; Edit</h3>
<form action="<?php echo site_url("websoul/gallery/edit"); ?>" id="editform" name="editform" method="post" enctype="multipart/form-data">            
	    <fieldset>
            <table>       
                <?php foreach($query as $v){ ?>
                <tr>
                <td width="120" valign="top"><strong>Category *</strong></td>
                <td>
                    <div style="width: 50%; float: left;"><select name="category" id="category" class="text-input large-input" >
                         <option value="">-- Select Category --</option>
                        <option value="1" <?php echo ($v->category==1)?'selected="selected"':''; ?> >Picture</option>
                        <option value="2" <?php echo ($v->category==2)?'selected="selected"':''; ?> >Video</option>
                    </select></div>
                    
                </td>
            </tr>
            <tr>
                <td width="120" valign="top"><strong>Album *</strong></td>
                <td>
                    <div style="width: 50%; float: left;"><select name="album" id="album" class="text-input large-input" >
                        <option value="">-- Select Album --</option>
                        <?php foreach ($albums as $album){?>
                        <option value="<?php echo $album->id;?>"><?php echo $album->album_name;?></option>
                        <?php } ?>
                    </select></div>
                </td>
            </tr>
                <tr valign="top">
                  <td width="120"><strong>Caption *</strong></td>
                  <td><input type="text" name="caption" id="caption" class="text-input large-input" value="<?php echo $v->caption;?>" />
		  </td>
                </tr>
                <tr>
                  <td width="120"  valign="top" ><strong>Video *</strong></td>
                  <td  valign="top"><textarea rows="5" cols="100" name="video" id="video" class="textarea" /><?php echo $v->embed_video;?></textarea></td>
                </tr>
                <?php if($v->picture!=""){  ?>
                <tr>
                  <td valign="top" bgcolor="#cccccc">&nbsp;</td>
                  <td bgcolor="#cccccc"><img src="<?php echo site_url('data/gallery')."/".$v->picture;?>" /></td>
                </tr>
                <?php } ?>
                <tr>
                  <td valign="top" bgcolor="#cccccc"><strong>Picture</strong></td>
                  <td bgcolor="#cccccc"><input type="file" name="picture" id="picture" size="20" class="text-input" /></td>
                </tr>
                <tr valign="top">
                  <td width="120"><strong>Publish</strong></td>
                  <td>
		    <input type="radio" name="publish" value="1" <?php echo ($v->publish==1)?"checked='checked'":""; ?> /> Publish <input type="radio" name="publish" value="0"  <?php echo ($v->publish==0)?"checked='checked'":""; ?> /> Unpublish
		  </td>
                </tr>		
                <tr>
                  <td colspan="2" align="center" valign="top">
                    <input type="hidden" id="f_id" name="f_id" value="<?php echo $v->id;?>" />
		   <input type="submit" class="button" value="Save" /><input type="hidden" name="<?php echo $this->security->get_csrf_token_name()?>" value="<?php echo $this->security->get_csrf_hash()?>" >
		  </td>
                </tr><?php } ?>              
            </table><input type="hidden" id="tmp"  />
	    </fieldset></form>
 
<script src="<?php echo base_url('assets/js');?>/jquery.tools.min.js"></script>
<script src="<?php echo site_url(); ?>assets/jquery-validation-1.11.0/dist/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
        
    $(document).ready(function() {
        
        $("#editform").validate({
            rules: {
                category: "required",
                caption: "required"
            },
            messages: {
                category: "Please enter an gallery category.",
                caption: "Please enter an gallery title."
            }
        });
        
    });
			    
    
</script>