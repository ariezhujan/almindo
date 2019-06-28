function launch_toast() {
		var x = document.getElementById("accept")
		x.className = "show";
		setTimeout(function(){ x.className = x.className.replace("show", ""); }, 50000);
	}
	 $(document).ready(function(){
	  $('#company_name').change(function(){
	   var company_name = $('#company_name').val();
	   if(company_name != ''){
		$.ajax({
		 url: "<?php echo base_url(); ?>register/validasi_form/cek_name",
		 method: "POST",
		 data: {company_name:company_name},
		 success: function(data){
		  $('#see_name').html(data);
		 }
		});
   }
  });
 });