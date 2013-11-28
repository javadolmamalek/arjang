<?php
	/*
	-----------------------------------------------------
	ARJANG - Open Source Project
	HTML Codes
	Design by Javad Haji Amini - http://jentelman.com
	http://jentelman.com/arjang
	November,2013
	-----------------------------------------------------
	*/
	
	//Open editor class
	require_once dirname(__FILE__) . '/editor-class.php';
	$editor = new editor();
	
	//Default input and output and other value
	$input = '';
	$value = '';
	$delete = '';
	$output = '';
	$action1 = 'checked="checked"';
	$action2 = '';
	
	//If post editor 1
	if( isset( $_POST['edit-1'] ) )
	{
		$input = htmlspecialchars( $_POST['your-text'] );
		if( $editor->edit1() )
		{
			$output = str_replace("<br />","\n",$editor->ftext);
			$editor->success_message = $editor->success_edit;
		}
		elseif( empty( $editor->error_message ) )
			$editor->error_message = $editor->err_system;
	}
	
	//If post editor 2
	if( isset( $_POST['edit-2'] ) )
	{
		$input = htmlspecialchars( $_POST['your-text'] );
		$value = htmlspecialchars( $_POST['your-value'] );
		if( $_POST['your-action'] == 'action1' )
			$action1 = 'checked="checked"';
		if( $_POST['your-action'] == 'action2' )
			$action2 = 'checked="checked"';
		if( $editor->edit2() )
		{
			$output = str_replace("<br />","\n",$editor->ftext);
			$editor->success_message = $editor->success_edit;
		}
		elseif( empty( $editor->error_message ) )
			$editor->error_message = $editor->err_system;
	}
	
	//If post editor 3
	if( isset( $_POST['edit-3'] ) )
	{
		$input = htmlspecialchars( $_POST['your-text'] );
		$delete = htmlspecialchars( $_POST['your-delete'] );
		$value = htmlspecialchars( $_POST['your-value'] );
		if( $_POST['your-action'] == 'action1' )
			$action1 = 'checked="checked"';
		if( $_POST['your-action'] == 'action2' )
			$action2 = 'checked="checked"';
		if( $editor->edit3() )
		{
			$output = str_replace("<br />","\n",$editor->ftext);
			$editor->success_message = $editor->success_edit;
		}
		elseif( empty( $editor->error_message ) )
			$editor->error_message = $editor->err_system;
	}
	
	//If post editor 4
	if( isset( $_POST['edit-4'] ) )
	{
		$input = htmlspecialchars( $_POST['your-text'] );
		if( $_POST['your-action'] == 'action1' )
			$action1 = 'checked="checked"';
		if( $_POST['your-action'] == 'action2' )
			$action2 = 'checked="checked"';
		if( $editor->edit4() )
		{
			$output = str_replace("<br />","\n",$editor->ftext);
			$editor->success_message = $editor->success_edit;
		}
		elseif( empty( $editor->error_message ) )
			$editor->error_message = $editor->err_system;
	}
	
	//If post editor 5
	if( isset( $_POST['edit-5'] ) )
	{
		$input = htmlspecialchars( $_POST['your-text'] );
		if( $editor->edit5() )
		{
			$output = str_replace("<br />","\n",$editor->ftext);
			$editor->success_message = $editor->success_edit;
		}
		elseif( empty( $editor->error_message ) )
			$editor->error_message = $editor->err_system;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $editor->project_name; ?></title>
		<meta charset="utf-8">
		<meta name="project" content="arjang, editor, persian, farsi">
		<meta name="weblog" content="jentelman.com">
		<meta name="id" content="javadolmamalek">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="./style.css">
	</head>
	<body>
		<div class="start">
			<?php if( preg_match( '/(?i)msie [1-8]/',$_SERVER['HTTP_USER_AGENT'] ) ) { ?>
				<div class="header header-er">
					<?php echo $editor->ie_header; ?>
				</div>
				<div class="text text-er">
					<?php echo $editor->err_ie_brow; ?>
				</div>
				
			<?php } else { ?>
				<div class="header header-or">
					<?php echo $editor->menu_header_tabs; ?>
				</div>
				<div class="text text-or">
					<ul class="selected-style">
						<li>
							<?php if ( $editor->selected_menu( 'editor1' ) ) { ?>
								<div class="selected-style-l"><?php echo $editor->menu_editor_1; ?></div>
							<?php } else { ?>
								<a href="./?editor=1"><?php echo $editor->menu_editor_1; ?></a>
							<?php } ?>
						</li>
						<li>
							<?php if ( $editor->selected_menu( 'editor2' ) ) { ?>
								<div class="selected-style-l"><?php echo $editor->menu_editor_2; ?></div>
							<?php } else { ?>
								<a href="./?editor=2"><?php echo $editor->menu_editor_2; ?></a>
							<?php } ?>
						</li>
						<li>
							<?php if ( $editor->selected_menu( 'editor3' ) ) { ?>
								<div class="selected-style-l"><?php echo $editor->menu_editor_3; ?></div>
							<?php } else { ?>
								<a href="./?editor=3"><?php echo $editor->menu_editor_3; ?></a>
							<?php } ?>
						</li>
						<li>
							<?php if ( $editor->selected_menu( 'editor4' ) ) { ?>
								<div class="selected-style-l"><?php echo $editor->menu_editor_4; ?></div>
							<?php } else { ?>
								<a href="./?editor=4"><?php echo $editor->menu_editor_4; ?></a>
							<?php } ?>
						</li>
						<li>
							<?php if ( $editor->selected_menu( 'editor5' ) ) { ?>
								<div class="selected-style-l"><?php echo $editor->menu_editor_5; ?></div>
							<?php } else { ?>
								<a href="./?editor=5"><?php echo $editor->menu_editor_5; ?></a>
							<?php } ?>
						</li>
						<li>
							<?php if ( !$editor->selected_menu( 'editor1' ) AND !$editor->selected_menu( 'editor2' ) AND !$editor->selected_menu( 'editor3' ) AND !$editor->selected_menu( 'editor4' ) AND !$editor->selected_menu( 'editor5' ) ) { ?>
								<div class="selected-style-l"><?php echo $editor->menu_about_arjang; ?></div>
							<?php } else { ?>
								<a href="./"><?php echo $editor->menu_about_arjang; ?></a>
							<?php } ?>
						</li>
					</ul>
				</div>
				
				<?php if( $editor->error_message ) { ?>
					<div class="header header-er">
						<?php echo $editor->err_header_tabs; ?>
					</div>
					<div class="text text-er">
						<?php echo $editor->error_message; ?>
					</div>
					
				<?php } if( $editor->success_message ) { ?>
					<div class="header header-su">
						<?php echo $editor->success_header_tabs; ?>
					</div>
					<div class="text text-su">
						<?php echo $editor->success_message; ?>
					</div>
					
				<?php } if ( $editor->selected_menu( 'editor1' ) ) { ?>
					<div class="header header-or">
						<?php echo $editor->menu_editor_1; ?>
					</div>
					<div class="text">
						<?php echo $editor->editor_about_1; ?>
						<form class="form" action="#final" method="post">
							<div id="form-inputs">
								<textarea name="your-text"  class="input input-textarea" placeholder="<?php echo $editor->editor_textarea_1; ?>" required><?php echo $input; ?></textarea>
							</div>
							<div id="form-outputs">
								<textarea name="final-text"  class="input input-textarea" id="final" placeholder="<?php echo $editor->editor_textarea_2; ?>" readonly="readonly" onclick="this.select();"><?php echo $output; ?></textarea>
							</div>				
							<input name="edit-1" type="submit" value="<?php echo $editor->editor_but; ?>" class="but">
						</form>
					</div>
					
				<?php } if ( $editor->selected_menu( 'editor2' ) ) { ?>
					<div class="header header-or">
						<?php echo $editor->menu_editor_2; ?>
					</div>
					<div class="text">
						<?php echo $editor->editor_about_2; ?>
						<form class="form" action="#final" method="post">
							<div id="form-inputs">
								<textarea name="your-text"  class="input input-textarea" placeholder="<?php echo $editor->editor_textarea_1; ?>" required><?php echo $input; ?></textarea>
								<input name="your-value" type="text" value="<?php echo $value; ?>" class="input input-text" placeholder="<?php echo $editor->editor_text_1; ?>" required autocomplete="off">
								<div class="radio-style">
									<input type="radio" name="your-action" id="action1" value="action1" class="input-radio" <?php echo $action1; ?> ><label for="action1"></label><label for="action1"><?php echo $editor->editor_radio_1; ?></label><p>
									<input type="radio" name="your-action" id="action2" value="action2" class="input-radio" <?php echo $action2; ?> ><label for="action2"></label><label for="action2"><?php echo $editor->editor_radio_2; ?></label>
								</div>
							</div>
							<div id="form-outputs">
								<textarea name="final-text"  class="input input-textarea" id="final" placeholder="<?php echo $editor->editor_textarea_2; ?>" readonly="readonly" onclick="this.select();"><?php echo $output; ?></textarea>
							</div>				
							<input name="edit-2" type="submit" value="<?php echo $editor->editor_but; ?>" class="but">
						</form>
					</div>
					
				<?php } if ( $editor->selected_menu( 'editor3' ) ) { ?>
					<div class="header header-or">
						<?php echo $editor->menu_editor_3; ?>
					</div>
					<div class="text">
						<?php echo $editor->editor_about_3; ?>
						<form class="form" action="#final" method="post">
							<div id="form-inputs">
								<textarea name="your-text"  class="input input-textarea" placeholder="<?php echo $editor->editor_textarea_1; ?>" required><?php echo $input; ?></textarea>
								<input name="your-delete" type="text" value="<?php echo $delete; ?>" class="input input-text" placeholder="<?php echo $editor->editor_text_1; ?>" required autocomplete="off">
								<input name="your-value" type="text" value="<?php echo $value; ?>" class="input input-text" placeholder="<?php echo $editor->editor_text_2; ?>" required autocomplete="off">
								<div class="radio-style">
									<input type="radio" name="your-action" id="action1" value="action1" class="input-radio" <?php echo $action1; ?> ><label for="action1"></label><label for="action1"><?php echo $editor->editor_radio_3; ?></label><p>
									<input type="radio" name="your-action" id="action2" value="action2" class="input-radio" <?php echo $action2; ?> ><label for="action2"></label><label for="action2"><?php echo $editor->editor_radio_4; ?></label>
								</div>
							</div>
							<div id="form-outputs">
								<textarea name="final-text"  class="input input-textarea" id="final" placeholder="<?php echo $editor->editor_textarea_2; ?>" readonly="readonly" onclick="this.select();"><?php echo $output; ?></textarea>
							</div>				
							<input name="edit-3" type="submit" value="<?php echo $editor->editor_but; ?>" class="but">
						</form>
					</div>
					
				<?php } if ( $editor->selected_menu( 'editor4' ) ) { ?>
					<div class="header header-or">
						<?php echo $editor->menu_editor_4; ?>
					</div>
					<div class="text">
						<?php echo $editor->editor_about_4; ?>
						<form class="form" action="#final" method="post">
							<div id="form-inputs">
								<textarea name="your-text"  class="input input-textarea" placeholder="<?php echo $editor->editor_textarea_1; ?>" required><?php echo $input; ?></textarea>
								<div class="radio-style">
									<input type="radio" name="your-action" id="action1" value="action1" class="input-radio" <?php echo $action1; ?> ><label for="action1"></label><label for="action1"><?php echo $editor->editor_radio_5; ?></label><p>
									<input type="radio" name="your-action" id="action2" value="action2" class="input-radio" <?php echo $action2; ?> ><label for="action2"></label><label for="action2"><?php echo $editor->editor_radio_6; ?></label>
								</div>
							</div>
							<div id="form-outputs">
								<textarea name="final-text"  class="input input-textarea" id="final" placeholder="<?php echo $editor->editor_textarea_2; ?>" readonly="readonly" onclick="this.select();"><?php echo $output; ?></textarea>
							</div>				
							<input name="edit-4" type="submit" value="<?php echo $editor->editor_but; ?>" class="but">
						</form>
					</div>
					
				<?php } if ( $editor->selected_menu( 'editor5' ) ) { ?>
					<div class="header header-or">
						<?php echo $editor->menu_editor_5; ?>
					</div>
					<div class="text">
						<?php echo $editor->editor_about_5; ?>
						<form class="form" action="#final" method="post">
							<div id="form-inputs">
								<textarea name="your-text"  class="input input-textarea" placeholder="<?php echo $editor->editor_textarea_1; ?>" required><?php echo $input; ?></textarea>
							</div>
							<div id="form-outputs">
								<textarea name="final-text"  class="input input-textarea" id="final" placeholder="<?php echo $editor->editor_textarea_2; ?>" readonly="readonly" onclick="this.select();"><?php echo $output; ?></textarea>
							</div>				
							<input name="edit-5" type="submit" value="<?php echo $editor->editor_but; ?>" class="but">
						</form>
					</div>
					
				<?php } if ( !$editor->selected_menu( 'editor1' ) AND !$editor->selected_menu( 'editor2' ) AND !$editor->selected_menu( 'editor3' ) AND !$editor->selected_menu( 'editor4' ) AND !$editor->selected_menu( 'editor5' ) ) { ?>
					<div class="header header-or">
						<?php echo $editor->menu_about_arjang; ?>
					</div>
					<div class="text">
						<div class="about-logo"></div>
						<?php echo $editor->about_arjang_text; ?>
					</div>
				<?php } ?>
				<div class="h-footer">
					<div class="footer">
						<div class="lablogo"></div>
						<div class="footer-text">
							<ul class="footer-text">
								<li><a href="http://jentelman.com/lab/">Jentelman Lab</a></li>
								<li><a href="http://jentelman.com">Jentelman Blog</a></li>
							</ul>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</body>
</html>