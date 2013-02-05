<div id="" class="row">
	<div id="" class="span3">
		<ol class="acc-wizard-sidebar">
			<li class="acc-wizard-todo"><a href="#data-identitas" data-toggle="collapse" data-parent="#form-lot" >Identitas Lot</a></li>
			<li class="acc-wizard-todo"><a href="#data-penanaman" data-toggle="collapse" data-parent="#form-lot" >Penanaman Lot</a></li>
			<li class="acc-wizard-todo"><a href="#data-penanaman" data-toggle="collapse" data-parent="#form-lot" >Relasi Lot</a></li>
			<li class="acc-wizard-todo"><a href="#data-verifikasi" data-toggle="collapse" data-parent="#form-lot" >Verifikasi Lot</a></li>
			<li class="acc-wizard-todo"><a href="#data-status" data-toggle="collapse" data-parent="#form-lot" >Status Lot</a></li>
		</ol>
	</div>
	<div id="" class="span9">
		<form class="form form-horizontal accordion" id="form-lot">
			<fieldset class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#form-lot" href="#cerita-isi">
						Identias Lot
					</a>
				</div>
				<div id="cerita-isi" class="accordion-body collapse in">
					<div class="accordion-inner">
						<div class="control-group">
							<label class="control-label" for="inputjudul">Nama Lot</label>
							<div class="controls">
								<input type="text" id="inputname" class="span6" placeholder=""> 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="kota">Tipe Cerita :</label>
							<div class="controls">
								<select id="subject" name="subject" class="span3">
									<option value="na" selected="">pilih tipe cerita:</option>
									<option value="cat">Catatan</option>
									<option value="gal">Galeri</option>
									<option value="doc">Dokumen</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="ho-ktp">Deskripsi Lot</label>
							<div class="controls">
								<textarea name="message" id="message" class="input-xlarge span5" rows="10"></textarea>
							</div> 
						</div>
						<div class="control-group">
							<label class="control-label" for="img">Tambahkan gambar :</label>
							<div class="controls">
								<div class="fileupload fileupload-new" data-provides="fileupload">
									<span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" multiple="multiple"/></span>
									<span class="fileupload-preview"></span>
									<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
								</div>
							</div> 
						</div>
						<div class="control-group">
							<div class="controls">
								<button id="submit-profile" type="submit" class="btn btn-info">Simpan</button> <button type="reset" class="btn">batal</button>
							</div>
						</div>
					</div>
				</div>
			</fieldset>
			<fieldset class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#form-lot" href="#cerita-isi">
						Isi Cerita
					</a>
				</div>
				<div id="cerita-isi" class="accordion-body collapse in">
					<div class="accordion-inner">
						<div class="control-group">
							<label class="control-label" for="inputjudul">Judul Cerita</label>
							<div class="controls">
								<input type="text" id="inputname" placeholder="Judul cerita ditulis disini"> 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="kota">Tipe Cerita :</label>
							<div class="controls">
								<select id="subject" name="subject" class="span3">
									<option value="na" selected="">pilih tipe cerita:</option>
									<option value="cat">Catatan</option>
									<option value="gal">Galeri</option>
									<option value="doc">Dokumen</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="ho-ktp">Info Lot :</label>
							<div class="controls">
								<textarea name="message" id="message" class="input-xlarge span5" rows="10"></textarea>
							</div> 
						</div>
						<div class="control-group">
							<label class="control-label" for="img">Tambahkan gambar :</label>
							<div class="controls">
								<div class="fileupload fileupload-new" data-provides="fileupload">
									<span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" multiple="multiple"/></span>
									<span class="fileupload-preview"></span>
									<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
								</div>
							</div> 
						</div>
						<div class="control-group">
							<div class="controls">
								<button id="submit-profile" type="submit" class="btn btn-info">Simpan</button> <button type="reset" class="btn">batal</button>
							</div>
						</div>
					</div>
				</div>
			</fieldset>
			<fieldset class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#form-lot" href="#cerita-lampiran">
						Lampiran Cerita
					</a>
				</div>
				<div id="cerita-lampiran" class="accordion-body collapse">
					<div class="accordion-inner">
						<div class="control-group">
							<label class="control-label" for="img">Lampiran</label>
							<div class="controls">
								<ul class="thumbnails">
									<li class="span2">
										<img src="http://placehold.it/360x240" alt="">
										<label class="radio"><input type="radio"> Gambar Utama </label>
										<label class="checkbox"><input type="checkbox"> Hapus </label>
									</li>
									<li class="span2">
										<img src="http://placehold.it/360x240" alt="">
										<label class="radio"><input type="radio"> Gambar Utama </label>
										<label class="checkbox"><input type="checkbox"> Hapus </label>
									</li>
									<li class="span2">
										<img src="http://placehold.it/360x240" alt="">
										<label class="radio"><input type="radio"> Gambar Utama </label>
										<label class="checkbox"><input type="checkbox"> Hapus </label>
									</li>
								</ul>
							</div> 
						</div>
						<div class="control-group">
							<div class="controls">
								<button id="submit-profile" type="submit" class="btn btn-info">Simpan</button> <button type="reset" class="btn">batal</button>
							</div>
						</div>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>


<!--form lot registration-->
	
	<div class="span12">
			<section id="wizard">
			  <div class="page-header">
			  </div>
	
				<div id="rootwizard" class="tabbable tabs-left">
					<ul>
						<li><a href="#tab1" data-toggle="tab"><span class="badge badge-info">1</span> Tahap 1</a></li>
						<li><a href="#tab2" data-toggle="tab"><span class="badge badge-success">2</span> Tahap 2</a></li>
						<li><a href="#tab3" data-toggle="tab"><span class="badge badge-success">3</span> Tahap 3</a></li>
						<li><a href="#tab4" data-toggle="tab"><span class="badge badge-success">4</span> Tahap 4</a></li>
					</ul>
					<div class="tab-content">
					
						<div class="tab-pane" id="tab1">
							<form class="form-horizontal well">
									<div class="control-group">
										<label class="control-label" for="inputnama">Nama Lot *</label>
										<div class="controls">
											<input type="text" id="inputname" placeholder="Cilebaksaat">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="sd">Foto Profil</label>
										<div class="controls">
											<input type="file" id="inputresume" placeholder="">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="jenis-tanaman">Jenis Tanaman</label>
										<div class="controls">
											<select>
												<option>Albasiah</option>
												<option>Biti</option>
												<option>Jabon</option>
												<option>Jati</option>
												<option>Mix</option>
												<option>Sengon</option>
												<option>Trembesi</option>
											</select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="kota">Kabupaten/Kota</label>
										<div class="controls">
											<input type="text" id="inputkota" placeholder="Bandung">
										</div>
									</div>
									 <div class="controls">
										<p class="tiny">Gunakan jika tidak ada pilihan</p>
									</div>
									<div class="control-group">
										<label class="control-label" for="kecamatan">Kecamatan</label>
										<div class="controls">
											<input type="text" id="inputkecamatan" placeholder="Bojongsoang">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="desa">Desa</label>
										<div class="controls">
											<input type="text" id="inputdesa" placeholder="Bojongsoang">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="desa">No Persil/Objek Pajak</label>
										<div class="controls">
											<input type="text" id="inputnopersil" placeholder="0122">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="kerjasama">Kerjasama</label>
										<div class="controls">
											<select>
												<option>AA-70/30</option>
												<option>AB-60/40</option>
												<option>BA-60/40</option>
												<option>BB-50/50</option>
											</select>
										</div>
									</div>
									<div class="control-group">
										<div class="controls">
											<button id="submit-profile" type="submit" class="btn btn-info">Simpan</button> <button type="reset" class="btn">batal</button>
										</div>
									</div>
									
								</form>
						</div>
						
						<div class="tab-pane" id="tab2">
						  2
						</div>
						
						<div class="tab-pane" id="tab3">
							3
						</div>
						
						<div class="tab-pane" id="tab4">
							4
						</div>
						
						<ul class="pager wizard">
							<li class="previous first" style="display:none;"><a href="#">First</a></li>
							<li class="previous"><a href="#">Previous</a></li>
							<li class="next last" style="display:none;"><a href="#">Last</a></li>
							<li class="next"><a href="#">Next</a></li>
						</ul>
					</div>	
				</div>
			</section>
		</div>
<!--form lot registration-->
