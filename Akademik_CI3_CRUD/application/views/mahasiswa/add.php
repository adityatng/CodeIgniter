
<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Mahasiswa</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('mahasiswa'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('id' => 'FrmAddMahasiswa', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="Nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Nama" name="Nama" value=" <?= set_value('Nama'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Nama') ?>
                            </small>
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="Jenis_kelamin" name="Jenis_kelamin" value="Laki-laki" <?php if (set_value('Jenis_kelamin') == "Laki-laki") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="Jenis_kelamin">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="Jenis_kelamin2" name="Jenis_kelamin" value="Perempuan" <?php if (set_value('Jenis_kelamin') == "Perempuan") : echo "checked";
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
                        <label for="Alamat" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="Alamat" name="Alamat" rows="3"><?= set_value('Alamat'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('Alamat') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Mata_kuliah" class="col-sm-3 col-form-label">Mata Kuliah</label>
                         <span id="addRow" class="btn btn-primary">Tambah</span>
                        </div>
                        <div class="col-sm-10">
                            <!-- Mata kuliah -->
                            <table id="myTable" class="table table-bordered text-center">
                            <tr>
                              <th>NO</th>
                              <th>Mata Kuliah</th>
                              <th>Aksi</th>
                            </tr>
                          </table>
                            <!-- <select class="form-control" id="Mata_kuliah" name="Mata_kuliah">
                                <option value="Manajemen Jaringan" selected disabled>Pilih</option>
                                <option value="Manajemen Jaringan" <?php if (set_value('Mata_kuliah') == "Manajemen Jaringan") : echo "selected";
                                                        endif; ?>>Manajemen Jaringan</option>
                                <option value="Arsitektur Komputer" <?php if (set_value('Mata_kuliah') == "Arsitektur Komputer") : echo "selected";
                                                            endif; ?>>Arsitektur Komputer</option>
                                <option value="Kecerdasan Buatan" <?php if (set_value('Mata_kuliah') == "Kecerdasan Buatan") : echo "selected";
                                                        endif; ?>>Kecerdasan Buatan</option>
                                <option value="Pemograman Web" <?php if (set_value('Mata_kuliah') == "Pemograman Web") : echo "selected";
                                                        endif; ?>>Pemograman Web</option>
                                <option value="Jaringan Komputer" <?php if (set_value('Mata_kuliah') == "Jaringan Komputer") : echo "selected";
                                                        endif; ?>>Jaringan Komputer</option>
                                <option value="Grafika Komputer" <?php if (set_value('Mata_kuliah') == "Grafika Komputer") : echo "selected";
                                                            endif; ?>>Grafika Komputer</option>
                            </select> -->
                            <small class="text-danger">
                                <?php echo form_error('Mata_kuliah') ?>
                            </small>
                        </div>
                    </div>
                    <!-- Upload KRS -->
                    <div class="form-group row">
                        <label for="up_krs" class="col-sm-3 col-form-label">Upload Krs</label>
                        <div class="col-sm-10">
                        <input class="form-control" id="up_krs" type="file" name="up_krs">
                    </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary" id='submit'>Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>

 <script>
    $(document).ready(function(){
      var i = 1;
      $("#addRow").click(function(){
        $("#myTable").append('<tr id="row'+i+'"><td>'+i+'</td><td><input type="text" name="Mata_kuliah" id="Mata_kuliah'+i+'"/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Hapus</button></td></tr>');
        i++;
      });
  
      $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id");
        $('#row'+button_id+'').remove();
      });
  
      $("#submit").click(function(){
        var matkul = $('input[name^="Mata_kuliah"]').map(function(){
          return this.value;
        }).get();
        $('input[name^="Mata_kuliah"]').val(matkul);
      });
    });
  </script>