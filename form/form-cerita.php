<div id="" class="row">
	<div id="" class="span3">
		<ol class="acc-wizard-sidebar">
			<li class="acc-wizard-todo"><a href="#cerita-isi">Isi Cerita</a></li>
			<li class="acc-wizard-todo"><a href="#cerita-lampiran">Lampiran Cerita</a></li>
		</ol>
	</div>
	<div id="" class="span9">
		<form class="form form-horizontal accordion" id="form-cerita">
			<fieldset class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#form-cerita" href="#cerita-isi">
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
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#form-cerita" href="#cerita-lampiran">
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