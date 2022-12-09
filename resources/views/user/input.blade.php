@extends('layout.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Formulir Permohonan Penyelesaian Sengketa Informasi</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="">
                    <div class="card-secondary">
                        <div class="card-header">
                            <h4>A. IDENTITAS PEMOHON</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Nama (Badan Hukum)</label>
                                        <input type="text" class="form-control col-6" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Tempat Lahir</label>
                                        <input type="text" class="form-control col-6" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Alamat</label>
                                        <input type="text" class="form-control col-6" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Tanggal-Lahir</label>
                                        <input type="date" class="form-control col-6" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Provinsi</label>
                                        <input type="text" class="form-control col-6" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Agama</label>
                                        <select name="" class="form-control col-6" id="" required>
                                            <option value="" selected disabled>-- PILIH --</option>
                                            <option value="Islam">Islam</option>
                                            <option value="kristen">kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Khatolik">Khatolik</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Kota</label>
                                        <input type="text" class="form-control col-6" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Kewarganegaraan</label>
                                        <input type="text" class="form-control col-6" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Kode Pos</label>
                                        <input type="text" class="form-control col-6" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Email</label>
                                        <input type="email" class="form-control col-6" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="">
                                        <label for="" class="label-control col-12">Telepon (Pilih nomor yang paling
                                            mudah di hubungi) :</label>
                                        <input class="ml-2" type="radio" name="gender" value="Rumah"> Rumah
                                        <input class="ml-2" type="radio" name="gender" value="Kantor"> Kantor
                                        <input class="ml-2" type="radio" name="gender" value="Faksimil"> Faksimil

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="">
                                        <label for="" class="label-control col-12">Tanda Bukti Identitas (Pilih nomor
                                            yang
                                            paling mudah dihubungi) :</label>
                                        <input class="ml-2" type="radio" name="gender" value="KTP"> KTP
                                        <input class="ml-2" type="radio" name="gender" value="Paspor"> Paspor
                                        <input class="ml-2" type="radio" name="gender" value="SIM"> SIM
                                        <input class="ml-2" type="radio" name="gender" value="AKTA"> AKTA
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">No.HP/Rumah/Faksimil</label>
                                        <input type="text" class="form-control col-6" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">No.KTP/SIM/Paspor/AKTA</label>
                                        <input type="text" class="form-control col-6" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-secondary">
                        <div class="card-header">
                            <h4>A.1 Diwakili Oleh</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Nama
                                            <br><small>(laki-laki/perempuan/badan hukum)</small></label>
                                        <input type="text" class="form-control col-6" required>

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Tempat Lahir</label>
                                        <input type="text" class="form-control col-6" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Alamat</label>
                                        <input type="text" class="form-control col-6" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Tanggal-Lahir</label>
                                        <input type="date" class="form-control col-6" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Provinsi</label>
                                        <input type="text" class="form-control col-6" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Agama</label>
                                        <select name="" class="form-control col-6" id="" required>
                                            <option value="" selected disabled>-- PILIH --</option>
                                            <option value="Islam">Islam</option>
                                            <option value="kristen">kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Khatolik">Khatolik</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Kota</label>
                                        <input type="text" class="form-control col-6" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Kewarganegaraan</label>
                                        <input type="text" class="form-control col-6" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Kode Pos</label>
                                        <input type="text" class="form-control col-6" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Pekerjaan</label>
                                        <input type="text" class="form-control col-6" required>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="">
                                        <label for="" class="label-control col-12">Telepon (Pilih nomor yang paling
                                            mudah di hubungi) :</label>
                                        <input class="ml-2" type="radio" name="gender" value="Rumah"> Rumah
                                        <input class="ml-2" type="radio" name="gender" value="Kantor"> Kantor
                                        <input class="ml-2" type="radio" name="gender" value="Faksimil"> Faksimil

                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">Email</label>
                                        <input type="email" class="form-control col-6" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="label-control col-6">No.HP/Rumah/Faksimil</label>
                                        <input type="text" class="form-control col-6" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-secondary">
                        <div class="card-header">
                            <h4>B. MENGENAI PERMOHONAN INFORMASI</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-secondary">
                                <div class="card-header">
                                    <h6>B.1 Badan Publik</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <div class="d-flex justify-content-between">
                                                <label for="" class="label-control col-6">Nama Badan Publik</label>
                                                <input type="text" class="form-control col-6" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <div class="d-flex justify-content-between">
                                                <label for="" class="label-control col-6">Alamat</label>
                                                <input type="text" class="form-control col-6" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-secondary">
                                <div class="card-header">
                                    <h6>B.2 Kronologi Permohonan Informasi <small class="text-danger">*tidak perlu diisi
                                            jika tidak pernah terjadi</small></h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <div class="d-flex justify-content-between">
                                                <label for="" class="label-control col-6">tanggal permohonan
                                                    informasi</label>
                                                <input type="date" class="form-control col-6" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex justify-content-between">
                                                <label for="" class="label-control col-6">tanggal jawaban atasan petugas
                                                    informasi</label>
                                                <input type="date" class="form-control col-6" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <div class="d-flex justify-content-between">
                                                <label for="" class="label-control col-6">tanggal jawaban petugas
                                                    informasi</label>
                                                <input type="date" class="form-control col-6" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex justify-content-between">
                                                <label for="" class="label-control col-6">Nama</label>
                                                <input type="text" class="form-control col-6" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <div class="d-flex justify-content-between">
                                                <label for="" class="label-control col-6">Nama</label>
                                                <input type="text" class="form-control col-6" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex justify-content-between">
                                                <label for="" class="label-control col-6">Jabatan</label>
                                                <input type="text" class="form-control col-6" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <div class="d-flex justify-content-between">
                                                <label for="" class="label-control col-6">Jabatan</label>
                                                <input type="text" class="form-control col-6" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <div class="d-flex justify-content-between">
                                                <label for="" class="label-control col-6">tanggal keberatan</label>
                                                <input type="date" class="form-control col-6" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-secondary">
                                <div class="card-header">
                                    <h6>B.3 Deskripsi Permasalahan <small class="text-danger">*jelaskan dengan singkat
                                            sengketa anda</small></h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="" class="label-control">Permohonan yang dimohonkan adalah</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="label-control">Masalah yang anda hadapi</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-secondary">
                                <div class="card-header">
                                    <h6>B.3 Deskripsi Permasalahan <small class="text-danger">*jelaskan dengan singkat
                                            sengketa anda</small></h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        <label class="col-11" for="vehicle1"> Menyatakan informasi yang bersifat terbuka
                                            sehingga wajib dibuka dan diberikan kepada pemohon</label>
                                    </div>
                                    <div class="form-group row">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        <label class="col-11" for="vehicle1"> Menyatakan informasi telah salah karena
                                            tidak menanggapi permohonan informasi sebagaimana yang dimohon, sehingga
                                            termohon wajib menanggapi permohonan sesuai informasi permohonan</label>
                                    </div>
                                    <div class="form-group row">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        <label class="col-11" for="vehicle1"> Menyatakan termohon telah salah karena
                                            tidak menyediakan informasi tertentu secara berkala. sehingga termohon wajib
                                            menyediakan dan mengumumkan informasi yang dimohon secara berkala.</label>
                                    </div>
                                    <div class="form-group row">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        <label class="col-11" for="vehicle1"> Menyatakan termohon telah salah karena
                                            tidak memenuhi permohonan informasi. sehingga termohon wajib memenuhi
                                            permohonan informasi oleh pemohon sebagaimana yang dimohonkan.</label>
                                    </div>
                                    <div class="form-group row">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        <label class="col-11" for="vehicle1"> Menyatakan termohon telah salah karena
                                            tidak menanggapi permohonan informasi. sehingga termohon wajib menanggapi
                                            permohonan informasi oleh pemohon.</label>
                                    </div>
                                    <div class="form-group row">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        <label class="col-11" for="vehicle1"> Menyatakan termohon telah salah karena
                                            mengenakan biaya yang tidak wajar atas permohonan informasi. sehingga
                                            termohon wajib mengenakan biaya yang wajar.</label>
                                    </div>
                                    <div class="form-group row">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        <label class="col-11" for="vehicle1"> Menyatakan termohon telah salah karena
                                            menyampaikan infromasi melebihi batas waktu yang diatur dalam peraturan
                                            perundang-undangan yang berlaku, sehingga termohon wajib segera menyampaikan
                                            informasi kepada pemohon</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-secondary">
                                <div class="card-header">
                                    <h6>B.5 Dokumentasi Pendukung <small class="text-danger">*Format JPG,PNG,PDF</small>
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="card-secondary">
                                        <div class="card-header">
                                            <h6>B.5.1 Upload file identitas pemohon/kuasa pemohon</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="" class="label-control">KTP,SIM,PASPOR,Atau Kartu Tanda
                                                    Pelajar</label>
                                                <input type="file" class="form-control"><small class="text-danger">*max 2mb</small>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="label-control">Akta pendirian badan hukum surat
                                                    keputusan pengangkatan pengurus, atau akta lain yang dianggap sah
                                                    (bagi pemohon badan hukum)</label>
                                                <input type="file" class="form-control"><small class="text-danger">*max 2mb</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-secondary">
                                        <div class="card-header">
                                            <h6>B.5.2 Upload file pengajuan permohonan informasi</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="" class="label-control">Surat permohonan atau formulir permohonan atau tanda bukti permohonan informasi
                                                    Pelajar</label>
                                                <input type="file" class="form-control"><small class="text-danger">*max 2mb</small>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="label-control">Surat pemberitahuan tertulis atas permohonan informasi</label>
                                                <input type="file" class="form-control"><small class="text-danger">*max 2mb</small>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="label-control">Tanda bukti pengajuan permohonan informasi</label>
                                                <input type="file" class="form-control"><small class="text-danger">*max 2mb</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.col -->
</div>
@endsection
