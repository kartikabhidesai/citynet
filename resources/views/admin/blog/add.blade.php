@extends('layouts.app')
@section('content')
<style type="text/css">
     .has-error {
    border-color: red;
}
</style>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Add Blog</h5>
					<div class="ibox-tools">
						<a class="collapse-link">
							<i class="fa fa-chevron-up"></i>
						</a>
						<!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="fa fa-wrench"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#">Config option 1</a>
							</li>
							<li><a href="#">Config option 2</a>
							</li>
						</ul>
						<a class="close-link">
							<i class="fa fa-times"></i>
						</a> -->
					</div>
				</div>
				<div class="ibox-content">
					<form id="addBlog" class="form-horizontal" method="post" enctype='multipart/form-data'>
						<div class="form-group"><label class="col-lg-2 control-label">Title</label>
							<div class="col-lg-9">
								<input type="text" name="title" required class="form-control">
							</div>
						</div>
						<div class="form-group"><label class="col-lg-2 control-label">Descrption</label>
							<div class="col-lg-9">
								<textarea name="description" required rows="5" class="form-control"> </textarea>
							</div>
						</div>
						<input class="c-input" type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label class="col-lg-2 control-label">File</label>
								<div class="fileinput fileinput-new input-group col-lg-9" data-provides="fileinput">
							    <div class="form-control" data-trigger="fileinput">
							        <i class="glyphicon glyphicon-file fileinput-exists"></i>
							    <span class="fileinput-filename"></span>
							    </div>
							    <span class="input-group-addon btn btn-default btn-file">
							        <span class="fileinput-new">Select file</span>
							        <span class="fileinput-exists">Change</span>
							        <input type="file" name="demo_pic"/>
							    </span>
							    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div> 
						</div>
                    
						<div class="form-group">
							<div class="col-lg-offset-2 col-lg-9">
								<button class="btn btn-sm btn-primary" type="submit">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>	
	</div>
</div>

@endsection