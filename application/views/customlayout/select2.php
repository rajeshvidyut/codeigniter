<link href="https://rawgit.com/select2/select2/master/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://rawgit.com/select2/select2/master/dist/js/select2.js"></script>
<script>
	$(document).ready(function() {
		$('.select2').select2({
		    allowClear: true,
		    multiple: false,
		    maximumSelectionSize: 1,
		    placeholder: "Click here and start typing to search.",
		});    
	});    
</script>
<style>
	.select2{
		text-align: left;    
	}   
</style>