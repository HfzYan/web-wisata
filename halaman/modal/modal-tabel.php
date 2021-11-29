            
            <!-- MODAL EDIT -->
            <div class="modal fade" id="<?php echo $data['id'] ?>ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data <?php echo $data['nama'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="card">
                        <div class="card-body">
                          <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                             <label>Gambar Wisata</label>
                               <input type="file" name="gambar" class="form-control">
                               <br>
                                <img src="<?php echo $data['gambar'] ?>" height="60" width="60">
                            </div>
                            <div class="form-group">
                              <label>Nama Wisata</label>
                              <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
                            </div>
                            <div class="form-group">
                              <label>Deskripsi</label>
                              <textarea class="form-control" name="deskripsi" rows="7"><?php echo $data['deskripsi'] ?></textarea>
                            </div>
                            <div class="form-group">
                              <label>Alamat</label>
                              <br>
                              <textarea type="text" name="alamat" class="form-control" rows="7"><?php echo $data['alamat'] ?></textarea>
                            </div>
                                      <br><br>
                            <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-success" name="edit" id="#<?php echo $data['id'] ?>ModalEdit">Edit Data</button>
                             </div>
                            <br>
                         </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            

            <!-- MODAL ALAMAT -->
            <div class="modal fade" id="<?php echo $data['id'] ?>ModalAlamat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Alamat <?php echo $data['nama'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php echo $data['alamat'] ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>

            <!-- MODAL DESKRIPSI -->
            <div class="modal fade" id="<?php echo $data['id'] ?>ModalDeskripsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deskripsi <?php echo $data['nama'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php echo $data['deskripsi'] ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- MODAL GAMBAR -->
            <div class="modal fade" id="<?php echo $data['id'] ?>ModalGambar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gambar <?php echo $data['nama'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <img src="<?php echo $data['gambar'] ?>" height=600 width=600>
                    <hr>
                    <img src="<?php echo $data['gambar_2'] ?>" height=600 width=600>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
