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
                
                </div>
                <!--col-->
                
                <!--Breadcrumb-->
                <div class="col-xs-12 col-sm-12 col-md-12 searchbox">
                    <ol class="breadcrumb">
                        <li><a href="index.php#">Home</a></li>
                        <li>Knowledge</li>
                        <li class="active">Add Document</li>
                    </ol>
                </div>
                
                </div>
				<!--End row-->
                
                <!--Page header content-->
				<div class="row">
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                
                <!--Page content-->
				<div id="page-content">
					
								<!-- COMPOSE EMAIL -->
								<div class="panel panel-default panel-left">
									<div class="panel-body">
					
										<!--Input form-->
                                        <div class="col-md-8">
										<form role="form" class="form-horizontal">
											<div class="form-group">
												<div class="col-lg-12">
													<input placeholder="Type the title of the document..." type="text" id="inputSubject" class="form-control noborder">           
												</div>
											</div>
                                         </div>
                                            
                                        <!--toggle buttons-->
                                        
                                        <div class="col-md-4">
										<div class="text-right pad-btm">
											<div class="btn-group">
												<button id="toggle-date" data-toggle="button" type="button" class="btn btn-sm btn-default btn-active-info">Date</button>
												<button id="toggle-cat" data-toggle="button" type="button" class="btn btn-sm btn-default btn-active-info">Add Category</button>
                                                <button id="toggle-tag" data-toggle="button" type="button" class="btn btn-sm btn-default btn-active-info">Add Tag</button>
											</div>
										</div>
                                        </div>
                                        
                                        <div class="toggleInputs">
											<div id="date-input" class="hide form-group col-md-12">
                                            <input placeholder="Add Date" type="text" id="inputCc" class="form-control">
											</div>
											<div id="cat-input" class="hide form-group col-md-12">
                                                <input placeholder="Add Category" type="text" id="inputBcc" class="form-control">
											</div>
                                            
											<div id="tag-input" class="hide form-group col-md-12">
												<input placeholder="Add Tag" type="text" id="inputBcc" class="form-control">
											</div>
										</div>
                                        
										</form>
					
					
										<!--Wysiwyg editor : Summernote placeholder-->
										<div id="mail-compose"></div>
					
										<div class="pad-ver">
					
											<!--Send button-->
											<button id="mail-send-btn" type="button" class="btn btn-labeled">
												<span class="btn-label"><i class="fa fa-paper-plane"></i></span> Publish
											</button>
					
											<!--Save draft button-->
											<button id="mail-save-btn" type="button" class="btn btn-labeled">
												<span class="btn-label"><i class="fa fa-paperclip"></i></span> Save as Draft
											</button>
					
											<!--Discard button-->
											<button id="mail-discard-btn" type="button" class="btn btn-labeled">
												<span class="btn-label"><i class="fa fa-users"></i></span> Add to Group
											</button>
										</div>
									</div>
								</div>
								<!-- END COMPOSE EMAIL -->
					
					
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