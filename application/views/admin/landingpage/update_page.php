
<script type="text/javascript">
/*window.onload = function()
{
    CKEDITOR.replace('description', {
        language: 'en',
        toolbar: [
            { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', '-', 'Preview', '-', 'Templates' ] },
            { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
            { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
            { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
            '/',
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },

            { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
            '/',
            { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl' ] },
            { name: 'forms', items: ['ImageButton'] },
        ],
            toolbarGroups: [
                    { name: 'document',	   groups: [ 'mode', 'document' ] },			// Displays document group with its two subgroups.
                    { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },			// Group's name will be used to create voice label.
            { name: 'links' },
            { name: 'colors' },
                    '/',																// Line break - next group will be placed in new line.
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
            { name: 'styles' },
            '/',
            { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
            { name: 'forms' },
            ]
        });
}*/
</script>
<script>
/*$(function () {
    $("#btnSubmits").on("click", function(){
        alert('works');

        
        $("#description_editortext").val(jQuery('<div />').text( CKEDITOR.instances.description.getData()).html());
        if (CKEDITOR.instances.description.getData() === "")
        {
            alert("Description is required.");
            return;
        } 
        $.ajax({
            dataType: 'json',
            type: "POST",
            url: '<?php echo base_url().'admin/landingpage/update_page/'.$page['id'];?>',
            data: $("#form_update_page").serializeArray(),
            success: function(data) {
                alert(data.message);
                window.location = '<?php echo base_url();?>admin/landingpage';
            }
        });
    });
    
    // Change this to the location of your server-side upload handler:
    var url = "<?php echo base_url().'admin/page/update_page/'.$page['id'];?>",
    uploadButton = $('<input type="submit" value="Save"/>').addClass('btn button-custom pull-right').text('Confirm').
    on('click', function() {
        $("#description_editortext").val(jQuery('<div />').text( CKEDITOR.instances.description.getData()).html());
        if (CKEDITOR.instances.description.getData() === "")
        {
            alert("Description is required.");
            return;
        } 
        var $this = $(this),data = $this.data();
        $this.off('click').text('Abort').on('click', function() {
            $this.remove();
            data.abort();
        });
        data.submit().always(function() {
            $this.remove();
        });
    });

    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        formData: $("form_update_page").serializeArray(),
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 5000000, // 5 MB
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
                .test(window.navigator.userAgent),
        previewMaxWidth: 120,
        maxNumberOfFiles: 1,
        previewMaxHeight: 120,
        previewCrop: true
    }).on('fileuploadadd', function(e, data) {
        $("#files").empty();
        data.context = $('<div/>').appendTo('#files');
        $("div#upload").empty();
        $("div#upload").append('<br>').append(uploadButton.clone(true).data(data));
        $.each(data.files, function(index, file) {
            var node = $('<p/>');
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function(e, data) {
        var index = data.index,
                file = data.files[index],
                node = $(data.context.children()[index]);
        if (file.preview) {
            node.prepend('<br>').prepend(file.preview);
        }
        if (file.error) {
            $("div#header").append('<br>').append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button').text('Upload').prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function(e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css('width',progress + '%');
    }).on('fileuploaddone', function(e, data) {
        alert(data.result.message);
        window.location = '<?php echo base_url();?>admin/page';
    }).on('fileuploadsubmit', function(e, data){
        data.formData = $('form').serializeArray();
    }).on('fileuploadfail', function(e, data) {
        alert(data.message);
        $.each(data.files, function(index, file) {
            var error = $('<span class="text-danger"/>').text('File upload failed.');
            $(data.context.children()[index]).append('<br>').append(error);
        });
    }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');

});*/
</script>
<?php 
//print_r($page);
?>
<div class="panel panel-default">
    <div class="panel-heading">Update Page</div>
    <div class="panel-body">
        <div class="form-background top-bottom-padding">
            <div class="row">
                <div class ="col-md-8 margin-top-bottom">
                   <?php echo form_open_multipart('admin/landingPage/update_page/'.$page['id'], array('id' => 'form_update_page', 'class' => 'form-horizontal')); ?>
                    <?php if(!empty($message)){ ?>
                    <div class ="row">
                        <div class="col-md-12">  </div>
                        <div class="alert alert-success" role="alert">
                          <span class="sr-only"></span>
                            <?php echo $message; ?>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <div class="form-group">
                        <label for="description" class="col-md-3 control-label requiredField">
                            Address <?php echo $message; ?>
                        </label>
                        <div class ="col-md-9">
                            <?php echo form_textarea($address + array('class' => 'form-control')); ?>
                            
                        </div>
                    </div>      

                     <div class="form-group">
                        <label for="match_date" class="col-md-3 control-label requiredField">
                            Telephone Numbmer
                        </label>
                        <div class ="col-md-9">
                            <?php echo form_input($telephone + array('class' => 'form-control')); ?>
                        </div> 

                        
                    </div>
                    
                    <div class="form-group">
                        <label for="match_date" class="col-md-3 control-label requiredField">
                            Email Address
                        </label>
                        <div class ="col-md-9">
                            <?php echo form_input($email + array('class' => 'form-control')); ?>
                        </div> 

                        
                    </div>


                    <div class="form-group">
                        <label for="picture" class="col-md-3 control-label requiredField">
                            Add Banner
                        </label>
                        <div class ="col-md-9">
                            <div class="col-md-6">
                                <div class="row fileinput-button">
                                    <i class="glyphicon glyphicon-plus"></i>
                                    <span>Upload a banner</span>
                                    <input id="fileupload" type="file" name="userfilebanner">
                                </div>
                                <div id="progress" class="row progress">
                                    <div class="progress-bar progress-bar-success"></div>
                                </div>
                            </div>

                            <div class=" col-md-4">
                                <div class="profile-picture-box" >
                                    <div id="files" class="files">
                                        <?php if(!empty($page['banner'])): ?>
                                            <img style="width: 220px; height: 80px;" src="<?php echo base_url() . IMAGE_UPLOAD_PATH . $page['banner']; ?>" class="img-responsive"/>
                                        <?php endif; ?>
                                        <br>
                                    </div>
                                </div>
                            </div>


                            
                        
                           
                        </div>
                    </div>        
                       




                    <div class="form-group">
                        <label for="picture" class="col-md-3 control-label requiredField">
                            Add Logo
                        </label>
                        <div class ="col-md-9">
                            <div class="col-md-6">
                                <div class="row fileinput-button">
                                    <i class="glyphicon glyphicon-plus"></i>
                                    <span>Upload a logo</span>
                                    <input id="fileupload" type="file" name="userfile">
                                </div>
                                <div id="progress" class="row progress">
                                    <div class="progress-bar progress-bar-success"></div>
                                </div>
                            </div>

                            <div class=" col-md-4">
                                <div class="profile-picture-box" >
                                    <div id="files" class="files">
                                        <?php if(!empty($page['logo'])): ?>
                                            <img style="width: 120px; height: 80px;" src="<?php echo base_url() . IMAGE_UPLOAD_PATH . $page['logo']; ?>" class="img-responsive"/>
                                        <?php endif; ?>
                                        <br>
                                    </div>
                                </div>
                            </div>



                        
                            <div class="col-md-offset-8 col-md-4 disable_padding_right" id="upload">
                                <input id="btnSubmit" type="submit" value="Save" class="btn button-custom pull-right"/>
                            </div>
                        </div>
                    </div>










                    <?php echo form_close(); ?>
                </div>
            </div>
            
        </div>
    </div>
</div>

