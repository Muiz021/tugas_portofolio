    <!-- Modal -->
    <div class="modal fade" id="get-{{ $user->portofolio->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('/edit-template') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3 row">
                            <label class="col-md col-form-label">Template</label>
                            <div class="col-md-12">
                                <select name="template" class="form-select">
                                    <option>Silahkan Pilih</option>
                                    <option value="1" {{ $user->portofolio->template === 1 ? 'Selected' : '' }}>1</option>
                                    <option value="2" {{ $user->portofolio->template === 2 ? 'Selected' : '' }}>2</option>
                                    {{-- <option value="3" {{ $user->portofolio->template === 3 ? 'Selected' : '' }}>3</option> --}}
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md col-form-label">Tempat Lahir</label>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="tempat" value="{{ $user->portofolio->tempat }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md col-form-label">Tanggal Lahir</label>
                            <div class="col-md-12">
                                <input class="form-control" type="date" name="tanggal" value="{{ $user->portofolio->tanggal }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md">
                                <label class="col-md col-form-label">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <div class="form-check form-check-inline mt-3 ms-2">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="pria" {{ $user->portofolio->jenis_kelamin == 'pria' ? 'checked' : '' }}>
                                        <label class="form-check-label">Pria</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="wanita" {{ $user->portofolio->jenis_kelamin == 'wanita' ? 'checked' : '' }}>
                                        <label class="form-check-label">Wanita</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md col-form-label">Agama</label>
                            <div class="col-md-12">
                                <select name="agama" class="form-select">
                                    <option>Silahkan Pilih</option>
                                    <option value="buddha" {{ $user->portofolio->agama === 'buddha' ? 'Selected' : '' }}>Buddha</option>
                                    <option value="hindu" {{ $user->portofolio->agama === 'hindu' ? 'Selected' : '' }}>Hindu</option>
                                    <option value="islam" {{ $user->portofolio->agama === 'islam' ? 'Selected' : '' }}>Islam</option>
                                    <option value="katolik" {{ $user->portofolio->agama === 'katolik' ? 'Selected' : '' }}>Katolik</option>
                                    <option value="kristen" {{ $user->portofolio->agama === 'kristen' ? 'Selected' : '' }}>Kristen</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md col-form-label">Tinggi Badan</label>
                            <div class="col-md-12">
                                <input class="form-control" type="number" name="tinggi_badan" value="{{ $user->portofolio->tinggi_badan }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md col-form-label">Berat Badan</label>
                            <div class="col-md-12">
                                <input class="form-control" type="numbrt" name="berat_badan" value="{{ $user->portofolio->berat_badan }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="exampleFormControlTextarea1" class="col-md form-label align-self-center">Alamat</label>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="alamat" value="  {{ $user->portofolio->alamat }}" style="height: 71px;">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md col-form-label">Handphone</label>
                            <div class="col-md-12">
                                <input class="form-control" type="tel" name="no_hp" value="{{ $user->portofolio->no_hp }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md col-form-label">Status</label>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="status" value="{{ $user->portofolio->status }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md col-form-label">Email</label>
                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" value="{{ $user->portofolio->email }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="formFileMultiple" class="col-md col-form-label">Gambar</label>
                            <div class="col-md-12">
                                <input class="form-control" type="file" name="gambar" value="{{ $user->portofolio->gambar }}">
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
