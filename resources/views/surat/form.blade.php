@extends('_layouts.default')

@section('script-top')
<link rel="stylesheet" href="{{asset('robust/app-assets/css/plugins/forms/validation/form-validation.min.css')}}">
@endsection

@section('script-bottom')
<script src="{{asset('robust/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"> </script>
<script src="{{asset('robust/app-assets/js/scripts/forms/validation/form-validation.min.js')}}"> </script>
<script src="{{asset('js/backend.js')}}"> </script>
@endsection

@section('content')
<div class="content-header">
    <div class="row">
        <div class="col-md-6 ">
            {{-- @include('_layout.breadcrumb') --}}
        </div>
        <div class="col-md-6">
            <a href="{{ url('mutasi') }}" class="btn btn-secondary float-md-right mt-0">
            	<i class="icon-reply3"></i> Back
            </a>
        </div>
    </div>
</div>
<div class="content-body">
	<section class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-square-controls">Form Mutasi</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="card-body collapse in">
					<div class="card-block">

						{{-- {!! Form::open(['class' => 'form form-horizontal', 'novalidate']) !!} --}}
							<div class="form-body pt-1">

								<div class="form-group row position-relative has-icon-left">
									<label for="penduduk_id" class="col-md-2 label-control">NIK Penduduk</label>
									<div class="col-md-10">
										<select class="form-control items" name="penduduk_id" required>
											<option value="">Pilih NIK Penduduk</option>
											<option value="">2394829385</option>
											<option value="">9895874603</option>
										</select>
										<div class="form-control-position">
			                                <i class="icon-spinner2 spinner" id="spinner-item" style="display: none;"></i>
			                            </div>
										<div class="help-block font-small-3"></div>
									</div>
								</div>

								<div class="form-group row ">
									<label for="alamat_sebelum" class="col-md-2 label-control">Alamat Sebelum</label>
									<div class="col-md-10">
										<input type="text" class="form-control" name="alamat_sebelum" required value="{{ old('alamat_sebelum') }}">
										<div class="help-block font-small-3"></div>
									</div>
								</div>

								<div class="form-group row ">
									<label for="alamat_tujuan" class="col-md-2 label-control">Alamat tujuan</label>
									<div class="col-md-10">
										<input type="text" class="form-control" name="alamat_tujuan" required value="{{ old('alamat_tujuan') }}">
										<div class="help-block font-small-3"></div>
									</div>
								</div>

								<div class="form-group row position-relative has-icon-left">
									<label for="penduduk_id" class="col-md-2 label-control">Status Mutasi</label>
									<div class="col-md-10">
										<select class="form-control items" name="penduduk_id" required>
											<option value="">Pilih Status Mutasi</option>
											<option value="">Pindah</option>
											<option value="">Datang</option>
										</select>
										<div class="form-control-position">
			                                <i class="icon-spinner2 spinner" id="spinner-item" style="display: none;"></i>
			                            </div>
										<div class="help-block font-small-3"></div>
									</div>
								</div>

								<div class="form-group row ">
									<label for="alasan" class="col-md-2 label-control">Alasan</label>
									<div class="col-md-10">
										<input type="text" class="form-control" name="alasan" required value="{{ old('alasan') }}">
										<div class="help-block font-small-3"></div>
									</div>
								</div>

								<hr>

								<div class="offset-md-2">
									<button type="submit" class="btn btn-primary">
										<i class="icon-save"></i> Save
									</button>
								</div>
							</div>
						{{-- {!! Form::close() !!} --}}

					</div>
				</div>
			</div>
		</div>
	</section>

</div>
@endsection
