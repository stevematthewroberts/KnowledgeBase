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
                    
                <!--Searchbox-->
                <div class="col-xs-12 col-sm-6 col-md-10 searchbox">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search..">
                        <span class="input-group-btn">
                            <button class="text-muted" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
                <!--End Searchbox-->
                
                <!--Doc Menu-->
                <div class="col-xs-12 col-sm-6 col-md-3 docMenu">
                
                <div class="table-toolbar-right">
                <div class="btn-group">
                <a href="add-doc.php"><button class="btn btn-purple btn-labeled fa fa-plus" id="demo-btn-addrow">Create a Doc</button></a>
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
                        <li class="active">Knowledge</li>
                    </ol>
                </div>
                
                </div>
				<!--End row-->
                
                <!--Page header content-->
				<div class="row">
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                
                <!--Topics Panel-->
                <div class="col-xs-12 col-sm-12 col-md-4 topics">
                
                			<div class="panel">
					
								<!--Panel heading-->
								<div class="panel-heading">
									<div class="panel-control">
<button class="demo-panel-ref-btn btn btn-default" data-toggle="panel-overlay" data-target="#topics-panel-collapse"><i class="fa fa-refresh"></i></button>

<button class="btn btn-default" data-target="#topics-panel-collapse" data-toggle="collapse"><i class="fa fa-chevron-down"></i></button>

<button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
<a class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip" href="index.html#" data-original-title="<h4 class='text-thin'>Information</h4><p style='width:150px'>This is an information bubble to help the user.</p>" data-html="true" title=""></a>
									</div><!--panel-control-->
									<h3 class="panel-title">Topics</h3>
								</div>
					
								<!--Panel body-->
								<div id="topics-panel-collapse" class="collapse in">
									<!--div class="panel-body">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
									</div-->
					
								<!--List group-->
								<ul class="list-group">
									<li class="list-group-item"><strong>Popular</strong></li>
									<li class="list-group-item">Payroll Process</li>
									<li class="list-group-item">Dataplan Apps</li>
									<li class="list-group-item">Tax Codes</li>
									<li class="list-group-item">Setup</li>
									<li class="list-group-item">New Staff Training</li>
								</ul>
                                
								</div><!--Panel collapse-->
							</div><!--End Panel-->
                            
                </div>
                <!--End Topics Panel-->
                
                <div class="col-xs-12 col-sm-12 col-md-4 tags">
                
                			<div class="panel">
					
								<!--Panel heading-->
								<div class="panel-heading">
									<div class="panel-control">
<button class="demo-panel-ref-btn btn btn-default" data-toggle="panel-overlay" data-target="#tags-panel-collapse"><i class="fa fa-refresh"></i></button>

<button class="btn btn-default" data-target="#tags-panel-collapse" data-toggle="collapse"><i class="fa fa-chevron-down"></i></button>

<button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
<a class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip" href="index.html#" data-original-title="<h4 class='text-thin'>Information</h4><p style='width:150px'>This is an information bubble to help the user.</p>" data-html="true" title=""></a>
									</div><!--panel-control-->
									<h3 class="panel-title">Tags</h3>
								</div>
					
								<!--Panel body-->
								<div id="tags-panel-collapse" class="collapse in">
									<!--div class="panel-body">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
									</div-->
					
								<!--Tags Table-->
								<table class="table">
									<thead>
										<tr>
											<th><strong>Popular</strong></th>
										</tr>
									</thead>
					
									<tbody>
										<tr>
											<td>Tutorials</td>
											<td>Tutorials</td>
											<td>Tutorials</td>
											<td>Tutorials</td>
										</tr>
										<tr>
											<td>How To</td>
											<td>How To</td>
											<td>How To</td>
											<td>How To</td>
										</tr>
										<tr>
											<td>New Feature</td>
											<td>New Feature</td>
											<td>New Feature</td>
											<td>New Feature</td>
										</tr>
										<tr>
											<td>Set Up</td>
											<td>Set Up</td>
											<td>Set Up</td>
											<td>Set Up</td>
										</tr>
									</tbody>
								</table>
                                
								</div><!--Panel collapse-->
							</div><!--End Panel-->
                
                </div><!--tags-->
                
                <div class="col-xs-12 col-sm-12 col-md-4 glossary">
                
                			<div class="panel">
					
								<!--Panel heading-->
								<div class="panel-heading">
									<div class="panel-control">
<button class="demo-panel-ref-btn btn btn-default" data-toggle="panel-overlay" data-target="#glossary-panel-collapse"><i class="fa fa-refresh"></i></button>

<button class="btn btn-default" data-target="#glossary-panel-collapse" data-toggle="collapse"><i class="fa fa-chevron-down"></i></button>

<button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
<a class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip" href="index.html#" data-original-title="<h4 class='text-thin'>Information</h4><p style='width:150px'>This is an information bubble to help the user.</p>" data-html="true" title=""></a>
									</div><!--panel-control-->
									<h3 class="panel-title">Glossary</h3>
								</div>
					
								<!--Panel body-->
								<div id="glossary-panel-collapse" class="collapse in">
                                
									<div class="panel-body searchbox">
									<div class="input-group custom-search-form">
                                        <input type="text" class="form-control" placeholder="Search..">
                                        <span class="input-group-btn">
                                            <button class="text-muted" type="button"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
									</div>
					
								<!--Glossary Table-->
								<table class="table">
									<tbody>
										<tr>
											<th>PD166</th>
											<th>PD166</th>
											<th>PD166</th>
											<th>PD166</th>
										</tr>
										<tr>
											<th>ACOS</th>
											<th>ACOS</th>
											<th>ACOS</th>
											<th>ACOS</th>
										</tr>
										<tr>
											<th>GHUI</th>
											<th>GHUI</th>
											<th>GHUI</th>
											<th>GHUI</th>
										</tr>
										<tr>
											<th>P111</th>
											<th>P111</th>
											<th>P111</th>
											<th>P111</th>
										</tr>
									</tbody>
								</table>
                                
								</div><!--Panel collapse-->
							</div><!--End Panel-->
                
                </div><!--glossary-->
                
                </div><!--col-->
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-12 col-sm-12 col-md-12 latest">
                
                			<div class="panel">
					
								<!--Panel heading-->
								<div class="panel-heading">
									<div class="panel-control">
<button class="panel-ref-btn btn btn-default" data-toggle="panel-overlay" data-target="#latest-panel-collapse"><i class="fa fa-refresh"></i></button>

<button class="btn btn-default" data-target="#latest-panel-collapse" data-toggle="collapse"><i class="fa fa-chevron-down"></i></button>

<button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
<a class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip" href="index.html#" data-original-title="<h4 class='text-thin'>Information</h4><p style='width:150px'>This is an information bubble to help the user.</p>" data-html="true" title=""></a>
									</div><!--panel-control-->
									<h3 class="panel-title">Latest</h3>
								</div>
					
								<!--Panel body-->
								<div id="latest-panel-collapse" class="collapse in">
									<!--div class="panel-body">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
									</div-->
					
								<!--News Table-->
								<table class="table">
									<thead>
										<tr>
											<th>Title</th>
											<th>Author</th>
											<th>Topic</th>
										</tr>
									</thead>
					
									<tbody>
										<tr>
											<td>Where to start with Payroll processing</td>
											<td>Jane</td>
											<td>The payroll process</td>
										</tr>
										<tr>
											<td>Understanding wage slips</td>
											<td>Laura</td>
											<td>Wage Slips</td>
										</tr>
										<tr>
											<td>Using payroll hubs new ticket system</td>
											<td>Tony Brewitt</td>
											<td>Feature</td>
										</tr>
										<tr>
                                            <td>App roadmap</td>
											<td>Richard</td>
											<td>Dataplan apps</td>
										</tr>
									</tbody>
								</table>
                                
								</div><!--Panel collapse-->
							</div><!--End Panel-->
                
                </div><!--col-->
                </div><!--col-->
				
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