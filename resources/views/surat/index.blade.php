@extends('_layouts.default')

@section('content')
<div class="content-header">
    <div class="row">
        <div class="col-md-6 ">
            {{-- @include('_layout.breadcrumb') --}}
        </div>
        <div class="col-md-6">
            {{-- <a href="#" class="btn btn-primary float-md-right mt-0">
                <i class="icon-plus3"></i> Tambah
            </a> --}}
        </div>
    </div>
</div>
<div class="content-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-0">
                <div class="card-header">
                    <h4 class="card-title">Daftar Surat</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            {{-- <li><a data-action="collapse"><i class="icon-minus4"></i></a></li> --}}
                            {{-- <li><a data-action="expand"><i class="icon-expand2"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
                {{-- <div class="card-body collapse in">
                    <div class="card-block pb-0">
                        <form method="get">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group mb-0">
                                        
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group mb-0">
                                        <label class="control-label">Total records : </label>
                                        <div class="form-control" readonly><strong>{{ number_format_short($total_record) }}</strong></div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group mb-0">
                                        <label class="control-label">Search by : </label>
                                        <select name="by" id="by" class="form-control">
                                            <option value="name" {{ (request('by') == 'name') ? 'selected' : '' }}>Nama</option>
                                            <option value="code" {{ (request('by') == 'code') ? 'selected' : '' }}>Nomor Barang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-0">
                                        <label class="control-label">Search box : </label>
                                        <div class="input-group">
                                            <input type="text" name="q" id="search" class="form-control" value="{{ request('q') }}" placeholder="Type here...">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="icon-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> --}}
                <!-- <div class="card-body"> -->
                <div class="card-block">
                    <div class="table-responsive bg-white">
                        <table class="table table-sm mb-0 table-bordered table-hover">
                            <thead class="bg-primary bg-lighten text-white">
                            <!-- <thead class="bg-lighten"> -->
                                <tr>
                                    <th width="20">No.</th>
                                    <th>Nama Penduduk</th>
                                    <th>Jenis Surat</th>
                                    {{-- @if(Auth::user()->permission_actions) --}}
                                    {{-- <th width="180" class="text-xs-center">Actions</th> --}}
                                    {{-- @endif --}}
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($surat as $index => $item)
                                    <tr>
                                        <td>{{$index + 1}}</td>
                                        <td>{{$item->nama_penduduk}}</td>
                                        <td>{{$item->jenis}}</td>
                                    </tr>
                                @empty
                                    <tr class="bg-info bg-lighten-4">
                                        <td colspan="7">
                                            <strong class="text-info"><center>Data Kosong</center></strong>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- </div> -->
            </div>

            <div class="card-block pr-0">
                <nav aria-label="Page navigation" class="text-xs-right">
                    {!! $surat->links() !!}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
