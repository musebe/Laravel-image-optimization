<div>
	<div class="flex-row">
		<div class="spinner-border spinner-border-sm m-3 end-0" role="status" wire:loading wire:target="upload"></div>
	</div>
	@if (session()->has('message'))
		<div class="alert alert-success alert-dismissible fade show m-3" role="alert">
			<h4 class="alert-heading">Holy optimal success!</h4>
			<p>{{ session('message') }}</p>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif
	<div class="flex h-screen justify-center items-center">
		<div class="row w-75">
			<div class="col-md-12">
				<form class="mb-5" wire:submit.prevent="upload">
					<div class="form-group row mt-5 mb-3">
						<div class="input-group">
							<input type="file" class="form-control @error('media') is-invalid @enderror"
							       placeholder="Choose file..." id="media-file" type="file" wire:model="media">
							@error('media')
							<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>
						<small class="text-muted text-center mt-2" wire:loading wire:target="media">
							{{ __('Uploading') }}&hellip;
						</small>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-sm btn-primary w-25">
							<i class="fas fa-check mr-1"></i> {{ __('Optimize') }}
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm mb-4">
				<div class="card">
					<div class="card-body">
						<img class="card-img-top" src="{{ $media }}" alt="Original Image" width="400" height="600">
						<h5 class="card-title mt-4 fw-bold">
							Original Image
						</h5>
					</div>
				</div>
			</div>
			<div class="col-sm mb-4">
				<div class="card">
					<div class="card-body">
						<img class="card-img-top" src="{{ $optimizedImage }}" alt="Optimized Image" width="400" height="600">
						<h5 class="card-title mt-4 fw-bold">
							Optimized Image
						</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>