<x-app-layout>
<div class="container-fluid">
         <div class="row">
            <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Default Radio Buttons</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-radio-1" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-radio-1">
                           <div class="card"><kbd class="bg-dark"><pre id="default-radio-buttons" class="text-white"><code>
&#x3C;div class=&#x22;radio d-inline-block mr-2&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; name=&#x22;bsradio&#x22; id=&#x22;radio1&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label for=&#x22;radio1&#x22;&#x3E;Active&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;radio d-inline-block mr-2&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; name=&#x22;bsradio&#x22; id=&#x22;radio2&#x22;&#x3E;
   &#x3C;label for=&#x22;radio2&#x22;&#x3E;Inactive&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;radio d-inline-block mr-2&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; name=&#x22;bsradio1&#x22; id=&#x22;radio3&#x22; disabled=&#x22;&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label for=&#x22;radio3&#x22;&#x3E;Active - Disabled&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;radio d-inline-block mr-2&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; name=&#x22;bsradio1&#x22; id=&#x22;radio4&#x22; disabled=&#x22;&#x22;&#x3E;
   &#x3C;label for=&#x22;radio3&#x22;&#x3E;Inactive - Disabled&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="radio d-inline-block mr-2">
                        <input type="radio" name="bsradio" id="radio1" checked="">
                        <label for="radio1">Active</label>
                     </div>
                     <div class="radio d-inline-block mr-2">
                        <input type="radio" name="bsradio" id="radio2">
                        <label for="radio2">Inactive</label>
                     </div>
                     <div class="radio d-inline-block mr-2">
                        <input type="radio" name="bsradio1" id="radio3" disabled="" checked="">
                        <label for="radio3">Active - Disabled</label>
                     </div>
                     <div class="radio d-inline-block mr-2">
                        <input type="radio" name="bsradio1" id="radio4" disabled="">
                        <label for="radio3">Inactive - Disabled</label>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Custom Colored Radio Buttons</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-radio-2" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-radio-2">
                           <div class="card"><kbd class="bg-dark"><pre id="custom-colored-radio-buttons" class="text-white"><code>
&#x3C;div class=&#x22;custom-control custom-radio custom-radio-color custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio01&#x22; name=&#x22;customRadio-11&#x22; class=&#x22;custom-control-input bg-primary&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio01&#x22;&#x3E; Primary &#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-radio custom-radio-color custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio02&#x22; name=&#x22;customRadio-11&#x22; class=&#x22;custom-control-input bg-success&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio02&#x22;&#x3E; Success &#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-radio custom-radio-color custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio03&#x22; name=&#x22;customRadio-11&#x22; class=&#x22;custom-control-input bg-danger&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio03&#x22;&#x3E; Danger &#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-radio custom-radio-color custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio04&#x22; name=&#x22;customRadio-11&#x22; class=&#x22;custom-control-input bg-warning&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio04&#x22;&#x3E; Warning &#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-radio custom-radio-color custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio05&#x22; name=&#x22;customRadio-11&#x22; class=&#x22;custom-control-input bg-dark&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio05&#x22;&#x3E; Dark &#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-radio custom-radio-color custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio06&#x22; name=&#x22;customRadio-11&#x22; class=&#x22;custom-control-input bg-info&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio06&#x22;&#x3E; Info &#x3C;/label&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio01" name="customRadio-11" class="custom-control-input bg-primary">
                        <label class="custom-control-label" for="customRadio01"> Primary </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio02" name="customRadio-11" class="custom-control-input bg-success">
                        <label class="custom-control-label" for="customRadio02"> Success </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio03" name="customRadio-11" class="custom-control-input bg-danger">
                        <label class="custom-control-label" for="customRadio03"> Danger </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio04" name="customRadio-11" class="custom-control-input bg-warning">
                        <label class="custom-control-label" for="customRadio04"> Warning </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio05" name="customRadio-11" class="custom-control-input bg-dark">
                        <label class="custom-control-label" for="customRadio05"> Dark </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio06" name="customRadio-11" class="custom-control-input bg-info">
                        <label class="custom-control-label" for="customRadio06"> Info </label>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Custom Radio Buttons</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-radio-3" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-radio-3">
                           <div class="card"><kbd class="bg-dark"><pre id="custom-radio-buttons" class="text-white"><code>
&#x3C;div class=&#x22;custom-control custom-radio custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio6&#x22; name=&#x22;customRadio-1&#x22; class=&#x22;custom-control-input&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio6&#x22;&#x3E; One &#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-radio custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio7&#x22; name=&#x22;customRadio-1&#x22; class=&#x22;custom-control-input&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio7&#x22;&#x3E; Two &#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-radio custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio8&#x22; name=&#x22;customRadio-1&#x22; class=&#x22;custom-control-input&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio8&#x22;&#x3E; Three &#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-radio custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio-8&#x22; name=&#x22;customRadio-2&#x22; class=&#x22;custom-control-input&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio-8&#x22;&#x3E; Four Checked &#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-radio custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio9&#x22; name=&#x22;customRadio-3&#x22; class=&#x22;custom-control-input&#x22; disabled=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio9&#x22;&#x3E; Five disabled&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-radio custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio10&#x22; name=&#x22;customRadio-4&#x22; class=&#x22;custom-control-input&#x22; disabled=&#x22;&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio10&#x22;&#x3E; Six Selected and  disabled&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio6" name="customRadio-1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio6"> One </label>
                     </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio7" name="customRadio-1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio7"> Two </label>
                     </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio8" name="customRadio-1" class="custom-control-input" checked="">
                        <label class="custom-control-label" for="customRadio8"> Three </label>
                     </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio-8" name="customRadio-2" class="custom-control-input" checked="">
                        <label class="custom-control-label" for="customRadio-8"> Four Checked </label>
                     </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio9" name="customRadio-3" class="custom-control-input" disabled="">
                        <label class="custom-control-label" for="customRadio9"> Five disabled</label>
                     </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio10" name="customRadio-4" class="custom-control-input" disabled="" checked="">
                        <label class="custom-control-label" for="customRadio10"> Six Selected and  disabled</label>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Colored Radio Buttons</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-radio-4" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-radio-4">
                           <div class="card"><kbd class="bg-dark"><pre id="colored-radio-buttons" class="text-white"><code>
&#x3C;div class=&#x22;custom-control custom-radio custom-radio-color-checked custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio-1&#x22; name=&#x22;customRadio-10&#x22; class=&#x22;custom-control-input bg-primary&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio-1&#x22;&#x3E; Primary &#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-radio custom-radio-color-checked custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio-2&#x22; name=&#x22;customRadio-10&#x22; class=&#x22;custom-control-input bg-success&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio-2&#x22;&#x3E; Success &#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-radio custom-radio-color-checked custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio-3&#x22; name=&#x22;customRadio-10&#x22; class=&#x22;custom-control-input bg-danger&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio-3&#x22;&#x3E; Danger &#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-radio custom-radio-color-checked custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio-4&#x22; name=&#x22;customRadio-10&#x22; class=&#x22;custom-control-input bg-warning&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio-4&#x22;&#x3E; Warning &#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-radio custom-radio-color-checked custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio-5&#x22; name=&#x22;customRadio-10&#x22; class=&#x22;custom-control-input bg-dark&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio-5&#x22;&#x3E; Dark &#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-radio custom-radio-color-checked custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;radio&#x22; id=&#x22;customRadio-6&#x22; name=&#x22;customRadio-10&#x22; class=&#x22;custom-control-input bg-info&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customRadio-6&#x22;&#x3E; Info &#x3C;/label&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-1" name="customRadio-10" class="custom-control-input bg-primary">
                        <label class="custom-control-label" for="customRadio-1"> Primary </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-2" name="customRadio-10" class="custom-control-input bg-success">
                        <label class="custom-control-label" for="customRadio-2"> Success </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-3" name="customRadio-10" class="custom-control-input bg-danger">
                        <label class="custom-control-label" for="customRadio-3"> Danger </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-4" name="customRadio-10" class="custom-control-input bg-warning">
                        <label class="custom-control-label" for="customRadio-4"> Warning </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-5" name="customRadio-10" class="custom-control-input bg-dark">
                        <label class="custom-control-label" for="customRadio-5"> Dark </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-6" name="customRadio-10" class="custom-control-input bg-info">
                        <label class="custom-control-label" for="customRadio-6"> Info </label>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</x-app-layout>
