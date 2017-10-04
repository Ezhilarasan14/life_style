<div class="content-wrapper" style="min-height:100%">
   <section  class="content">
    	<div class="row">
        	<div class="col-lg-12 col-xs-12">
				<?php
				 echo $content; ?>
			</div>
		</div>
   </section>
</div>

<div id="modal-placeholder"></div>

<style>
	body{
	    font-family: sans-serif;
	}
	#modal-placeholder #create-quote{
		width:600px;
		background:none;
		margin:0 auto;
		float:none;
		top:10%;
		padding-right:0px;
		overflow-y: hidden; 
	}
	#modal-placeholder #create-quote .modal-content{
		border-radius: 5px;
	}
	
	#client_list_table_filter label{
		width: 60%;
	}
	#client_list_table_filter input{
		width: 82%;
	    border-radius: 5px;
	    border: 1px solid #3c8dbc;
	}
	#client_list_table_paginate .previous a{
		border:none;
	}
	#client_list_table_paginate .next a{
		border:none;
	}
	#client_list_table_paginate .active a{
		border-radius: 50%;
	}
	#client_list_table_wrapper .table > thead > tr > th{
		border-bottom: 1px solid #3c8dbc;
	}
	#client_list_table_wrapper .table > tbody > tr > td{
		border-bottom: 1px solid rgba(0, 4, 6, 0);
	}
	#client_list_table_info{
		display:none;
	}
	#client_list_table_length{
		display:none;
	}
	.client_add_btn{
		position: absolute;
	    top: 110px;
	    color: #ffffff;
	    background-color: #4da75b;
    	border-color: #3c8548;
	}
	.client_add_btn .fa-plus{
		border: 1px solid #ffffff;
	    padding: 3px 4px;
	    border-radius: 50%;
	}
	#client_list_table_wrapper .table-hover>tbody>tr:hover {
    	background-color: rgb(233, 247, 255);
    	cursor:pointer;
	}
	#client_list_table_wrapper .dropdown-menu{
		right: 0;
		left: initial;
	}
	table.dataTable thead .sorting:after{
		content: "";
	}
	table.dataTable thead .sorting_desc:after{
		content: "";
	}
	table.dataTable thead .sorting_asc:after{
		content: "";
	}
</style>
