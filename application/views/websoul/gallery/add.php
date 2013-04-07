<h3> Modules &raquo; Gallery &raquo; Add</h3>
<form class="cmxform" action="<?php echo site_url("websoul/gallery/add"); ?>" id="addform" name="addform" method="post" enctype="multipart/form-data">
    <fieldset>
        <table>
            <tr>
                <td width="120" valign="top"><strong>Category *</strong></td>
                <td>
                    <div style="width: 50%; float: left;">
                        <select name="category" id="category" class="text-input large-input" >
                        <option value="">-- Select Category --</option>
                        <option value="1">Picture</option>
                        <option value="2">Video</option>
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
            <tr>
                <td width="120" valign="top"><strong>Caption *</strong></td>
                <td><input type="text" name="caption" id="caption" class="text-input large-input" /></td>
            </tr>
            <tr>
                <td width="120" valign="top"><strong>Video URL</strong></td>
                <td valign="top"><textarea rows="5" cols="100" name="video" id="video" class="textarea" /></textarea>
                </td>
            </tr>
            <tr>
                <td valign="top" bgcolor="#cccccc"><strong>Picture</strong></td>
                <td bgcolor="#cccccc"><input type="file" name="picture" id="picture" size="20" class="text-input" /></td>
            </tr>            	
            <tr valign="top">
                <td width="120"><strong>Publish</strong></td>
                <td>
                    <input type="radio" name="publish" value="1" /> Publish <input type="radio" name="publish" value="0" checked="checked" /> Unpublish
                </td>
            </tr>            
            <tr>
                <td colspan="2" align="center" valign="top">
                    <input type="submit" class="button" value="Save" /><input type="hidden" name="<?php echo $this->security->get_csrf_token_name() ?>" value="<?php echo $this->security->get_csrf_hash() ?>" >
                </td>
            </tr>

        </table>
        <input type="hidden" id="tmp"  />
    </fieldset></form>


<script src="<?php echo base_url('assets/js');?>/jquery.tools.min.js"></script>
<script src="<?php echo site_url(); ?>assets/jquery-validation-1.11.0/dist/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        
        
        $("#addform").validate({
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