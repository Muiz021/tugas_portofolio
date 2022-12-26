    <!-- Modal -->
    <div class="modal fade" id="get-{{$portofolio->sekolah->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form enctype="multipart/form-data" action="{{url('/edit-sekolah')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                     <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md col-form-label">Sekolah Dasar</label>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="sd" value="{{$portofolio->sekolah->sd}}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md col-form-label">Sekolah Menengah
                                Pertama</label>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="smp" value="{{$portofolio->sekolah->smp}}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md col-form-label">Sekolah Menengah
                                Akhir</label>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="sma" value="{{$portofolio->sekolah->sma}}">
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
