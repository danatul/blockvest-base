<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include __DIR__."/metadata.php";
	?> 
<title><?=setting('website_title')?></title>
<base href="<?=base_url()?>">
<!-- -->
<!-- -->
<link rel="stylesheet" type="text/css" href="assets/styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/bootstrap-icons.css">
<link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="assets/styles/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<meta id="theme-check" name="theme-color" content="#FFFFFF">

<script src="assets/jquery.min.js"></script>
<script src="assets/scripts/bootstrap.min.js"></script>
<script src="assets/scripts/custom.js"></script>
 <!-- select2 -->
        <link href="assets/plugins/select2/css/select2.css" rel="stylesheet">  
        <script src="assets/plugins/select2/js/select2.js"></script>   
<script src="assets/plugins/jquery-validation/jquery.validate.js"></script>
  <script src="assets/plugins/jquery-validation/additional-methods.js"></script>
   <script>
		var smart_token_hash = '<?=$this->security->get_csrf_hash();?>';
		var smart_token_name = '<?=$this->security->get_csrf_token_name()?>';
	 	var id_currency = 0; 
   		 </script>  
   <script src="assets/qrcode.js"></script>               
  <script src="assets/bootbox.js"></script>         
 <script src="assets/smart.js"></script>
 <script src="assets/os_v.js"></script>
<style type="text/css">
.xhide
{
	display:none !important;	
}
.bg-5, .bg-9, .bg-7
{
	background-image:none;
	background-color: #0d6efd;
	 
}
button.btn.btn-outline {
			color: black;
}
.pull-right
{
	float:right;	
}
.pull-left
{
	float:left;	
}
.platinum
{
	background:rgb(229, 228, 226) !important;	
}
.text-platinum
{
	color:rgb(229, 228, 226) !important;	
}
.gold
{
	background:#FFD700 !important;	
}
.text-gold
{
	color:#FFD700 !important;	
}
.diamond
{
	background:#b9f2ff !important;	
}
.text-diamond
{
	color:#b9f2ff !important;	
}
.padding-0
{
	padding:0 !important;	
}
.margin-0
{
	margin:0 !important;	
}
.h-task
{
	 	
}
.card-task img
{
	height:200px;
	opacity: 0.5;
}
.h-task {
    padding: 12%;
    position: absolute;
    width: 100%;
    font-size: 25px;
	font-weight:bold;
    color: black;
}
@media only screen and (max-width: 800px) {
   
    .h-task {
		padding: 16%;
		font-size: 30px;
		 
	}
    .d-flex.text-center.d-iconv {
		display: block !important;
	}
	.d-flex.text-center.d-iconv .m-auto {
		width: 31% !important;
		display: inline-grid;
		text-align: center !important;
		padding-left: 5%;
	}
	.d-flex.text-center.d-iconv .m-auto h6 {
		width: 50%;
		font-weight: bold !important;
		padding-top: 10px !important;
		 
	}
}

</style>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-123K9NCV7K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-123K9NCV7K');
</script>
<?php
include __DIR__."/style.php";
?>
<script>
function CopyToClipboard(id)
  {
			$("#smart-loader").modal('show'); 
			/*
			var r = document.createRange();
			r.selectNode(document.getElementById(id));
			window.getSelection().removeAllRanges();
			window.getSelection().addRange(r);
			document.execCommand('copy');
			window.getSelection().removeAllRanges();*/
			var texts = $("#"+ id).val();
			console.log(texts);
			copyToClipboard_val(texts);
			smart_message("copy to clipboard");
			 
  }
function copyToClipboard_val(text) {
		if (window.clipboardData && window.clipboardData.setData) {
			// Internet Explorer-specific code path to prevent textarea being shown while dialog is visible.
			return window.clipboardData.setData("Text", text);
	
		}
		else if (document.queryCommandSupported && document.queryCommandSupported("copy")) {
			var textarea = document.createElement("textarea");
			textarea.textContent = text;
			textarea.style.position = "fixed";  // Prevent scrolling to bottom of page in Microsoft Edge.
			document.body.appendChild(textarea);
			textarea.select();
			try {
				return document.execCommand("copy");  // Security exception may be thrown by some browsers.
			}
			catch (ex) {
				console.warn("Copy to clipboard failed.", ex);
				return prompt("Copy to clipboard: Ctrl+C, Enter", text);
			}
			finally {
				document.body.removeChild(textarea);
			}
		}
	}
	
</script>


</head>

<body class="theme-light">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
