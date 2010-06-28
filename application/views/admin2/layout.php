<!DOCTYPE html>
<html>
<head>
	<title>PyroCMS - <?php echo $template['title'];?></title>
	<?php echo $template['partials']['metadata']; ?>
</head>

<body>
<div id="page-wrapper">
	<section id="sidebar">
<?php echo $template['partials']['header']; ?>
<?php echo $template['partials']['navigation']; ?>
		<div id="lang-select">
		<?php echo form_open($this->uri->uri_string(), 'id="change_language" method="get"'); ?>
				<select name="lang" onchange="this.form.submit();">
					<option value="">-- Select Language --</option>
			<?php foreach($this->config->item('supported_languages') as $key => $lang): ?>
		    		<option value="<?php echo $key; ?>" <?php echo CURRENT_LANGUAGE == $key ? 'selected="selected"' : ''; ?>>
						<?php echo $lang['name']; ?>
					</option>
        	<?php endforeach; ?>
	        	</select>

		<?php echo form_close(); ?>
		</div>
	</section>
	<section id="content">
		<header id="page-header">
			<h1><?php echo $module_data['name'] ? anchor('admin/' . strtolower($module_data['name']), $module_data['name']) : lang('cp_admin_home_title'); ?></h1>
			<p><?php echo $module_data['description'] ? $module_data['description'] : ''; ?></p>
		</header>
			<?php $this->load->view('admin2/partials/notices') ?>
			
			<?php echo $template['body']; ?>

		<footer>
			Copyright &copy; 2010 PyroCMS<br />
			Version 2.0
		</footer>
	</section>
</div>
</body>
</html>