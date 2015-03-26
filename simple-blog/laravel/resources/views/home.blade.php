@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<?php foreach ($posts as $key => $value) : ?>
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
						<a href="/{{$value->id}}-{{$value->title}}"><?=  $value->title ?></a>
					</div>
					<div class="panel-body">
						<?=  $value->content ?>
					</div>
				</div>
			</div>	
		<?php endforeach; ?>
	</div>
</div>
@endsection
