    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form enctype="multipart/form-data" action="{{url('/create-template')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label">Template</label>
                            <div class="col-md-10">
                                <select name="template" class="form-select">
                                    <option>Silahkan Pilih</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label">Tempat Lahir</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="tempat" placeholder="Luwuk">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" name="tanggal">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-10">
                                <label class="col-md-2 col-form-label">Jenis Kelamin</label>
                                <div class="form-check form-check-inline mt-3 ms-2">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="pria">
                                    <label class="form-check-label">Pria</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="wanita">
                                    <label class="form-check-label">Wanita</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label">Agama</label>
                            <div class="col-md-10">
                                <select name="agama" class="form-select">
                                    <option>Silahkan Pilih</option>
                                    <option value="buddha">Buddha</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="islam">Islam</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="kristen">Kristen</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">Tinggi Badan</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" name="tinggi_badan" placeholder="170">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">Berat Badan</label>
                            <div class="col-md-10">
                                <input class="form-control" type="numbrt" name="berat_badan" placeholder="20">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="exampleFormControlTextarea1" class="col-md-2 form-label">Alamat</label>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="3" name="alamat" style="height: 71px; resize:none;"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">Handphone</label>
                            <div class="col-md-10">
                                <input class="form-control" type="tel" name="no_hp" placeholder="081343671284">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="status" placeholder="mahasiswa">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input class="form-control" type="email" name="email" placeholder="muis.mm021@gmail.com">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="formFileMultiple" class="col-md-2 col-form-label">Gambar</label>
                            <div class="col-md-10">
                                <input class="form-control" type="file" name="gambar">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
