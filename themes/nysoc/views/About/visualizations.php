<?php
	$va_home = caNavLink($this->request, "City Readers", '', '', '', '');

	MetaTagManager::setWindowTitle($va_home." > Visualizations");
?>
<div class="page gallery">
	<div class="wrapper">
		<div class="sidebar">

		</div>
		<div class="content-wrapper">
      		<div class="content-inner">
				<div class="container">		
					<div class="row">
						<div class="col-sm-12">
							<H4><?php print _t("Visualizations"); ?></H4>
						</div>
					</div>
					<div class='row'>	
						<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="galleryItem">
								<div class="galleryItemImg">
<?php
									print caNavLink($this->request, caGetThemeGraphic($this->request, 'chart.jpg'), '', '', 'Circulation', 'Books');
?>				
								</div>
								<div class="galleryItemText">
									<?php print caNavLink($this->request, '<h5>Circulation Data</h5>', '', '', 'Circulation', 'Books');?>
									Compare the popularity of different NYSL titles over time.
									<div class='moreLink'>
<?php
									print caNavLink($this->request, 'Find out more', '', '', 'Circulation', 'Books');
?>
									</div>
								</div>									
								<div style="clear:both;"><!-- empty --></div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="galleryItem">
								<div class="galleryItemImg">
<?php
									print caNavLink($this->request, caGetThemeGraphic($this->request, 'map.jpg'), '', '', 'Map', 'Index');
?>				
								</div>
								<div class="galleryItemText">
									<?php print caNavLink($this->request, '<h5>Publication Locations Mapped</h5>', '', '', 'Map', 'Index');?>
									See where NYSL titles were published over time.
									<div class="moreLink">
<?php
									print caNavLink($this->request, 'Find out more', '', '', 'Map', 'Index');
?>	
									</div>
								</div>															
								<div style="clear:both;"><!-- empty --></div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6">
							<div class="galleryItem">
								<div class="galleryItemImg">
<?php
									print caNavLink($this->request, caGetThemeGraphic($this->request, 'readers.jpg'), '', '', 'Circulation', 'readers');
?>				
								</div>
								<div class="galleryItemText">
									<?php print caNavLink($this->request, '<h5>Compare Reader Activity</h5>', '', '', 'Circulation', 'readers');?>
									See how active readers were over time.
									<div class="moreLink">
<?php
									print caNavLink($this->request, 'Find out more', '', '', 'Circulation', 'readers');
?>	
									</div>
								</div>															
								<div style="clear:both;"><!-- empty --></div>
							</div>
						</div>						
						
					</div><!-- end row -->
				</div><!-- end container -->
			</div><!-- end content inner -->
		</div><!-- end content wrapper -->
	</div><!-- end wrapper -->
</div><!-- end page -->