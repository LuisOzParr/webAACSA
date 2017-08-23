<div class="modal fade" id="{!! $id !!}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" >
	<div class="modal-dialog" role="document" id="modalTamaño" style="width: {!! $size !!}">
		<div class="modal-content" >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				@if(isset($title) && $title != null)
					<h{!! $titleSize !!} class="modal-title"> {!! $title !!} </h{!! $titleSize !!}>
				@endif
			</div>
			<div class="modal-body">
	