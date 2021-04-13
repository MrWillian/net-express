@extends('layouts.app', ['activePage' => 'dashboard', 'menuParent' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">call</i>
              </div>
              <p class="card-category">Solicitations</p>
              <h3 class="card-title">14</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-danger">warning</i>
                <a href="#pablo">Check solicitations...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">equalizer</i>
              </div>
              <p class="card-category">Website Visits</p>
              <h3 class="card-title">75.521</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i> Tracked from Google Analytics
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Revenue</p>
              <h3 class="card-title">$34,245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">date_range</i> Last 24 Hours
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-user"></i>
              </div>
              <p class="card-category">Clients</p>
              <h3 class="card-title">+245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> Just Updated |
                Last 24 Hours <i class="material-icons" style="align-self: right;">date_range</i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-text card-header-warning">
              <div class="card-text">
                <h4 class="card-title">Solicitations Stats</h4>
                <p class="card-category">Last 5 open solicitations</p>
              </div>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <tr>
                    <th>Description</th>
                    <th>Client</th>
                    <th>Data</th>
                    <th class="text-right">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Connection drop</td>
                    <td>Willian Soares</td>
                    <td>13/04/2021 08:10</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Router doesn't work</td>
                    <td>Jhonny Clark</td>
                    <td>12/04/2021 17:19</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Connection drop</td>
                    <td>Aline Costa</td>
                    <td>12/04/2021 16:55</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Without internet</td>
                    <td>Marta Andrade</td>
                    <td>12/04/2021 16:34</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header card-header-text card-header-warning">
              <div class="card-text">
                <h4 class="card-title">Installations Stats</h4>
                <p class="card-category">Last 5 open Installations</p>
              </div>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <tr>
                    <th>Plan</th>
                    <th>Client</th>
                    <th>Data</th>
                    <th class="text-right">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Plan 1</td>
                    <td>Frederico Silva</td>
                    <td>13/04/2021 08:32</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Plan 3</td>
                    <td>João Santos</td>
                    <td>12/04/2021 17:26</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-text card-header-rose">
              <div class="card-text">
                <h4 class="card-title">Clients Map</h4>
              </div>
            </div>
            <div class="card-body ">
              <h4 class="card-title"></h4>
              <div id="customSkinMap" class="map" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" aria-label="Map" aria-roledescription="map" role="group" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 987; transform: matrix(1, 0, 0, 1, -108, -244);"><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="width: 27px; height: 43px; overflow: hidden; position: absolute; left: -14px; top: -43px; z-index: 0;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; z-index: 987; transform: matrix(1, 0, 0, 1, -108, -244);"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 987; transform: matrix(1, 0, 0, 1, -108, -244);"><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2412!3i3079!4i256!2m3!1e0!2sm!3i553274976!2m3!1e2!6m1!3e5!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCbVUXb1ZCXDbVu5V-0AjxpikPl6jmgpbQ&amp;token=24217" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2411!3i3079!4i256!2m3!1e0!2sm!3i553274976!2m3!1e2!6m1!3e5!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCbVUXb1ZCXDbVu5V-0AjxpikPl6jmgpbQ&amp;token=26181" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2411!3i3078!4i256!2m3!1e0!2sm!3i553274976!2m3!1e2!6m1!3e5!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCbVUXb1ZCXDbVu5V-0AjxpikPl6jmgpbQ&amp;token=56409" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2412!3i3078!4i256!2m3!1e0!2sm!3i553274976!2m3!1e2!6m1!3e5!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCbVUXb1ZCXDbVu5V-0AjxpikPl6jmgpbQ&amp;token=54445" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2413!3i3078!4i256!2m3!1e0!2sm!3i553274976!2m3!1e2!6m1!3e5!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCbVUXb1ZCXDbVu5V-0AjxpikPl6jmgpbQ&amp;token=52481" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i2413!3i3079!4i256!2m3!1e0!2sm!3i553274976!2m3!1e2!6m1!3e5!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyCbVUXb1ZCXDbVu5V-0AjxpikPl6jmgpbQ&amp;token=22253" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div aria-label="Custom Skin &amp; Settings Map!" role="img" tabindex="-1" style="width: 27px; height: 43px; overflow: hidden; position: absolute; left: -14px; top: -43px; z-index: 0;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" usemap="#gmimap1" style="width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"><map name="gmimap1" id="gmimap1"><area log="miw" coords="13.5,0,4,3.75,0,13.5,13.5,43,27,13.5,23,3.75" shape="poly" tabindex="-1" title="Custom Skin &amp; Settings Map!" style="cursor: pointer; touch-action: none;"></map></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div></div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe><div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div><div></div><div></div><div></div><div></div><div><button draggable="false" title="Ativar a visualização em tela cheia" aria-label="Ativar a visualização em tela cheia" type="button" style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px;"></button></div><div></div><div></div><div></div><div></div><div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="40" controlheight="81" style="margin: 10px; user-select: none; position: absolute; bottom: 95px; right: 40px;"><div class="gmnoprint" controlwidth="40" controlheight="81" style="position: absolute; left: 0px; top: 0px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;"><button draggable="false" title="Aumentar o zoom" aria-label="Aumentar o zoom" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" title="Diminuir o zoom" aria-label="Diminuir o zoom" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button></div></div></div></div><div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=40.748817,-73.985428&amp;z=13&amp;t=m&amp;hl=pt-BR&amp;gl=US&amp;mapclient=apiv3" title="Abrir esta área no Google Maps (abre uma nova janela)" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div></div><div></div><div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 191px; bottom: 0px; width: 82px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" title="Dados do mapa" aria-label="Dados do mapa" type="button" style="background: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit;">Dados do mapa</button><span style="display: none;">Dados cartográficos ©2021 Google</span></div></div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 112px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/pt-BR_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Termos de Uso</a></div></div><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Informar erros no mapa ou nas imagens para o Google" dir="ltr" href="https://www.google.com/maps/@40.748817,-73.985428,13z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none; position: relative;">Informar erro no mapa</a></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Dados cartográficos ©2021 Google</div></div></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 293px; height: 180px; position: absolute; left: 5px; top: 50px;"><div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">Dados do mapa</div><div style="font-size: 13px;">Dados cartográficos ©2021 Google</div><button draggable="false" title="Fechar" aria-label="Fechar" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22/%3E%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22/%3E%3C/svg%3E" alt="" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button></div></div></div></div>
            </div>
          </div>
        </div>
      </div>
      <!-- <button type="button" class="btn btn-round btn-default dropdown-toggle btn-link" data-toggle="dropdown">
  7 days
  </button> -->
      <div class="row">
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-rose" data-header-animation="true">
              <div class="ct-chart" id="websiteViewsChart"></div>
            </div>
            <div class="card-body">
              <div class="card-actions">
                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                  <i class="material-icons">build</i> Fix Header!
                </button>
                <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                  <i class="material-icons">refresh</i>
                </button>
                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                  <i class="material-icons">edit</i>
                </button>
              </div>
              <h4 class="card-title">Website Views</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-success" data-header-animation="true">
              <div class="ct-chart" id="dailySalesChart"></div>
            </div>
            <div class="card-body">
              <div class="card-actions">
                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                  <i class="material-icons">build</i> Fix Header!
                </button>
                <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                  <i class="material-icons">refresh</i>
                </button>
                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                  <i class="material-icons">edit</i>
                </button>
              </div>
              <h4 class="card-title">Daily Sales</h4>
              <p class="card-category">
                <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> updated 4 minutes ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-info" data-header-animation="true">
              <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-body">
              <div class="card-actions">
                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                  <i class="material-icons">build</i> Fix Header!
                </button>
                <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                  <i class="material-icons">refresh</i>
                </button>
                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                  <i class="material-icons">edit</i>
                </button>
              </div>
              <h4 class="card-title">Completed Tasks</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

      md.initVectorMap();

    });
  </script>
@endpush