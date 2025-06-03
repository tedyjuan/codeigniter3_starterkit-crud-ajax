<li id="dashboard" class="active" onclick="is_aktif('dashboard', 'sub_menu')">
	<a href="<?= base_url(); ?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
</li>
<li id="data_role" onclick="is_aktif('data_role','sub_sub_menu')">
	<a href="javascript:void(0)" class="has-arrow"><i class="fa fa-users"></i><span>Role Akses</span></a>
	<ul>
		<li>
			<a onclick="ToController('c_role', 'data_role')">Master Role</a>
		</li>
	</ul>
</li>
<li id="data_agama" onclick="is_aktif('data_agama', 'sub_menu')">
	<a onclick="ToController('c_agama', 'data_agama')"><i class="fa fa-map"></i><span>Agama</span></a>
</li>
