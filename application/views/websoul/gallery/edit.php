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
                        <?php foreach ($cat as $vcat){?>
                        <option value="<?php echo $vcat->id;?>"><?php echo $vcat->category;?></option>
                        <?php } ?>
                    </select></div>
                    
                    <div style="width: 28px; height: 28px; margin-top: 6px; float: left;"><a href="#" id="addcategory" title="Add new category"><img src="<?php echo base_url(); ?>assets/images/websoul/icons/plus-icon-28.png" rel="modal" /></a></div>
                </td>
            </tr>
                <tr valign="top">
                  <td width="120"><strong>Caption *</strong></td>
                  <td><input type="text" name="caption" id="caption" class="text-input large-input" value="<?php echo $v->title;?>" />
		  </td>
                </tr>
                <tr>
                  <td width="120"  valign="top" ><strong>Video *</strong></td>
                  <td  valign="top"><textarea rows="5" cols="100" name="video" id="video" class="textarea" /><?php echo $v->content;?></textarea></td>
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
  <div id="messages" class="overlay_box" style="display: none">    
    <a href="#" id="boxclose" ><img src="<?php echo base_url('assets/images/websoul');?>/close.png" /></a>
    <a href="#" id="boxtitle" >Article Category</a>
    <div style=" clear: both;"></div>   
    <div id="content">
        <table width="360" class="cmxform">
            <tr>
                <th width="60"><strong>Cat. ID</strong></th>
                <th width="160"><strong>Category Name</strong></th>
                <th><strong>Description</strong></th>
            </tr>
            <?php foreach ($cat as $vcat){?>
            <tr>
                <td><?php echo $vcat->id;?>.</td>
                <td><?php echo $vcat->category;?></td>
                <td><?php echo $vcat->description;?></td>
            </tr>
            <?php }?>
        </table>            
    </div>		
</div> <!-- End #messages -->

<script type="text/javascript" src="<?php echo site_url(); ?>assets/js/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url('assets/js');?>/jquery.tools.min.js"></script>
<script src="<?php echo site_url(); ?>assets/jquery-validation-1.11.0/dist/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
    //<![CDATA[
    
    CKEDITOR.on('instanceCreated', function (e) {
        e.editor.on('blur', function (ev) {
            $('#txtcontent').val(ev.editor.getData());
        });
    });
    
    var config = { extraPlugins: 'onchange'};
    
    CKEDITOR.replace( 'txtcontent',
    {
        toolbar : 'Basic',
        enterMode : CKEDITOR.ENTER_BR
    });
    //]]>
    
                        $('#addcategory').click( function (){
                            $(".overlay_box").overlay({
                                top: 260,
                                mask: {
                                    color: '#000',
                                    loadSpeed: 200,
                                    opacity: 0.7
                                },
                                closeOnClick: true,
                                load: true,
                                oneInstance: true
                                
                            }).load();
                        })
                        
                        $('#boxclose').click( function (){
                            $(".overlay_box").overlay().close();
                        })
    
    $(document).ready(function() {
        
        $('#publishd').hide();
        
        $('#contentnotif').hide();
        
        $("#editform").validate({
            rules: {
                category: "required",
                title: "required",
                txtsortcontent: "required",
                txtcontent: "required"
            },
            messages: {
                category: "Please enter an gallery category.",
                title: "Please enter an gallery title.",
                txtsortcontent: "Please enter an gallery short content.",
                txtcontent: "Please enter an gallery content."
            }
        });
        
    });
			    
    $('input[name=publish]').click( function (){
        if($('input[name=publish]:checked').val() == '1'){
            $('#publishd').show('slow');
        }else{
            $('#publishd').hide('slow');
        }
    });	
			    
    $("form").submit( function() {

        var messageLength = CKEDITOR.instances['txtcontent'].getData().replace(/<[^>]*>/gi, '').length;
        //alert(messageLength);
        if( messageLength==1 ) {
            $('#contentnotif').show();
        }else{
            $('#contentnotif').hide();
        }

    });

</script>