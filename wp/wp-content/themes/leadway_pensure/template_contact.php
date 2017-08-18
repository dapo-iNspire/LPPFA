<?php /* Template Name: Contact */ ?>

<?php

?>

<?php get_header(); ?>
<!-- Body and Main Content of page -->
<div class="container" id="m-top">
    <div class="row">
        <div class="col-12 text-center csr">
            <span  data-aos="fade" class="align-middle">
                <?= get_field("top_box") ?>
            </span>
        </div>
    </div>
    <div class="row" style="position: relative">
        <div class="col-md-6 contact-bg">
            <img src="<?= get_field("left_box_image")['url'] ?>"/>
        </div>
        <div class="contact-txt text-right" data-aos="fade-right">
            <?= get_field("left_box") ?>
        </div>
        <div class="col-md-6 h-office text-center">
            <?= get_field("right_box") ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 divide"></div>
        <div class="col-md-12 location text-center">
            <h1 class="hidden-sm-down" data-aos="fade">Our Locations</h1>
            <h3 class="hidden-md-up" data-aos="fade">Our Locations</h3>
            <ul class="hidden-sm-down nav nav-fill nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#west" role="tab" data-aos="fade-right">Western Region</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#east" role="tab" data-aos="fade-right">Eastern Region</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#north" role="tab" data-aos="fade-left">Northern Region</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#south" role="tab" data-aos="fade-left">Southern Region</a>
                </li>
            </ul>
            <form class="hidden-md-up mx-auto">
                <div class="form-group">
                    <select class="form-control" id="regions" data-aos="fade">
                        <option value="0">Western Region</option>
                        <option value="1">Eastern Region</option>
                        <option value="2">Northern Region</option>
                        <option value="3">Southern Region</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
    <div class="row tab-content" data-aos="fade">
        <!-- Western Region -->
        <div class="tab-pane fade show active col-12" role="tabpanel" id="west">
            <div id="accordion1" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <a data-toggle="collapse" data-parent="#accordion1" href="#Ekiti" aria-expanded="true" aria-controls="Ekiti">
                        <div class="card-header" role="tab" id="West5">
                            <h5 class="mb-0">
                                Ekiti
                            </h5>
                        </div>
                    </a>
                    <div id="Ekiti" class="collapse show" role="tabpanel" aria-labelledby="West5">
                        <div class="card-block">
                            <div class="row justify-content-around">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Ekiti (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>Little by little plaza, 1st floor, Ajilosun Street, Ado-Ekiti.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person">
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Adeniyi Akomolafe<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> a-akomolafe@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096998487, 07033419492<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#Kwara" aria-expanded="false" aria-controls="Kwara">
                        <div class="card-header" role="tab" id="West6">
                            <h5 class="mb-0">
                                Kwara
                            </h5>
                        </div>
                    </a>
                    <div id="Kwara" class="collapse" role="tabpanel" aria-labelledby="West6">
                        <div class="card-block">
                            <div class="row justify-content-around">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Ilorin (Branch Office)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>163, Ajase-Ipo Road, Gaa-Akanbi Junction. P.M.B 1538, Ilorin.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Segun Kayode<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> s-kayode@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096998483<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#lagos" aria-expanded="false" aria-controls="lagos">
                        <div class="card-header" role="tab" id="West1">
                            <h5 class="mb-0">
                                Lagos
                            </h5>
                        </div>
                    </a>
                    <div id="lagos" class="collapse" role="tabpanel" aria-labelledby="West1">
                        <div class="card-block">
                            <div class="row justify-content-around">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Ikeja (Branch Office)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>House 1, Gabriel Akinmade Taylor Estate, Allen Avenue, Ikeja.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Olugbenga Oriowo<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> o-oriowo@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995912, 08099803549<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#Ogun" aria-expanded="false" aria-controls="Ogun">
                        <div class="card-header" role="tab" id="West2">
                            <h5 class="mb-0">
                                Ogun
                            </h5>
                        </div>
                    </a>
                    <div id="Ogun" class="collapse" role="tabpanel" aria-labelledby="West2">
                        <div class="card-block">
                            <div class="row justify-content-around">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Abeokuta (Branch Office)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>22, Quarry Road, Old Savannah Building, Abeokuta.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Olubunmi Akinrolabu <br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> o-akinrolabu@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995916, 08034343937<br>
                                </div>
                            </div>
                            <div class="row justify-content-around">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Ota (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>United Bank for African (UBA) Plc, KM 91 Idiroko Road, Ota.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Segun Adefokun <br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> s-adefokun@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 08090217889<br>
                                </div>
                            </div>
                            <div class="row justify-content-around">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Sagamu (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>143, Akarigbo Road, Ijoku, Sagamu.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Adegbuyi Adenuga <br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> a-adenuga@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 08090217890<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#Ondo" aria-expanded="false" aria-controls="Ondo">
                        <div class="card-header" role="tab" id="West7">
                            <h5 class="mb-0">
                                Ondo
                            </h5>
                        </div>
                    </a>
                    <div id="Ondo" class="collapse" role="tabpanel" aria-labelledby="West7">
                        <div class="card-block">
                            <div class="row justify-content-around">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Akure (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>NACRDB Building, Beside Bank of Industry, Bishop Fagun Road, Alagabka, Akure.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Adeboboye Bobola<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> a-Adeboboye@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096998486, 07033301948<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#Osun" aria-expanded="false" aria-controls="Osun">
                        <div class="card-header" role="tab" id="West4">
                            <h5 class="mb-0">
                                Osun
                            </h5>
                        </div>
                    </a>
                    <div id="Osun" class="collapse" role="tabpanel" aria-labelledby="West3">
                        <div class="card-block">
                            <div class="row justify-content-around">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Oshogbo (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>Moye House, Adjacent Zenith Bank, KM2 gbongan Road, Osogbo.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Ademola Adio<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> a-adio@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096998488, 08035616372<br>
                                </div>
                            </div>
                            <div class="row justify-content-around">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Ile Ife (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>UBA OAU Branch, Ile Ife.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Bukola Fasasi<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> b-fasasi@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 0909665046<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#Oyo" aria-expanded="false" aria-controls="Oyo">
                        <div class="card-header" role="tab" id="West3">
                            <h5 class="mb-0">
                                Oyo
                            </h5>
                        </div>
                    </a>
                    <div id="Oyo" class="collapse" role="tabpanel" aria-labelledby="West3">
                        <div class="card-block">
                            <div class="row justify-content-around">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Ibadan (Branch Office)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>Leadway House, 25B Mogaji Are Road, Iyaganku, GRA, Off Moshood Abiola Way, Ibadan.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Aderemi Ogunlaja<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> a-ogunlaja@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096998478, 08023195689<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Eastern Region -->
        <div class="tab-pane fade col-12" role="tabpanel" id="east">
            <div id="accordion2" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#abia" aria-expanded="true" aria-controls="abia">
                        <div class="card-header" role="tab" id="East1">
                            <h5 class="mb-0">
                                Abia
                            </h5>
                        </div>
                    </a>
                    <div id="abia" class="collapse show" role="tabpanel" aria-labelledby="East1">
                        <div class="card-block">
                            <div class="row justify-content-around">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Umuahia (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>United Bank for African(UBA)Plc, Factory Road Branch,Umuahia.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Uzoma Uchendu<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> u-uzona@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995059, 08023174478<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#anam" aria-expanded="false" aria-controls="anam">
                        <div class="card-header" role="tab" id="East3">
                            <h5 class="mb-0">
                                Anambra
                            </h5>
                        </div>
                    </a>
                    <div id="anam" class="collapse" role="tabpanel" aria-labelledby="East3">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Awka (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>Appeal Plaza, 50 Aguiyi Street, Off Aroma Junction, Awka.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Fortune Obi<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> f-obi@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995069, 08062682368<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#enugu" aria-expanded="false" aria-controls="enugu">
                        <div class="card-header" role="tab" id="East2">
                            <h5 class="mb-0">
                                Enugu
                            </h5>
                        </div>
                    </a>
                    <div id="enugu" class="collapse" role="tabpanel" aria-labelledby="East2">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Enugu (Branch Office)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>1st Floor, Akalaka House, 127/129 Chime Avenue, New Haven, Enugu.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Uchendu Uzoma<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> u-uzona@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995059, 08023174478<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#imo" aria-expanded="false" aria-controls="imo">
                        <div class="card-header" role="tab" id="East4">
                            <h5 class="mb-0">
                                Imo
                            </h5>
                        </div>
                    </a>
                    <div id="imo" class="collapse" role="tabpanel" aria-labelledby="East4">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Owerri (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>3 Assumpta Avenue, Bank Road, Owerri.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Evans Agugoesi<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> e-agugoesi@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995068, 08064727086<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Southern Region -->
        <div class="tab-pane fade col-12" role="tabpanel" id="south">
            <div id="accordion3" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <a data-toggle="collapse" data-parent="#accordion3" href="#akwa" aria-expanded="true" aria-controls="akwa">
                        <div class="card-header" role="tab" id="South3">
                            <h5 class="mb-0">
                                Akwa-Ibom
                            </h5>
                        </div>
                    </a>
                    <div id="akwa" class="collapse show" role="tabpanel" aria-labelledby="South3">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Uyo (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>140 Atiku Abubakar Way, Uyo.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Christopher Martins Ubong<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> u-christopher@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995061, 08038570245<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#bay" aria-expanded="false" aria-controls="bay">
                        <div class="card-header" role="tab" id="South4">
                            <h5 class="mb-0">
                                Bayelsa
                            </h5>
                        </div>
                    </a>
                    <div id="bay" class="collapse" role="tabpanel" aria-labelledby="South4">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Yenagoa (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>Creek Plaza, Imgbi Junction, Opp Spring Bank Amarata, Mbiama-Yenagoa Road.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Stephen Owolabi<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> s-owolabi@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995066, 08136774655<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#cross" aria-expanded="false" aria-controls="cross">
                        <div class="card-header" role="tab" id="South1">
                            <h5 class="mb-0">
                                Cross River
                            </h5>
                        </div>
                    </a>
                    <div id="cross" class="collapse" role="tabpanel" aria-labelledby="South1">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Calabar (Branch Office)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>141, Ndidem Usang Iso, Marian Road, Calabar.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Tunde Osisanya<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> t-osisanya@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995054, 08095401838<br>
                                </div>
                            </div>
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Obudu (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>First Bank, 35 Calabar Road, Obudu.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Enangha Ibingha<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> e-ibingha@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995056, 08110972616<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#delta" aria-expanded="false" aria-controls="delta">
                        <div class="card-header" role="tab" id="South5">
                            <h5 class="mb-0">
                                Delta
                            </h5>
                        </div>
                    </a>
                    <div id="delta" class="collapse" role="tabpanel" aria-labelledby="South5">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Warri (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>60 Effurun/Sapele Road, Opposite Glo Office, Warri.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Ugochukwu Arinze<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> u-arinze@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995064, 08036127415<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#edo" aria-expanded="false" aria-controls="edo">
                        <div class="card-header" role="tab" id="South2">
                            <h5 class="mb-0">
                                Edo
                            </h5>
                        </div>
                    </a>
                    <div id="edo" class="collapse" role="tabpanel" aria-labelledby="South2">
                        <div class="card-block">
                            <div class="row justify-content-around">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Benin (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>84, Akpakpava Road, Benin.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Ayemere Esekhaigbe<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> a-esekhaigbe@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995062, 08056071764<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion3" href="#river" aria-expanded="false" aria-controls="river">
                        <div class="card-header" role="tab" id="South6">
                            <h5 class="mb-0">
                                Rivers
                            </h5>
                        </div>
                    </a>
                    <div id="river" class="collapse" role="tabpanel" aria-labelledby="South6">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Port-Harcourt (Branch Office)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>8 Igbodo Street Old GRA, P.O. Box 1969, P/H.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Kingsley Dike<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> k-dike@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995047, 08068428667<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Northern Region -->
        <div class="tab-pane fade col-12" role="tabpanel" id="north">
            <div id="accordion4" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <a data-toggle="collapse" data-parent="#accordion4" href="#adam" aria-expanded="true" aria-controls="adam">
                        <div class="card-header" role="tab" id="North1">
                            <h5 class="mb-0">
                                Adamawa
                            </h5>
                        </div>
                    </a>
                    <div id="adam" class="collapse show" role="tabpanel" aria-labelledby="North1">
                        <div class="card-block">
                            <div class="row justify-content-around">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Yola (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>Sabru House, 30 Atiku Abubakar way, Yola.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Mustapha Umarlamba<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> m-umar-lamba@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 07035561983<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion4" href="#bau" aria-expanded="false" aria-controls="bau">
                        <div class="card-header" role="tab" id="North2">
                            <h5 class="mb-0">
                                Bauchi
                            </h5>
                        </div>
                    </a>
                    <div id="bau" class="collapse" role="tabpanel" aria-labelledby="North2">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Bauchi (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>United Bank for Africa(UBA) Plc, 10 Commercial Road, Bauchi.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Emmanuel Madalla<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> e-madalla@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 08090217891, 08036906954<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion4" href="#ben" aria-expanded="false" aria-controls="ben">
                        <div class="card-header" role="tab" id="North3">
                            <h5 class="mb-0">
                                Benue
                            </h5>
                        </div>
                    </a>
                    <div id="ben" class="collapse" role="tabpanel" aria-labelledby="North3">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Makurdi (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>8 Railway By-pass, Close to Zenith Bank High Level, Makurdi.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Okama Ochere<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> o-ochera@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995094, 07037863768<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion4" href="#bor" aria-expanded="false" aria-controls="bor">
                        <div class="card-header" role="tab" id="North4">
                            <h5 class="mb-0">
                                Borno
                            </h5>
                        </div>
                    </a>
                    <div id="bor" class="collapse" role="tabpanel" aria-labelledby="North4">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Maiduguri (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>Leadway Agency Office, Federal Mortgage Bank Building, Shehu Laminu Road, Maiduguri.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Ibrahim Bonet<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> i-bonet@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995084, 08022080880<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion4" href="#fct" aria-expanded="false" aria-controls="fct">
                        <div class="card-header" role="tab" id="North5">
                            <h5 class="mb-0">
                                Federal Capital Territory
                            </h5>
                        </div>
                    </a>
                    <div id="fct" class="collapse" role="tabpanel" aria-labelledby="North5">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Abuja (Branch Office)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>Plot 1061, Herbert Macaulay way,Central Business District,Abuja.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Ibrahim Bonet<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> i-bonet@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995084, 08022080880<br>
                                </div>
                            </div>
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Gwagwalada (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>Zenith Bank PLC, 1st Floor, Along Unviersity of Abuja Teaching Hospital Rd, Opp Secretariat Rd, Gwagwalada.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Obike Ukpai<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> o-ukpai@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995081, 07063457870<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion4" href="#kad" aria-expanded="false" aria-controls="kad">
                        <div class="card-header" role="tab" id="North6">
                            <h5 class="mb-0">
                                Kaduna
                            </h5>
                        </div>
                    </a>
                    <div id="kad" class="collapse" role="tabpanel" aria-labelledby="North6">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Kaduna (Branch Office)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>QQ 10 Juction Road,Opp Kaduna North LGA, P. O. Box 458, Kaduna</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person">
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Idowu Oyegunle<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> i-oyegunle@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995079, 08023740011<br>
                                </div>
                            </div>
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Zaria (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>C/O Leadway Assurance Co., Last Floor, UBA Main Building, Kaduna Road, Zaria.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person">
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Abdulrasheed Mohammed<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> a-mohammed@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995083<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion4" href="#kan" aria-expanded="false" aria-controls="kan">
                        <div class="card-header" role="tab" id="North7">
                            <h5 class="mb-0">
                                Kano
                            </h5>
                        </div>
                    </a>
                    <div id="kan" class="collapse" role="tabpanel" aria-labelledby="North7">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Kano (Branch Office)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>Fustan House, 25 Zaria Road, Gyadi-Gyadi Round About,P.O.Box 1005, Kano.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person">
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Ali Ahmad Ali<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> a-ali@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995089, 08065527685<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion4" href="#kog" aria-expanded="false" aria-controls="kog">
                        <div class="card-header" role="tab" id="North8">
                            <h5 class="mb-0">
                                Kogi
                            </h5>
                        </div>
                    </a>
                    <div id="kog" class="collapse" role="tabpanel" aria-labelledby="North8">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Lokoja (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>23 Lugard Road, Opposite Amusement Park, G.R.A, Lokoja.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person">
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Tope Oladun<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> t-oladun@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995095, 08055346173<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion4" href="#nig" aria-expanded="false" aria-controls="nig">
                        <div class="card-header" role="tab" id="North9">
                            <h5 class="mb-0">
                                Niger
                            </h5>
                        </div>
                    </a>
                    <div id="nig" class="collapse" role="tabpanel" aria-labelledby="North9">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Minna (Branch Office)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>14 MTD Paiko Road, Tunga, Minna.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Habiba Daniel<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> h-samaila@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995085, 08033207438<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion4" href="#pla" aria-expanded="false" aria-controls="pla">
                        <div class="card-header" role="tab" id="North10">
                            <h5 class="mb-0">
                                Plateau
                            </h5>
                        </div>
                    </a>
                    <div id="pla" class="collapse" role="tabpanel" aria-labelledby="North10">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Jos (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>2A, D. B Zang Way, former Ibrahim Taiwo Road, G R A, Jos.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person">
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Sikiru Bolajoko<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> s-bolajoko@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995088, 08066590278<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion4" href="#sok" aria-expanded="false" aria-controls="sok">
                        <div class="card-header" role="tab" id="North11">
                            <h5 class="mb-0">
                                Sokoto
                            </h5>
                        </div>
                    </a>
                    <div id="sok" class="collapse" role="tabpanel" aria-labelledby="North11">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Sokoto (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>7 Kano Road, Opposite Central Bank of Nigeria, P.O Box 140, Sokoto.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person">
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Hamza Lawal<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> h-lawal@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995090, 08064489844<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion4" href="#zam" aria-expanded="false" aria-controls="zam">
                        <div class="card-header" role="tab" id="North12">
                            <h5 class="mb-0">
                                Zamfara
                            </h5>
                        </div>
                    </a>
                    <div id="zam" class="collapse" role="tabpanel" aria-labelledby="North12">
                        <div class="card-block">
                            <div class="row justify-content-around ">
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                    <h6>Gusau (Service Center)</h6>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>United Bank for Africa(UBA) Plc, Cantin Daji Road, Gusau.</span><br>
                                </div>
                                <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person" >
                                    <h6>Key Personnel</h6>
                                    <i class="fa fa-user" aria-hidden="true"></i> Comfort Audu<br>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> c-audu@leadway-pensure.com<br>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09096995092, 08034582759<br>
                                </div>
                                <div class="col-10 text-center">
                                    <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>

</body>
</html>