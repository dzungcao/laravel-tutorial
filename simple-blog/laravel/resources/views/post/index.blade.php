@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 style="margin:4px 0">Your all posts</h2>
				</div>
				<div class="panel-body">
					<table class="table">
						<tr>
							<td>Title</td>
							<td>Create date</td>
							<td></td>
						</tr>
						<?php foreach ($posts as $key => $value) : ?>
							<tr>
								<td>
									<a href="/{{$value->id}}-{{$value->title}}"><?=  $value->title ?></a>
								</td>
								<td>
									<span>{{$value->created_at}}</span>	
								</td>
								<td>
									<a href="/post/edit/{{$value->id}}">Edit</a>
									<a href="/post/delete/{{$value->id}}">Delete</a>
								</td>
							</tr>
						<?php endforeach; ?>	
					</table>
				</div>
			</div>
			
		</div>	
	</div>
</div>
@endsection
