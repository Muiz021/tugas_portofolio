    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form enctype="multipart/form-data" action="{{url('/create-sekolah')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                     <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md col-form-label">Sekolah Dasar</label>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="sd" placeholder="SD Negeri 8 Luwuk">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md col-form-label">Sekolah Menengah
                                Pertama</label>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="smp" placeholder="SMP Negeri 2 Luwuk">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md col-form-label">Sekolah Menengah
                                Akhir</label>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="sma" placeholder="SMA Negeri 3 Luwuk">
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
