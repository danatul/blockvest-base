<div class="content-wrapper">
   <div class="row">
            <div class="col-md-12">
                    <div class="card">
                    	<div class="card-header no-bg b-a-0">
                        List Services Type
                         <span class="pull-right">
                             
                          	 <a   href="<?=site_url('services-type/add')?>" class="btn btn-sm btn-mini btn-xs pull-right" type="button" data-toggle="tooltip" title="" data-original-title="add"><i class="fa fa-plus"></i></a>
                         </span>  
                      </div>
                      <div class="card-body">
                      	 
                          <div class="col-12 table-responsive">		
                           <table class="table table-bordered table-striped js-dataTable-full">
                            <thead>
                                <tr>
                                    <th>Services Type</th>
                                     
                                    <th>Display</th> 
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
 
<script>
var table_ajax;
var curls = "<?=site_url('services-type/getlist')?>?baru=1";
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
			order:[[0, "asc" ]],
			"processing": true, 
			"autoWidth": false,
			"serverSide": true, 
			"ajax": {
					url :curls,
					type : "GET",
					data : function(d){
						 
						//d.id_category = $("#id_category").val();
						//d.id_subcategory = $("#id_subcategory").val();
					}
			 },
			columnDefs: [ 
			 
			{ orderable: false,   width:'80px', targets:[1,2]},
			 
			 
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
				title: "Delete this data?",
				message: "Do you want to delete this.",
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
						var req = post('<?=site_url('services-type/delete')?>',{id:ids,'<?=$this->security->get_csrf_token_name()?>':smart_token_hash});
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
						var req = post('<?=site_url('services-type/delete')?>',{id:ids,'<?=$this->security->get_csrf_token_name()?>':smart_token_hash});
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
	 $(".js-dataTable-full").on('click','.btn-checked',function(){
		var ids = $(this).data('ref');
		var checks = $(this).data('check');
		if(ids!="")
		{
			bootbox.confirm({
				title: "Display ?",
				message: "Do you want to .",
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
						var req = post('<?=site_url('services-type/displays')?>',{id:ids,"displays":checks,'<?=$this->security->get_csrf_token_name()?>':smart_token_hash});
						req.done(function(out){
							if(!out.error)
							{
								table_ajax.api().ajax.reload();
								smart_success_box(out.message,'#tbl-uses');
								document.location.href=window.location;
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