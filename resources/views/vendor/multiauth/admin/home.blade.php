@extends('multiauth::layouts.app') 
@section('content')

@admin('super')
<div class="container">
        <h2>SUPER</h2>
        <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim nunc faucibus a pellentesque sit amet. Varius quam quisque id diam vel quam elementum. Dolor sit amet consectetur adipiscing elit. Eu sem integer vitae justo eget magna fermentum iaculis. Leo in vitae turpis massa sed elementum. Neque convallis a cras semper. Sed augue lacus viverra vitae congue eu consequat ac felis. Ut venenatis tellus in metus. Nisi est sit amet facilisis magna etiam tempor orci. Id interdum velit laoreet id donec ultrices. Non blandit massa enim nec dui nunc mattis enim ut. Tincidunt tortor aliquam nulla facilisi cras. Viverra justo nec ultrices dui sapien eget mi proin. Congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar. Facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris. Sapien pellentesque habitant morbi tristique senectus et netus. Urna nunc id cursus metus aliquam. Ultricies mi eget mauris pharetra et ultrices neque ornare aenean. Id faucibus nisl tincidunt eget.

                In ante metus dictum at tempor commodo ullamcorper a lacus. Faucibus turpis in eu mi bibendum. Nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet. Eu turpis egestas pretium aenean pharetra. Tortor condimentum lacinia quis vel. Pellentesque habitant morbi tristique senectus et netus et. Quisque id diam vel quam elementum. Massa sed elementum tempus egestas sed sed risus pretium. Gravida cum sociis natoque penatibus et. Molestie at elementum eu facilisis sed odio morbi quis. Blandit cursus risus at ultrices mi tempus imperdiet nulla. Elementum curabitur vitae nunc sed velit dignissim sodales ut eu. Sit amet mattis vulputate enim nulla aliquet porttitor. Netus et malesuada fames ac turpis egestas sed. Congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar. In egestas erat imperdiet sed euismod nisi porta. In cursus turpis massa tincidunt dui. Lorem sed risus ultricies tristique nulla aliquet.
                </p></div>
        <div class="row">
          <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Dodaj korisnika</h5>
                          <p class="card-text">Laganica</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
          </div>
          
        </div>
      </div>

      <br><br><br><br><br><br><br>
      <hr>
      <br><br><br><br><br><br><br>

@endadmin

@admin('nastavnik')
<div class="container">
        <h2>NASTAVNIK</h2>
        <div><p> Osnovni podaci o nastavniku, ispiti koje drzi, dolazeci ispitni rokovi kao napomena </p></div>
        <div class="row">
          <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Spisak predmeta</h5>
                          <p class="card-text">Link ka strani sa listom predmeta gde se pri kliku na predmet otvara strana sa detaljima kao sto su sadrzaj predmeta, studenti koji slusaju,...</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
          </div>
          <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Spisak studentata koji su prijavili ispit</h5>
                          <p class="card-text">Ukoliko je rok uskoro</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
          </div>
          <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Izvestaj o ispitu</h5>
                          <p class="card-text">Vodi do strane gde nastavnik popunjava izvestaj o ispitu iskljucivo ukoliko je ispitni rok u toku (ili nakon roka par dana)</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
          </div>
        </div>
      </div>
@endadmin

@admin('admin')
<div class="container">
        <h2>ADMINISTRATIVNI RADNIK</h2>
        <div><p> Info o administrativnom radniku, linkovi ka stranama za dodavanje(kreiranje i unosenje osnovnih info o god upisa, ...) studenata i nastavnika
                   kao i strani za proveru pojedinacnih studenata <br> Dodavanje ispita, ispitnih rokova,
                    provera izvestaja od nastavnika, dokaza o uplati od studenata ......... </p></div>
        <div class="row">
          <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Dodaj studenta/nastavnika</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
          </div>
          <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Dodaj predmete i pridruzi ih nastavniku</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
          </div>
          <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Kontrolisi ispitni rok</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
          </div>
        </div>
        <br>
        <div class="row">
                <div class="col-sm">
                      <div class="card" style="width: 18rem;">
                              <img src="..." class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Izvestaji o ispitima od nastavnika</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                          </div>
                </div>
                <div class="col-sm">
                      <div class="card" style="width: 18rem;">
                              <img src="..." class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Evidencija uplata studenata</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                          </div>
                </div>
                <div class="col-sm">
                      <div class="card" style="width: 18rem;">
                              <img src="..." class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Ostalo</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                          </div>
                </div>
              </div>
      </div>
@endadmin
@admin('student')
<div class="container">
        <h2>STUDENT</h2>
        <div><p> Osnovni podaci studenta, link ka strani za dodavanje/izmenu osnovnih podataka<br>
                Prikaz prosecne ocene, skorasnjih ispitnih rokova, e-racunu studenta </p></div>
        <div class="row">
          <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Profilni podaci</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
          </div>
          <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Moje ocene i ispiti</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
          </div>
          <div class="col-sm">
                <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">E-racun</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
          </div>
        </div>
      </div>

@endadmin

@endsection