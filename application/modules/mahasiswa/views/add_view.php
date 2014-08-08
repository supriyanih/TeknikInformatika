<script type="text/javascript">
var url;

function create(){
	jQuery('#dialog-form').dialog('open').dialog('setTitle','Tambah');
	jQuery('#form').form('clear');
	url = '<?php echo site_url('mahasiswa/create'); ?>';
}

function update(){
	var row = jQuery('#datagrid-crud').datagrid('getSelected');
	if(row){
		jQuery('#dialog-form').dialog('open').dialog('setTitle','Edit');
		jQuery('#form').form('load',row);
		url = '<?php echo site_url('mahasiswa/update'); ?>/' + row.nim;
	}
}

function save(){
	jQuery('#form').form('submit',{
		url: url,
		onSubmit: function(){
			return jQuery(this).form('validate');
		},
		success: function(result){
			var result = eval('('+result+')');
			if(result.success){
				jQuery('#dialog-form').dialog('close');
				jQuery('#datagrid-crud').datagrid('reload');
			} else {
				jQuery.messager.show({
					title: 'Error',
					msg: result.msg
				});
			}
		}
	});
}

function hapus(){
	var row = jQuery('#datagrid-crud').datagrid('getSelected');
	if (row){
		jQuery.messager.confirm('Confirm','Yakin mau di hapus',function(r){
			if (r){
				jQuery.post('<?php echo site_url('mahasiswa/delete'); ?>',{nim:row.nim},function(result){
					if (result.success){
						jQuery('#datagrid-crud').datagrid('reload');
					} else {
						jQuery.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				},'json');
			}
		});
	}
}
</script>

<!-- Data Grid -->
<table id="datagrid-crud" title="Mahasiswa" class="easyui-datagrid"
       style="width:auto; height: auto;" url="<?php echo site_url('mahasiswa/index'); ?>?grid=true"
       toolbar="#toolbar" pagination="true" rownumbers="true" fitColumns="true" singleSelect="true" collapsible="true">
	<thead>
		<tr>
			<th field="nim" width="30" sortable="true">Nim</th>
			<th field="nama" width="50" sortable="true">Nama</th>
			<th field="jenkel" width="50" sortable="true">Jenis Kelamin</th>
			<th field="prodi" width="50" sortable="true">Prodi</th>
            <th field="alamat" width="50" sortable="true">Alamat</th>
            <th field="telpon" width="50" sortable="true">Telpon</th>
            <th field="email" width="50" sortable="true">Email</th>
		</tr>
	</thead>
</table>

<!-- Toolbar -->
<div id="toolbar">
	<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="create()">Tambah Mahasiswa </a>
	<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="update()">Edit</a>
	<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="hapus()">Hapus</a>
</div>

<!-- Dialog Form -->
<div id="dialog-form" class="easyui-dialog" style="width:450px; height:auto; padding: 10px 20px margin:auto" closed="true" buttons="#dialog-buttons">
	<form id="form" method="post" novalidate>
		<div class="form-item">
			<label for="type">NIM</label>
			<input type="text" name="nim" class="easyui-validatebox" required="true" size="53" maxlength="50" />
		</div>
		<div class="form-item">
			<label for="type">Nama</label>
			<input type="text" name="nama" class="easyui-validatebox" required="true" size="53" maxlength="50" />
		</div>
                <div class="form-item">
			<label for="type">Jenis Kelamin</label>
			<input type="text" name="jenkel" class="easyui-validatebox" required="true" size="53" maxlength="1" />
		</div>
                <div class="form-item">
			<label for="type">Prodi</label>
			<input type="text" name="prodi" class="easyui-validatebox" required="true" size="53" maxlength="50" />
		</div>
                <div class="form-item">
			<label for="type">Alamat</label>
			<input type="textarea" name="alamat" class="easyui-validatebox" required="true" size="53" maxlength="50" />
		</div>
                <div class="form-item">
			<label for="type">Telpon</label>
			<input type="phone" name="telpon" class="easyui-validatebox"  size="53" maxlengtmh="12" />
		</div>
                <div class="form-item">
			<label for="type">Email</label>
			<input type="text" name="email" class="easyui-validatebox" validType="email" size="53"  maxlengtmh="50"/>
		</div>

	</form>
</div>

<!-- Dialog Button -->
<div id="dialog-buttons">
	<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="save()">simpan</a>
	<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:jQuery('#dialog-form').dialog('close')">batal</a>
</div>