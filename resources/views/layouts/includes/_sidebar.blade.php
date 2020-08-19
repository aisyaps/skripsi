<div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
            <li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            @role('rd|rplm|tkse|ti|programstudi')
            <li><a href="/plottingdosen" class=""><i class="lnr lnr-code"></i> <span>Plotting Dosen</span></a></li>
            @endrole
            @role('rd|rplm|tkse|ti|gjmf') 
            <li>
              <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Program Kerja</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="subPages" class="collapse ">
                <ul class="nav">
                   @role('rd')
                  <li><a href="/pkrd" class="">Rekayasa Data</a></li>
                   @endrole
                  @role('rplm')
                  <li><a href="/pkrplm" class="">Rekayasa Perangkat Lunak dan Multimedia</a></li>
                  @endrole
                  @role('tkse')
                  <li><a href="/pktkse" class="">Tata Kelola dan Sistem Enterprise</a></li>
                  @endrole
                 @role('ti')
                  <li><a href="/pkti" class="">Teknologi Informasi</a></li>
                  @endrole


                  
                 @role('rd|rplm|tkse|ti|gjmf')
                      <li><a href="/cetakpk" class="">Cetak Program Kerja</a></li>
                  
                  @endrole
                </ul>
              </div>
            </li>
            @endrole

            @role('rd|rplm|tkse|ti|gjmf')
             <li>
              <a href="#COLLAPSE2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Kontrak Manajemen</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="COLLAPSE2" class="collapse ">
                <ul class="nav">
                  @role('rd|gjmf')
                  <li><a href="/kmrd" class="">Rekayasa Data</a></li>
                  @endrole
                   @role('rplm|gjmf')
                  <li><a href="/kmrplm" class="">Rekayasa Perangkat Lunak dan Multimedia</a></li>
                  @endrole
                  @role('tkse|gjmf')
                  <li><a href="/kmtkse" class="">Tata Kelola dan Sistem Enterprise</a></li>
                  @endrole
                  @role('ti|gjmf')
                  <li><a href="/kmti" class="">Teknologi Informasi</a></li>
                  @endrole
                </ul>
              </div>
            </li>
            @endrole


             <li>
              <a href="#COLLAPSE3" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Profil</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="COLLAPSE3" class="collapse ">
                <ul class="nav">
                  <li><a href="/rd" class="">Rekayasa Data</a></li>
                  <li><a href="/rplm" class="">Rekayasa Perangkat Lunak dan Multimedia</a></li>
                  <li><a href="/tkse" class="">Tata Kelola dan Sistem Enterprise</a></li>
                  <li><a href="/ti" class="">Teknologi Informasi</a></li>
                   @role('rd|rplm|tkse|ti')
                   <li><a href="/topic" class="">Topic Interest</a></li>
                    @endrole
                </ul>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>