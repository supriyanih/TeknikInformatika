<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Sistem Informasi Nilai Akademik</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/easyui/themes/default/easyui.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/easyui/themes/icon.css'); ?>">
	<script type="text/javascript" src="<?php echo base_url('assets/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/easyui/jquery.easyui.min.js'); ?>"></script>
</head>
<body class="easyui-layout">

	<!-- top -->
	<div data-options="region:'north',split:true" title="UMT Teknik" style="height:100px;padding:10px;">
			<p> Sistem Informasi Nilai Akademik</p>
	</div>
	<!-- left -->
	<div data-options="region:'west',split:false" title="Main Menu" style="width:110px;padding1:1px;overflow:hidden;">
		<div class="easyui-accordion" data-options="fit:true,border:true">
			<div title="Master Data" style="padding:10px;overflow:auto;" data-options="selected:true" >
				<div style="margin:20px 0 10px 0;">
                                    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="javascript:$('#p').panel('open')">Open</a>
                                    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="javascript:$('#p').panel('close')">Close</a>

                                </div>
			</div>
			<div title="Title2" style="padding:10px;">
				content2
			</div>
			<div title="Title3" style="padding:10px">
				content3
			</div>
		</div>
	</div>

	<!-- center -->
	<div data-options="region:'center'" title="Main Content" style="overflow:hidden;padding:1px">
		<div class="easyui-panel" style="height:device-getheight;padding:2px;">
                    <div id="p" class="easyui-panel" style="width:auto;height:auto;padding:1px; border: false ">

                    	 <?php $this->load->view('mahasiswa/add_view'); ?>
                </div>
                </div>
	</div>

</body>
</html>