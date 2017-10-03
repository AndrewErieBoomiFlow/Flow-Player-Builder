<?php 
/*
	Author : Andrew Erie (andrew_erie@dell.com)
	For    : Dell Boomi
*/
?>

<?php include 'include/functions.php';?>
<?php include 'include/head.php';?>
<?php include 'include/head2.php';?>
<?php include 'include/nav.php';?>
		
		<form action="generate.php" method="post">
			
			<!-- General -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Player Settings</h3>
				</div>
				<div class="panel-body">
					<div class="form-group" >
						<label for="player_title">Title</label>
						<input type="text" class="form-control" id="player_title" placeholder="" name="player_title">
					</div>
					<div class="form-group" >
						<label for="player_favicon">Fav Icon URL</label>
						<input type="text" class="form-control" id="player_favicon" placeholder="" name="player_favicon">
					</div>						
					<div class="form-group checkbox-inline">
						<label><input data-toggle="toggle" type="checkbox" value="true" checked="true" name="player_replaceurl">Replace URL</label>
					</div>
				</div>
			</div>


			<!-- Theme  -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Bootwatch Theme / Custom CSS</h3>
				</div>
				<div class="panel-body">
					
					<div class="form-group">
						<label for="sel1"><a href="https://bootswatch.com/" target="_blank">Bootwatch</a> Theme:</label>
						<select class="form-control" name="player_theme">
							<option>default</option>
							<option>cerulean</option>
							<option>cosmo</option>
							<option>cyborg</option>
							<option>darkly</option>
							<option>flatly</option>
							<option>journal</option>
							<option>lumen</option>
							<option>readable</option>
							<option>sandstone</option>
							<option>simplex</option>
							<option>slate</option>
							<option>solar</option>
							<option>spacelab</option>
							<option>superhero</option>
							<option>united</option>
							<option>yeti</option>
						</select>
					</div>

					<div class="form-group" >
						<label for="player_customcssfile">Custom CSS URL</label>
						<input type="text" class="form-control" id="player_customcssfile" placeholder="" name="player_customcssfile">
					</div>

					<div class="form-group">
						<label for="pastecss">Paste CSS</label>
						<textarea class="form-control" rows="5" id="pastecss" name="player_pastecss"></textarea>
					</div>

				</div>
			</div>

			<!-- Nav -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">General Colors</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						
						<div class="col-sm-3">
							<div class="form-group">
								<label>Background Color</label>
								<div class="colorpick input-group colorpicker-component">
								    <input type="text" value="" class="form-control" name="general_bg" placeholder="Click Right" />
								    <span class="input-group-addon"><i></i></span>
								</div>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="form-group">
								<label>Text Color</label>
								<div class="colorpick input-group colorpicker-component">
								    <input type="text" value="" class="form-control" name="general_text" placeholder="Click Right" />
								    <span class="input-group-addon"><i></i></span>
								</div>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="form-group">
								<label>Base Font Size</label>
								<select class="form-control" name="general_fontsize">
									<option></option>
									<?php 
										for ($x = 8; $x <= 22; $x++) {
										    echo "<option>".$x."px </option>";
										} 
									?>								
								</select>
							</div>
						</div>

					</div>
					<div class="row">

						<div class="col-sm-3">
							<div class="form-group">
								<label>Link Color</label>
								<div class="colorpick input-group colorpicker-component">
								    <input type="text" value="" class="form-control" name="general_link" placeholder="Click Right" />
								    <span class="input-group-addon"><i></i></span>
								</div>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="form-group">
								<label>Link Hover Color</label>
								<div class="colorpick input-group colorpicker-component">
								    <input type="text" value="" class="form-control" name="general_linkhover" placeholder="Click Right" />
								    <span class="input-group-addon"><i></i></span>
								</div>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="form-group">
								<label>Link Active Color</label>
								<div class="colorpick input-group colorpicker-component">
								    <input type="text" value="" class="form-control" name="general_activelink" placeholder="Click Right" />
								    <span class="input-group-addon"><i></i></span>
								</div>
							</div>
						</div>

					</div>
					<hr>
					<div class="row">

						<div class="col-sm-2">
							<div class="form-group">
								<label>h1 Font Size</label>
								<select class="form-control" name="general_h1size">
									<option></option>
									<?php 
										for ($x = 12; $x <= 72; $x++) {
										    echo "<option>".$x."px </option>";
										} 
									?>								
								</select>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="form-group">
								<label>h2 Font Size</label>
								<select class="form-control" name="general_h2size">
									<option></option>
									<?php 
										for ($x = 12; $x <= 72; $x++) {
										    echo "<option>".$x."px </option>";
										} 
									?>								
								</select>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="form-group">
								<label>h3 Font Size</label>
								<select class="form-control" name="general_h3size">
									<option></option>
									<?php 
										for ($x = 12; $x <= 72; $x++) {
										    echo "<option>".$x."px </option>";
										} 
									?>								
								</select>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="form-group">
								<label>h4 Font Size</label>
								<select class="form-control" name="general_h4size">
									<option></option>
									<?php 
										for ($x = 12; $x <= 72; $x++) {
										    echo "<option>".$x."px </option>";
										} 
									?>								
								</select>
							</div>
						</div>

						<div class="col-sm-2">
							<div class="form-group">
								<label>h5 Font Size</label>
								<select class="form-control" name="general_h5size">
									<option></option>
									<?php 
										for ($x = 12; $x <= 72; $x++) {
										    echo "<option>".$x."px </option>";
										} 
									?>								
								</select>
							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- Nav -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Navigation</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-3">
							<div class="form-group">
								<label>Nav Background Color</label>
								<div class="colorpick input-group colorpicker-component">
								    <input type="text" value="" class="form-control" name="nav_bg" placeholder="Click Right" />
								    <span class="input-group-addon"><i></i></span>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label>Nav Link</label>
								<div class="colorpick input-group colorpicker-component">
								    <input type="text" value="" class="form-control" name="nav_link" placeholder="Click Right" />
								    <span class="input-group-addon"><i></i></span>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label>Nav Link BG </label>
								<div class="colorpick input-group colorpicker-component">
								    <input type="text" value="" class="form-control" name="nav_link_bg" placeholder="Click Right" />
								    <span class="input-group-addon"><i></i></span>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label>Nav Link Hover</label>
								<div class="colorpick input-group colorpicker-component">
								    <input type="text" value="" class="form-control" name="nav_link_hover" placeholder="Click Right" />
								    <span class="input-group-addon"><i></i></span>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label>Nav Link BG Hover</label>
								<div class="colorpick input-group colorpicker-component">
								    <input type="text" value="" class="form-control" name="nav_link_bghover" placeholder="Click Right" />
								    <span class="input-group-addon"><i></i></span>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label>Nav Link Active</label>
								<div class="colorpick input-group colorpicker-component">
								    <input type="text" value="" class="form-control" name="nav_linkactive" placeholder="Click Right" />
								    <span class="input-group-addon"><i></i></span>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label>Nav Link BG Active</label>
								<div class="colorpick input-group colorpicker-component">
								    <input type="text" value="" class="form-control" name="nav_linkactivebg" placeholder="Click Right" />
								    <span class="input-group-addon"><i></i></span>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label>Nav Brand Text</label>
								<div class="colorpick input-group colorpicker-component">
								    <input type="text" value="" class="form-control" name="nav_brandtxt" placeholder="Click Right" />
								    <span class="input-group-addon"><i></i></span>
								</div>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="form-group">
								<label>Nav Brand Text Hover</label>
								<div class="colorpick input-group colorpicker-component">
								    <input type="text" value="" class="form-control" name="nav_brandtxthov" placeholder="Click Right" />
								    <span class="input-group-addon"><i></i></span>
								</div>
							</div>
						</div>

					</div>

					<hr>
					
					<div class="checkbox-inline">
						<label><input data-toggle="toggle" type="checkbox" value="true"  checked="true" name="player_fixednav">Fixed Navigation</label>
					</div>
					<div class="checkbox-inline">
						<label><input data-toggle="toggle" type="checkbox" value="true" name="player_iswizard">Is Wizard?</label>
					</div>
				</div>
			</div>

			<!-- Quick Colors  -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Button Colors</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4 col-sm-4 custom-col1">
							<label>Default Btn Bg</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_default_bg" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Default Btn Bg Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_default_bghover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Default Btn Text Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_default_txt" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Default Btn Text Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_default_txthover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Default Btn Border Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_default_brdcolor" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<div class="form-group">
								<label>Default Btn Border Width</label>
								<select class="form-control" name="btn_default_brdwidth">
									<option></option>
									<?php 
										for ($x = 0; $x <= 10; $x++) {
										    echo "<option>".$x."px</option>";
										} 
									?>		
								</select>
							</div>
							<div class="form-group">
								<label>Default Btn Border Radius</label>
								<select class="form-control" name="btn_default_brdrad">
									<option></option>
									<?php 
										for ($x = 0; $x <= 10; $x++) {
										    echo "<option>".$x."px</option>";
										} 
									?>		
								</select>
							</div>
						</div>

						<div class="col-md-4 col-sm-4 custom-col1">
							<label>Primary Btn Bg</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_primary_bg" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Primary Btn Bg Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_primary_bghover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Primary Btn Text Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_primary_txt" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Primary Btn Text Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_primary_txthover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Primary Btn Border Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_primary_brdcolor" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<div class="form-group">
								<label>Primary Btn Border Width</label>
								<select class="form-control" name="btn_primary_brdwidth">
									<option></option>
									<?php 
										for ($x = 0; $x <= 10; $x++) {
										    echo "<option>".$x."px</option>";
										} 
									?>	
								</select>
							</div>
							<div class="form-group">
								<label>Primary Btn Border Radius</label>
								<select class="form-control" name="btn_primary_brdrad">
									<option></option>
									<?php 
										for ($x = 0; $x <= 10; $x++) {
										    echo "<option>".$x."px</option>";
										} 
									?>	
								</select>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-4 custom-col1">
							<label>Success Btn Bg</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_success_bg" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Success Btn Bg Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_success_bghover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Success Btn Text Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_success_txt" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Success Btn Text Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_success_txthover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Success Btn Border Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_success_brdcolor" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<div class="form-group">
								<label>Success Btn Border Width</label>
								<select class="form-control" name="btn_success_brdwidth">
									<option></option>
									<?php 
										for ($x = 0; $x <= 10; $x++) {
										    echo "<option>".$x."px</option>";
										} 
									?>	
								</select>
							</div>
							<div class="form-group">
								<label>Success Btn Border Radius</label>
								<select class="form-control" name="btn_success_brdrad">
									<option></option>
									<?php 
										for ($x = 0; $x <= 10; $x++) {
										    echo "<option>".$x."px</option>";
										} 
									?>	
								</select>
							</div>
						</div>

						<div class="col-md-4 col-sm-4 custom-col1">
							<label>Info Btn Bg</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_info_bg" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Info Btn Bg Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_info_bghover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Info Btn Text Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_info_txt" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Info Btn Text Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_info_txthover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Info Btn Border Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_info_brdcolor" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<div class="form-group">
								<label>Info Btn Border Width</label>
								<select class="form-control" name="btn_info_brdwidth">
									<option></option>
									<?php 
										for ($x = 0; $x <= 10; $x++) {
										    echo "<option>".$x."px</option>";
										} 
									?>	
								</select>
							</div>
							<div class="form-group">
								<label>Info Btn Border Radius</label>
								<select class="form-control" name="btn_info_brdrad">
									<option></option>
									<?php 
										for ($x = 0; $x <= 10; $x++) {
										    echo "<option>".$x."px</option>";
										} 
									?>	
								</select>
							</div>
						</div>

						<div class="col-md-4 col-sm-4 custom-col1">
							<label>Warning Btn Bg</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_warning_bg" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Warning Btn Bg Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_warning_bghover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Warning Btn Text Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_warning_txt" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Warning Btn Text Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_warning_txthover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Warning Btn Border Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_warning_brdcolor" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<div class="form-group">
								<label>Warning Btn Border Width</label>
								<select class="form-control" name="btn_warning_brdwidth">
									<option></option>
									<?php 
										for ($x = 0; $x <= 10; $x++) {
										    echo "<option>".$x."px</option>";
										} 
									?>	
								</select>
							</div>
							<div class="form-group">
								<label>Warning Btn Border Radius</label>
								<select class="form-control" name="btn_warning_brdrad">
									<option></option>
									<?php 
										for ($x = 0; $x <= 10; $x++) {
										    echo "<option>".$x."px</option>";
										} 
									?>	
								</select>
							</div>
						</div>

						<div class="col-md-4 col-sm-4 custom-col1">
							<label>Danger Btn Bg</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_danger_bg" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Danger Btn Bg Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_danger_bghover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Danger Btn Text Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_danger_txt" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Danger Btn Text Hover</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_danger_txthover" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<label>Danger Btn Border Color</label>
							<div class="colorpick input-group colorpicker-component">
							    <input type="text" value="" class="form-control" name="btn_danger_brdcolor" placeholder="Click Right" />
							    <span class="input-group-addon"><i></i></span>
							</div>
							<div class="form-group">
								<label>Danger Btn Border Width</label>
								<select class="form-control" name="btn_danger_brdwidth">
									<option></option>
									<?php 
										for ($x = 0; $x <= 10; $x++) {
										    echo "<option>".$x."px</option>";
										} 
									?>	
								</select>
							</div>
							<div class="form-group">
								<label>danger Btn Border Radius</label>
								<select class="form-control" name="btn_danger_brdrad">
									<option></option>
									<?php 
										for ($x = 0; $x <= 10; $x++) {
										    echo "<option>".$x."px</option>";
										} 
									?>	
								</select>
							</div>
						</div>

					</div>
				</div>
			</div>
		
			<button type="submit" class="btn btn-primary">Generate</button>

		</form>

<?php include 'include/footer.php';?>

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>
$(function() {
	$('.colorpick').colorpicker();
});
</script>

<?php include 'include/footer_close.php';?>