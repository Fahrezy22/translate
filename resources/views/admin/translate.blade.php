@extends('layout.master')
@section('title')
    Sentence
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Kalimat</h3>
                <div class="float-right">
                    <button class="btn btn-primary" data-toggle="modal"
                        data-target="#univ-modal">Tambah</button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if ($msg = Session::get('succes'))
                    <div class="alert alert-success">
                        <strong>{{ $msg }}</strong>
                    </div>
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                    </div>
                @endif
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Indonesia</th>
                            <th>Bugis</th>
                            <th>Type</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach ($data as $d)
                            <tr>
                                <td>{{$no++}}</td>
                                    <td>{{$d->indonesia}}</td>
                                    <td>{{$d->daerah}}</td>
                                    <td>{{$d->type}}</td>
                                <td>
                                    <button type="button" id="btn_edit" data-id="{{$d->id}}"
                                        class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                    <button type="button" id="btn_hapus" data-id="{{$d->id}}"
                                        class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>  
                        @endforeach      
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Indonesia</th>
                            <th>Bugis</th>
                            <th>Type</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        <!-- /.card-body -->
        </div>
    </div>
</div>
<div id="univ-modal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Kata</h4>
            </div>
            <form id="form-input" action="{{route('sentence.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Indonesia</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input id="indonesia" required name="indonesia" type="text" class="form-control"
                                placeholder="Isi disini..">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Bugis</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input id="daerah" required name="daerah" type="text" class="form-control"
                                placeholder="Isi disini..">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Type</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="hidden" name="id" id="id">
                            <select id="type" name="type" class="form-control" required>
                                <option selected disabled>Pilih</option>
                                <option value="Kata Kerja">Kata Kerja</option>
                                <option value="Kata Benda">Kata Benda</option>
                                <option value="Kata Sifat">Kata Sifat</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="batal" class="btn btn-danger" data-dismiss="modal">BATAL</button>
                    <button type="submit" id="simpan" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        $.ajaxSetup({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#batal').on('click',function(){
                    location.reload();
                });

                $('body').on('click','#btn_edit', function()
        {
            let dataId = $(this).data('id');
            $.get('sentence/'+ dataId + '/edit', function (data) {
                $('#univ-modal').modal('show');
                $('#id').val(data.id);
                $('#indonesia').val(data.indonesia);
                $('#daerah').val(data.daerah);
                $('#type').val(data.type);
                $('#form-input').attr('action','{{route('sentence.update')}}')
            })
        });

        $('body').on('click','#btn_hapus',function(){
            let dataId = $(this).data('id');
            $.get('sentence/'+dataId+'/edit',function(data){
                $('.modal-body').html('');
                $('.modal-body').append(
                    `<h3>Apakah anda yakin ingin menghapus data <strong> Jenis Kasus `
                        + data.indonesia +`</strong> ?</h3>
                    <input type="hidden" name="id" value="`+ data.id +`">
                    `
                );
                $('#form-input').attr('action','{{route('sentence.destroy')}}')
                $('#univ-modal').modal('show');
                $('#simpan').html('Hapus');
            });
        });
    });
</script>
@endsection