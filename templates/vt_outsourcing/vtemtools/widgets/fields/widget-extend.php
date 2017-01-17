<?php
///////////////////// EXTENDS CONTENTS /////////////////////////////////////////////////////////////////////////////
	$widgetCustomhtml = '<div id="widget-customhtml" class="widget-content clearfix">
					  <ul class="tabs-nav clearfix">
						<li><a href="#widget-menu7">'.JText::_('TPL_VTEM_TABBASIC_LABEL').'</a></li>
						<li><a href="#widget-menu9">'.JText::_('TPL_VTEM_TABADVANCED_LABEL').'</a></li>
					  </ul>
					  <div id="widget-menu7" class="tab-content clearfix" data-name="content">
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_TITLE_LABEL').'</label>
								<input type="text" value="" name="blocktitle" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('JSHOW').'</label>
								<select name="blockenable" class="widget-box">
									<option value="homepage">Homepage only</option>
									<option value="nohomepage">No homepage</option>
									<option value="all">ALL</option>
								</select>
							</div>
							<hr />
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_CONTENT_LABEL').'</label>
								<textarea name="blockcontent" class="widget-box vtem-editor" cols="50" rows="8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</textarea>
							</div>
						</div>'.
						$basicTabContent.
					'</div>';
	$widgetFeaturedcontent = '<div id="widget-featuredcontent" class="widget-content clearfix">
					  <ul class="tabs-nav clearfix">
						<li><a href="#widget-menu7">'.JText::_('TPL_VTEM_TABBASIC_LABEL').'</a></li>
						<li><a href="#widget-menu9">'.JText::_('TPL_VTEM_TABADVANCED_LABEL').'</a></li>
					  </ul>
					  <div id="widget-menu7" class="tab-content clearfix" data-name="content">
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_TITLE_LABEL').'</label>
								<input type="text" value="" name="blocktitle" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('JSHOW').'</label>
								<select name="blockenable" class="widget-box">
									<option value="homepage">Homepage only</option>
									<option value="nohomepage">No homepage</option>
									<option value="all">ALL</option>
								</select>
							</div>
							<hr />
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_TYPE_LABEL').'</label>
								<select name="blocktype" class="widget-box select-group">
									<option value="icon">'.JText::_('TPL_VTEM_WIDGETFEATURED_ICON_LABEL').'</option>
									<option value="image">'.JText::_('TPL_VTEM_WIDGETFEATURED_IMAGE_LABEL').'</option>
									<option value="none">'.JText::_('JNONE').'</option>
								</select>
							</div>
							<div class="control-group blocktype-icon">
								<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_ICON_LABEL').'</label>
								<select name="blocktypeicon" class="widget-box fontWeASome">'.$listFonts.'</select>
							</div>
							<div class="control-group blocktype-image">
								<label>'.JText::_('TPL_VTEM_WIDGETLOGO_IMAGE_LABEL').'</label>
								<div class="media input-group input-append">
									<input type="text" value="images/sampledata/parks/animals/180px_koala_ag1.jpg" name="blocktypeimage" class="widget-box form-control">
									<a class="input-group-addon add-on modal" href="#" rel="{handler: \'iframe\', size: {x: 800, y: 500}}">'.JText::_('JLIB_FORM_BUTTON_SELECT').'</a>
								</div>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_HEADLINE_LABEL').'</label>
								<input type="text" value="Your headline" name="blockheadline" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_DESC_LABEL').'</label>
								<textarea name="blockcontent" class="widget-box vtem-editor" cols="50" rows="8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</textarea>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_LINK_LABEL').'</label>
								<input type="text" value="#" name="blocklink" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_LINKTARGET_LABEL').'</label>
								<select name="blocklinktarget" class="widget-box">
									<option value="_self">Self</option>
									<option value="_blank">Blank</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_LINKTEXT_LABEL').'</label>
								<input type="text" value="Readmore" name="blocklinktext" class="widget-box">
							</div>
						</div>'.
						$basicTabContent.
					'</div>';
	$widgetSlideshow = '<div id="widget-slideshow" class="widget-content clearfix">
					  <ul class="tabs-nav clearfix">
						<li><a href="#widget-menu7">'.JText::_('TPL_VTEM_TABBASIC_LABEL').'</a></li>
						<li><a href="#widget-menu8">'.JText::_('TPL_VTEM_TABOPTIONS_LABEL').'</a></li>
						<li><a href="#widget-menu9">'.JText::_('TPL_VTEM_TABADVANCED_LABEL').'</a></li>
					  </ul>
					  <div id="widget-menu7" class="tab-content clearfix" data-name="content">
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_TITLE_LABEL').'</label>
								<input type="text" value="" name="blocktitle" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('JSHOW').'</label>
								<select name="blockenable" class="widget-box">
									<option value="homepage">Homepage only</option>
									<option value="nohomepage">No homepage</option>
									<option value="all">ALL</option>
								</select>
							</div>
							<hr />
							<div class="repeatable-items widget-box"> <!-- START LIST -->
								<span class="clone-repeatable btn btn-primary"><i class="fa fa-plus"></i> '.JText::_('JTOOLBAR_NEW').'</span>
								<div id="tabs-repeatable" class="accordion auto-title panel-group">
									<div class="accordion-group panel panel-default">
										<h3 class="accordion-heading panel-heading">
											<i class="fa fa-ellipsis-v action-move"></i>
											<a class="accordion-toggle collapsed">Accordion Title</a>
											<i class="fa fa-times action-remove"></i>
										</h3>
										<div class="accordion-body panel-collapse">
											<div class="accordion-inner panel-body">
												<input type="hidden" value="Item" name="addontitle" class="widget-input addon-title">
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETLOGO_IMAGE_LABEL').'</label>
													<div class="media input-group input-append">
														<input type="text" value="images/sampledata/parks/animals/180px_koala_ag1.jpg" name="addonimage" class="widget-input form-control">
														<a class="input-group-addon add-on modal" href="#" rel="{handler: \'iframe\', size: {x: 800, y: 500}}">'.JText::_('JLIB_FORM_BUTTON_SELECT').'</a>
													</div>
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETSLIDESHOW_CAPTION_LABEL').'</label>
													<textarea name="addoncontent" class="widget-input" cols="50" rows="3"></textarea>
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETSLIDESHOW_LINK_LABEL').'</label>
													<input type="text" name="addonlink" class="widget-input" />
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_LINKTARGET_LABEL').'</label>
													<select name="addonlinktarget" class="widget-input">
														<option value="_self">Self</option>
														<option value="_blank">Blank</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- END LIST -->
						</div>
						<div id="widget-menu8" class="tab-content clearfix" data-name="options">
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETSLIDESHOW_WIDTH_LABEL').'</label>
								<input type="text" value="100%" name="blockwidth" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETSLIDESHOW_HEIGHT_LABEL').'</label>
								<input type="text" value="40%" name="blockheight" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETSLIDESHOW_AUTOPLAY_LABEL').'</label>
								<select name="blockautoplay" class="widget-box">
									<option value="1">'.JText::_('JYES').'</option>
									<option value="0">'.JText::_('JNO').'</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETSLIDESHOW_DELAY_LABEL').'</label>
								<input type="text" value="6000" name="blockdelay" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETSLIDESHOW_EFFECT_LABEL').'</label>
								<select name="blockeffect" class="widget-box">
									<option value="random">random</option>
									<option value="cube">cube</option>
									<option value="cubeRandom">cubeRandom</option>
									<option value="block">block</option>
									<option value="cubeStop">cubeStop</option>
									<option value="cubeHide">cubeHide</option>
									<option value="cubeSize">cubeSize</option>
									<option value="horizontal">horizontal</option>
									<option value="showBars">showBars</option>
									<option value="showBarsRandom">showBarsRandom</option>
									<option value="tube">tube</option>
									<option value="fade">fade</option>
									<option value="fadeFour">fadeFour</option>
									<option value="paralell">paralell</option>
									<option value="blind">blind</option>
									<option value="blindHeight">blindHeight</option>
									<option value="blindWidth">blindWidth</option>
									<option value="directionTop">directionTop</option>
									<option value="directionBottom">directionBottom</option>
									<option value="directionRight">directionRight</option>
									<option value="directionLeft">directionLeft</option>
									<option value="cubeStopRandom">cubeStopRandom</option>
									<option value="cubeSpread">cubeSpread</option>
									<option value="cubeJelly">cubeJelly</option>
									<option value="glassCube">glassCube</option>
									<option value="glassBlock">glassBlock</option>
									<option value="randomSmart">randomSmart</option>
									<option value="glassBlock">glassBlock</option>
									<option value="glassCube">glassCube</option>
									<option value="circlesRotate">circlesRotate</option>
									<option value="circlesInside">circlesInside</option>
									<option value="circles">circles</option>
									<option value="downBars">downBars</option>
									<option value="upBars">upBars</option>
									<option value="cubeShow">cubeShow</option>
									<option value="swapBarsBack">swapBarsBack</option>
									<option value="swapBars">swapBars</option>
									<option value="hideBars">hideBars</option>
									<option value="cut">cut</option>
									<option value="swapBlocks">swapBlocks</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETSLIDESHOW_NAVSTYLE_LABEL').'</label>
								<select name="blocknavstyle" class="widget-box">
									<option value="dots">dots</option>
									<option value="numbers">numbers</option>
									<option value="thumbs">thumbs</option>
									<option value="dots-preview">dots-preview</option>
									<option value="none">none</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETSLIDESHOW_NAVALIGN_LABEL').'</label>
								<select name="blocknavpos" class="widget-box">
									<option value="center">center</option>
									<option value="left">left</option>
									<option value="right">right</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETSLIDESHOW_PAUSE_LABEL').'</label>
								<select name="blockpause" class="widget-box">
									<option value="1">'.JText::_('JYES').'</option>
									<option value="0">'.JText::_('JNO').'</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETSLIDESHOW_NEXTPREV_LABEL').'</label>
								<select name="blocknextprev" class="widget-box">
									<option value="1">'.JText::_('JYES').'</option>
									<option value="0">'.JText::_('JNO').'</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETSLIDESHOW_PROCESS_LABEL').'</label>
								<select name="blockprogressbar" class="widget-box">
									<option value="0">'.JText::_('JNO').'</option>
									<option value="1">'.JText::_('JYES').'</option>
								</select>
							</div>
						</div>'.
						$basicTabContent.
					'</div>';
	
	$widgetCarousel = '<div id="widget-carousel" class="widget-content clearfix">
					  <ul class="tabs-nav clearfix">
						<li><a href="#widget-menu7">'.JText::_('TPL_VTEM_TABBASIC_LABEL').'</a></li>
						<li><a href="#widget-menu8">'.JText::_('TPL_VTEM_TABOPTIONS_LABEL').'</a></li>
						<li><a href="#widget-menu9">'.JText::_('TPL_VTEM_TABADVANCED_LABEL').'</a></li>
					  </ul>
					  <div id="widget-menu7" class="tab-content clearfix" data-name="content">
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_TITLE_LABEL').'</label>
								<input type="text" value="" name="blocktitle" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('JSHOW').'</label>
								<select name="blockenable" class="widget-box">
									<option value="homepage">Homepage only</option>
									<option value="nohomepage">No homepage</option>
									<option value="all">ALL</option>
								</select>
							</div>
							<hr />
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_DATASOURCE_LABEL').'</label>
								<select name="blockdata" class="widget-box select-group">
									<option value="joomla">Joomla content</option>
									<option value="k2">K2 component</option>
									<option value="custom">Custom</option>
								</select>
							</div>
							<hr />
							
							<!-- JOOMLA DATA -->
							<div class="blockdata-joomla">
								<div class="control-group">
									<label>'.JText::_('JCATEGORY').'</label>
									'.JHTML::_('select.genericlist', JHtml::_('category.options', 'com_content'), 'blockcatid', 'class="widget-box" multiple="true"', 'value', 'text').'
								</div>
								<div class="control-group">
									<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_JIMAGE_LABEL').'</label>
									<select name="blockimage" class="widget-box">
										<option value="intro">Intro image</option>
										<option value="full">Full image</option>
										<option value="first">Use first article image</option>
										<option value="none">None</option>
									</select>
								</div>
								<div class="control-group">
									<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_JTITLE_LABEL').'</label>
									<select name="blockitemtitle" class="widget-box">
										<option value="1">'.JText::_('JYES').'</option>
										<option value="0">'.JText::_('JNO').'</option>
									</select>
								</div>
								<div class="control-group">
									<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_JINTRO_LABEL').'</label>
									<select name="blockitemintro" class="widget-box">
										<option value="1">'.JText::_('JYES').'</option>
										<option value="0">'.JText::_('JNO').'</option>
									</select>
								</div>
								<div class="control-group">
									<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_JINTROLIMIT_LABEL').'</label>
									<input type="text" value="50" name="blockintrolimit" class="widget-box">
								</div>
								<div class="control-group">
									<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_JREADMORE_LABEL').'</label>
									<select name="blockreadmore" class="widget-box">
										<option value="1">'.JText::_('JYES').'</option>
										<option value="0">'.JText::_('JNO').'</option>
									</select>
								</div>
								<div class="control-group">
									<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_JCOUNT_LABEL').'</label>
									<input type="text" value="12" name="blockcount" class="widget-box">
								</div>
								<div class="control-group">
									<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_JORDER_LABEL').'</label>
									<select name="blockordering" class="widget-box">
										<option value="a.publish_up">Published Date</option>
										<option value="a.created">Created Date</option>
										<option value="a.ordering">Ordering</option>
										<option value="a.hits">Hits</option>
										<option value="rand()">Random</option>
									</select>
								</div>
								<div class="control-group">
									<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_JDIRECTION_LABEL').'</label>
									<select name="blockdirection" class="widget-box">
										<option value="0">'.JText::_('JGLOBAL_ORDER_ASCENDING').'</option>
										<option value="1">'.JText::_('JGLOBAL_ORDER_DESCENDING').'</option>
									</select>
								</div>
							</div>
							
							<!-- K2 DATA -->
							<div class="blockdata-k2">
								<div class="control-group">
									<label>'.JText::_('K2_SELECT_ONE_OR_MORE_CATEGORIES').'</label>
									<input type="text" value="" name="k2catid" placeholder="1,2,3,4" class="widget-box">
								</div>
								<div class="control-group">
									<label>'.JText::_('K2_FETCH_ITEMS_FROM_CHILDREN_CATEGORIES').'</label>
									<select name="k2getChildren" class="widget-box">
										<option value="0">'.JText::_('JNO').'</option>
										<option value="1">'.JText::_('JYES').'</option>
									</select>
								</div>
								<div class="control-group">
									<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_JCOUNT_LABEL').'</label>
									<input type="text" value="12" name="k2itemCount" class="widget-box">
								</div>
								<div class="control-group">
									<label>'.JText::_('K2_ITEM_ORDERING').'</label>
									<select name="k2itemsOrdering" class="widget-box">
										<option value="">'.JText::_('K2_DEFAULT').'</option>
										<option value="date">'.JText::_('K2_OLDEST_FIRST').'</option>
										<option value="rdate">'.JText::_('K2_MOST_RECENT_FIRST').'</option>
										<option value="publishUp">'.JText::_('K2_RECENTLY_PUBLISHED').'</option>
										<option value="alpha">'.JText::_('K2_TITLE_ALPHABETICAL').'</option>
										<option value="ralpha">'.JText::_('K2_TITLE_REVERSEALPHABETICAL').'</option>
										<option value="order">'.JText::_('K2_ORDERING').'</option>
										<option value="rorder">'.JText::_('K2_ORDERING_REVERSE').'</option>
										<option value="hits">'.JText::_('K2_MOST_POPULAR').'</option>
										<option value="best">'.JText::_('K2_HIGHEST_RATED').'</option>
										<option value="comments">'.JText::_('K2_MOST_COMMENTED').'</option>
										<option value="modified">'.JText::_('K2_LATEST_MODIFIED').'</option>
										<option value="rand">'.JText::_('K2_RANDOM_ORDERING').'</option>
									</select>
								</div>
								<div class="control-group">
									<label>'.JText::_('K2_FEATURED_ITEMS').'</label>
									<select name="k2FeaturedItems" class="widget-box">
										<option value="1">'.JText::_('K2_SHOW').'</option>
										<option value="0">'.JText::_('K2_HIDE').'</option>
										<option value="2">'.JText::_('K2_SHOW_ONLY_FEATURED_ITEMS').'</option>
									</select>
								</div>
								<div class="control-group">
									<label>'.JText::_('K2_TITLE').'</label>
									<select name="k2itemTitle" class="widget-box">
										<option value="1">'.JText::_('JYES').'</option>
										<option value="0">'.JText::_('JNO').'</option>
									</select>
								</div>
								<div class="control-group">
									<label>'.JText::_('K2_INTROTEXT').'</label>
									<select name="k2itemIntroText" class="widget-box">
										<option value="0">'.JText::_('JNO').'</option>
										<option value="1">'.JText::_('JYES').'</option>
									</select>
								</div>
								<div class="control-group">
									<label>'.JText::_('K2_INTROTEXT_WORD_LIMIT').'</label>
									<input type="text" value="20" name="k2itemIntroLimit" class="widget-box">
								</div>
								<div class="control-group">
									<label>'.JText::_('K2_IMAGE').'</label>
									<select name="k2itemImage" class="widget-box">
										<option value="1">'.JText::_('JYES').'</option>
										<option value="0">'.JText::_('JNO').'</option>
									</select>
								</div>
								<div class="control-group">
									<label>'.JText::_('K2_IMAGE_SIZE').'</label>
									<select name="k2itemImgSize" class="widget-box">
										<option value="XSmall">'.JText::_('K2_XSMALL').'</option>
										<option value="Small">'.JText::_('K2_SMALL').'</option>
										<option value="Medium">'.JText::_('K2_MEDIUM').'</option>
										<option value="Large">'.JText::_('K2_LARGE').'</option>
										<option value="XLarge">'.JText::_('K2_XLARGE').'</option>
									</select>
								</div>
								<div class="control-group">
									<label>'.JText::_('K2_TAGS').'</label>
									<select name="k2itemTags" class="widget-box">
										<option value="0">'.JText::_('JNO').'</option>
										<option value="1">'.JText::_('JYES').'</option>
									</select>
								</div>
								<div class="control-group">
									<label>'.JText::_('K2_CATEGORY').'</label>
									<select name="k2itemCategory" class="widget-box">
										<option value="0">'.JText::_('JNO').'</option>
										<option value="1">'.JText::_('JYES').'</option>
									</select>
								</div>
								<div class="control-group">
									<label>'.JText::_('Created date and time').'</label>
									<select name="k2itemDateCreated" class="widget-box">
										<option value="0">'.JText::_('JNO').'</option>
										<option value="1">'.JText::_('JYES').'</option>
									</select>
								</div>
								<div class="control-group">
									<label>'.JText::_('K2_HITS').'</label>
									<select name="k2itemHits" class="widget-box">
										<option value="0">'.JText::_('JNO').'</option>
										<option value="1">'.JText::_('JYES').'</option>
									</select>
								</div>
								<div class="control-group">
									<label>'.JText::_('K2_READ_MORE_LINK').'</label>
									<select name="k2itemReadMore" class="widget-box">
										<option value="0">'.JText::_('JNO').'</option>
										<option value="1">'.JText::_('JYES').'</option>
									</select>
								</div>
								<div class="control-group">
									<label>'.JText::_('K2_EXTRA_FIELDS').'</label>
									<select name="k2itemExtraFields" class="widget-box">
										<option value="0">'.JText::_('JNO').'</option>
										<option value="1">'.JText::_('JYES').'</option>
									</select>
								</div>
							</div>
							
							<!-- CUSTOM DATA-->
							<div class="repeatable-items widget-box blockdata-custom"> <!-- START LIST -->
								<span class="clone-repeatable btn btn-primary"><i class="fa fa-plus"></i> '.JText::_('JTOOLBAR_NEW').'</span>
								<div id="tabs-repeatable" class="accordion panel-group">
									<div class="accordion-group panel panel-default">
										<h3 class="accordion-heading panel-heading">
											<i class="fa fa-ellipsis-v action-move"></i>
											<a class="accordion-toggle collapsed">Accordion Title</a>
											<i class="fa fa-times action-remove"></i>
										</h3>
										<div class="accordion-body panel-collapse">
											<div class="accordion-inner panel-body">
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETITEM_TITLE').'</label>
													<input type="text" value="Your title" name="addontitle" class="widget-input addon-title">
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETLOGO_IMAGE_LABEL').'</label>
													<div class="media input-group input-append">
														<input type="text" value="images/sampledata/parks/animals/180px_koala_ag1.jpg" name="addonimage" class="widget-input form-control">
														<a class="input-group-addon add-on modal" href="#" rel="{handler: \'iframe\', size: {x: 800, y: 500}}">'.JText::_('JLIB_FORM_BUTTON_SELECT').'</a>
													</div>
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETITEM_CONTENT').'</label>
													<textarea name="addoncontent" class="widget-input" cols="50" rows="8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</textarea>
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_CAROUSEL_READMORE_LABEL').'</label>
													<input type="text" value="Read more" name="addonreadmore" class="widget-input">
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETITEM_LINK').'</label>
													<input type="text" value="#" name="addonlink" class="widget-input">
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_LINKTARGET_LABEL').'</label>
													<select name="addontarget" class="widget-input">
														<option value="_self">Self</option>
														<option value="_blank">Blank</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- END LIST -->
						</div>
						<div id="widget-menu8" class="tab-content clearfix" data-name="options">
							<!--<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_AMOUNT_LABEL').'</label>
								<input type="text" value="12" name="blockamount" class="widget-box">
							</div>-->
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_LARGE_LABEL').'</label>
								<input type="text" value="4" name="blocklarge" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_SMALL_LABEL').'</label>
								<input type="text" value="3" name="blocksmall" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_TABLET_LABEL').'</label>
								<input type="text" value="2" name="blocktablet" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_PHONE_LABEL').'</label>
								<input type="text" value="1" name="blockphone" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('ROWS_OF_ITEM').'</label>
								<select name="blockitemrow" class="widget-box">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_AUTOPLAY_LABEL').'</label>
								<select name="blockautoplay" class="widget-box">
									<option value="1">'.JText::_('JYES').'</option>
									<option value="0">'.JText::_('JNO').'</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_AUTOPLAYDURATION_LABEL').'</label>
								<input type="text" value="6000" name="blockduration" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETSLIDESHOW_PAUSE_LABEL').'</label>
								<select name="blockpause" class="widget-box">
									<option value="1">'.JText::_('JYES').'</option>
									<option value="0">'.JText::_('JNO').'</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETSLIDESHOW_NEXTPREV_LABEL').'</label>
								<select name="blocknextprev" class="widget-box">
									<option value="1">'.JText::_('JYES').'</option>
									<option value="0">'.JText::_('JNO').'</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_PAGINATION_LABEL').'</label>
								<select name="blockpagination" class="widget-box">
									<option value="0">'.JText::_('JNO').'</option>
									<option value="1">'.JText::_('JYES').'</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_ITEMANIMATION_LABEL').'</label>
								<select name="itemanimation" class="widget-box">
								'.$cssAnimation.'
								</select>
							</div>
						</div>'.
						$basicTabContent.
					'</div>';
					
	$widgetAccordion = '<div id="widget-accordion" class="widget-content clearfix">
					  <ul class="tabs-nav clearfix">
						<li><a href="#widget-menu7">'.JText::_('TPL_VTEM_TABBASIC_LABEL').'</a></li>
						<li><a href="#widget-menu9">'.JText::_('TPL_VTEM_TABADVANCED_LABEL').'</a></li>
					  </ul>
					  <div id="widget-menu7" class="tab-content clearfix" data-name="content">
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_TITLE_LABEL').'</label>
								<input type="text" value="" name="blocktitle" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('JSHOW').'</label>
								<select name="blockenable" class="widget-box">
									<option value="homepage">Homepage only</option>
									<option value="nohomepage">No homepage</option>
									<option value="all">ALL</option>
								</select>
							</div>
							<hr />
							<div class="repeatable-items widget-box">
								<span class="clone-repeatable btn btn-primary"><i class="fa fa-plus"></i> '.JText::_('JTOOLBAR_NEW').'</span>
								<div id="accordion-repeatable" class="accordion panel-group">
									<div class="accordion-group panel panel-default">
										<h3 class="accordion-heading panel-heading">
											<i class="fa fa-ellipsis-v action-move"></i>
											<a class="accordion-toggle collapsed">Accordion Title</a>
											<i class="fa fa-times action-remove"></i>
										</h3>
										<div class="accordion-body panel-collapse">
											<div class="accordion-inner panel-body">
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETITEM_TITLE').'</label>
													<input type="text" value="Your title" name="addontitle" class="widget-input addon-title">
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETITEM_CONTENT').'</label>
													<textarea name="addoncontent" class="widget-input" cols="50" rows="8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>'.
						$basicTabContent.
					'</div>';
					
	$widgetTabs = '<div id="widget-tabs" class="widget-content clearfix">
					  <ul class="tabs-nav clearfix">
						<li><a href="#widget-menu7">'.JText::_('TPL_VTEM_TABBASIC_LABEL').'</a></li>
						<li><a href="#widget-menu9">'.JText::_('TPL_VTEM_TABADVANCED_LABEL').'</a></li>
					  </ul>
					  <div id="widget-menu7" class="tab-content clearfix" data-name="content">
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_TITLE_LABEL').'</label>
								<input type="text" value="" name="blocktitle" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('JSHOW').'</label>
								<select name="blockenable" class="widget-box">
									<option value="homepage">Homepage only</option>
									<option value="nohomepage">No homepage</option>
									<option value="all">ALL</option>
								</select>
							</div>
							<hr />
							<div class="repeatable-items widget-box">
								<span class="clone-repeatable btn btn-primary"><i class="fa fa-plus"></i> '.JText::_('JTOOLBAR_NEW').'</span>
								<div id="tabs-repeatable" class="accordion panel-group">
									<div class="accordion-group panel panel-default">
										<h3 class="accordion-heading panel-heading">
											<i class="fa fa-ellipsis-v action-move"></i>
											<a class="accordion-toggle collapsed">Accordion Title</a>
											<i class="fa fa-times action-remove"></i>
										</h3>
										<div class="accordion-body panel-collapse">
											<div class="accordion-inner panel-body">
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETITEM_TITLE').'</label>
													<input type="text" value="Your title" name="addontitle" class="widget-input addon-title">
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETITEM_CONTENT').'</label>
													<textarea name="addoncontent" class="widget-input" cols="50" rows="8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>'.
						$basicTabContent.
					'</div>';
					
	$widgetTestimonial = '<div id="widget-testimonial" class="widget-content clearfix">
					  <ul class="tabs-nav clearfix">
						<li><a href="#widget-menu7">'.JText::_('TPL_VTEM_TABBASIC_LABEL').'</a></li>
						<li><a href="#widget-menu8">'.JText::_('TPL_VTEM_TABOPTIONS_LABEL').'</a></li>
						<li><a href="#widget-menu9">'.JText::_('TPL_VTEM_TABADVANCED_LABEL').'</a></li>
					  </ul>
					  <div id="widget-menu7" class="tab-content clearfix" data-name="content">
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_TITLE_LABEL').'</label>
								<input type="text" value="" name="blocktitle" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('JSHOW').'</label>
								<select name="blockenable" class="widget-box">
									<option value="homepage">Homepage only</option>
									<option value="nohomepage">No homepage</option>
									<option value="all">ALL</option>
								</select>
							</div>
							<hr />
							<div class="repeatable-items widget-box"> <!-- START LIST -->
								<span class="clone-repeatable btn btn-primary"><i class="fa fa-plus"></i> '.JText::_('JTOOLBAR_NEW').'</span>
								<div id="tabs-repeatable" class="accordion panel-group">
									<div class="accordion-group panel panel-default">
										<h3 class="accordion-heading panel-heading">
											<i class="fa fa-ellipsis-v action-move"></i>
											<a class="accordion-toggle collapsed">Accordion Title</a>
											<i class="fa fa-times action-remove"></i>
										</h3>
										<div class="accordion-body panel-collapse">
											<div class="accordion-inner panel-body">
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_TESTIMONIAL_NAME_LABEL').'</label>
													<input type="text" value="Your title" name="addontitle" class="widget-input addon-title">
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_TESTIMONIAL_COMPANY_LABEL').'</label>
													<input type="text" value="Your company" name="addoncompany" class="widget-input">
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETLOGO_IMAGE_LABEL').'</label>
													<div class="media input-group input-append">
														<input type="text" value="images/sampledata/parks/animals/180px_koala_ag1.jpg" name="addonimage" class="widget-input form-control">
														<a class="input-group-addon add-on modal" href="#" rel="{handler: \'iframe\', size: {x: 800, y: 500}}">'.JText::_('JLIB_FORM_BUTTON_SELECT').'</a>
													</div>
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_TESTIMONIAL_RIVIEW_LABEL').'</label>
													<textarea name="addoncontent" class="widget-input" cols="50" rows="8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- END LIST -->
						</div>
						<div id="widget-menu8" class="tab-content clearfix" data-name="options">
							<!--<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_AMOUNT_LABEL').'</label>
								<input type="text" value="12" name="blockamount" class="widget-box">
							</div>-->
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_LARGE_LABEL').'</label>
								<input type="text" value="4" name="blocklarge" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_SMALL_LABEL').'</label>
								<input type="text" value="3" name="blocksmall" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_TABLET_LABEL').'</label>
								<input type="text" value="2" name="blocktablet" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_PHONE_LABEL').'</label>
								<input type="text" value="1" name="blockphone" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_AUTOPLAY_LABEL').'</label>
								<select name="blockautoplay" class="widget-box">
									<option value="1">'.JText::_('JYES').'</option>
									<option value="0">'.JText::_('JNO').'</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_AUTOPLAYDURATION_LABEL').'</label>
								<input type="text" value="6000" name="blockduration" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETSLIDESHOW_PAUSE_LABEL').'</label>
								<select name="blockpause" class="widget-box">
									<option value="1">'.JText::_('JYES').'</option>
									<option value="0">'.JText::_('JNO').'</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETSLIDESHOW_NEXTPREV_LABEL').'</label>
								<select name="blocknextprev" class="widget-box">
									<option value="1">'.JText::_('JYES').'</option>
									<option value="0">'.JText::_('JNO').'</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_PAGINATION_LABEL').'</label>
								<select name="blockpagination" class="widget-box">
									<option value="0">'.JText::_('JNO').'</option>
									<option value="1">'.JText::_('JYES').'</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_ITEMANIMATION_LABEL').'</label>
								<select name="itemanimation" class="widget-box">
								'.$cssAnimation.'
								</select>
							</div>
						</div>'.
						$basicTabContent.
					'</div>';
					
	$widgetSocial = '<div id="widget-social" class="widget-content clearfix">
					  <ul class="tabs-nav clearfix">
						<li><a href="#widget-menu7">'.JText::_('TPL_VTEM_TABBASIC_LABEL').'</a></li>
						<li><a href="#widget-menu9">'.JText::_('TPL_VTEM_TABADVANCED_LABEL').'</a></li>
					  </ul>
					  <div id="widget-menu7" class="tab-content clearfix" data-name="content">
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_TITLE_LABEL').'</label>
								<input type="text" value="" name="blocktitle" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('JSHOW').'</label>
								<select name="blockenable" class="widget-box">
									<option value="homepage">Homepage only</option>
									<option value="nohomepage">No homepage</option>
									<option value="all">ALL</option>
								</select>
							</div>
							<hr />
							<div class="repeatable-items widget-box">
								<span class="clone-repeatable btn btn-primary"><i class="fa fa-plus"></i> '.JText::_('JTOOLBAR_NEW').'</span>
								<div id="social-repeatable" class="accordion panel-group">
									<div class="accordion-group panel panel-default">
										<h3 class="accordion-heading panel-heading">
											<i class="fa fa-ellipsis-v action-move"></i>
											<a class="accordion-toggle collapsed">Accordion Title</a>
											<i class="fa fa-times action-remove"></i>
										</h3>
										<div class="accordion-body panel-collapse">
											<div class="accordion-inner panel-body">
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETITEM_ICON').'</label>
													<select name="addonicon" class="widget-input fontWeASome">'.$listFonts.'</select>
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETITEM_TITLE').'</label>
													<input type="text" value="Facebook" name="addontitle" class="widget-input addon-title">
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETITEM_LINK').'</label>
													<input type="text" value="#" name="addonlink" class="widget-input">
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_LINKTARGET_LABEL').'</label>
													<select name="addonlinktarget" class="widget-input">
														<option value="_self">Self</option>
														<option value="_blank">Blank</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>'.
						$basicTabContent.
					'</div>';
	
	$widgetImage = '<div id="widget-image" class="widget-content clearfix">
					  <ul class="tabs-nav clearfix">
						<li><a href="#widget-menu7">'.JText::_('TPL_VTEM_TABBASIC_LABEL').'</a></li>
						<li><a href="#widget-menu9">'.JText::_('TPL_VTEM_TABADVANCED_LABEL').'</a></li>
					  </ul>
					  <div id="widget-menu7" class="tab-content clearfix" data-name="content">
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_TITLE_LABEL').'</label>
								<input type="text" value="" name="blocktitle" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('JSHOW').'</label>
								<select name="blockenable" class="widget-box">
									<option value="homepage">Homepage only</option>
									<option value="nohomepage">No homepage</option>
									<option value="all">ALL</option>
								</select>
							</div>
							<hr />
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETLOGO_IMAGE_LABEL').'</label>
								<div class="media input-group input-append">
									<input type="text" value="images/sampledata/parks/animals/180px_koala_ag1.jpg" name="blocktypeimage" class="widget-box form-control">
									<a class="input-group-addon add-on modal" href="#" rel="{handler: \'iframe\', size: {x: 800, y: 500}}">'.JText::_('JLIB_FORM_BUTTON_SELECT').'</a>
								</div>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_DESC_LABEL').'</label>
								<textarea name="blockcontent" class="widget-box" cols="50" rows="4"></textarea>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_LINK_LABEL').'</label>
								<input type="text" value="#" name="blocklink" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_LINKTARGET_LABEL').'</label>
								<select name="blocklinktarget" class="widget-box">
									<option value="_self">Self</option>
									<option value="_blank">Blank</option>
								</select>
							</div>
						</div>'.
						$basicTabContent.
					'</div>';
					
	$widgetVideo = '<div id="widget-video" class="widget-content clearfix">
					  <ul class="tabs-nav clearfix">
						<li><a href="#widget-menu7">'.JText::_('TPL_VTEM_TABBASIC_LABEL').'</a></li>
						<li><a href="#widget-menu9">'.JText::_('TPL_VTEM_TABADVANCED_LABEL').'</a></li>
					  </ul>
					  <div id="widget-menu7" class="tab-content clearfix" data-name="content">
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_TITLE_LABEL').'</label>
								<input type="text" value="" name="blocktitle" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('JSHOW').'</label>
								<select name="blockenable" class="widget-box">
									<option value="homepage">Homepage only</option>
									<option value="nohomepage">No homepage</option>
									<option value="all">ALL</option>
								</select>
							</div>
							<hr />
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETVIDEO_LINK_LABEL').'</label>
								<input type="text" value="https://www.youtube.com/watch?v=EUm-vAOmV1o" name="blocklink" class="widget-box">
							</div>
						</div>'.
						$basicTabContent.
					'</div>';
	
	$widgetGmap = '<div id="widget-gmap" class="widget-content clearfix">
					  <ul class="tabs-nav clearfix">
						<li><a href="#widget-menu7">'.JText::_('TPL_VTEM_TABBASIC_LABEL').'</a></li>
						<li><a href="#widget-menu8">'.JText::_('TPL_VTEM_TABOPTIONS_LABEL').'</a></li>
						<li><a href="#widget-menu9">'.JText::_('TPL_VTEM_TABADVANCED_LABEL').'</a></li>
					  </ul>
					  <div id="widget-menu7" class="tab-content clearfix" data-name="content">
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_TITLE_LABEL').'</label>
								<input type="text" value="" name="blocktitle" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('JSHOW').'</label>
								<select name="blockenable" class="widget-box">
									<option value="homepage">Homepage only</option>
									<option value="nohomepage">No homepage</option>
									<option value="all">ALL</option>
								</select>
							</div>
							<hr />
						</div>
						<div id="widget-menu8" class="tab-content clearfix" data-name="options">
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETGMAP_WIDTH_LABEL').'</label>
								<input type="text" value="100%" name="blockwidth" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETGMAP_HEIGHT_LABEL').'</label>
								<input type="text" value="400px" name="blockheight" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETGMAP_LOCATION_LABEL').'</label>
								<select name="blocklacation" class="widget-box select-group">
									<option value="address">'.JText::_('TPL_VTEM_WIDGETGMAP_ADDRESS_LABEL').'</option>
									<option value="latiLong">'.JText::_('TPL_VTEM_WIDGETGMAP_LATIRUDE_LABEL').' / '.JText::_('TPL_VTEM_WIDGETGMAP_LONGITUDE_LABEL').'</option>
								</select>
							</div>
							<div class="control-group blocklacation-address">
								<label>'.JText::_('TPL_VTEM_WIDGETGMAP_ADDRESS_LABEL').'</label>
								<input type="text" value="Tettnang, Germany" name="blockaddress" class="widget-box">
							</div>
							<div class="control-group blocklacation-latiLong">
								<label>'.JText::_('TPL_VTEM_WIDGETGMAP_LATIRUDE_LABEL').'</label>
								<input type="text" value="47.660937" name="blocklatitude" class="widget-box">
							</div>
							<div class="control-group blocklacation-latiLong">
								<label>'.JText::_('TPL_VTEM_WIDGETGMAP_LONGITUDE_LABEL').'</label>
								<input type="text" value="9.569803" name="blocklongitude" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETGMAP_MAPTYPE_LABEL').'</label>
								<select name="blockmaptype" class="widget-box">
									<option value="ROADMAP">ROADMAP</option>
									<option value="HYBRID">HYBRID</option>
									<option value="TERRAIN">TERRAIN</option>
									<option value="SATELLITE">SATELLITE</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETGMAP_ZOOM_LABEL').'</label>
								<select name="blockzoom" class="widget-box">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETGMAP_MARKER_LABEL').'</label>
								<textarea name="blockmarkers" class="widget-box" cols="50" rows="4">{latitude:47.660937, longitude:9.569803, html:"Tettnang, Germany"}, {address: "Braitenrain, Germany", html:"The place I live"}</textarea>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETGMAP_CONTROL_LABEL').'</label>
								<select name="blockcontrol" class="widget-box">
									<option value="0">'.JText::_('JNO').'</option>
									<option value="1">'.JText::_('JYES').'</option>
								</select>
							</div>
						</div>'.
						$basicTabContent.
					'</div>';
	
	$widgetGallery = '<div id="widget-gallery" class="widget-content clearfix">
					  <ul class="tabs-nav clearfix">
						<li><a href="#widget-menu7">'.JText::_('TPL_VTEM_TABBASIC_LABEL').'</a></li>
						<li><a href="#widget-menu8">'.JText::_('TPL_VTEM_TABOPTIONS_LABEL').'</a></li>
						<li><a href="#widget-menu9">'.JText::_('TPL_VTEM_TABADVANCED_LABEL').'</a></li>
					  </ul>
					  <div id="widget-menu7" class="tab-content clearfix" data-name="content">
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_TITLE_LABEL').'</label>
								<input type="text" value="" name="blocktitle" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('JSHOW').'</label>
								<select name="blockenable" class="widget-box">
									<option value="homepage">Homepage only</option>
									<option value="nohomepage">No homepage</option>
									<option value="all">ALL</option>
								</select>
							</div>
							<hr />
							<div class="repeatable-items widget-box"> <!-- START LIST -->
								<span class="clone-repeatable btn btn-primary"><i class="fa fa-plus"></i> '.JText::_('JTOOLBAR_NEW').'</span>
								<div id="tabs-repeatable" class="accordion auto-title panel-group">
									<div class="accordion-group panel panel-default">
										<h3 class="accordion-heading panel-heading">
											<i class="fa fa-ellipsis-v action-move"></i>
											<a class="accordion-toggle collapsed">Accordion Title</a>
											<i class="fa fa-times action-remove"></i>
										</h3>
										<div class="accordion-body panel-collapse">
											<div class="accordion-inner panel-body">
												<input type="hidden" value="Item" name="addontitle" class="widget-input addon-title">
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETLOGO_IMAGE_LABEL').'</label>
													<div class="media input-group input-append">
														<input type="text" value="images/sampledata/fruitshop/apple.jpg" name="addonimage" class="widget-input form-control">
														<a class="input-group-addon add-on modal" href="#" rel="{handler: \'iframe\', size: {x: 800, y: 500}}">'.JText::_('JLIB_FORM_BUTTON_SELECT').'</a>
													</div>
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETSLIDESHOW_CAPTION_LABEL').'</label>
													<textarea name="addoncontent" class="widget-input" cols="50" rows="3"></textarea>
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETGALLERY_TAG_LABEL').'</label>
													<input type="text" value="" name="addontag" class="widget-input">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- END LIST -->
						</div>
						<div id="widget-menu8" class="tab-content clearfix" data-name="options">
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_LARGE_LABEL').'</label>
								<input type="text" value="4" name="blocklarge" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_SMALL_LABEL').'</label>
								<input type="text" value="3" name="blocksmall" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_TABLET_LABEL').'</label>
								<input type="text" value="2" name="blocktablet" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_TESTIMONIAL_PHONE_LABEL').'</label>
								<input type="text" value="1" name="blockphone" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETGALLERY_SPACING_LABEL').'</label>
								<input type="text" value="10px" name="blockspacing" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETGALLERY_FILTER_LABEL').'</label>
								<select name="blockfilter" class="widget-box">
									<option value="none">'.JText::_('JNONE').'</option>
									<option value="nav">'.JText::_('JGLOBAL_PAGINATION_LABEL').'</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETGALLERY_BORDER_LABEL').'</label>
								<select name="blockimageborder" class="widget-box">
									<option value="">'.JText::_('JNONE').'</option>
									<option value="img-circle">Circle</option>
									<option value="img-rounded">Rounded</option>
								</select>
							</div>
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETGALLERY_LIGHTBOX_LABEL').'</label>
								<select name="blocklightbox" class="widget-box">
									<option value="1">'.JText::_('JYES').'</option>
									<option value="0">'.JText::_('JNO').'</option>
								</select>
							</div>
						</div>'.
						$basicTabContent.
					'</div>';
	
	$widgetGridstack = '<div id="widget-gridstack" class="widget-content clearfix">
					  <ul class="tabs-nav clearfix">
						<li><a href="#widget-menu7">'.JText::_('TPL_VTEM_TABBASIC_LABEL').'</a></li>
						<li><a href="#widget-menu9">'.JText::_('TPL_VTEM_TABADVANCED_LABEL').'</a></li>
					  </ul>
					  <div id="widget-menu7" class="tab-content clearfix" data-name="content">
							<div class="control-group">
								<label>'.JText::_('TPL_VTEM_WIDGETCONTENT_TITLE_LABEL').'</label>
								<input type="text" value="" name="blocktitle" class="widget-box">
							</div>
							<div class="control-group">
								<label>'.JText::_('JSHOW').'</label>
								<select name="blockenable" class="widget-box">
									<option value="homepage">Homepage only</option>
									<option value="nohomepage">No homepage</option>
									<option value="all">ALL</option>
								</select>
							</div>
							<hr />
							<div class="repeatable-items widget-box">
								<span class="clone-repeatable btn btn-primary"><i class="fa fa-plus"></i> '.JText::_('JTOOLBAR_NEW').'</span>
								<div id="social-repeatable" class="accordion auto-title panel-group">
									<div class="accordion-group panel panel-default">
										<h3 class="accordion-heading panel-heading">
											<i class="fa fa-ellipsis-v action-move"></i>
											<a class="accordion-toggle collapsed">Accordion Title</a>
											<i class="fa fa-times action-remove"></i>
										</h3>
										<div class="accordion-body panel-collapse">
											<div class="accordion-inner panel-body">
												<input type="hidden" value="Item" name="addontitle" class="widget-input addon-title">
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_TYPE_LABEL').'</label>
													<select name="addontype" class="widget-input select-group">
														<option value="image">'.JText::_('TPL_VTEM_WIDGETFEATURED_IMAGE_LABEL').'</option>
														<option value="none">'.JText::_('JNONE').'</option>
													</select>
												</div>
												<div class="control-group addontype-image">
													<label>'.JText::_('TPL_VTEM_WIDGETLOGO_IMAGE_LABEL').'</label>
													<div class="media input-group input-append">
														<input type="text" value="images/sampledata/fruitshop/apple.jpg" name="addonimage" class="widget-input form-control">
														<a class="input-group-addon add-on modal" href="#" rel="{handler: \'iframe\', size: {x: 800, y: 500}}">'.JText::_('JLIB_FORM_BUTTON_SELECT').'</a>
													</div>
												</div>
												<div class="control-group addontype-image">
													<label>'.JText::_('TPL_VTEM_WIDGETGRIDSTACK_IMAGEWIDTH_LABEL').'</label>
													<input type="text" value="40%" name="addonimagewidth" class="widget-input ">
												</div>
												<div class="control-group addontype-image">
													<label>'.JText::_('TPL_VTEM_WIDGETGRIDSTACK_IMAGEALIGN_LABEL').'</label>
													<select name="addonimagealign" class="widget-input">
														<option value="none">None</option>
														<option value="left">Left</option>
														<option value="right">Right</option>
													</select>
												</div>
												<div class="control-group addontype-image">
													<label>'.JText::_('TPL_VTEM_WIDGETGALLERY_BORDER_LABEL').'</label>
													<select name="blockimageborder" class="widget-input">
														<option value="">'.JText::_('JNONE').'</option>
														<option value="img-circle">Circle</option>
														<option value="img-rounded">Rounded</option>
													</select>
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_HEADLINE_LABEL').'</label>
													<input type="text" value="Your headline" name="addonheadline" class="widget-input">
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_DESC_LABEL').'</label>
													<textarea name="addoncontent" class="widget-input" cols="50" rows="4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</textarea>
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_LINKTEXT_LABEL').'</label>
													<input type="text" value="" name="addonlinktext" class="widget-input">
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETITEM_LINK').'</label>
													<input type="text" value="#" name="addonlink" class="widget-input">
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETFEATURED_LINKTARGET_LABEL').'</label>
													<select name="addonlinktarget" class="widget-input">
														<option value="_self">Self</option>
														<option value="_blank">Blank</option>
													</select>
												</div>
												<div class="control-group">
													<label>'.JText::_('TPL_VTEM_WIDGETGRIDSTACK_CLASS').'</label>
													<input type="text" value="col-md-12" name="addonclass" class="widget-input">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>'.
						$basicTabContent.
					'</div>';
					
$widgetExtendsItem =$widgetCustomhtml.
					$widgetFeaturedcontent.
					$widgetSlideshow.
					$widgetCarousel.
					$widgetAccordion.
					$widgetTabs.
					$widgetTestimonial.
					$widgetSocial.
					$widgetImage.
					$widgetVideo.
					$widgetGmap.
					$widgetGallery.
					$widgetGridstack;

////////////////////////// WIDGET EXTEND TOOLS////////////////////////////////////////////////////////
$widgetExtends = '
	<div data-name="widget-customhtml" data-type="extend" data-title="'.JText::_('TPL_VTEM_WIDGET_CUSTOMHTML_LABEL').'">
		<strong class="fa fa-html5"></strong> <span>'.JText::_('TPL_VTEM_WIDGET_CUSTOMHTML_LABEL').' <i class="fa fa-cog vtem-button config"></i><b class="fa fa-trash vtem-button delete"></b><em>12</em></span>
	</div>
	<div data-name="widget-featuredcontent" data-type="extend" data-title="'.JText::_('TPL_VTEM_WIDGET_FEATUREDCONTENT_LABEL').'">
		<strong class="fa fa-dropbox"></strong> <span>'.JText::_('TPL_VTEM_WIDGET_FEATUREDCONTENT_LABEL').' <i class="fa fa-cog vtem-button config"></i><b class="fa fa-trash vtem-button delete"></b><em>12</em></span>
	</div>
	<div data-name="widget-slideshow" data-type="extend" data-title="'.JText::_('TPL_VTEM_WIDGET_SLIDESHOW_LABEL').'">
		<strong class="fa fa-slideshare"></strong> <span>'.JText::_('TPL_VTEM_WIDGET_SLIDESHOW_LABEL').' <i class="fa fa-cog vtem-button config"></i><b class="fa fa-trash vtem-button delete"></b><em>12</em></span>
	</div>
	<div data-name="widget-carousel" data-type="extend" data-title="'.JText::_('TPL_VTEM_WIDGET_CAROUSEL_LABEL').'">
		<strong class="fa fa-exchange"></strong> <span>'.JText::_('TPL_VTEM_WIDGET_CAROUSEL_LABEL').' <i class="fa fa-cog vtem-button config"></i><b class="fa fa-trash vtem-button delete"></b><em>12</em></span>
	</div>
	<div data-name="widget-gallery" data-type="extend" data-title="'.JText::_('TPL_VTEM_WIDGET_GALLERY_LABEL').'">
		<strong class="fa fa-th-large"></strong> <span>'.JText::_('TPL_VTEM_WIDGET_GALLERY_LABEL').' <i class="fa fa-cog vtem-button config"></i><b class="fa fa-trash vtem-button delete"></b><em>12</em></span>
	</div>
	<div data-name="widget-gridstack" data-type="extend" data-title="'.JText::_('TPL_VTEM_WIDGET_GRIDSTACK_LABEL').'">
		<strong class="fa fa-th-list"></strong> <span>'.JText::_('TPL_VTEM_WIDGET_GRIDSTACK_LABEL').' <i class="fa fa-cog vtem-button config"></i><b class="fa fa-trash vtem-button delete"></b><em>12</em></span>
	</div>
	<div data-name="widget-testimonial" data-type="extend" data-title="'.JText::_('TPL_VTEM_WIDGET_TESTIMONIAL_LABEL').'">
		<strong class="fa fa-comments"></strong> <span>'.JText::_('TPL_VTEM_WIDGET_TESTIMONIAL_LABEL').' <i class="fa fa-cog vtem-button config"></i><b class="fa fa-trash vtem-button delete"></b><em>12</em></span>
	</div>
	<div data-name="widget-gmap" data-type="extend" data-title="'.JText::_('TPL_VTEM_WIDGET_GMAP_LABEL').'">
		<strong class="fa fa-map-marker"></strong> <span>'.JText::_('TPL_VTEM_WIDGET_GMAP_LABEL').' <i class="fa fa-cog vtem-button config"></i><b class="fa fa-trash vtem-button delete"></b><em>12</em></span>
	</div>
	<div data-name="widget-accordion" data-type="extend" data-title="'.JText::_('TPL_VTEM_WIDGET_ACCORDION_LABEL').'">
		<strong class="fa fa-tasks"></strong> <span>'.JText::_('TPL_VTEM_WIDGET_ACCORDION_LABEL').' <i class="fa fa-cog vtem-button config"></i><b class="fa fa-trash vtem-button delete"></b><em>12</em></span>
	</div>
	<div data-name="widget-tabs" data-type="extend" data-title="'.JText::_('TPL_VTEM_WIDGET_TABS_LABEL').'">
		<strong class="fa fa-folder"></strong> <span>'.JText::_('TPL_VTEM_WIDGET_TABS_LABEL').' <i class="fa fa-cog vtem-button config"></i><b class="fa fa-trash vtem-button delete"></b><em>12</em></span>
	</div>
	<div data-name="widget-social" data-type="extend" data-title="'.JText::_('TPL_VTEM_WIDGET_SOCIAL_LABEL').'">
		<strong class="fa fa-users"></strong> <span>'.JText::_('TPL_VTEM_WIDGET_SOCIAL_LABEL').' <i class="fa fa-cog vtem-button config"></i><b class="fa fa-trash vtem-button delete"></b><em>12</em></span>
	</div>
	<div data-name="widget-image" data-type="extend" data-title="'.JText::_('TPL_VTEM_WIDGET_SIGNLEIMAGE_LABEL').'">
		<strong class="fa fa-picture-o"></strong> <span>'.JText::_('TPL_VTEM_WIDGET_SIGNLEIMAGE_LABEL').' <i class="fa fa-cog vtem-button config"></i><b class="fa fa-trash vtem-button delete"></b><em>12</em></span>
	</div>
	<div data-name="widget-video" data-type="extend" data-title="'.JText::_('TPL_VTEM_WIDGET_VIDEO_LABEL').'">
		<strong class="fa fa-video-camera"></strong> <span>'.JText::_('TPL_VTEM_WIDGET_VIDEO_LABEL').' <i class="fa fa-cog vtem-button config"></i><b class="fa fa-trash vtem-button delete"></b><em>12</em></span>
	</div>
';