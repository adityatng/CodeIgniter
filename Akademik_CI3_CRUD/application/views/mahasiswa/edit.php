
<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Mahasiswa</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('mahasiswa'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('id' => 'FrmEditMahasiswa', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="ID" name="ID" value=" <?= $data_mahasiswa->ID; ?>">
                            <input type="text" class="form-control" id="Nama" name="Nama" value=" <?= $data_mahasiswa->Nama; ?>">
                            <small class="text-danger">
                                <?php echo form_error('Nama') ?>
                            </small>
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="Jenis_kelamin" name="Jenis_kelamin" value="Laki-laki" <?php if ($data_mahasiswa->Jenis_kelamin == "Laki-laki") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="Jenis_kelamin">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="Jenis_kelamin2" name="Jenis_kelamin" value="Perempuan" <?php if ($data_mahasiswa->Jenis_kelamin == "Perempuan") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="Jenis_kelamin2">
                                        Perempuan
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('Jenis_kelamin') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="Alamat" name="Alamat" rows="3"><?= $data_mahasiswa->Alamat; ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('Alamat') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Mata_kuliah" class="col-sm-2 col-form-label">Mata_kuliah</label>
                        <div class="col-sm-10">
                           <textarea class="form-control" id="Mata_kuliah" rows="3"name="Mata_kuliah"><?= $data_mahasiswa->Mata_kuliah ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('Mata_kuliah') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
