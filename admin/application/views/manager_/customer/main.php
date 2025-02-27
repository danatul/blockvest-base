<div class="content-wrapper">
   <div class="row">
            <div class="col-md-12">
                    <div class="card">
                    	<div class="card-header no-bg b-a-0">
                        List Customer
                         <span class="pull-right">
                             
                          	 
                         </span>  
                      </div>
                      <div class="card-body">
                      	 <form action="javascript:void(0);" method="post" id="frm-mb">
                          	 <div class="row">
                             	<div class="col-md-6">
                                		<div class="form-group">
                                                <label>Education Level</label>
                                                 <div class="input-group">
                                                   <select name="education_level" id="education_level" class="form-control">
                                                        <option value="-1">ALL</option>
                                                        <?php
                                                        
                                                        for($i=0;$i<count($education_level);$i++)
                                                        {
                                                        ?>
                                                        <option value="<?=$education_level[$i]['name']?>"><?=$education_level[$i]['name']?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                   
                                                </div>
                                               
                                          </div>

                                </div>
                                
                                <div class="col-md-6">
                                		<div class="form-group">
                                                <label>Occupation</label>
                                                 <div class="input-group">
                                                   <select name="occupation" id="occupation" class="form-control">
                                                        <option value="-1">ALL</option>
                                                        <?php
                                                         
                                                        for($i=0;$i<count($occupation);$i++)
                                                        {
                                                        ?>
                                                        <option value="<?=$occupation[$i]['name']?>"><?=$occupation[$i]['name']?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                  <span class="input-group-btn">
                                                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                                  </span>
                                                </div>
                                               
                                          </div>

                                </div>
                                
                             </div>
                                
                          </form>
                          <hr/>
                          <div class="col-12 table-responsive">		
                           <table class="table table-bordered table-striped js-dataTable-full">
                            <thead>
                                <tr>
                                    <th>View<br/>Refferal</th>
                                    <th>Akun Identity</th>
                                    <th>Akun Refferal</th>
                                   
                                    <th>Name</th>
                                    <th>Balance (<?=settings("coin_name")?>)</th>  
                                    <th>Rank Level</th>
                                     
                                    <th>Email</th>
                                    <th>Bank Info</th>
                                    <th>Phone</th> 
                                    <th>Sex</th> 
                                    <th>Occupation</th> 
                                    <th>Education<br/>Level</th> 
                                    <th>Religion</th> 
                                    <th>Age</th> 
                                    <th>Tribes</th> 
                                    <th>Province</th> 
                                    <th>City</th> 
                                    <th>District</th> 
                                     <th>Info Device</th> 
                                    
                                    <th>Active</th>
                                    
                                     
                                   
                                    <th>Join Date</th>
                                    <th class="text-center" style="width: 15%;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                          </div>  
                      </div>
                    
                    
                    </div>
            </div>
   </div>
</div> 
<!-- modal reset pass -->
<div id="modalstatus" class="modal fade" role="dialog">
  <div class="modal-dialog">
	<form action="" method="post" id="frm-status">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Form Status</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
        	<label>Status</label>
            <select name="status" id="status" class="form-control status_pay">
            	 
				 <?php
											$status_register = varstatus_register();
											for($i=0;$i<count($status_register);$i++)
											{
											?>
                                            <option value="<?=$i?>"><?=status_register($i)?></option>
                                            <?php
											}
											?>
            </select>
        </div>
         <div class="form-group reason xhide">
        	<label>Reason</label>
            <textarea name="reason" id="reason" class="form-control"></textarea>
        </div> 
      </div>
      <div class="modal-footer">
      	<input type="hidden" name="id" value="" id="id" />
        <!--
        <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash();?>" class="smart-token">
        -->
      	<button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
      </div>
    </div>
	</form>
  </div>
</div>                       
<!-- modal reset pass -->
<div id="resetmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">
	<form action="" method="post" id="frm-reset">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-bs-dismiss="modal" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reset Password</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
        	<label>New password</label>
            <input type="password" name="pass" id="pass" class="form-control required" />
        </div>
        <div class="form-group">
        	<label>Confirm password</label>
            <input type="password" equalto="#pass" id="confirm" class="form-control required" />
        </div>
      </div>
      <div class="modal-footer">
      	<input type="hidden" name="id" value="" id="id" />
        <!--
        <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash();?>" class="smart-token">
        -->
      	<button type="submit" class="btn btn-primary">Reset</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
	</form>
  </div>
</div>  
<div id="modalrank" class="modal fade" role="dialog">
  <div class="modal-dialog">
	<form action="" method="post" id="frm-rank">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" data-bs-dismiss="modal">&times;</button>
        <h4 class="modal-title">Rank Users</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
        	<label>Level</label>
             <select name="id_level_earn" id="id_level_earn" class="form-control">
                                            <option value="">System Rank</option>
                                            <?php
											 
											for($i=0;$i<count($level_earn);$i++)
											{
											?>
                                            <option value="<?=$level_earn[$i]['id']?>"><?=$level_earn[$i]['level']?></option>
                                            <?php
											}
											?>
               </select>
        </div>
         
      </div>
      <div class="modal-footer">
      	<input type="hidden" name="id" value="" id="id" />
        <!--
        <input type="hidden" name="<?=$this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash();?>" class="smart-token">
        -->
      	<button type="submit" class="btn btn-primary">Procced</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
	</form>
  </div>
</div>   
<!-- view reff -->
<!-- modal reset pass -->
<div id="view_refmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">
	 
    <!-- Modal content-->
    <div class="modal-content"  >
      <div class="modal-header">
        <button type="button" class="close" data-bs-dismiss="modal" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View Refferal</h4>
      </div>
      <div class="modal-body" >
         <div id="view_ref" style="overflow:auto;">
         
         </div>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
	 
  </div>
</div>  
<!-- -->
<script>
var table_ajax;
var curls = "<?=site_url('customer/getlist')?>?baru=1";
var BaseTableDatatables = function() {
    // Init full DataTable, for more examples you can check out https://www.datatables.net/
    var initDataTableFull = function() {
        table_ajax = $('.js-dataTable-full').dataTable({
			dom: 'Bfrtip',
			buttons: [
				  
				{
					extend: 'excelHtml5',
					exportOptions: {
						columns: ':visible'
					},
					customize: function ( xlsx ){
						var sheet = xlsx.xl.worksheets['sheet1.xml'];
		 
						// jQuery selector to add a border
						 
						 $('row c', sheet).attr( 's', '25' );
						 $('row[r=2] c', sheet).attr( 's', '27' );
						 // $('row c', sheet).attr( 's', '25' );
						 //$('row c[r^="B"]', sheet).attr( 's', '2' );
						  
					},
					filename: "printitem", 
					title: " "
				},
				{
					extend: 'colvis',
					text: "Filter Column"
				},
				'pageLength'
			],
			order:[[0, "desc" ]],
			"processing": true, 
			"autoWidth": false,
			"serverSide": true, 
			"ajax": {
					url :curls,
					type : "GET",
					data : function(d){
						d.occupation = $("#frm-mb #occupation").val();
						d.education_level = $("#frm-mb #education_level").val();
					}
			 },
			columnDefs: [ 
			 
			{ orderable: false, searchable:false, targets: [ 1 ],className:'text-center' },
			{ width:'100px', targets:[1,3]},
			{ width:'250px', targets:[4]},
			 
			],
			pagingType: "full_numbers",
            pageLength: 10,
            lengthMenu: [[5, 10, 15, 20,-1], [5, 10, 15, 20,"ALL"]]
        });
    };

     

    return {
        init: function() {
            // Init Datatables
            
            initDataTableFull();
        }
    };
}();

// Initialize when page loads
$(document).ready(function(){
	BaseTableDatatables.init();
	$('body').tooltip({selector: '[data-toggle="tooltip"]'});
	
	$(".js-dataTable-full").on('click','.btn-delete-users',function(){
		var ids = $(this).data('ref');
		if(ids!="")
		{
			bootbox.confirm({
				title: "Delete this user?",
				message: "Do you want to delete this user.",
				buttons: {
					cancel: {
						label: '<i class="fa fa-times"></i> Cancel'
					},
					confirm: {
						label: '<i class="fa fa-check"></i> Confirm'
					}
				},
				callback: function (result) {
					if(result)
					{
						var req = post('<?=site_url('customer/delete')?>',{id:ids,'<?=$this->security->get_csrf_token_name()?>':smart_token_hash});
						req.done(function(out){
							if(!out.error)
							{
								table_ajax.api().ajax.reload();
								smart_success_box(out.message,'#tbl-uses');
							}
							else
							{
								smart_error_box(out.message,'#tbl-uses');
							}
						});		
					}
				}
			});
		}
	});
	$("#btn-delete-all").on('click',function(){
		var ids = new Array();
		$(".js-dataTable-full").find(".chk-item").each(function(key,val){
			if($(this).is(":checked"))
			ids.push($(this).val());
		});
		if(ids.length>0)
		{
			bootbox.confirm({
				title: "Delete sites?",
				message: "Do you want to delete this sites.",
				buttons: {
					cancel: {
						label: '<i class="fa fa-times"></i> Cancel'
					},
					confirm: {
						label: '<i class="fa fa-check"></i> Confirm'
					}
				},
				callback: function (result) {
					if(result)
					{
						var req = post('<?=site_url('customer/delete')?>',{id:ids,'<?=$this->security->get_csrf_token_name()?>':smart_token_hash});
						req.done(function(out){
							if(!out.error)
							{
								table_ajax.api().ajax.reload();
								smart_success_box(out.message,'#tbl-uses');
							}
							else
							{
								smart_error_box(out.message,'#tbl-uses');
							}
						});		
					}
				}
			});
		}else
		{
			bootbox.confirm({
				title: "Message",
				message: "Checklist Your Data!",
				buttons: {
					 
					confirm: {
						label: '<i class="fa fa-check"></i> Confirm'
					}
				},
				callback: function (result) {
					return;
				}
			});	
		}
	});
	$("#chk-items").on('click',function(){
		var chk = $(this).is(':checked');
		$(".js-dataTable-full").find(".chk-item").each(function(){
			$(this).prop('checked',chk);
		});
	});
	$("#frm-reset").validate({
		ignore:[],
		onkeyup:false,
		errorClass: 'help-block text-right animated fadeInDown',
		errorElement: 'div',
		errorPlacement: function(error, e) {
			jQuery(e).parents('.form-group').append(error);
		},
		highlight: function(e) {
			jQuery(e).closest('.form-group').removeClass('has-error').addClass('has-error');
			jQuery(e).closest('.help-block').remove();
		},
		success: function(e) {
			jQuery(e).closest('.form-group').removeClass('has-error');
			jQuery(e).closest('.help-block').remove();
		},
		submitHandler:function(){
			var req = post('<?=site_url('customer/reset-password')?>',$("#frm-reset").serialize());
			req.done(function(out){
				if(!out.error)
				{
					smart_success_box(out.message,'#frm-reset .modal-body');
					$("#resetmodal").modal('hide');
				}
				else
				{
					smart_error_box(out.message,'#frm-reset .modal-body');
				}
			});
			return false;
		}
	})
	$(".js-dataTable-full").on('click','.btn-reset-users',function(){
		var ids = $(this).data('ref');
		if(ids!="")
		{
			$("#resetmodal").find("#id").val(ids);
			$("#resetmodal").modal('show');
		}
	});
	$("#resetmodal").on('hide.bs.modal',function(){
		$("#frm-reset")[0].reset();
		$("#resetmodal").find("#id").val('');
		reloadToken();
	});
	
	
	$("#frm-rank").validate({
		ignore:[],
		onkeyup:false,
		errorClass: 'help-block text-right animated fadeInDown',
		errorElement: 'div',
		errorPlacement: function(error, e) {
			jQuery(e).parents('.form-group').append(error);
		},
		highlight: function(e) {
			jQuery(e).closest('.form-group').removeClass('has-error').addClass('has-error');
			jQuery(e).closest('.help-block').remove();
		},
		success: function(e) {
			jQuery(e).closest('.form-group').removeClass('has-error');
			jQuery(e).closest('.help-block').remove();
		},
		submitHandler:function(){
			var req = post('<?=site_url('customer/ranks')?>',$("#frm-rank").serialize());
			req.done(function(out){
				if(!out.error)
				{
					table_ajax.api().ajax.reload();
					smart_success_box(out.message,'#frm-rank .modal-body');
					$("#modalrank").modal('hide');
				}
				else
				{
					smart_error_box(out.message,'#frm-rank .modal-body');
				}
			});
			return false;
		}
	})
	
	$(".js-dataTable-full").on('click','.btn-ranks',function(){
		var ids = $(this).data('ref');
		var levelearn = $(this).data('level');
		var id_level_earn = $(this).data('id_level_earn');
		if(ids!="")
		{
			$("#modalrank").find("#id").val(ids);
			if(id_level_earn!="")
			{
				$("#modalrank").find("#id_level_earn").val(levelearn);
			}else
			{
				$("#modalrank").find("#id_level_earn").val("");
	
			}
			$("#modalrank").find("#id_level_earn").trigger("change");
			$("#modalrank").modal('show');
		}
	});
	$("#modalrank").on('hide.bs.modal',function(){
		$("#frm-rank")[0].reset();
		$("#modalrank").find("#id").val('');
		reloadToken();
	});
	
	/*=========== edited users ========== */
	/*
	$("#status").select2({
		allowClear:true,
		placeholder:"Select Sorting"
	}); 
	$("#frm-status").validate({
		ignore:[],
		errorClass: 'help-block text-right animated fadeInDown',
		errorElement: 'div',
		errorPlacement: function(error, e) {
			jQuery(e).parents('.form-group').append(error);
		},
		highlight: function(e) {
			jQuery(e).closest('.form-group').removeClass('has-error').addClass('has-error');
			jQuery(e).closest('.help-block').remove();
		},
		success: function(e) {
			jQuery(e).closest('.form-group').removeClass('has-error');
			jQuery(e).closest('.help-block').remove();
		},
		submitHandler:function(){
			id_search = $("#status").val();
			curls = "<?=site_url('customer/getlist')?>?baru="+ id_search;
			table_ajax.api().ajax.url(curls).load()
			return false;
		}
	}); 
	*/
	
	$(".js-dataTable-full").on('click','.btn-check',function(){
		var ids = $(this).data('ref');
		var stores = $(this).data('store');
		var checks = $(this).data('check');
		if(ids!="" && stores!="")
		{
			bootbox.confirm({
				title: "default user?",
				message: "Do you want to default this user.",
				buttons: {
					cancel: {
						label: '<i class="fa fa-times"></i> Cancel'
					},
					confirm: {
						label: '<i class="fa fa-check"></i> Confirm'
					}
				},
				callback: function (result) {
					if(result)
					{
						var req = post('<?=site_url('customer/defaultuser')?>',{id:ids,"id_sites":stores,"default_store":checks,'<?=$this->security->get_csrf_token_name()?>':smart_token_hash});
						req.done(function(out){
							if(!out.error)
							{
								table_ajax.api().ajax.reload();
								smart_success_box(out.message,'#tbl-uses');
							}
							else
							{
								smart_error_box(out.message,'#tbl-uses');
							}
						});		
					}
				}
			});
		}
	});
	/*== === */
	$(".js-dataTable-full").on('click','.btn-view-ref',function(){
		var ids = $(this).data('ref');
		 
		if(ids!="")
		{
			$("#view_refmodal #view_ref").html("");
			var req = get('<?=site_url('jtree/gettree')?>',{id_customer:ids});
			req.done(function(out){
						if(!out.error)
						{
							
							$("#view_refmodal #view_ref").html(out.temp);
							$("#view_refmodal").modal('show');
						}
						else
						{
							 
						}
			});
			return false;
			
		}
	});
	//===
	$("#frm-mb").validate({
		ignore:[],
		onkeyup:false,
		errorClass: 'help-block text-right animated fadeInDown',
		errorElement: 'div',
		errorPlacement: function(error, e) {
			jQuery(e).parents('.form-group').append(error);
		},
		highlight: function(e) {
			jQuery(e).closest('.form-group').removeClass('has-error').addClass('has-error');
			jQuery(e).closest('.help-block').remove();
		},
		success: function(e) {
			jQuery(e).closest('.form-group').removeClass('has-error');
			jQuery(e).closest('.help-block').remove();
		},
		submitHandler:function(){
			table_ajax.api().ajax.reload(); 
			return false;
		}
	});
	$("#frm-status").validate({
		ignore:[],
		onkeyup:false,
		errorClass: 'help-block text-right animated fadeInDown',
		errorElement: 'div',
		errorPlacement: function(error, e) {
			jQuery(e).parents('.form-group').append(error);
		},
		highlight: function(e) {
			jQuery(e).closest('.form-group').removeClass('has-error').addClass('has-error');
			jQuery(e).closest('.help-block').remove();
		},
		success: function(e) {
			jQuery(e).closest('.form-group').removeClass('has-error');
			jQuery(e).closest('.help-block').remove();
		},
		submitHandler:function(){
			var req = post('<?=site_url('customer/status')?>',$("#frm-status").serialize());
			req.done(function(out){
				if(!out.error)
				{
					table_ajax.api().ajax.reload();
					smart_success_box(out.message,'#frm-status .modal-body');
					$("#modalstatus").modal('hide');
					$("#frm-status")[0].reset();
				}
				else
				{
					smart_message(out.message,'#frm-reset .modal-body');
				}
			});
			return false;
		}
	});
	$("#status").change(function()
	{
		var csta = $(this).val();
		$(".reason").addClass("xhide");
		if(csta==2)
		{
			$(".reason").removeClass("xhide");	
		}
	});
	$(".js-dataTable-full").on('click','.btn-status',function(){
		var ids = $(this).data('ref');
		if(ids!="")
		{
			$(".reason").addClass("xhide");
			$("#modalstatus").find("#id").val(ids);
			$("#modalstatus").modal('show');
		}
	});
});
</script>

<style type="text/css">
#view_refmodal .modal-dialog {
  width: 100%;
  height: auto;
  margin: 0;
  padding: 0;
  max-width: inherit;
}

#view_refmodal .modal-content {
  height: auto;
  min-height: 100%;
  border-radius: 0;
}
</style>