<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<link href="{{ asset('/masonry/masonry-gallery.css') }}" rel="stylesheet" type="text/css" />
<style>
  .float{
    position:fixed;
    width:200px;
    height:200px;
    bottom:40px;
    right:40px;
    background-color:#25d366;
    color:#FFF;
    border-radius:5px;
    text-align:center;
    font-size:30px;
    box-shadow: 2px 2px 3px #999;
    z-index:100;
  }

  .my-float{
    margin-top:16px;
  }
  .adjust1 {
    float: left;
    width: 100%;
    margin-bottom: 0;
  }

  .carousel-control {
    color: #ffffff !important;
    opacity: 1;
    width: 4%;
    position: absolute;
  }

  .caption{
    width: 100%;
  }

  .media-object{
    width: 100%;
    width: 100%;
  }

  .carousel-control:hover{
    color: #ffffff;
    opacity: .5;
  }

  .fa-chevron-left, .fa-chevron-right{
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
  }

  .carousel-control.left{
    background: linear-gradient(to right, rgba(0, 0, 0, .1), transparent );
  }
  .carousel-control.right {
    background: linear-gradient(to left, rgba(0, 0, 0, .1), transparent );
  }

  @media screen and (max-width: 768px) {
    .media-object {
      margin-top: 0;
    }
  }
</style>
<body>
@include('layouts.header')
<!-- Page Title start -->
<div class="pageTitle pageDetail">
  <div class="mapsdetail">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2800.8261610124573!2d107.54011166400105!3d-6.894629353954426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbitc%20baros!5e0!3m2!1sid!2sid!4v1637127970922!5m2!1sid!2sid" width="1295" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="container-fluid"></iframe>
  </div>
</div>

<a href="https://api.whatsapp.com/send?phone={$tlp}&text=Mohon%20Informasi%20Mengenai%20Penerimaan%20Siswa%20Baru." class="float" target="_blank">
    <img src="{{ asset('images/ppdb-op.jpg') }}"/>
</a>

<!-- Page Title End -->
<div class="listpgWraper wrapperDetail" style="padding-bottom: 0;margin-top: -135px;">
  <div class="container"> 
    <!-- Job Header start -->
    <div class="job-header">
      <div class="jobinfo">
        <div class="row">
          <div class="col-md-8">
            <div class="companylogo"><img src="{{ $sekolah->gambar }}" alt=""></div>
            <h2>{{ $sekolah->nama }}</h2>
            <div class="ptext">{{ $sekolah->jenjang }}</div>
            <div class="salary">{{ $sekolah->kota }}</div>
          </div>
          <div class="col-md-4">
            <div class="companyinfo">
              <div class="title"><a>Alamat</a></div>
              <div class="ptext">{{ $sekolah->alamat }}, {{ $sekolah->kelurahan }}, {{ $sekolah->kecamatan }}, {{ $sekolah->kota }}, {{ $sekolah->propinsi }}, {{ $sekolah->kodepos }}</div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Job Detail start -->
    <div class="row">
    
      <!-- Carousel Berita -->
      <div class="col-md-12">        
{{--            @if($jml_berita == '0') 	--}}
            <div class="listpgWraper listhome">
                
                <div class="blogWraper">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      
                      <div class="carousel-inner">
                        @foreach($data_berita as $b)
                        {{--  <div class="item">
                            <div class="row">
                                <div class="thumbnail adjust1">
                                  
                                  <div class="col-md-6 col-sm-6 col-xs-12"> 
                                      <img class="media-object img-responsive" src="{{ asset('images/news-1.jpg') }}" alt=""> 
                                  </div>
          
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="caption">
                                      <h4><a href="/berita/detail/">kajsdhkahecn</a></h4>
                                      <div class="postmeta">Author : <span>{{ $b->autor }}</span> Dari : <span>{{ $b->alias }}</span></div>
                                     <p>lorem</p>
                                      <a href="/berita/detail/" class="readmore">Selengkapnya</a>
                                    </div>
                                  </div>
          
                                </div>
                            </div>
                          </div> --}}
                        @endforeach
                   {{--   </div>
                      @if($data_berita == 1)
                      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><i class="fa fa-chevron-left"></i> </a>
                      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <i class="fa fa-chevron-right"></i> </a>
                      @endif
                    </div>
                    
                    <a href="/berita/" class="btn btn-primary my-float">Lihat Semua Berita</a>
                </div>
            </div> --}}
            {{--@endif--}}
      </div>
      <!-- End of carousel berita -->

      <div class="col-md-7">
        <!-- Job Description start -->
        <div class="job-header">
          <div class="contentbox">
            <h3>Identitas Satuan Pendidikan</h3>
            <br/>
            <table class="table table-striped table-detail">
              <tr>
                <th>Nama</th>
                <td>:</td>
                <td>{{ $sekolah->nama }}</td>
              </tr>
              <tr>
                <th>NPSN</th>
                <td>:</td>
                <td>{{ $sekolah->npsn }}</td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>{{ $sekolah->alamat }}</td>
              </tr>
              <tr>
                <th>Kode Pos</th>
                <td>:</td>
                <td>{{ $sekolah->kodepos }}</td>
              </tr>
              <tr>
                <th>Desa/Kelurahan</th>
                <td>:</td>
                <td>{{ $sekolah->kelurahan }}</td>
              </tr>
              <tr>
                <th>Kecamatan/Kota (LN)</th>
                <td>:</td>
                <td>{{ $sekolah->kecamatan }}</td>
              </tr>
              <tr>
                <th>Kab.-Kota/Negara (LN)</th>
                <td>:</td>
                <td>{{ $sekolah->kota }}</td>
              </tr>
              <tr>
                <th>Propinsi/Luar Negeri (LN)</th>
                <td>:</td>
                <td>{{ $sekolah->propinsi }}</td>
              </tr>
              <tr>
                <th>Status Sekolah</th>
                <td>:</td>
                <td>{{ $sekolah->status }}</td>
              </tr>
              <tr>
                <th>Waktu Penyelenggaraan</th>
                <td>:</td>
                <td>{{ $sekolah->waktu }}</td>
              </tr>
              <tr>
                <th>Jenjang Pendidikan</th>
                <td>:</td>
                <td>{{ $sekolah->jenjang }}</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- Job Description end --> 
        <div class="job-header">
          <div class="jobdetail">
            <h3>Cek PPDB</h3>
              <div id="AlertPPDB"></div>
              <div class="form-group">
                <input type="text" class="form-control" name="noppdb" id="NoPPDB" placeholder="Masukkan No PPDB Anda"/>
              </div>
              <button type="button" id="PPDBSubmit" class="btn btn-primary btn-block">Cek</button>
          </div>
        </div>
        <!-- Job Detail start -->
        <!-- <div class="job-header">
          <div class="jobdetail">
            <h3>Dokumen dan Perijinan</h3>
            <ul class="jbdetail">
              <li class="row">
                <div class="col-md-6 col-xs-6">Naungan</div>
                <div class="col-md-6 col-xs-6"><span>{$a.naungan}</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">No. SK. Pendirian</div>
                <div class="col-md-6 col-xs-6"><span>{$a.noskpendirian}</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">Tanggal SK. Pendirian</div>
                <div class="col-md-6 col-xs-6"><span>{$a.tglskpendirian}</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">No. SK. Operasional</div>
                <div class="col-md-6 col-xs-6"><span>{$a.noskoperasional}</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">Tanggal SK. Operasional</div>
                <div class="col-md-6 col-xs-6"><span>{$a.tglskoperasional}</span> </div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6"> File SK Operasional</div>
                <div class="col-md-6 col-xs-6"><span class="freelance">{$a.fileskoperasional}</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">Akreditasi</div>
                <div class="col-md-6 col-xs-6"><span class="contract">{$a.akreditasi}</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">No. SK. Akreditasi</div>
                <div class="col-md-6 col-xs-6"><span> {$a.noskakreditasi}</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">Tanggal SK. Akreditasi</div>
                <div class="col-md-6 col-xs-6"><span>{$a.tglskakreditasi}</span></div>
              </li>
              <li class="row">
                <div class="col-md-6 col-xs-6">No. Sertifikasi ISO</div>
                <div class="col-md-6 col-xs-6"><span>{$a.iso}</span></div>
              </li>
            </ul>
          </div>
        </div> -->
      </div>
      <div class="col-md-5">
        <div class="job-header">
          <div class="jobdetail">
            <a href="/ppdb/" class="btn btn-lg btn-block btn-primary" style="border-radius: 0"><i class="fa fa-edit"></i> Pendaftaran Online</a>
          </div>
        </div>
        <!-- Job Description end --> 
        <div class="job-header">
          <div class="jobdetail">
            <h3>Kepala Sekolah</h3>
            <div class="kepsek">
              <img src="{{ asset('images/news-3.jpg') }}">
              <h3>Adit</h3>
            </div>
          </div>
        </div>
        <!-- kontak -->
        <div class="job-header">
          <div class="contentbox">
            <h3>Kontak</h3>
            <br/>
            <table class="table table-striped table-detail" style="border:1px solid #ddd;margin-bottom: 10px">
              <tr>
                <th>Telepon</th>
                <td>:</td>
                <td>{{ $sekolah->telp }}</td>
              </tr>
              <tr>
                <th>Fax</th>
                <td>:</td>
                <td>{{ $sekolah->fax }}</td>
              </tr>
              <tr>
                <th>Email</th>
                <td>:</td>
                <td>{{ $sekolah->email }}</td>
              </tr>
              <tr>
                <th>Website</th>
                <td>:</td>
                <td>{{ $sekolah->website }}</td>
              </tr>
              <tr>
                <th>Operator</th>
                <td>:</td>
                <td>{{ $sekolah->operator }}</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- kontak end -->
      </div>
      
    </div>
  </div>
</div>
<section class="section" style="padding-top: 0;margin-top: 100px;">
  <div class="container">
    <div class="titleTop">
      <h3>Galeri <span>Kami</span></h3>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="portfolioFilter">
          <a href="#" data-filter="*" class="current">All</a>
          <a href="#">{{ $sekolah->nama }}</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div id="gallery-content-center" class="gallerylist os-animation">
      <div class="ct-photoGallery-item col-md-3">
        <a href="" title="" class="fancybox" data-fancybox-group="gallery">
          <div class="ct-galleryTitle">
            <i class="fa fa-search-plus"></i>
          </div>
          <img src="" alt="">
        </a>
        <h3 class="content-title">apa</h3>
      </div>
      </div>
    </div>
  </div>
</section>
<!-- Featured Jobs start -->
<section class="section">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <h3>Produk <span>Kami</span></h3>
      <a href="/produk" class="catlink">Lihat Semua Produk</a>
    </div>
    <!-- title end --> 
    <div class="produkhome">
      <!--Featured Job start-->
      <ul class="jobslist row">
        <!--Job start-->
        <li class="col-md-6">
          <div class="jobint">
            <div class="row">
              <div class="col-md-2 col-sm-2"><img src="https://sekolahpedia.id/medias/produk/b5887.jpg" alt="Lisensi Office A1 365" /></div>
              <div class="col-md-7 col-sm-7">
                <h4><a href="/produk/detail/">Lisensi Office A1 365</a></h4>
                {{-- {$p.id}/{$p.alias} --}}
                <div class="company"><a href="/detail">SMK ANGKASA 1 MARGAHAYU</a></div>
                <div class="jobloc"><label class="fulltime">Productivity</label></div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="price">Rp. 50.000</div>
                <a href="/produk/detail/" class="applybtn">Detail</a>
              </div>
            </div>
          </div>
        </li>
        <li class="col-md-6">
            <div class="jobint">
              <div class="row">
                <div class="col-md-2 col-sm-2"><img src="https://sekolahpedia.id/medias/produk/yvwkh.png" alt="Lisensi Mikrotik Level 4" /></div>
                <div class="col-md-7 col-sm-7">
                  <h4><a href="/produk/detail/">Lisensi Mikrotik Level 4</a></h4>
                  {{-- {$p.id}/{$p.alias} --}}
                  <div class="company"><a href="/detail">SMK ANGKASA 1 MARGAHAYU</a></div>
                  <div class="jobloc"><label class="fulltime">Software</label></div>
                </div>
                <div class="col-md-3 col-sm-3">
                  <div class="price">Rp. 500.000</div>
                  <a href="/produk/detail/" class="applybtn">Detail</a>
                </div>
              </div>
            </div>
          </li>
          <li class="col-md-6">
            <div class="jobint">
              <div class="row">
                <div class="col-md-2 col-sm-2"><img src="https://sekolahpedia.id/medias/produk/h6yvz.png" alt="MIKROTIK RB 941-2ND Haplite" /></div>
                <div class="col-md-7 col-sm-7">
                  <h4><a href="/produk/detail/">MIKROTIK RB 941-2ND Haplite</a></h4>
                  {{-- {$p.id}/{$p.alias} --}}
                  <div class="company"><a href="/detail">SMK ANGKASA 1 MARGAHAYU</a></div>
                  <div class="jobloc"><label class="fulltime">Routers</label></div>
                </div>
                <div class="col-md-3 col-sm-3">
                  <div class="price">Rp. 400.000</div>
                  <a href="/produk/detail/" class="applybtn">Detail</a>
                </div>
              </div>
            </div>
          </li>
          <li class="col-md-6">
            <div class="jobint">
              <div class="row">
                <div class="col-md-2 col-sm-2"><img src="https://sekolahpedia.id/medias/produk/c4pzz.png" alt="JASA SERVICE LAPTOP/PC dan HP" /></div>
                <div class="col-md-7 col-sm-7">
                  <h4><a href="/produk/detail/">JASA SERVICE LAPTOP/PC dan HP</a></h4>
                  {{-- {$p.id}/{$p.alias} --}}
                  <div class="company"><a href="/detail">SMK SWASTA YAPIM SIAK HULU</a></div>
                  <div class="jobloc"><label class="fulltime">Service Product</label></div>
                </div>
                <div class="col-md-3 col-sm-3">
                  <div class="price">Rp. 50.000</div>
                  <a href="/produk/detail/" class="applybtn">Detail</a>
                </div>
              </div>
            </div>
          </li>
          <li class="col-md-6">
            <div class="jobint">
              <div class="row">
                <div class="col-md-2 col-sm-2"><img src="https://sekolahpedia.id/medias/produk/tbsp4.jpeg" alt="Ulat jerman" /></div>
                <div class="col-md-7 col-sm-7">
                  <h4><a href="/produk/detail/">Ulat Jerman</a></h4>
                  {{-- {$p.id}/{$p.alias} --}}
                  <div class="company"><a href="/detail">SMK SWASTA YAPIM SIAK HULU</a></div>
                  <div class="jobloc"><label class="fulltime">Food</label></div>
                </div>
                <div class="col-md-3 col-sm-3">
                  <div class="price">Rp. 70.000</div>
                  <a href="/produk/detail/" class="applybtn">Detail</a>
                </div>
              </div>
            </div>
          </li>
        <!--Job end--> 
      </ul>
    </div>
  </div>
</section>




@include('layouts.footer')
@include('layouts.limbs')
<script type="text/javascript" src="{{ asset('masonry/jquery.isotope.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('masonry/masonry-gallery.js') }}"></script>
<script>
  $(document).on("click","#PPDBSubmit",function(){
    var noppdb = $("#NoPPDB").val();
    $("#NoPPDB").val("");
    $("#AlertPPDB").html("");
    $.ajax({
      type:"GET",
      url: "{/literal}{$apisekolahan}{$idmember}{literal}/cekppdb?noppdb="+noppdb,
      success: function(response){
        if(response.status == 1){
          var content = '<div class="alert alert-success">';
              content += '<p>Nomor Peserta : '+response.nopmb+'</p>';
              content += '<p>Nama : '+response.nama+'</p>';
              content += '<p>Tanggal Lahir : '+response.ttl+'</p>';
              content += '<p>Dinyatakan telah diterima.</p>';
              content += '</div>';
          $("#AlertPPDB").append(content);
        }else if(response.status == 3){
          var content = '<div class="alert alert-info">';
              content += '<p>Nomor Peserta : '+response.nopmb+'</p>';
              content += '<p>Nama : '+response.nama+'</p>';
              content += '<p>Telah terdaftar di sekolah kami dan akan dilakukan proses seleksi.</p>';
              content += '</div>';
          $("#AlertPPDB").append(content);
        }else if(response.status == 4){
          var content = '<div class="alert alert-info">';
              content += '<p>Nomor Peserta : '+response.nopmb+', data telah terekam di sekolah kami.</p>';
              content += '</div>';
          $("#AlertPPDB").append(content);
        }else if(response.status == 2){
          $('<div class="alert alert-warning">No PPDB tidak terdaftar, cek kembali No PPDB Anda</div>').appendTo("#AlertPPDB");
        }else if(response.status == 0){
          var content = '<div class="alert alert-danger">';
              content += '<p>Mohon maaf peserta atas nama <b style="font-weight: 700;">'+response.nama+'</b> dengan nomor peserta <b style="font-weight: 700;">'+response.nopmb+'</b> dinyatakan tidak diterima, jangan putus asa dan tetap semangat.</p>';
              content += '</div>';
          $("#AlertPPDB").append(content);
        }
      }
    });
  });


</script>
</body>
</html> 
