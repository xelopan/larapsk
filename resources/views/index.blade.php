<!doctype html>
<!--
@license
Copyright (c) 2015 The Polymer Project Authors. All rights reserved.
This code may only be used under the BSD style license found at http://polymer.github.io/LICENSE.txt
The complete set of authors may be found at http://polymer.github.io/AUTHORS.txt
The complete set of contributors may be found at http://polymer.github.io/CONTRIBUTORS.txt
Code distributed by Google as part of the polymer project is also
subject to an additional IP rights grant found at http://polymer.github.io/PATENTS.txt
-->

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Polymer Starter Kit">
  <title>Polymer Starter Kit</title>

  <!-- Place favicon.ico in the `app/` directory -->

  <!-- Chrome for Android theme color -->
  <meta name="theme-color" content="#2E3AA1">

  <!-- Web Application Manifest -->
  <link rel="manifest" href="manifest.json">

  <!-- Tile color for Win8 -->
  <meta name="msapplication-TileColor" content="#3372DF">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="PSK">
  <link rel="icon" sizes="192x192" href="/images/touch/chrome-touch-icon-192x192.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Polymer Starter Kit">
  <link rel="apple-touch-icon" href="/images/touch/apple-touch-icon.png">

  <!-- Tile icon for Win8 (144x144) -->
  <meta name="msapplication-TileImage" content="/images/touch/ms-touch-icon-144x144-precomposed.png">

  <!-- build:css styles/main.css -->
  <link rel="stylesheet" href="styles/main.css">
  <!-- endbuild-->

  <!-- build:js bower_components/webcomponentsjs/webcomponents-lite.min.js -->
  <script src="bower_components/webcomponentsjs/webcomponents-lite.js"></script>
  <!-- endbuild -->

  <!-- Because this project uses vulcanize this should be your only html import
       in this file. All other imports should go in elements.html -->
  <link rel="import" href="elements/elements.html">

  <!-- For shared styles, shared-styles.html import in elements.html -->
  <style is="custom-style" include="shared-styles"></style>
</head>

<body unresolved>
  <span id="browser-sync-binding"></span>
  <template is="dom-bind" id="app">

    <paper-drawer-panel id="paperDrawerPanel">
      <!-- Drawer Scroll Header Panel -->
      <paper-scroll-header-panel drawer fixed>

        <!-- Drawer Toolbar -->
        <paper-toolbar id="drawerToolbar">
          <span class="menu-name">Menu</span>
        </paper-toolbar>

        <!-- Drawer Content -->
        <paper-menu attr-for-selected="data-route" selected="[[route]]">
          <a data-route="home" href="{{baseUrl}}">
            <iron-icon icon="home"></iron-icon>
            <span>Home</span>
          </a>

          <a data-route="users" href="{{baseUrl}}users">
            <iron-icon icon="info"></iron-icon>
            <span>Users</span>
          </a>

          <a data-route="contact" href="{{baseUrl}}contact">
            <iron-icon icon="mail"></iron-icon>
            <span>Contact</span>
          </a>

          <a data-route="books" href="{{baseUrl}}books">
            <iron-icon icon="book"></iron-icon>
            <span>Books</span>
          </a>
        </paper-menu>
      </paper-scroll-header-panel>

      <!-- Main Area -->
      <paper-scroll-header-panel main id="headerPanelMain" condenses keep-condensed-header>
        <!-- Main Toolbar -->
        <paper-toolbar id="mainToolbar" class="tall">
          <paper-icon-button id="paperToggle" icon="menu" paper-drawer-toggle></paper-icon-button>

          <span class="space"></span>

          <!-- Toolbar icons -->
          <paper-icon-button icon="refresh"></paper-icon-button>
          <paper-icon-button icon="search"></paper-icon-button>

          <!-- Application name -->
          <div class="middle middle-container">
            <div class="app-name">Polymer Starter Kit</div>
          </div>

          <!-- Application sub title -->
          <div class="bottom bottom-container">
            <div class="bottom-title">The future of the web today</div>
          </div>
        </paper-toolbar>

        <!-- Main Content -->
        <div class="content">
          <iron-pages attr-for-selected="data-route" selected="{{route}}">
            <section data-route="home">
              <paper-material elevation="1">
                <my-greeting></my-greeting>

                <p class="subhead">You now have:</p>
                <my-list></my-list>

                <p>Looking for more Web App layouts? Check out our <a href="https://github.com/PolymerElements/app-layout-templates">layouts</a> collection. You can also <a href="http://polymerelements.github.io/app-layout-templates/">preview</a> them live.</p>
              </paper-material>

              <paper-material elevation="1">
                <p>This is another card.</p>
              </paper-material>

              <paper-material elevation="1">
                <h1 id="license">License</h1>
                <p>Everything in this repo is BSD style license unless otherwise specified.</p>
                <p>Copyright (c) 2015 The Polymer Authors. All rights reserved.</p>
                <p>Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:</p>
                <ul>
                <li>Redistributions of source code must retain the above copyright
                notice, this list of conditions and the following disclaimer.</li>
                <li>Redistributions in binary form must reproduce the above
                copyright notice, this list of conditions and the following disclaimer
                in the documentation and/or other materials provided with the
                distribution.</li>
                <li>Neither the name of Google Inc. nor the names of its
                contributors may be used to endorse or promote products derived from
                this software without specific prior written permission.</li>
                </ul>
                <p>THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS &quot;AS IS&quot; AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.</p>
              </paper-material>
            </section>

            <section data-route="users">
              <paper-material elevation="1">
                <h2 class="page-title">Users</h2>
                <p>This is the users section</p>
                <a href$="{{baseUrl}}users/Addy">Addy</a><br>
                <a href$="{{baseUrl}}users/Rob">Rob</a><br>
                <a href$="{{baseUrl}}users/Chuck">Chuck</a><br>
                <a href$="{{baseUrl}}users/Sam">Sam</a>
              </paper-material>
            </section>

            <section data-route="user-info">
              <paper-material elevation="1">
                <h2 class="page-title">User: {{params.name}}</h2>
                <div>This is {{params.name}}'s section</div>
              </paper-material>
            </section>

            <section data-route="contact">
              <paper-material elevation="1">
                <h2 class="page-title">Contact</h2>
                <p>This is the contact section</p>
              </paper-material>
            </section>

            <section data-route="books">
              <paper-material elevation="1">
                <p>Hello World!</p>
              </paper-material>
            </section>
          </iron-pages>
        </div>
      </paper-scroll-header-panel>
    </paper-drawer-panel>

    <paper-toast id="toast">
      <span class="toast-hide-button" role="button" tabindex="0" onclick="app.$.toast.hide()">Ok</span>
    </paper-toast>

    <!-- Uncomment next block to enable Service Worker support (1/2) -->
    <!--
    <paper-toast id="caching-complete"
                 duration="6000"
                 text="Caching complete! This app will work offline.">
    </paper-toast>

    <platinum-sw-register auto-register
                          clients-claim
                          skip-waiting
                          base-uri="bower_components/platinum-sw/bootstrap"
                          on-service-worker-installed="displayInstalledToast">
      <platinum-sw-cache default-cache-strategy="fastest"
                         cache-config-file="cache-config.json">
      </platinum-sw-cache>
    </platinum-sw-register>
    -->

  </template>

  <!-- build:js scripts/app.js -->
  <script src="scripts/app.js"></script>
  <!-- endbuild-->
</body>

</html>
