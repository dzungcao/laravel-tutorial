@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<?php foreach ($posts as $key => $value) : ?>
			<div class="col-md-10 col-md-offset-1">
				<h3 class="center-block"><a href="/{{$value->id}}-{{$value->prettyTitle()}}"><?=  $value->title ?></a></h3>
				<span class="center-block">{{$value->created_at}}</span>
				<hr/>
				<div class="panel-body">
					<?=  $value->content ?>
				</div>
				
			</div>	
		<?php endforeach; ?>
	</div>
	
</div>
@endsection
