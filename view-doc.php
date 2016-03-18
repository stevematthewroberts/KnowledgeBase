<!--MAIN HEADER-->
<?php
 include("header.php");
?>
<!--END MAIN HEADER-->
            
	<div id="container" class="effect mainnav-out">
		
        <!--NAVBAR-->
        <header id="navbar">
            <div id="navbar-container">
            <div class="container">

                <!--Brand logo & name-->
                <div class="navbar-header tgl-menu-btn">
                    <a href="#" class="navbar-brand mainnav-toggle push">
                        <img src="img/brand.png" alt="Dataplan Knowledge Base" class="brand-icon">
                    </a>
                </div>
                <!--End brand logo & name-->
                
                </div>
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <!--END NAVBAR-->

			<!--CONTENT CONTAINER-->
			<div id="content-container" class="container">

				<!--Page header content-->
				<div class="row">
                
                <div class="col-xs-12 col-sm-12 col-md-12">
					
				<!--Page Title-->
				<div class="col-xs-12 col-sm-6 col-md-2" id="page-title">
					<h1>Knowledge</h1>
                </div>
				<!--End page-title-->
                
                <!--Doc Menu-->
                <div class=".col-md-4 .col-md-offset-4 docMenu">
                
                <div class="table-toolbar-right">
                <div class="btn-group">
                <a href="add-doc.php"><button class="btn btn-purple btn-labeled fa fa-plus" id="demo-btn-addrow">Create a New Doc</button></a>
                <a href="view-doc.php"><button class="btn btn-default btn-labeled fa fa-file-text-o">My Drafts</button></a>
                </div><!--btn-group-->
                
                </div><!--table-toolbar-right-->
                            
                </div>
                <!--End Doc Menu-->
                
                </div>
                <!--col-->
                
                <!--Breadcrumb-->
                <div class="col-xs-12 col-sm-12 col-md-12 searchbox">
                    <ol class="breadcrumb">
                        <li><a href="index.php#">Home</a></li>
                        <li>Knowledge</li>
                        <li class="active">View Document</li>
                    </ol>
                </div>
                
                </div>
				<!--End row-->
                
                <!--Page header content-->
				<div class="row">
                
                <div class="col-xs-12 col-sm-12 col-md-12">

				<!--Page content-->
				<div id="page-content">
					
									<!-- VIEW MESSAGE -->
									<div class="panel panel-default panel-left">
										<div class="panel-body">
											<div class="row pad-ver">
                                            <div class="col-md-10">
                                            <p>5th Jan - 15:23</p>
                                            <h3>Where to start with payroll processing</h3>
                                            </div>
												<div class="col-md-2">
					
													<!--Doc toolbar-->
													<button class="btn btn-default"><i class="fa fa-print"></i></button>
													<div class="btn-group btn-group">
														<button class="btn btn-default"><i class="fa fa-exclamation-circle"></i></button>
														<button class="btn btn-default"><i class="fa fa-trash"></i></button>
													</div>
												</div>
											</div>
					
											<!--Message-->
											
											<div class="pad-all bord-all bg-gray-light">
												<strong>Introduction</strong>
												<br><br>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
												<blockquote class="text-muted">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</blockquote>
                                                <strong>What employees need</strong>
												<br><br>
												Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
											</div>
											
											<!--End Message-->
					
											<!-- Attach Files-->
											
											<div class="pad-ver">
												<h4><i class="fa fa-paperclip fa-fw"></i> Attachments <span>(2)</span></h4>
					
												<ul class="mail-attach-list list-ov">
													<li class=" clearfix">
					
														<!--File information-->
														<div class="mail-attach-file">
															<span class="mail-attach-label">
																<span class="label label-default text-uppercase">Images</span>
															</span>
															<div class="media-body">
																<div class="text-bold"><a href="mailbox-message.html#">IMG_007.jpg</a></div>
																<small class="text-muted">(15 KB)</small>
															</div>
														</div>
													</li>
													<li class="clearfix">
					
					
														<!--File information-->
														<div class="mail-attach-file">
															<span class="mail-attach-label">
																<span class="label label-default  text-uppercase">Video</span>
															</span>
															<div class="media-body">
																<div class="text-bold"><a href="mailbox-message.html#">VID_007.mp4</a></div>
																<small class="text-muted">(178 MB)</small>
															</div>
														</div>
													</li>
												</ul>
											</div>
											
											<!-- End Attach Files-->
					
					
											<div class="row">
                                            
                                            <div class="col-md-12">
                                            <button id="mail-send-btn" type="button" class="btn  btn-labeled fa fa-pencil-square-o">
													Edit Document
												</button>
                                            </div>
                                            
                                            </div>
                                            
										</div>
									</div>
									<!-- END VIEW MESSAGE -->
					
					
				</div>
				<!--End page content-->

                
                </div><!--End coll-->
				
				</div>
				<!--End row-->


			</div>
			<!--END CONTENT CONTAINER-->
            
<!--MAIN NAVIGATION-->
<?php
 include("navigation.php");
?>
<!--END MAIN NAVIGATION-->

<!--MAIN FOOTER-->
<?php
 include("footer.php");
?>
<!--END MAIN FOOTER-->