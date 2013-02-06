<div id="" class="row">
	<div id="" class="span3 hidden-phone">
		<ol class="acc-wizard-sidebar">
			<li class="acc-wizard-todo"><a href="#data-identitas" data-toggle="collapse" data-parent="#form-lot" >Identitas Lot</a></li>
			<li class="acc-wizard-todo"><a href="#data-penanaman" data-toggle="collapse" data-parent="#form-lot" >Penanaman Lot</a></li>
			<li class="acc-wizard-todo"><a href="#data-relasi" data-toggle="collapse" data-parent="#form-lot" >Relasi Lot</a></li>
			<li class="acc-wizard-todo"><a href="#data-verifikasi" data-toggle="collapse" data-parent="#form-lot" >Verifikasi Lot</a></li>
			<li class="acc-wizard-todo"><a href="#data-status" data-toggle="collapse" data-parent="#form-lot" >Status Lot</a></li>
		</ol>
	</div>
	<div id="" class="span9">
		<form class="form form-horizontal accordion" id="form-lot">
			<fieldset class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#form-lot" href="#data-identitas">
						Identitas Lot
					</a>
				</div>
				<div id="data-identitas" class="accordion-body collapse in">
					<div class="accordion-inner">
						<div class="control-group">
							<label class="control-label" for="inputjudul">Nama Lot</label>
							<div class="controls">
								<input type="text" id="inputname" class="span6" placeholder=""> 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputjudul">Foto Lot</label>
							<div class="controls">
								<div class="fileupload fileupload-new" data-provides="fileupload">
									<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>
									<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
									<div>
										<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" /></span>
										<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
									</div>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="ho-ktp">Deskripsi Lot</label>
							<div class="controls">
								<textarea name="message" id="message" class="input-xlarge span5" rows="6"></textarea>
							</div> 
						</div>
						<div class="control-group">
							<label class="control-label" for="inputjudul">Sponsorship</label>
							<div class="controls">
								<input type="text" id="inputname" class="span4" placeholder=""> 
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
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#form-lot" href="#data-penanaman">
						Penanaman Lot
					</a>
				</div>
				<div id="data-penanaman" class="accordion-body collapse">
					<div class="accordion-inner">
						<div class="control-group">
							<label class="control-label" for="inputjudul">Project</label>
							<div class="controls">
								<input type="text" id="inputname" class="span6" placeholder=""> 
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<a href="#">Daftarkan Project Baru</a>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputjudul">Block</label>
							<div class="controls">
								<input type="text" id="inputname" class="span6" placeholder=""> 
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<a href="#">Daftarkan Block Baru</a>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="ho-ktp">Koordinat Lot</label>
							<div class="controls">
								<textarea name="message" id="message" class="input-xlarge span5" rows="6"></textarea>
							</div> 
						</div>
						<div class="control-group">
							<label class="control-label" for="kota">Jenis Tanaman</label>
							<div class="controls">
								<select id="subject" name="subject" class="span3">
									<option value="na" selected="">Pilih Jenis Tanaman</option>
									<option value="cat">Jabon</option>
									<option value="gal">Sengon</option>
									<option value="doc">Mix</option>
								</select>
							</div>
						</div>
						<!-- <div class="control-group">
							<label class="control-label" for="inputjudul">Persentase Campuran</label>
							<div class="controls">
								<input type="text" id="inputname" placeholder="'Jabon 50% - Sengon 50%'"> 
							</div>
						</div> -->
						<div class="control-group">
							<label class="control-label" for="inputjudul">Propinsi</label>
							<div class="controls">
								<input type="text" id="inputname" placeholder=""> 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputjudul">Kota / Kabupaten</label>
							<div class="controls">
								<input type="text" id="inputname" placeholder=""> 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputjudul">Kecamatan</label>
							<div class="controls">
								<input type="text" id="inputname" placeholder=""> 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputjudul">Desa</label>
							<div class="controls">
								<input type="text" id="inputname" placeholder=""> 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputjudul">No Persil / Objek Pajak</label>
							<div class="controls">
								<input type="text" id="inputname" placeholder=""> 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="kota">Kerjasama</label>
							<div class="controls">
								<select id="subject" name="subject" class="span3">
									<option value="na" selected="">AA-70/30</option>
									<option value="cat">AB-60/40</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="ho-ktp">Tanggal Penanaman</label>
							<div class="controls">
								<div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
									<input class="span2" size="16" type="text" value="12-02-2012">
									<span class="add-on"><i class="icon-th"></i></span>
								</div>
							</div> 
						</div>
						<div class="control-group">
							<label class="control-label" for="inputjudul">Rencana Penanaman</label>
							<div class="controls">
								<input type="text" id="inputname" placeholder=""> 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputjudul">Luas Lot</label>
							<div class="controls">
								<input type="text" id="inputname" placeholder=""> 
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
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#form-lot" href="#data-relasi">
						Relasi Lot
					</a>
				</div>
				<div id="data-relasi" class="accordion-body collapse">
					<div class="accordion-inner">
						<div class="control-group">
							<label class="control-label" for="inputjudul">Petani</label>
							<div class="controls">
								<input type="text" id="inputname" class="span6" placeholder=""> 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputjudul">Pemilik Lahan</label>
							<div class="controls">
								<input type="text" id="inputname" class="span6" placeholder=""> 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputjudul">Verifikator</label>
							<div class="controls">
								<input type="text" id="inputname" class="span6 uneditable-input" value="Sony Suwargana" disabled="disabaled"> 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputjudul">Sponsor</label>
							<div class="controls">
								<input type="text" id="inputname" class="span6" placeholder=""> 
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<a href="#">Daftarkan User Baru</a>
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
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#form-lot" href="#data-verifikasi">
						Verifikasi Lot
					</a>
				</div>
				<div id="data-verifikasi" class="accordion-body collapse">
					<div class="accordion-inner">
						<div class="control-group">
							<label class="control-label" for="inputjudul">Form A Verifikasi</label>
							<div class="controls">
								<div class="fileupload fileupload-new" data-provides="fileupload">
									<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>
									<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
									<div>
										<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" /></span>
										<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
									</div>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputjudul">Berita Acara Penanaman Verifikasi</label>
							<div class="controls">
								<div class="fileupload fileupload-new" data-provides="fileupload">
									<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>
									<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
									<div>
										<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" /></span>
										<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
									</div>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="ho-ktp">Koordinat Lot Verifikasi</label>
							<div class="controls">
								<textarea name="message" id="message" class="input-xlarge span5" rows="6"></textarea>
							</div> 
						</div>
						<div class="control-group">
							<label class="control-label" for="inputjudul">Realisasi Penanaman</label>
							<div class="controls">
								<input type="text" id="inputname" class="" placeholder=""> 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputjudul">Realisasi Luas Lot</label>
							<div class="controls">
								<input type="text" id="inputname" class="" placeholder=""> 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputjudul">Verifikasi Data</label>
							<div class="controls">
								<label class="checkbox"><input type="checkbox"> No Persil / Objek Pajak</label>
								<label class="checkbox"><input type="checkbox"> Kerjasama</label>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputjudul"></label>
							<div class="controls">
								<p>Dengan memverifikasi saya menyatakan bahwa data yang tercatat benar adanya dan dapat dipertanggungjawabkan secara hukum yang berlaku di Republik Indonesia</p>
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
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#form-lot" href="#data-status">
						Status Lot
					</a>
				</div>
				<div id="data-status" class="accordion-body collapse">
					<div class="accordion-inner">
						<div class="control-group">
							<label class="control-label" for="inputjudul">Status Lot</label>
							<div class="controls">
								<select>
									<option>Hapus</option>
									<option>Draft</option>
									<option>Offering</option>
									<option>Plan</option>
									<option>Ready to Plant</option>
								</select>
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